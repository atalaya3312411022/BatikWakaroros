@extends('layouts.app')

@section('content')
<div class="container mx-auto p-4 max-w-2xl">
    <h2 class="text-2xl font-bold mb-4">Hubungi Kami</h2>
    <form class="space-y-4">
        <div>
            <label class="block font-medium">Nama</label>
            <input type="text" class="w-full border rounded p-2" placeholder="Nama Anda">
        </div>
        <div>
            <label class="block font-medium">Email</label>
            <input type="email" class="w-full border rounded p-2" placeholder="Email Anda">
        </div>
        <div>
            <label class="block font-medium">Alamat</label>
            <input type="text" class="w-full border rounded p-2" placeholder="Alamat Lengkap">
        </div>
        <div>
            <label class="block font-medium">No Telepon</label>
            <input type="text" class="w-full border rounded p-2" placeholder="08xxxx">
        </div>
        <div>
            <label class="block font-medium">Pesan</label>
            <textarea class="w-full border rounded p-2" rows="4" placeholder="Pesan Anda..."></textarea>
        </div>
        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Kirim</button>
    </form>
</div>
@endsection
