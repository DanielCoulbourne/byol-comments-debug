<?php

use App\Http\Controllers\VideoController;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;

Route::get('/{video}', [VideoController::class, 'show'])->name('comments.index');
