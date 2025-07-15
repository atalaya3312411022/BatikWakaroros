@extends('layouts.app')

@section('title', 'Beranda')

@section('content')

<!-- Hero Section -->
<section class="relative bg-cover bg-center min-h-[70vh] flex items-center justify-center text-white" style="background-image: url('{{ asset('images/page1_img5.jpeg') }}')">
  <div class="absolute inset-0 bg-gradient-to-r from-[#8B0000]/70 to-[#B8860B]/50"></div>
  <div class="relative z-10 text-center max-w-2xl px-4">
    <h1 class="text-4xl md:text-5xl font-serif font-bold mb-4 text-[#fffbe6] drop-shadow">Batik Wakaroros</h1>
    <p class="text-lg md:text-xl text-[#fffbe6] drop-shadow">Batik Khas Nusantara, Perpaduan Tradisi & Modernitas. Temukan koleksi terbaik kami yang penuh makna dan cerita budaya.</p>
    <div class="flex flex-row justify-center items-center gap-4 mt-8 w-full">
      <a href="{{ route('katalog') }}" class="btn-hero"> <i class="fa-solid fa-book-open"></i> Lihat Katalog</a>
      <a href="{{ route('tentang') }}" class="btn-hero-outline"> <i class="fa-solid fa-circle-info"></i> Tentang Kami</a>
    </div>
  </div>
</section>

<!-- Keunggulan -->
<section class="max-w-6xl mx-auto py-16 px-4 text-center" id="keunggulan">
  <h2 class="text-2xl font-serif text-[#8B0000] mb-8">Keunggulan Kami</h2>
  <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
    <div class="p-6 bg-[#fffbe6] rounded-xl shadow hover:shadow-lg transition">
      <i class="fa-solid fa-leaf text-3xl text-[#B8860B] mb-4"></i>
      <h3 class="font-semibold text-[#8B0000] mb-2">Motif Eksklusif</h3>
      <p class="text-sm">Terinspirasi dari kekayaan budaya lokal, setiap motif dirancang unik dan bermakna.</p>
    </div>
    <div class="p-6 bg-[#fffbe6] rounded-xl shadow hover:shadow-lg transition">
      <i class="fa-solid fa-paint-brush text-3xl text-[#B8860B] mb-4"></i>
      <h3 class="font-semibold text-[#8B0000] mb-2">Pewarna Alami</h3>
      <p class="text-sm">Menggunakan bahan pewarna alami yang ramah lingkungan dan aman untuk kulit.</p>
    </div>
    <div class="p-6 bg-[#fffbe6] rounded-xl shadow hover:shadow-lg transition">
      <i class="fa-solid fa-award text-3xl text-[#B8860B] mb-4"></i>
      <h3 class="font-semibold text-[#8B0000] mb-2">Kualitas Premium</h3>
      <p class="text-sm">Bahan berkualitas, jahitan rapi, dan finishing detail untuk hasil terbaik.</p>
    </div>
    <div class="p-6 bg-[#fffbe6] rounded-xl shadow hover:shadow-lg transition">
      <i class="fa-solid fa-truck-fast text-3xl text-[#B8860B] mb-4"></i>
      <h3 class="font-semibold text-[#8B0000] mb-2">Pengiriman Cepat</h3>
      <p class="text-sm">Pesanan Anda akan diproses dan dikirim secepat mungkin ke seluruh Indonesia.</p>
    </div>
  </div>
</section>

