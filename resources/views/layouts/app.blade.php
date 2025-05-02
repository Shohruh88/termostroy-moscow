<!DOCTYPE html>
<html lang="uz">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Creative Agency')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="text-gray-800 bg-white antialiased">

  @yield('content')

  <script>
    window.addEventListener('load', () => {
      HSStaticMethods.autoInit()
    })
  </script>
</body>
</html>
