@push('styles')
    <link href="{{ asset('css/plugins/select2/css/select2.min.css') }}" rel="stylesheet" type="text/css"/>
@endpush

@push('scripts')
    <script src="{{ asset('js/plugins/select2/js/select2.min.js') }}"></script>
    <script>
        $(document).ready(function() {
            $('select').select2();

            $(".js-example-basic-multiple-limit").select2({
                maximumSelectionLength: 2
            });

            $(".js-example-tokenizer").select2({
                tags: true,
                tokenSeparators: [',', ' ']
            });

            var data = [{ id: 0, text: 'enhancement' }, { id: 1, text: 'bug' }, { id: 2, text: 'duplicate' }, { id: 3, text: 'invalid' }, { id: 4, text: 'wontfix' }];

            $(".js-example-data-array").select2({
                data: data
            });
        });
    </script>
@endpush

<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/" class="logo-name text-lg text-center">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <x-slot name="subtitle">
            <p class="text-center m-t-md">Create a your account.</p>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors :errors="$errors" />

        <form method="POST" action="{{ route('admin.register') }}">
            @csrf

            <!-- Name -->
            <div class="form-group">
                <x-input id="name" type="text" name="name" placeholder="Full Name" :value="old('name')" required autofocus />
            </div>

            <!-- Email -->
            <div class="form-group">
                <x-input id="email" type="email" name="email" placeholder="Email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="form-group">
                <x-input id="password" type="password" name="password" placeholder="Password" :value="old('password')" required autocomplete="new-password"/>
            </div>

            <!-- Confirm Password -->
            <div class="form-group">
                <x-input id="password_confirmation" type="password" name="password_confirmation" placeholder="Confirm Password" :value="old('password_confirmation')" required/>
            </div>

            <div class="form-group">
                <select class="js-states form-control" tabindex="-1" name="role_id" style="width: 100%">
                    <optgroup label="Administrators">
                        @foreach ($admins as $admin)
                            @if (str_contains($admin->name, "super"))
                                <option value="{{ $admin->id }}" disabled>{{ \Str::title(join(' ', explode('-', $admin->name))) }}</option>
                            @else
                                <option value="{{ $admin->id }}">{{ \Str::title(join(' ', explode('-', $admin->name))) }}</option>
                            @endif
                        @endforeach
                    </optgroup>

                    <optgroup label="Others">
                        @foreach ($roles as $role)
                        <option value="{{ $role->id }}">{{ \Str::title(join(' ', explode('-', $role->name))) }}</option>
                        @endforeach
                    </optgroup>
                </select>
            </div>

            <x-button type="submit" class="btn-success">{{ __('Register') }}</x-button>
            <br>

            @if (Route::has('admin.login'))
                <p class="text-center m-t-xs text-sm">Already have an account?</p>
                <a href="{{ route('admin.login') }}" class="btn btn-default btn-block m-t-md">{{ __('Login Here') }}</a>
            @endif
        </form>
    </x-auth-card>
</x-guest-layout>
