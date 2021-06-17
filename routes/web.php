<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Select2SearchController;
use App\Http\Controllers\PagesController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
*/
Route::get('/', [PagesController::class, 'index']);
Route::get('/merk/{id}',[PagesController::class, 'merkAjax']);
Route::get('/search', [Select2SearchController::class, 'index']);

Route::get('/ajax-autocomplete-search', [Select2SearchController::class, 'selectSearch']);