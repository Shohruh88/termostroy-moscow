@extends('layouts.app')

@section('title', 'Capital Towers Moscow - Termostroy')

@section('content')

<style>
    .hero-bg {
        background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.3)), url('{{ asset("images/capital-towers-hero.jpg") }}');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
        min-height: 100vh;
    }
    
    /* Fallback agar rasm chiqmasa */
    .hero-bg-fallback {
        background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        min-height: 100vh;
    }
    
    .card-hover {
        transition: all 0.3s ease;
    }
    
    .card-hover:hover {
        transform: translateY(-10px);
        box-shadow: 0 20px 40px rgba(0,0,0,0.1);
    }
    
    .stats-counter {
        font-size: 3rem;
        font-weight: bold;
        color: #64ffda;
    }
    
    .section-divider {
        height: 3px;
        width: 80px;
        background: linear-gradient(45deg, #64ffda, #4ecdc4);
        margin: 0 auto;
    }
    
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }
    
    .animate-fade-in {
        animation: fadeInUp 0.8s ease-out;
    }
    
    .glass-effect {
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
    }
</style>

<!-- Hero Section -->
<section class="hero-bg hero-bg-fallback min-h-screen flex items-center justify-center text-white relative" 
         style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.3)), url('{{ asset('images/tower1.jpg') }}'); background-size: cover; background-position: center;">
    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black opacity-60"></div>
    <div class="container mx-auto px-4 text-center relative z-10">
        <div class="animate-fade-in">
            <h1 class="text-5xl md:text-7xl font-light mb-6 tracking-wide">CAPITAL TOWERS</h1>
            <p class="text-xl md:text-2xl mb-4 opacity-90">Краснопресненская наб., 14</p>
            <p class="text-lg mb-8 max-w-3xl mx-auto leading-relaxed">
                Комплекс жилых небоскребов с квартирами на набережной Москвы-реки рядом с парком «Красная Пресня»
            </p>
            
            <!-- Stats Grid -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-12">
                <div class="glass-effect p-6 rounded-xl">
                    <div class="stats-counter">61-65</div>
                    <div class="text-sm opacity-80">этажей</div>
                </div>
                <div class="glass-effect p-6 rounded-xl">
                    <div class="stats-counter">250м</div>
                    <div class="text-sm opacity-80">высота здания</div>
                </div>
                <div class="glass-effect p-6 rounded-xl">
                    <div class="stats-counter">211м²</div>
                    <div class="text-sm opacity-80">общая площадь</div>
                </div>
                <div class="glass-effect p-6 rounded-xl">
                    <div class="stats-counter">2024</div>
                    <div class="text-sm opacity-80">сдача</div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Project Overview Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">О проекте</h2>
            <div class="section-divider mb-8"></div>
            <p class="text-xl text-gray-600 max-w-4xl mx-auto leading-relaxed">
                В 2018 году началось строительство МФК «Capital Towers». Строительство жилого комплекса планируют завершить в декабре 2023 года.
            </p>
        </div>

        <div class="grid lg:grid-cols-3 gap-8 mb-16">
            <!-- Card 1 -->
            <div class="bg-gradient-to-br from-blue-500 to-purple-600 text-white p-8 rounded-2xl card-hover">
                <h3 class="text-2xl font-bold mb-4">Квартиры и планировки</h3>
                <p class="leading-relaxed">
                    В комплексе находится 720 квартир и пентхаусов. Площадь «однушек» от 49, шестикомнатных – до 260 кв. метров и пентхауса – 602,5 кв. метров.
                </p>
            </div>

            <!-- Card 2 -->
            <div class="bg-gradient-to-br from-teal-500 to-cyan-600 text-white p-8 rounded-2xl card-hover">
                <h3 class="text-2xl font-bold mb-4">Архитектура</h3>
                <p class="leading-relaxed">
                    Capital Towers включает три небоскреба: 61-этажные башни River и Park, а также 65-этажная City. Они тонкие – имеют ширину 21 метр.
                </p>
            </div>

            <!-- Card 3 -->
            <div class="bg-gradient-to-br from-indigo-500 to-blue-600 text-white p-8 rounded-2xl card-hover">
                <h3 class="text-2xl font-bold mb-4">Дизайн фасадов</h3>
                <p class="leading-relaxed">
                    Фасады башен оформлены в стиле минимализм с использованием платинового стекла и белой стали.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Process Steps Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Image -->
            <div class="order-2 lg:order-1">
                <img src="{{ asset('images/capital_towers/1.webp') }}" alt="Capital Towers Building" 
                     class="w-full rounded-2xl shadow-2xl transform hover:scale-105 transition-transform duration-500">
            </div>

            <!-- Process Steps -->
            <div class="order-1 lg:order-2">
                <h2 class="text-4xl font-bold text-gray-900 mb-8">Процесс проекта</h2>

                <div class="space-y-8">
                    <!-- Step 1 -->
                    <div class="flex items-start space-x-4">
                        <div class="bg-blue-500 text-white w-8 h-8 rounded-full flex items-center justify-center font-bold flex-shrink-0 mt-1">1</div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Запуск и планирование</h3>
                            <p class="text-gray-600 leading-relaxed">
                                Комплексное планирование архитектуры и инженерных систем с учетом современных технологий и экологических стандартов.
                            </p>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="flex items-start space-x-4">
                        <div class="bg-teal-500 text-white w-8 h-8 rounded-full flex items-center justify-center font-bold flex-shrink-0 mt-1">2</div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Выполнение строительства</h3>
                            <p class="text-gray-600 leading-relaxed">
                                Строительство трех небоскребов с применением передовых технологий и высококачественных материалов.
                            </p>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="flex items-start space-x-4">
                        <div class="bg-purple-500 text-white w-8 h-8 rounded-full flex items-center justify-center font-bold flex-shrink-0 mt-1">3</div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Мониторинг и контроль</h3>
                            <p class="text-gray-600 leading-relaxed">
                                Постоянный контроль качества строительства и соблюдение всех технических требований и стандартов безопасности.
                            </p>
                        </div>
                    </div>

                    <!-- Step 4 -->
                    <div class="flex items-start space-x-4">
                        <div class="bg-green-500 text-white w-8 h-8 rounded-full flex items-center justify-center font-bold flex-shrink-0 mt-1">4</div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Отделка и сдача</h3>
                            <p class="text-gray-600 leading-relaxed">
                                Финальная отделка помещений и благоустройство территории с последующей сдачей объекта заказчику.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Detailed Information Section -->
