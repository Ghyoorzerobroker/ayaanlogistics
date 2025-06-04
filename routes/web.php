<?php

use Illuminate\Support\Facades\Route;

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


// ......................Frontend routes...........................


Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('frontend.home');
})->name('home');

Route::get('/about-us', function () {
    return view('frontend.about-us');
})->name('about-us');

Route::get('/faq', function () {
    return view('frontend.FAQ');
})->name('faq');

Route::get('/contact-us', function () {
    return view('frontend.contact-us');
})->name('contact-us');

Route::get('/door-to-door', function () {
    return view('frontend.door-to-door');
})->name('door-to-door');

Route::get('/express-cargo', function () {
    return view('frontend.express-cargo');
})->name('express-cargo');

Route::get('/air-cargo', function () {
    return view('frontend.air-cargo');
})->name('air-cargo');

Route::get('/port-pickup-delivery', function () {
    return view('frontend.port-pickup-delivery');
})->name('port-pickup-delivery');

Route::get('/surface-cargo', function () {
    return view('frontend.surface-cargo');
})->name('surface-cargo');

Route::get('/train-cargo-service', function () {
    return view('frontend.train-cargo-service');
})->name('train-cargo-service');

Route::get('/requestquote', function () {
    return view('frontend.requestquote');
})->name('requestquote');

Route::get('/privacy-policy', function () {
    return view('frontend.privacy-policy');
})->name('privacy-policy');


// ..............................Login.................................

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/admindashboard', function () {
    return view('backend.admindashboard');
})->name('admindashboard');

Route::get('/orders', function () {
    return view('backend.orders.order');
})->name('order');

Route::get('/orders/create', function () {
    return view('backend.orders.create');
})->name('create');


Route::get('/invoice', function () {
    return view('backend.invoices.invoice');
})->name('invoice');

Route::get('/invoices/create', function () {
    return view('backend.invoices.create');
})->name('invoicecreate');

Route::get('/orderstatus', function () {
    return view('backend.orderstatus.orderstatus');
})->name('orderstatus');

Route::get('/notification', function () {
    return view('backend.notification');
})->name('notification');

Route::get('/profile', function () {
    return view('backend.profile');
})->name('profile');

Route::get('/setting', function () {
    return view('backend.setting');
})->name('setting');




