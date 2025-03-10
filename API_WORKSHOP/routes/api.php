<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PCController;

Route::apiResource('pcs', PCController::class);
