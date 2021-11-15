<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InqController;



Route::get('/', [InqController::class, 'index']);
Route::post('/sent', [InqController::class, 'thanks']);