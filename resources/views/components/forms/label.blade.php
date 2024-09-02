@props(['name', 'label'])

<div class="inline-flex items-center gap-x-2 mb-2">
    <span class="w-2 h-2 bg-accent/70 inline-block"></span>
    <label class="font-semibold text-gna text-xs tracking-widest uppercase" for="{{ $name }}">{{ $label }}</label>
</div>