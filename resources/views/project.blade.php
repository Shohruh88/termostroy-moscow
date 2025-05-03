@extends('layouts.app')

@section('content')
<!-- Alpine.jsni to‘g‘ri ulash -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

<div class="container mx-auto py-10 px-4">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-start">
        <!-- Chap rasm -->
        <div>
            <img src="{{ asset('images/building.png') }}" alt="Building" class="w-full rounded-lg shadow-lg">
        </div>

        <!-- Accordion -->
        <div x-data="{ selected: null }">
            <h2 class="text-3xl font-bold mb-6">Процесс проекта</h2>

            <!-- Accordion item 1 -->
            <div class="border border-gray-300 rounded-lg mb-4">
                <button @click="selected === 1 ? selected = null : selected = 1"
                        class="w-full flex justify-between items-center px-4 py-3 text-left text-lg font-medium">
                    Запуск и планирование
                    <svg :class="selected === 1 ? 'transform rotate-180' : ''" xmlns="http://www.w3.org/2000/svg"
                         class="h-5 w-5 transition-transform" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                              d="M5.23 7.21a.75.75 0 011.06.02L10 11.17l3.71-3.94a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0L5.21 8.27a.75.75 0 01.02-1.06z"
                              clip-rule="evenodd" />
                    </svg>
                </button>
                <div x-show="selected === 1" x-transition x-cloak class="px-4 pb-4 text-gray-600">
                    Здесь описание этапа запуска и планирования проекта.
                </div>
            </div>

            <!-- Accordion item 2 -->
            <div class="border border-gray-300 rounded-lg mb-4">
                <button @click="selected === 2 ? selected = null : selected = 2"
                        class="w-full flex justify-between items-center px-4 py-3 text-left text-lg font-medium">
                    Выполнение приложений
                    <svg :class="selected === 2 ? 'transform rotate-180' : ''" xmlns="http://www.w3.org/2000/svg"
                         class="h-5 w-5 transition-transform" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                              d="M5.23 7.21a.75.75 0 011.06.02L10 11.17l3.71-3.94a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0L5.21 8.27a.75.75 0 01.02-1.06z"
                              clip-rule="evenodd" />
                    </svg>
                </button>
                <div x-show="selected === 2" x-transition x-cloak class="px-4 pb-4 text-gray-600">
                    Здесь описание этапа выполнения приложений.
                </div>
            </div>

            <!-- Accordion item 3 -->
            <div class="border border-gray-300 rounded-lg mb-4">
                <button @click="selected === 3 ? selected = null : selected = 3"
                        class="w-full flex justify-between items-center px-4 py-3 text-left text-lg font-medium">
                    Мониторинг и контроль
                    <svg :class="selected === 3 ? 'transform rotate-180' : ''" xmlns="http://www.w3.org/2000/svg"
                         class="h-5 w-5 transition-transform" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                              d="M5.23 7.21a.75.75 0 011.06.02L10 11.17l3.71-3.94a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0L5.21 8.27a.75.75 0 01.02-1.06z"
                              clip-rule="evenodd" />
                    </svg>
                </button>
                <div x-show="selected === 3" x-transition x-cloak class="px-4 pb-4 text-gray-600">
                    Здесь описание этапа мониторинга и контроля.
                </div>
            </div>

            <!-- Accordion item 4 -->
            <div class="border border-gray-300 rounded-lg mb-4">
                <button @click="selected === 4 ? selected = null : selected = 4"
                        class="w-full flex justify-between items-center px-4 py-3 text-left text-lg font-medium">
                    Отделка
                    <svg :class="selected === 4 ? 'transform rotate-180' : ''" xmlns="http://www.w3.org/2000/svg"
                         class="h-5 w-5 transition-transform" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                              d="M5.23 7.21a.75.75 0 011.06.02L10 11.17l3.71-3.94a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0L5.21 8.27a.75.75 0 01.02-1.06z"
                              clip-rule="evenodd" />
                    </svg>
                </button>
                <div x-show="selected === 4" x-transition x-cloak class="px-4 pb-4 text-gray-600">
                    Здесь описание этапа отделки.
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
