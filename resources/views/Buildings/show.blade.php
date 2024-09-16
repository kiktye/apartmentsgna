<x-layout>

    <div class="bg-gna py-10 min-h-[81.3vh]">
        <div
            class="w-[80%] mx-auto flex flex-col md:flex-row space-y-5 md:space-y-0 md:space-x-5 md:border-t md:border-r border-white/5 rounded-xl">
            {{-- Images --}}
            <div class="flex flex-col md:flex-row items-center w-full md:w-1/2">
                <div id="thumbnails"
                    class="flex flex-row md:flex-col space-x-2 md:space-x-0 md:space-y-4 w-full md:w-[12.5%] mr-2 md:mr-0">
                    @foreach ($building->photos as $photo)
                        @if (!$photo->is_main)
                            <img src="{{ asset('storage/' . $photo->photo_path) }}"
                                class="w-16 h-16 md:w-auto md:h-auto rounded opacity-50 hover:opacity-100 hover:scale-110 cursor-pointer transition duration-300"
                                onclick="swapImage(this)" draggable="false">
                        @endif
                    @endforeach
                </div>


                <div class="flex-grow mt-4 md:mt-0 md:ml-4">
                    <img id="mainImage"
                        src="{{ asset('storage/' . $building->photos->where('is_main', true)->first()->photo_path) }}"
                        class="w-full rounded transition duration-300" draggable="false">
                </div>
            </div>

            <!-- Building Information -->
            <div class="flex flex-col w-full md:w-[40%] text-shadowed ">
                <div class="self-start text-sm font-semibold mb-2">
                    <i class="fa-solid fa-location-dot text-sm mt-2"></i> {{ $building->location }}
                </div>

                <div class="py-2">
                    <h3 class="text-3xl md:text-[2.8rem] font-bold uppercase tracking-wider">
                        {{ $building->name }}
                    </h3>

                    <p class="sm:text-sm font-semibold  mb-3 text-xs tracking-widest uppercase">
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

                <!-- Building Details -->
                <div class="mt-4 text-sm font-semibold leading-relaxed mb-3 md:mb-0 text-basic font-hanken-grotesk">
                    <p> {{ $building->details->infoSection1 }} </p>
                    <p class="mt-2">
                        {{ $building->details->infoSection2 }}
                    <ul class="mt-2">
                        @foreach (explode('◾', $building->details->infoSection3) as $item)
                            <li class="flex md:items-center">
                                <svg width="11" height="9" viewBox="0 0 17 16" fill="none"
                                    class="self-start mt-2 mr-2">
                                    <ellipse cx="6.5" cy="6" rx="6" ry="6.5"
                                        transform="rotate(90 6.5 6)" fill="#FFA500" />
                                </svg>
                                {{ $item }}
                            </li>
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

                    <div class="mt-4">
                        <a href="/contact"
                            class="bg-accent py-2 px-4 rounded text-sm text-black tracking-wide uppercase">Contact us</a>
                    </div>

                </div>


            </div>
        </div>

        <h1
            class="font-bold text-center py-10 text-accent text-[45px] leading-relaxed tracking-widest italic uppercase">
            apartments
        </h1>

        <div x-data="{ openModal: null }">
            <!-- Swiper Wrapper -->
            <div class="swiper w-full sm:w-[50%] mx-auto overflow-hidden text-shadowed" id="swiperWrapper">
                <div class="swiper-wrapper">
                    @foreach ($building->apartments as $apartment)
                        <div
                            class="swiper-slide overflow-hidden first:ml-[3.5rem] space-x-0 md:first:ml-0 md:space-x-10">
                            <div class="max-w-xs sm:max-w-sm border border-black rounded-lg">
                                <img class="w-full h-full object-contain rounded-t-lg"
                                    src="{{ asset('storage/' . $apartment->photo_pathTwo) }}" alt="Project Image"
                                    draggable="false">
                                <div class="p-5">
                                    <h5 class="text-xl sm:text-2xl font-bold tracking-widest uppercase">
                                        {{ $apartment->area }} <span class="text-sm">m<sup>2</sup></span>
                                    </h5>
                                    <p class="mb-3 font-medium text-xs tracking-widest uppercase">
                                        Apartments: <span class="text-sm"> {{ implode(' | ', $apartment->apartments) }}
                                        </span>
                                    </p>

                                    <!-- More Info Button -->
                                    <button @click="openModal = {{ $apartment->id }}"
                                        class="bg-accent/50 py-2 px-3 rounded-lg font-semibold text-xs sm:text-sm text-gna uppercase">
                                        Apt. Details
                                    </button>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <!-- Pagination -->
                <div class="swiper-button-prev"></div>
                <div class="swiper-button-next"></div>
            </div>

            <!-- Global Modal (for displaying apartment details) -->
            <div x-show="openModal !== null" class="fixed inset-0 bg-gna/70 flex justify-center items-center z-50"
                style="display: none;" x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 transform scale-100"
                x-transition:enter-end="opacity-100 transform scale-100"
                x-transition:leave="transition ease-in duration-300"
                x-transition:leave-start="opacity-100 transform scale-100"
                x-transition:leave-end="opacity-0 transform scale-100">

                <div class="bg-shadowed text-gna p-6 rounded-lg w-[90%] sm:w-full max-w-lg mx-2 sm:mx-auto">
                    <h3
                        class="text-lg sm:text-xl font-bold text-accent leading-relaxed tracking-widest italic uppercase">
                        Apartment Details</h3>

                    <!-- Apartment Details -->
                    @foreach ($building->apartments as $apartment)
                        <div x-show="openModal === {{ $apartment->id }}">
                            <p class="font-semibold text-xs sm:text-sm tracking-widest uppercase">
                                Area of the apartment:
                                <span class="text-[1rem] sm:text-[1.2rem]">{{ $apartment->area }} м<sup>2</sup></span>
                            </p>

                            <img class="w-full h-full object-contain rounded-t-lg"
                                src="{{ asset('storage/' . $apartment->photo_path) }}" alt="Apartment Image"
                                draggable="false">

                            <p class="mt-2 font-semibold text-xs tracking-widest uppercase">
                                Apartments: <span class="text-sm"> {{ implode(' | ', $apartment->apartments) }}
                                </span>
                            </p>

                            <p class="font-semibold text-xs sm:text-sm tracking-widest uppercase">
                                Apartment type:
                                <span class="text-[1rem]">{{ $apartment->apartment_type }}</span>
                            </p>
                            <ul class="columns-1 sm:columns-2">
                                @foreach ($apartment->rooms as $room)
                                    <li class="font-semibold text-xs sm:text-sm">{{ $loop->iteration }}.
                                        {{ $room->room }}:
                                        <span class="text-[1rem]"> {{ $room->area }} м<sup>2</sup></span>
                                    </li>
                                @endforeach
                            </ul>

                            <p class="mt-2 font-semibold text-xs sm:text-sm tracking uppercase w-full">
                                {{ $apartment->info }}</p>
                        </div>
                    @endforeach

                    <!-- Close Button -->
                    <button @click="openModal = null"
                        class="mt-4 bg-accent/50 py-2 px-3 rounded-lg font-semibold text-xs sm:text-sm text-gna uppercase">
                        Close
                    </button>
                </div>

            </div>
        </div>


    </div>



    <script src="//unpkg.com/alpinejs" defer></script>

    <script>
        function swapImage(thumbnail) {
            const mainImage = document.getElementById('mainImage');

            // Store current main image source
            const currentMainImageSrc = mainImage.src;

            // Swap main image with clicked thumbnail
            mainImage.src = thumbnail.src;
            thumbnail.src = currentMainImageSrc;
        }
    </script>

</x-layout>
