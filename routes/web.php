<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/ping', function () {
    return response()->json(['status' => 'API is working on Azure!']);
});
