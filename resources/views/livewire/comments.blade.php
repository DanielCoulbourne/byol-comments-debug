<div>
    @if ($this->selected_id)
        <x-comments.show />
    @else
        <x-comments.index />
    @endif
</div>
