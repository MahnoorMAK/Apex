<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        
        /* Navigation Bar */
        .navbar {
            background: #333;
            padding: 15px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .navbar .brand {
            color: white;
            font-size: 24px;
            font-weight: bold;
            text-decoration: none;
        }
        
        .nav-links {
            display: flex;
            gap: 20px;
        }
        
        .nav-links a {
            color: white;
            text-decoration: none;
            padding: 8px 15px;
            border-radius: 4px;
        }
        
        .nav-links a:hover {
            background: #555;
        }
        
        .nav-links a.active {
            background: #4CAF50;
        }
        
        .nav-links button {
            background: none;
            border: none;
            color: white;
            padding: 8px 15px;
            cursor: pointer;
            font-size: 16px;
            border-radius: 4px;
        }
        
        .nav-links button:hover {
            background: #555;
        }
        
        /* Main Content */
        .container {
            max-width: 1000px;
            margin: 50px auto;
            padding: 0 20px;
        }
        
        .contact-wrapper {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 30px;
        }
        
        /* Contact Form */
        .contact-form {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .contact-form h2 {
            color: #333;
            margin-bottom: 10px;
        }
        
        .contact-form .subtitle {
            color: #777;
            margin-bottom: 25px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #555;
        }
        
        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
            font-family: Arial, sans-serif;
        }
        
        .form-group textarea {
            height: 120px;
            resize: vertical;
        }
        
        .form-group input:focus,
        .form-group textarea:focus {
            outline: none;
            border-color: #4CAF50;
        }
        
        .btn {
            width: 100%;
            padding: 12px;
            background: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        
        .btn:hover {
            background: #45a049;
        }
        
        /* Contact Info */
        .contact-info {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .contact-info h2 {
            color: #333;
            margin-bottom: 20px;
        }
        
        .info-item {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 15px 0;
            border-bottom: 1px solid #eee;
        }
        
        .info-item:last-child {
            border-bottom: none;
        }
        
        .info-item .icon {
            font-size: 24px;
            width: 40px;
            text-align: center;
        }
        
        .info-item .details h4 {
            color: #333;
            font-size: 14px;
        }
        
        .info-item .details p {
            color: #666;
            font-size: 14px;
        }
        
        .social-links {
            margin-top: 30px;
        }
        
        .social-links h3 {
            color: #333;
            margin-bottom: 15px;
        }
        
        .social-icons {
            display: flex;
            gap: 15px;
        }
        
        .social-icons a {
            display: inline-block;
            padding: 10px 20px;
            background: #f0f0f0;
            border-radius: 5px;
            text-decoration: none;
            color: #333;
            transition: background 0.3s;
        }
        
        .social-icons a:hover {
            background: #4CAF50;
            color: white;
        }
        
        /* Map Section */
        .map-section {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin-top: 30px;
            text-align: center;
        }
        
        .map-section h3 {
            color: #333;
            margin-bottom: 15px;
        }
        
        .map-placeholder {
            background: #e9ecef;
            padding: 60px 20px;
            border-radius: 5px;
            color: #666;
        }
        
        /* Alert Messages */
        .alert {
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        
        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        
        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
        
        /* Footer */
        .footer {
            text-align: center;
            padding: 20px;
            color: #666;
            margin-top: 40px;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .navbar {
                flex-direction: column;
                gap: 10px;
            }
            
            .nav-links {
                flex-wrap: wrap;
                justify-content: center;
            }
            
            .contact-wrapper {
                grid-template-columns: 1fr;
            }
            
            .contact-form {
                padding: 25px;
            }
            
            .contact-info {
                padding: 25px;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <a href="/" class="brand">My App</a>
        <div class="nav-links">
            <a href="/">Home</a>
            <a href="/about">About</a>
            <a href="/services">Services</a>
            <a href="/contact" class="active">Contact</a>
            @if(session('user'))
                <a href="/dashboard">Dashboard</a>
                <form action="/logout" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit">Logout</button>
                </form>
            @else
                <a href="/login">Login</a>
                <a href="/register">Register</a>
            @endif
        </div>
    </nav>
    
    <!-- Main Content -->
    <div class="container">
        <!-- Show messages -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        
        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    {{ $error }}<br>
                @endforeach
            </div>
        @endif
        
        <!-- Contact Section -->
        <div class="contact-wrapper">
            <!-- Contact Form -->
            <div class="contact-form">
                <h2>Send Us a Message</h2>
                <p class="subtitle">We'd love to hear from you. Fill out the form below.</p>
                
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
                    
                    <button type="submit" class="btn">Send Message</button>
                </form>
            </div>
            
            <!-- Contact Information -->
            <div class="contact-info">
                <h2>Get in Touch</h2>
                
                <div class="info-item">
                    <div class="icon">📍</div>
                    <div class="details">
                        <h4>Address</h4>
                        <p>123 Main Street, City, Country</p>
                    </div>
                </div>
                
                <div class="info-item">
                    <div class="icon">📞</div>
                    <div class="details">
                        <h4>Phone</h4>
                        <p>+1 234 567 8900</p>
                    </div>
                </div>
                
                <div class="info-item">
                    <div class="icon">✉️</div>
                    <div class="details">
                        <h4>Email</h4>
                        <p>info@example.com</p>
                    </div>
                </div>
                
                <div class="info-item">
                    <div class="icon">🕐</div>
                    <div class="details">
                        <h4>Working Hours</h4>
                        <p>Mon - Fri: 9:00 AM - 6:00 PM</p>
                    </div>
                </div>
                
                <div class="social-links">
                    <h3>Follow Us</h3>
                    <div class="social-icons">
                        <a href="#">Facebook</a>
                        <a href="#">Twitter</a>
                        <a href="#">LinkedIn</a>
                        <a href="#">Instagram</a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Map Section -->
        <div class="map-section">
            <h3>Find Us Here</h3>
            <div class="map-placeholder">
                <p>📍 Google Maps Location</p>
                <p style="font-size: 14px; margin-top: 10px;">123 Main Street, City, Country</p>
            </div>
        </div>
    </div>
    
    <!-- Footer -->
    <div class="footer">
        <p>&copy; {{ date('Y') }} My App. All rights reserved.</p>
    </div>
</body>
</html>