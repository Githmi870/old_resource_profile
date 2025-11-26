<x-app-layout :hideNavigation="true">
    @vite ('resources/js/pages/user_con.js')

    <x-slot name="header">
        <div class="flex items-center justify-between py-4 px-6">
            <div class="flex items-center space-x-4">
                <x-application-logo class="h-10 w-10 text-gray-800 dark:text-white" />

                <h1 class="text-2xl font-semibold text-gray-800 dark:text-white leading-tight">
                    {{ __('Admin Dashboard') }}
                </h1>
            </div>

            <div class="flex items-center">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 dark:text-gray-400 bg-white dark:bg-gray-800 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>
                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault(); this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>
        </div>
    </x-slot>



    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <h2 class="text-2xl font-bold mb-8 text-center">User Management</h2>
                    <div class="space-x-5">
                        <x-danger-button id="allDeny" class="mb-5">Deny All Users</x-danger-button>
                        <x-danger-button id="allApprove" class="mb-5">Approve All Users</x-danger-button>
                    </div>
                    <div>
                        <div class="overflow-x-auto w-full">
                            <table class="min-w-full table-auto border-collapse border border-gray-300">
                                <thead class="bg-gray-100 dark:bg-gray-800">
                                    <tr>
                                        <th class="px-4 py-2 border text-left text-md font-medium text-gray-700 dark:text-gray-200">Name</th>
                                        <th class="px-4 py-2 border text-left text-md font-medium text-gray-700 dark:text-gray-200">Email</th>
                                        <th class="px-4 py-2 border text-left text-md font-medium text-gray-700 dark:text-gray-200">Status</th>
                                        <th class="px-4 py-2 border text-left text-md font-medium text-gray-700 dark:text-gray-200">Actions</th>
                                    </tr>
                                </thead>
                                <tbody id="userTableBody" class="text-md text-gray-800 dark:text-gray-100">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>