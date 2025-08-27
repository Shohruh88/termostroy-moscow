@include('layouts.maintenance_banner')

<script src="https://cdn.tailwindcss.com"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">

<header class="fixed z-50 flex flex-wrap bg-[#ffffff80] lg:justify-start lg:flex-nowrap w-full">
    <nav
        class="relative max-w-8xl w-full flex flex-wrap md:flex-nowrap lg:grid lg:grid-cols-12 basis-full items-center px-4 md:px-6 mx-auto">
       <div class="relative lg:col-span-3 flex items-center justify-between w-full lg:w-auto z-50">
            <a class="relative z-50" href="/" aria-label="Preline">
                <img class="logo-img relative z-50" width="96" height="72" src="/images/logo-termo.png" alt="Logo">
            </a>
            <button id="mobile-menu-toggle" type="button"
                class="lg:hidden inline-flex items-center justify-center p-2 rounded-md text-gray-700 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-lime-400"
                aria-controls="mobile-menu" aria-expanded="false">
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

        <div id="mobile-menu"
            class="fixed inset-0 lg:static lg:block h-full w-full lg:h-auto lg:w-auto transform -translate-x-full transition-transform duration-300 ease-in-out lg:translate-x-0  lg:bg-transparent lg:col-span-8 lg:order-2">
            <div
                class="flex flex-col h-full lg:flex-row lg:justify-start lg:items-center gap-y-4 lg:gap-x-6 px-6 pt-24 lg:p-0">
                <div>
                    <a class="relative inline-block nav-link text-black focus:outline-hidden dark:text-black"
                        href="/" aria-current="page">{{ __('site.home') }}</a>
                </div>
                <div>
                    <a class="inline-block nav-link text-black hover:text-gray-600"
                        href="{{ route('service') }}">{{ __('site.services') }}</a>
                </div>
                <div>
                    <a class="inline-block nav-link text-black hover:text-gray-600"
                        href="{{ route('aboutUs') }}">{{ __('site.about') }}</a>
                </div>
                <div>
                    <a class="inline-block nav-link text-black hover:text-gray-600"
                        href="{{ route('projects') }}">{{ __('site.projects') }}</a>
                </div>
                 <div>
                    <a class="inline-block nav-link text-black hover:text-gray-600"
                        href="{{ route('inzhenernye') }}">{{ __('site.mechanical') }}</a>
                </div>
                <div>
                    <a class="inline-block nav-link text-black hover:text-gray-600"
                        href="{{ route('contact') }}">{{ __('site.contact') }}</a>
                </div>
                <div class="h-6 w-6 min-h-[24px] min-w-[24px]">
                    <a href="https://instagram.com" target="_blank" class="w-full h-full flex"
                        rel="noopener noreferrer">
                        <img src="/images/media/instagram.png" class="object-contain w-full h-full" alt="Instagram">
                    </a>
                </div>

                <div class="mt-8 lg:mt-0 flex items-center gap-x-3 lg:ms-auto">
                    @php $currentLang = session('locale', 'ru'); @endphp
                    <button onclick="changeLang('ru')"
                        class="{{ $currentLang == 'ru' ? 'bg-lime-400 text-black border-green-500 border' : 'bg-gray-200 border border-gray-500' }} rounded-full ">
                           <img src="images/flag/Flag_of_Russia.png" class="w-[30px] h-[30px] rounded-full"  alt="ru flag">
                    </button>
                    <button onclick="changeLang('turk')"
                        class="{{ $currentLang == 'turk' ? 'bg-lime-400 text-black border-green-500 border' : 'bg-gray-200 border border-gray-500' }} rounded-full">
                                            <img src="images/flag/Flag_of_Turkey.png" class="w-[30px] h-[30px] rounded-full"  alt="tr flag">
                    </button>

                    <button onclick="changeLang('en')"
                        class="{{ $currentLang == 'en' ? 'bg-lime-400 text-black border-green-500 border' : 'bg-gray-200 border border-gray-500' }} rounded-full ">
                        <img src="images/flag/eng.webp" class="w-[30px] h-[30px] rounded-full"  alt="en flag">
                    </button>
                </div>
            </div>
        </div>
    </nav>
</header>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const menuToggle = document.getElementById('mobile-menu-toggle');
        const menu = document.getElementById('mobile-menu');
        const openIcon = document.getElementById('mobile-menu-open-icon');
        const closeIcon = document.getElementById('mobile-menu-close-icon');

        menuToggle?.addEventListener('click', function() {
            // Menyuni chapdan o'ngga siljitish uchun klassni o'zgartiramiz
            menu.classList.toggle('-translate-x-full');

            // Ikonkalarni almashtirish
            openIcon.classList.toggle('hidden');
            closeIcon.classList.toggle('hidden');

            // Orqa fon scroll bo'lishini oldini olish
            document.body.classList.toggle('overflow-hidden');
        });
    });
</script>
