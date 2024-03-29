<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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
    return view('home');
});
Route::get('/resume', function () {
    return view('resume');
});
Route::get('/portfolio', function () {
    return view('portfolio');
});
Route::get('/blogs', function () {
    return view('blog');
});
Route::get('/contact', function () {
    return view('contact');
});
// Sudo Password: 
// 56eWGF7YLreJiRPtE9ym
// Database Password: 
// 8ReyrIEoJoWA3A2pgJZb
// dop_v1_3b531ba00c66b0e896ef31b2378a4aaa13e9ce13400c05ccdb573b285d0fbf83
Route::get('/download-pdf', function () {
    $path = storage_path('ahmadCv-23.pdf');
    return response()->download($path);
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
