@extends('layouts.app')

@section('title', 'Arcus Moscow - Termostroy')

@section('content')

<style>
    .hero-bg {
        background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.3)),
        url('{{ asset("images/arcus/Arcus.webp") }}');
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
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
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
    style="background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.3)), url('{{ asset('images/arcus/Arcus.webp') }}'); background-size: cover; background-position: center;">
    <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black opacity-60"></div>
    <div class="container mx-auto px-4 text-center relative z-10">
        <div class="animate-fade-in">
            <h1 class="text-5xl md:text-7xl font-light mb-6 tracking-wide">Бизнес Центр Arcus III</h1>
            <p class="text-xl md:text-2xl mb-4 opacity-90">Бизнес-центр премиум класса</p>
            <p class="text-lg mb-8 max-w-3xl mx-auto leading-relaxed">
                Современный многофункциональный комплекс с офисными помещениями и коммерческими площадями в центре Москвы
            </p>

            <!-- Stats Grid -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 mt-12">
                <div class="glass-effect p-6 rounded-xl">
                    <div class="stats-counter">18</div>
                    <div class="text-sm opacity-80">этажей</div>
                </div>
                <div class="glass-effect p-6 rounded-xl">
                    <div class="stats-counter">85м</div>
                    <div class="text-sm opacity-80">высота здания</div>
                </div>
                <div class="glass-effect p-6 rounded-xl">
                    <div class="stats-counter">45000м²</div>
                    <div class="text-sm opacity-80">общая площадь</div>
                </div>
                <div class="glass-effect p-6 rounded-xl">
                    <div class="stats-counter">2022</div>
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
                Обладающий превосходным расположением и самобытной архитектурой, бизнес-центр Arcus III,
                 был реализован в развивающемся деловом районе Ленинградский, города Москва, чтобы вдохнуть жизнь в офисные будни.

                Поскольку Ленинградский проспект, на котором расположен проект, является продолжением главной Тверской улицы города,
                которая берёт начало у Кремля и соединяется с Ленинградским проспектом недалеко от станции метро Белорусская,
                Бизнес-центр Arcus III находится в центре внимания.
            </p>
        </div>

        <div class="grid lg:grid-cols-3 gap-8 mb-16">
            <!-- Card 1 -->
            <div class="bg-gradient-to-br from-blue-500 to-purple-600 text-white p-8 rounded-2xl card-hover">
                <h3 class="text-2xl font-bold mb-4">Офисные помещения</h3>
                <p class="leading-relaxed">
                    Гибкие планировочные решения от 100 до 2500 кв.м с возможностью индивидуального зонирования
                    и современными инженерными системами.
                </p>
            </div>

            <!-- Card 2 -->
            <div class="bg-gradient-to-br from-teal-500 to-cyan-600 text-white p-8 rounded-2xl card-hover">
                <h3 class="text-2xl font-bold mb-4">Архитектура</h3>
                <p class="leading-relaxed">
                    Современный дизайн фасада с использованием стеклянных панелей и металлических элементов,
                    создающих элегантный и профессиональный облик.
                </p>
            </div>

            <!-- Card 3 -->
            <div class="bg-gradient-to-br from-indigo-500 to-blue-600 text-white p-8 rounded-2xl card-hover">
                <h3 class="text-2xl font-bold mb-4">Инфраструктура</h3>
                <p class="leading-relaxed">
                    Комплексная инфраструктура включает конференц-залы, ресторанные зоны,
                    фитнес-центр и подземный паркинг.
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
                <img src="{{ asset('images/arcus/Arcus.webp') }}" alt="Arcus Business Center"
                    class="w-full rounded-2xl shadow-2xl transform hover:scale-105 transition-transform duration-500" loading="lazy">
            </div>

            <!-- Process Steps -->
            <div class="order-1 lg:order-2">
                <h2 class="text-4xl font-bold text-gray-900 mb-8">Процесс проекта</h2>

                <div class="space-y-8">
                    <!-- Step 1 -->
                    <div class="flex items-start space-x-4">
                        <div class="bg-blue-500 text-white w-8 h-8 rounded-full flex items-center justify-center font-bold flex-shrink-0 mt-1">1</div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Концептуальное проектирование</h3>
                            <p class="text-gray-600 leading-relaxed">
                                Разработка архитектурной концепции с учетом современных требований к бизнес-центрам
                                и международных стандартов качества.
                            </p>
                        </div>
                    </div>

                    <!-- Step 2 -->
                    <div class="flex items-start space-x-4">
                        <div class="bg-teal-500 text-white w-8 h-8 rounded-full flex items-center justify-center font-bold flex-shrink-0 mt-1">2</div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Инженерные системы</h3>
                            <p class="text-gray-600 leading-relaxed">
                                Проектирование и монтаж современных инженерных систем: вентиляции, кондиционирования,
                                электроснабжения и систем безопасности.
                            </p>
                        </div>
                    </div>

                    <!-- Step 3 -->
                    <div class="flex items-start space-x-4">
                        <div class="bg-purple-500 text-white w-8 h-8 rounded-full flex items-center justify-center font-bold flex-shrink-0 mt-1">3</div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Строительство</h3>
                            <p class="text-gray-600 leading-relaxed">
                                Выполнение строительно-монтажных работ с применением современных технологий
                                и контролем качества на каждом этапе.
                            </p>
                        </div>
                    </div>

                    <!-- Step 4 -->
                    <div class="flex items-start space-x-4">
                        <div class="bg-green-500 text-white w-8 h-8 rounded-full flex items-center justify-center font-bold flex-shrink-0 mt-1">4</div>
                        <div>
                            <h3 class="text-xl font-bold text-gray-900 mb-2">Сдача объекта</h3>
                            <p class="text-gray-600 leading-relaxed">
                                Финальная отделка, благоустройство территории и передача готового
                                к эксплуатации объекта заказчику.
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
                        <h4 class="font-bold text-gray-900 mb-2">Паркинг</h4>
                        <p class="text-gray-600">Подземный паркинг на 450 машиномест</p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-xl">
                        <h4 class="font-bold text-gray-900 mb-2">Офисные площади</h4>
                        <p class="text-gray-600">Общая площадь офисов 35,000 кв. метров</p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-xl">
                        <h4 class="font-bold text-gray-900 mb-2">Коммерческие площади</h4>
                        <p class="text-gray-600">2,500 кв. метров торговых помещений</p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-xl">
                        <h4 class="font-bold text-gray-900 mb-2">Рестораны и кафе</h4>
                        <p class="text-gray-600">1,500 кв. метров для заведений питания</p>
                    </div>
                </div>

                <!-- More Facilities -->
                <div class="space-y-6">
                    <div class="bg-gray-50 p-6 rounded-xl">
                        <h4 class="font-bold text-gray-900 mb-2">Конференц-залы</h4>
                        <p class="text-gray-600">5 современных конференц-залов на 800 кв. метров</p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-xl">
                        <h4 class="font-bold text-gray-900 mb-2">Фитнес-центр</h4>
                        <p class="text-gray-600">1,200 кв. метров для занятий спортом</p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-xl">
                        <h4 class="font-bold text-gray-900 mb-2">Расположение</h4>
                        <p class="text-gray-600">Центральный район Москвы с удобной транспортной доступностью</p>
                    </div>

                    <div class="bg-gray-50 p-6 rounded-xl">
                        <h4 class="font-bold text-gray-900 mb-2">Сертификация</h4>
                        <p class="text-gray-600">Соответствие международным стандартам LEED и BREEAM</p>
                    </div>
                </div>
            </div>

            <!-- Description -->
            <div class="bg-gradient-to-r from-blue-50 to-purple-50 p-8 rounded-2xl">
                <p class="text-lg text-gray-700 leading-relaxed text-center">
                    Обладающий превосходным расположением и самобытной архитектурой, бизнес-центр Arcus III, был реализован в развивающемся деловом районе Ленинградский, города Москва, чтобы вдохнуть жизнь в офисные будни.

                    Поскольку Ленинградский проспект, на котором расположен проект, является продолжением главной Тверской улицы города,
                    которая берёт начало у Кремля и соединяется с Ленинградским проспектом недалеко от станции метро Белорусская,
                    Бизнес-центр Arcus III находится в центре внимания.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Gallery Section -->
<section class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Галерея проекта</h2>
            <div class="mx-auto h-1 w-24 bg-gray-900/10 rounded-full"></div>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-6">
            @for($i = 1; $i <= 9; $i++)
                <a href="{{ asset("images/arcus/$i.jpg") }}" 
                   data-lightbox="arcus-gallery" 
                   data-title="Arcus III photo {{ $i }}">
                    <img src="{{ asset("images/arcus/$i.jpg") }}" 
                         alt="Arcus III photo {{ $i }}"
                         class="w-full h-64 object-cover rounded-xl shadow-md hover:scale-105 transition-transform duration-300"
                         loading="{{ $i === 1 ? 'eager' : 'lazy' }}">
                </a>
            @endfor
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