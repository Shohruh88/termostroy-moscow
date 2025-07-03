{{-- <!-- ========== HEADER ========== -->--}}
{{-- header.blade.php fayli boshida --}}

{{-- Sayt ishlab chiqilmoqda banneri --}}
<div class="maintenance-banner">
    <div class="maintenance-content">
        <span class="construction-icon">🚧</span>
        <span class="maintenance-text">
            <span class="highlight">Сайт находится в разработке</span> - Мы работаем над улучшением функционала
        </span>
        <span class="construction-icon">🚧</span>
    </div>
</div>

{{-- Mavjud header kodingiz... --}}
<header class="flex flex-wrap lg:justify-start lg:flex-nowrap z-50 w-full">
    {{-- Header content --}}
</header>

<style>
.maintenance-banner {
    background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
    color: white;
    text-align: center;
    padding: 12px 20px;
    position: relative;
    z-index: 1000;
    font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
}

.maintenance-content {
    display: flex;
    align-items: center;
    justify-content: center;
    gap: 12px;
    max-width: 1200px;
    margin: 0 auto;
}

.construction-icon {
    font-size: 24px;
    animation: bounce 2s infinite;
}

.maintenance-text {
    font-size: 16px;
    font-weight: 500;
    letter-spacing: 0.5px;
}

.highlight {
    background: rgba(255,255,255,0.2);
    padding: 2px 8px;
    border-radius: 4px;
    font-weight: 600;
}

@keyframes bounce {
    0%, 20%, 50%, 80%, 100% {
        transform: translateY(0);
    }
    40% {
        transform: translateY(-10px);
    }
    60% {
        transform: translateY(-5px);
    }
}

/* Mobile responsiv */
@media (max-width: 768px) {
    .maintenance-banner {
        padding: 10px 15px;
    }
    
    .maintenance-content {
        flex-direction: column;
        gap: 8px;
    }
    
    .maintenance-text {
        font-size: 14px;
    }
    
    .construction-icon {
        font-size: 20px;
    }
}
</style>



{{-- <header class="flex flex-wrap lg:justify-start lg:flex-nowrap z-50 w-full ">--}}
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <style>
        /* Custom animations */
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        
        @keyframes slideInLeft {
            from { opacity: 0; transform: translateX(-50px); }
            to { opacity: 1; transform: translateX(0); }
        }
        
        @keyframes slideInRight {
            from { opacity: 0; transform: translateX(50px); }
            to { opacity: 1; transform: translateX(0); }
        }
        
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .animate-float { animation: float 3s ease-in-out infinite; }
        .animate-slide-in-left { animation: slideInLeft 0.8s ease-out; }
        .animate-slide-in-right { animation: slideInRight 0.8s ease-out; }
        .animate-fade-in-up { animation: fadeInUp 0.6s ease-out; }
        
        /* Gradient backgrounds */
        .bg-gradient-primary {
            background: linear-gradient(135deg, #1e40af 0%, #3b82f6 50%, #06b6d4 100%);
        }
        
        .bg-gradient-secondary {
            background: linear-gradient(135deg, #f59e0b 0%, #f97316 50%, #ef4444 100%);
        }
        
        /* Hover effects */
        .card-hover {
            transition: all 0.3s ease;
        }
        
        .card-hover:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(0,0,0,0.1);
        }
        
        /* Modern glass effect */
        .glass-effect {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
        
        /* Language selector */
        .lang-btn {
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }
        
        .lang-btn::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255,255,255,0.2), transparent);
            transition: left 0.5s;
        }
        
        .lang-btn:hover::before {
            left: 100%;
        }
        
        /* Custom scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        
        ::-webkit-scrollbar-track {
            background: #f1f5f9;
        }
        
        ::-webkit-scrollbar-thumb {
            background: #3b82f6;
            border-radius: 4px;
        }
        
        ::-webkit-scrollbar-thumb:hover {
            background: #1d4ed8;
        }
    </style>



<header class="flex flex-wrap lg:justify-start lg:flex-nowrap z-50 w-full">
    <nav class="relative max-w-8xl w-full flex flex-wrap md:flex-nowrap lg:grid lg:grid-cols-12 basis-full items-center px-4 md:px-6 mx-auto">
        <div class="lg:col-span-3 flex items-center">
            <!-- Logo -->
            <a class="flex-none rounded-xl text-xl inline-block font-semibold focus:outline-hidden focus:opacity-80" href="/" aria-label="Preline">
                <img class="logo-img" width="96" height="72" src="/images/logo-termo.png" alt="Logo">
            </a>
            <!-- End Logo -->
        </div>

        <!-- Collapse -->
        <div id="hs-navbar-hcail" class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow lg:block lg:w-auto lg:basis-auto lg:order-2 lg:col-span-8" aria-labelledby="hs-navbar-hcail-collapse">
            <div class="nav-links flex flex-col gap-y-4 gap-x-0 mt-5 lg:flex-row lg:justify-start lg:items-center lg:gap-y-0 lg:gap-x-7 lg:mt-0">
                <div>
                    <a class="relative inline-block nav-link text-black focus:outline-hidden dark:text-black" href="/" aria-current="page">{{__("site.home")}}</a>
                </div>
                <div>
                    <a class="inline-block nav-link text-black hover:text-gray-600 focus:outline-hidden focus:text-gray-600 dark:text-black dark:hover:text-neutral-300 dark:focus:text-neutral-300" href="{{route('service')}}">{{__('site.services')}}</a>
                </div>
                <div>
                    <a class="inline-block nav-link text-black hover:text-gray-600 focus:outline-hidden focus:text-gray-600 dark:text-black dark:hover:text-neutral-300 dark:focus:text-neutral-300" href="{{route('aboutUs')}}">{{__("site.about")}}</a>
                </div>
                <div>
                    <a class="inline-block nav-link text-black hover:text-gray-600 focus:outline-hidden focus:text-gray-600 dark:text-black dark:hover:text-neutral-300 dark:focus:text-neutral-300" href="{{route('projects')}}">{{__("site.projects")}}</a>
                </div>
                <div>
                    <a class="inline-block nav-link text-black hover:text-gray-600 focus:outline-hidden focus:text-gray-600 dark:text-black dark:hover:text-neutral-300 dark:focus:text-neutral-300" href="{{route('contact')}}">{{__('site.contact')}}</a>
                </div>
                <div class="h-6 w-6 min-h-[24px] min-w-[24px]">
                    <a href="https://instagram.com" target="_blank" class="w-full h-full flex" rel="noopener noreferrer">
                        <img src="/images/media/instagram.png" class="object-contain w-full h-full" alt="Instagram" >
                    </a>
                </div>

                <div class="flex items-center gap-x-3 ms-auto lg:col-span-3 justify-end">
                    @php $currentLang = session('locale', 'en'); @endphp

                    <button onclick="changeLang('ru')" class="{{ $currentLang == 'ru' ? 'bg-lime-400 text-black' : 'bg-white' }} px-3 py-2 rounded">
                        RU
                    </button>
                    <button onclick="changeLang('turk')" class="{{ $currentLang == 'turk' ? 'bg-lime-400 text-black' : 'bg-white' }} px-3 py-2 rounded">
                        TR
                    </button>
                    <button onclick="changeLang('en')" class="{{ $currentLang == 'en' ? 'bg-lime-400 text-black' : 'bg-white' }} px-3 py-2 rounded">
                        EN
                    </button>
                </div>

            </div>
        </div>
    </nav>
</header>

