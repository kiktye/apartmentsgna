<x-layout>

    <div class="bg-gna min-h-[80vh] pb-0 md:pb-[55px] flex flex-col items-center justify-center relative overflow-hidden">
        <!-- Building Container -->
        <div class="w-[80%] mx-auto flex justify-center py-7 text-shadowed" id="buildingContainer">
            <div class="flex flex-col sm:flex-row rounded-xl overflow-hidden border border-transparent shadow-3xl">
                {{-- img --}}
                <div class="w-full sm:w-1/2 h-[300px] sm:h-[685px] overflow-hidden">
                    <img class="w-full h-full object-cover object-center"
                        src="{{ asset('storage/' . $building->photo_path) }}" alt="Project Image" draggable="false">
                </div>

                <div class="px-6 py-9 flex flex-col sm:w-1/2">
                    <div class="self-start text-sm font-semibold mb-2">
                        <i class="fa-solid fa-location-dot text-sm"></i> {{ $building->location }}
                    </div>

                    <div class="py-2">
                        <h3 class="text-2xl sm:text-3xl md:text-4xl font-bold truncate">
                            {{ $building->name }}
                        </h3>

                        <p class="text-base sm:text-lg font-semibold text-nowrap">
                            {{ $building->description }}
                        </p>

                        <div class="flex space-x-3 items-center mt-2">
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

                    <div class="mt-4 text-sm font-semibold leading-relaxed mb-3 md:mb-0">
                        <p> {{ $building->details->infoSection1 }} </p>
                        <p class="mt-2">
                            {{ $building->details->infoSection2 }}
                        <ul class="list-disc list-inside mt-2">
                            @foreach (explode('◾', $building->details->infoSection3) as $item)
                                <li>{{ $item }}</li>
                            @endforeach
                        </ul>
                        </p>
                        <p class="mt-2">

                            <ul class="mt-2">
                                @foreach (explode(' - ', $building->details->infoSection4) as $item)
                                    <li>{{ $item }}</li>
                                @endforeach
                            </ul>

                        </p>
                    </div>

                    <div class="mt-auto items-center">
                        <button class="bg-blue-500/20 px-3 py-1 text-xs rounded-xl font-bold"
                            id="detailsButton">Apartment Types</button>
                        <a href="{{ session('back_url', '/') }}"
                            class="bg-green-500/20 px-3 py-1 text-xs rounded-xl font-bold">Back</a>
                    </div>
                </div>
            </div>
        </div>
        

        <!-- Swiper Container -->
        <div class="w-[80%] mx-auto justify-center pt-8 hidden pb-[35px]" id="swiperWrapper">
            <div class="swiper-container flex justify-center items-center overflow-hidden text-shadowed font-semibold shadow-3xl rounded-xl"
                id="swiperContainer">
                <div class="swiper-wrapper">
                    @foreach ($building->apartments as $apartment)
                        <div class="swiper-slide">
                            <div
                                class="flex flex-col sm:flex-row-reverse rounded-xl overflow-hidden border border-transparent">
                                <!-- IMG -->
                                <div class="w-full sm:w-1/2 h-[300px] sm:h-[685px] overflow-hidden">
                                    <img class="w-full h-full object-contain"
                                        src="{{ asset('storage/' . $apartment->photo_path) }}" alt="Project Image"
                                        draggable="false">
                                </div>

                                <div class="px-6 py-9 flex flex-col sm:w-1/2">
                                    <div class="self-start text-sm font-semibold mb-2">
                                        <i class="fa-solid fa-location-dot text-sm"></i>
                                        {{ $apartment->building->location }}
                                    </div>

                                    <div class="py-2">
                                        <h3 class="text-2xl sm:text-3xl md:text-4xl font-bold truncate">
                                            {{ $apartment->building->name }}
                                        </h3>

                                        <p class="text-base sm:text-lg font-semibold text-nowrap">
                                            Apartments: {{ implode(' | ', $apartment->apartments) }}
                                        </p>

                                        <div class="flex space-x-3 items-center mt-2">
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

                                    <div class="mt-4 mb-3 md:mb-0 text-sm sm:text-base leading-relaxed">
                                        <p>Area of the apartment: {{ $apartment->area }} м<sup>2</sup>
                                        </p>

                                        <p class="mt-2">
                                            {{ $apartment->apartment_type }}
                                        </p>

                                        <ul>
                                            @foreach ($apartment->rooms as $room)
                                                <li>{{ $loop->iteration }}. {{ $room->room }}: {{ $room->area }}м<sup>2</sup></li>
                                            @endforeach
                                        </ul>

                                        <p class="mt-2">
                                            {{ $apartment->info }}
                                        </p>

                                    </div>

                                    {{-- <div class="w-full md:w-[80%] overflow-hidden my-5">
                                        <img class="w-full h-full object-contain"
                                            src="{{ asset('storage/' . $apartment->photo_pathTwo) }}" alt="Project Image"
                                            draggable="false">
                                    </div> --}}

                                    <div class="mt-auto items-center">
                                        <button class="bg-green-500/20 px-3 py-1 text-xs rounded-xl font-bold"
                                            id="backButton">Back</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- Pagination -->
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </div>




</x-layout>
