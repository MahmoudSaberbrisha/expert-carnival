<?php

use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\DataBaseFun;
use Illuminate\Support\Facades\DB;



// Route::get('/dashboard', function () {
//     return view('layouts.masterpagecode');
// });
// Route::get('/home', function () {
//     $data = DB::table('categories')->get();
//     return view('layouts.pages.homepage', ['categories' => $data]);
// });

Route::get('/about', function () {
    return view('layouts.pages.about');
})->name('about');
Route::get('/pages', function () {
    return view('layouts.pages.pages');
})->name('pages');
Route::get('/news', function () {
    return view('layouts.pages.news');
})->name('news');
Route::get('/contact', function () {
    return view('layouts.pages.contact');
})->name('contact');
Route::get('/shop', function () {
    return view('layouts.pages.shop');
})->name('shop');



Route::get('/home', [DataBaseFun::class, 'categoriesandnews'])->name('home');
Route::get('/product{cat_id?}', [DataBaseFun::class, 'product'])->name('product');

Route::get('/api/products', [ApiController::class, 'index']);
Route::post('/api/products', [ApiController::class, 'store']);
Route::get('/api/products/{id}', [ApiController::class, 'show']);
Route::put('/api/products/{id}', [ApiController::class, 'update']);
Route::delete('/api/products/{id}', [ApiController::class, 'destroy']);

Route::get('/404', function () {
    return view('layouts.errorpage.404');
})->name('404');
Route::get('/cart', function () {
    return view('layouts.pages.cart');
})->name('cart');
