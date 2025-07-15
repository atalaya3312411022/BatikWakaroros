@extends('layouts.app')

@section('title', 'Kontak')

@section('content')

<section class="max-w-3xl mx-auto px-4 py-16">
  <div class="bg-[#fffaf3] rounded-2xl shadow-lg p-8 text-center border border-yellow-800/10">
    <h2 class="text-3xl font-serif text-[#8B0000] mb-6">Hubungi Kami</h2>

    <div class="text-lg mb-4">
      <i class="fa-solid fa-phone text-[#B8860B] mr-2"></i> 0811-541-3333
    </div>
    <div class="text-lg mb-4">
      <i class="fa-solid fa-envelope text-[#B8860B] mr-2"></i> juwita_batik@gmail.com
    </div>
    <div class="text-lg mb-4">
      <i class="fa-brands fa-instagram text-[#B8860B] mr-2"></i> @juwitabatik_kabojayasgt
    </div>

    <a href="https://wa.me/62811541333" target="_blank" class="inline-block mt-6 bg-gradient-to-r from-yellow-600 to-red-800 text-white font-bold px-6 py-3 rounded-full hover:scale-105 transition">
      Chat via WhatsApp
    </a>
  </div>
</section>

@endsection
