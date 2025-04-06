<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BackgroundController;
use App\Http\Controllers\HomeController;
use App\Models\Reservation;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/test', [HomeController::class, 'test']);

Route::get('/feedbacks', [FeedbackController::class, 'create']);
Route::post('/feedbacks/store', [FeedbackController::class, 'store']);
Route::get('/feedbacks/show', [FeedbackController::class, 'show'])->name('feedbacks');
Route::get('/feedbacks/{id}/edit', [FeedbackController::class, 'edit']);
Route::post('/feedbacks/{id}/update', [FeedbackController::class, 'update']);
Route::get('/feedbacks/{id}/destroy', [FeedbackController::class, 'destroy']);

Route::get('/dashboard', function () {
    // Retrieve all reservations
    $reservations = Reservation::all();

    // Pass data to the view
    return view('dashboard', compact('reservations'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/product', [ProductController::class, 'index'])->name('product');
    Route::post('/product/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('/product/create', [ProductController::class, 'create'])->name('products.create');
    Route::get('/product/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::post('/product/{id}/update', [ProductController::class, 'update'])->name('products.update');
    Route::get('/product/{id}/destroy', [ProductController::class, 'destroy'])->name('products.destroy');
    Route::get('/product/{id}/upload_destroy', [ProductController::class, 'upload_destroy']);

    Route::get('/backgrounds', [BackgroundController::class, 'index'])->name('backgrounds');
    Route::post('/backgrounds/store', [BackgroundController::class, 'store'])->name('backgrounds.store');
    Route::get('/backgrounds/create', [BackgroundController::class, 'create'])->name('backgrounds.create');
    Route::get('/backgrounds/{id}/edit', [BackgroundController::class, 'edit'])->name('backgrounds.edit');
    Route::post('/backgrounds/{id}/update', [BackgroundController::class, 'update'])->name('backgrounds.update');
    Route::get('/backgrounds/{id}/destroy', [BackgroundController::class, 'destroy'])->name('backgrounds.destroy');
    Route::get('/backgrounds/{id}/upload_destroy', [BackgroundController::class, 'upload_destroy']);
    
});

Route::prefix('reservations')->group(function () {
    Route::get('/', [ReservationController::class, 'index']); // Show all reservations 
    Route::get('/create', [ReservationController::class, 'create'])->name('reservations.create');    
    // Store reservation (this is the one causing the error)
    Route::post('/', [ReservationController::class, 'store'])->name('reservations.store');
    Route::get('/reservations/{id}', [ReservationController::class, 'show'])->name('reservations.show');
    Route::put('/reservations/{id}', [ReservationController::class, 'update'])->name('reservations.update');
    Route::get('{id}/edit', [ReservationController::class, 'edit']); // Show edit form
    Route::delete('/reservations/{id}', [ReservationController::class, 'destroy'])->name('reservations.destroy');

});




require __DIR__.'/auth.php';
