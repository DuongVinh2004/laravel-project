<?php

use Illuminate\Support\Facades\Route;

/*Home*/
Route::get('/', function () {
    return view('home');
})->name('home');

/*Product*/
Route::prefix('product')->group(function () {

    // /product
    Route::get('/', function () {
        $products = [
            ['id' => 1, 'name' => 'Vàng', 'price' => 999],
            ['id' => 2, 'name' => 'Bạc', 'price' => 666],
            ['id' => 3, 'name' => 'Đất', 'price' => 68686899],
        ];
        return view('product.index', compact('products'));
    })->name('product.index');

    // /product/add
    Route::get('/add', function () {
        return view('product.add');
    })->name('product.add');

    // /product/{id}
    Route::get('/{id?}', function ($id = '123') {
        return "Product ID: " . $id;
    })->where('id', '[A-Za-z0-9]+');
});

/*Sinh viên*/
Route::get('/sinhvien/{name?}/{mssv?}', function (
    $name = 'Luong Xuan Hieu',
    $mssv = '123456'
) {
    return "
        <h2>Thông tin sinh viên</h2>
        <p>Tên: $name</p>
        <p>MSSV: $mssv</p>
    ";
});

/*Bàn cờ vua*/
Route::get('/banco/{n}', function ($n) {
    return view('banco', compact('n'));
});

/*404*/
Route::fallback(function () {
    return response()->view('error.404', [], 404);
});
