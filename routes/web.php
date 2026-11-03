<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', [ProductController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get("/orders", [OrderController::class, "index"])->name("orders.index");
Route::get("/orders/create", [OrderController::class, "create"])->name("orders.create");
Route::post("/orders", [OrderController::class, "store"])->name("orders.store");

Route::get("/orders/delete", [OrderController::class, "delete"])->name("orders.delete");
Route::delete("/orders", [OrderController::class, "destroy"])->name("orders.destroy");

require __DIR__.'/auth.php';
