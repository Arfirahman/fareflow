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

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
})->name('privacy-policy');

Route::post('/privacy/accept', function () {
    return redirect()->back()->with('status', 'Privacy policy accepted!');
})->name('privacy.accept');

Route::get('/topup', function () {
    return view('topup');
});

Route::get('/profile', function () {
    $user = auth()->user() ?? (object)[
        'name'  => 'Guest User',
        'phone' => '0815986432543',
        'profile_photo_url' => asset('images/default-avatar.png')
    ];

    return view('profile.show', compact('user'));
})->name('profile.show');