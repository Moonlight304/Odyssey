<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');



Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/deals', function () {
    return view('deals');
})->name('deals');

Route::get('/heritage', function () {
    return view('heritage');
})->name('heritage');

Route::get('/modern', function () {
    return view('modern');
})->name('modern');

Route::get('/nature', function () {
    return view('nature');
})->name('nature');

Route::get('/spiritual', function () {
    return view('spiritual');
})->name('spiritual');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/reservation', function () {
        return view('reservation');
    })->name('reservation');

    Route::get('/my_reservations', [ReservationController::class, 'index'])->name('my_reservations');
    Route::post('/new_reservation', [ReservationController::class, 'new_reservation'])->name('new_reservation');
    Route::delete('/reservations/{id}', [ReservationController::class, 'delete_reservation'])->name('delete_reservation'); // Added route
    Route::get('/reservations/{id}/edit', [ReservationController::class, 'edit_reservation'])->name('edit_reservation');
    Route::put('/reservations/{id}', [ReservationController::class, 'update_reservation'])->name('update_reservation');
    Route::post('/reservations/{id}/confirm', [PaymentController::class, 'confirm_payment'])->name('confirm_payment');
    Route::get('/reservations/{id}/payment', [PaymentController::class, 'show_payment_page'])->name('payment.page');
    Route::post('/reservations/{id}/payment', [PaymentController::class, 'process_payment'])->name('payment.process');
    Route::get('/reservations/{id}/payment/success', [PaymentController::class, 'payment_success'])->name('payment.success');
    Route::get('/reservations/{id}/payment/cancel', [PaymentController::class, 'payment_cancel'])->name('payment.cancel');
    Route::get('/reservations/{id}/ticket', [ReservationController::class, 'view_ticket'])->name('view_ticket');

    Route::get('create_package', [PackageController::class, 'package_form'])->name('create_package');
    Route::post('create_package', [PackageController::class, 'new_package']);
    Route::get('packages', [PackageController::class, 'index'])->name('packages');

    Route::get('bookings', [BookingController::class, 'index'])->name('bookings.index');
    Route::get('bookings/{id}', [BookingController::class, 'show'])->name('bookings.show');
    Route::get('new_booking', [BookingController::class, 'booking_form'])->name('new_booking');
    Route::post('new_booking', [BookingController::class, 'new_booking']);

    Route::post('new_payment', [PaymentController::class, 'new_payment']);

    Route::post('new_review', [ReviewController::class, 'new_review']);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
