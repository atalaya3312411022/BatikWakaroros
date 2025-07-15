@extends('layouts.admin')

@section('title', 'Edit Kategori')

@section('content')
<div class="p-6 max-w-xl mx-auto">
    <h2 class="text-2xl font-bold mb-4 text-maroon">Edit Kategori</h2>

    @if($errors->any())
        <div class="bg-red-100 text-red-800 p-3 rounded mb-4">
            <ul class="list-disc pl-5">
                @foreach($errors->all() as $err)
                    <li>{{ $err }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('kategori.update', $category->id) }}" method="POST" class="space-y-4">
        @csrf @method('PUT')

        <div>
            <label for="nama" class="block mb-1 font-semibold">Nama Kategori</label>
            <input type="text" name="nama" id="nama" value="{{ $category->nama }}" required class="w-full px-4 py-2 border rounded shadow-sm focus:ring-gold focus:border-maroon">
        </div>

        <div class="text-right">
            <a href="{{ route('kategori.index') }}" class="px-4 py-2 mr-2 border rounded text-gray-700 hover:bg-gray-100">Batal</a>
            <button type="submit" class="bg-maroon text-white px-4 py-2 rounded hover:bg-gold transition">Perbarui</button>
        </div>
    </form>
</div>
@endsection
