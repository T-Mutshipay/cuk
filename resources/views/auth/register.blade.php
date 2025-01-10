<x-guest-layout>
    <form method="POST" action="{{ route('register') }}" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 dark:bg-gray-800">
        @csrf

        <!-- Name -->
        <div class="mb-1">
            <x-input-label for="name" :value="__('Name')" class="text-lg font-semibold" />
            <x-text-input id="name" class="block mt-1 w-full p-2 rounded-md border border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2 text-red-600" />
        </div>

        <!-- Telephone -->
        <div class="mb-4">
            <x-input-label for="telephone" :value="__('Telephone')" class="text-lg font-semibold" />
            <x-text-input id="telephone" class="block mt-1 w-full p-2 rounded-md border border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="text" name="telephone" :value="old('telephone')" required autofocus autocomplete="telephone" />
            <x-input-error :messages="$errors->get('telephone')" class="mt-2 text-red-600" />
        </div>

        <!-- Specialite -->
        <div class="mb-4">
            <x-input-label for="specialite" :value="__('Specialite')" class="text-lg font-semibold" />
            <x-text-input id="specialite" class="block mt-1 w-full p-2 rounded-md border border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="text" name="specialite" :value="old('specialite')" required autofocus autocomplete="specialite" />
            <x-input-error :messages="$errors->get('specialite')" class="mt-2 text-red-600" />
        </div>

        <!-- Email Address -->
        <div class="mb-4">
            <x-input-label for="email" :value="__('Email')" class="text-lg font-semibold" />
            <x-text-input id="email" class="block mt-1 w-full p-2 rounded-md border border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2 text-red-600" />
        </div>

        <!-- Password -->
        <div class="mb-4">
            <x-input-label for="password" :value="__('Password')" class="text-lg font-semibold" />
            <x-text-input id="password" class="block mt-1 w-full p-2 rounded-md border border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="password" name="password" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password')" class="mt-2 text-red-600" />
        </div>

        <!-- Confirm Password -->
        <div class="mb-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="text-lg font-semibold" />
            <x-text-input id="password_confirmation" class="block mt-1 w-full p-2 rounded-md border border-gray-300 shadow-sm focus:border-indigo-500 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" type="password" name="password_confirmation" required autocomplete="new-password" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2 text-red-600" />
        </div>

        <div class="flex items-center justify-between mt-6">
            <a class="inline-block align-baseline font-bold text-sm text-indigo-600 hover:text-indigo-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="bg-indigo-600 hover:bg-indigo-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
