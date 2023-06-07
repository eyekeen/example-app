@props(['car' => null])

<x-form {{ $attributes }}>
    <x-form-item>
        <x-label required>{{ __('Car brand') }}</x-label>
        <x-input name='brand' value="{{ $car['brand'] ?? '' }}" autofocus />
    </x-form-item>

    <x-form-item>
        <x-label required>{{ __('Car model') }}</x-label>
        <x-input name="model" value="{{ $car['model'] ?? '' }}" />
    </x-form-item>

    <x-form-item>
        <x-label>{{ __('Car description') }}</x-label>
        <x-trix name="description" value="{{ $car['description'] ?? '' }}" />
    </x-form-item>

    {{ $slot }}
</x-form>
