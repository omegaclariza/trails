<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function showProductList()
    {
        // Data produk yang akan dikirim ke view
        $produk = [
            ['id' => 1, 'produk' => 'Produk A'],
            ['id' => 2, 'produk' => 'Produk B'],
            ['id' => 3, 'produk' => 'Produk C'],
        ];

        // Mengirim data ke view 'list_product'
        return view('list_product', ['data' => $produk]);
    }
}
