@props(['car' => null])

<x-form {{ $attributes }}>
    <x-form-item>
        <x-label required>{{ __('Car brand') }}</x-label>
        <x-input name='brand' value="{{ $car['brand'] ?? '' }}" autofocus />
        <x-error name="brand" />
    </x-form-item>

    <x-form-item>
        <x-label required>{{ __('Car model') }}</x-label>
        <x-input name="model" value="{{ $car['model'] ?? '' }}" />
        <x-error name="model" />
    </x-form-item>

    <x-form-item>
        <x-label>{{ __('Car description') }}</x-label>
        <x-trix name="description" value="{{ $car['description'] ?? '' }}" />
        <x-error name="description" />
    </x-form-item>

    {{ $slot }}
</x-form>
