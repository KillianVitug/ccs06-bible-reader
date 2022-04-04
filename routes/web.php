<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstBibleController;


Route::get('/', [FirstBibleController::class, 'index']);
Route::get('/chapter/{chapter_number}',[FirstBibleController::class,'contentPerChapter']);
Route::get('/all-chapters',[FirstBibleController::class,'readContent']);
