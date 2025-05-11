<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BackgroundController;
use App\Http\Controllers\DesignerController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NotificationController;
use App\Models\Reservation;
use App\Events\Notifications;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;

Route::get('/message-sent', function () {
        // Sending a simple object instead of a model
        $message = [
            'user' => 'John Doe',
            'text' => 'Hello from Laravel Reverb!',
            'timestamp' => now()->toDateTimeString(),
        ];
    
        // Fire the event
        broadcast(new Notifications('weadadad'));
    
        return response()->json(['status' => 'Message broadcasted!']);
});

Route::get('/get-towns/{province_code}', [HomeController::class, 'getTown']);
Route::get('/get-barangays/{town_code}', [HomeController::class, 'getBarangay']);

Route::get('/hihi', function () {
    // return view('test');
    $mailInfo = new \stdClass();
    $mailInfo->first_name = "wew";
    $mailInfo->middle_name = "wew";
    $mailInfo->last_name = "wew";

    Mail::to('maeron.reyespgrmo@gmail.com')->send(new TestMail($mailInfo));
    return 'Abraham Cuisine Email sent!';
});

Route::get('/', [HomeController::class, 'index'])->name('welcome');
Route::get('/test', [HomeController::class, 'test']);

Route::get('/feedbacks', [FeedbackController::class, 'create']);
Route::post('/feedbacks/store', [FeedbackController::class, 'store']);
Route::get('/feedbacks/show', [FeedbackController::class, 'show'])->name('feedbacks');
Route::get('/feedbacks/{id}/edit', [FeedbackController::class, 'edit']);
Route::post('/feedbacks/{id}/update', [FeedbackController::class, 'update']);
Route::get('/feedbacks/{id}/destroy', [FeedbackController::class, 'destroy']);

// Route::get('/dashboard', function () {

// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', [ReservationController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

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

    //DESIGNER
    Route::get('/designer', [DesignerController::class, 'index'])->name('designer');
    Route::post('/designer/{id}/{type}/update', [DesignerController::class, 'update'])->name('update.designer');


    // Route::get('/backgrounds', [BackgroundController::class, 'index'])->name('backgrounds');
    // Route::post('/backgrounds/store', [BackgroundController::class, 'store'])->name('backgrounds.store');
    // Route::get('/backgrounds/create', [BackgroundController::class, 'create'])->name('backgrounds.create');
    // Route::get('/backgrounds/{id}/edit', [BackgroundController::class, 'edit'])->name('backgrounds.edit');
    // Route::post('/backgrounds/{id}/update', [BackgroundController::class, 'update'])->name('backgrounds.update');
    // Route::get('/backgrounds/{id}/destroy', [BackgroundController::class, 'destroy'])->name('backgrounds.destroy');
    // Route::get('/backgrounds/{id}/upload_destroy', [BackgroundController::class, 'upload_destroy']);

    //NOTIFICATIONS
    Route::get('/notifications', [NotificationController::class, 'index']);
    Route::get('/notifications/data', [NotificationController::class, 'index_data'])->name('notifications.data');


});

Route::prefix('reservations')->group(function () {
    // Route::get('/', [ReservationController::class, 'index']); // Show all reservations 
    Route::get('/create', [ReservationController::class, 'create'])->name('reservations.create');    
    // Store reservation (this is the one causing the error)
    Route::post('/reservations/store', [ReservationController::class, 'store'])->name('reservations.store');
    Route::get('/reservations/{id}', [ReservationController::class, 'show'])->name('reservations.show');
    Route::post('/reservations/{id}/update', [ReservationController::class, 'update'])->name('reservations.update');
    Route::get('/reservations/{id}/edit', [ReservationController::class, 'edit'])->name('reservations.edit'); // Show edit form
});

Route::get('/reservations/{id}/destroy', [ReservationController::class, 'destroy'])->name('reservations.destroy');
Route::post('/reservations/{id}/status', [ReservationController::class, 'isStatus']);


require __DIR__.'/auth.php';
