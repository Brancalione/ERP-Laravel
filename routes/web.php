<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\BrandsController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\StocksController;

Route::prefix("home")->group(function() {
    Route::get("", [HomeController::class, "index"])->name("home.index");
});

Route::prefix("products")->group(function() {
    Route::get("", [ProductsController::class, "index"])->name("products.index");
    Route::get("new", [ProductsController::class, "create"])->name("products.create");
    Route::post("", [ProductsController::class, "store"])->name("products.store");
    Route::get("{id}", [ProductsController::class, "edit"])->name("products.edit");
    Route::put("{id}", [ProductsController::class, "update"])->name("products.update");
    Route::delete("{id}", [ProductsController::class, "destroy"])->name("products.destroy");
});

Route::prefix("brands")->group(function() {
    Route::get("", [BrandsController::class, "index"])->name("brands.index");
    Route::get("new", [BrandsController::class, "create"])->name("brands.create");
    Route::post("", [BrandsController::class, "store"])->name("brands.store");
    Route::get("{id}", [BrandsController::class, "edit"])->name("brands.edit");
    Route::put("{id}", [BrandsController::class, "update"])->name("brands.update");
    Route::delete("{id}", [BrandsController::class, "destroy"])->name("brands.destroy");
});

Route::prefix("categories")->group(function() {
    Route::get("", [CategoriesController::class, "index"])->name("categories.index");
    Route::get("new", [CategoriesController::class, "create"])->name("categories.create");
    Route::post("", [CategoriesController::class, "store"])->name("categories.store");
    Route::get("{id}", [CategoriesController::class, "edit"])->name("categories.edit");
    Route::put("{id}", [CategoriesController::class, "update"])->name("categories.update");
    Route::delete("{id}", [CategoriesController::class, "destroy"])->name("categories.destroy");
});

Route::prefix("stocks")->group(function() {
    Route::get("", [StocksController::class, "indexlista"])->name("stocks.index");
    Route::put("{id}", [StocksController::class, 'update'])->name('stocks.update');
    Route::get("{id}", [StocksController::class, "edit"])->name("stocks.edit");

});


