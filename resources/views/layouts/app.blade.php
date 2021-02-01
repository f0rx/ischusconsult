<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="-----" />
    <meta name="keywords" content="resume,CV,portfolio,Resume,cv,job,application,job-application" />
    <meta name="author" content="Brendan Ejike (@@f0rx)" />

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

    <!-- Styles -->
    <link href="{{ asset('css/plugins/pace-master/themes/blue/pace-theme-flash.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/plugins/uniform/css/uniform.default.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/plugins/fontawesome/css/font-awesome.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/plugins/line-icons/simple-line-icons.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/plugins/offcanvasmenueffects/css/menu_cornerbox.css') }}" rel="stylesheet"
        type="text/css" />
    <link href="{{ asset('css/plugins/waves/waves.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/plugins/switchery/switchery.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/plugins/3d-bold-navigation/css/style.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/plugins/slidepushmenus/css/component.css') }}" rel="stylesheet" type="text/css" />
    @stack('styles')

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:/// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
</head>

<body class="font-nunito antialiased page-header-fixed">
    <div class="overlay"></div>

    {{-- @auth
    @include('layouts.chat')
    @endauth --}}

    <!-- Page Content -->
    <main id="app" class="page-content content-wrap">
        @auth
            @include('layouts.top-nav')
        @endauth

        @auth
            @include('layouts.side-nav')
        @endauth

        <toast-success title="{{ session('success-title') ?? ($successTitle ?? '') }}"
            body="{{ session('success-body') ?? ($successBody ?? '') }}"
            position="{{ session('success-position') ?? ($successPosition ?? '') }}">
        </toast-success>
        <toast-error title="{{ session('error-title') ?? ($errorTitle ?? '') }}"
            body="{{ session('error-body') ?? ($errorBody ?? '') }}"
            position="{{ session('error-position') ?? ($errorPosition ?? '') }}">
        </toast-error>

        <div class="page-inner">
            {{ $slot }}

            <x-footer></x-footer>
        </div>
    </main>

    {{-- @auth
    @include('layouts.bottom-navigation')
    @endauth --}}

    <!-- Scripts -->
    <script src="{{ asset('js/plugins/jquery/jquery-2.1.4.min.js') }}"></script>
    <script src="{{ asset('js/plugins/jquery-ui/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/plugins/pace-master/pace.min.js') }}"></script>
    <script src="{{ asset('js/plugins/jquery-blockui/jquery.blockui.js') }}"></script>
    <script src="{{ asset('js/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}"></script>
    <script src="{{ asset('js/plugins/switchery/switchery.min.js') }}"></script>
    <script src="{{ asset('js/plugins/uniform/jquery.uniform.min.js') }}"></script>
    <script src="{{ asset('js/plugins/offcanvasmenueffects/js/classie.js') }}"></script>
    {{-- <script src="{{ asset('js/plugins/offcanvasmenueffects/js/main.js') }}"></script> --}}
    <script src="{{ asset('js/plugins/waves/waves.min.js') }}"></script>
    <script src="{{ asset('js/plugins/3d-bold-navigation/js/main.js') }}"></script>
    @stack('scripts')
    <!-- Main JS -->
    {{-- <script src="{{ asset('js/app.js') }}" defer></script> --}}
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/admin.js') }}"></script>
</body>

</html>
