<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// end point yang akan didistribusikan ke front end

// PRODUCT
Route::get('/product-rekomendasi', [App\Http\Controllers\Api\ApiProductController::class, 'getRekomendasi']);
Route::get('/product-buah', [App\Http\Controllers\Api\ApiProductController::class, 'getBuahProduct']);
Route::get('/product-sayur', [App\Http\Controllers\Api\ApiProductController::class, 'getSayurProduct']);
// product-list
Route::get('/product-list', [App\Http\Controllers\Api\ApiProductController::class, 'getAllProduct']);
// product-new
Route::get('/product-new', [App\Http\Controllers\Api\ApiProductController::class, 'getNewProduct']);

Route::get('/product-search',[App\Http\Controllers\Api\ApiProductController::class, 'searchProduct' ]);
Route::get('/product-detail/{id}', [App\Http\Controllers\Api\ApiProductController::class,'detailProduct']);

// MERK
// merk-list = menampilkan data merk
Route::get('/merk-list', [App\Http\Controllers\Api\ApiProductController::class, 'getMerk']);

Route::get('/product-by-merk', [App\Http\Controllers\Api\ApiProductController::class, 'getProductByMerkId']);

// KERANJANG
Route::post('/keranjang-post', [App\Http\Controllers\Api\ApiKeranjangController::class, 'postKeranjang']);
Route::get('/keranjang-list', [App\Http\Controllers\Api\ApiKeranjangController::class, 'getAllKeranjang']);
Route::post('/keranjang-delete', [App\Http\Controllers\Api\ApiKeranjangController::class, 'deleteKeranjang']);

// CHECKOUT
Route::post('/checkout-post', [App\Http\Controllers\Api\ApiCheckoutController::class, 'postCheckout']);
Route::post('/checkout-post-by-id', [App\Http\Controllers\Api\ApiCheckoutController::class, 'postCheckoutById']);
Route::post('/upload-bukti-bayar', [App\Http\Controllers\Api\ApiCheckoutController::class, 'uploadBuktiBayar']);
// challange
Route::get('/checkout-list-all', [App\Http\Controllers\Api\ApiCheckoutController::class, 'getCheckoutAll']);

Route::get('/checkout-list-baru', [App\Http\Controllers\Api\ApiCheckoutController::class, 'getCheckoutBaru']);

// challange
Route::get('/checkout-list-proses', [App\Http\Controllers\Api\ApiCheckoutController::class, 'getCheckoutProses']);
Route::get('/checkout-list-selesai', [App\Http\Controllers\Api\ApiCheckoutController::class, 'getCheckoutSelesai']);
Route::get('/checkout-detail', [App\Http\Controllers\Api\ApiCheckoutController::class, 'getCheckoutDetail']);

// AUTHENTICATION
Route::post('/register', [App\Http\Controllers\Api\ApiUserController::class, 'register']);
Route::post('/login', [App\Http\Controllers\Api\ApiUserController::class, 'login']);
Route::get('/logout', [App\Http\Controllers\Api\ApiUserController::class, 'logout']);
