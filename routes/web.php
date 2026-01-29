<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AuthController;

Route::get('/', fn () => view('home'))->name('home');

Route::prefix('product')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('product.index');

    Route::get('/add', fn () => view('product.add'))->name('product.add');

    Route::get('/{id?}', function ($id = '123') {
        return 'Product ID: ' . $id;
    })->where('id', '[A-Za-z0-9]+');
});

Route::get('/sinhvien/{name?}/{mssv?}', function ($name = 'Luong Xuan Hieu', $mssv = '123456') {
    return "
        <h2>Thông tin sinh viên</h2>
        <p>Tên: $name</p>
        <p>MSSV: $mssv</p>
    ";
});

Route::get('/banco/{n}', fn ($n) => view('banco', compact('n')));

Route::get('/signin', [AuthController::class, 'signIn'])->name('signin.form');
Route::post('/signin', [AuthController::class, 'checkSignIn'])->name('signin.check');

Route::fallback(function () {
    return response()->view('error.404', [], 404);
});
