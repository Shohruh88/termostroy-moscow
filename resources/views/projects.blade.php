@extends('layouts.app')

@section('title', 'Termostroy')

@section('content')

<!-- Projects Portfolio Section -->
<section id="projects" class="py-20 bg-gray-50">
    <div class="container mx-auto px-4">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="text-4xl lg:text-6xl font-bold text-gray-900 mb-4">Завершенные проекты</h2>
            <div class="w-24 h-1 bg-gradient-to-r from-blue-600 to-purple-600 mx-auto mb-8"></div>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto leading-relaxed">
                Мы гордимся нашими реализованными проектами, которые демонстрируют высокое качество и профессионализм в строительстве
            </p>
        </div>

        <!-- Projects Grid -->
        <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-8">
            
            <!-- Capital Towers Project -->
            <div class="group relative overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                <div class="aspect-[4/3] bg-cover bg-center relative" 
                     style="background-image: url('{{ asset('images/tower1.jpg') }}')">
                    <!-- Overlay -->
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-60 group-hover:opacity-40 transition-opacity duration-300"></div>
                    
                    <!-- Content -->
                    <div class="absolute inset-0 p-6 flex flex-col justify-end text-white">
                        <div class="transform translate-y-6 group-hover:translate-y-0 transition-transform duration-300">
                            <span class="inline-block bg-blue-600 text-xs px-3 py-1 rounded-full mb-3 font-semibold">ЖИЛОЙ КОМПЛЕКС</span>
                            <h3 class="text-2xl font-bold mb-2">Capital Towers</h3>
                            <p class="text-sm opacity-90 mb-4">Краснопресненская наб., 14 • 61-65 этажей • 2024</p>
                            <div class="opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <a href="{{ route('CapitalTowers') }}" 
                                   class="inline-flex items-center bg-white text-gray-900 px-4 py-2 rounded-lg font-semibold hover:bg-gray-100 transition-colors duration-200">
                                    Подробнее
                                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Moscow Business Center -->
            <div class="group relative overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                <div class="aspect-[4/3] bg-cover bg-center relative" 
                     style="background-image: url('{{ asset('images/olimp_park/Olympia_Park.webp') }}')">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-60 group-hover:opacity-40 transition-opacity duration-300"></div>
                    
                    <div class="absolute inset-0 p-6 flex flex-col justify-end text-white">
                        <div class="transform translate-y-6 group-hover:translate-y-0 transition-transform duration-300">
                            <span class="inline-block bg-purple-600 text-xs px-3 py-1 rounded-full mb-3 font-semibold">БИЗНЕС-ЦЕНТР</span>
                            <h3 class="text-2xl font-bold mb-2">Олимпия Парк</h3>
                            <p class="text-sm opacity-90 mb-4">Центральный телеграф Тверская улица, 7</p>
                            <div class="opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <a href="{{ route('OlimpPark') }}" class="inline-flex items-center bg-white text-gray-900 px-4 py-2 rounded-lg font-semibold hover:bg-gray-100 transition-colors duration-200">
                                    Подробнее
                                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Residential Complex -->
            <div class="group relative overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                <div class="aspect-[4/3] bg-cover bg-center relative" 
                     style="background-image: url('{{ asset('images/moscow__second.jpg') }}')">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/20 to-transparent opacity-60 group-hover:opacity-40 transition-opacity duration-300"></div>
                    
                    <div class="absolute inset-0 p-6 flex flex-col justify-end text-white">
                        <div class="transform translate-y-6 group-hover:translate-y-0 transition-transform duration-300">
                            <span class="inline-block bg-green-600 text-xs px-3 py-1 rounded-full mb-3 font-semibold">ЖИЛОЙ КОМПЛЕКС</span>
                            <h3 class="text-2xl font-bold mb-2">Prestige Residence</h3>
                            <p class="text-sm opacity-90 mb-4">Пресненский район • 35 этажей • 2022</p>
                            <div class="opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <a href="{{ route('Telegraf') }}" class="inline-flex items-center bg-white text-gray-900 px-4 py-2 rounded-lg font-semibold hover:bg-gray-100 transition-colors duration-200">
                                    Подробнее
                                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Commercial Complex -->
            <div class="group relative overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                <div class="aspect-[4/3] bg-gradient-to-br from-blue-600 to-purple-700 relative">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="text-center text-white">
                            <div class="w-16 h-16 bg-white bg-opacity-20 rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M4 3a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V5a2 2 0 00-2-2H4zm12 12H4l4-8 3 6 2-4 3 6z"/>
                                </svg>
                            </div>
                            <p class="text-sm opacity-75">Скоро</p>
                        </div>
                    </div>
                    
                    <div class="absolute inset-0 p-6 flex flex-col justify-end text-white">
                        <div class="transform translate-y-6 group-hover:translate-y-0 transition-transform duration-300">
                            <span class="inline-block bg-orange-600 text-xs px-3 py-1 rounded-full mb-3 font-semibold">ТОРГОВЫЙ ЦЕНТР</span>
                            <h3 class="text-2xl font-bold mb-2">Metropolitan Mall</h3>
                            <p class="text-sm opacity-90 mb-4">В разработке • 2025</p>
                            <div class="opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <button class="inline-flex items-center bg-white text-gray-900 px-4 py-2 rounded-lg font-semibold opacity-50 cursor-not-allowed">
                                    В разработке
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Office Complex -->
            <div class="group relative overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                <div class="aspect-[4/3] bg-gradient-to-br from-teal-600 to-cyan-700 relative"
                                     style="background-image: url('{{ asset('images/sberbank/ТермоСтрой_КАТАЛОГ.png') }}')">>
                    
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="text-center text-white">
                            <div class="w-16 h-16 bg-white bg-opacity-20 rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 110 2h-3a1 1 0 01-1-1v-6a1 1 0 00-1-1H9a1 1 0 00-1 1v6a1 1 0 01-1 1H4a1 1 0 110-2V4zm3 1h2v2H7V5zm2 4H7v2h2V9zm2-4h2v2h-2V5zm2 4h-2v2h2V9z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <p class="text-sm opacity-75">Офисный комплекс</p>
                        </div>
                    </div>
                    
                    <div class="absolute inset-0 p-6 flex flex-col justify-end text-white">
                        <div class="transform translate-y-6 group-hover:translate-y-0 transition-transform duration-300">
                            <span class="inline-block bg-teal-600 text-xs px-3 py-1 rounded-full mb-3 font-semibold">ОФИСНЫЙ ЦЕНТР</span>
                            <h3 class="text-2xl font-bold mb-2">Здание Сбербанк-Сити</h3>
                            <p class="text-sm opacity-90 mb-4">Адрес Кутузовский проспект, д.32</p>
                            <div class="opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <a href="{{ route('Sberbank') }}" class="inline-flex items-center bg-white text-gray-900 px-4 py-2 rounded-lg font-semibold hover:bg-gray-100 transition-colors duration-200">
                                    Подробнее
                                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="group relative overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                <div class="aspect-[4/3] bg-gradient-to-br from-teal-600 to-cyan-700 relative"
                                     style="background-image: url('{{ asset('images/arcus/Arcus.webp') }}')">>
                    
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="text-center text-white">
                            <div class="w-16 h-16 bg-white bg-opacity-20 rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M4 4a2 2 0 012-2h8a2 2 0 012 2v12a1 1 0 110 2h-3a1 1 0 01-1-1v-6a1 1 0 00-1-1H9a1 1 0 00-1 1v6a1 1 0 01-1 1H4a1 1 0 110-2V4zm3 1h2v2H7V5zm2 4H7v2h2V9zm2-4h2v2h-2V5zm2 4h-2v2h2V9z" clip-rule="evenodd"/>
                                </svg>
                            </div>
                            <p class="text-sm opacity-75">Офисный комплекс</p>
                        </div>
                    </div>

                    <!-- new -->
                    <div class="absolute inset-0 p-6 flex flex-col justify-end text-white">
                        <div class="transform translate-y-6 group-hover:translate-y-0 transition-transform duration-300">
                            <span class="inline-block bg-teal-600 text-xs px-3 py-1 rounded-full mb-3 font-semibold">БИЗНЕС-ЦЕНТР</span>
                            <h3 class="text-2xl font-bold mb-2">Бизнес Центр Arcus III</h3>
                            <p class="text-sm opacity-90 mb-4">Москва, Ленинградский пр-кт, д. 37А, кор. 4</p>
                            <div class="opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <a href="{{ route('Arcus') }}" class="inline-flex items-center bg-white text-gray-900 px-4 py-2 rounded-lg font-semibold hover:bg-gray-100 transition-colors duration-200">
                                    Подробнее
                                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Luxury Apartments -->
            <!-- <div class="group relative overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-500 transform hover:-translate-y-2">
                <div class="aspect-[4/3] bg-gradient-to-br from-indigo-600 to-purple-700 relative">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="text-center text-white">
                            <div class="w-16 h-16 bg-white bg-opacity-20 rounded-full flex items-center justify-center mx-auto mb-4">
                                <svg class="w-8 h-8" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"/>
                                </svg>
                            </div>
                            <p class="text-sm opacity-75">Элитное жилье</p>
                        </div>
                    </div>
                    
                    <div class="absolute inset-0 p-6 flex flex-col justify-end text-white">
                        <div class="transform translate-y-6 group-hover:translate-y-0 transition-transform duration-300">
                            <span class="inline-block bg-purple-600 text-xs px-3 py-1 rounded-full mb-3 font-semibold">ЭЛИТНЫЙ ЖК</span>
                            <h3 class="text-2xl font-bold mb-2">Бизнес Центр Arcus III</h3>
                            <p class="text-sm opacity-90 mb-4">Центральный район • 42 этажа • 2020</p>
                            <div class="opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                               <img class="w-full h-auto object-cover" src="{{ asset('images/page_7.png') }}" alt="Gallery Image">
                                <a href="{{ route('Arcus') }}" class="inline-flex items-center bg-white text-gray-900 px-4 py-2 rounded-lg font-semibold hover:bg-gray-100 transition-colors duration-200">
                                    Подробнее
                                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->

        </div>

        <!-- Stats Section -->
        <div class="mt-20 grid grid-cols-2 md:grid-cols-4 gap-8">
            <div class="text-center">
                <div class="text-4xl font-bold text-blue-600 mb-2">100+</div>
                <div class="text-gray-600">Завершенных проектов</div>
            </div>
            <div class="text-center">
                <div class="text-4xl font-bold text-purple-600 mb-2">10M+</div>
                <div class="text-gray-600">м² построено</div>
            </div>
            <div class="text-center">
                <div class="text-4xl font-bold text-green-600 mb-2">20</div>
                <div class="text-gray-600">лет опыта</div>
            </div>
            <div class="text-center">
                <div class="text-4xl font-bold text-orange-600 mb-2">5+</div>
                <div class="text-gray-600">активных проектов</div>
            </div>
        </div>

        <!-- CTA Button -->
        <div class="text-center mt-16">
            <a href="{{ route('contact') }}" 
               class="inline-flex items-center bg-gradient-to-r from-blue-600 to-purple-600 text-white px-8 py-4 rounded-xl font-semibold hover:from-blue-700 hover:to-purple-700 transition-all duration-300 transform hover:scale-105 shadow-lg">
                <svg class="w-5 h-5 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-3.582 8-8 8a8.955 8.955 0 01-3.257-.6L3 20l1.6-6.743A8.955 8.955 0 013 12c0-4.418 3.582-8 8-8s8 3.582 8 8z"/>
                </svg>
                Обсудить новый проект
            </a>
        </div>
    </div>
