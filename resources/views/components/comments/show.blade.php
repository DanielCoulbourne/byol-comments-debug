<div>
    <ul>
        <li>
            <div>
                ({{ $this->selected_comment->created_at->diffForHumans() }})
                {{ $this->selected_comment->body }}
            </div>
            
            <livewire:comment-reply-form :parent_id="$this->selected_id" key="reply-root-{{$this->selected_id}}"/>


            @if ($this->selected_comment->children->isNotEmpty())
                <ul>
                    @foreach ($this->selected_comment->children as $child)
                        <x-comment-item :nest="1" :comment="$child" />
                    @endforeach
                </ul>
            @endif
        </li>
    </ul>
</div>