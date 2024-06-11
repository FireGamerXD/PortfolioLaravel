<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProjetController;
use Illuminate\Support\Facades\Route;

Route::get("/", [HomeController::class , 'index']);
Route::get("/projets", [ProjetController::class , 'index']);
Route::get("/contact", [ContactController::class , 'index']);