</section>

<style>
/* Additional styles for enhanced animations */
.group:hover .aspect-\[4\/3\] {
    transform: scale(1.05);
    transition: transform 0.5s ease;
}

.aspect-\[4\/3\] {
    transition: transform 0.5s ease;
}

/* Custom scrollbar for better UX */
::-webkit-scrollbar {
    width: 8px;
}

::-webkit-scrollbar-track {
    background: #f1f1f1;
}

::-webkit-scrollbar-thumb {
    background: linear-gradient(45deg, #667eea, #764ba2);
    border-radius: 4px;
}

::-webkit-scrollbar-thumb:hover {
    background: linear-gradient(45deg, #5a67d8, #6b46c1);
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Intersection Observer for animations
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    }, observerOptions);

    // Animate project cards
    document.querySelectorAll('.group').forEach(el => {
        el.style.opacity = '0';
        el.style.transform = 'translateY(30px)';
        el.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
        observer.observe(el);
    });

    // Add loading effect for images
    document.querySelectorAll('[style*="background-image"]').forEach(el => {
        const img = new Image();
        const bgImage = el.style.backgroundImage.slice(4, -1).replace(/"/g, "");
        
        img.onload = function() {
            el.classList.add('loaded');
        };
        
        img.src = bgImage;
    });
});
</script>


