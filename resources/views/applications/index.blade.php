@push('styles')
    <link href="{{ asset('css/plugins/datatables/css/jquery.datatables.min.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/plugins/datatables/css/jquery.datatables_themeroller.css') }}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('css/plugins/x-editable/bootstrap3-editable/css/bootstrap-editable.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('css/plugins/bootstrap-datepicker/css/datepicker3.css') }}" rel="stylesheet" type="text/css"/>
@endpush

@push('scripts')
    <script src="{{ asset('js/plugins/jquery-mockjax-master/jquery.mockjax.js') }}"></script>
    <script src="{{ asset('js/plugins/moment/moment.js') }}"></script>
    <script src="{{ asset('js/plugins/datatables/js/jquery.datatables.min.js') }}"></script>
    <script src="{{ asset('js/plugins/x-editable/bootstrap3-editable/js/bootstrap-editable.js') }}"></script>
    <script src="{{ asset('js/plugins/bootstrap-datepicker/js/bootstrap-datepicker.js') }}"></script>
@endpush

<x-app-layout>
    <div class="page-title">
        <h3>Job Applications</h3>
        <div class="page-breadcrumb">
            <ol class="breadcrumb">
                <li><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li><a href="#">Jobs</a></li>
                <li class="active">Applications</li>
            </ol>
        </div>
    </div>

    <toast-success
        title="{{ session('success-title') ?? $successTitle ?? '' }}"
        body="{{ session('success-body') ?? $successBody ?? '' }}">
    </toast-success>
    <toast-error
        title="{{ session('error-title') ?? $errorTitle ?? '' }}"
        body="{{ session('error-body') ?? $errorBody ?? '' }}">
    </toast-error>

    <div id="main-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">Basic example</h4>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="applicants-listing" class="table" style="width: 100%; cellspacing: 0;">
                                <thead>
                                    <tr>
                                        <th>IDs</th>
                                        <th>Full Name</th>
                                        <th>Address</th>
                                        <th>Applicant's Age</th>
                                        <th>City, State</th>
                                        <th>Preferred Role</th>
                                        <th>Years of Experience</th>
                                        <th>Specialization</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Full Name</th>
                                        <th>Address</th>
                                        <th>Age (DOB)</th>
                                        <th>City, State</th>
                                        <th>Preferred Role</th>
                                        <th>Years of Experience</th>
                                        <th>Specialization</th>
                                        <th></th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($applications as $app)
                                    <tr>
                                        <td>{{ $app->application_id }}</td>
                                        <td>{{ $app->first_name }} {{ $app->last_name }}</td>
                                        <td>{{ $app->address }}</td>
                                        <td>{{ \Carbon\Carbon::parse($app->dob)->age }} years</td>
                                        <td>{{ $app->city }}, {{ $app->state }}</td>
                                        <td>{{ $app->preferred_role }}</td>
                                        <td>{{ $app->total_years_of_xp }}</td>
                                        <td>{{ $app->specialization }}</td>
                                        <td>
                                            <div class="btn-toolbar" role="toolbar" aria-label="Justified action buttons">
                                                <a type="button" class="btn btn-default btn-block">
                                                    <span class="icon icon-pencil"></span>
                                                </a>

                                                <a type="button" class="btn btn-danger btn-block">
                                                    <form method="POST" action="{{ route('admin.application.delete', ['id' => $app->application_id]) }}">
                                                        @csrf
                                                        @method('DELETE')
                                                        <span class="icon icon-trash" onclick="event.preventDefault();
                                                            this.closest('form').submit();"></span>
                                                    </form>
                                                </a>
                                                {{-- <x-button type="button" class="btn-danger">
                                                    <span class="icon icon-trash"></span>
                                                </x-button> --}}
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
