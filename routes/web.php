<?php

use Illuminate\Support\Facades\Route;
use App\Models\Product;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
// use App\Http\Controllers\Payment\TripayCallbackController;
// use App\Http\Controllers\Payment\TripayController;
use App\Http\Controllers\ProductAdminController;
use App\Http\Controllers\TransactionController;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Transaction;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Support\Facades\Auth;
// use Alert;

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
// home
Route::get('/', function () {;
    $category = Category::all();
    return view('home', compact('category'));
});

// menu
Route::get('/category/{category:slug}', function(Category $category){
    $products = Product::where('category_id', $category->id)->paginate(6);
    return view('menu.category', compact('products', 'category'));  
});

// kontak
Route::get('/contact', function () {
    return view('contact');
});

// Akses buat Member aja
Route::middleware('member')->group(function () {
    Route::resource('/cart', CartController::class);
    Route::get('/history', [TransactionController::class, 'history']);
    Route::get('/confirmation/{id}', [TransactionController::class, 'getconfirmation']);
    Route::get('/confirmation/{id}/edit', [TransactionController::class, 'geteditconfirmation']);
    Route::post('/confirmation/{id}', [TransactionController::class, 'confirmation']);
    Route::post('/confirmation/{id}/edit', [TransactionController::class, 'updateconfirmation']);
});

// kalau udah login
Route::get('/transaction/{id}', [TransactionController::class, 'show'])->middleware('auth');

// kalau admin
Route::middleware('admin')->group(function () {
    Route::get('/category/{category:slug}/create', function(Category $category){
        return view('menu.createascategory', compact('category'));
    });
    
    Route::get('/category/{category:slug}/{product:slug}/edit', function(Category $category, Product $product){
        return view('menu.editascategory', compact('category', 'product'));
    });
    Route::get('/transaction', [TransactionController::class, 'index']);
    Route::post('/transaction/checkout/{id}', [TransactionController::class, 'checkout']);
});

// Akses buat admin saja, kecuali show atau index
Route::get('/menu/checkSlug', [ProductAdminController::class, 'checkSlug']);
Route::resource('/menu', ProductAdminController::class);

// Akses buat Member saja
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');;
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
    Route::post('/login', [LoginController::class, 'authenticate']);
    Route::get('/register', [RegisterController::class, 'index']);
    Route::post('/register', [RegisterController::class, 'store']);
});