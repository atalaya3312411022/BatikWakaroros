@extends('layouts.app')

@section('title', 'Beranda')

@section('content')

<!-- Hero Section -->
<section class="relative bg-cover bg-center min-h-[85vh] flex items-center justify-center text-white overflow-hidden" style="background-image: url('{{ asset('images/page1_img5.jpeg') }}')">
  <!-- Animated Background Overlay -->
  <div class="absolute inset-0 bg-gradient-to-br from-[#8B0000]/80 via-[#a31621]/70 to-[#B8860B]/60"></div>
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_30%_20%,rgba(184,134,11,0.3)_0%,transparent_50%)]"></div>
  <div class="absolute inset-0 bg-[radial-gradient(circle_at_70%_80%,rgba(139,0,0,0.4)_0%,transparent_50%)]"></div>
  
  <!-- Decorative Elements -->
  <div class="absolute top-10 left-10 w-20 h-20 border border-[#B8860B]/30 rounded-full animate-pulse"></div>
  <div class="absolute bottom-20 right-20 w-16 h-16 border border-[#fffbe6]/20 rounded-full animate-bounce"></div>
  <div class="absolute top-1/3 right-10 w-12 h-12 bg-[#B8860B]/20 rounded-full blur-sm animate-float"></div>
  
  <!-- Main Content -->
  <div class="relative z-10 text-center max-w-4xl px-6">
    <!-- Brand Badge -->
    <div class="inline-flex items-center px-4 py-2 bg-white/10 backdrop-blur-sm border border-white/20 rounded-full mb-6 animate-fade-in-up">
      <i class="fa-solid fa-crown text-[#B8860B] mr-2"></i>
      <span class="text-sm font-medium text-[#fffbe6]">Authentic Indonesian Heritage</span>
    </div>
    
    <!-- Main Title -->
    <h1 class="text-5xl md:text-7xl font-serif font-bold mb-6 text-[#fffbe6] drop-shadow-2xl animate-fade-in-up animation-delay-200">
      <span class="bg-gradient-to-r from-[#fffbe6] via-[#B8860B] to-[#fffbe6] bg-clip-text text-transparent">
        Batik Wakaroros
      </span>
    </h1>
    
    <!-- Subtitle -->
    <p class="text-xl md:text-2xl text-[#fffbe6]/90 drop-shadow-lg mb-8 leading-relaxed animate-fade-in-up animation-delay-400">
      Perpaduan <span class="font-semibold text-[#B8860B]">Tradisi</span> & <span class="font-semibold text-[#B8860B]">Modernitas</span>
    </p>
    
    <p class="text-lg md:text-xl text-[#fffbe6]/80 drop-shadow mb-10 max-w-2xl mx-auto leading-relaxed animate-fade-in-up animation-delay-600">
      Temukan koleksi batik eksklusif yang menceritakan keindahan budaya Nusantara dalam setiap motif yang penuh makna
    </p>
    
    <!-- CTA Buttons -->
    <div class="flex flex-col sm:flex-row gap-4 justify-center items-center animate-fade-in-up animation-delay-800">
      <a href="{{ route('katalog') }}" class="group relative inline-flex items-center px-8 py-4 bg-gradient-to-r from-[#B8860B] to-[#8B0000] text-white rounded-full text-lg font-bold overflow-hidden transition-all duration-300 hover:scale-105 hover:shadow-2xl">
        <span class="relative z-10 flex items-center">
          <i class="fa-solid fa-eye mr-2"></i>
          Jelajahi Koleksi
        </span>
        <div class="absolute inset-0 bg-gradient-to-r from-[#8B0000] to-[#B8860B] transform scale-x-0 group-hover:scale-x-100 transition-transform duration-300 origin-left"></div>
      </a>
      
      <a href="#keunggulan" class="inline-flex items-center px-6 py-4 bg-white/10 backdrop-blur-sm border-2 border-white/30 text-white rounded-full text-lg font-semibold hover:bg-white/20 transition-all duration-300 hover:scale-105">
        <i class="fa-solid fa-arrow-down mr-2"></i>
        Pelajari Lebih Lanjut
      </a>
    </div>
  </div>
  
  <!-- Scroll Indicator -->
  <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
    <div class="w-6 h-10 border-2 border-white/50 rounded-full flex justify-center">
      <div class="w-1 h-3 bg-white/70 rounded-full mt-2 animate-pulse"></div>
    </div>
  </div>
</section>

