<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
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
        
        .about-section {
            background: white;
            padding: 50px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin-bottom: 30px;
        }
        
        .about-section h1 {
            font-size: 32px;
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }
        
        .about-section h2 {
            font-size: 24px;
            color: #333;
            margin: 25px 0 15px 0;
        }
        
        .about-section p {
            font-size: 16px;
            color: #666;
            line-height: 1.8;
            margin-bottom: 15px;
        }
        
        /* Team Section */
        .team-section {
            margin-top: 30px;
        }
        
        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }
        
        .team-card {
            background: #f8f9fa;
            padding: 25px;
            border-radius: 10px;
            text-align: center;
            transition: transform 0.3s;
        }
        
        .team-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        
        .team-card .avatar {
            font-size: 50px;
            margin-bottom: 10px;
        }
        
        .team-card h4 {
            color: #333;
            margin-bottom: 5px;
        }
        
        .team-card p {
            color: #777;
            font-size: 14px;
        }
        
        /* Values Section */
        .values-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }
        
        .value-item {
            background: #f8f9fa;
            padding: 25px;
            border-radius: 10px;
            text-align: center;
        }
        
        .value-item .icon {
            font-size: 40px;
            margin-bottom: 10px;
        }
        
        .value-item h4 {
            color: #333;
            margin-bottom: 5px;
        }
        
        .value-item p {
            color: #777;
            font-size: 14px;
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
            
            .about-section {
                padding: 30px 20px;
            }
            
            .about-section h1 {
                font-size: 28px;
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
            <a href="/about" class="active">About</a>
            <a href="/contact">Contact</a>
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
        
        <!-- About Section -->
        <div class="about-section">
            <h1>About Us</h1>
            
            <p>
                Welcome to <strong>My App</strong>! We are a passionate team dedicated to 
                creating simple, user-friendly web applications that make a difference.
            </p>
            
            <p>
                Our mission is to provide clean, efficient, and accessible solutions 
                for everyone. We believe in the power of simplicity and the importance 
                of user experience.
            </p>
            
            <h2>Our Story</h2>
            <p>
                Founded in {{ date('Y') }}, we started with a simple idea: to build 
                applications that people love to use. Our team comes from diverse 
                backgrounds, bringing together expertise in web development, design, 
                and user experience.
            </p>
            
            <p>
                We're constantly learning and improving, embracing new technologies 
                and best practices to deliver the best possible experience to our users.
            </p>
            
            <!-- Our Values -->
            <h2>Our Values</h2>
            <div class="values-grid">
                <div class="value-item">
                    <div class="icon">💡</div>
                    <h4>Innovation</h4>
                    <p>Always learning and improving</p>
                </div>
                
                <div class="value-item">
                    <div class="icon">🤝</div>
                    <h4>Integrity</h4>
                    <p>Honest and transparent</p>
                </div>
                
                <div class="value-item">
                    <div class="icon">❤️</div>
                    <h4>User Focus</h4>
                    <p>Putting users first</p>
                </div>
                
                <div class="value-item">
                    <div class="icon">🌟</div>
                    <h4>Quality</h4>
                    <p>Excellence in everything we do</p>
                </div>
            </div>
            
            <!-- Team Section -->
            <h2>Meet Our Team</h2>
            <div class="team-section">
                <div class="team-grid">
                    <div class="team-card">
                        <div class="avatar">👨‍💻</div>
                        <h4>John Doe</h4>
                        <p>Founder & Developer</p>
                    </div>
                    
                    <div class="team-card">
                        <div class="avatar">👩‍💻</div>
                        <h4>Jane Smith</h4>
                        <p>UI/UX Designer</p>
                    </div>
                    
                    <div class="team-card">
                        <div class="avatar">👨‍💼</div>
                        <h4>Mike Johnson</h4>
                        <p>Project Manager</p>
                    </div>
                    
                    <div class="team-card">
                        <div class="avatar">👩‍💼</div>
                        <h4>Sarah Wilson</h4>
                        <p>Marketing Lead</p>
                    </div>
                </div>
            </div>
            
            <!-- Contact CTA -->
            <div style="margin-top: 40px; padding: 30px; background: #f8f9fa; border-radius: 10px; text-align: center;">
                <h3 style="color: #333; margin-bottom: 15px;">Want to know more?</h3>
                <p style="color: #666; margin-bottom: 20px;">
                    Feel free to reach out to us. We'd love to hear from you!
                </p>
                <a href="/contact" class="btn" style="display: inline-block; padding: 12px 30px; background: #4CAF50; color: white; text-decoration: none; border-radius: 5px;">Contact Us</a>
            </div>
        </div>
    </div>
    
    <!-- Footer -->
    <div class="footer">
        <p>&copy; {{ date('Y') }} My App. All rights reserved.</p>
    </div>
</body>
</html>