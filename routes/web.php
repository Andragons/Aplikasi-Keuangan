<?php

use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TransactionController;

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
//     return view('home', [
//         "title" => "Home"
//     ]);
// });

Route::get('/', [HomeController::class, 'index']);
// Route::get('/kategori/list', [CategoryController::class, 'index']);
Route::get('/kategori/update/{id}', [CategoryController::class, 'showUpdateForm']);
Route::put('/kategori/update/{id}', [CategoryController::class, 'update']);
Route::delete('/kategori/delete/{id}', [CategoryController::class, 'delete']);
Route::get('/kategori/create', [CategoryController::class, 'showCreateForm']);
Route::post('/kategori/create', [CategoryController::class, 'create']);
Route::get('/kategori/pemasukan', [CategoryController::class, 'showPemasukanCategories']);
Route::get('/kategori/pengeluaran', [CategoryController::class, 'showPengeluaranCategories']);

Route::get('/transaksi/list', [TransactionController::class, 'index']);
Route::get('/transaksi/add', [TransactionController::class, 'add']);

// Route::resource('Category',CategoryController::class);
// Route::get('/kategori/update/{id}', [CategoryController::class, 'update']);