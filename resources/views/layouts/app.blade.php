<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>@yield('title', 'Batik Wakaroros')</title>
  <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Playfair+Display:wght@600&family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
  <style>
    body {
      font-family: 'Montserrat', sans-serif;
      background-color: #fffaf3;
      color: #2d1a0b;
    }
    .logo {
      font-family: 'Great Vibes', cursive;
      font-size: 1.75rem;
      color: #8B0000;
    }
    .logo:hover {
      color: #B8860B;
    }
  </style>
  @stack('styles')
</head>
<body class="min-h-screen flex flex-col">

  <!-- Header -->
  <header class="sticky top-0 z-50 bg-white/90 backdrop-blur border-b border-b-stone-200 shadow-sm">
    <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
      <a href="{{ route('beranda') }}" class="logo">Batik Wakaroros</a>
      <nav class="flex gap-6 text-sm font-semibold items-center">
        <a href="{{ route('beranda') }}" class="text-[#8B0000] hover:text-[#B8860B]">Beranda</a>
        <a href="{{ route('katalog') }}" class="text-[#8B0000] hover:text-[#B8860B]">Katalog</a>
        <a href="{{ route('tentang') }}" class="text-[#8B0000] hover:text-[#B8860B]">Tentang Kami</a>
        <a href="{{ route('keunggulan') }}" class="text-[#8B0000] hover:text-[#B8860B]">Keunggulan</a>
        <a href="{{ route('kontak') }}" class="text-[#8B0000] hover:text-[#B8860B]">Kontak</a>
      </nav>
    </div>
  </header>

  <!-- Main Content -->
  <main class="flex-1">
    @yield('content')
  </main>

  <!-- Footer -->
  <footer class="bg-[#8B0000] text-center text-white py-4 w-full mt-auto">
    © 2025 Batik Wakaroros. All rights reserved.
    <div class="mt-2 flex justify-center gap-4">
      <a href="#"><i class="fab fa-instagram"></i></a>
      <a href="#"><i class="fab fa-facebook"></i></a>
      <a href="#"><i class="fab fa-whatsapp"></i></a>
    </div>
  </footer>
  <script src="{{ asset('js/dropdown.js') }}"></script>
</body>
</html>
