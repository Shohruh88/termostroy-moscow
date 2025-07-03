<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }} class="relative min-h-full">
<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Termostroy" name="description">
    <meta content="Проект" name="keywords">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('images/logo-termo.png') }}">

    <title>@yield('title', 'Creative Agency')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
      [x-cloak] { display: none !important; }
      .bg-moscow__second{
      background-image: url('./images/tower-moscow.webp');
      background-size: cover;
      background-position: center;
}
.nav-link{
  position: relative;
}
.nav-link.active-link::before {
  content: "";
  position: absolute;
  bottom: 0px; /* bottom-0.5 = 0.125rem = 2px */
  left: 0;      /* start-0 => left: 0 */
  z-index: -1;
  width: 100%;
  height: 4px;  /* h-1 = 0.25rem = 4px */
  background-color: #a3e635; /* bg-lime-400 */
}

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

    <script>
        function changeLang(locale) {
            fetch("{{ route('language.switch') }}", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": '{{ csrf_token() }}'
                },
                body: JSON.stringify({ locale })
            }).then(() => location.reload());
        }

document.addEventListener("DOMContentLoaded", () => {
    const navLinks = document.querySelectorAll('.nav-link');
    const currentPath = window.location.pathname;

    navLinks.forEach(link => {
      const linkPath = new URL(link.href).pathname;

      if (linkPath === currentPath) {
        link.classList.add('active-link');
      } else {
        link.classList.remove('active-link');
      }
    });
  });
    </script>

</body>
</html>