<!-- Keunggulan Section -->
<section class="relative max-w-7xl mx-auto py-20 px-4" id="keunggulan">
  <!-- Background Pattern -->
  <div class="absolute inset-0 opacity-5">
    <div class="w-full h-full" style="background-image: repeating-linear-gradient(45deg, #8B0000 0px, #8B0000 1px, transparent 1px, transparent 20px);"></div>
  </div>
  
  <div class="relative z-10">
    <!-- Section Header -->
    <div class="text-center mb-16">
      <div class="inline-flex items-center px-4 py-2 bg-[#8B0000]/10 rounded-full mb-4">
        <i class="fa-solid fa-star text-[#B8860B] mr-2"></i>
        <span class="text-sm font-medium text-[#8B0000]">Mengapa Memilih Kami</span>
      </div>
      <h2 class="text-4xl md:text-5xl font-serif text-[#8B0000] mb-4">Keunggulan Batik Wakaroros</h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">Komitmen kami terhadap kualitas dan tradisi menjadikan setiap produk istimewa</p>
    </div>
    
    <!-- Features Grid -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
      <div class="group relative p-8 bg-gradient-to-br from-[#fffbe6] to-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border border-[#B8860B]/10">
        <div class="absolute top-0 right-0 w-20 h-20 bg-gradient-to-br from-[#B8860B]/10 to-transparent rounded-bl-2xl"></div>
        <div class="relative">
          <div class="w-16 h-16 bg-gradient-to-br from-[#B8860B] to-[#8B0000] rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
            <i class="fa-solid fa-leaf text-2xl text-white"></i>
          </div>
          <h3 class="text-xl font-bold text-[#8B0000] mb-3">Motif Eksklusif</h3>
          <p class="text-gray-600 leading-relaxed">Terinspirasi dari kekayaan budaya lokal, setiap motif dirancang unik dan bermakna dengan sentuhan modern.</p>
        </div>
      </div>
      
      <div class="group relative p-8 bg-gradient-to-br from-[#fffbe6] to-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border border-[#B8860B]/10">
        <div class="absolute top-0 right-0 w-20 h-20 bg-gradient-to-br from-[#B8860B]/10 to-transparent rounded-bl-2xl"></div>
        <div class="relative">
          <div class="w-16 h-16 bg-gradient-to-br from-[#B8860B] to-[#8B0000] rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
            <i class="fa-solid fa-paint-brush text-2xl text-white"></i>
          </div>
          <h3 class="text-xl font-bold text-[#8B0000] mb-3">Pewarna Alami</h3>
          <p class="text-gray-600 leading-relaxed">Menggunakan bahan pewarna alami yang ramah lingkungan dan aman untuk kulit, menjaga kelestarian alam.</p>
        </div>
      </div>
      
      <div class="group relative p-8 bg-gradient-to-br from-[#fffbe6] to-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border border-[#B8860B]/10">
        <div class="absolute top-0 right-0 w-20 h-20 bg-gradient-to-br from-[#B8860B]/10 to-transparent rounded-bl-2xl"></div>
        <div class="relative">
          <div class="w-16 h-16 bg-gradient-to-br from-[#B8860B] to-[#8B0000] rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
            <i class="fa-solid fa-award text-2xl text-white"></i>
          </div>
          <h3 class="text-xl font-bold text-[#8B0000] mb-3">Kualitas Premium</h3>
          <p class="text-gray-600 leading-relaxed">Bahan berkualitas tinggi, jahitan rapi, dan finishing detail untuk hasil terbaik yang tahan lama.</p>
        </div>
      </div>
      
      <div class="group relative p-8 bg-gradient-to-br from-[#fffbe6] to-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border border-[#B8860B]/10">
        <div class="absolute top-0 right-0 w-20 h-20 bg-gradient-to-br from-[#B8860B]/10 to-transparent rounded-bl-2xl"></div>
        <div class="relative">
          <div class="w-16 h-16 bg-gradient-to-br from-[#B8860B] to-[#8B0000] rounded-2xl flex items-center justify-center mb-6 group-hover:scale-110 transition-transform duration-300">
            <i class="fa-solid fa-truck-fast text-2xl text-white"></i>
          </div>
          <h3 class="text-xl font-bold text-[#8B0000] mb-3">Pengiriman Cepat</h3>
          <p class="text-gray-600 leading-relaxed">Pesanan Anda akan diproses dan dikirim secepat mungkin ke seluruh Indonesia dengan packaging aman.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Katalog Preview -->
