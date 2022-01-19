<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Wales') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;700;900&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        {{-- Favicon --}}
        <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}" />

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>

        @include('includes.head')
    </head>
    <body dir="rtl" class="overflow-hidden">

        <div x-data="{ sidebarOpen: false }" class="relative flex h-screen overflow-hidden text-gray-800 bg-white font-roboto">
            @include('includes.sidebar')

            <div class="flex flex-col flex-1 overflow-hidden bg-gray-100">
                @include('includes.header')

                <main class="flex-1 overflow-y-auto">
                    <div class="px-4 py-8 sm:px-6" :class="sidebarOpen ? 'container mx-auto' : ''">
                        <div>
                            <h1 class="text-2xl font-medium text-gray-700 sm:text-3xl">@stack('title')</h1>

                            <div class="hidden mt-3 overflow-y-auto text-sm lg:items-center lg:flex whitespace-nowrap">
                                <a href="{{route('dashboard')}}" class="text-indigo-600 dark:text-gray-200 hover:underline">
                                    لوحة التحكم
                                </a>

                                <span class="mx-1 text-gray-500 dark:text-gray-300">
                                    /
                                </span>

                                @stack('breadcrumb')
                            </div>
                        </div>

                        <div class="mt-6">
                            @yield('body')
                        </div>
                    </div>
                </main>
            </div>
        </div>

        <!-- Scripts -->
        @include('includes.scripts')
        @include('includes.messages')
    </body>
</html>



