<x-guest-layout>
    <x-authentication-card>
    {{ ('You must change your password') }}
        <x-slot name="logo">
        
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

        @if (session('success'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('success') }}
            </div>
        @endif

        <form method="POST" action="{{ route('passwords.updated') }}">
            @csrf

            <div class="mt-4">
                <x-label for="current_password" value="{{ ('Current Password') }}" />
                <x-input id="current_password" class="block mt-1 w-full @error('current_password') is-invalid @enderror" type="password" name="current_password"  required  autocomplete="current-password" />
                @error('current_password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror 
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ ('New Password') }}" />
                <x-input id="password" class="block mt-1 w-full @error('password') is-invalid @enderror" type="password" name="password" required autocomplete="new-password" />
                @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
            </div>

            <div class="mt-4">
                <x-label for="password_confirmation" value="{{ ('Confirm New Password') }}" />
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                

                <x-button type="submit" class="ml-4">
                    {{ __('Change Password') }}
                </x-button>
            </div>
        </form>
    </x-authentication-card>
</x-guest-layout>