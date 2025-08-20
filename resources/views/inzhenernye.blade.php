@extends('layouts.app')

@section('content')
<div class="bg-white">
    <!-- Hero Section -->
    <section class="relative bg-gray-900 text-white py-20">
        <div class="absolute inset-0 bg-gradient-to-r from-black/70 to-black/50"></div>
        <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-6">
                    Инженерные системы
                </h1>
                <p class="text-xl md:text-2xl text-gray-300 max-w-3xl mx-auto">
                    Комплексные решения для систем отопления, вентиляции, кондиционирования, водоснабжения и электроснабжения
                </p>
            </div>
        </div>
    </section>

    <!-- Services Overview -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Полный спектр инженерных услуг
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Наша компания предоставляет полный цикл услуг по проектированию, монтажу и обслуживанию инженерных систем для жилых и коммерческих объектов
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- HVAC -->
                <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-xl transition-shadow">
                    <div class="w-16 h-16 bg-lime-100 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-lime-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Отопление, вентиляция и кондиционирование</h3>
                    <p class="text-gray-600 mb-4">
                        Проектирование и монтаж систем HVAC с использованием современных технологий для обеспечения комфортного микроклимата
                    </p>
                    <ul class="text-sm text-gray-500">
                        <li>• Системы центрального отопления</li>
                        <li>• Приточно-вытяжная вентиляция</li>
                        <li>• Системы кондиционирования</li>
                        <li>• Автоматизация климат-контроля</li>
                    </ul>
                </div>

                <!-- Водоснабжение -->
                <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-xl transition-shadow">
                    <div class="w-16 h-16 bg-blue-100 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8l6 6m0 0l6-6m-6 6V3"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Водоснабжение и канализация</h3>
                    <p class="text-gray-600 mb-4">
                        Комплексные решения для систем водоснабжения, водоотведения и очистки воды с применением передовых технологий
                    </p>
                    <ul class="text-sm text-gray-500">
                        <li>• Системы холодного и горячего водоснабжения</li>
                        <li>• Канализационные системы</li>
                        <li>• Системы водоочистки</li>
                        <li>• Насосные станции</li>
                    </ul>
                </div>

                <!-- Электроснабжение -->
                <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-xl transition-shadow">
                    <div class="w-16 h-16 bg-yellow-100 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-yellow-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Электроснабжение</h3>
                    <p class="text-gray-600 mb-4">
                        Проектирование и монтаж электрических систем с соблюдением всех требований безопасности и энергоэффективности
                    </p>
                    <ul class="text-sm text-gray-500">
                        <li>• Силовые электрические сети</li>
                        <li>• Системы освещения</li>
                        <li>• Автоматизация и диспетчеризация</li>
                        <li>• Резервное электроснабжение</li>
                    </ul>
                </div>

                <!-- Слаботочные системы -->
                <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-xl transition-shadow">
                    <div class="w-16 h-16 bg-purple-100 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Слаботочные системы</h3>
                    <p class="text-gray-600 mb-4">
                        Современные решения для систем связи, безопасности и автоматизации зданий
                    </p>
                    <ul class="text-sm text-gray-500">
                        <li>• Структурированные кабельные системы</li>
                        <li>• Системы видеонаблюдения</li>
                        <li>• Пожарная сигнализация</li>
                        <li>• Системы контроля доступа</li>
                    </ul>
                </div>

                <!-- Автоматизация -->
                <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-xl transition-shadow">
                    <div class="w-16 h-16 bg-green-100 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Автоматизация зданий</h3>
                    <p class="text-gray-600 mb-4">
                        Интеллектуальные системы управления зданием для оптимизации энергопотребления и комфорта
                    </p>
                    <ul class="text-sm text-gray-500">
                        <li>• Система "Умный дом"</li>
                        <li>• Диспетчеризация инженерных систем</li>
                        <li>• Энергоменеджмент</li>
                        <li>• Интеграция всех систем</li>
                    </ul>
                </div>

                <!-- Пожарная безопасность -->
                <div class="bg-white rounded-xl shadow-lg p-8 hover:shadow-xl transition-shadow">
                    <div class="w-16 h-16 bg-red-100 rounded-lg flex items-center justify-center mb-6">
                        <svg class="w-8 h-8 text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold mb-4">Пожарная безопасность</h3>
                    <p class="text-gray-600 mb-4">
                        Комплексные решения для обеспечения пожарной безопасности объектов любой сложности
                    </p>
                    <ul class="text-sm text-gray-500">
                        <li>• Системы пожарной сигнализации</li>
                        <li>• Автоматическое пожаротушение</li>
                        <li>• Противодымная вентиляция</li>
                        <li>• Эвакуационные системы</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Process Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Этапы реализации проекта
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Полный цикл работ от проектирования до ввода в эксплуатацию
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="w-16 h-16 bg-lime-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold text-lime-600">1</span>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Проектирование</h3>
                    <p class="text-gray-600 text-sm">Разработка проектной документации с учетом всех требований и норм</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold text-blue-600">2</span>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Поставка оборудования</h3>
                    <p class="text-gray-600 text-sm">Закупка и доставка качественного оборудования от проверенных производителей</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-yellow-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold text-yellow-600">3</span>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Монтаж и наладка</h3>
                    <p class="text-gray-600 text-sm">Профессиональный монтаж систем с последующей настройкой и тестированием</p>
                </div>

                <div class="text-center">
                    <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold text-green-600">4</span>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Сервисное обслуживание</h3>
                    <p class="text-gray-600 text-sm">Постоянное техническое обслуживание и поддержка работоспособности систем</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Advantages Section -->
    <section class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-6">
                        Почему выбирают нас?
                    </h2>
                    <div class="space-y-6">
                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-lime-100 rounded-full flex items-center justify-center mr-4 mt-1">
                                <svg class="w-4 h-4 text-lime-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold mb-2">Опыт более 20 лет</h3>
                                <p class="text-gray-600">Многолетний опыт работы с объектами различной сложности и назначения</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-lime-100 rounded-full flex items-center justify-center mr-4 mt-1">
                                <svg class="w-4 h-4 text-lime-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold mb-2">Собственная проектная база</h3>
                                <p class="text-gray-600">Полный цикл проектирования с использованием современных технологий</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-lime-100 rounded-full flex items-center justify-center mr-4 mt-1">
                                <svg class="w-4 h-4 text-lime-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold mb-2">Квалифицированные специалисты</h3>
                                <p class="text-gray-600">Команда профессионалов с необходимыми лицензиями и сертификатами</p>
                            </div>
                        </div>

                        <div class="flex items-start">
                            <div class="w-8 h-8 bg-lime-100 rounded-full flex items-center justify-center mr-4 mt-1">
                                <svg class="w-4 h-4 text-lime-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold mb-2">Гарантия качества</h3>
                                <p class="text-gray-600">Полная гарантия на выполненные работы и установленное оборудование</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="relative">
                    <img src="{{ asset('images/telegraf70.jpg') }}" alt="Moscow City" class="rounded-lg shadow-lg">
                    <div class="absolute inset-0 bg-lime-600 bg-opacity-20 rounded-lg"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Technologies Section -->
    <section class="py-16 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Современные технологии
                </h2>
                <p class="text-lg text-gray-600 max-w-3xl mx-auto">
                    Мы используем передовые технологии и оборудование от ведущих мировых производителей
                </p>
            </div>

            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="w-20 h-20 bg-gray-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold text-gray-600">BIM</span>
                    </div>
                    <h3 class="text-sm font-semibold">3D моделирование</h3>
                </div>

                <div class="text-center">
                    <div class="w-20 h-20 bg-gray-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold text-gray-600">IoT</span>
                    </div>
                    <h3 class="text-sm font-semibold">Интернет вещей</h3>
                </div>

                <div class="text-center">
                    <div class="w-20 h-20 bg-gray-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold text-gray-600">AI</span>
                    </div>
                    <h3 class="text-sm font-semibold">Искусственный интеллект</h3>
                </div>

                <div class="text-center">
                    <div class="w-20 h-20 bg-gray-100 rounded-lg flex items-center justify-center mx-auto mb-4">
                        <span class="text-2xl font-bold text-gray-600">VR</span>
                    </div>
                    <h3 class="text-sm font-semibold">Виртуальная реальность</h3>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="py-16 bg-gray-900 text-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold mb-4">
                    Получить консультацию
                </h2>
                <p class="text-lg text-gray-300 max-w-3xl mx-auto">
                    Свяжитесь с нами для получения профессиональной консультации по инженерным системам
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center">
                <div>
                    <div class="w-16 h-16 bg-lime-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-lime-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Телефон</h3>
                    <p class="text-gray-300">+7 (967) 214-56-69</p>
                </div>

                <div>
                    <div class="w-16 h-16 bg-lime-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-lime-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Email</h3>
                    <p class="text-gray-300">info@termostroy.moscow</p>
                </div>

                <div>
                    <div class="w-16 h-16 bg-lime-100 rounded-full flex items-center justify-center mx-auto mb-4">
                        <svg class="w-8 h-8 text-lime-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold mb-2">Адрес</h3>
                    <p class="text-gray-300">г. Москва, 5-я Магистральная, д.12, ком.42</p>
                </div>
            </div>

            <div class="text-center mt-12">
                <a href="{{ route('contact') }}" class="inline-flex items-center px-8 py-3 bg-lime-600 hover:bg-lime-700 text-white font-semibold rounded-lg transition-colors">
                    Связаться с нами
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>
</div>

@endsection