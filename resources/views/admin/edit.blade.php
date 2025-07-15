@extends('layouts.admin')

@section('title', 'Edit Produk')

@section('content')
<div class="p-6">
  <h1 class="text-3xl font-bold text-[#8B0000] mb-6">Edit Produk</h1>

  <form action="{{ route('admin.produk.update', $product->id) }}" method="POST" enctype="multipart/form-data" class="bg-white shadow rounded-xl p-6 space-y-4">
    @csrf
    @method('PUT')

    <div>
      <label for="nama" class="block font-semibold text-gray-700 mb-1">Nama Produk</label>
      <input type="text" id="nama" name="nama" value="{{ $product->nama }}" required class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring focus:ring-red-200" />
    </div>

    <div>
      <label for="deskripsi" class="block font-semibold text-gray-700 mb-1">Deskripsi</label>
      <textarea id="deskripsi" name="deskripsi" rows="4" required class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring focus:ring-red-200">{{ $product->deskripsi }}</textarea>
    </div>

    <div>
      <label for="harga" class="block font-semibold text-gray-700 mb-1">Harga (Rp)</label>
      <input type="number" id="harga" name="harga" value="{{ $product->harga }}" required class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring focus:ring-red-200" />
    </div>

    <div>
      <label for="stok" class="block font-semibold text-gray-700 mb-1">Stok</label>
      <input type="number" id="stok" name="stok" min="0" value="{{ $product->stok }}" required class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring focus:ring-yellow-200" />
    </div>

    <div>
      <label for="gambar" class="block font-semibold text-gray-700 mb-1">Gambar Produk</label>
      <input type="file" id="gambar" name="gambar" class="w-full border border-gray-300 rounded px-4 py-2 file:mr-4 file:py-2 file:px-4 file:border-0 file:text-sm file:font-semibold file:bg-yellow-50 file:text-yellow-700 hover:file:bg-yellow-100" />
      <p class="text-sm text-gray-500 mt-2">Biarkan kosong jika tidak ingin mengubah gambar.</p>
      <img src="{{ asset($product->gambar) }}" alt="Gambar Produk" class="mt-4 w-32 h-auto rounded shadow" />
    </div>

    <div class="flex justify-end gap-4">
      <a href="{{ route('admin.dashboard') }}" class="px-4 py-2 rounded bg-gray-200 text-gray-800 hover:bg-gray-300 transition">Batal</a>
      <button type="submit" class="px-6 py-2 rounded bg-blue-700 text-white hover:bg-blue-800 transition">Perbarui</button>
    </div>
  </form>
</div>
@endsection
