<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Styles / Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-white dark:bg-black text-black dark:text-white  flex min-h-screen flex-col">
    <header class="shadow-md py-6 dark:shadow-slate-900">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ url('/') }}" class="text-xl font-bold">My Blog</a>
            <nav>
                <ul class="flex space-x-8">
                    <li><a href="{{ url('/about') }}">About</a></li>
                    <li><a href="{{ url('/contact') }}">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <main class="container py-8 flex-grow">
        @yield('content')
    </main>
    <footer class="p-4 text-center mt-auto">
        <p>&copy; 2025 My Blog. All rights reserved.</p>
    </footer>

</body>

</html>
