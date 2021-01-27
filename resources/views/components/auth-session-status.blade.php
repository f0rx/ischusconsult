@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'alert alert-success fade in']) }} role="alert">
        {{ $status }}
    </div>
@endif
