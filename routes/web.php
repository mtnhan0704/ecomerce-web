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

route::get('/redirect',[Homecontroller::class,'redirect']);

Route::get('/view_catagory',[Admincontroller::class,'view_catagory']);

Route::post('/add_catagory',[Admincontroller::class,'add_catagory']);

Route::get('/delete_catagory/{id}',[Admincontroller::class,'delete_catagory']);

Route::get('/view_product',[Admincontroller::class,'view_product']);

Route::poSt('/add_product',[Admincontroller::class,'add_product']);

Route::get('/show_product',[Admincontroller::class,'show_product']);
