<?php

use App\Http\Controllers\BuyerController;
use App\Http\Controllers\HomeContoller;
use App\Http\Controllers\SellerController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// })->name('home');

Route::get('/freelanweb/info', function () {
    return view('pages.info');
})->name('info');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::get('/',[HomeContoller::class,'home'])->name('home');
Route::get('/redirects',[HomeContoller::class,'index'])->name('header');
Route::get('/buyer/gig-request/{id}',[HomeContoller::class,'buyer_gig'])->name('buyer_req_gig');
Route::get('/buyer/gig-checkout/{id}',[HomeContoller::class,'buyer_gig_checkout'])->name('buyer_gig_checkout');


Route::get('/profile',[HomeContoller::class,'profile'])->name('profile');
Route::resource('seller',SellerController::class);
Route::resource('buyer',BuyerController::class);
