<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>New Contact Form Submission</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f8f9fa;
        }
        .email-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
            padding-bottom: 20px;
            border-bottom: 2px solid #10b981;
        }
        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #10b981;
            margin-bottom: 10px;
        }
        .title {
            font-size: 20px;
            color: #333;
            margin: 0;
        }
        .content {
            margin-bottom: 30px;
        }
        .contact-details {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            margin: 20px 0;
        }
        .detail-row {
            display: flex;
            margin-bottom: 15px;
            align-items: flex-start;
        }
        .detail-label {
            font-weight: bold;
            min-width: 120px;
            color: #555;
        }
        .detail-value {
            flex: 1;
            color: #333;
        }
        .message-box {
            background-color: #ffffff;
            border: 1px solid #e5e7eb;
            border-radius: 6px;
            padding: 15px;
            margin-top: 10px;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #e5e7eb;
            color: #6b7280;
            font-size: 14px;
        }
        .action-buttons {
            text-align: center;
            margin: 25px 0;
        }
        .btn {
            display: inline-block;
            padding: 12px 24px;
            margin: 0 10px;
            text-decoration: none;
            border-radius: 6px;
            font-weight: bold;
            transition: background-color 0.3s;
        }
        .btn-primary {
            background-color: #10b981;
            color: white;
        }
        .btn-primary:hover {
            background-color: #059669;
        }
        .btn-secondary {
            background-color: #6b7280;
            color: white;
        }
        .btn-secondary:hover {
            background-color: #4b5563;
        }
        .timestamp {
            font-size: 12px;
            color: #9ca3af;
            margin-top: 10px;
        }
        @media (max-width: 600px) {
            .detail-row {
                flex-direction: column;
            }
            .detail-label {
                min-width: auto;
                margin-bottom: 5px;
            }
            .btn {
                display: block;
                margin: 10px 0;
            }
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="header">
            <div class="logo">Wibook Tech</div>
            <h1 class="title">New Contact Form Submission</h1>
        </div>

        <div class="content">
            <p>You have received a new message through your website contact form.</p>

            <div class="contact-details">
                <div class="detail-row">
                    <span class="detail-label">Name:</span>
                    <span class="detail-value">{{ $contact->full_name }}</span>
                </div>
                <div class="detail-row">
                    <span class="detail-label">Email:</span>
                    <span class="detail-value">{{ $contact->email }}</span>
                </div>
                @if($contact->company)
                <div class="detail-row">
                    <span class="detail-label">Company:</span>
                    <span class="detail-value">{{ $contact->company }}</span>
                </div>
                @endif
                <div class="detail-row">
                    <span class="detail-label">Submitted:</span>
                    <span class="detail-value">{{ $contact->created_at->format('M j, Y \a\t g:i A') }}</span>
                </div>
            </div>

            <div class="detail-row">
                <span class="detail-label">Message:</span>
            </div>
            <div class="message-box">
                {{ $contact->message }}
            </div>
        </div>

        <div class="action-buttons">
            <a href="{{ route('admin.contacts.show', $contact) }}" class="btn btn-primary">
                View in Admin Panel
            </a>
            <a href="mailto:{{ $contact->email }}?subject=Re: Your inquiry to Wibook Tech" class="btn btn-secondary">
                Reply to {{ $contact->first_name }}
            </a>
        </div>

        <div class="footer">
            <p>This email was automatically generated from your Wibook Tech contact form.</p>
            <p class="timestamp">Contact ID: #{{ $contact->id }}</p>
        </div>
    </div>
</body>
</html>