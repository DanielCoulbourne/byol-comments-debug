<?php

namespace App\Livewire;

use App\Models\Comment;
use Livewire\Attributes\Computed;
use Livewire\Component;

class CommentsIndex extends Component
{
    public function render()
    {
        return view('livewire.comments-index');
    }
}
