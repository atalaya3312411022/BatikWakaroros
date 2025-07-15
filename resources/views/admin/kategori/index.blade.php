@extends('layouts.admin')

@section('title', 'Kelola Kategori')

@section('content')
<div class="p-6">
    <div class="flex justify-between items-center mb-6">
        <h2 class="text-2xl font-bold text-maroon">Data Kategori</h2>
        <a href="{{ route('kategori.create') }}" class="bg-maroon text-white px-4 py-2 rounded hover:bg-gold transition">+ Tambah Kategori</a>
    </div>

    @if(session('success'))
        <div class="bg-green-100 text-green-800 px-4 py-2 rounded mb-4">{{ session('success') }}</div>
    @endif

    <div class="bg-white shadow rounded">
        <table class="w-full text-left">
            <thead class="bg-cream text-maroon">
                <tr>
                    <th class="px-4 py-3">#</th>
                    <th class="px-4 py-3">Nama Kategori</th>
                    <th class="px-4 py-3 text-right">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categories as $category)
                <tr class="border-t">
                    <td class="px-4 py-3">{{ $loop->iteration }}</td>
                    <td class="px-4 py-3">{{ $category->nama }}</td>
                    <td class="px-4 py-3 text-right space-x-2">
                        <a href="{{ route('kategori.edit', $category->id) }}" class="text-blue-600 hover:underline">Edit</a>
                        <form action="{{ route('kategori.destroy', $category->id) }}" method="POST" class="inline" onsubmit="return confirm('Yakin hapus kategori ini?')">
                            @csrf @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                        </form>
                    </td>
                </tr>
                @endforeach
                @if($categories->isEmpty())
                <tr>
                    <td colspan="3" class="px-4 py-6 text-center text-gray-500">Belum ada kategori.</td>
                </tr>
                @endif
            </tbody>
        </table>
    </div>
</div>
@endsection
