<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\Admin\ProductsController;

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
// Client Routes
Route::prefix('categories')->group(function(){
    //get
    Route::get('/', [CategoriesController::class, 'index'])->name('categories.list');

    // get by id
    Route::get('/edit/{id}', [CategoriesController::class, 'getCategory'])->name('categories.edit');

    // update by id
    Route::post('/edit/{id}', [CategoriesController::class, 'updateCategory']);

    // get by id
    Route::get('/add', [CategoriesController::class, 'addCategory'])->name('categories.add');

    // get by id
    Route::post('/add', [CategoriesController::class, 'handleCategory']);

    // get by id
    Route::delete('/delete/{id}', [CategoriesController::class, 'deleteCategory'])->name('categories.delete');
});

// Client Routes
Route::prefix('admin')->group(function(){
    Route::resource('products', ProductsController::class);
});