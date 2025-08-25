@include('layouts.maintenance_banner')

<script src="https://cdn.tailwindcss.com"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

<header class="relative z-50 bg-white shadow-sm">
    <nav class="relative max-w-8xl w-full flex items-center justify-between h-24 px-4 md:px-6 mx-auto">
        <a class="flex-none" href="/" aria-label="Preline">
            <img class="logo-img" width="96" height="72" src="/images/logo-termo.png" alt="Logo">
        </a>

        <div class="hidden lg:flex items-center gap-x-7">
            <a class="nav-link" href="/">{{ __('site.home') }}</a>
            <a class="nav-link" href="{{ route('service') }}">{{ __('site.services') }}</a>
            <a class="nav-link" href="{{ route('aboutUs') }}">{{ __('site.about') }}</a>
            <a class="nav-link" href="{{ route('projects') }}">{{ __('site.projects') }}</a>
            
                    <a class="inline-block nav-link text-black hover:text-gray-600"
                        href="{{ route('inzhenernye') }}">Инженерные системы</a>
                
            <a class="nav-link" href="{{ route('contact') }}">{{ __('site.contact') }}</a>
            <a href="https://instagram.com" target="_blank" rel="noopener noreferrer">
                <img src="/images/media/instagram.png" class="h-6 w-6" alt="Instagram">
            </a>
        </div>

        <div class="hidden lg:flex items-center gap-x-3">
            @php $currentLang = session('locale', 'ru'); @endphp
            <button onclick="changeLang('ru')"
                class="{{ $currentLang == 'ru' ? 'bg-lime-400 text-black' : 'bg-gray-200' }} px-3 py-2 rounded">RU</button>
            <button onclick="changeLang('turk')"
                class="{{ $currentLang == 'turk' ? 'bg-lime-400 text-black' : 'bg-gray-200' }} px-3 py-2 rounded">TR</button>
            <button onclick="changeLang('en')"
                class="{{ $currentLang == 'en' ? 'bg-lime-400 text-black' : 'bg-gray-200' }} px-3 py-2 rounded">EN</button>
        </div>

        <div class="lg:hidden">
            <button id="mobile-menu-toggle" type="button"
                class="inline-flex items-center justify-center p-2 rounded-md text-gray-700 hover:bg-gray-200">
                <span class="sr-only">Open main menu</span>
                <svg class="h-6 w-6" id="mobile-menu-open-icon" xmlns="http://www.w3.org/2000/svg" fill="none"
                    viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
                <svg class="h-6 w-6 hidden" id="mobile-menu-close-icon" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>
    </nav>

    <div id="mobile-menu"
        class="lg:hidden absolute top-full left-0 w-full h-[calc(100vh-6rem)] bg-white overflow-y-auto transform -translate-x-full transition-transform duration-300 ease-in-out">
        <div class="p-6 flex flex-col gap-y-5">
            <a class="nav-link" href="/">{{ __('site.home') }}</a>
            <a class="nav-link" href="{{ route('service') }}">{{ __('site.services') }}</a>
            <a class="nav-link" href="{{ route('aboutUs') }}">{{ __('site.about') }}</a>
            <a class="nav-link" href="{{ route('projects') }}">{{ __('site.projects') }}</a>
            <a class="nav-link" href="{{ route('contact') }}">{{ __('site.contact') }}</a>
            <a href="https://instagram.com" target="_blank" rel="noopener noreferrer">
                <img src="/images/media/instagram.png" class="h-6 w-6" alt="Instagram">
            </a>

            <div class="border-t border-gray-200 pt-5 mt-3 flex items-center gap-x-3">
                @php $currentLang = session('locale', 'ru'); @endphp
                <button onclick="changeLang('ru')"
                    class="{{ $currentLang == 'ru' ? 'bg-lime-400 text-black' : 'bg-gray-200' }} px-3 py-2 rounded">RU</button>
                <button onclick="changeLang('turk')"
                    class="{{ $currentLang == 'turk' ? 'bg-lime-400 text-black' : 'bg-gray-200' }} px-3 py-2 rounded">TR</button>
                <button onclick="changeLang('en')"
                    class="{{ $currentLang == 'en' ? 'bg-lime-400 text-black' : 'bg-gray-200' }} px-3 py-2 rounded">EN</button>
            </div>
        </div>
    </div>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const menuToggle = document.getElementById('mobile-menu-toggle');
        const menu = document.getElementById('mobile-menu');
        const openIcon = document.getElementById('mobile-menu-open-icon');
        const closeIcon = document.getElementById('mobile-menu-close-icon');

        menuToggle?.addEventListener('click', function() {
            menu.classList.toggle('-translate-x-full');
            menu.classList.toggle('duration-300');
            openIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');
            document.body.classList.toggle('overflow-hidden');
        });
    });
</script>
