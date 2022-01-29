@extends('layouts.app')

@push('title')
    الأبار
@endpush
@push('breadcrumb')
    <a href="#" class="text-gray-600 dark:text-gray-200 hover:underline">
        الأبار
    </a>
@endpush
@push('css')
    <link rel="stylesheet" href="{{ asset('vendor/css/datatables.min.css') }}">
@endpush
@section('body')



    <div class="mt-6">
        <div class="p-4 bg-white rounded-lg shadow-sm xl:p-8">
            <div class="space-y-3 sm:flex sm:items-start sm:space-y-0 sm:justify-between">
                <h2 class="text-lg font-medium text-gray-700 capitalize sm:text-xl md:text-2xl">الأبار</h2>

                <a href="{{ route('basic-informations.create') }}"
                    class="flex items-center justify-center px-3 py-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-md dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                            clip-rule="evenodd"></path>
                    </svg>

                    <span>إضافة بئر</span>
                </a>

                <!-- component -->
                <!-- This is an example component -->

            </div>
         


         
        </div>

    </div>

@endsection



