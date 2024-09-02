@props(['label' => null, 'name'])

<div class="flex flex-col justify-center">
    @if ($label)
        <x-forms.label :name="$name" :label="$label" />
    @endif

    {{ $slot }}
</div>