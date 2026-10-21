<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial;
            background: #f0f0f0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background: white;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            text-align: center;
        }
        h2 {
            color: #333;
        }
        .success {
            color: green;
            background: #e8f5e9;
            padding: 10px;
            border-radius: 4px;
            margin: 15px 0;
        }
        button {
            padding: 10px 20px;
            background: #dc3545;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background: #c82333;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Dashboard</h2>
        
        @if(session('success'))
            <div class="success">{{ session('success') }}</div>
        @endif
        
        <p>Welcome! logged in as: <strong>{{ session('user') }}</strong></p>
        
        <form action="/logout" method="POST">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </div>
</body>
</html>