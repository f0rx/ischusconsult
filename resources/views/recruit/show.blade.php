<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="-----" />
    <meta name="keywords" content="resume,CV,portfolio,Resume,cv" />
    <meta name="author" content="Brendan Ejike (@@f0rx)" />

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    <title>{{ config('app.name', 'Ischus Consult') }}</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('css/preview.css') }}">
    @stack('styles')

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:/// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body>
    <!-- Preloader -->
    <div class="loader">
        <!-- Loader inner -->
        <div class="loader-inner">
            <div class="sk-cube-grid">
                <div class="sk-cube sk-cube1"></div>
                <div class="sk-cube sk-cube2"></div>
                <div class="sk-cube sk-cube3"></div>
                <div class="sk-cube sk-cube4"></div>
                <div class="sk-cube sk-cube5"></div>
                <div class="sk-cube sk-cube6"></div>
                <div class="sk-cube sk-cube7"></div>
                <div class="sk-cube sk-cube8"></div>
                <div class="sk-cube sk-cube9"></div>
            </div>
        </div>
        <!-- End loader inner -->
    </div>
    <!-- End preloader-->

    <!--Wrapper-->
    <div id="app">
        <!--Home section-->
        <section id="home" class="home">
            <!--Block content-->
            <div class="block-content">
                <div class="block-teaser block-background-image large overlay"
                    data-background="{{ asset('images/landscape.png') }}">
                    <!--Container-->
                    <div class="container">
                        <!--Row-->
                        <div class="row">
                            <div class="col-sm-12">
                                <h1 class="white">{{ $application->full_name }}</h1>
                                <h3 class="mt-20 white mb-200">{{ $application->recent_job_title }}</h3>
                            </div>
                        </div>
                        <!--End row-->

                        <!--Row-->
                        <div class="row">
                            <div class="col-sm-6">
                                <a href="{{ $application->cv != null ? asset('storage/' . $application->cv->full_path) : '#' }}"
                                    class="but opc ico white"><i class="icon-print-1"></i>Print Out My CV</a>
                            </div>

                            <div class="col-sm-6 t-right">
                                <p class="white short-email">
                                    Send an e-mail to
                                    <a href="mailto:{{ $application->email }}">{{ $application->email }}</a>
                                </p>
                            </div>
                        </div>
                        <!--End row-->
                    </div>
                    <!--End container-->
                </div>
            </div>
            <!--End block content-->
        </section>
        <!--End home section-->

        <!--About section-->
        <section id="about" class="about">
            <!--Block content-->
            <div class="block-content clearfix">
                <div class="block-about one bg-grey-1">
                    <div class="block-title">
                        <h2 class="title">Who am I ?</h2>
                    </div>

                    <p class="mt-20">
                        {{ $application->summary ?? 'My name is ' . $application->full_name . '. Previously working as ' . $application->recent_job_title . '.' }}
                    </p>

                    <a href="{{ $application->cv != null ? asset('storage/' . $application->cv->full_path) : '#' }}"
                        class="but brd ico white mt-30"><i class="icon-down-circled2"></i>Download My CV</a>
                </div>

                <div class="block-about two bg-grey-2">
                    <div class="block-title">
                        <h2 class="title">Personal Info</h2>
                    </div>

                    <ul class="mt-40 info">
                        @if ($application->dob != null)
                            <li><span>Birthdate</span> :
                                {{ \Carbon\Carbon::parse($application->dob)->format('Y-m-d') }}</li>
                        @else
                            <li><span>Age</span> : {{ $application->age }} years</li>
                        @endif
                        <li><span>Gender</span> : {{ Str::title($application->gender) }}</li>
                        <li><span>Phone</span> : {{ $application->phone }}</li>
                        <li><span>Email</span> : {{ $application->email }}</li>
                        <li><span>Address</span> : {{ $application->address }}</li>
                        <li><span>City, State</span> : {{ $application->city }}, {{ $application->state }}</li>
                        <li><span>Marital Status</span> : {{ $application->marital_status }}</li>
                    </ul>
                </div>

                <div class="block-about three bg-grey-1">
                    <div class="block-title">
                        <h2 class="title">Work Experience</h2>
                    </div>

                    <div class="block-expertise mt-40">
                        <div class="expertise mb-20 clearfix">
                            <div class="exp-ico">
                                <span class="ico">
                                    <i class="ic-flag"></i>
                                </span>
                            </div>

                            <div class="exp-det">
                                <h6>Most Recent Job Title</h6>
                                <p>{{ $application->recent_job_title }}</p>
                            </div>
                        </div>

                        <div class="expertise mb-20 clearfix">
                            <div class="exp-ico">
                                <span class="ico">
                                    <i class="ic-lock"></i>
                                </span>
                            </div>
                            <div class="exp-det">
                                <h6>Years of Experience</h6>
                                <p>{{ $application->total_years_of_xp }} years</p>
                            </div>
                        </div>

                        <div class="expertise mb-20 clearfix">
                            <div class="exp-ico">
                                <span class="ico">
                                    <i class="ic-briefcase"></i>
                                </span>
                            </div>
                            <div class="exp-det">
                                <h6>Your Preferred Role</h6>
                                <p>{{ Str::title($application->preferred_role) }}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--End block content-->
        </section>
        <!--End about section-->

        <!--Footer-->
        <footer class="footer t-center pt-60 pb-60">
            <!--Container-->
            <div class="container">
                <!--Row-->
                <div class="row">
                    <div class="col-md-12">
                        <x-footer class="pt-20"></x-footer>
                    </div>
                </div>
                <!--End row-->
            </div>
            <!--End container-->
        </footer>
        <!--End footer-->
    </div>
    <!--End wrapper-->

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/preview.js') }}"></script>
    @stack('scripts')
</body>

</html>
