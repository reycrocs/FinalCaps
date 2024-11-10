<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input id="password" class="block mt-1 w-full"
                          type="password"
                          name="password"
                          required autocomplete="current-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me -->
        <div class="block mt-4">
            <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
        </div>

        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="underline text-sm text-pink-600 dark:text-pink-300 hover:text-pink-700 dark:hover:text-pink-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-pink-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif

            <!-- Create Button -->
            <a href="{{ route('view.select-register') }}" class="ml-3 inline-flex items-center px-4 py-2 bg-pink-300 text-white border border-transparent rounded-md font-semibold text-xs uppercase tracking-widest hover:bg-pink-400 focus:outline-none focus:ring-2 focus:ring-pink-500 focus:ring-offset-2 transition ease-in-out duration-150">
                {{ __('Create') }}
            </a>

            <!-- Log In Button -->
            <x-primary-button class="ml-3 bg-teal-300 text-white hover:bg-teal-400 focus:ring-teal-500">
                {{ __('Log In') }}
            </x-primary-button>
        </div>


    </form>
</x-guest-layout>