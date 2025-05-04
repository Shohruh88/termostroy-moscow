@extends('layouts.app')

@section('title', 'Контакты')

@section('content')
  <div class="bg-white text-black py-12">
    <div class="max-w-7xl px-4 sm:px-6 lg:px-8 mx-auto">
      <!-- Title Section -->
      <div class="mb-6 sm:mb-10 text-center">
        <h2 class="font-medium text-3xl sm:text-4xl text-black">
          Контакты
        </h2>
      </div>

      <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
        <!-- Address Section -->
        <div class="space-y-8">
          <div>
            <h3 class="font-semibold text-xl text-black">Наш адрес</h3>
            <p class="text-sm text-gray-600">
              г. Москва, 5-я Магистральная, д.12, ком.42
            </p>
          </div>

          <!-- Contact Details Section -->
          <div>
            <h3 class="font-semibold text-xl text-black">Наши контакты</h3>

            <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
              <!-- Email Contact -->
              <div class="flex items-center space-x-4">
                <svg class="text-gray-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M21.2 8.4c.5.38.8.97.8 1.6v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V10a2 2 0 0 1 .8-1.6l8-6a2 2 0 0 1 2.4 0l8 6Z"></path>
                  <path d="m22 10-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 10"></path>
                </svg>
                <div>
                  <p class="text-sm text-gray-600">Электронный адрес</p>
                  <p>
                    <a href="mailto:termostroy2018@yandex.ru" class="text-lime-500 hover:text-black dark:text-white dark:hover:text-gray-300">termostroy2018@yandex.ru</a>
                  </p>
                </div>
              </div>

              <!-- Phone Contact -->
              <div class="flex items-center space-x-4">
                <svg class="text-gray-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                  <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z" />
                </svg>
                <div>
                  <p class="text-sm text-gray-600">Позвоните нам</p>
                  <p>
                    <a href="tel:+89672145669" class="text-lime-500 hover:text-black dark:text-white dark:hover:text-gray-300">+7 (967) 214 56 69</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Image Section -->
        <div class="flex justify-center">
          <img src="{{ asset('images/contact-us.jpg') }}" alt="Contact Image" class="max-w-full h-auto rounded-lg shadow-lg">
        </div>
      </div>
    </div>
    
    <!-- Footer -->
    <footer class="mt-12 text-center text-gray-600">
      <p>📞 Позвоните нам: <a href="tel:+89672145669" class="text-lime-500 hover:text-black dark:text-white dark:hover:text-gray-300">+7 (967) 214 56 69</a></p>
    </footer>
  </div>
@endsection
