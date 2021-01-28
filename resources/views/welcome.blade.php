@guest
    @push('styles')
        <style>
            .page-header-fixed:not(.page-sidebar-fixed):not(.page-horizontal-bar)
                .page-inner {
                padding: 0px 0 50px 0 !important;
            }
        </style>
    @endpush
@endguest

@prepend('scripts')
<script src="{{ asset('js/plugins/twitter-bootstrap-wizard/jquery.bootstrap.wizard.min.js') }}"></script>
<script src="{{ asset('js/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
@endprepend

<x-app-layout>
    <div class="page-title">
        <h3>Resume Form</h3>
        <div class="page-breadcrumb">
            @auth
                <ol class="breadcrumb">
                    <li><a href="{{ route('admin.dashboard') }}">Home</a></li>
                    <li><a href="#">Jobs</a></li>
                    <li class="active">Request Form Wizard</li>
                </ol>
            @endauth
        </div>
    </div>
    <div id="main-wrapper">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-white">
                    <div class="panel-body">
                        <div id="rootwizard">
                            <ul class="nav nav-tabs" role="tablist">
                                <x-welcome.tab :is-active="true" id="personal-details" icon-class="fa fa-user">Personal Details</x-welcome.tab>
                                <x-welcome.tab :is-active="false" id="professional-summary" icon-class="fa fa-truck">Professional Summary</x-welcome.tab>
                                <x-welcome.tab :is-active="false" id="employment-history" icon-class="fa fa-user">Employment History</x-welcome.tab>
                                <x-welcome.tab :is-active="false" id="education" icon-class="fa fa-truck">Education</x-welcome.tab>
                                <x-welcome.tab :is-active="false" id="finish" icon-class="fa fa-check">Finish</x-welcome.tab>
                            </ul>


                            <div class="progress progress-sm m-t-sm">
                                <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                </div>
                            </div>

                            <form id="wizardForm" action="{{ route('application.store') }}" method="POST">
                                @csrf

                                <div class="tab-content">
                                    <x-welcome.tab-content id="personal-details" :is-active="true">
                                        @include('includes.welcome.personal-details')
                                    </x-welcome.tab-content>

                                    <x-welcome.tab-content id="professional-summary" :is-active="false">
                                        @include('includes.welcome.professional-summary')
                                    </x-welcome.tab-content>

                                    <x-welcome.tab-content id="employment-history" :is-active="false">
                                        @include('includes.welcome.employment-history')
                                    </x-welcome.tab-content>

                                    <x-welcome.tab-content id="education" :is-active="false">
                                        @include('includes.welcome.education')
                                    </x-welcome.tab-content>

                                    <x-welcome.tab-content id="finish" :is-active="false">
                                        @include('includes.welcome.finish')
                                    </x-welcome.tab-content>

                                    <ul class="pager wizard">
                                        <li class="previous"><a href="#" class="btn btn-default">Previous</a></li>
                                        <li class="next"><a href="#" class="btn btn-default">Next</a></li>
                                    </ul>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- Row -->
    </div><!-- Main Wrapper -->
</x-app-layout>
