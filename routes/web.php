<?php


// Authentication
use Illuminate\Support\Facades\Route;

// Banner
use App\Http\Controllers\AuthController;

// Brand
use App\Http\Controllers\MainController;

// Category
use App\Http\Controllers\BrandController;

// Featured
use App\Http\Controllers\BannerController;

// Top Selling Products
use App\Http\Controllers\CategoryController;

// Main Controller
use App\Http\Controllers\FeaturesController;
use App\Http\Controllers\TopSellingController;

use App\Http\Middleware\Authenticate;


// Authentication

// Register
Route::get('/register', function () {
    return view('register');
});

Route::post('/register', [AuthController::class, 'registerLogin']);

// Login
Route::get('/', function () {
    return view('welcome');
});

Route::post('/', [AuthController::class, 'handleLogin']);


Route::get('/main', [MainController::class, 'read'])->middleware('isLoggedIn');

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



// Top Selling Products


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

Route::get('/main', function () {
    return view('main/main');
});

// Read
Route::get('/main', [MainController::class, 'read']);

