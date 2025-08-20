@extends('layouts.app')

@section('title', 'Сбербанк Проект - Termostroy')

@section('content')

<div class="container mx-auto py-10 px-4">
    <!-- Hero Section -->
    <div class="text-center mb-12">
        <h1 class="text-4xl font-bold text-gray-800 mb-4">Сбербанк Технологический Центр</h1>
        <p class="text-lg text-gray-600">Инновационное офисное здание с современными инженерными решениями</p>
    </div>

    <!-- Main Content Grid -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
        <!-- Left Side - Image Gallery -->
        <div class="space-y-6">
            <!-- Main Image -->
            <div class="w-full">
                <img src="{{ asset('images/sberbank/1.webp') }}" 
                     alt="Сбербанк Технологический Центр" 
                     class="w-full h-96 object-cover rounded-lg shadow-lg">
            </div>
            
            <!-- Additional Images Grid -->
            <div class="grid grid-cols-2 gap-4">
                <img src="{{ asset('images/sberbank/2.webp') }}" 
                     alt="Интерьер Сбербанк" 
                     class="w-full h-48 object-cover rounded-lg shadow-md">
                <img src="{{ asset('images/sberbank/6.webp') }}" 
                     alt="Офисные помещения" 
                     class="w-full h-48 object-cover rounded-lg shadow-md">
            </div>
            
            <!-- Additional Interior Images -->
            <div class="grid grid-cols-1 gap-4">
                <img src="{{ asset('images/sberbank/4.webp') }}" 
                     alt="Лобби Сбербанк" 
                     class="w-full h-64 object-cover rounded-lg shadow-md">
                <img src="{{ asset('images/sberbank/5.webp') }}" 
                     alt="Рабочие пространства" 
                     class="w-full h-64 object-cover rounded-lg shadow-md">
            </div>
        </div>

        <!-- Right Side - Project Information -->
        <div class="lg:pl-8">
            <!-- Project Details Card -->
            <div class="bg-white rounded-xl shadow-lg p-8 mb-8">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Детали проекта</h2>
                
                <div class="space-y-4">
                    <div class="flex justify-between items-center border-b pb-2">
                        <span class="font-semibold text-gray-600">Заказчик:</span>
                        <span class="text-gray-800">ПАО "Сбербанк"</span>
                    </div>
                    
                    <div class="flex justify-between items-center border-b pb-2">
                        <span class="font-semibold text-gray-600">Адрес:</span>
                        <span class="text-gray-800">г. Москва, Кутузовский пр-т</span>
                    </div>
                    
                    <div class="flex justify-between items-center border-b pb-2">
                        <span class="font-semibold text-gray-600">Срок строительства:</span>
                        <span class="text-gray-800">2020-2022</span>
                    </div>
                    
                    <div class="flex justify-between items-center border-b pb-2">
                        <span class="font-semibold text-gray-600">Общая площадь:</span>
                        <span class="text-gray-800">85.000 м²</span>
                    </div>
                    
                    <div class="flex justify-between items-center">
                        <span class="font-semibold text-gray-600">Количество этажей:</span>
                        <span class="text-gray-800">25 этажей</span>
                    </div>
                </div>
            </div>

            <!-- Services Provided -->
            <div class="bg-gradient-to-br from-blue-50 to-green-50 rounded-xl p-8">
                <h3 class="text-xl font-bold text-gray-800 mb-6">Выполненные работы</h3>
                
                <div class="grid grid-cols-1 gap-4">
                    <div class="flex items-center space-x-3">
                        <div class="w-2 h-2 bg-lime-400 rounded-full"></div>
                        <span class="text-gray-700">Отопление и теплоснабжение</span>
                    </div>
                    
                    <div class="flex items-center space-x-3">
                        <div class="w-2 h-2 bg-lime-400 rounded-full"></div>
                        <span class="text-gray-700">Системы вентиляции и кондиционирования</span>
                    </div>
                    
                    <div class="flex items-center space-x-3">
                        <div class="w-2 h-2 bg-lime-400 rounded-full"></div>
                        <span class="text-gray-700">Водоснабжение и канализация</span>
                    </div>
                    
                    <div class="flex items-center space-x-3">
                        <div class="w-2 h-2 bg-lime-400 rounded-full"></div>
                        <span class="text-gray-700">Электроснабжение и автоматизация</span>
                    </div>
                    
                    <div class="flex items-center space-x-3">
                        <div class="w-2 h-2 bg-lime-400 rounded-full"></div>
                        <span class="text-gray-700">Системы безопасности</span>
                    </div>
                    
                    <div class="flex items-center space-x-3">
                        <div class="w-2 h-2 bg-lime-400 rounded-full"></div>
                        <span class="text-gray-700">Умное здание (Smart Building)</span>
                    </div>
                    
                    <div class="flex items-center space-x-3">
                        <div class="w-2 h-2 bg-lime-400 rounded-full"></div>
                        <span class="text-gray-700">Пожаротушение и дымоудаление</span>
                    </div>
                    
                    <div class="flex items-center space-x-3">
                        <div class="w-2 h-2 bg-lime-400 rounded-full"></div>
                        <span class="text-gray-700">Энергоэффективные решения</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Project Process Section -->
    <div class="mt-16">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Этапы реализации проекта</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <!-- Step 1 -->
            <div class="text-center">
                <div class="w-16 h-16 bg-lime-400 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-2xl font-bold text-white">1</span>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-3">Проектирование</h3>
                <p class="text-gray-600">Разработка технических решений и проектной документации с учетом современных стандартов</p>
            </div>
            
            <!-- Step 2 -->
            <div class="text-center">
                <div class="w-16 h-16 bg-lime-400 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-2xl font-bold text-white">2</span>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-3">Монтаж</h3>
                <p class="text-gray-600">Качественный монтаж всех инженерных систем с соблюдением технологических требований</p>
            </div>
            
            <!-- Step 3 -->
            <div class="text-center">
                <div class="w-16 h-16 bg-lime-400 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-2xl font-bold text-white">3</span>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-3">Пуско-наладка</h3>
                <p class="text-gray-600">Настройка и тестирование всех систем для обеспечения оптимальной работы</p>
            </div>
            
            <!-- Step 4 -->
            <div class="text-center">
                <div class="w-16 h-16 bg-lime-400 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="text-2xl font-bold text-white">4</span>
                </div>
                <h3 class="text-xl font-semibold text-gray-800 mb-3">Сдача объекта</h3>
                <p class="text-gray-600">Финальные испытания, документооборот и передача объекта заказчику</p>
            </div>
        </div>
    </div>

    <!-- Key Features Section -->
    <div class="mt-16 bg-gray-50 rounded-xl p-8">
        <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Особенности проекта</h2>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="bg-white rounded-lg p-6 shadow-md">
                <div class="w-12 h-12 bg-blue-100 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-800 mb-3">Высокие стандарты</h3>
                <p class="text-gray-600">Соответствие международным стандартам энергоэффективности и экологичности</p>
            </div>
            
            <div class="bg-white rounded-lg p-6 shadow-md">
                <div class="w-12 h-12 bg-green-100 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-800 mb-3">Инновации</h3>
                <p class="text-gray-600">Применение передовых технологий в области инженерных систем</p>
            </div>
            
            <div class="bg-white rounded-lg p-6 shadow-md">
                <div class="w-12 h-12 bg-purple-100 rounded-lg flex items-center justify-center mb-4">
                    <svg class="w-6 h-6 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"></path>
                    </svg>
                </div>
                <h3 class="text-lg font-semibold text-gray-800 mb-3">Безопасность</h3>
                <p class="text-gray-600">Комплексные системы безопасности и защиты объекта</p>
            </div>
        </div>
    </div>

    <!-- Navigation Links -->
    <div class="mt-12 text-center">
        <div class="flex flex-wrap justify-center gap-4">
            <a href="{{ route('projects') }}" 
               class="bg-gray-100 hover:bg-gray-200 text-gray-800 px-6 py-3 rounded-lg transition duration-300">
                ← Все проекты
            </a>
            <a href="{{ route('contact') }}" 
               class="bg-lime-400 hover:bg-lime-500 text-white px-6 py-3 rounded-lg transition duration-300">
                Связаться с нами
            </a>
        </div>
    </div>
</div>

@endsection