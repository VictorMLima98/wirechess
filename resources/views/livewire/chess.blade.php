<div class="absolute w-full h-full bg-slate-600">
    <div class="flex items-center justify-center h-screen">
        <div class="grid grid-cols-8 text-lg font-bold rounded-md shadow-lg grid-rows-8">
            @foreach($this->table as $square => $data)
                <div class="p-4 border transition-all {{ $data['hoverBgColor'] }} {{ $data['bgColor'] }} {{ $data['textColor'] }}">
                {{ $data['piece'] }}
                </div>
            @endforeach
        </div>
    </div>
</div>
