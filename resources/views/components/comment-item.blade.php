@props([
    'comment',
    'nest' => 1,
    'parent_id' => null,
])

<li
    wire:key="li-{{$nest}}-{{$comment->id}}"
    x-data="{show:false}"
>
    <div>
        ({{ $comment->created_at->diffForHumans() }})
        {{ $comment->body }}

        <button type="button" x-on:click="show = !show">💬</button>
    </div>
    
    {{-- <div x-show="show" key="reply-container-{{$nest}}-{{$comment->id}}"> --}}
        <livewire:comment-reply-form :parent_id="$parent_id ?? $comment->id" key="reply-{{$nest}}-{{$comment->id}}"/>
    {{-- </div> --}}

    <ul>
        @foreach ($comment->children as $child)
            <x-comment-item :nest="$nest - 1" :parent_id="$comment->id" :comment="$child" />
        @endforeach
    </ul>
</li>