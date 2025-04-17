<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/lang/{locale}', function ($locale) {
    $allowed = ['en', 'am', 'om', 'so', 'ti'];
    if (in_array($locale, $allowed)) {
        Session::put('locale', $locale);
    }
    return redirect()->back();
});

