
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


      <!-- Collapse -->
      <div id="hs-navbar-hcail" class="hs-collapse hidden overflow-hidden transition-all duration-300 basis-full grow lg:block lg:w-auto lg:basis-auto lg:order-2 lg:col-span-6" aria-labelledby="hs-navbar-hcail-collapse">
        <div class="flex flex-col gap-y-4 gap-x-0 mt-5 lg:flex-row lg:justify-center lg:items-center lg:gap-y-0 lg:gap-x-7 lg:mt-0">
          <div>
            <a class="relative inline-block text-black focus:outline-hidden before:absolute before:bottom-0.5 before:start-0 before:-z-1 before:w-full before:h-1 before:bg-lime-400 dark:text-black" href="#" aria-current="page">{{__("site.home")}}</a>
          </div>
          <div>
            <a class="inline-block text-black hover:text-gray-600 focus:outline-hidden focus:text-gray-600 dark:text-black dark:hover:text-neutral-300 dark:focus:text-neutral-300" href="{{route('service')}}">{{__('site.services')}}</a>
          </div>
          <div>
            <a class="inline-block text-black hover:text-gray-600 focus:outline-hidden focus:text-gray-600 dark:text-black dark:hover:text-neutral-300 dark:focus:text-neutral-300" href="{{route('aboutUs')}}">{{__("site.about")}}</a>
          </div>
          <div>
            <a class="inline-block text-black hover:text-gray-600 focus:outline-hidden focus:text-gray-600 dark:text-black dark:hover:text-neutral-300 dark:focus:text-neutral-300" href="{{route('projects')}}">{{__("site.projects")}}</a>
          </div>
          <div>
            <a class="inline-block text-black hover:text-gray-600 focus:outline-hidden focus:text-gray-600 dark:text-black dark:hover:text-neutral-300 dark:focus:text-neutral-300" href="{{route('contact')}}">{{__('site.contact')}}</a>
          </div>
            <div class="flex items-center gap-x-2 ms-auto lg:col-span-3 justify-end">
                @php $currentLang = session('locale', 'turk'); @endphp
                <button onclick="changeLang('turk')" class="{{ $currentLang == 'turk' ? 'bg-lime-400 text-black' : 'bg-white' }} px-3 py-2 rounded">
                    Turk
                </button>
                <button onclick="changeLang('ru')" class="{{ $currentLang == 'ru' ? 'bg-lime-400 text-black' : 'bg-white' }} px-3 py-2 rounded">
                    RU
                </button>
                <button onclick="changeLang('en')" class="{{ $currentLang == 'en' ? 'bg-lime-400 text-black' : 'bg-white' }} px-3 py-2 rounded">
                    EN
                </button>
            </div>
        </div>

      </div>
      <!-- End Collapse -->
{{--        @php $currentLang = session('locale', 'turk'); @endphp--}}

{{--        <button onclick="changeLang('turk')" class="{{ $currentLang == 'turk' ? 'bg-lime-400 text-black' : 'bg-white' }}">Turk</button>--}}
{{--        <button onclick="changeLang('ru')" class="{{ $currentLang == 'ru' ? 'bg-lime-400 text-black' : 'bg-white' }}">RU</button>--}}
{{--        <button onclick="changeLang('en')" class="{{ $currentLang == 'en' ? 'bg-lime-400 text-black' : 'bg-white' }}">EN</button>--}}
{{--        <div class="flex items-center gap-x-2 ms-auto lg:col-span-3">--}}
{{--            @php $currentLang = session('locale', 'turk'); @endphp--}}

{{--            <button onclick="changeLang('turk')" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-xl border border-gray-200 {{ $currentLang == 'turk' ? 'bg-lime-400 text-black' : 'bg-white' }}">--}}
{{--                Turk--}}
{{--            </button>--}}
{{--            <button onclick="changeLang('ru')" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-xl border border-gray-200 {{ $currentLang == 'ru' ? 'bg-lime-400 text-black' : 'bg-white' }}">--}}
{{--                RU--}}
{{--            </button>--}}
{{--            <button onclick="changeLang('en')" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-xl border border-gray-200 {{ $currentLang == 'en' ? 'bg-lime-400 text-black' : 'bg-white' }}">--}}
{{--                EN--}}
{{--            </button>--}}
{{--        </div>--}}

{{--        <div class="flex items-center gap-x-2 ms-auto">--}}
{{--            @php $currentLang = session('locale', 'turk'); @endphp--}}
{{--            <button onclick="changeLang('turk')" class="{{ $currentLang == 'turk' ? 'bg-lime-400 text-black' : 'bg-white' }} px-3 py-2 rounded">--}}
{{--                Turk--}}
{{--            </button>--}}
{{--            <button onclick="changeLang('ru')" class="{{ $currentLang == 'ru' ? 'bg-lime-400 text-black' : 'bg-white' }} px-3 py-2 rounded">--}}
{{--                RU--}}
{{--            </button>--}}
{{--            <button onclick="changeLang('en')" class="{{ $currentLang == 'en' ? 'bg-lime-400 text-black' : 'bg-white' }} px-3 py-2 rounded">--}}
{{--                EN--}}
{{--            </button>--}}
{{--        </div>--}}



    </nav>
  </header>
  <!-- ========== END HEADER ========== -->
