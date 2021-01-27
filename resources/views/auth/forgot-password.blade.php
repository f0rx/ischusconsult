<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/" class="logo-name text-lg text-center">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <x-slot name="subtitle">
            <p class="text-center m-t-md">
                {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </p>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors :errors="$errors" />

        <form method="POST" action="{{ route('admin.password.email') }}">
            @csrf

            <!-- Email Address -->
            <div class="form-group">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" type="email" name="email" placeholder="Email" :value="old('email')" required autofocus />
            </div>

            <x-button type="submit" class="btn-success">
                {{ __('Email Password Reset Link') }}
            </x-button>
        </form>
    </x-auth-card>
</x-guest-layout>
