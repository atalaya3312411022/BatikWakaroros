@extends('layouts.app')

@section('title', $product->nama)

@section('content')

<section class="max-w-5xl mx-auto py-16 px-4">
  <div class="product-detail-card grid grid-cols-1 md:grid-cols-2 gap-10 items-start">
    <div>
      <img src="{{ asset($product->gambar) }}" alt="{{ $product->nama }}" class="rounded-xl shadow w-full h-auto object-cover">
      <div class="mt-8">
        <div class="mb-2">
          <span class="block text-xl md:text-2xl font-bold text-[#8B0000] tracking-wide">DESKRIPSI</span>
          <span class="block w-16 h-1 bg-gradient-to-r from-[#FFD700] to-[#8B0000] rounded-full mt-1 mb-3"></span>
        </div>
        <p class="text-gray-700 leading-relaxed mt-0 mb-0 text-base md:text-lg">{{ $product->deskripsi }}</p>
      </div>
    </div>

    <div>
      <h1 class="text-3xl font-serif text-[#8B0000] mb-2">{{ $product->nama }}</h1>
      <div class="product-badge">Rp{{ number_format($product->harga, 0, ',', '.') }}</div>
      <div class="mb-4">
        @if($product->stok > 0)
          <span class="inline-block bg-green-100 text-green-800 text-xs font-semibold px-3 py-1 rounded-full">Stok: {{ $product->stok }}</span>
        @else
          <span class="inline-block bg-red-100 text-red-800 text-xs font-semibold px-3 py-1 rounded-full">Stok Habis</span>
        @endif
      </div>
      <div class="order-outline">
        <div class="text-lg font-bold mb-2 text-[#8B0000] flex items-center gap-2"><i class="fa-solid fa-clipboard-list order-title-icon"></i> Silakan Isi Detail Pemesanan</div>
        <hr class="mb-4 border-[#FFD700]/60">
        <form id="wa-order-form" class="mb-6">
          <div class="mb-2">
            <label class="order-label">Kota Pengiriman</label><br>
            <span class="text-[#B8860B] font-bold">Batam</span>
          </div>
          <div class="mb-2">
            <label class="order-label">Lokasi Kirim</label>
            <select id="lokasiKirim" class="order-select">
              <option value="">Pilih Lokasi Kirim</option>
              <option value="Rumah">Rumah</option>
              <option value="Kantor">Kantor</option>
              <option value="Toko">Toko</option>
              <option value="Lainnya">Lainnya</option>
            </select>
          </div>
          <div class="mb-2">
            <label class="order-label">Alamat Kirim <span class='text-red-500'>*</span></label>
            <textarea id="alamatKirim" rows="2" class="order-textarea" placeholder="Tulis alamat lengkap pengiriman" required></textarea>
          </div>
          <div class="mb-2">
            <label class="order-label">Jam & Tanggal Kirim</label>
            <input type="datetime-local" id="tanggalKirim" class="order-date" placeholder="dd/mm/yyyy" />
          </div>
          <div class="mb-2">
            <label class="order-label">Ucapan <span class="text-xs text-gray-400">(opsional)</span></label>
            <textarea id="ucapan" maxlength="500" rows="2" class="order-textarea" placeholder="Ucapan (opsional)"></textarea>
            <div class="text-right text-xs text-gray-400">Max : 500</div>
          </div>
        </form>
        <a href="#" id="wa-order-btn" class="btn-wa-detail w-full justify-center">
          <i class="fa-brands fa-whatsapp"></i> WHATSAPP
        </a>
      </div>
      <div class="flex gap-8 justify-center mt-4 text-sm text-gray-600">
        <span><i class="fa-solid fa-shield-halved mr-1"></i> Pembayaran Aman</span>
        <span><i class="fa-solid fa-certificate mr-1"></i> Garansi Pasti Sampai</span>
      </div>
    </div>
  </div>
</section>

<style>
.tab-header { font-weight: 600; }
.tab-btn { background: none; border: none; outline: none; padding: 0 0 10px 0; font-size: 1.08rem; color: #888; cursor: pointer; transition: color 0.2s; position: relative; }
.tab-btn-active { color: #222; }
.tab-btn-active::after { content: ''; display: block; height: 3px; width: 100%; background: #8B0000; border-radius: 2px; position: absolute; left: 0; bottom: -2px; }
.tab-content { padding: 0.5rem 0 0 0; }
.tab-content ul { margin-left: 1.2rem; margin-bottom: 0.5rem; }
.info-table { width: 100%; border-collapse: collapse; margin-top: 0.5rem; }
.info-table td { padding: 8px 14px; border-bottom: 1px solid #f3e6c0; color: #444; font-size: 1rem; }
.info-table td:first-child { font-weight: 600; color: #8B0000; width: 120px; }
</style>
<script>
function showTab(tab) {
  document.getElementById('tab-desc').classList.toggle('hidden', tab !== 'desc');
  document.getElementById('tab-info').classList.toggle('hidden', tab !== 'info');
  var btns = document.querySelectorAll('.tab-btn');
  btns.forEach(function(btn, idx) {
    btn.classList.toggle('tab-btn-active', (tab === 'desc' && idx === 0) || (tab === 'info' && idx === 1));
  });
}

document.getElementById('wa-order-btn').addEventListener('click', function(e) {
  e.preventDefault();
  const lokasi = document.getElementById('lokasiKirim').value;
  const alamat = document.getElementById('alamatKirim').value.trim();
  const tanggal = document.getElementById('tanggalKirim').value;
  const ucapan = document.getElementById('ucapan').value;
  if (!alamat) {
    alert('Alamat Kirim wajib diisi!');
    document.getElementById('alamatKirim').focus();
    return;
  }
  let pesan = `Halo, saya ingin memesan *{{ $product->nama }}*\n`;
  pesan += `Kota Pengiriman: Batam\n`;
  pesan += `Lokasi Kirim: ${lokasi ? lokasi : '-'}\n`;
  pesan += `Alamat Kirim: ${alamat}\n`;
  pesan += `Jam & Tanggal Kirim: ${tanggal ? tanggal : '-'}\n`;
  pesan += `Ucapan: ${ucapan ? ucapan : '-'}\n`;
  const url = `https://wa.me/62811541333?text=${encodeURIComponent(pesan)}`;
  window.open(url, '_blank');
});
</script>

@endsection
