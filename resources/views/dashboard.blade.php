<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100 flex items-center">
                    <span>{{ __("You're logged as ") }}</span>
                    <span x-data="{{ json_encode(['role' => auth()->user()->role]) }}" x-text="role" x-on:profile-updated.window="role = $event.detail.role" class="ml-2"></span>
                </div>
            </div>
        </div>
    </div>
    
</x-app-layout>
