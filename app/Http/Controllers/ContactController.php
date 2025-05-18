<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\ContactRequest;
use App\Mail\ContactFormMail;
use App\Mail\ContactConfirmationMail;

class ContactController extends Controller
{
    /**
     * Display a listing of the contacts (Admin view).
     */
    public function index(): View
    {
        $contacts = Contact::latest()
            ->paginate(15);

        $unreadCount = Contact::unread()->count();

        return view('admin.contacts.index', compact('contacts', 'unreadCount'));
    }

    /**
     * Show the form for creating a new contact message.
     */
    public function create(): View
    {
        return view('contacts.create');
    }

    /**
     * Store a newly created contact in storage.
     */
    public function store(ContactRequest $request): RedirectResponse
    {
        try {
            // Create the contact
            $contact = Contact::create($request->validated());

            // Send email notification to admin
            Mail::to( 'info.wibook@gmail.com')
                ->send(new ContactFormMail($contact));

            // Send confirmation email to user
            Mail::to($contact->email)
                ->send(new ContactConfirmationMail($contact));

                

            return redirect()->back()
                ->with('success', 'Thank you for your message! We will get back to you soon.');

        } catch (\Exception $e) {
            \Log::error('Contact form submission failed: ' . $e->getMessage());
            
            return redirect()->back()
                ->withInput()
                ->with('error', 'Sorry, there was an error sending your message. Please try again.');
        }
    }

    /**
     * Display the specified contact.
     */
    public function show(Contact $contact): View
    {
        // Mark as read when viewed
        if (!$contact->is_read) {
            $contact->markAsRead();
        }

        return view('admin.contacts.show', compact('contact'));
    }

    /**
     * Mark contact as read.
     */
    public function markAsRead(Contact $contact): RedirectResponse
    {
        $contact->markAsRead();

        return redirect()->back()
            ->with('success', 'Contact marked as read.');
    }

    /**
     * Mark contact as unread.
     */
    public function markAsUnread(Contact $contact): RedirectResponse
    {
        $contact->markAsUnread();

        return redirect()->back()
            ->with('success', 'Contact marked as unread.');
    }

    /**
     * Remove the specified contact from storage.
     */
    public function destroy(Contact $contact): RedirectResponse
    {
        $contact->delete();

        return redirect()->route('admin.contacts.index')
            ->with('success', 'Contact deleted successfully.');
    }

    /**
     * Bulk actions for multiple contacts.
     */
    public function bulkAction(Request $request): RedirectResponse
    {
        $request->validate([
            'contacts' => 'required|array',
            'contacts.*' => 'exists:contacts,id',
            'action' => 'required|in:read,unread,delete'
        ]);

        $contactIds = $request->contacts;
        $action = $request->action;
        $count = count($contactIds);

        switch ($action) {
            case 'read':
                Contact::whereIn('id', $contactIds)->update([
                    'is_read' => true,
                    'read_at' => now()
                ]);
                $message = "{$count} contacts marked as read.";
                break;

            case 'unread':
                Contact::whereIn('id', $contactIds)->update([
                    'is_read' => false,
                    'read_at' => null
                ]);
                $message = "{$count} contacts marked as unread.";
                break;

            case 'delete':
                Contact::whereIn('id', $contactIds)->delete();
                $message = "{$count} contacts deleted successfully.";
                break;
        }

        return redirect()->back()->with('success', $message);
    }

    /**
     * Export contacts to CSV.
     */
    public function export()
    {
        $contacts = Contact::latest()->get();

        $headers = [
            'Content-Type' => 'text/csv',
            'Content-Disposition' => 'attachment; filename="contacts-' . date('Y-m-d') . '.csv"',
        ];

        $callback = function() use ($contacts) {
            $file = fopen('php://output', 'w');
            
            // Add CSV headers
            fputcsv($file, [
                'ID',
                'First Name',
                'Last Name',
                'Email',
                'Company',
                'Message',
                'Status',
                'Submitted At',
                'Read At'
            ]);

            // Add data rows
            foreach ($contacts as $contact) {
                fputcsv($file, [
                    $contact->id,
                    $contact->first_name,
                    $contact->last_name,
                    $contact->email,
                    $contact->company ?: 'N/A',
                    $contact->message,
                    $contact->is_read ? 'Read' : 'Unread',
                    $contact->created_at->format('Y-m-d H:i:s'),
                    $contact->read_at ? $contact->read_at->format('Y-m-d H:i:s') : 'Not read'
                ]);
            }

            fclose($file);
        };

        return response()->stream($callback, 200, $headers);
    }
    
}
