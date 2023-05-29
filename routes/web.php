<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginRegisController;
use App\Http\Controllers\User\FieldController;
use App\Http\Controllers\User\BookingController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\Admin\AdminCategoryController;
use App\Http\Controllers\Admin\AdminTimeController;
use App\Http\Controllers\Admin\AdminFieldController;
use App\Http\Controllers\Admin\AdminBookingController;

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
    return view('welcome');
});

// Route::get('/field', fn()=> view('user.field'))->name('field');
// Route::get('/booking', fn()=> view('user.booking'))->name('booking');
// Route::get('/profile', fn()=> view('user.profile'))->name('profile');

// Route::get('/admin/field', fn()=> view('admin.field.index'))->name('admin.field.index');
// Route::get('/admin/field/create', fn()=> view('admin.field.create'))->name('admin.field.create');
// Route::get('/admin/field/edit', fn()=> view('admin.field.edit'))->name('admin.field.edit');
// Route::get('/admin/field/show', fn()=> view('admin.field.show'))->name('admin.field.show');

// Route::get('/admin/time', fn()=> view('admin.time'))->name('admin.time');

// Route::get('/admin/booking', fn()=> view('admin.booking.index'))->name('admin.booking.index');
// Route::get('/admin/booking/show', fn()=> view('admin.booking.show'))->name('admin.booking.show');

// with controller
Route::get('field', [FieldController::class, 'index'])->name('field');
Route::get('booking/{field}', [BookingController::class, 'index'])->name('booking');
// Route::get('booking', [BookingController::class, 'index'])->name('booking');
Route::post('booking', [BookingController::class, 'storeBooking'])->name('booking.store');
Route::get('profile', [ProfileController::class, 'index'])->name('profile');
Route::post('profile/confirm/{booking}', [ProfileController::class, 'confirmPayment'])->name('profile.confirm');
Route::delete('profile/{booking}', [ProfileController::class, 'destroyBooking'])->name('profile.destroy');

Route::prefix('admin')->group(function(){
    Route::resource('field', AdminFieldController::class)->names('admin.field');
    Route::resource('time', AdminTimeController::class)->except(["create", "edit", "show"])->names('admin.time');
    Route::resource('category', AdminCategoryController::class)->except(["create", "edit", "show"])->names('admin.category');
    Route::resource('booking', AdminBookingController::class)->only(["index", "update"])->names('admin.booking');
});