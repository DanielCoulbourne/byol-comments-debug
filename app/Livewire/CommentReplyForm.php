<?php

namespace App\Livewire;

use App\Models\Comment;
use Livewire\Component;
use Livewire\Attributes\Rule;
use App\Livewire\Forms\NewComment;

class CommentReplyForm extends Component
{
    public string $parent_id;
    public NewComment $reply;

    public function mount()
    {
        $this->reply->parent_id = $this->parent_id;
    }

    public function save()
    {
        $this->reply->validate();

        Comment::create($this->reply->toArray());

        $this->reply->body = '';

        $this->dispatch('reply-saved');
    }

    public function render()
    {
        return view('livewire.comment-reply-form');
    }
}
