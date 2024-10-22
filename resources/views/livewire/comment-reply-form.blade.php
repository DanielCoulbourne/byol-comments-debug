<div>
    {{-- <form wire:submit="save"> --}}
        <textarea wire:model.live="reply.body"></textarea>
        <button
            type="button"
            wire:click="save"
        >submit</button>
    {{-- </form> --}}
</div>