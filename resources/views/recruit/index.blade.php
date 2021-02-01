<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="-----" />
    <meta name="keywords" content="resume,CV,portfolio,Resume,cv,job,application,job-application" />
    <meta name="author" content="Brendan Ejike (github.com@@f0rx)" />

    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}">

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
            body="{{ session('success-body') ?? ($successBody ?? '') }}"
            position="{{ session('success-position') ?? ($successPosition ?? '') }}">
        </toast-success>
        <toast-error title="{{ session('error-title') ?? ($errorTitle ?? '') }}"
            body="{{ session('error-body') ?? ($errorBody ?? '') }}"
            position="{{ session('error-position') ?? ($errorPosition ?? '') }}">
        </toast-error>

        <!-- Entry point -->
        <recruit-page app-url="{{ config('app.url') }}"
            action="{{ $application == null ? route('application.store') : route('application.update', ['application' => $application]) }}"
            is-updating="{{ $application != null }}" csrf-token="{{ csrf_token() }}"
            session="{{ \Session::get('errors') }}"
            first-name="{{ old('first_name') ?? ($application->first_name ?? null) }}"
            last-name="{{ old('last_name') ?? ($application->last_name ?? null) }}"
            email="{{ old('email') ?? ($application->email ?? null) }}"
            phone="{{ old('phone') ?? ($application->phone ?? null) }}"
            marital-status="{{ old('marital_status') ?? ($application->marital_status ?? null) }}"
            age="{{ old('age') ?? ($application->age ?? null) }}"
            address="{{ old('address') ?? ($application->address ?? null) }}"
            city="{{ old('city') ?? ($application->city ?? null) }}"
            state="{{ old('state') ?? ($application->state ?? null) }}"
            gender="{{ old('gender') ?? ($application->gender ?? null) }}"
            preferred-role="{{ old('preferred_role') ?? ($application->preferred_role ?? null) }}"
            recent-job-title="{{ old('recent_job_title') ?? ($application->recent_job_title ?? null) }}"
            total-years-of-xp="{{ old('total_years_of_xp') ?? ($application->total_years_of_xp ?? null) }}"
            summary="{{ old('summary') ?? ($application->summary ?? null) }}">
        </recruit-page>

    </div>

    <script src="{{ asset('js/recruit.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>

    @stack('scripts')
</body>

</html>
