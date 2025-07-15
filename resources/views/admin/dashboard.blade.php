@extends('layouts.admin')

@section('title', 'Dashboard Admin')

@section('content')
<div class="p-6">
  <h1 class="text-3xl font-bold text-[#8B0000] mb-6">Dashboard Admin</h1>

  <h2 class="text-xl font-bold mb-4">Selamat Datang, {{ $name }}</h2>

  {{-- Statistik --}}
  <div class="grid grid-cols-1 sm:grid-cols-3 gap-6 mb-10">
    <div class="bg-white shadow rounded-xl p-6 border-l-4 border-red-700">
      <h2 class="text-lg font-bold text-red-700">Total Produk</h2>
      <p class="text-2xl mt-2">{{ $totalProduk }}</p>
    </div>
    <div class="bg-white shadow rounded-xl p-6 border-l-4 border-yellow-700">
      <h2 class="text-lg font-bold text-yellow-700">Total Visitor</h2>
      <p class="text-2xl mt-2">{{ $totalVisitor }}</p>
    </div>
    <div class="bg-white shadow rounded-xl p-6 border-l-4 border-green-700">
      <h2 class="text-lg font-bold text-green-700">Pesan Masuk</h2>
      <p class="text-2xl mt-2">{{ $jumlahPesan }}</p>
    </div>
  </div>

  {{-- Tabel Produk --}}
  <div class="mb-6">
    <div class="flex justify-between items-center mb-4">
      <h2 class="text-xl font-semibold text-gray-700">Data Produk</h2>
      <a href="{{ route('admin.produk.create') }}" class="bg-green-700 text-white px-4 py-2 rounded hover:bg-green-800 transition">
        + Tambah Produk
      </a>
    </div>

    <div class="overflow-x-auto bg-white rounded-xl shadow">
      <table class="min-w-full text-sm text-left">
        <thead class="bg-[#8B0000] text-white">
          <tr>
            <th class="px-4 py-3">No</th>
            <th class="px-4 py-3">Gambar</th>
            <th class="px-4 py-3">Nama</th>
            <th class="px-4 py-3">Harga</th>
            <th class="px-4 py-3">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @foreach($products as $product)
          <tr class="border-b">
            <td class="px-4 py-2">{{ $loop->iteration }}</td>
            <td class="px-4 py-2">
              <img src="{{ asset($product->gambar) }}" class="w-16 h-16 object-cover rounded-md" />
            </td>
            <td class="px-4 py-2">{{ $product->nama }}</td>
            <td class="px-4 py-2">Rp{{ number_format($product->harga, 0, ',', '.') }}</td>
            <td class="px-4 py-2 space-x-2 flex items-center">
              <a href="{{ route('admin.produk.edit', $product->id) }}" class="inline-flex items-center gap-2 px-4 py-2 bg-gradient-to-r from-blue-500 to-blue-700 text-green-500 font-bold rounded-lg shadow hover:from-blue-600 hover:to-blue-800 hover:scale-105 transition-all duration-200">
                <i class="fa-solid fa-pen-to-square"></i>
                <span>Edit</span>
              </a>
              <form action="{{ route('admin.produk.destroy', $product->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Yakin ingin hapus produk ini?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="inline-flex items-center gap-2 px-4 py-2 bg-gradient-to-r from-red-500 to-red-700 text-red-500 font-bold rounded-lg shadow hover:from-red-600 hover:to-red-800 hover:scale-105 transition-all duration-200">
                  <i class="fa-solid fa-trash"></i>
                  <span>Hapus</span>
                </button>
              </form>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
