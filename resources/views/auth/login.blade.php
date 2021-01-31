<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/" class="logo-name text-lg text-center">
                <x-application-logo class="w-8 h-8 fill-current text-gray-500" />
            </a>
        </x-slot>

        <x-slot name="subtitle">
            <p class="text-center m-t-md">Please login into your account.</p>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors :errors="$errors" />

        <form method="POST" action="{{ route('admin.login') }}">
            @csrf

            <div class="form-group">
                <x-input id="email" type="email" name="email" placeholder="Email" :value="old('email')" required
                    autofocus />
            </div>

            <div class="form-group">
                <x-input id="password" type="password" name="password" placeholder="Password" :value="old('password')"
                    required autocomplete="current-password" />
            </div>

            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <div class="checkbox">
                        <label>
                            <input id="remember_me" type="checkbox" name="remember"> Remember me
                        </label>
                    </div>
                </div>
            </div>

            <x-button type="submit" class="btn-success">{{ __('Login') }}</x-button>

            @if (Route::has('admin.password.request'))
                <a href="{{ route('admin.password.request') }}" class="display-block text-center m-t-md text-sm">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            @hasanyrole('super-admin|admin')
            @if (Route::has('admin.register'))
                <p class="text-center m-t-xs text-sm">Do not have an account?</p>
                <a href="{{ route('admin.register') }}" class="btn btn-default btn-block m-t-md">Create an account</a>
            @endif
            @endhasanyrole
        </form>
    </x-auth-card>
</x-guest-layout>
