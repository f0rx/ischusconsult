@component('mail::message')
    # Hello {{ $jobApplication->full_name }},

    Your application was received!

    Click the button below to modify your response, or copy the link here -
    {{ route('application.edit', ['application' => $jobApplication]) }}

    To preview your response, copy the link to your browser -
    {{ route('application.show', ['application' => $jobApplication]) }}

    @component('mail::button', ['url' => route('application.edit', ['application' => $jobApplication])])
        Modify Response
    @endcomponent

    Thanks,
    {{ config('app.name') }}
@endcomponent
