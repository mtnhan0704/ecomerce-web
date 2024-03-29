<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Homecontroller;
use App\Http\Controllers\Admincontroller;
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

Route::get('/', [Homecontroller::class,'index']);

Route::middleware(['auth:sanctum','verified'])-> get('/dashboard',
function(){
    return view('dashboard');
})->name('dashboard');

route::get('/redirect',[Homecontroller::class,'redirect'])->middleware('auth','verified');

Route::get('/view_catagory',[Admincontroller::class,'view_catagory']);

Route::post('/add_catagory',[Admincontroller::class,'add_catagory']);

Route::get('/delete_catagory/{id}',[Admincontroller::class,'delete_catagory']);

Route::get('/view_product',[Admincontroller::class,'view_product']);

Route::poSt('/add_product',[Admincontroller::class,'add_product']);

Route::get('/show_product',[Admincontroller::class,'show_product']);

Route::get('/delete_product/{id}',[Admincontroller::class,'delete_product']);

Route::get('/update_product/{id}',[Admincontroller::class,'update_product']);

Route::post('/add_product_confirm/{id}',[Admincontroller::class,'add_product_confirm']);

Route::get('/order',[Admincontroller::class,'order']);

Route::get('/delivered/{id}',[Admincontroller::class,'delivered']);

Route::get('/print_pdf/{id}',[Admincontroller::class,'print_pdf']);

Route::get('/send_email/{id}',[Admincontroller::class,'send_email']);

Route::post('/send_user_email/{id}',[Admincontroller::class,'send_user_email']);


Route::get('/search',[Admincontroller::class,'searchdata']);








Route::get('/product_details/{id}',[Homecontroller::class,'product_details']);

Route::post('/add_cart/{id}',[Homecontroller::class,'add_cart']);

Route::get('/show_cart',[Homecontroller::class,'show_cart']);

Route::get('/remove_cart/{id}',[Homecontroller::class,'remove_cart']);

Route::get('/cash_order',[Homecontroller::class,'cash_order']);

Route::get('/stripe/{totalprice}',[Homecontroller::class,'stripe']);

Route::post('stripe', [Homecontroller::class,'stripePost'])->name('stripe.post');

Route::get('/show_order',[Homecontroller::class,'show_order']);

Route::get('/cancel_order/{id}',[Homecontroller::class,'cancel_order']);

Route::post('/add_comment',[Homecontroller::class,'add_comment']);

Route::post('/add_reply',[Homecontroller::class,'add_reply']);

Route::get('/product_search',[Homecontroller::class,'product_search']);

Route::get('/products',[Homecontroller::class,'products']);

Route::get('/search_product',[Homecontroller::class,'search_product']);

Route::post('/stripe/{totalprice}', [HomeController::class, 'stripePost']);
