<?php

namespace App\Livewire\Forms;

use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Form;

class NewComment extends Form
{
    #[Rule('exists:comments,id')]
    public $parent_id;

    public string $body = '';
}
