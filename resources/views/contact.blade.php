@extends('layouts.app')

@section('title', 'Контакты')

@section('content')
  <section id="contact" class="py-20 bg-gradient-primary">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div class="text-white">
                    <h2 class="text-4xl lg:text-5xl font-bold mb-6">Связаться с нами</h2>
                    <p class="text-xl mb-8 opacity-90">
                        Если у Вас есть вопросы или предложения, можете направить их нам. Мы обязательно Вам ответим.
                    </p>
                    
                    <div class="space-y-6">
                        <div class="flex items-center space-x-4">
                            <div class="bg-white bg-opacity-20 p-3 rounded-full">
                                <i class="fas fa-map-marker-alt text-white text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold mb-1">Наш адрес</h3>
                                <p class="opacity-90">г. Москва, 5-я Магистральная, д.12, ком.42</p>
                            </div>
                        </div>
                        
                        <div class="flex items-center space-x-4">
                            <div class="bg-white bg-opacity-20 p-3 rounded-full">
                                <i class="fas fa-phone text-white text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold mb-1">Телефон</h3>
                                <a href="tel:+79672145669" class="opacity-90 hover:text-blue-300 transition-colors duration-300">+7 (967) 214-56-69</a>
                            </div>
                        </div>
                        
                        <div class="flex items-center space-x-4">
                            <div class="bg-white bg-opacity-20 p-3 rounded-full">
                                <i class="fas fa-envelope text-white text-xl"></i>
                            </div>
                            <div>
                                <h3 class="font-semibold mb-1">Email</h3>
                                <a href="mailto:info@termostroy.moscow" class="opacity-90 hover:text-blue-300 transition-colors duration-300">info@termostroy.moscow</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="bg-white rounded-xl p-8 shadow-2xl">
                    <h3 class="text-2xl font-bold text-gray-900 mb-6">Отправить сообщение</h3>
                    <form class="space-y-6">
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Имя</label>
                            <input type="text" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300" />
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Email</label>
                            <input type="email" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300" />
                        </div>
                        <div>
                            <label class="block text-sm font-medium text-gray-700 mb-2">Сообщение</label>
                            <textarea rows="4" class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent transition-all duration-300"></textarea>
                        </div>
                        <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white py-3 rounded-lg font-semibold transition-all duration-300 transform hover:scale-105">
                            Отправить сообщение
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>




@endsection
