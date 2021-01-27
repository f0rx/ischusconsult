<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/" class="logo-name text-lg text-center">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <x-slot name="subtitle"></x-slot>

        <!-- Validation Errors -->
        <x-auth-session-status :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors :errors="$errors" />

        <form method="POST" action="{{ route('admin.password.update') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('admin.token') }}">

            <!-- Email Address -->
            <div class="form-group">
                <x-input id="email" type="email" name="email" placeholder="Email" :value="old('email', $request->email)" required autofocus />
            </div>

            <!-- Password -->
            <div class="form-group">
                <x-input id="password" type="password" name="password" placeholder="Password" required autocomplete="new-password"/>
            </div>

            <!-- Confirm Password -->
            <div class="form-group">
                <x-input id="password_confirmation" type="password" name="password_confirmation" placeholder="Confirm Password" required/>
            </div>

            <x-button type="submit" class="btn-success">
                {{ __('Reset Password') }}
            </x-button>
        </form>
    </x-auth-card>
</x-guest-layout>
