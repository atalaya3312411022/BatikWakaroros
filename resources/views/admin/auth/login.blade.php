<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - Batik Wakaroros</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Playfair+Display:wght@600&display=swap" rel="stylesheet">

    <style>
        body {
            font-family: 'Playfair Display', serif;
        }
        .brand-font {
            font-family: 'Great Vibes', cursive;
        }
    </style>
</head>
<body class="bg-gradient-to-br from-yellow-100 via-[#FFF8E1] to-yellow-200 min-h-screen flex items-center justify-center">

    <div class="bg-white border border-yellow-300 shadow-2xl rounded-xl w-full max-w-md p-8">
        
        <!-- Logo / Judul -->
        <div class="text-center mb-6">
            {{-- Logo bisa diganti <img src="{{ asset('images/logo.png') }}" alt="Logo" class="mx-auto w-16"> --}}
            <h1 class="text-4xl brand-font text-yellow-700">Batik Wakaroros</h1>
            <p class="text-sm text-yellow-900 font-semibold">Login Admin</p>
        </div>

        <!-- Error -->
        @if ($errors->any())
            <div class="bg-red-100 text-red-700 p-3 mb-4 rounded text-sm">
                <ul class="list-disc pl-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <!-- Form -->
        <form action="{{ route('admin.login') }}" method="POST" class="space-y-5">
            @csrf

            <div>
                <label for="email" class="block text-sm font-medium text-yellow-900">Email</label>
                <input type="email" name="email" id="email" required
                    class="mt-1 w-full px-4 py-2 border border-yellow-300 rounded-md focus:ring-2 focus:ring-yellow-500 focus:outline-none"
                    placeholder="admin@example.com">
            </div>

            <div>
                <label for="password" class="block text-sm font-medium text-yellow-900">Password</label>
                <input type="password" name="password" id="password" required
                    class="mt-1 w-full px-4 py-2 border border-yellow-300 rounded-md focus:ring-2 focus:ring-yellow-500 focus:outline-none"
                    placeholder="********">
            </div>

            <div>
                <button type="submit"
                    class="w-full bg-yellow-600 hover:bg-yellow-700 text-white font-bold py-2 px-4 rounded-md transition duration-200">
                    Login
                </button>
            </div>
        </form>
    </div>

</body>
</html>
