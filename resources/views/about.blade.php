@extends('layouts.app')
@section('title', 'About')

@section('content')
    <section class="text-center my-12">
        <h1 class="text-4xl font-bold">Наши миссия</h1>
        <p class="text-gray-600 mt-2">Мы предлагаем следующие виды работ</p>
    </section>
<section class="text-center my-12">
<p>Предоставление услуг инвестиционным и подрядным организациям, путем оказания технической поддержки и создания</p>
<p>оптимальных решений, с постоянно развивающимися технологиями, оставляя коммерческие вопросы на заднем плане, и ставя в</p>
<p>нашей работе качество и профессиональный подход – на первое место.</p>
</section>
    <!-- Testimonials -->
    <div class="relative bg-cover bg-center bg-no-repeat min-h-[400px]" style="background-image: url('/images/logo-termo.png');">
        <div class="bg-black bg-opacity-60 min-h-[400px] flex items-center">
            <div class="max-w-7xl px-4 sm:px-6 lg:px-8 mx-auto py-8 lg:py-16 text-white">
                <blockquote class="max-w-4xl mx-auto">
                    <p class="mb-6 md:text-lg">
                        <span class="font-semibold text-lime-400">Связаться с нами</span> <span class="text-neutral-500">.</span>
                    </p>

                    <p class="text-xl sm:text-2xl md:text-3xl md:leading-normal">
                        Если у Вас есть вопросы или предложения, можете направить их нам. Мы обязательно Вам ответим.
                    </p>
                    <footer class="mt-6 md:mt-10">
                        <div class="border-neutral-700">
                            <button type="button" class="group inline-flex items-center gap-x-3 text-neutral-400 text-sm focus:outline-hidden disabled:opacity-50 disabled:pointer-events-none">
                                <p class="text-sm text-gray-300 dark:text-neutral-400">📞 Позвоните нам</p>
                                <p>
                                    <a class="relative inline-block font-medium text-white before:absolute before:bottom-0.5 before:start-0 before:-z-1 before:w-full before:h-1 before:bg-lime-400 hover:before:bg-black focus:outline-hidden focus:before:bg-black dark:text-white hover:before:bg-white dark:focus:before:bg-white"
                                       href="tel:+79672145669">
                                        +7 967 214 5669
                                    </a>
                                </p>
                            </button>
                        </div>
                    </footer>
                </blockquote>
            </div>
        </div>
    </div>
    <!-- End Testimonials -->

@endsection
