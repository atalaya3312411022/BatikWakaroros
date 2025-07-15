@extends('layouts.app')

@section('title', 'Katalog')

@section('content')

<section class="max-w-6xl mx-auto py-16 px-4">
  <h1 class="text-3xl font-serif text-center text-[#8B0000] mb-12">Semua Produk Batik Wakaroros</h1>

  <!-- Form Pencarian Produk -->
  <form action="{{ url()->current() }}" method="GET" class="max-w-md mx-auto mb-8 flex gap-2">
    <input type="text" name="q" value="{{ request('q') }}" placeholder="Cari produk..." class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-[#8B0000]">
    <button type="submit" class="bg-[#8B0000] text-white px-4 py-2 rounded">Cari</button>
  </form>

  @if ($products->count())
  <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
    @foreach ($products as $product)
    <a href="{{ route('produk.detail', $product->id) }}" class="product-card-aesthetic group">
      @if($product->stok > 0)
        <span class="product-card-stok">Stok: {{ $product->stok }}</span>
      @else
        <span class="product-card-stok habis">Stok Habis</span>
      @endif
      <img src="{{ asset($product->gambar) }}" alt="{{ $product->nama }}" class="product-card-img group-hover:shadow-lg transition" />
      <div class="p-4">
        <h3 class="font-bold text-[#8B0000] text-base md:text-lg mb-1">{{ $product->nama }}</h3>
        <div class="mt-16"></div>
        <span class="product-card-badge">Rp{{ number_format($product->harga, 0, ',', '.') }}</span>
      </div>
    </a>
    @endforeach
  </div>
  @else
  <p class="text-center text-gray-500">Belum ada produk yang ditambahkan.</p>
  @endif
</section>

@endsection
