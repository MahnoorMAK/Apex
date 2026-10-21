<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        
        .register-container {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            width: 400px;
        }
        
        .register-container h2 {
            text-align: center;
            color: #333;
            margin-bottom: 10px;
        }
        
        .subtitle {
            text-align: center;
            color: #777;
            margin-bottom: 25px;
            font-size: 14px;
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
        
        .form-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 16px;
        }
        
        .form-group input:focus {
            outline: none;
            border-color: #4CAF50;
        }
        
        .form-group .error-text {
            color: #d32f2f;
            font-size: 12px;
            margin-top: 5px;
            display: block;
        }
        
        .btn {
            width: 100%;
            padding: 12px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        
        .btn:hover {
            background-color: #45a049;
        }
        
        .alert {
            padding: 12px;
            border-radius: 5px;
            margin-bottom: 20px;
        }
        
        .alert-danger {
            background-color: #f8d7da;
            color: #721c24;
            border: 1px solid #f5c6cb;
        }
        
        .alert-success {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }
        
        .text-center {
            text-align: center;
            margin-top: 15px;
        }
        
        .text-center a {
            color: #4CAF50;
            text-decoration: none;
        }
        
        .text-center a:hover {
            text-decoration: underline;
        }
        
        .password-requirements {
            font-size: 12px;
            color: #777;
            margin-top: 5px;
        }
        
        .password-requirements ul {
            list-style: none;
            padding-left: 0;
        }
        
        .password-requirements ul li {
            padding: 2px 0;
        }
        
        .password-requirements ul li::before {
            content: "• ";
            color: #4CAF50;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <h2>Create Account</h2>
        <p class="subtitle">Register to get started with our services</p>
        
        <!-- Show error messages -->
        @if($errors->any())
            <div class="alert alert-danger">
                @foreach($errors->all() as $error)
                    {{ $error }}<br>
                @endforeach
            </div>
        @endif
        
        <!-- Show success message -->
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        
        <!-- Registration Form -->
        <form action="/register" method="POST">
            @csrf
            
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your full name" 
                       value="{{ old('name') }}" required>
                @error('name')
                    <span class="error-text">{{ $message }}</span>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" placeholder="Enter your email" 
                       value="{{ old('email') }}" required>
                @error('email')
                    <span class="error-text">{{ $message }}</span>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Enter password (min 6 characters)" required>
                <div class="password-requirements">
                    <ul>
                        <li>Minimum 6 characters</li>
                        <li>At least 1 uppercase letter</li>
                        <li>At least 1 number</li>
                    </ul>
                </div>
                @error('password')
                    <span class="error-text">{{ $message }}</span>
                @enderror
            </div>
            
            <div class="form-group">
                <label for="password_confirmation">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" 
                       placeholder="Confirm your password" required>
            </div>
            
            <button type="submit" class="btn">Register</button>
        </form>
        
        <div class="text-center">
            <p>Already have an account? <a href="/login">Login here</a></p>
            <p style="margin-top: 10px; font-size: 14px; color: #777;">
                <a href="/">← Back to Home</a>
            </p>
        </div>
    </div>
</body>
</html>