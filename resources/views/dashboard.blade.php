@push('styles')
    <link href="{{ asset('css/plugins/weather-icons-master/css/weather-icons.min.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('css/plugins/metrojs/MetroJs.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/plugins/toastr/toastr.min.css') }}" rel="stylesheet" type="text/css" />

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
    <!-- Session Status -->
    <x-auth-session-status :status="session('status')" />

    <div class="page-title">
        <h3>Dashboard</h3>
        <div class="page-breadcrumb">
            <ol class="breadcrumb">
                <li><a href="{{ route('admin.dashboard') }}">Home</a></li>
                <li class="active">Dashboard</li>
            </ol>
        </div>
    </div>
    <div id="main-wrapper">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="panel info-box panel-white">
                    <div class="panel-body">
                        <div class="info-box-stats">
                            <p class="counter">1</p>
                            <span class="info-box-title">User activity this month</span>
                        </div>
                        <div class="info-box-icon">
                            <i class="icon-users"></i>
                        </div>
                        <div class="info-box-progress">
                            <div class="progress progress-xs progress-squared bs-n">
                                <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- <div class="col-lg-3 col-md-6">
                <div class="panel info-box panel-white">
                    <div class="panel-body">
                        <div class="info-box-stats">
                            <p class="counter">340,230</p>
                            <span class="info-box-title">Page views</span>
                        </div>
                        <div class="info-box-icon">
                            <i class="icon-eye"></i>
                        </div>
                        <div class="info-box-progress">
                            <div class="progress progress-xs progress-squared bs-n">
                                <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80"
                                    aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

            <div class="col-sm-12 col-md-12">
                <div class="panel panel-white">
                    <div class="panel-heading clearfix">
                        <h4 class="panel-title">{{ config('app.name') }} Mods</h4>
                    </div>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table id="applicants-listing" class="table" style="width: 100%; cellspacing: 0;">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Full Name</th>
                                        <th>Email</th>
                                        <th>Gender</th>
                                        <th>Phone</th>
                                        <th>Roles</th>
                                        <th>Permissions</th>
                                        @role('super-admin')
                                        <th></th>
                                        @endrole
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>ID</th>
                                        <th>Full Name</th>
                                        <th>Email</th>
                                        <th>Gender</th>
                                        <th>Phone</th>
                                        <th>Roles</th>
                                        <th>Permissions</th>
                                        @role('super-admin')
                                        <th></th>
                                        @endrole
                                    </tr>
                                </tfoot>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->id }}</td>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                            <td>{{ $user->gender }}</td>
                                            <td>{{ $user->phone }}</td>
                                            <td>
                                                @foreach ($user->getRoleNames() as $role)
                                                    {{ \Str::title(join(' ', explode('-', $role))) }}{{ $loop->last ? '' : ',' }}
                                                @endforeach
                                            </td>
                                            <td>
                                                <ul>
                                                    @foreach ($user->getPermissionsViaRoles() as $perm)
                                                        <li>
                                                            Can
                                                            {{ join(' ', explode('-', $perm->name)) }}{{ $loop->last ? '' : ',' }}
                                                        </li>
                                                    @endforeach
                                                </ul>
                                            </td>
                                            @role('super-admin')
                                            <td>
                                                <div class="btn-toolbar" role="toolbar"
                                                    aria-label="Justified action buttons">
                                                    <a href="{{ route('admin.edit', ['user' => $user]) }}"
                                                        class="btn btn-default btn-block">
                                                        <span class="icon icon-pencil"></span>
                                                    </a>

                                                    <a type="button" class="btn btn-danger btn-block">
                                                        <form method="POST"
                                                            action="{{ route('admin.delete', ['user' => $user]) }}">
                                                            @csrf
                                                            @method('DELETE')
                                                            <span class="icon icon-trash" onclick="event.preventDefault();
                                                            this.closest('form').submit();"></span>
                                                        </form>
                                                    </a>
                                                </div>
                                            </td>
                                            @endrole
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Row -->
    </div><!-- Main Wrapper -->
</x-app-layout>
