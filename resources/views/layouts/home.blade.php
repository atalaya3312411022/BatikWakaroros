@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4">
    <h2 class="text-2xl font-bold mb-6">Katalog Produk</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
        <div class="border rounded-lg p-4 shadow">
            <img src="/images/produk1.jpg" alt="Produk 1" class="w-full h-48 object-cover mb-2 rounded">
            <h3 class="font-semibold text-lg">Batik Wakaroros Motif A</h3>
            <p class="text-gray-600">Rp 150.000</p>
        </div>
        <div class="border rounded-lg p-4 shadow">
            <img src="/images/produk2.jpg" alt="Produk 2" class="w-full h-48 object-cover mb-2 rounded">
            <h3 class="font-semibold text-lg">Batik Wakaroros Motif B</h3>
            <p class="text-gray-600">Rp 175.000</p>
        </div>
        <!-- Tambahkan produk lain sesuai kebutuhan -->
    </div>
</div>
@endsection
