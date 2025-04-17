<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('lang/{locale}', function ($locale) {
    session()->put('locale', $locale);
    app()->setLocale($locale);
    return redirect()->back();
});
