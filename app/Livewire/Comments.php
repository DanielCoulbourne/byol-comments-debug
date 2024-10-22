<?php

namespace App\Livewire;

use App\Livewire\Forms\NewComment;
use App\Models\Comment;
use Livewire\Component;
use Livewire\Attributes\Url;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;

class Comments extends Component
{
    public string $video;

    public NewComment $newComment;

    #[Url(as: 'comment', history: true)]
    public ?string $selected_id = null;

    #[Computed]
    public function comments()
    {
        return Comment::topLevel()->get();
    }

    #[Computed]
    public function selectedComment()
    {
        return Comment::where('id', $this->selected_id)
            ->with([
                'children' => fn($q) => $q->orderBy('created_at', 'desc'),
                'children.children' => fn($q) => $q->orderBy('created_at', 'desc'),
            ])
            ->firstOrFail();
    }
    
    public function selectComment($comment_id)
    {
        $this->selected_id = $comment_id;
    }
    
    #[On('reply-saved')]
    public function refreshSelectedComment()
    {
        unset($this->selected_comment);
    }

    public function render()
    {
        return view('livewire.comments');
    }
}
