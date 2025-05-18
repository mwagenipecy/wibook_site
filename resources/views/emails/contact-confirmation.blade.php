<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thank you for contacting Wibook Tech</title>
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
        }
        .logo {
            font-size: 24px;
            font-weight: bold;
            color: #10b981;
            margin-bottom: 10px;
        }
        .title {
            font-size: 22px;
            color: #333;
            margin: 0;
        }
        .content {
            margin-bottom: 30px;
        }
        .highlight-box {
            background-color: #f0fdf4;
            border-left: 4px solid #10b981;
            padding: 20px;
            margin: 20px 0;
            border-radius: 0 8px 8px 0;
        }
        .contact-summary {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            margin: 20px 0;
        }
        .summary-item {
            margin-bottom: 10px;
        }
        .summary-label {
            font-weight: bold;
            color: #555;
        }
        .summary-value {
            color: #333;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #e5e7eb;
            color: #6b7280;
            font-size: 14px;
        }
        .social-links {
            text-align: center;
            margin: 25px 0;
        }
        .social-links a {
            display: inline-block;
            margin: 0 10px;
            color: #10b981;
            text-decoration: none;
        }
        .social-links a:hover {
            color: #059669;
        }
        .btn {
            display: inline-block;
            padding: 12px 24px;
            background-color: #10b981;
            color: white;
            text-decoration: none;
            border-radius: 6px;
            font-weight: bold;
            margin: 15px 0;
        }
        .btn:hover {
            background-color: #059669;
        }
        .products-list {
            list-style: none;
            padding: 0;
            margin: 15px 0;
        }
        .products-list li {
            padding: 8px 0;
            border-bottom: 1px solid #e5e7eb;
        }
        .products-list li:last-child {
            border-bottom: none;
        }
        .products-list strong {
            color: #10b981;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="header">
            <div class="logo">Wibook Tech</div>
            <h1 class="title">Thank you for reaching out!</h1>
        </div>

        <div class="content">
            <p>Dear {{ $contact->first_name }},</p>

            <div class="highlight-box">
                <p><strong>We've received your message and will get back to you within 24 hours.</strong></p>
            </div>

            <p>Your inquiry is important to us, and our team is already reviewing your message. We appreciate you taking the time to contact Wibook Tech.</p>

            <div class="contact-summary">
                <h3 style="margin-top: 0; color: #333;">Your submission details:</h3>
                <div class="summary-item">
                    <span class="summary-label">Submitted on:</span>
                    <span class="summary-value">{{ $contact->created_at->format('M j, Y \a\t g:i A') }}</span>
                </div>
                @if($contact->company)
                <div class="summary-item">
                    <span class="summary-label">Company:</span>
                    <span class="summary-value">{{ $contact->company }}</span>
                </div>
                @endif
                <div class="summary-item">
                    <span class="summary-label">Reference ID:</span>
                    <span class="summary-value">#{{ $contact->id }}</span>
                </div>
            </div>

            <h3>While you wait, check out our free products:</h3>
            <ul class="products-list">
                <li><strong>QR Code Generator</strong> - Create QR codes for phone, email, text, WiFi, and URLs</li>
                <li><strong>Business & Personal Record Keeper</strong> - Track expenses and income with collaboration features</li>
            </ul>

            <center>
                <a href="{{ url('/') }}" class="btn">Visit Our Website</a>
            </center>

            <p>If you have any urgent questions, you can reply directly to this email or contact us at <a href="mailto:info.wibook@gmail.com">info.wibook@gmail.com</a>.</p>
        </div>

        <div class="social-links">
            <p>Follow us on social media:</p>
            <a href="#" title="LinkedIn">LinkedIn</a> |
            <a href="#" title="Twitter">Twitter</a> |
            <a href="#" title="Facebook">Facebook</a>
        </div>

        <div class="footer">
            <p><strong>Wibook Tech</strong><br>
            Professional Software Solutions</p>
            <p style="margin-top: 15px; font-size: 12px;">
                This is an automated confirmation email. Please do not reply to this email address. 
                For support, contact us at <a href="mailto:info.wibook@gmail.com">info.wibook@gmail.com</a>
            </p>
        </div>
    </div>
</body>
</html>