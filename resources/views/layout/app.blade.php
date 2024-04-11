<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>
   
    <link rel="shortcut icon" type="image/svg+xml" href="{{ asset('storage/image/logo.svg') }}">


    <!-- <link href="https://unpkg.com/tailwindcss@2.0.3/dist/tailwind.min.css" rel="stylesheet"> -->

    

    
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    

</head>
<body class="w-screen animated-background h-screen bg-gradient-to-r from-blue-500 via-blue-600 to-indigo-700">
    

    
    @yield('content')

    

    

    <script>
        console.log($);
    </script>
    
    
</body>
</html>
