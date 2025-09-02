@extends('layouts.app')

@section('title', 'Олимпия Парк - Termostroy')

@section('content')
<br>
<br>
    <div class="container mx-auto py-10 px-4">
        <!-- Hero Section -->
        <div class="text-center mb-12">
            <h1 class="text-4xl font-bold text-gray-800 mb-4">Олимпия Парк</h1>
            <p class="text-lg text-gray-600 max-w-4xl mx-auto">
                Спортивно-деловой центр расположенный на северо-востоке от центра Москвы
            </p>
        </div>

        <!-- Main Content Grid -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start mb-16">
            <!-- Left Image -->
            <div class="space-y-6">
                <img src="{{ asset('images/olimp_park/infrastruktura.webp') }}" alt="Олимпия Парк" class="w-full rounded-lg shadow-lg">
                <div class="grid grid-cols-2 gap-4">
                    <img src="{{ asset('images/olimp_park/Olimpiia_Park1.webp') }}" alt="Олимпия Парк корпус" class="w-full rounded-lg shadow-md">
                    <img src="{{ asset('images/olimp_park/olimpiya-park5.webp') }}" alt="Олимпия Парк фасад" class="w-full rounded-lg shadow-md">
                        <img src="{{ asset('images/olimp_park/biznescentr-olimpiya.webp') }}" alt="Олимпия Парк фасад" class="w-full rounded-lg shadow-md">

                    <img src="{{ asset('images/olimp_park/olimpiya-park30.webp') }}" alt="Олимпия Парк фасад" class="w-full rounded-lg shadow-md">
                                    
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
                            <p class="text-gray-600">AB Development</p>
                        </div>
                        
                        <div class="border-b border-gray-200 pb-4">
                            <h3 class="text-lg font-semibold text-gray-800">Адрес</h3>
                            <p class="text-gray-600">Ленинградское шоссе, 39А, корп.1,2,3,53</p>
                        </div>
                        
                        <div class="border-b border-gray-200 pb-4">
                            <h3 class="text-lg font-semibold text-gray-800">Срок строительства</h3>
                            <p class="text-gray-600">2009-2011</p>
                        </div>
                        
                        <div class="border-b border-gray-200 pb-4">
                            <h3 class="text-lg font-semibold text-gray-800">Общая площадь</h3>
                            <p class="text-gray-600">70.515 м²</p>
                        </div>
                        
                        <div>
                            <h3 class="text-lg font-semibold text-gray-800">Метро</h3>
                            <p class="text-gray-600">Водный стадион, 7 мин. пешком</p>
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
                            Наш проект спортивно-деловой центр Олимпия Парк расположен на северо-востоке от центра Москвы. 
                            Проект состоит из двух частей: первая часть включает технические составляющие и бизнес-центр, 
                            а вторая является многофункциональным спортивным комплексом, где также располагаются 
                            бассейн олимпийских размеров и тир.
                        </p>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">Инновационная структура</h3>
                        <p class="text-gray-600 leading-relaxed">
                            В комплексе «Олимпия Парк» москвичи могут проводить свободное от работы время. 
                            Проект выделяется своей инновационной структурой и современными технологическими решениями.
                        </p>
                    </div>
                </div>

                <div class="space-y-6">
                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">Расположение и транспортная доступность</h3>
                        <p class="text-gray-600 leading-relaxed mb-4">
                            Бизнес-центр «Олимпия Парк» расположен в Северном округе Москвы, на Ленинградском шоссе, 39Ас1. 
                            Это современный деловой комплекс, который предлагает комфортные условия для работы и развития бизнеса.
                        </p>
                        <div class="bg-gray-50 p-4 rounded">
                            <p class="text-sm text-gray-600">
                                <strong>Налоговая:</strong> ИФНС №43 по г.Москве<br>
                                <strong>Почтовый индекс:</strong> 125212
                            </p>
                        </div>
                    </div>

                    <div class="bg-white p-6 rounded-lg shadow-md">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">Структура комплекса</h3>
                        <p class="text-gray-600 leading-relaxed">
                            «Олимпия Парк» состоит из трех корпусов. Офисный корпус имеет высоту 5 этажей и оснащён 
                            современными инженерными системами, обеспечивающими комфорт и безопасность сотрудников.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Facilities and Services -->
        <div class="mb-16">
            <h2 class="text-3xl font-bold mb-8 text-gray-800 text-center">Инфраструктура и сервисы</h2>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="w-12 h-12 bg-lime-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-lime-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Офисные помещения</h3>
                    <p class="text-gray-600 text-sm">Офисные помещения разных площадей, переговорные комнаты для комфортной работы</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="w-12 h-12 bg-lime-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-lime-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Парковка</h3>
                    <p class="text-gray-600 text-sm">Подземная парковка на 670 мест для удобства арендаторов</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="w-12 h-12 bg-lime-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-lime-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18c-1.746 0-3.332.477-4.5 1.253"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Дополнительные сервисы</h3>
                    <p class="text-gray-600 text-sm">Банкоматы, аптека, салон красоты и другие сервисы для удобства</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="w-12 h-12 bg-lime-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-lime-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4m0 0L7 13m0 0l-2.293 2.293c-.63.63-.184 1.707.707 1.707H19M17 21a2 2 0 100-4 2 2 0 000 4zM9 21a2 2 0 100-4 2 2 0 000 4z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Питание</h3>
                    <p class="text-gray-600 text-sm">Кафе и рестораны, кафетерии и столовые для комфортного питания</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="w-12 h-12 bg-lime-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-lime-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Медицинские услуги</h3>
                    <p class="text-gray-600 text-sm">Медицинский кабинет для первой помощи и профилактических осмотров</p>
                </div>

                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="w-12 h-12 bg-lime-100 rounded-lg flex items-center justify-center mb-4">
                        <svg class="w-6 h-6 text-lime-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path>
                        </svg>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-2">Удобное расположение</h3>
                    <p class="text-gray-600 text-sm">Рядом парки, спортивные комплексы и торговые центры</p>
                </div>
            </div>
        </div>

        <!-- Additional Images Gallery -->
        <div class="mb-16">
            <h2 class="text-3xl font-bold mb-8 text-gray-800 text-center">Галерея проекта</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <img src="{{ asset('images/olimp_park/infrastruktura.webp') }}" alt="Олимпия Парк" class="w-full rounded-lg shadow-md hover:shadow-lg transition-shadow">
                <img src="{{ asset('images/olimp_park/olimpiya-park5.webp') }}" alt="Олимпия Парк" class="w-full rounded-lg shadow-md hover:shadow-lg transition-shadow">
                <img src="{{ asset('images/olimp_park/olimpiya-park30.webp') }}" alt="Олимпия Парк" class="w-full rounded-lg shadow-md hover:shadow-lg transition-shadow">
                <img src="{{ asset('images/stroy/26.jpg') }}" alt="Олимпия Парк" class="w-full rounded-lg shadow-md hover:shadow-lg transition-shadow">
                <img src="{{ asset('images/stroy/29.jpg') }}" alt="Олимпия Парк" class="w-full rounded-lg shadow-md hover:shadow-lg transition-shadow">
                <img src="{{ asset('images/stroy/27.jpg') }}" alt="Олимпия Парк" class="w-full rounded-lg shadow-md hover:shadow-lg transition-shadow">
                <img src="{{ asset('images/stroy/45.jpg') }}" alt="Олимпия Парк" class="w-full rounded-lg shadow-md hover:shadow-lg transition-shadow">
                <img src="{{ asset('images/stroy/30.jpg') }}" alt="Олимпия Парк" class="w-full rounded-lg shadow-md hover:shadow-lg transition-shadow">
                <img src="{{ asset('images/stroy/31.jpg') }}" alt="Олимпия Парк" class="w-full rounded-lg shadow-md hover:shadow-lg transition-shadow">
                <img src="{{ asset('images/stroy/33.jpg') }}" alt="Олимпия Парк" class="w-full rounded-lg shadow-md hover:shadow-lg transition-shadow">
                <img src="{{ asset('images/stroy/44.jpg') }}" alt="Олимпия Парк" class="w-full rounded-lg shadow-md hover:shadow-lg transition-shadow">
                <img src="{{ asset('images/stroy/68.jpg') }}" alt="Олимпия Парк" class="w-full rounded-lg shadow-md hover:shadow-lg transition-shadow">

            </div>
        </div>

        <!-- Contact Section -->
        <div class="bg-gradient-to-r from-lime-50 to-green-50 p-8 rounded-lg text-center">
            <h2 class="text-2xl font-bold text-gray-800 mb-4">Заинтересованы в сотрудничестве?</h2>
            <p class="text-gray-600 mb-6 max-w-2xl mx-auto">
                Бизнес-центр «Олимпия Парк» активно сотрудничает с крупными компаниями и организациями, 
                предоставляя качественные офисные помещения и высокий уровень сервиса.
            </p>
            <!-- <a href="{{ route('contact') }}" class="inline-flex items-center px-6 py-3 bg-lime-600 text-white font-medium rounded-lg hover:bg-lime-700 transition-colors">
                Связаться с нами
                <svg class="ml-2 w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                </svg>
            </a> -->
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
