<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/gizlilik', function () {
    return view('pages.privacy');
});

Route::get('/kvkk', function () {
    return view('pages.kvkk');
});

Route::get('/kullanim-kosullari', function () {
    return view('pages.terms');
});
