@extends('layouts.app')

@section('title', 'Центральный телеграф - Инженерные системы | Termostroy Moscow')

@push('meta')
    <meta name="description" content="Реконструкция инженерных систем Центрального телеграфа на Тверской улице. Современные решения для исторических зданий от Termostroy Moscow.">
    <meta name="keywords" content="центральный телеграф, тверская, реконструкция, инженерные системы, термострой, москва">
    <meta property="og:title" content="Центральный телеграф - Проект Termostroy Moscow">
    <meta property="og:description" content="Комплексная реконструкция инженерных систем исторического здания Центрального телеграфа">
    <meta property="og:image" content="{{ asset('images/telegraf.jpg') }}">
    <meta property="og:url" content="{{ url('/telegraf') }}">
@endpush

@section('content')

<div class="container mx-auto py-10 px-4 telegraf-hero">
    <!-- Hero Section -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start mb-16">
        <!-- Left Image -->
        <div class="fade-in-up">
            <div class="hero-image">
                <img src="{{ asset('images/telegraf.jpg') }}" alt="Центральный телеграф" class="w-full rounded-lg shadow-lg">
            </div>
        </div>

        <!-- Right Content -->
        <div class="fade-in-up">
            <h1 class="text-4xl font-bold mb-6 text-gray-800">Центральный телеграф</h1>
            <div class="telegraf-card bg-gray-100 p-6 rounded-lg mb-6">
                <div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm">
                    <div>
                        <span class="font-semibold text-gray-600">Застройщик:</span>
                        <p class="text-gray-800">Московское Правительство</p>
                    </div>
                    <div>
                        <span class="font-semibold text-gray-600">Адрес:</span>
                        <p class="text-gray-800">Тверская улица, 7</p>
                    </div>
                    <div>
                        <span class="font-semibold text-gray-600">Срок строительства:</span>
                        <p class="text-gray-800">2019-2022</p>
                    </div>
                    <div>
                        <span class="font-semibold text-gray-600">Общая площадь (м2):</span>
                        <p class="text-gray-800">45.000</p>
                    </div>
                </div>
            </div>

            <div class="space-y-4">
                <h3 class="text-xl font-semibold text-gray-800">Виды выполняемых работ:</h3>
                <ul class="space-y-2">
                    <li class="flex items-center">
                        <span class="w-2 h-2 bg-lime-400 rounded-full mr-3"></span>
                        <span>Отопление</span>
                    </li>
                    <li class="flex items-center">
                        <span class="w-2 h-2 bg-lime-400 rounded-full mr-3"></span>
                        <span>Холодоснабжение</span>
                    </li>
                    <li class="flex items-center">
                        <span class="w-2 h-2 bg-lime-400 rounded-full mr-3"></span>
                        <span>ВПВ - АУПТ</span>
                    </li>
                    <li class="flex items-center">
                        <span class="w-2 h-2 bg-lime-400 rounded-full mr-3"></span>
                        <span>Водоснабжение</span>
                    </li>
                    <li class="flex items-center">
                        <span class="w-2 h-2 bg-lime-400 rounded-full mr-3"></span>
                        <span>Канализация</span>
                    </li>
                    <li class="flex items-center">
                        <span class="w-2 h-2 bg-lime-400 rounded-full mr-3"></span>
                        <span>ИТП</span>
                    </li>
                    <li class="flex items-center">
                        <span class="w-2 h-2 bg-lime-400 rounded-full mr-3"></span>
                        <span>Насосная Станция</span>
                    </li>
                    <li class="flex items-center">
                        <span class="w-2 h-2 bg-lime-400 rounded-full mr-3"></span>
                        <span>Вентиляция</span>
                    </li>
                    <li class="flex items-center">
                        <span class="w-2 h-2 bg-lime-400 rounded-full mr-3"></span>
                        <span>Противодымная вентиляция</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Project Description -->
    <div class="mb-16">
        <h2 class="text-3xl font-bold mb-8 text-center text-gray-800">О проекте</h2>
        <div class="prose max-w-none text-gray-700 leading-relaxed">
            <p class="text-lg mb-6">
                Центральный телеграф на Тверской улице - это исторический архитектурный памятник, построенный в 1927 году по проекту архитектора Ивана Рерберга. Здание является одним из самых узнаваемых сооружений в центре Москвы и важным элементом архитектурного ансамбля Тверской улицы.
            </p>
            
            <p class="mb-6">
                В рамках масштабной реконструкции здания, компания Термострой выполнила полный комплекс инженерных работ. Проект включал в себя модернизацию всех инженерных систем с сохранением исторического облика здания и соблюдением требований к памятникам архитектуры.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 my-8">
                <div class="bg-lime-50 p-6 rounded-lg">
                    <h3 class="text-xl font-semibold mb-4 text-gray-800">Особенности проекта</h3>
                    <ul class="space-y-2 text-gray-700">
                        <li>• Работа в историческом здании</li>
                        <li>• Сохранение архитектурного наследия</li>
                        <li>• Современные инженерные решения</li>
                        <li>• Соблюдение требований Москомнаследия</li>
                    </ul>
                </div>
                <div class="bg-gray-50 p-6 rounded-lg">
                    <h3 class="text-xl font-semibold mb-4 text-gray-800">Технические характеристики</h3>
                    <ul class="space-y-2 text-gray-700">
                        <li>• 8 этажей</li>
                        <li>• Высота здания: 45 метров</li>
                        <li>• Площадь участка: 3,200 м²</li>
                        <li>• Класс энергоэффективности: A</li>
                    </ul>
                </div>
            </div>

            <p class="mb-6">
                Здание Центрального телеграфа имеет особое значение для Москвы как символ эпохи конструктивизма. Его характерная башня с часами и глобусом стала одной из визитных карточек столицы. Реконструкция позволила не только сохранить историческую ценность здания, но и адаптировать его для современного использования.
            </p>

            <p class="mb-6">
                В процессе работ особое внимание уделялось установке современных систем климат-контроля, которые обеспечивают комфортные условия для посетителей и сотрудников, при этом не нарушая исторический интерьер здания. Система вентиляции была спроектирована с учетом архитектурных особенностей и требований по сохранению памятника.
            </p>
        </div>
    </div>

    <!-- Image Gallery Slider -->
    <div class="mb-16">
        <h2 class="text-3xl font-bold mb-8 text-center text-gray-800">Галерея проекта</h2>
        
        <!-- Slider Container -->
        <div class="relative">
            <div data-hs-carousel='{
                "loadingClasses": "opacity-0"
            }' class="relative">
                <div class="hs-carousel relative overflow-hidden w-full h-96 bg-gray-100 rounded-2xl">
                    <div class="hs-carousel-body absolute top-0 bottom-0 start-0 flex flex-nowrap transition-transform duration-700 opacity-0">
                        
                        <!-- Slide 1 -->
                        <div class="hs-carousel-slide">
                            <div class="h-96 flex flex-col bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('images/telegraf.jpg') }}');">
                                <div class="mt-auto w-2/3 md:max-w-lg ps-5 pb-5 md:ps-10 md:pb-10">
                                    <span class="block text-white text-xl md:text-2xl font-semibold">Главный фасад</span>
                                    <span class="block text-white/80">Тверская улица, 7</span>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 2 -->
                        <div class="hs-carousel-slide">
                            <div class="h-96 flex flex-col bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('images/building.png') }}');">
                                <div class="mt-auto w-2/3 md:max-w-lg ps-5 pb-5 md:ps-10 md:pb-10">
                                    <span class="block text-white text-xl md:text-2xl font-semibold">Инженерные системы</span>
                                    <span class="block text-white/80">Современные решения</span>
                                </div>
                            </div>
                        </div>

                        <!-- Slide 3 -->
                        <div class="hs-carousel-slide">
                            <div class="h-96 flex flex-col bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('images/moscow-city.jpg') }}');">
                                <div class="mt-auto w-2/3 md:max-w-lg ps-5 pb-5 md:ps-10 md:pb-10">
                                    <span class="block text-white text-xl md:text-2xl font-semibold">Архитектурное наследие</span>
                                    <span class="block text-white/80">Сохранение истории</span>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

                <!-- Navigation Arrows -->
                <button type="button" class="hs-carousel-prev absolute inset-y-0 start-0 inline-flex justify-center items-center w-12 h-full text-white hover:bg-black/20 rounded-s-2xl focus:outline-hidden">
                    <span class="text-2xl" aria-hidden="true">
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0z"></path>
                        </svg>
                    </span>
                    <span class="sr-only">Previous</span>
                </button>

                <button type="button" class="hs-carousel-next absolute inset-y-0 end-0 inline-flex justify-center items-center w-12 h-full text-white hover:bg-black/20 rounded-e-2xl focus:outline-hidden">
                    <span class="sr-only">Next</span>
                    <span class="text-2xl" aria-hidden="true">
                        <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                            <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708z"></path>
                        </svg>
                    </span>
                </button>
            </div>
        </div>
    </div>

    <!-- Process Section -->
    <div class="mb-16">
        <h2 class="text-3xl font-bold mb-8 text-center text-gray-800">Этапы реализации проекта</h2>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
            
            <div class="bg-white p-6 rounded-lg shadow-lg process-step step-1">
                <div class="text-center mb-4">
                    <div class="w-12 h-12 bg-lime-400 text-white rounded-full flex items-center justify-center mx-auto mb-3">
                        <span class="font-bold">1</span>
                    </div>
                    <h3 class="font-semibold text-gray-800">Проектирование</h3>
                </div>
                <p class="text-sm text-gray-600 text-center">Разработка проектной документации с учетом исторической ценности здания</p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-lg process-step step-2">
                <div class="text-center mb-4">
                    <div class="w-12 h-12 bg-blue-400 text-white rounded-full flex items-center justify-center mx-auto mb-3">
                        <span class="font-bold">2</span>
                    </div>
                    <h3 class="font-semibold text-gray-800">Согласование</h3>
                </div>
                <p class="text-sm text-gray-600 text-center">Получение разрешений от Москомнаследия и контролирующих органов</p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-lg process-step step-3">
                <div class="text-center mb-4">
                    <div class="w-12 h-12 bg-orange-400 text-white rounded-full flex items-center justify-center mx-auto mb-3">
                        <span class="font-bold">3</span>
                    </div>
                    <h3 class="font-semibold text-gray-800">Монтаж</h3>
                </div>
                <p class="text-sm text-gray-600 text-center">Выполнение монтажных работ с соблюдением требований по сохранению памятника</p>
            </div>

            <div class="bg-white p-6 rounded-lg shadow-lg process-step step-4">
                <div class="text-center mb-4">
                    <div class="w-12 h-12 bg-green-400 text-white rounded-full flex items-center justify-center mx-auto mb-3">
                        <span class="font-bold">4</span>
                    </div>
                    <h3 class="font-semibold text-gray-800">Сдача объекта</h3>
                </div>
                <p class="text-sm text-gray-600 text-center">Пуско-наладочные работы и передача объекта в эксплуатацию</p>
            </div>

        </div>
    </div>

    <!-- Call to Action -->
    <div class="bg-gray-900 text-white rounded-2xl p-8 text-center">
        <h2 class="text-3xl font-bold mb-4">Нужна консультация по вашему проекту?</h2>
        <p class="text-gray-300 mb-6 max-w-2xl mx-auto">
            Наша команда экспертов готова обсудить ваши потребности и предложить оптимальные решения для вашего объекта
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="{{ route('contact') }}" class="inline-flex items-center justify-center px-6 py-3 bg-lime-400 text-black font-semibold rounded-lg hover:bg-lime-500 transition">
                Связаться с нами
            </a>
            <a href="tel:+79672145669" class="inline-flex items-center justify-center px-6 py-3 border border-white text-white font-semibold rounded-lg hover:bg-white hover:text-black transition">
                +7 (967) 214-56-69
            </a>
        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/preline/dist/index.js"></script>

@endsection