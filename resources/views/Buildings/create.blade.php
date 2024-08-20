<x-layout>

    {{-- <x-page-heading>Upload a Builiding</x-page-heading> --}}
    

    <x-forms.form method="POST" action="/buildings" enctype="multipart/form-data">

        <x-forms.input label="Builiding Name" name="name" placeholder="TWINS" />
        <x-forms.input label="Description" name="description" placeholder="Станбено Деловен Комплекс" />
        <x-forms.input label="Location" name="location" placeholder="Карпош, Струмица" />

        <x-forms.select label="Status" name="status">
            <option>In Progress</option>
            <option>Finished</option>
        </x-forms.select>

        <x-forms.input label="Building Photo" name="photo" type="file" />

        <x-forms.divider />

        {{-- <x-forms.input label="Tags (comma separated)" name="tags" placeholder="laracasts, video, education" /> --}}

        <x-forms.button>Publish</x-forms.button>
    </x-forms.form>

</x-layout>