@if ($products->count())
<section class="bg-gradient-to-b from-white to-[#fffaf3] py-20 px-4" id="katalog">
  <div class="max-w-7xl mx-auto">
    <!-- Section Header -->
    <div class="text-center mb-16">
      <div class="inline-flex items-center px-4 py-2 bg-[#8B0000]/10 rounded-full mb-4">
        <i class="fa-solid fa-gems text-[#B8860B] mr-2"></i>
        <span class="text-sm font-medium text-[#8B0000]">Koleksi Terpilih</span>
      </div>
      <h2 class="text-4xl md:text-5xl font-serif text-[#8B0000] mb-4">Katalog Batik Wakaroros</h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">Temukan keindahan batik tradisional dengan sentuhan modern yang elegan</p>
    </div>
    
    <!-- Products Grid -->
    <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 mb-12">
      @foreach ($products as $product)
      <a href="{{ route('produk.detail', $product->id) }}" class="group relative bg-white rounded-2xl shadow-lg hover:shadow-2xl overflow-hidden transition-all duration-300 hover:-translate-y-2">
        <!-- Product Image -->
        <div class="relative overflow-hidden">
          <img src="{{ asset($product->gambar) }}" alt="{{ $product->nama }}" class="w-full h-56 object-cover group-hover:scale-110 transition-transform duration-500">
          <div class="absolute inset-0 bg-gradient-to-t from-black/20 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
          
          <!-- Price Badge -->
          <div class="absolute top-4 right-4 bg-[#8B0000] text-white px-3 py-1 rounded-full text-sm font-bold">
            Rp{{ number_format($product->harga, 0, ',', '.') }}
          </div>
        </div>
        
        <!-- Product Info -->
        <div class="p-6">
          <h3 class="font-bold text-[#8B0000] text-lg mb-2 group-hover:text-[#B8860B] transition-colors">{{ $product->nama }}</h3>
          <div class="flex items-center justify-between">
            <span class="text-[#B8860B] font-bold text-lg">Rp{{ number_format($product->harga, 0, ',', '.') }}</span>
            <div class="flex items-center text-sm text-gray-500">
              <i class="fa-solid fa-eye mr-1"></i>
              <span>Lihat Detail</span>
            </div>
          </div>
        </div>
        
        <!-- Hover Effect -->
        <div class="absolute inset-0 border-2 border-[#B8860B] rounded-2xl opacity-0 group-hover:opacity-100 transition-opacity duration-300"></div>
      </a>
      @endforeach
    </div>
    
    <!-- View All Button -->
    <div class="text-center">
      <a href="{{ route('katalog') }}" class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-[#8B0000] to-[#B8860B] text-white rounded-full text-lg font-bold hover:scale-105 transition-transform duration-300 shadow-lg hover:shadow-xl">
        <i class="fa-solid fa-grid mr-2"></i>
        Lihat Semua Koleksi
        <i class="fa-solid fa-arrow-right ml-2"></i>
      </a>
    </div>
  </div>
</section>
@endif

<!-- Testimoni -->
<section class="relative py-20 px-4 overflow-hidden" id="testimoni">
  <!-- Background -->
  <div class="absolute inset-0 bg-gradient-to-br from-[#fffaf3] via-[#fff8e7] to-[#fffbe6]"></div>
  <div class="absolute inset-0 opacity-10" style="background-image: radial-gradient(circle at 25% 25%, #B8860B 2px, transparent 2px), radial-gradient(circle at 75% 75%, #8B0000 1px, transparent 1px); background-size: 50px 50px;"></div>
  
  <div class="relative z-10 max-w-7xl mx-auto">
    <!-- Section Header -->
    <div class="text-center mb-16">
      <div class="inline-flex items-center px-4 py-2 bg-white/70 backdrop-blur-sm rounded-full mb-4">
        <i class="fa-solid fa-heart text-[#B8860B] mr-2"></i>
        <span class="text-sm font-medium text-[#8B0000]">Kepuasan Pelanggan</span>
      </div>
      <h2 class="text-4xl md:text-5xl font-serif text-[#8B0000] mb-4">Apa Kata Pelanggan Kami?</h2>
      <p class="text-lg text-gray-600 max-w-2xl mx-auto">Kepercayaan dan kepuasan pelanggan adalah motivasi terbesar kami</p>
    </div>
    
    <!-- Testimonials Grid -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <div class="group relative bg-white/80 backdrop-blur-sm p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border border-white/50">
        <!-- Quote Icon -->
        <div class="absolute -top-4 left-8 w-12 h-12 bg-gradient-to-br from-[#B8860B] to-[#8B0000] rounded-full flex items-center justify-center">
          <i class="fa-solid fa-quote-left text-xl text-white"></i>
        </div>
        
        <!-- Stars -->
        <div class="flex items-center mb-4 mt-4">
          @for($i = 0; $i < 5; $i++)
          <i class="fa-solid fa-star text-[#B8860B] text-sm"></i>
          @endfor
        </div>
        
        <!-- Testimonial -->
        <p class="text-gray-700 italic leading-relaxed mb-6">
          "Batiknya sangat halus dan motifnya unik. Saya suka sekali! Pengiriman juga cepat dan packaging sangat rapi."
        </p>
        
        <!-- Customer Info -->
        <div class="flex items-center">
          <div class="w-12 h-12 bg-gradient-to-br from-[#B8860B] to-[#8B0000] rounded-full flex items-center justify-center text-white font-bold mr-4">
            S
          </div>
          <div>
            <div class="font-bold text-[#8B0000]">Sari</div>
            <div class="text-sm text-gray-500">Jakarta</div>
          </div>
        </div>
      </div>
      
      <div class="group relative bg-white/80 backdrop-blur-sm p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border border-white/50">
        <!-- Quote Icon -->
        <div class="absolute -top-4 left-8 w-12 h-12 bg-gradient-to-br from-[#B8860B] to-[#8B0000] rounded-full flex items-center justify-center">
          <i class="fa-solid fa-quote-left text-xl text-white"></i>
        </div>
        
        <!-- Stars -->
        <div class="flex items-center mb-4 mt-4">
          @for($i = 0; $i < 5; $i++)
          <i class="fa-solid fa-star text-[#B8860B] text-sm"></i>
          @endfor
        </div>
        
        <!-- Testimonial -->
        <p class="text-gray-700 italic leading-relaxed mb-6">
          "Kualitas premium, cocok untuk acara formal maupun santai. Terima kasih Batik Wakaroros! Pelayanan excellent."
        </p>
        
        <!-- Customer Info -->
        <div class="flex items-center">
          <div class="w-12 h-12 bg-gradient-to-br from-[#B8860B] to-[#8B0000] rounded-full flex items-center justify-center text-white font-bold mr-4">
            B
          </div>
          <div>
            <div class="font-bold text-[#8B0000]">Budi</div>
            <div class="text-sm text-gray-500">Surabaya</div>
          </div>
        </div>
      </div>
      
      <div class="group relative bg-white/80 backdrop-blur-sm p-8 rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-2 border border-white/50">
        <!-- Quote Icon -->
        <div class="absolute -top-4 left-8 w-12 h-12 bg-gradient-to-br from-[#B8860B] to-[#8B0000] rounded-full flex items-center justify-center">
          <i class="fa-solid fa-quote-left text-xl text-white"></i>
        </div>
        
        <!-- Stars -->
        <div class="flex items-center mb-4 mt-4">
          @for($i = 0; $i < 5; $i++)
          <i class="fa-solid fa-star text-[#B8860B] text-sm"></i>
          @endfor
        </div>
        
        <!-- Testimonial -->
        <p class="text-gray-700 italic leading-relaxed mb-6">
          "Motifnya benar-benar khas dan beda dari yang lain. Recommended banget untuk yang cari batik berkualitas!"
        </p>
        
        <!-- Customer Info -->
        <div class="flex items-center">
          <div class="w-12 h-12 bg-gradient-to-br from-[#B8860B] to-[#8B0000] rounded-full flex items-center justify-center text-white font-bold mr-4">
            L
          </div>
          <div>
            <div class="font-bold text-[#8B0000]">Lina</div>
            <div class="text-sm text-gray-500">Makassar</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Custom CSS for Animations -->
<style>
@keyframes fade-in-up {
  from {
    opacity: 0;
    transform: translateY(30px);
  }
  to {
    opacity: 1;
    transform: translateY(0);
  }
}

@keyframes float {
  0%, 100% {
    transform: translateY(0px);
  }
  50% {
    transform: translateY(-10px);
  }
}

.animate-fade-in-up {
  animation: fade-in-up 0.8s ease-out forwards;
}

.animation-delay-200 {
  animation-delay: 0.2s;
}

.animation-delay-400 {
  animation-delay: 0.4s;
}

.animation-delay-600 {
  animation-delay: 0.6s;
}

.animation-delay-800 {
  animation-delay: 0.8s;
}

.animate-float {
  animation: float 3s ease-in-out infinite;
}

/* Smooth scroll */
html {
  scroll-behavior: smooth;
}

/* Backdrop blur fallback */
@supports not (backdrop-filter: blur(10px)) {
  .backdrop-blur-sm {
    background-color: rgba(255, 255, 255, 0.9);
  }
}
</style>

@endsection