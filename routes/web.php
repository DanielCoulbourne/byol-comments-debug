<?php

use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;

Route::get('/{video}', [VideoController::class, 'show'])->name('comments.index');