<section class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="max-w-4xl mx-auto">
            <h2 class="text-4xl font-bold text-center text-gray-900 mb-8">Детали проекта</h2>
            <div class="section-divider mb-12"></div>

            <div class="grid md:grid-cols-2 gap-8 mb-12">
                <!-- Facilities -->
                <div class="space-y-6">
                    <div class="bg-gray-50 p-6 rounded-xl">
                        <h4 class="font-bold text-gray-900 mb-2">Парковка</h4>
                        <p class="text-gray-600">Паркинг рассчитан на 1277 машин</p>
                    </div>
                    
                    <div class="bg-gray-50 p-6 rounded-xl">
                        <h4 class="font-bold text-gray-900 mb-2">Офисные помещения</h4>
                        <p class="text-gray-600">Общая площадь 23,2 тыс. кв. метров</p>
                    </div>
                    
                    <div class="bg-gray-50 p-6 rounded-xl">
                        <h4 class="font-bold text-gray-900 mb-2">Торговые площади</h4>
                        <p class="text-gray-600">720 кв. метров торговых помещений</p>
                    </div>
                    
                    <div class="bg-gray-50 p-6 rounded-xl">
                        <h4 class="font-bold text-gray-900 mb-2">Рестораны и кафе</h4>
                        <p class="text-gray-600">1,2 тыс. метров для заведений питания</p>
                    </div>
                </div>

                <!-- More Facilities -->
                <div class="space-y-6">
                    <div class="bg-gray-50 p-6 rounded-xl">
                        <h4 class="font-bold text-gray-900 mb-2">Фитнес-клуб</h4>
                        <p class="text-gray-600">2 тыс. кв. метров для занятий спортом</p>
                    </div>
                    
                    <div class="bg-gray-50 p-6 rounded-xl">
                        <h4 class="font-bold text-gray-900 mb-2">Детский центр</h4>
                        <p class="text-gray-600">1,2 тыс. метров, рассчитан на 100 детей</p>
                    </div>
                    
                    <div class="bg-gray-50 p-6 rounded-xl">
                        <h4 class="font-bold text-gray-900 mb-2">Расположение</h4>
                        <p class="text-gray-600">До метро «Выставочная» – 400м, до «Делового центра» – 450м</p>
                    </div>
                    
                    <div class="bg-gray-50 p-6 rounded-xl">
                        <h4 class="font-bold text-gray-900 mb-2">Парковая зона</h4>
                        <p class="text-gray-600">Собственная территория с выходом в парк «Красная Пресня»</p>
                    </div>
                </div>
            </div>

            <!-- Description -->
            <div class="bg-gradient-to-r from-blue-50 to-purple-50 p-8 rounded-2xl">
                <p class="text-lg text-gray-700 leading-relaxed text-center">
                    Комплекс находится на Краснопресненской набережной, поблизости от ММДЦ «Москва-Сити» и парка «Красная Пресня». 
                    Предусмотрена собственная парковая территория с выходом в городской парк «Красная Пресня». 
                    В соседнем строении находится «Экспоцентр».
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Contact CTA Section -->
<section class="py-20 bg-gradient-to-r from-gray-800 to-gray-900 text-white">
    <div class="container mx-auto px-4 text-center">
        <h2 class="text-4xl font-bold mb-6">Заинтересованы в проекте?</h2>
        <p class="text-xl mb-8 opacity-90">Свяжитесь с нами для получения дополнительной информации</p>
        <a href="{{ route('contact') }}" 
           class="inline-flex items-center px-8 py-4 bg-blue-600 hover:bg-blue-700 text-white font-semibold rounded-xl transition-all duration-300 transform hover:scale-105">
            <i class="fas fa-phone mr-3"></i>
            Связаться с нами
        </a>
    </div>
</section>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Animate elements on scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fade-in');
            }
        });
    }, observerOptions);

    // Observe all cards and sections
    document.querySelectorAll('.card-hover, .space-y-8 > div').forEach(el => {
        observer.observe(el);
    });
});
</script>

@endsection