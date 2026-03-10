<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f5f5f5;
        }
        .email-container {
            background: white;
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
        .header {
            background: linear-gradient(135deg, #00057b 0%, #000340 100%);
            color: white;
            padding: 40px 30px;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 28px;
            font-weight: bold;
        }
        .header p {
            margin: 10px 0 0 0;
            opacity: 0.9;
            font-size: 14px;
        }
        .content {
            padding: 30px;
        }
        .intro {
            background: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 30px;
            border-left: 4px solid #ffc400;
        }
        .field {
            margin-bottom: 20px;
            padding: 18px;
            background: #f9fafb;
            border-radius: 8px;
            border-left: 4px solid #ffc400;
        }
        .field-label {
            font-weight: bold;
            color: #00057b;
            font-size: 11px;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 8px;
            display: block;
        }
        .field-value {
            color: #333;
            font-size: 16px;
            line-height: 1.6;
        }
        .field-value a {
            color: #00057b;
            text-decoration: none;
            font-weight: 500;
        }
        .field-value a:hover {
            text-decoration: underline;
        }
        .message-box {
            background: white;
            border: 2px solid #e5e7eb;
            border-radius: 8px;
            padding: 20px;
            margin-top: 10px;
        }
        .footer {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 2px solid #e5e7eb;
            text-align: center;
            color: #6b7280;
            font-size: 13px;
        }
        .footer p {
            margin: 5px 0;
        }
        .badge {
            display: inline-block;
            background: #ffc400;
            color: #00057b;
            padding: 6px 12px;
            border-radius: 6px;
            font-size: 12px;
            font-weight: bold;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="header">
            <h1>🎯 New Contact Form Submission</h1>
            <p>CrownCity Technologies Website</p>
        </div>
        
        <div class="content">
            <div class="intro">
                <strong>📬 You have received a new inquiry!</strong>
                <p style="margin: 5px 0 0 0; color: #6b7280;">A potential client has reached out through your website contact form.</p>
            </div>
            
            <div class="field">
                <span class="field-label">👤 Full Name</span>
                <div class="field-value">{{ $data['name'] }}</div>
            </div>

            <div class="field">
                <span class="field-label">📧 Email Address</span>
                <div class="field-value">
                    <a href="mailto:{{ $data['email'] }}">{{ $data['email'] }}</a>
                </div>
            </div>

            @if(!empty($data['phone']))
            <div class="field">
                <span class="field-label">📱 Phone Number</span>
                <div class="field-value">
                    <a href="tel:{{ $data['phone'] }}">{{ $data['phone'] }}</a>
                </div>
            </div>
            @endif

            @if(!empty($data['company']))
            <div class="field">
                <span class="field-label">🏢 Company</span>
                <div class="field-value">{{ $data['company'] }}</div>
            </div>
            @endif

            <div class="field">
                <span class="field-label">🎯 Service Interested In</span>
                <div class="field-value">
                    <span class="badge">{{ $data['service'] }}</span>
                </div>
            </div>

            <div class="field">
                <span class="field-label">💬 Project Details</span>
                <div class="message-box">
                    <div class="field-value" style="white-space: pre-wrap;">{{ $data['message'] }}</div>
                </div>
            </div>

            <div class="footer">
                <p><strong>⏰ Submitted:</strong> {{ now()->format('F j, Y - g:i A') }}</p>
                <p style="margin-top: 15px; color: #9ca3af;">This email was sent from the CrownCity Technologies contact form</p>
            </div>
        </div>
    </div>
</body>
</html>