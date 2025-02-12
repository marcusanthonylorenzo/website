<?php


use App\Http\Controllers\Api\ContentController;

Route::get('/about', [ContentController::class, 'about']);
Route::get('/resume', [ContentController::class, 'resume']);
Route::get('/projects', [ContentController::class, 'projects']);
Route::get('/contact', [ContentController::class, 'contact']);
