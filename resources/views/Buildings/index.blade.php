<x-layout>
    <x-main> </x-main>

    <x-success> </x-success>

    <div class="bg-shadowed pt-10 pb-[85px]" id="apartments">

        <div class="w-[80%] mx-auto grid lg:grid-cols-3 gap-8 ">
            @foreach ($buildings as $building)
                <x-building :building="$building" />
            @endforeach
        </div>

    </div>

    <x-footer> </x-footer>

</x-layout>
