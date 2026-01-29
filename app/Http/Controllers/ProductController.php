<?php

namespace App\Http\Controllers;

class ProductController extends Controller
{
    public function index()
    {
        $products = [
            ['id' => 1, 'name' => 'Vàng', 'price' => 999],
            ['id' => 2, 'name' => 'Bạc', 'price' => 666],
            ['id' => 3, 'name' => 'Đất', 'price' => 68686899],
        ];

        return view('product.index', compact('products'));
    }
}
