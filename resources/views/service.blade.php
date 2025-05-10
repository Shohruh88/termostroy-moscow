@extends('layouts.app')
@section('title', 'Service')

@section('content')

<section class="text-center my-12">
    <h1 class="text-4xl font-bold">Наши услуги</h1>
    <p class="text-gray-600 mt-2">Мы предлагаем следующие виды работ</p>
</section>

<section class="grid grid-cols-1 md:grid-cols-3 gap-6 px-4 md:px-20 my-10">
    <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition">
        <h3 class="text-xl font-semibold mb-2">Проектирование</h3>
        <p class="text-gray-600">
            Мы проектируем все виды инженерных систем жилых и коммерческих зданий.
            У каждого объекта есть свои особенности и уникальные решения, которые мы используем при проектировании.
            Мы подготавливаем всю необходимую рабочую документацию, включая сметы, календарные планы работ, спецификации и чертежи.
            Представленная документация позволяет организовать и запустить строительно-монтажные работы.
        </p>
    </div>

    <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition">
        <h3 class="text-xl font-semibold mb-2">Инженерия</h3>
        <p class="text-gray-600">
            Наша компания выполняет любые строительно-монтажные работы в сфере инженерии,
            в соответствии с нормами безопасности и прочими техническими требованиям.
            Оперативное решение вопросов и привлеченные высококвалифицированные специалисты,
            позволяют добиться выполнения работ в срок и на высшем уровне.
        </p>
    </div>

    <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition">
        <h3 class="text-xl font-semibold mb-2">Эксплуатация</h3>
        <p class="text-gray-600">
            На проектировании и строительстве наша работа не заканчивается.
            Мы оказываем услуги по технической эксплуатации всех систем в объектах недвижимости,
            как построенных нами, так и сторонними подрядчиками.
            В свою очередь мы предлагаем оптимальный и комплексный подход к решению любых задач
            с обеспечением бесперебойной поддержки всех систем жизнеобеспечения объекта.
        </p>
    </div>

    <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition">
        <h3 class="text-xl font-semibold mb-2">Работы под ключ</h3>
        <p class="text-gray-600">
            Мы выполняем работы по проектированию, монтажным работам в сфере инженерии
            и последующей эксплуатации зданий под ключ.
        </p>
    </div>
</section>


<!-- Card Blog -->
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <!-- Grid -->
    <div class="grid sm:grid-cols-2 sm:items-center gap-8">
        <div class="sm:order-2">
            <div class="relative pt-[50%] sm:pt-[100%] rounded-lg">
                <img class="size-full absolute top-0 start-0 object-cover rounded-lg" src="https://images.unsplash.com/photo-1606868306217-dbf5046868d2?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=560&q=80" alt="Blog Image">
            </div>
        </div>
        <!-- End Col -->

        <div class="sm:order-1">
            <p class="mb-5 inline-flex items-center gap-1.5 py-1.5 px-3 rounded-md text-xs font-medium bg-gray-100 text-gray-800 dark:bg-neutral-800 dark:text-neutral-200">
                Business insight
            </p>

            <h2 class="text-2xl font-bold md:text-3xl lg:text-4xl lg:leading-tight xl:text-5xl xl:leading-tight text-gray-800 dark:text-neutral-200">
                <a class="hover:text-blue-600 focus:outline-hidden focus:text-blue-600 dark:text-neutral-300 dark:hover:text-white dark:focus:text-white" href="#">
                    How to get buy-in and budget for direct hiring
                </a>
            </h2>

            <!-- Avatar -->
            <div class="mt-6 sm:mt-10 flex items-center">
                <div class="shrink-0">
                    <img class="size-10 sm:h-14 sm:w-14 rounded-full" src="https://images.unsplash.com/photo-1669837401587-f9a4cfe3126e?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=facearea&facepad=2&w=320&h=320&q=80" alt="Blog Image">
                </div>

                <div class="ms-3 sm:ms-4">
                    <p class="sm:mb-1 font-semibold text-gray-800 dark:text-neutral-200">
                        Louise Donadieu
                    </p>
                    <p class="text-xs text-gray-500 dark:text-neutral-500">
                        Strategic Marketing Consultant
                    </p>
                </div>
            </div>
            <!-- End Avatar -->

            <div class="mt-5">
                <a class="inline-flex items-center gap-x-1.5 text-blue-600 decoration-2 hover:underline focus:outline-hidden focus:underline font-medium dark:text-blue-500" href="#">
                    Read more
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m9 18 6-6-6-6"/></svg>
                </a>
            </div>
        </div>
        <!-- End Col -->
    </div>
    <!-- End Grid -->
</div>
<!-- End Card Blog -->

@endsection

