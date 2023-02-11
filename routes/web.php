<?php

use App\Http\Controllers\admin\productController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\user\landingPageController;
use App\Http\Controllers\user\productUserController;
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
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';

// admin
Route::get('/dashboard', function(){
    return view('admin.dashboard');
});

Route::get('/product_admin', [productController::class, 'index']);
Route::post('/product_admin/insert', [productController::class, 'store']);
Route::put('/product_admin/{id}', [productController::class, 'update']);
Route::get('/product_admin/delete/{id}', [productController::class, 'delete']);


// user
Route::get('/', [landingPageController::class, 'index']);
Route::get('/product', [productUserController::class, 'index']);