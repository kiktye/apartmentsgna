<x-layout>

<div class="bg-shadowed pt-10 pb-[85px]">
    <x-forms.form action="{{ route('buildings.filter') }}" class="text-shadowed">
        <x-forms.field name="status">
            <x-forms.checkbox
            label="All Buildings"
            name="status"
            value=""
            :active="is_null(request('status')) || request('status') === ''"
            onchange="this.form.submit()"
            :checked="is_null(request('status')) || request('status') === ''"
        />
        </x-forms.field>
        
        <x-forms.field name="status">
            <x-forms.checkbox
                label="In Progress"
                name="status"
                value="In Progress"
                :active="request('status') === 'In Progress'"
                onchange="this.form.submit()"
                :checked="request('status') === 'In Progress'"
            />
        </x-forms.field>
        
        <x-forms.field name="status">
            <x-forms.checkbox
                label="Finished"
                name="status"
                value="Finished"
                :active="request('status') === 'Finished'"
                onchange="this.form.submit()"
                :checked="request('status') === 'Finished'"
            />
        </x-forms.field>
    </x-forms.form>
    
    


    <!-- Display Filtered Buildings -->
    <div class="w-[80%] mx-auto grid lg:grid-cols-3 gap-8">
        @foreach ($buildings as $building)
            <x-building :building="$building" />
        @endforeach
    </div>
</div>


<x-footer> </x-footer>

</x-layout>
