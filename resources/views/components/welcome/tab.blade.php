<li role="presentation" class="{{ !$isActive ?: 'active' }}">
    <a href="#{{ $id }}" data-toggle="tab">
        <i class="{{ $iconClass }} m-r-xs"></i>
        {{ $slot }}
    </a>
</li>
