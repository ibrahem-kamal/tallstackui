@php
    $tag = $href ? 'a' : 'button';
    $personalize = $classes();
@endphp

<{{ $tag }} @if ($href) href="{{ $href }}" @else role="button" @endif {{ $attributes->class([
        $personalize['wrapper.base'],
        $personalize['wrapper.sizes.' . $size],
        $colors['background']
    ]) }} @if ($livewire && $loading) wire:loading.attr="disabled" wire:loading.class="!cursor-wait" @endif>
@if ($icon)
    <x-dynamic-component :component="TallStackUi::component('icon')"
                         :$icon
                         :attributes="$removable"
                         @class([$personalize['icon.sizes.' . $size], $colors['icon']]) />
@else
    <span @if ($livewire && $loading) wire:loading.remove @endif @class([$personalize['text.sizes.' . $size]])>{{ $text ?? $slot }}</span>
@endif
@if ($livewire && $loading)
    <x-tallstack-ui::icon.generic.loading-button :$loading :$delay @class([
        'animate-spin',
        $personalize['icon.sizes.' . $size],
        $colors['icon']
    ]) />
@endif
</{{ $tag }}>
