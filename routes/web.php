<?php

use Illuminate\Support\Facades\Route;
use NogorSolutionsLTD\Skeleton\Http\Controllers\PostController;

Route::get('example', [PostController::class,'index']);
