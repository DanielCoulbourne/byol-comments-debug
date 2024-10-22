<div>
    <div>
        <ul>
            @foreach($this->comments as $comment)
                <li>
                    <a style="cursor: pointer" wire:click="selectComment({{ $comment->id }})">
                        {{ $comment->body }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</div>