<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
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
        
        /* Main Content */
        .container {
            max-width: 1000px;
            margin: 50px auto;
            padding: 0 20px;
        }
        
        .hero {
            background: white;
            padding: 60px 40px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            text-align: center;
            margin-bottom: 30px;
        }
        
        .hero h1 {
            font-size: 36px;
            color: #333;
            margin-bottom: 15px;
        }
        
        .hero p {
            font-size: 18px;
            color: #666;
            margin-bottom: 25px;
            line-height: 1.6;
        }
        
        .btn {
            display: inline-block;
            padding: 12px 30px;
            background: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            font-size: 16px;
        }
        
        .btn:hover {
            background: #45a049;
        }
        
        .btn-secondary {
            background: #2196F3;
        }
        
        .btn-secondary:hover {
            background: #1976D2;
        }
        
        /* Features Section */
        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 30px;
        }
        
        .feature-card {
            background: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            text-align: center;
        }
        
        .feature-card h3 {
            color: #333;
            margin-bottom: 10px;
        }
        
        .feature-card p {
            color: #666;
            font-size: 14px;
            line-height: 1.6;
        }
        
        .feature-card .icon {
            font-size: 40px;
            margin-bottom: 15px;
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
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <a href="/" class="brand">My App</a>
        <div class="nav-links">
            <a href="/" class="active">Home</a>
            @if(session('user'))
                <a href="/dashboard">Dashboard</a>
                <a href="/contact">Contact</a>
                <form action="/logout" method="POST" style="display:inline;">
                    @csrf
                    <button type="submit" style="background:none;border:none;color:white;padding:8px 15px;cursor:pointer;font-size:16px;">
                        Logout
                    </button>
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
        
        <!-- Hero Section -->
        <div class="hero">
            <h1>Welcome to Our Website</h1>
            <p>
                This is a simple Laravel application. Feel free to explore and learn 
                how Laravel works with basic authentication and routing.
            </p>
            
            @if(session('user'))
                <p style="color: #4CAF50; font-weight: bold;">
                    You are logged in as: {{ session('user') }}
                </p>
                <a href="/dashboard" class="btn">Go to Dashboard</a>
            @else
                <a href="/login" class="btn">Login</a>
                <a href="/register" class="btn btn-secondary" style="margin-left: 10px;">Register</a>
            @endif
        </div>
        
        <!-- Features Section -->
        <div class="features">
            <div class="feature-card">
                <div class="icon">🔐</div>
                <h3>Secure Login</h3>
                <p>Safe and secure authentication system with session management.</p>
            </div>
            
            <div class="feature-card">
                <div class="icon">📱</div>
                <h3>Responsive Design</h3>
                <p>Works perfectly on all devices - desktop, tablet, and mobile.</p>
            </div>
            
            <div class="feature-card">
                <div class="icon">🚀</div>
                
                <p>Simple and intuitive interface for all users.</p>
            </div>
        </div>
    </div>
    
    <!-- Footer -->
    <div class="footer">
        <p>&copy; {{ date('Y') }} My App. All rights reserved.</p>
    </div>
</body>
</html>