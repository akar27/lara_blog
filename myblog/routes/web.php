<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CommantController;

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

Route::get('/', function () {
    return view('welcome');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/dashboard', [BlogController::class, "index"])->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/blog', [BlogController::class, "index"]) -> middleware(['auth', 'verified'])->name("blog");

Route::get("/search", [BlogController::class, "search"]) -> name('sear');

Route::get("/addblog", [BlogController::class, "create"]) -> name('add');

Route::post("/addblog", [BlogController::class, "store"]) -> name('store');

Route::delete("blog/delete/{blog}", [BlogController::class, "destroy"]) -> name('delete');

Route::get("editblog/{blog}",  [BlogController::class, "edit"]) -> name('edit');

Route::patch("/blog/{id}",  [BlogController::class, "update"]) -> name('update');


Route::get("/comnt", [CommantController::class, "index"]) -> middleware(['auth', 'verified']) -> name('comnt');

require __DIR__.'/auth.php';
