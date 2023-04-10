<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
        <link rel="preload" as="style" href="{{ url('public/build/assets/app-1049913c.css') }}" />
        <link rel="modulepreload" href="{{ url('public/build/assets/app-b9a1a811.js') }}" />
        <link rel="stylesheet" href="{{ url('public/build/assets/app-1049913c.css') }}" />
        <link rel="preload" as="style" href="{{ url('public/public/build/assets/app-0eb12c1f.css') }}" />
        <script type="module" src="{{ url('public/build/assets/app-b9a1a811.js') }}"></script>   
    </head>
    <body>
        <div class="font-sans text-gray-900 dark:text-gray-100 antialiased">
            {{ $slot }}
        </div>
    </body>
</html>
