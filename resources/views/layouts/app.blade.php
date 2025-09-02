<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }} class='relative min-h-full'">

<head>
    <script src="https://cdn.tailwindcss.com"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Termostroy" name="description">
    <meta content="Проект" name="keywords">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('images/logo-termo.png') }}">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css" rel="stylesheet"/>

<!-- JSON-LD structured data -->
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "Termostroy Moscow",
  "url": "https://termostroy.moscow",
  "logo": "{{ asset('images/logo-termo.png') }}"
}
</script>

    <title>@yield('title', 'Creative Agency')</title>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('css')
    <style>
        [x-cloak] {
            display: none !important;
        }

        .bg-moscow__second {
            background-image: url('./images/capital_towers/1.webp');
            background-size: cover;
            background-position: center;
        }

        .nav-link {
            position: relative;
        }

        .nav-link.active-link::before {
            content: "";
            position: absolute;
            bottom: 0px;
            /* bottom-0.5 = 0.125rem = 2px */
            left: 0;
            /* start-0 => left: 0 */
            z-index: -1;
            width: 100%;
            height: 4px;
            /* h-1 = 0.25rem = 4px */
            background-color: #a3e635;
            /* bg-lime-400 */
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
                body: JSON.stringify({
                    locale
                })
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

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
            initClassName: 'aos-init', // class applied after initialization
            animatedClassName: 'aos-animate', // class applied on animation
            offset: 120, // offset (in px) from the original trigger point
            delay: 0, // values from 0 to 3000, with step 50ms
            duration: 700, // values from 0 to 3000, with step 50ms
            mirror: true, // whether elements should animate out while scrolling past them
        });
    </script>

    @stack('scripts')
    
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js"></script>

</body>

</html>
