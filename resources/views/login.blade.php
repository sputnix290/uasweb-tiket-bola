<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>Login TickCher</title>
    <link href="{{ asset('style/assets/img/nattiket.png') }}" rel="icon">
    <link href="{{ asset('style/assets/img/nattiket.png') }}" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary-color: #4e73df;
            --secondary-color: #f8f9fc;
            --text-color: #5a5c69;
            --error-color: #e74a3b;
        }
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }
        .container {
            background-color: var(--secondary-color);
            border-radius: 20px;
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            width: 400px;
            max-width: 100%;
            padding: 2rem;
            animation: fadeIn 0.5s ease-out;
        }
        .logo {
            text-align: center;
            margin-bottom: 2rem;
        }
        .logo img {
            width: 80px;
            height: auto;
            animation: pulse 2s infinite;
        }
        h1 {
            color: var(--primary-color);
            text-align: center;
            margin-bottom: 1.5rem;
            font-size: 2rem;
            font-weight: 600;
        }
        .input-group {
            margin-bottom: 1.5rem;
            position: relative;
        }
        .input-group input {
            width: 100%;
            padding: 10px 15px;
            border: none;
            border-bottom: 2px solid #ddd;
            background-color: transparent;
            outline: none;
            font-size: 1rem;
            transition: all 0.3s ease;
        }
        .input-group label {
            position: absolute;
            top: 10px;
            left: 15px;
            color: #999;
            font-size: 1rem;
            pointer-events: none;
            transition: all 0.3s ease;
        }
        .input-group input:focus,
        .input-group input:valid {
            border-bottom-color: var(--primary-color);
        }
        .input-group input:focus + label,
        .input-group input:valid + label {
            top: -20px;
            font-size: 0.8rem;
            color: var(--primary-color);
        }
        .remember-me {
            display: flex;
            align-items: center;
            margin-bottom: 1.5rem;
        }
        .remember-me input {
            margin-right: 0.5rem;
        }
        .btn {
            background-color: var(--primary-color);
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            width: 100%;
            transition: all 0.3s ease;
        }
        .btn:hover {
            background-color: #3a5cbe;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        .register-link {
            text-align: center;
            margin-top: 1.5rem;
            font-size: 0.9rem;
        }
        .register-link a {
            color: var(--primary-color);
            text-decoration: none;
            font-weight: 600;
        }
        .error-message {
            background-color: var(--error-color);
            color: #fff;
            padding: 10px;
            border-radius: 5px;
            margin-bottom: 1rem;
            text-align: center;
            animation: shake 0.5s ease-in-out;
        }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        @keyframes shake {
            0%, 100% { transform: translateX(0); }
            10%, 30%, 50%, 70%, 90% { transform: translateX(-5px); }
            20%, 40%, 60%, 80% { transform: translateX(5px); }
        }
        .input-icon {
            position: absolute;
            top: 50%;
            right: 15px;
            transform: translateY(-50%);
            color: #999;
            transition: all 0.3s ease;
        }
        .input-group input:focus ~ .input-icon,
        .input-group input:valid ~ .input-icon {
            color: var(--primary-color);
        }
        .password-toggle {
            position: absolute;
            top: 50%;
            right: 15px;
            transform: translateY(-50%);
            cursor: pointer;
            color: #999;
        }
        .social-login {
            display: flex;
            justify-content: center;
            margin-top: 1.5rem;
        }
        .social-btn {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            margin: 0 10px;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }
        .social-btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        .social-btn i {
            font-size: 1.2rem;
        }
        .social-btn.facebook { color: #3b5998; }
        .social-btn.google { color: #db4437; }
        .social-btn.twitter { color: #1da1f2; }
    </style>
</head>
<body>
    <div class="container">
        <div class="logo">
            <img src="{{ asset('style/assets/img/nattiket.png') }}" alt="TickCher Logo">
        </div>
        <h1>Welcome Back!</h1>
        
        @if (session('error'))
        <div class="error-message">
            {{ session('error') }}
        </div>
        @endif

        <form method="post" action="{{ route('login') }}">
            @csrf
            <div class="input-group">
                <input type="text" name="username" id="username" required>
                <label for="username">Username</label>
                <i class="input-icon fas fa-user"></i>
            </div>
            <div class="input-group">
                <input type="password" name="password" id="password" required>
                <label for="password">Password</label>
                <i class="password-toggle fas fa-eye" onclick="togglePassword()"></i>
            </div>
            <div class="remember-me">
                <input type="checkbox" name="remember" id="remember">
                <label for="remember">Remember me</label>
            </div>
            <button type="submit" class="btn">Login</button>
        </form>
        
        <div class="social-login">
            <a href="#" class="social-btn facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="social-btn google"><i class="fab fa-google"></i></a>
            <a href="#" class="social-btn twitter"><i class="fab fa-twitter"></i></a>
        </div>
        
        <div class="register-link">
            Don't have an account? <a href="{{ route('registerpengguna') }}">Sign up</a>
        </div>
    </div>

    <script>
        function togglePassword() {
            const passwordInput = document.getElementById('password');
            const passwordToggle = document.querySelector('.password-toggle');
            
            if (passwordInput.type === 'password') {
                passwordInput.type = 'text';
                passwordToggle.classList.remove('fa-eye');
                passwordToggle.classList.add('fa-eye-slash');
            } else {
                passwordInput.type = 'password';
                passwordToggle.classList.remove('fa-eye-slash');
                passwordToggle.classList.add('fa-eye');
            }
        }

        document.addEventListener('DOMContentLoaded', (event) => {
            document.querySelectorAll('.input-group input').forEach(input => {
                input.addEventListener('focus', function() {
                    this.parentNode.classList.add('focus');
                });
                input.addEventListener('blur', function() {
                    if (this.value === '') {
                        this.parentNode.classList.remove('focus');
                    }
                });
            });
        });
    </script>
</body>
</html>