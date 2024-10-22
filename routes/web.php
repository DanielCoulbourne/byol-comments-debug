<?php

use App\Http\Controllers\VideoController;
use App\Livewire\FooParent;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Exception\MethodNotAllowedHttpException;

Route::get('/', FooParent::class)->name('index');
Route::get('/{video}', [VideoController::class, 'show'])->name('comments.index');
