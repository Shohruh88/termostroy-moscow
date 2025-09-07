@extends('layouts.app')
@section('title', 'О компании')

@section('content')
<br>
<div style="background-color:aliceblue ">
    <!-- Hero Section -->
    <section class="text-center py-16 bg-gradient-to-br from-gray-50 to-white">
        <div class="max-w-4xl mx-auto px-4">
            <h1 class="text-5xl font-bold text-gray-900 mb-6">О компании Termostroy</h1>
            <p class="text-xl text-gray-600 leading-relaxed">
                Профессиональные решения в области инженерных систем с 2005 года
            </p>
        </div>
    </section>

    <!-- Main Content -->
    <section class="py-16">
        <div class="max-w-6xl mx-auto px-4">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <!-- Text Content -->
                <div class="space-y-6">
                    <div>
                        <h2 class="text-3xl font-bold text-gray-900 mb-4">Наша миссия</h2>
                        <p class="text-gray-700 text-lg leading-relaxed">
                            Предоставление услуг инвестиционным и подрядным организациям путем оказания технической поддержки и создания оптимальных решений с постоянно развивающимися технологиями, ставя качество и профессиональный подход на первое место.
                        </p>
                    </div>

                    <div>
                        <h3 class="text-2xl font-semibold text-gray-900 mb-4">Наш опыт</h3>
                        <p class="text-gray-700 leading-relaxed mb-4">
                            Группа компаний Termostroy работает с 2005 года. Мы специализируемся на проектировании, монтаже и обслуживании систем кондиционирования и вентиляции, а также систем отопления и горячего водоснабжения.
                        </p>
                        <p class="text-gray-700 leading-relaxed">
                            Сегодня мы являемся одним из лидеров рынка ОВиВК в Москве, имеем большое количество компаний-партнеров и клиентов в различных сферах бизнеса.
                        </p>
                    </div>
                </div>

                <!-- Image -->
                <div class="relative">
                    <img src="{{ asset('images/logo-termo.png') }}" alt="Наши проекты" class="rounded-lg shadow-xl w-full">
                    <div class="absolute inset-0 bg-gradient-to-tr from-lime-400/20 to-transparent rounded-lg"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-4xl mx-auto px-4">
            <div class="grid md:grid-cols-2 gap-8 text-center">
                <div class="bg-white p-8 rounded-xl shadow-lg">
                    <div class="text-4xl font-bold text-lime-500 mb-2">17+</div>
                    <div class="text-xl font-semibold text-gray-900 mb-2">лет опыта</div>
                    <div class="text-gray-600">в разработке и реализации инженерных решений</div>
                </div>
                <div class="bg-white p-8 rounded-xl shadow-lg">
                    <div class="text-4xl font-bold text-lime-500 mb-2">2+ млн м²</div>
                    <div class="text-xl font-semibold text-gray-900 mb-2">построено</div>
                    <div class="text-gray-600">с момента основания компании</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Advantages Section -->
    <section class="py-16">
        <div class="max-w-6xl mx-auto px-4">
            <h2 class="text-3xl font-bold text-center text-gray-900 mb-12">Наши преимущества</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <div class="text-center p-6">
                    <div class="w-16 h-16 bg-lime-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-lime-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Высокое качество</h3>
                    <p class="text-gray-600">Современное оборудование и профессиональная команда гарантируют отличный результат</p>
                </div>
                <div class="text-center p-6">
                    <div class="w-16 h-16 bg-lime-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-lime-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Инновации</h3>
                    <p class="text-gray-600">Применяем передовые технологии для повышения эффективности систем</p>
                </div>
                <div class="text-center p-6">
                    <div class="w-16 h-16 bg-lime-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-lime-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Быстрые сроки</h3>
                    <p class="text-gray-600">Выполняем работы в кратчайшие сроки без ущерба для качества</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact CTA -->
    <div class="relative bg-cover bg-center bg-no-repeat min-h-[400px]" style="background-image: url('/images/logo-termo.png');">
        <div class="bg-black bg-opacity-70 min-h-[400px] flex items-center">
            <div class="max-w-4xl px-4 sm:px-6 lg:px-8 mx-auto py-16 text-white text-center">
                <h2 class="text-3xl md:text-4xl font-bold mb-6">Готовы обсудить ваш проект?</h2>
                <p class="text-xl mb-8 text-gray-200">
                    Свяжитесь с нами для получения консультации и расчета стоимости
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                    <a href="tel:+79672145669" 
                       class="inline-flex items-center gap-3 bg-lime-500 hover:bg-lime-600 text-black font-semibold px-8 py-3 rounded-lg transition-colors">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                        +7 (967) 214-56-69
                    </a>
                    <a href="{{ route('contact') }}" 
                       class="inline-flex items-center gap-3 border border-white text-white hover:bg-white hover:text-black font-semibold px-8 py-3 rounded-lg transition-colors">
                        Написать нам
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
</div>