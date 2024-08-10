<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel App</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body>
    <header>
        <!-- Header content, jika ada -->

        <!-- Tombol Logout -->
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: inline;">
            @csrf
            <button type="submit">Logout</button>
        </form>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <!-- Footer content, jika ada -->
    </footer>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
