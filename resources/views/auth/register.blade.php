<form method="POST" action="{{ route('register') }}">
    @csrf

    <!-- Nama -->
    <div>
        <label for="name">Name</label>
        <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus>
    </div>

    <!-- Email -->
    <div>
        <label for="email">Email</label>
        <input id="email" type="email" name="email" value="{{ old('email') }}" required>
    </div>

    <!-- Password -->
    <div>
        <label for="password">Password</label>
        <input id="password" type="password" name="password" required>
    </div>

    <!-- Konfirmasi Password -->
    <div>
        <label for="password_confirmation">Confirm Password</label>
        <input id="password_confirmation" type="password" name="password_confirmation" required>
    </div>

    <!-- Tombol Daftar -->
    <div>
        <button type="submit">Register</button>
    </div>
</form>
