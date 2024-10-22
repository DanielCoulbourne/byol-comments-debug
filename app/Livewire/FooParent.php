<?php

namespace App\Livewire;

use Livewire\Component;

class FooParent extends Component
{
    public array $foos = [
        1
    ];

    public function addFoo($bar)
    {
        array_unshift($this->foos, $bar);
    }

    public function render()
    {
        return view('livewire.foo-parent');
    }
}
