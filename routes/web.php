<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\ComputersController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/',[StaticController::class,'index'])->name('home.index') ;
Route::get('/about',[StaticController::class,'about'])->name('home.about') ;

Route::get('/contact',[StaticController::class,'contact'])->name('home.contact') ;
Route::resource('computers', ComputersController::class);









// Route::get('/store/{category?}/{item?}', function ($category=null,$item=null) {
//     if(isset($category)){
//         if(isset($item)){
//             return "<h3>{$item}</h3>";
//     }
//     return '<h3>'.$category.'</h3>';
// }
// return '<h3>store</h3>';
// });
// Route::get('/about', function () {
//     return "<h3>about</h3>";
// });
// Route::get('/store', function () {
//     $filter=request('style');
//     if(isset($filter)){
//        return 'this page is viewing <span style="color:red">'.strip_tags($filter).'</span>';
//     }
//     return 'this page is viewing <span style="color:red">All Products</span>';

//});
