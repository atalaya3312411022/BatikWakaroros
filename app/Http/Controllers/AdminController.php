<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index()
    {
        $admin = Auth::guard('admin')->user();
        $name = $admin ? $admin->name : '';
        $products = Product::all();
        $totalProduk = $products->count();
        $totalVisitor = 0; // Dummy, ganti jika ada model Visitor
        $jumlahPesan = 0; // Dummy, ganti jika ada model Message
        return view('admin.dashboard', compact('products', 'totalProduk', 'totalVisitor', 'jumlahPesan', 'name'));
    }
} 