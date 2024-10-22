<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class VideoController extends Controller
{ 
    function show(string $video) {
        return view('video', ['video' => $video]);
    }
}
