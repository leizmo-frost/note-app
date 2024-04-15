<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-8 bg-gray-800 dark:bg-gray-900">
        <div class="max-w-3xl mx-auto">
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-md overflow-hidden">
                <div class="p-6 text-gray-800 dark:text-gray-100">
                    <p class="text-lg mb-4">{{ __("Welcome back!") }}</p>
                    <p class="text-gray-600 dark:text-gray-400">{{ __("You're logged in!") }}</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
