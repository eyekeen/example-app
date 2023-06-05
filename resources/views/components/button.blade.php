@props(['color' => 'primary', 'size' => ''])

<button {{ $attributes->class([ "btn btn-{$color} btn-{$size}" ])->merge([
        'type' => 'button'
    ]) }}>
    {{ $slot }}
</button>