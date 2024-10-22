<ul>
    @foreach ($this->foos as $foo)
        <li x-data="{show:false}" wire:key="li-{{$foo}}">
            <span wire:key="s-{{$foo}}">{{ $foo }}</span>
             
            <button wire:key="b1-{{$foo}}" type="button" wire:click="addFoo({{$foo + 1}})">addFoo</button>
            <button wire:key="b3-{{$foo}}" type="button" x-on:click="show = !show">toggle</button>

            <div wire:key="container-{{$foo}}">
                <div
                    x-show="show"
                    wire:key="container-{{$foo}}"
                >
                    <livewire:foo wire:key="togglable-{{$foo}}" />
                </div>
            </div>
        </li>        
    @endforeach
</ul>