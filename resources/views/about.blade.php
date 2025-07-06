@extends('layouts.app')
@section('title', 'About')

@section('content')
    <style>
        .bg-gradient-dark {
            background: linear-gradient(135deg, #1f2937 0%, #374151 100%);
        }
        
        .text-gradient {
            background: linear-gradient(135deg, #84cc16, #65a30d);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }
        
        .hover-scale {
            transition: transform 0.3s ease;
        }
        
        .hover-scale:hover {
            transform: scale(1.02);
        }
        
        .building-bg {
            background-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" opacity="0.1"><rect x="10" y="20" width="15" height="60" fill="%2384cc16"/><rect x="30" y="10" width="15" height="70" fill="%2365a30d"/><rect x="50" y="25" width="15" height="55" fill="%2384cc16"/><rect x="70" y="15" width="15" height="65" fill="%2365a30d"/></svg>');
            background-repeat: no-repeat;
            background-position: right top;
            background-size: 200px;
        }
    </style>

    <!-- Hero Section -->
    <section class="text-center my-12 py-16 relative overflow-hidden building-bg">
        <div class="max-w-4xl mx-auto px-4">
            <h1 class="text-4xl md:text-5xl font-bold mb-4">
                Наша <span class="text-gradient">миссия</span>
            </h1>
            <div class="w-24 h-1 bg-gradient-to-r from-lime-500 to-green-600 mx-auto mb-8"></div>
            <p class="text-gray-600 mt-2 text-lg">{{__('site.about_subtitle')}}</p>
        </div>
    </section>

    <!-- Mission Statement -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-white rounded-2xl shadow-xl p-8 md:p-12">
                <div class="grid lg:grid-cols-2 gap-12 items-center">
                    <!-- Text Content -->
                    <div>
                        <h2 class="text-2xl md:text-3xl font-bold text-gray-900 mb-6">
                            О компании <span class="text-gradient">GIMTAS ENGINEERING</span>
                        </h2>
                        <div class="space-y-4 text-gray-700 leading-relaxed">
                            <p class="text-lg">
                                <strong>GIMTAS ENGINEERING</strong> – молодая и быстрорастущая инжиниринговая компания, основанная в 2017 году, специализирующаяся на проектировании и монтаже внутренних инженерных систем на объектах коммерческой и жилой недвижимости.
                            </p>
                            <p class="text-lg">
                                Предоставление услуг инвестиционным и подрядным организациям, путем оказания технической поддержки и создания оптимальных решений, с постоянно развивающимися технологиями, оставляя коммерческие вопросы на заднем плане, и ставя в нашей работе качество и профессиональный подход – на первое место.
                            </p>
                        </div>
                        <!-- Stats -->
                        <div class="grid grid-cols-2 gap-6 mt-8">
                            <div class="text-center p-4 bg-lime-50 rounded-xl">
                                <div class="text-3xl font-bold text-lime-600 mb-2">8+</div>
                                <div class="text-sm uppercase tracking-wide text-gray-600">лет опыта</div>
                            </div>
                            <div class="text-center p-4 bg-lime-50 rounded-xl">
                                <div class="text-3xl font-bold text-lime-600 mb-2">20+</div>
                                <div class="text-sm uppercase tracking-wide text-gray-600">проектов реализовано</div>
                            </div>
                        </div>
                    </div>

                    <!-- Company Experience & Projects -->
                    <div class="space-y-6">
                        <!-- Completed Projects -->
                        <div class="bg-green-50 p-6 rounded-xl border border-green-200">
                            <h4 class="text-xl font-semibold text-gray-900 mb-4 flex items-center">
                                <span class="w-3 h-3 bg-green-500 rounded-full mr-3"></span>
                                Реализованные проекты
                            </h4>
                            <div class="space-y-2 text-gray-700 text-sm">
                                <p>• Гостиница на Арбате «Pentahotel Moscow»</p>
                                <p>• Жилой комплекс «Ясный»</p>
                                <p>• Гостиничный комплекс «Hampton by Hilton»</p>
                                <p>• Офис Сбербанка на Кутузовском 32</p>
                                <p>• «Apart-hotel YE'S Botanica»</p>
                                <p>• Жилой комплекс «D1»</p>
                            </div>
                        </div>

                        <!-- Current Projects -->
                        <div class="bg-blue-50 p-6 rounded-xl border border-blue-200">
                            <h4 class="text-xl font-semibold text-gray-900 mb-4 flex items-center">
                                <span class="w-3 h-3 bg-blue-500 rounded-full mr-3"></span>
                                Текущие проекты
                            </h4>
                            <div class="space-y-2 text-gray-700 text-sm">
                                <p>• «Mandarin Oriental Residences»</p>
                                <p>• ЖК «Золотой» в составе МФК</p>
                                <p>• «Bvlgari Hotel & Residences Moscow»</p>
                                <p>• Жилой комплекс «Symphony 34»</p>
                                <p>• Жилой комплекс «Остров - 3»</p>
                                <p>• Жилой комплекс «Событие 4»</p>
                                <p>• Жилой комплекс «Victory Park Residences»</p>
                                <p>• Жилой комплекс «AFI Tower»</p>
                            </div>
                        </div>

                        <!-- Partners -->
                        <div class="bg-orange-50 p-6 rounded-xl border border-orange-200">
                            <h4 class="text-xl font-semibold text-gray-900 mb-4 flex items-center">
                                <span class="w-3 h-3 bg-orange-500 rounded-full mr-3"></span>
                                Наши партнеры
                            </h4>
                            <div class="space-y-2 text-gray-700">
                                <p class="font-medium">Основные заказчики:</p>
                                <div class="text-sm space-y-1">
                                    <p>• Турецкие строительные компании <strong>«ANTTEQ»</strong></p>
                                    <p>• <strong>«ANT YAPI»</strong> в составе международного холдинга ANT YAPI</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Vision and Mission Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-16 items-start">
                <!-- Vision Image -->
                <div class="relative">
                    <div class="bg-gradient-to-br from-lime-500 to-green-600 rounded-2xl p-8 text-white">
                        <div class="w-16 h-16 bg-white bg-opacity-20 rounded-2xl flex items-center justify-center mb-6">
                            <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                            </svg>
                        </div>
                        <h3 class="text-2xl md:text-3xl font-bold mb-4">ЖК "Событие 4"</h3>
                        <p class="text-white text-opacity-90">Один из наших флагманских проектов</p>
                    </div>
                </div>

                <!-- Vision and Mission Content -->
                <div class="space-y-8">
                    <!-- Vision -->
                    <div>
                        <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">
                            Наше <span class="text-gradient">видение</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed text-lg">
                            Оставаться надежной и уважаемой компанией, постоянно повышая доверие наших заказчиков, 
                            занимая лидирующую позицию в сфере строительства и инженерии, предоставляя услуги, 
                            с уникальными решениями, в соответствии с международными стандартами качества.
                        </p>
                    </div>

                    <!-- Divider -->
                    <div class="border-t-2 border-lime-200 my-8"></div>

                    <!-- Mission -->
                    <div>
                        <h3 class="text-2xl md:text-3xl font-bold text-gray-900 mb-4">
                            Наша <span class="text-gradient">миссия</span>
                        </h3>
                        <p class="text-gray-700 leading-relaxed text-lg">
                            Предоставление услуг инвестиционным и подрядным организациям, путем оказания технической 
                            поддержки и создания оптимальных решений, с постоянно развивающимися технологиями, 
                            оставляя коммерческие вопросы на заднем плане, и ставя в нашей работе качество и 
                            профессиональный подход – на первое место.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h3 class="text-3xl md:text-4xl font-bold text-center text-gray-900 mb-12">
                Наши <span class="text-gradient">услуги</span>
            </h3>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                <!-- Service 1 -->
                <div class="bg-gray-50 p-8 rounded-2xl shadow-lg hover-scale text-center">
                    <div class="w-16 h-16 bg-lime-100 rounded-2xl flex items-center justify-center mb-6 mx-auto">
                        <svg class="w-8 h-8 text-lime-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                    </div>
                    <h4 class="font-bold text-gray-900 mb-3 text-xl">Проектирование</h4>
                    <p class="text-gray-600">Полный цикл проектирования инженерных систем для всех типов объектов</p>
                </div>

                <!-- Service 2 -->
                <div class="bg-gray-50 p-8 rounded-2xl shadow-lg hover-scale text-center">
                    <div class="w-16 h-16 bg-lime-100 rounded-2xl flex items-center justify-center mb-6 mx-auto">
                        <svg class="w-8 h-8 text-lime-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h4 class="font-bold text-gray-900 mb-3 text-xl">Инженерия</h4>
                    <p class="text-gray-600">Строительно-монтажные работы в соответствии с техническими требованиями</p>
                </div>

                <!-- Service 3 -->
                <div class="bg-gray-50 p-8 rounded-2xl shadow-lg hover-scale text-center">
                    <div class="w-16 h-16 bg-lime-100 rounded-2xl flex items-center justify-center mb-6 mx-auto">
                        <svg class="w-8 h-8 text-lime-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"></path>
                        </svg>
                    </div>
                    <h4 class="font-bold text-gray-900 mb-3 text-xl">Эксплуатация</h4>
                    <p class="text-gray-600">Техническая эксплуатация и обслуживание всех систем жизнеобеспечения</p>
                </div>

                <!-- Service 4 -->
                <div class="bg-gray-50 p-8 rounded-2xl shadow-lg hover-scale text-center">
                    <div class="w-16 h-16 bg-lime-100 rounded-2xl flex items-center justify-center mb-6 mx-auto">
                        <svg class="w-8 h-8 text-lime-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7a2 2 0 012 2m4 0a6 6 0 01-7.743 5.743L11 17H9v2H7v2H4a1 1 0 01-1-1v-2.586a1 1 0 01.293-.707l5.964-5.964A6 6 0 1121 9z"></path>
                        </svg>
                    </div>
                    <h4 class="font-bold text-gray-900 mb-3 text-xl">Работы под ключ</h4>
                    <p class="text-gray-600">Комплексные решения от проектирования до последующей эксплуатации</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Featured Projects -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h3 class="text-3xl md:text-4xl font-bold text-center text-gray-900 mb-12">
                Наши <span class="text-gradient">проекты</span>
            </h3>
            
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Project 1 -->
                <div class="bg-white rounded-2xl shadow-lg p-6 hover-scale">
                    <div class="w-16 h-16 bg-lime-100 rounded-2xl flex items-center justify-center mb-4">
                        <svg class="w-8 h-8 text-lime-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5"></path>
                        </svg>
                    </div>
                    <h4 class="font-bold text-gray-900 mb-2 text-xl">Pentahotel Moscow</h4>
                    <p class="text-gray-600 text-sm mb-4">Гостиница на Арбате</p>
                    <div class="flex items-center justify-between">
                        <span class="text-xs bg-green-100 text-green-800 px-3 py-1 rounded-full">Завершен</span>
                        <a href="{{ route('projects') }}" class="text-lime-600 hover:text-lime-700 text-sm font-medium">Подробнее →</a>
                    </div>
                </div>

                <!-- Project 2 -->
                <div class="bg-white rounded-2xl shadow-lg p-6 hover-scale">
                    <div class="w-16 h-16 bg-lime-100 rounded-2xl flex items-center justify-center mb-4">
                        <svg class="w-8 h-8 text-lime-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5"></path>
                        </svg>
                    </div>
                    <h4 class="font-bold text-gray-900 mb-2 text-xl">Mandarin Oriental</h4>
                    <p class="text-gray-600 text-sm mb-4">Mandarin Oriental Residences</p>
                    <div class="flex items-center justify-between">
                        <span class="text-xs bg-blue-100 text-blue-800 px-3 py-1 rounded-full">В работе</span>
                        <a href="{{ route('projects') }}" class="text-lime-600 hover:text-lime-700 text-sm font-medium">Подробнее →</a>
                    </div>
                </div>

                <!-- Project 3 -->
                <div class="bg-white rounded-2xl shadow-lg p-6 hover-scale">
                    <div class="w-16 h-16 bg-lime-100 rounded-2xl flex items-center justify-center mb-4">
                        <svg class="w-8 h-8 text-lime-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5"></path>
                        </svg>
                    </div>
                    <h4 class="font-bold text-gray-900 mb-2 text-xl">Bvlgari Hotel & Residences</h4>
                    <p class="text-gray-600 text-sm mb-4">Bvlgari Hotel & Residences Moscow</p>
                    <div class="flex items-center justify-between">
                        <span class="text-xs bg-blue-100 text-blue-800 px-3 py-1 rounded-full">В работе</span>
                        <a href="{{ route('projects') }}" class="text-lime-600 hover:text-lime-700 text-sm font-medium">Подробнее →</a>
                    </div>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="{{ route('projects') }}" 
                   class="inline-flex items-center px-8 py-3 bg-lime-600 hover:bg-lime-700 text-white font-semibold rounded-xl transition-colors">
                    👉 Посмотреть все проекты
                </a>
            </div>
        </div>
    </section>

    <!-- Contact CTA Section - Your existing testimonials section improved -->
    <div class="relative bg-lime-600 min-h-[400px]">
        <div class="bg-black bg-opacity-80 min-h-[400px] flex items-center">
            <div class="max-w-7xl px-4 sm:px-6 lg:px-8 mx-auto py-8 lg:py-16 text-white">
                <blockquote class="max-w-4xl mx-auto text-center">
                    <p class="mb-6 md:text-lg">
                        <span class="font-semibold text-lime-400">{{__('site.contact')}}</span> <span class="text-neutral-500">.</span>
                    </p>

                    <p class="text-xl sm:text-2xl md:text-3xl md:leading-normal mb-8">
                        Если у Вас есть вопросы или предложения, можете направить их нам. Мы обязательно Вам ответим.
                    </p>
                    
                    <div class="flex flex-col sm:flex-row gap-4 justify-center mb-8">
                        <a href="tel:+79672145669" 
                           class="bg-lime-500 hover:bg-lime-600 text-black px-8 py-3 rounded-xl font-semibold transition-colors inline-flex items-center justify-center">
                            📞 +7 967 214 5669
                        </a>
                        <a href="mailto:termostroy2018@yandex.ru" 
                           class="border border-lime-400 text-lime-400 hover:bg-lime-400 hover:text-black px-8 py-3 rounded-xl font-semibold transition-colors inline-flex items-center justify-center">
                            📧 Написать нам
                        </a>
                    </div>

                    <footer class="mt-6 md:mt-10">
                        <div class="text-center">
                            <p class="text-sm text-gray-300">
                                г. Москва, 5-я Магистральная, д.12, ком.42
                            </p>
                        </div>
                    </footer>
                </blockquote>
            </div>
        </div>
    </div>

@endsection