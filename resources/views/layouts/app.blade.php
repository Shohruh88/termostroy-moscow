<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Termostroy" name="description">
    <meta content="Проект" name="keywords">
    <link rel="shortcut icon" href="{{ asset('images/logo-termo.png') }}">

    <title>@yield('title', 'Creative Agency')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
      [x-cloak] { display: none !important; }
  </style>

</head>
<body class="text-gray-800 bg-white antialiased">

    @include('layouts.header')

    @yield('content')

    @include('layouts.footer')

  <script>
    window.addEventListener('load', () => {
      HSStaticMethods.autoInit()
    })
  </script>
</body>
</html>
