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
<body class="w-screen animated-background h-screen bg-gradient-to-r from-white via-black-200 to-white" x-data="{ atTop: true }">
    
 


    
    @yield('content')

    

    

    <script>
        
        console.log($);
    </script>
    <script src="/js/taoss.js"></script>
    <script defer src="js/alpine.js"></script>
    <script src="/js/app.js"></script>
</body>
</html>
