@props(['post' => null])



<x-form {{ $attributes }}>
    <x-form-item>
        <x-label required>{{ __('Post title') }}</x-label>
        <x-input name='title' value="{{ $post['title'] ?? '' }}" autofocus />
        <x-error name="title" />
    </x-form-item>

    <x-form-item>
        <x-label required>{{ __('Post content') }}</x-label>
        <x-trix name="content" value="{{ $post['content'] ?? '' }}" />
        <x-error name="content" />
    </x-form-item>

    <x-form-item>
        <x-label required>{{ __('Publication date') }}</x-label>
        <x-input name="published_at" placeholder="dd.mm.yyyy" />
        <x-error name="published_at" />
    </x-form-item>

    <x-form-item>
        <x-checkbox name="published">
            Published
        </x-checkbox>
    </x-form-item>

   {{ $slot }}
</x-form>
