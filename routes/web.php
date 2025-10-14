<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;

Route::get('/', function () {
    return view('about');
});

Route::get('/about/{slug}', [AboutController::class, 'showTimelineDetail']);
