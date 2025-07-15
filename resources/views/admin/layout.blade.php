<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>@yield('title') | Admin - Batik Wakaroros</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/forms"></script>
  <style>
    :root {
      --maroon: #8B0000;
      --gold: #B8860B;
    }
    .text-maroon { color: var(--maroon); }
    .bg-maroon { background-color: var(--maroon); }
    .bg-gold { background-color: var(--gold); }
    .text-gold { color: var(--gold); }
  </style>
</head>
<body class="bg-gray-50 min-h-screen text-gray-800">

  <div class="flex">
    <!-- Sidebar -->
    <aside class="w-64 bg-maroon text-white min-h-screen p-6 space-y-6">
      <h1 class="text-2xl font-bold tracking-wider">Admin Panel</h1>
      <nav class="space-y-2">
        <a href="{{ route('admin.dashboard') }}" class="block py-2 px-3 rounded hover:bg-gold transition">Dashboard</a>
        <a href="{{ route('admin.produk.create') }}" class="block py-2 px-3 rounded hover:bg-gold transition">Tambah Produk</a>
        <a href="{{ route('beranda') }}" class="block py-2 px-3 rounded hover:bg-gold transition">Lihat Situs</a>
      </nav>
    </aside>

    <!-- Main Content -->
    <main class="flex-1 p-6">
      @yield('content')
    </main>
  </div>

</body>
</html>
