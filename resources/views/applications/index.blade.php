@push('styles')
    <link href="{{ asset('css/plugins/datatables/css/jquery.datatables.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/plugins/datatables/css/jquery.datatables_themeroller.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('css/plugins/x-editable/bootstrap3-editable/css/bootstrap-editable.css') }}" rel="stylesheet"
        type="text/css">
    <link href="{{ asset('css/plugins/bootstrap-datepicker/css/datepicker3.css') }}" rel="stylesheet" type="text/css" />
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

    <div id="main-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">Job Applications</h4>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="applicants-listing" class="table" style="width: 100%; cellspacing: 0;">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Full Name</th>
                                        <th>Address</th>
                                        <th>Applicant's Age</th>
                                        <th>City, State</th>
                                        <th>Preferred Role</th>
                                        <th>Years of Experience</th>
                                        <th>Specialization</th>
                                        <th>Documents</th>
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
                                        <th>Documents</th>
                                        <th></th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($applications as $application)
                                        <tr>
                                            <td>{{ $application->application_id }}</td>
                                            <td>{{ $application->first_name }} {{ $application->last_name }}</td>
                                            <td>{{ $application->address }}</td>
                                            <td>{{ $application->age ?? \Carbon\Carbon::parse($application->dob)->age }}
                                                years</td>
                                            <td>{{ $application->city }}, {{ $application->state }}</td>
                                            <td>{{ $application->preferred_role }}</td>
                                            <td>{{ $application->total_years_of_xp }}</td>
                                            <td>{{ $application->specialization }}</td>
                                            <td>
                                                @foreach ($application->documents as $doc)

                                                    <a href="{{ asset('storage/' . $doc->full_path) }}">
                                                        Download CV </a>
                                                    {{-- <a
                                                        href="{{ route('admin.application.download', ['document' => $doc]) }}">
                                                        Download CV </a> --}}
                                                @endforeach
                                            </td>
                                            <td>
                                                <div class="btn-toolbar" role="toolbar"
                                                    aria-label="Justified action buttons">
                                                    <a href="{{ route('admin.application.edit', ['application' => $application]) }}"
                                                        class="btn btn-default btn-block">
                                                        <span class="icon icon-pencil"></span>
                                                    </a>

                                                    @role("super-admin|admin")
                                                    <a type="button" class="btn btn-danger btn-block">
                                                        <form method="POST"
                                                            action="{{ route('admin.application.delete', ['application' => $application]) }}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <span class="icon icon-trash" onclick="event.preventDefault();
                                                            this.closest('form').submit();"></span>
                                                        </form>
                                                    </a>
                                                    @endrole
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
