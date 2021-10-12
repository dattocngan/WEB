<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => '/hotel'], function () {
		Route::get('/view', [\App\Http\Controllers\Hotel\HotelController::class,"showAll"])->name('hotel_showAll');

		Route::get('/detail', [\App\Http\Controllers\Hotel\HotelController::class,"showDetail"])->name('hotel_showDetail');
	});