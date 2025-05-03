@extends('layouts.app')

@section('title', 'Bosh sahifa')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Footer Example</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white text-black">

  <!-- Content (just for demo) -->
  <div class="min-h-[80vh] flex items-center justify-center">
    <h1 class="text-3xl font-bold">Hello, World!</h1>
  </div>

  <!-- Footer -->
  <footer class="bg-gray-200 text-black pt-10 pb-5 px-4 lg:px-20">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-10">
      <div>
        <h2 class="text-lg font-semibold mb-4">Company</h2>
        <ul class="space-y-2">
          <li><a href="#" class="hover:underline">About Us</a></li>
          <li><a href="#" class="hover:underline">Careers</a></li>
          <li><a href="#" class="hover:underline">Blog</a></li>
        </ul>
      </div>
      <div>
        <h2 class="text-lg font-semibold mb-4">Support</h2>
        <ul class="space-y-2">
          <li><a href="#" class="hover:underline">Contact</a></li>
          <li><a href="#" class="hover:underline">FAQ</a></li>
          <li><a href="#" class="hover:underline">Privacy Policy</a></li>
        </ul>
      </div>
      <div>
        <h2 class="text-lg font-semibold mb-4">Services</h2>
        <ul class="space-y-2">
          <li><a href="#" class="hover:underline">Web Design</a></li>
          <li><a href="#" class="hover:underline">Development</a></li>
          <li><a href="#" class="hover:underline">Hosting</a></li>
        </ul>
      </div>
      <div>
        <h2 class="text-lg font-semibold mb-4">Follow Us</h2>
        <div class="flex space-x-4">
          <a href="#">FB</a>
          <a href="#">TG</a>
          <a href="#">IG</a>
        </div>
      </div>
    </div>
    <div class="mt-10 border-t pt-5 text-center text-sm">
      © 2025 YourCompany. All rights reserved.
    </div>
  </footer>

</body>
</html>


@endsection