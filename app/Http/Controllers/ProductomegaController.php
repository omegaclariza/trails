<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductomegaController extends Controller
{
    public function index()
    {
        $product = [
            ['id' => 1, 'produk' => 'Laptop'],
            ['id' => 2, 'produk' => 'Smartphone'],
            ['id' => 3, 'produk' => 'Tablet'],
        ];

        return view('list_product', ['data' => $product]);
    }
}
