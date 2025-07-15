<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>@yield('title') - Admin | Batik Wakaroros</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <script src="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/js/all.min.js" defer></script>
</head>
<body class="bg-gray-100 font-sans leading-normal tracking-normal min-h-screen flex flex-col">

  <!-- Sidebar dan Main Content -->
  <div class="flex flex-col md:flex-row flex-1">
    <div class="bg-maroon text-white w-full md:w-64 min-h-screen px-6 py-8">
      <div class="text-2xl font-bold mb-6">Admin Panel</div>
      <nav class="flex flex-col gap-4">
        <a href="{{ route('admin.dashboard') }}" class="hover:text-gold">Dashboard</a>
        <a href="{{ route('admin.produk.create') }}" class="hover:text-gold">Tambah Produk</a>
        <a href="{{ route('beranda') }}" class="hover:text-gold">Lihat Website</a>
        <form action="{{ route('admin.logout') }}" method="POST" class="mt-4">
          @csrf
          <button type="submit" class="hover:text-gold">Logout</button>
        </form>
      </nav>
    </div>

    <!-- Main Content -->
    <main class="flex-1 p-6">
      @yield('content')
    </main>
  </div>

  <footer class="bg-gray-200 text-center text-gray-600 py-4 w-full mt-auto">
    © 2025 Batik Wakaroros. All rights reserved.
  </footer>

</body>
</html>