<!-- <div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
    <div class="grid grid-cols-2 sm:grid-cols-4 gap-2">
      <div class="space-y-2">
        <img class="w-full h-auto object-cover" src="{{ asset('images/page_1.png') }}" alt="Gallery Image">
        <img class="w-full h-auto object-cover" src="{{ asset('images/page_7.png') }}" alt="Gallery Image">
        <img class="w-full h-auto object-cover" src="{{ asset('images/building.png') }}" alt="Gallery Image">
      </div>
      <div class="space-y-2">
        <img class="w-full h-auto object-cover" src="{{ asset('images/page_2.png') }}" alt="Gallery Image">
        <img class="w-full h-auto object-cover" src="{{ asset('images/page_16.png') }}" alt="Gallery Image">
      </div>
      <div class="space-y-2">
        <img class="w-full h-auto object-cover" src="{{ asset('images/page_10.png') }}" alt="Gallery Image">
        <img class="w-full h-auto object-cover" src="{{ asset('images/page_11.png') }}" alt="Gallery Image">
      </div>
      <div class="space-y-2">
        <img class="w-full h-auto object-cover" src="{{ asset('images/page_13.png') }}" alt="Gallery Image">
        <img class="w-full h-auto object-cover" src="{{ asset('images/page_9.png') }}" alt="Gallery Image">
      </div>
    </div>
  </div>
   -->

@endsection