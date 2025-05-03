@extends('layouts.app')
@section('title', 'Service')

@section('content')
<section class="text-center my-12">
    <h1 class="text-4xl font-bold">Bizning Xizmatlar</h1>
    <p class="text-gray-600 mt-2">Sizga quyidagi xizmatlarni taklif qilamiz</p>
</section>

<section class="grid grid-cols-1 md:grid-cols-3 gap-6 px-4 md:px-20 my-10">
    <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition">
        <h3 class="text-xl font-semibold mb-2">Veb-sayt yaratish</h3>
        <p class="text-gray-600">Responsive dizayn, Laravel backend bilan.</p>
    </div>

    <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition">
        <h3 class="text-xl font-semibold mb-2">Mobil ilovalar</h3>
        <p class="text-gray-600">Android va iOS uchun ilovalar ishlab chiqish.</p>
    </div>

    <div class="bg-white rounded-xl shadow-lg p-6 hover:shadow-xl transition">
        <h3 class="text-xl font-semibold mb-2">SEO va marketing</h3>
        <p class="text-gray-600">Saytingizni Google'da yuqoriga olib chiqamiz.</p>
    </div>
</section>

<section class="my-16 px-6 md:px-20">
    <h2 class="text-2xl font-bold text-center mb-6">Qanday ishlaymiz?</h2>
    <ol class="list-decimal list-inside text-gray-700 space-y-3">
        <li>Talablaringizni yig‘amiz</li>
        <li>Dizayn va prototip yaratamiz</li>
        <li>Dasturlash va testlash</li>
        <li>Tayyor mahsulotni topshiramiz</li>
    </ol>
</section>

<section class="bg-gray-100 py-10 px-6 md:px-20">
    <h2 class="text-2xl font-bold text-center mb-6">Nega aynan biz?</h2>
    <ul class="grid grid-cols-1 md:grid-cols-2 gap-4 text-gray-800">
        <li>✅ 5+ yillik tajriba</li>
        <li>✅ Professional jamoa</li>
        <li>✅ Sifat kafolati</li>
        <li>✅ Arzon va tezkor xizmat</li>
    </ul>
</section>


@endsection

