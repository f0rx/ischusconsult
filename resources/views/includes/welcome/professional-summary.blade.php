@push('styles')
    <link href="{{ asset('css/plugins/summernote-master/summernote.css') }}" rel="stylesheet" type="text/css"/>

    {{-- <script src="{{ asset('js/plugins/3d-bold-navigation/js/modernizr.js') }}"></script> --}}
    {{-- <script src="{{ asset('js/plugins/offcanvasmenueffects/js/snap.svg-min.js') }}"></script> --}}
@endpush

@push('scripts')
    <script src="{{ asset('js/plugins/summernote-master/summernote.min.js') }}"></script>
@endpush

<div class="form-group">
    <label class="col-sm-2 control-label">About me</label>
    <div class="col-sm-10">
        <div class="summernote"></div>
    </div>
</div>
