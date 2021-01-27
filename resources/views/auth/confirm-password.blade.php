<x-guest-layout>
    <x-auth-card>
        <div class="user-box m-t-lg row">
            <x-slot name="logo">
                <div class="col-md-12 m-b-md">
                    <img src="{{ asset('images/profile-menu-image.png') }}" class="img-circle" style="display: flex; margin: auto;" alt="">
                </div>
            </x-slot>

            <x-slot name="subtitle">
                <p class="text-center m-t-md">
                    <p class="lead no-m text-center">{{ __('Welcome Back, Brendan!') }}</p>
                    <p class="text-sm text-center">{{ __('This is a secure area of the application. Please confirm your password before continuing.') }}</p>
                </p>
            </x-slot>

            <!-- Validation Errors -->
            <x-auth-validation-errors class="mb-4" :errors="$errors" />

            <form method="POST" action="{{ route('admin.password.confirm') }}">
                @csrf

                <div class="input-group">
                    <input type="password" class="form-control"
                        placeholder="Password"
                        name="password"
                        required
                        autocomplete="current-password">

                    <div class="input-group-btn">
                        <button type="submit" class="btn btn-success">
                            Submit
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </x-auth-card>
</x-guest-layout>
