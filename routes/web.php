<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

use App\Http\Controllers\ApiTestController;

Route::get('/test', [ApiTestController::class, 'index']);
