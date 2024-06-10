<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skill Forge Login</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
</head>
<body>
    <div class="hero-img">
        <img src="{{ asset('img/group.png') }}" alt=""/>
    </div>

    <div class="container">
        <div class="login">
            <h2>Welcome to</h2>
            <h1>Skill Forge</h1>
            <form id="login-form" method="POST" action="{{ route('login.auth') }}">
                @csrf
                <div class="input-box">
                    @if(session()->has('loginError'))
                        <p style="color: red; font-size: 10px; padding: 0;">Email or Password incorrect</p>
                    @endif
                    @error('email')
                        <p style="color: red; font-size: 10px; padding: 0;">{{ $message }}</p>
                    @enderror
                    <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email" value="{{ old('email') }}">
                </div>

                <div class="input-box">
                    @error('password')
                        <p style="color: red; font-size: 10px; padding: 0;">{{ $message }}</p>
                    @enderror
                    <input type="password" id="password" name="password" placeholder="Password" value="{{ old('password') }}">
                </div>

                

                <div class="remember-forgot">
                    <label>
                        <input type="checkbox" name="remember"> Remember me
                    </label>
                    <a href="#">Forgot password?</a>
                </div>

                <button type="submit" class="btn" name="login-submit">Login</button>

                <div class="register">
                    <label>
                        Don't have an account?
                        <a href="{{ route('register.store') }}">Register</a>
                    </label>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
