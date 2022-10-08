<div class="absolute w-full h-full bg-slate-600">
    <div class="flex items-center justify-center h-screen">
        <div class="grid grid-cols-8 text-lg font-bold rounded-md shadow-lg grid-rows-8" x-data="{
                canSelectSquare: @entangle('canSelectSquare')
            }">
            @foreach($this->table as $coordinate => $data)
                <div class="p-4 border transition-all {{ $data['hoverBgColor'] }} {{ $data['bgColor'] }} {{ $data['textColor'] }}"
                    x-data="{
                        selected: false
                    }" x-bind:class="selected ? 'border-2 border-yellow-500 bg-yellow-200 hover:bg-yellow-100' : ''">
                @if ($data['piece'])
                <div
                    @click="canSelectSquare = true; selected = !selected;"
                    @click.away="canSelectSquare = false; selected = false"
                >
                    <x-dynamic-component :component="$data['piece']" class="cursor-pointer" />
                </div>
                @else
                    <div class="p-6"></div>
                @endif
                {{-- <span x-show="canSelectSquare">{{ $coordinate }}</span> --}}
                </div>
            @endforeach
        </div>
    </div>
</div>
