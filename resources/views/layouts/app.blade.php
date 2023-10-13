<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }} - @yield('page-name')</title>
    <link rel="shortcut icon" href="{{ Vite::asset('storage/images/logo.png') }}" type="image/x-icon">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    {{-- HEADER --}}
    <header>
        @include('partials.header')
    </header>
    {{-- MAIN --}}
    <main class="mt-3">
        @yield('contant-main')
    </main>
    {{-- FOOTER --}}
    <footer>
        FOOTER
    </footer>
</body>

</html>
