<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    // Frontend
    public function landing(Request $request)
    {
        $query = $request->input('q');
        if ($query) {
            $products = Product::where('nama', 'like', "%{$query}%")
                ->orWhere('deskripsi', 'like', "%{$query}%")
                ->get();
        } else {
            $products = Product::latest()->take(8)->get();
        }
        // Ambil semua gambar support
        $supportDir = public_path('support');
        $supportImages = [];
        if (is_dir($supportDir)) {
            foreach (scandir($supportDir) as $file) {
                if (in_array(strtolower(pathinfo($file, PATHINFO_EXTENSION)), ['jpg','jpeg','png','gif','webp','svg'])) {
                    $supportImages[] = 'support/' . $file;
                }
            }
        }
        return view('pages.beranda', compact('products', 'supportImages'));
    }

    public function index(Request $request)
    {
        $query = $request->input('q');
        if ($query) {
            $products = Product::where('nama', 'like', "%{$query}%")
                ->orWhere('deskripsi', 'like', "%{$query}%")
                ->get();
        } else {
            $products = Product::all();
        }
        return view('pages.katalog', compact('products'));
    }

    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('pages.detail', compact('product'));
    }

    // Admin
    public function adminIndex()
    {
        $products = Product::all();

        // Statistik dummy (sementara bisa disesuaikan nanti)
        $totalProduk = $products->count();
        $totalVisitor = 1243; // Dummy visitor
        $jumlahPesan = 58;    // Dummy pesan masuk

        return view('admin.dashboard', compact('products', 'totalProduk', 'totalVisitor', 'jumlahPesan'));
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'deskripsi' => 'required|string',
            'harga' => 'required|numeric',
            'stok' => 'required|numeric',
            'gambar' => 'required|image',
        ]);

        $gambar = $request->file('gambar')->store('public/images');

        Product::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
            'stok' => $request->stok,
            'gambar' => str_replace('public/', 'storage/', $gambar),
        ]);

        return redirect()->route('admin.dashboard');
    }

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('admin.edit', compact('product'));
    }

    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);

        $product->nama = $request->nama;
        $product->deskripsi = $request->deskripsi;
        $product->harga = $request->harga;
        $product->stok = $request->stok;

        if ($request->hasFile('gambar')) {
            $gambar = $request->file('gambar')->store('public/images');
            $product->gambar = str_replace('public/', 'storage/', $gambar);
        }

        $product->save();

        return redirect()->route('admin.dashboard');
    }

    public function destroy($id)
    {
        Product::findOrFail($id)->delete();
        return redirect()->route('admin.dashboard');
    }
}
