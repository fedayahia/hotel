<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;



Route::get('/', [RoomController::class, 'index'])->name('home');

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


Route::get('/', function () {
    return view('welcome');
});
Route::get('/hotel', function () {
    return view('index');
});

Route::get('/cart', function () {
    return view('cart');
})->name('cart');


Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('/signup', function () {
    return view('signup');
})->name('signup');
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');;

Route::get('/home', function () {
    return view('index');
})->name('home');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/room-detail', function () {
    return view('room-detail');
})->name('room-detail');

Route::get('/photo-gallery', function () {
    return view('photo-gallery');
})->name('photo-gallery');

Route::get('/video-gallery', function () {
    return view('video-gallery');
})->name('video-gallery');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

