<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/" class="logo-name text-lg text-center">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <x-slot name="subtitle">
            {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-session-status :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors :errors="$errors" />

        <div class="mt-4 flex items-center justify-between">
            <form method="POST" action="{{ route('admin.verification.send') }}">
                @csrf

                <x-button type="submit" class="btn-success">
                    {{ __('Resend Verification Email') }}
                </x-button>
            </form>

            <form method="POST" action="{{ route('admin.logout') }}">
                @csrf

                <x-button type="submit" class="btn-warning btn-addon m-b-sm btn-rounded">
                    <i class="fa fa-sign-out"></i>
                    {{ __('Logout') }}
                </x-button>
            </form>
        </div>
    </x-auth-card>
</x-guest-layout>
