<div>
    <ul wire:key="topul">
        <li wire:key="topli">
            <div wire:key="topdiv1">
                ({{ $this->selected_comment->created_at->diffForHumans() }})
                {{ $this->selected_comment->body }}
            </div>
            
            <livewire:comment-reply-form :parent_id="$this->selected_id" wire:key="reply-root-{{$this->selected_id}}"/>


            <ul wire:key="topul1">
                @foreach ($this->selected_comment->children as $child)
                    <x-comment-item :nest="1" :comment="$child" />
                @endforeach
            </ul>
        </li>
    </ul>
</div>