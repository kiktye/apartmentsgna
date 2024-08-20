@props(['building'])

<a href="/buildings/{{ $building->id }}">
    <div
        class="flex flex-col bg-black/10 rounded-xl overflow-hidden border border-transparent hover:border-blue-800 group transition-colors duration-300 mt-4 shadow-card h-full">

        <div class="w-full h-[425px] overflow-hidden">
            <img class="w-full h-full object-cover object-center" src="{{ asset('storage/' . $building->photo_path) }}"
                alt="Project Image" draggable="false">
        </div>

        <div class="p-4 flex flex-col">
            <div class="self-start text-sm font-semibold">
                <i class="fa-solid fa-location-dot text-sm"></i> {{ $building->location }}
            </div>

            <div class="py-4 text-center">
                <h3 class="group-hover:text-blue-800 text-2xl font-bold transition-colors duration-300">
                    {{ $building->name }}
                </h3>

                <p class="text-xs mt-3 font-semibold">{{ $building->description }}</p>
            </div>

            <div class="flex space-x-3 items-center mt-auto">
                @if ($building->status == 'In Progress')
                    <div
                        class="bg-accent/20 cursor-default px-3 py-1 text-xs rounded-xl font-bold transition-colors duration-300">
                        {{ $building->status }}
                    </div>
                @elseif ($building->status == 'Finished')
                    <div
                        class="bg-green-500/20 cursor-default px-3 py-1 text-xs rounded-xl font-bold transition-colors duration-300">
                        {{ $building->status }}
                    </div>
                @endif
            </div>
        </div>
    </div>
</a>
