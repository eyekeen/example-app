<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\Posts\CommentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TestController;
use App\Http\Middleware\AccessCheck;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('home.index');
})->name('home');

Route::redirect('/home', '/', 301);

Route::get('/test', TestController::class);


Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'index'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');

    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'store'])->name('login.store');
});


Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{post}', [BlogController::class, 'show'])->name('blog.show');
Route::post('/blog/{post}/like', [BlogController::class, 'like'])->name('blog.like');



Route::middleware(AccessCheck::class)->prefix('products')->group(function () {
    Route::get("/", [ProductController::class, 'index'])->name('product');
    Route::get("/create", [ProductController::class, 'create'])->name('product.create');
    Route::post("/", [ProductController::class, 'store'])->name('product.store')->withoutMiddleware(AccessCheck::class);
    Route::get("/{product}", [ProductController::class, 'show'])->name('product.show');
    Route::get("/{product}/edit", [ProductController::class, 'edit'])->name('product.edit');
    Route::put("/{product}", [ProductController::class, 'update'])->name('product.update')->withoutMiddleware(AccessCheck::class);
    Route::delete("/{product}", [ProductController::class, 'destroy'])->name('product.destroy')->withoutMiddleware(AccessCheck::class);
});

Route::resource('posts/{post}/comments', CommentController::class)->only([
    'index', 'show'
]);
