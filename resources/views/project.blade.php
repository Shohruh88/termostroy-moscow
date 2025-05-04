@extends('layouts.app')

@section('content')
<!-- Alpine.jsni to‘g‘ri ulash -->
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

<div class="container mx-auto py-10 px-4">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 items-start">
        <!-- Chap rasm -->
        <div>
            <img src="{{ asset('images/page_2.png') }}" alt="Building" class="w-full rounded-lg shadow-lg">
        </div>

        <!-- Project Steps List -->
        <div>
            <h2 class="text-3xl font-bold mb-6">Процесс проекта</h2>

            <ul class="space-y-4">
                <!-- Step 1 -->
                <li class="border-b border-gray-300 pb-4">
                    <h3 class="text-xl font-semibold text-gray-800">Запуск и планирование</h3>
                    <p class="text-gray-600 mt-2">
                        Здесь описание этапа запуска и планирования проекта.
                    </p>
                </li>

                <!-- Step 2 -->
                <li class="border-b border-gray-300 pb-4">
                    <h3 class="text-xl font-semibold text-gray-800">Выполнение приложений</h3>
                    <p class="text-gray-600 mt-2">
                        Здесь описание этапа выполнения приложений.
                    </p>
                </li>

                <!-- Step 3 -->
                <li class="border-b border-gray-300 pb-4">
                    <h3 class="text-xl font-semibold text-gray-800">Мониторинг и контроль</h3>
                    <p class="text-gray-600 mt-2">
                        Здесь описание этапа мониторинга и контроля.
                    </p>
                </li>

                <!-- Step 4 -->
                <li class="pb-4">
                    <h3 class="text-xl font-semibold text-gray-800">Отделка</h3>
                    <p class="text-gray-600 mt-2">
                        Здесь описание этапа отделки.
                    </p>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection
