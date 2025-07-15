@extends('layouts.admin')

@section('title', 'Dashboard Admin')

@section('content')
<div class="flex">
    {{-- Sidebar --}}
    <aside class="w-64 bg-[#8B0000] text-white min-h-screen p-6">
        <h2 class="text-2xl font-bold mb-6">Admin Panel</h2>
        <ul class="space-y-4">
            <li><a href="{{ route('admin.dashboard') }}" class="block hover:underline">Dashboard</a></li>
            <li><a href="{{ route('admin.produk.create') }}" class="block hover:underline">Tambah Produk</a></li>
            <li><a href="#" class="block hover:underline">Kelola Kategori</a></li>
        </ul>
    </aside>

    {{-- Main content --}}
    <main class="flex-1 bg-gray-50 p-8">
        <h1 class="text-3xl font-bold text-maroon mb-6">Dashboard Admin</h1>

        {{-- Statistik --}}
        <div class="grid grid-cols-3 gap-6 mb-8">
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-lg text-gray-600">Total Produk</h3>
                <p class="text-3xl font-bold text-maroon">{{ $jumlahProduk }}</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-lg text-gray-600">Total Kategori</h3>
                <p class="text-3xl font-bold text-maroon">{{ $jumlahKategori }}</p>
            </div>
            <div class="bg-white p-6 rounded-lg shadow">
                <h3 class="text-lg text-gray-600">Pengunjung (dummy)</h3>
                <p class="text-3xl font-bold text-maroon">1.280</p>
            </div>
        </div>

        {{-- Daftar Produk --}}
        <div class="bg-white p-6 rounded-lg shadow">
            <div class="flex justify-between items-center mb-4">
                <h2 class="text-xl font-bold">Daftar Produk</h2>
                <a href="{{ route('admin.produk.create') }}" class="bg-maroon text-white px-4 py-2 rounded hover:bg-red-700">+ Tambah Produk</a>
            </div>

            <table class="w-full table-auto text-left">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="p-3">Nama</th>
                        <th class="p-3">Harga</th>
                        <th class="p-3">Gambar</th>
                        <th class="p-3">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr class="border-t">
                            <td class="p-3">{{ $product->nama }}</td>
                            <td class="p-3">Rp{{ number_format($product->harga, 0, ',', '.') }}</td>
                            <td class="p-3">
                                <img src="{{ asset($product->gambar) }}" alt="{{ $product->nama }}" class="w-20 rounded shadow">
                            </td>
                            <td class="p-3">
                                <a href="{{ route('admin.produk.edit', $product->id) }}" class="text-blue-600 hover:underline mr-3">Edit</a>
                                <form action="{{ route('admin.produk.destroy', $product->id) }}" method="POST" class="inline" onsubmit="return confirm('Yakin ingin menghapus produk ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </main>
</div>
@endsection
