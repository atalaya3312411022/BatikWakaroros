@extends('layouts.auth')

@section('title', 'Register - Batik Wakaroros')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-[#fffaf3] via-[#fff8e1] to-[#fff3e0] py-8 px-4">
    <div class="mx-auto" style="max-width: 340px; width: 100%;">
        <!-- Register Card -->
        <div class="bg-white/95 backdrop-blur-sm rounded-xl shadow-lg border border-white/30 p-6">
            <!-- Header -->
            <div class="text-center mb-5">
                <h1 class="text-xl font-bold text-[#2d1a0b] mb-1">Register</h1>
                <p class="text-xs text-[#8B0000]">Buat akun baru</p>
            </div>

            <!-- Error Messages -->
            @if ($errors->any())
                <div class="mb-3 p-2 bg-red-50 border border-red-200 rounded-lg">
                    <div class="flex items-start">
                        <div>
                            <h4 class="text-red-800 font-semibold mb-1 text-xs">Registrasi Gagal</h4>
                            <ul class="text-red-700 text-xs space-y-0.5">
                                @foreach ($errors->all() as $error)
                                    <li class="flex items-center">
                                        <span class="w-1 h-1 bg-red-500 rounded-full mr-1"></span>
                                        {{ $error }}
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endif

            <!-- Register Form -->
            <form method="POST" action="{{ route('register') }}" class="space-y-3">
                @csrf
                <!-- Name Field -->
                <div>
                    <label for="name" class="block text-xs font-semibold text-[#2d1a0b] mb-1">
                        Nama
                    </label>
                    <input 
                        type="text" 
                        name="name" 
                        id="name" 
                        value="{{ old('name') }}" 
                        required 
                        autofocus
                        class="px-3 py-2 border border-gray-300 rounded-lg focus:border-[#8B0000] focus:ring-1 focus:ring-[#8B0000]/20 outline-none transition-all duration-200 bg-white/80 text-sm w-full"
                        placeholder="Masukkan nama lengkap"
                    >
                </div>
                <!-- Email Field -->
                <div>
                    <label for="email" class="block text-xs font-semibold text-[#2d1a0b] mb-1">
                        Email
                    </label>
                    <input 
                        type="email" 
                        name="email" 
                        id="email" 
                        value="{{ old('email') }}" 
                        required
                        class="px-3 py-2 border border-gray-300 rounded-lg focus:border-[#8B0000] focus:ring-1 focus:ring-[#8B0000]/20 outline-none transition-all duration-200 bg-white/80 text-sm w-full"
                        placeholder="Masukkan email"
                    >
                </div>
                <!-- Password Field -->
                <div>
                    <label for="password" class="block text-xs font-semibold text-[#2d1a0b] mb-1">
                        Password
                    </label>
                    <input 
                        type="password" 
                        name="password" 
                        id="password" 
                        required
                        class="px-3 py-2 border border-gray-300 rounded-lg focus:border-[#8B0000] focus:ring-1 focus:ring-[#8B0000]/20 outline-none transition-all duration-200 bg-white/80 text-sm w-full"
                        placeholder="Masukkan password"
                    >
                </div>
                <!-- Confirm Password Field -->
                <div>
                    <label for="password_confirmation" class="block text-xs font-semibold text-[#2d1a0b] mb-1">
                        Konfirmasi Password
                    </label>
                    <input 
                        type="password" 
                        name="password_confirmation" 
                        id="password_confirmation" 
                        required
                        class="px-3 py-2 border border-gray-300 rounded-lg focus:border-[#8B0000] focus:ring-1 focus:ring-[#8B0000]/20 outline-none transition-all duration-200 bg-white/80 text-sm w-full"
                        placeholder="Konfirmasi password"
                    >
                </div>
                <!-- Submit Button -->
                <button 
                    type="submit" 
                    class="w-full bg-[#FFD600] text-black font-bold py-2 px-4 rounded-lg border border-[#B8860B] shadow-lg hover:bg-[#FFB300] hover:text-white transition-all duration-200 text-sm mt-4"
                    style="box-shadow:0 4px 16px 0 #FFD60033;"
                >
                    Daftar
                </button>
            </form>

            <!-- Login Link -->
            <div class="text-center mt-4 pt-3 border-t border-gray-200">
                <p class="text-xs text-[#2d1a0b]">
                    Sudah punya akun? 
                    <a href="{{ route('login') }}" class="text-[#8B0000] hover:text-[#B8860B] font-semibold transition-colors">
                        Login
                    </a>
                </p>
            </div>
        </div>
    </div>
</div>

<style>
@keyframes fadeInUp {
    from {
        opacity: 0;
        transform: translateY(15px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}
.bg-white\/95 {
    animation: fadeInUp 0.4s ease-out;
}
</style>
@endsection 