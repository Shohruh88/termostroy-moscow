<!-- Works -->
<div class="max-w-7xl px-4 sm:px-6 lg:px-8 py-12 lg:py-24 mx-auto">
    <div class="mb-6 sm:mb-10 max-w-2xl text-center mx-auto">
        <h1 class="font-medium text-black text-2xl sm:text-4xl dark:text-white">
            {{__('site.OurProjects')}}
        </h1>
    </div>

    <!-- Card Grid -->
    <div class=" grid grid-cols-1 sm:grid-cols-2 gap-8 lg:gap-12">
        <!-- Card -->
        <a class="group flex flex-col focus:outline-hidden" href="{{route('project')}}">
            <div class="aspect-w-16 aspect-h-12 overflow-hidden bg-gray-100 rounded-2xl dark:bg-neutral-800">
                <img
                    class="group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out object-cover rounded-2xl"
                    src="images/page_2.png" alt="Blog Image">
            </div>

            <div class="pt-4">
                <h3 class="relative inline-block font-medium text-lg text-black before:absolute before:bottom-0.5 before:start-0 before:-z-1 before:w-full before:h-1 before:bg-lime-400 before:transition before:origin-left before:scale-x-0 group-hover:before:scale-x-100 dark:text-black">
                    Олимпия Парк
                </h3>

            </div>
        </a>
        <!-- End Card -->

        <!-- Card -->
        <a class="group flex flex-col focus:outline-hidden" href="#">
            <div class="aspect-w-16 aspect-h-12 overflow-hidden bg-gray-100 rounded-2xl dark:bg-neutral-800">
                <img
                    class="group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out object-cover rounded-2xl"
                    src="images/tower1.jpg" alt="Blog Image">
            </div>

            <div class="pt-4">
                <h3 class="relative inline-block font-medium text-lg text-black before:absolute before:bottom-0.5 before:start-0 before:-z-1 before:w-full before:h-1 before:bg-lime-400 before:transition before:origin-left before:scale-x-0 group-hover:before:scale-x-100 dark:text-black">
                    ЖК Capital Towers (Капитал Тауэрс)
                </h3>

            </div>
        </a>
        <!-- End Card -->

        <!-- Card -->
        <a class="group flex flex-col focus:outline-hidden" href="#">
            <div class="aspect-w-16 aspect-h-12 overflow-hidden bg-gray-100 rounded-2xl dark:bg-neutral-800">
                <img
                    class="group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out object-cover rounded-2xl"
                    src="images/telegraf.jpg" alt="Blog Image">
            </div>

            <div class="pt-4">
                <h3 class="relative inline-block font-medium text-lg text-black before:absolute before:bottom-0.5 before:start-0 before:-z-1 before:w-full before:h-1 before:bg-lime-400 before:transition before:origin-left before:scale-x-0 group-hover:before:scale-x-100 dark:text-black">
                    Центральный телеграф
                    Тверская улица, 7.
                </h3>

            </div>
        </a>
        <!-- End Card -->

        <!-- Card -->
        <a class="group flex flex-col focus:outline-hidden" href="{{route('projects')}}">
            <div class="aspect-w-16 aspect-h-12 overflow-hidden bg-gray-100 rounded-2xl dark:bg-neutral-800">
                <img
                    class="group-hover:scale-105 group-focus:scale-105 transition-transform duration-500 ease-in-out object-cover rounded-2xl"
                    src="images/page_7.png" alt="Blog Image">
            </div>

            <div class="pt-4">
                <h3 class="relative inline-block font-medium text-lg text-black before:absolute before:bottom-0.5 before:start-0 before:-z-1 before:w-full before:h-1 before:bg-lime-400 before:transition before:origin-left before:scale-x-0 group-hover:before:scale-x-100 dark:text-black">
                    Группа ПСН Рязанский проспект,2
                </h3>
            </div>
        </a>
        <!-- End Card -->
    </div>
    <!-- End Card Grid -->

    <div class="mt-10 lg:mt-20 text-center">
        <a class="relative inline-block font-medium md:text-lg text-black before:absolute before:bottom-0.5 before:start-0 before:-z-1 before:w-full before:h-1 before:bg-lime-400 hover:before:bg-black focus:outline-hidden focus:before:bg-black dark:text-black dark:hover:before:bg-white dark:focus:before:bg-white"
           href="{{route('projects')}}">
            👉 Посмотреть все наши работы
        </a>
    </div>
</div>
<!-- End Works -->
