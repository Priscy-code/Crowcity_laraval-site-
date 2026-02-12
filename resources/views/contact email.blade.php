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
        }
        .header {
            background: linear-gradient(135deg, #00057b 0%, #000340 100%);
            color: white;
            padding: 30px;
            border-radius: 10px 10px 0 0;
            text-align: center;
        }
        .header h1 {
            margin: 0;
            font-size: 24px;
        }
        .content {
            background: #f9f9f9;
            padding: 30px;
            border-radius: 0 0 10px 10px;
        }
        .field {
            margin-bottom: 20px;
            padding: 15px;
            background: white;
            border-radius: 8px;
            border-left: 4px solid #ffc400;
        }
        .field-label {
            font-weight: bold;
            color: #00057b;
            font-size: 12px;
            text-transform: uppercase;
            margin-bottom: 5px;
        }
        .field-value {
            color: #333;
            font-size: 16px;
        }
        .footer {
            margin-top: 30px;
            text-align: center;
            color: #666;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>🎯 New Contact Form Submission</h1>
        <p style="margin: 10px 0 0 0; opacity: 0.9;">CrownCity Website</p>
    </div>
    
    <div class="content">
        <p style="margin-top: 0;">You have received a new contact form submission:</p>
        
        <div class="field">
            <div class="field-label">Full Name</div>
            <div class="field-value">{{ $data['name'] }}</div>
        </div>

        <div class="field">
            <div class="field-label">Email Address</div>
            <div class="field-value">
                <a href="mailto:{{ $data['email'] }}" style="color: #00057b; text-decoration: none;">
                    {{ $data['email'] }}
                </a>
            </div>
        </div>

        @if(!empty($data['phone']))
        <div class="field">
            <div class="field-label">Phone Number</div>
            <div class="field-value">
                <a href="tel:{{ $data['phone'] }}" style="color: #00057b; text-decoration: none;">
                    {{ $data['phone'] }}
                </a>
            </div>
        </div>
        @endif

        @if(!empty($data['company']))
        <div class="field">
            <div class="field-label">Company</div>
            <div class="field-value">{{ $data['company'] }}</div>
        </div>
        @endif

        <div class="field">
            <div class="field-label">Service Interested In</div>
            <div class="field-value">{{ $data['service'] }}</div>
        </div>

        <div class="field">
            <div class="field-label">Project Details</div>
            <div class="field-value" style="white-space: pre-wrap;">{{ $data['message'] }}</div>
        </div>

        <div class="footer">
            <p>This email was sent from the CrownCity contact form.</p>
            <p>Submitted at: {{ now()->format('F j, Y - g:i A') }}</p>
        </div>
    </div>
</body>
</html>