<!-- Section Pencarian & Katalog Preview -->
<section class="max-w-6xl mx-auto py-12 px-4" id="katalog">
  <!-- Form Pencarian Produk -->
  <form action="{{ url()->current() }}" method="GET" class="max-w-md mx-auto mb-8 flex gap-2">
    <input type="text" name="q" value="{{ request('q') }}" placeholder="Cari produk..." class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#8B0000]">
    <button type="submit" class="bg-[#8B0000] text-white px-4 py-2 rounded">Cari</button>
  </form>

  <!-- Katalog Preview -->
  @if ($products->count())
  <h2 class="text-2xl font-serif text-center text-[#8B0000] mb-8">Katalog Batik Wakaroros</h2>
  <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
    @foreach ($products as $product)
    <a href="{{ route('produk.detail', $product->id) }}" class="product-card-aesthetic group">
      <img src="{{ asset($product->gambar) }}" alt="{{ $product->nama }}" class="product-card-img group-hover:shadow-lg transition" />
      <div class="p-4">
        <h3 class="font-bold text-[#8B0000] text-base md:text-lg mb-1">{{ $product->nama }}</h3>
        <p class="text-sm text-[#2d1a0b] font-semibold italic">Stok  : {{ $product->stok }} </p>
        <div class="mt-16"></div>
        <span class="product-card-badge">Rp{{ number_format($product->harga, 0, ',', '.') }}</span>
      </div>
    </a>
    @endforeach
  </div>
  <div class="text-center mt-8">
    <a href="{{ route('katalog') }}" class="btn-sekunder"> <i class="fa-solid fa-list"></i> Lihat Semua</a>
  </div>
  @endif
</section>

<!-- Our Agent Support -->
@if (!empty($supportImages))
<section class="max-w-6xl mx-auto py-8 px-4">
  <h2 class="text-xl font-serif text-[#8B0000] mb-4 font-bold text-center">Our Agent Support</h2>
  <div class="overflow-hidden relative">
    <div class="marquee-track flex items-center gap-8 animate-support-scroll" style="will-change: transform;">
      @foreach ($supportImages as $img)
        <img src="{{ asset($img) }}" alt="Support Agent" class="h-16 w-auto object-contain drop-shadow-md">
      @endforeach
      @foreach ($supportImages as $img)
        <img src="{{ asset($img) }}" alt="Support Agent" class="h-16 w-auto object-contain drop-shadow-md">
      @endforeach
    </div>
  </div>
</section>
@endif

@push('styles')
<style>
.marquee-track {
  min-width: 200%;
}
@keyframes support-scroll {
  0% { transform: translateX(0); }
  100% { transform: translateX(-50%); }
}
.animate-support-scroll {
  animation: support-scroll 20s linear infinite;
}
</style>
@endpush

<!-- Testimoni -->
<section class="bg-[#fffaf3] py-16 px-4" id="testimoni">
  <h2 class="text-2xl font-serif text-center text-[#8B0000] mb-12">Apa Kata Pelanggan Kami?</h2>
  <div class="max-w-6xl mx-auto grid grid-cols-1 md:grid-cols-3 gap-6">
    <div class="bg-white p-6 rounded-xl shadow text-center">
      <i class="fa-solid fa-quote-left text-2xl text-[#B8860B] mb-4"></i>
      <p class="text-sm text-[#2d1a0b] italic">Batiknya sangat halus dan motifnya unik. Saya suka sekali! Pengiriman juga cepat.</p>
      <div class="mt-4 font-semibold text-[#8B0000]">- Sari, Jakarta</div>
    </div>
    <div class="bg-white p-6 rounded-xl shadow text-center">
      <i class="fa-solid fa-quote-left text-2xl text-[#B8860B] mb-4"></i>
      <p class="text-sm text-[#2d1a0b] italic">Kualitas premium, cocok untuk acara formal maupun santai. Terima kasih Batik Wakaroros!</p>
      <div class="mt-4 font-semibold text-[#8B0000]">- Budi, Surabaya</div>
    </div>
    <div class="bg-white p-6 rounded-xl shadow text-center">
      <i class="fa-solid fa-quote-left text-2xl text-[#B8860B] mb-4"></i>
      <p class="text-sm text-[#2d1a0b] italic">Motifnya benar-benar khas dan beda dari yang lain. Recommended!</p>
      <div class="mt-4 font-semibold text-[#8B0000]">- Lina, Makassar</div>
    </div>
  </div>
</section>

@endsection
