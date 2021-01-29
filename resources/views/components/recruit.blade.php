<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="-----" />
    <meta name="keywords" content="resume,CV,portfolio,Resume,cv,job,application,job-application" />
    <meta name="author" content="Brendan Ejike (github.com@@f0rx)" />

    <title>{{ config('app.name') }}</title>

    <link rel="stylesheet" href="{{ asset('css/recruit.css') }}">

    @stack('styles')

</head>

<body>

    <div class="luna-loader-container">
        <div class="luna-loader"></div>
    </div>

    <div class='luna-signup-container' id="app">

        <div class="luna-signup-left-overlay"></div>

        <toast-success title="{{ session('success-title') ?? ($successTitle ?? '') }}"
            body="{{ session('success-body') ?? ($successBody ?? '') }}">
        </toast-success>
        <toast-error title="{{ session('error-title') ?? ($errorTitle ?? '') }}"
            body="{{ session('error-body') ?? ($errorBody ?? '') }}">
        </toast-error>

        {{ $slot }}

    </div>

    <script src="{{ asset('js/recruit.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>

    @stack('scripts')
</body>

</html>
