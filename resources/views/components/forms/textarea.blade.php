@props(['label', 'name'])

@php
    $defaults = [
        'id' => $name,
        'name' => $name,
        'class' => 'rounded-xl bg-white/10 border border-black/10 px-10 py-4 w-full',
    ];
@endphp

<x-forms.field :$label :$name>
    <textarea {{ $attributes($defaults) }}>{{ $attributes->get('value', old($name)) }}</textarea>
</x-forms.field>