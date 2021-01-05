<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="profile_picture_path" value="{{ __('Profile_picture_path') }}" />
                <x-jet-input id="profile_picture_path" class="block mt-1 w-full" type="file" name="profile_picture_path" :value="old('profile_picture_path')" required autofocus autocomplete="profile_picture_path" />
            </div>

            <div class="mt-4">
                <x-jet-label for="first_name" value="{{ __('First_name') }}" />
                <x-jet-input id="first_name" class="block mt-1 w-full" type="first_name" name="first_name" :value="old('first_name')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="last_name" value="{{ __('Last_name') }}" />
                <x-jet-input id="last_name" class="block mt-1 w-full" type="last_name" name="last_name" :value="old('last_name')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="pseudo" value="{{ __('Pseudo') }}" />
                <x-jet-input id="pseudo" class="block mt-1 w-full" type="pseudo" name="pseudo" :value="old('pseudo')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
