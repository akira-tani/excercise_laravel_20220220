<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;

Route::get('/building', [QuestionController::class, 'building']);
Route::get('/building/{room?}', [QuestionController::class, 'room']);