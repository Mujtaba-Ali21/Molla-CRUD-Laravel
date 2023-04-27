<?php

use Illuminate\Support\Facades\Route;

// Authentication
use App\Http\Middleware\Authenticate;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AuthController;

// Banner
use App\Http\Controllers\BannerController;

// Brand
use App\Http\Controllers\BrandController;

// Category
use App\Http\Controllers\CategoryController;

// Featured
use App\Http\Controllers\FeaturesController;

// Top Selling Products
use App\Http\Controllers\TopSellingController;

// Main
use App\Http\Controllers\MainController;


// Authentication

// Register

Route::get('/register', function () {
    return view('register');
});

Route::post('/register', [AuthController::class, 'handleRegister']);

// Login
Route::get('/', function () {
    return view('welcome');
});

Route::post('/', [AuthController::class, 'handleLogin']);

// Logout
Route::get('/logout', [AuthController::class, 'handleLogout'])->name('logout');


// BANNERS

// Create
Route::get('/banner', function () {
    return view('banner');
});

Route::post('/banner', [BannerController::class, 'create']);

// Read
Route::get('/bannersTable', [BannerController::class, 'read']);

// Update
Route::get('/edit/{id}', [BannerController::class, 'showUpdate']);
Route::post('/edit/{id}', [BannerController::class, 'update']);

// Delete
Route::get('/remove/{id}', [BannerController::class, 'delete']);


// BRANDS

// Create
Route::get('/brand', function () {
    return view('brand');
});

Route::post('/brand', [BrandController::class, 'create']);

// Read
Route::get('/brandsTable', [BrandController::class, 'read']);

// Update
Route::get('/editBrand/{id}', [BrandController::class, 'showUpdate']);
Route::post('/editBrand/{id}', [BrandController::class, 'update']);

// Delete
Route::get('/removeBrand/{id}', [BrandController::class, 'delete']);


// CATEGORY

// Create
Route::get('/category', function () {
    return view('category');
});

Route::post('/category', [CategoryController::class, 'create']);

// Read
Route::get('/categoriesTable', [CategoryController::class, 'read']);

// Update
Route::get('/editCategory/{id}', [CategoryController::class, 'showUpdate']);
Route::post('/editCategory/{id}', [CategoryController::class, 'update']);

// Delete
Route::get('/removeCategory/{id}', [CategoryController::class, 'delete']);


// FEATURES

// Create
Route::get('/featured', function () {
    return view('featured');
});

Route::post('/featured', [FeaturesController::class, 'create']);

// Read
Route::get('/featuresTable', [FeaturesController::class, 'read']);

// Update
Route::get('/editFeature/{id}', [FeaturesController::class, 'showUpdate']);
Route::post('/editFeature/{id}', [FeaturesController::class, 'update']);

// Delete
Route::get('/removeFeature/{id}', [FeaturesController::class, 'delete']);


// TOP SELLING PRODUCTS

// Create
Route::get('/top_selling', function () {
    return view('top_selling');
});

Route::post('/top_selling', [TopSellingController::class, 'create']);

// Read
Route::get('/top_sellingsTable', [TopSellingController::class, 'read']);

// Update
Route::get('/editProduct/{id}', [TopSellingController::class, 'showUpdate']);
Route::post('/editProduct/{id}', [TopSellingController::class, 'update']);

// Delete
Route::get('/removeProduct/{id}', [TopSellingController::class, 'delete']);


// MAIN 
Route::middleware(['auth'])->group(function () {
    Route::get('/main', [MainController::class, 'read']);
});