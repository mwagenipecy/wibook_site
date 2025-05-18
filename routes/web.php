<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/login',function(){

    return redirect()->to('/');
});

Route::get('/register',function(){

    return redirect()->to('/');
});




Route::get('/forgot-password',function(){

    return redirect()->to('/');
})->name('login');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::group(['prefix' => 'contact'], function () {
    Route::get('/', [ContactController::class, 'create'])->name('contact.create');
    Route::post('/', [ContactController::class, 'store'])->name('contact.store');
});



Route::group(['prefix' => 'contacts'], function () {
    Route::get('/', [ContactController::class, 'index'])->name('admin.contacts.index');
    Route::get('/{contact}', [ContactController::class, 'show'])->name('admin.contacts.show');
    Route::patch('/{contact}/read', [ContactController::class, 'markAsRead'])->name('admin.contacts.read');
    Route::patch('/{contact}/unread', [ContactController::class, 'markAsUnread'])->name('admin.contacts.unread');
    Route::delete('/{contact}', [ContactController::class, 'destroy'])->name('admin.contacts.destroy');
    Route::post('/bulk-action', [ContactController::class, 'bulkAction'])->name('admin.contacts.bulk');
    Route::get('/export/csv', [ContactController::class, 'export'])->name('admin.contacts.export');
});


