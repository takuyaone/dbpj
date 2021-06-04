<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonController;

Route::get('/person/{person}', [PersonController::class, 'bind']);
