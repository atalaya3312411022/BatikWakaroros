@extends('layouts.app')

@section('title', 'Keunggulan')

@section('content')
<section class="max-w-5xl mx-auto py-16 px-4">
  <h1 class="text-4xl font-serif text-center text-[#8B0000] mb-10 font-bold">Keunggulan Batik Wakaroros</h1>
  <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
    <div class="bg-[#fffbe6] rounded-2xl shadow-lg p-8 border-l-4 border-[#8B0000] hover:scale-105 transition-transform">
      <div class="flex items-center gap-4 mb-2">
        <i class="fa-solid fa-leaf text-3xl text-[#B8860B]"></i>
        <h2 class="text-xl font-bold text-[#8B0000]">Motif Eksklusif</h2>
      </div>
      <p>Setiap motif Batik Wakaroros dirancang dengan inspirasi budaya lokal, menjadikan setiap produk unik dan penuh makna.</p>
    </div>
    <div class="bg-[#fffbe6] rounded-2xl shadow-lg p-8 border-l-4 border-[#B8860B] hover:scale-105 transition-transform">
      <div class="flex items-center gap-4 mb-2">
        <i class="fa-solid fa-paint-brush text-3xl text-[#8B0000]"></i>
        <h2 class="text-xl font-bold text-[#B8860B]">Pewarna Alami</h2>
      </div>
      <p>Menggunakan bahan pewarna alami yang ramah lingkungan dan aman untuk kulit, menjaga kualitas dan kesehatan pengguna.</p>
    </div>
    <div class="bg-[#fffbe6] rounded-2xl shadow-lg p-8 border-l-4 border-[#8B0000] hover:scale-105 transition-transform">
      <div class="flex items-center gap-4 mb-2">
        <i class="fa-solid fa-award text-3xl text-[#B8860B]"></i>
        <h2 class="text-xl font-bold text-[#8B0000]">Kualitas Premium</h2>
      </div>
      <p>Bahan berkualitas, jahitan rapi, dan finishing detail untuk hasil terbaik yang tahan lama dan nyaman dipakai.</p>
    </div>
    <div class="bg-[#fffbe6] rounded-2xl shadow-lg p-8 border-l-4 border-[#B8860B] hover:scale-105 transition-transform">
      <div class="flex items-center gap-4 mb-2">
        <i class="fa-solid fa-truck-fast text-3xl text-[#8B0000]"></i>
        <h2 class="text-xl font-bold text-[#B8860B]">Pengiriman Cepat</h2>
      </div>
      <p>Pesanan Anda akan diproses dan dikirim secepat mungkin ke seluruh Indonesia dengan layanan terbaik.</p>
    </div>
  </div>
</section>
@endsection