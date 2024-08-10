<!-- resources/views/auth/login.blade.php -->
<form method="POST" action="{{ route('login') }}">
    @csrf

    <!-- Email -->
    <div>
        <label for="email">Email</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
    </div>

    <!-- Password -->
    <div>
        <label for="password">Password</label>
        <input id="password" type="password" name="password" required>
    </div>

    <!-- Remember Me -->
    <div>
        <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
        <label for="remember">Remember Me</label>
    </div>

    <!-- Tombol Login -->
    <div>
        <button type="submit">Login</button>
    </div>
</form>

<h3><a href="{{ url('/register') }}">Register</a></h3>
