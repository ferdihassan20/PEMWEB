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
            <form id="register-form" method="POST" action="{{ route('register.store') }}">
           
            @csrf

            <div class="input-box">
    @error('email')
        <p style="color: red; font-size: 10px; padding: 0;">
            {{ $message }}
        </p>
    @enderror
    <input type="text" id="email" name="email" placeholder="Email" value="{{ old('email') }}">
</div>
<div class="input-box">
    @error('username')
        <p style="color: red; font-size: 10px; padding: 0;">
            {{ $message }}
        </p>
    @enderror
    <input type="text" id="username" name="username" placeholder="Username" value="{{ old('username') }}">
</div>
<div class="input-box">
    @error('password')
        <p style="color: red; font-size: 10px; padding: 0;">
            {{ $message }}
        </p>
    @enderror
    <input type="password" id="password" name="password" placeholder="Password" value="{{ old('password') }}"> 
</div>
<div class="input-box">
    @error('role')
        <p style="color: red; font-size: 10px; padding: 0;">
            {{ $message }}
        </p>
    @enderror
    <select name="role">
        <option value="">Select your role</option>
        <option value="user" {{ old('role') == 'user' ? 'selected' : '' }}>User</option>
        <option value="admin" {{ old('role') == 'admin' ? 'selected' : '' }}>Admin</option>
    </select>
</div>


                <button type="submit" class="btn" name="register-submit">Register</button>

                <div class="register">
                    <label>
                        Already have an account?
                        <a href="{{ route('login') }}">Login</a> 
                    </label>
                </div>

                @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif

            </form>
        </div>
    </div>
</body>
</html>
