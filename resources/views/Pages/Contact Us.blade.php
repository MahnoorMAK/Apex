<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        
        .contact-container {
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            width: 400px;
        }
        
        h2 {
            text-align: center;
            color: #333;
            margin-bottom: 10px;
        } 
        .subtitle {
            text-align: center;
            color: #777;
            font-size: 14px;
            margin-bottom: 25px;
        }
        
        .form-group {
            margin-bottom: 15px;
        }
        
        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
            font-weight: bold;
        }
        
        input[type="text"],
        input[type="email"],
        textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
            font-size: 14px;
            font-family: Arial, sans-serif;
        }
        
        textarea {
            height: 120px;
            resize: vertical;
        }
        
        input:focus,
        textarea:focus {
            outline: none;
            border-color: #4CAF50;
        }
        
        button {
            width: 100%;
            padding: 12px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            font-size: 16px;
            cursor: pointer;
        }
        
        button:hover {
            background-color: #45a049;
        }
        
        .error {
            color: #d32f2f;
            background: #ffebee;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 15px;
            font-size: 14px;
        }
        
        .success {
            color: #2e7d32;
            background: #e8f5e9;
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 15px;
            font-size: 14px;
        }
        
        .back-link {
            text-align: center;
            margin-top: 15px;
            font-size: 14px;
        }
        
        .back-link a {
            color: #4CAF50;
            text-decoration: none;
        }
        
        .back-link a:hover {
            text-decoration: underline;
        }
        
        .contact-info {
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #eee;
        }
        
        .contact-info p {
            margin: 5px 0;
            color: #666;
            font-size: 14px;
        }
        
        .contact-info i {
            display: inline-block;
            width: 20px;
        }
    </style>
</head>
<body>
    <div class="contact-container">
        <h2>Contact Us</h2>
        <p class="subtitle">We'd love to hear from you!</p>
        
        <!-- Show error messages -->
        @if($errors->any())
            <div class="error">
                @foreach($errors->all() as $error)
                    {{ $error }}<br>
                @endforeach
            </div>
        @endif
        
        <!-- Show success message -->
        @if(session('success'))
            <div class="success">
                {{ session('success') }}
            </div>
        @endif
        
        <!-- Contact Form -->
        <form action="/contact" method="POST">
            @csrf
            
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your name" 
                       value="{{ old('name') }}" required>
            </div>
            
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" 
                       value="{{ old('email') }}" required>
            </div>
            
            <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" id="subject" name="subject" placeholder="Enter subject" 
                       value="{{ old('subject') }}" required>
            </div>
            
            <div class="form-group">
                <label for="message">Message</label>
                <textarea id="message" name="message" placeholder="Write your message here..." required>{{ old('message') }}</textarea>
            </div>
            
            <button type="submit">Send Message</button>
        </form>
        
        <div class="contact-info">
            <p><strong>📍 Address:</strong> 123 Main Street, City, Country</p>
            <p><strong>📞 Phone:</strong> +1 234 567 8900</p>
            <p><strong>✉️ Email:</strong> info@example.com</p>
        </div>
        
        <div class="back-link">
            <a href="/">← Back to Home</a>
        </div>
    </div>
</body>
</html>