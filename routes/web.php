<?php

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
    return view('welcome');
});

Route::get('/login', fn()=> view('login'))->name('login');
Route::get('/register', fn()=> view('register'))->name('register');
Route::get('/field', fn()=> view('user.field'))->name('field');
Route::get('/booking', fn()=> view('user.booking'))->name('booking');
Route::get('/profile', fn()=> view('user.profile'))->name('profile');

Route::get('/admin/field', fn()=> view('admin.field.index'))->name('admin.field.index');
Route::get('/admin/field/create', fn()=> view('admin.field.create'))->name('admin.field.create');
Route::get('/admin/field/edit', fn()=> view('admin.field.edit'))->name('admin.field.edit');
Route::get('/admin/field/show', fn()=> view('admin.field.show'))->name('admin.field.show');

Route::get('/admin/time', fn()=> view('admin.time.index'))->name('admin.time');
Route::get('/admin/category', fn()=> view("admin.category.index"))->name('admin.category');

Route::get('/admin/booking', fn()=> view('admin.booking.index'))->name('admin.booking.index');
Route::get('/admin/booking/show', fn()=> view('admin.booking.show'))->name('admin.booking.show');
Route::get('/admin/booking/show_field', fn()=> view('admin.booking.show_field'))->name('admin.booking.show_field');
Route::get('/admin/booking/show_date', fn()=> view('admin.booking.show_date'))->name('admin.booking.show_date');
