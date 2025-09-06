@extends('layouts.app')

@section('title', 'ЖК Среда - Termostroy')

@section('content')
<br>
<br>
      
   

    <div class="container mx-auto py-10 px-4">
        <!-- Hero Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">БЦ ЭЛЕКТРО </h1>
            <p class="text-lg text-gray-600 max-w-4xl mx-auto">
                Адрес: Санкт-Петербург Санкт-Петербург, Московский проспект, 156 Метро: Электросила
                    Общая площадь: 22386 м2 
            </p>
        </div>
        
        <!-- Main Content Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start mb-16">
            <!-- Left Image -->
            <div class="space-y-6">
                <img src="{{ asset('images/ЖК СРЕДА/777.webp') }}" alt="ЖК Среда" class="w-full rounded-lg shadow-lg">
                <div class="grid grid-cols-2 gap-4">
                    <img src="{{ asset('images/ЖК СРЕДА/1.webp') }}" alt="ЖК Среда фасад" class="w-full rounded-lg shadow-md">
                    <img src="{{ asset('images/ЖК СРЕДА/14.jpg') }}" alt="ЖК Среда двор" class="w-full rounded-lg shadow-md">
                    <img src="{{ asset('images/ЖК СРЕДА/777.webp') }}" alt="ЖК Среда корпус" class="w-full rounded-lg shadow-md">
                    <img src="{{ asset('images/ЖК СРЕДА/3333.webp') }}" alt="ЖК Среда инфраструктура" class="w-full rounded-lg shadow-md">
                </div>
            </div>
        
            <!-- Project Information -->
            <div class="space-y-8">
                <h2 class="text-3xl font-bold mb-6 text-gray-800">Информация о проекте</h2>

                <!-- Project Details -->
                <div class="bg-gray-50 p-6 rounded-lg">
                    <div class="grid grid-cols-1 gap-4">
                        <div class="border-b border-gray-200 pb-4">
                            <h3 class="text-lg font-semibold text-gray-800">Застройщик</h3>
                            <p class="text-gray-600">ГК "ПИК"</p>
                        </div>
                        
                        <div class="border-b border-gray-200 pb-4">
                            <h3 class="text-lg font-semibold text-gray-800">Адрес</h3>
                            <p class="text-gray-600">Московский просп., 156, Санкт-Петербург</p>
                        </div>
                        
                        <div class="border-b border-gray-200 pb-4">
                            <h3 class="text-lg font-semibold text-gray-800">Срок строительства</h3>
                            <p class="text-gray-600">2012-2014</p>
                        </div>
                        
                        <div class="border-b border-gray-200 pb-4">
                            <h3 class="text-lg font-semibold text-gray-800">Общая площадь</h3>
                            <p class="text-gray-600">180.500 м²</p>
                        </div>
                        
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800">Метро</h3>
                            <p class="text-gray-600">Ховрино, 10 мин. пешком</p>
                        </div>
                    </div>
                </div>

                <!-- Work Types -->
                <div class="bg-lime-50 p-6 rounded-lg">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Виды выполняемых работ</h3>
                    <ul class="space-y-2">
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-lime-400 rounded-full mr-3"></span>
                            <span class="text-gray-700">Отопление</span>
                        </li>
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-lime-400 rounded-full mr-3"></span>
                            <span class="text-gray-700">Холодоснабжение</span>
                        </li>
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-lime-400 rounded-full mr-3"></span>
                            <span class="text-gray-700">ВПВ - АУПТ</span>
                        </li>
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-lime-400 rounded-full mr-3"></span>
                            <span class="text-gray-700">Водоснабжение</span>
                        </li>
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-lime-400 rounded-full mr-3"></span>
                            <span class="text-gray-700">Канализация</span>
                        </li>
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-lime-400 rounded-full mr-3"></span>
                            <span class="text-gray-700">ИТП</span>
                        </li>
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-lime-400 rounded-full mr-3"></span>
                            <span class="text-gray-700">Насосная Станция</span>
                        </li>
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-lime-400 rounded-full mr-3"></span>
                            <span class="text-gray-700">Вентиляция</span>
                        </li>
                        <li class="flex items-center">
                            <span class="w-2 h-2 bg-lime-400 rounded-full mr-3"></span>
                            <span class="text-gray-700">Противодымная вентиляция</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>


        <!-- Project Description -->
        <div class="mb-16">
            <h2 class="text-3xl font-bold mb-8 text-gray-800 text-center">О проекте</h2>
            
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
                <div class="space-y-6">
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">Концепция проекта</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Бизнес-центр «Электро» представляет собой фешенебельную постройку класса «A+», внутри которой располагаются офисы высокого качества. 
                            В процессе его возведения использовались прогрессивные технологии, поэтому условия пребывания в пространстве являются максимально комфортными. 
                        </p>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">Архитектурные решения</h3>
                        <p class="text-gray-600 leading-relaxed">
                            Архитектура комплекса выполнена в современном стиле с использованием качественных отделочных материалов. 
                            Продуманная планировка территории обеспечивает максимальный комфорт для жителей, включая зеленые зоны, 
                            детские и спортивные площадки, места для отдыха и прогулок.
                        </p>
                    </div>
                </div>

                <div class="space-y-6">
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">Расположение и транспортная доступность</h3>
                        <p class="text-gray-600 leading-relaxed mb-4">
                            Адрес – г. Санкт-Петербург, Московский проспект, 156. Бизнес-центр «Электро» является современным и находится на первой линии улицы.
                             В шаговой доступности есть станция метро «Электросила» и «Московские ворота». Также предусмотрено несколько остановок наземного общественного транспорта.
                             Добраться до исторического центра и до аэропорта «Пулково» можно за 15 минут. Рядом пролегает ЗСД и КАД.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Facilities and Services -->
        <div class="mb-16">
            <h2 class="text-3xl font-bold mb-8 text-gray-800 text-center">Инфраструктура и удобства</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="w-12 h-12 bg-lime-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-lime-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Жилые помещения</h3>
                    <p class="text-gray-600 text-sm">Квартиры различных планировок от студий до многокомнатных с качественной отделкой</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="w-12 h-12 bg-lime-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-lime-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Парковка</h3>
                    <p class="text-gray-600 text-sm">Подземная и наземная парковка для жителей и гостей комплекса</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="w-12 h-12 bg-lime-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-lime-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h1m4 0h1m-6 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Детские площадки</h3>
                    <p class="text-gray-600 text-sm">Современные детские площадки с безопасным покрытием и разнообразным оборудованием</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="w-12 h-12 bg-lime-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-lime-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Спортивные зоны</h3>
                    <p class="text-gray-600 text-sm">Спортивные площадки, тренажеры на открытом воздухе, зоны для активного отдыха</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="w-12 h-12 bg-lime-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-lime-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-2.293 2.293c-.63.63-.184 1.707.707 1.707H19M17 21a2 2 0 100-4 2 2 0 000 4zM9 21a2 2 0 100-4 2 2 0 000 4z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Коммерческие помещения</h3>
                    <p class="text-gray-600 text-sm">Магазины, кафе, сервисные службы на первых этажах корпусов</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="w-12 h-12 bg-lime-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-lime-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Благоустройство</h3>
                    <p class="text-gray-600 text-sm">Ландшафтный дизайн, зеленые зоны, пешеходные дорожки и зоны отдыха</p>
                </div>
            </div>
        </div>

        <!-- Features Section -->
        <div class="mb-16">
            <h2 class="text-3xl font-bold mb-8 text-gray-800 text-center">Особенности комплекса</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="bg-gradient-to-br from-lime-50 to-green-50 p-6 rounded-lg">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Комфорт и безопасность</h3>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-center">
                            <span class="w-1.5 h-1.5 bg-lime-500 rounded-full mr-3"></span>
                            Закрытая охраняемая территория
                        </li>
                        <li class="flex items-center">
                            <span class="w-1.5 h-1.5 bg-lime-500 rounded-full mr-3"></span>
                            Система видеонаблюдения
                        </li>
                        <li class="flex items-center">
                            <span class="w-1.5 h-1.5 bg-lime-500 rounded-full mr-3"></span>
                            Консьерж-сервис
                        </li>
                        <li class="flex items-center">
                            <span class="w-1.5 h-1.5 bg-lime-500 rounded-full mr-3"></span>
                            Современные лифты
                        </li>
                    </ul>
                </div>

                <div class="bg-gradient-to-br from-blue-50 to-indigo-50 p-6 rounded-lg">
                    <h3 class="text-xl font-semibold text-gray-800 mb-4">Инфраструктура района</h3>
                    <ul class="space-y-3 text-gray-600">
                        <li class="flex items-center">
                            <span class="w-1.5 h-1.5 bg-blue-500 rounded-full mr-3"></span>
                            Школы и детские сады поблизости
                        </li>
                        <li class="flex items-center">
                            <span class="w-1.5 h-1.5 bg-blue-500 rounded-full mr-3"></span>
                            Медицинские учреждения
                        </li>
                        <li class="flex items-center">
                            <span class="w-1.5 h-1.5 bg-blue-500 rounded-full mr-3"></span>
                            Торговые центры и магазины
                        </li>
                        <li class="flex items-center">
                            <span class="w-1.5 h-1.5 bg-blue-500 rounded-full mr-3"></span>
                            Парки и зоны отдыха
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Additional Images Gallery -->
        <div class="mb-16">
            <h2 class="text-3xl font-bold mb-8 text-gray-800 text-center">Галерея проекта</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <img src="{{ asset('images/ЖК СРЕДА/3333.webp') }}" alt="ЖК Среда" class="w-full rounded-lg shadow-md hover:shadow-lg transition-shadow">
                <img src="{{ asset('images/ЖК СРЕДА/777.webp') }}" alt="ЖК Среда фасад" class="w-full rounded-lg shadow-md hover:shadow-lg transition-shadow">
                <img src="{{ asset('images/ЖК СРЕДА/5555.jpg') }}" alt="ЖК Среда двор" class="w-full rounded-lg shadow-md hover:shadow-lg transition-shadow">
                <img src="{{ asset('images/ЖК СРЕДА/sreda-moskva-jk-689136682-7.jpg') }}" alt="ЖК Среда корпус" class="w-full rounded-lg shadow-md hover:shadow-lg transition-shadow">
                <img src="{{ asset('images/stroy/45.jpg') }}" alt="ЖК Среда инфраструктура" class="w-full rounded-lg shadow-md hover:shadow-lg transition-shadow">
                <img src="{{ asset('images/ЖК СРЕДА/666.jpg') }}" alt="ЖК Среда детская площадка" class="w-full rounded-lg shadow-md hover:shadow-lg transition-shadow">
                <img src="{{ asset('images/stroy/IMG_0332.jpg') }}" alt="ЖК Среда входная группа" class="w-full rounded-lg shadow-md hover:shadow-lg transition-shadow">
                <img src="{{ asset('images/stroy/37.JPG') }}" alt="ЖК Среда благоустройство" class="w-full rounded-lg shadow-md hover:shadow-lg transition-shadow">
                <img src="{{ asset('images/stroy/38.JPG') }}" alt="ЖК Среда внутренний двор" class="w-full rounded-lg shadow-md hover:shadow-lg transition-shadow">
            </div>
        </div>

        <!-- Contact Section -->
        <div class="bg-gradient-to-r from-lime-50 to-green-50 p-8 rounded-lg text-center">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Интересует качественное жилье?</h2>
            <p class="text-gray-600 mb-6 max-w-2xl mx-auto">
                ЖК "Среда" предлагает современные решения для комфортного проживания с развитой инфраструктурой 
                и высоким качеством инженерных систем, реализованных нашей компанией.
            </p>
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