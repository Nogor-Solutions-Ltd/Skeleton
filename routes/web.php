<?php

use Illuminate\Support\Facades\Route;
use NogorSolutionsLTD\Skeleton\Http\Controllers\PostController;

// Entry Route...
Route::get('post', [PostController::class,'index']);
