@if ($showLabel)
<label for="{{ $attributes->get('id') }}" class="control-label">
    @if ($attributes->has('title'))
        {{ $attributes->get('title') }}
    @endif
</label>
@endif
<input
    type="{{ $attributes->get('type') }}"
    class="form-control {{ !$isRounded ?: 'input-rounded' }}"
    name="{{ $attributes->get('name') }}"
    id="{{ $attributes->get('id') }}"
    placeholder="{{ $attributes->get('placeholder') }}"
    {{ $attributes->get('required') }}
    {{ $attributes->get('autofocus') }}
    {{ $attributes->get('autocomplete') }}
>
