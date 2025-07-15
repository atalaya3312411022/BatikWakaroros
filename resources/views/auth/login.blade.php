@extends('layouts.auth')

@section('title', 'Login - Batik Wakaroros')

@section('content')
<div class="min-h-screen flex items-center justify-center bg-gradient-to-br from-[#fffaf3] via-[#fff8e1] to-[#fff3e0] py-8 px-4">
    <div class="mx-auto" style="max-width: 340px; width: 100%;">
        <!-- Login Card -->
        <div class="bg-white/95 backdrop-blur-sm rounded-xl shadow-lg border border-white/30 p-6">
            <!-- Header -->
            <div class="text-center mb-5">
                <h1 class="text-xl font-bold text-[#2d1a0b] mb-1">Login</h1>
                <p class="text-xs text-[#8B0000]">Masuk ke akun Anda</p>
            </div>

            <!-- Success Message -->
            @if (session('success'))
                <div class="mb-3 p-2 bg-green-50 border border-green-200 rounded-lg">
                    <div class="flex items-center">
                        <span class="text-green-800 text-xs">{{ session('success') }}</span>
                    </div>
                </div>
            @endif

            <!-- Error Messages -->
            @if ($errors->any())
                <div class="mb-3 p-2 bg-red-50 border border-red-200 rounded-lg">
                    <div class="flex items-start">
                        <div>
                            <h4 class="text-red-800 font-semibold mb-1 text-xs">Login Gagal</h4>
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

            <!-- Login Form -->
            <form method="POST" action="{{ route('login') }}" class="space-y-3">
                @csrf
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
                        autofocus
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

                <!-- Remember Me & Forgot Password -->
                <div class="flex items-center justify-between text-xs mt-1">
                    <label class="flex items-center gap-2">
                        <input type="checkbox" name="remember" class="w-3 h-3 text-[#8B0000] border-gray-300 rounded focus:ring-[#8B0000]">
                        <span class="text-[#2d1a0b]">Ingat saya</span>
                    </label>
                    <a href="#" class="text-[#8B0000] hover:text-[#B8860B] font-medium transition-colors">
                        Lupa password?
                    </a>
                </div>

                <!-- Submit Button -->
                <button 
                    type="submit" 
                    class="w-full bg-[#FFD600] text-black font-bold py-2 px-4 rounded-lg border border-[#B8860B] shadow-lg hover:bg-[#FFB300] hover:text-white transition-all duration-200 text-sm mt-4"
                    style="box-shadow:0 4px 16px 0 #FFD60033;"
                >
                    Masuk
                </button>
            </form>

            <!-- Register Link -->
            <div class="text-center mt-4 pt-3 border-t border-gray-200">
                <p class="text-xs text-[#2d1a0b]">
                    Belum punya akun? 
                    <a href="{{ route('register') }}" class="text-[#8B0000] hover:text-[#B8860B] font-semibold transition-colors">
                        Daftar
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