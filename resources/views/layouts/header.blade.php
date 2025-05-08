{{--<header data-v-907db30a="" class="el-header sticky top-0 z-50 w-full bg-white dark:bg-[#262626] p-0" style="--el-header-height: 64;">--}}
{{--    <header data-v-c3433c2b="" data-v-907db30a=""--}}
{{--            class="sticky top-0 flex flex-wrap md:justify-start md:flex-nowrap z-50 w-full bg-white border-b border-gray-200--}}
{{--            dark:bg-neutral-800 dark:border-neutral-700">--}}
{{--        <nav data-v-c3433c2b="" class="relative max-w-7xl w-full flex flex-wrap md:flex-nowrap md:grid md:grid-cols-12 basis-full items-center h-16 px-4 md:px-6 mx-auto">--}}
{{--            <div data-v-c3433c2b="" class="md:col-span-3 flex items-center">--}}
{{--                <a data-v-c3433c2b="" class="flex-none text-xl inline-block font-semibold focus:outline-none focus:opacity-80" href="https://startinvest.uz/">--}}
{{--                    <img data-v-c3433c2b="" src="/images/logo.svg" class="-mb-5" alt="Element logo" style="width: 100px;">--}}
{{--                </a></div><div data-v-c3433c2b="" class="flex items-center gap-x-1 md:gap-x-2 ml-auto md:ml-0 py-1 md:ps-6 md:order-3 md:col-span-3">--}}
{{--                <div data-v-c3433c2b="" class="hidden md:flex md:items-center md:gap-x-2">--}}
{{--                    <div data-v-c3433c2b="" class="relative">--}}
{{--                        <div class="hs-select relative"></div>--}}



 <!-- ========== HEADER ========== -->
 <header class="flex flex-wrap lg:justify-start lg:flex-nowrap z-50 w-full ">


    <nav class="relative max-w-7xl w-full flex flex-wrap  md:flex-nowrap lg:grid lg:grid-cols-12 basis-full items-center  px-4 md:px-6  mx-auto">
      <div class="lg:col-span-3 flex items-center">
        <!-- Logo -->
        <a class="flex-none rounded-xl text-xl inline-block font-semibold focus:outline-hidden focus:opacity-80" href="/" aria-label="Preline">

            <img class="w-38 h-auto" width="216" height='72' viewBox="0 0 116 32" fill="none" src="/images/logo-termo.png" alt="">
        </a>
        <!-- End Logo -->
      </div>

      <!-- Button Group -->
      <div class="flex items-center gap-x-1 lg:gap-x-2 ms-auto py-1 lg:ps-6 lg:order-3 lg:col-span-3">
        <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium text-nowrap rounded-xl border border-transparent bg-lime-400 text-black hover:bg-lime-500 focus:outline-hidden focus:bg-lime-500 transition disabled:opacity-50 disabled:pointer-events-none">
          RU
        </button>
        <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium text-nowrap rounded-xl bg-white border border-gray-200 text-black hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-900 dark:border-neutral-700 dark:hover:bg-white/10 dark:text-white dark:hover:text-white dark:focus:text-white">
          EN
        </button>


        <div class="lg:hidden">
          <button type="button" class="hs-collapse-toggle size-9.5 flex justify-center items-center text-sm font-semibold rounded-xl border border-gray-200 text-black hover:bg-gray-100 focus:outline-hidden focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:border-neutral-700 dark:hover:bg-neutral-700 dark:focus:bg-neutral-700" id="hs-navbar-hcail-collapse" aria-expanded="false" aria-controls="hs-navbar-hcail" aria-label="Toggle navigation" data-hs-collapse="#hs-navbar-hcail">
            <svg class="hs-collapse-open:hidden shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <line x1="3" x2="21" y1="6" y2="6" />
              <line x1="3" x2="21" y1="12" y2="12" />
              <line x1="3" x2="21" y1="18" y2="18" />
            </svg>
            <svg class="hs-collapse-open:block hidden shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M18 6 6 18" />
              <path d="m6 6 12 12" />
            </svg>
          </button>
        </div>
      </div>
      <!-- End Button Group -->

      <!-- Collapse -->
      <div id="hs-navbar-hcail" class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow lg:block lg:w-auto lg:basis-auto lg:order-2 lg:col-span-6" aria-labelledby="hs-navbar-hcail-collapse">
        <div class="flex flex-col gap-y-4 gap-x-0 mt-5 lg:flex-row lg:justify-center lg:items-center lg:gap-y-0 lg:gap-x-7 lg:mt-0">
          <div>
            <a class="relative inline-block text-black focus:outline-hidden before:absolute before:bottom-0.5 before:start-0 before:-z-1 before:w-full before:h-1 before:bg-lime-400 dark:text-white" href="#" aria-current="page">Главная</a>
          </div>
          <div>
            <a class="inline-block text-black hover:text-gray-600 focus:outline-hidden focus:text-gray-600 dark:text-white dark:hover:text-neutral-300 dark:focus:text-neutral-300" href="{{route('service')}}">Услуги</a>
          </div>
          <div>
            <a class="inline-block text-black hover:text-gray-600 focus:outline-hidden focus:text-gray-600 dark:text-white dark:hover:text-neutral-300 dark:focus:text-neutral-300" href="{{route('aboutUs')}}">О компании‍</a>
          </div>
          <div>
            <a class="inline-block text-black hover:text-gray-600 focus:outline-hidden focus:text-gray-600 dark:text-white dark:hover:text-neutral-300 dark:focus:text-neutral-300" href="{{route('projects')}}">Проекты‍</a>
          </div>
          <div>
            <a class="inline-block text-black hover:text-gray-600 focus:outline-hidden focus:text-gray-600 dark:text-white dark:hover:text-neutral-300 dark:focus:text-neutral-300" href="{{route('contact')}}">Контакты</a>
          </div>
        </div>
      </div>
      <!-- End Collapse -->
    </nav>
  </header>
  <!-- ========== END HEADER ========== -->
