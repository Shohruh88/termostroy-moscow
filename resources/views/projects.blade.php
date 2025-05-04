@extends('layouts.app')

@section('title', 'Termostroy')

@section('content')
<div class="max-w-[85rem] px-4 py-10 sm:px-6 lg:px-8 lg:py-14 mx-auto">
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
        <img class="w-full h-auto object-cover" src="{{ asset('images/moscow-city.jpg') }}" alt="Gallery Image">
        <img class="w-full h-auto object-cover" src="{{ asset('images/page_10.png') }}" alt="Gallery Image">
        <img class="w-full h-auto object-cover" src="{{ asset('images/page_11.png') }}" alt="Gallery Image">
      </div>
      <div class="space-y-2">
        <img class="w-full h-auto object-cover" src="{{ asset('images/page_13.png') }}" alt="Gallery Image">
        <img class="w-full h-auto object-cover" src="{{ asset('images/page_9.png') }}" alt="Gallery Image">
      </div>
    </div>
  </div>
  

@endsection