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
      margin: 0;
      padding: 0;
      min-height: 100vh;
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
</head>
<body>
  @yield('content')
</body>
</html> 