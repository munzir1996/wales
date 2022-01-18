@extends('layouts.app')

@push('title')
المناطق
@endpush
@push('breadcrumb')
    <a href="#" class="text-gray-600 dark:text-gray-200 hover:underline">
        المنطقه
    </a>

    {{-- <span class="mx-1 text-gray-500 dark:text-gray-300">
        /
    </span>

    <a href="#" class="text-indigo-600 dark:text-gray-200 hover:underline">
        Tables
    </a> --}}
@endpush
@section('body')

<div>

</div>

<div class="mt-6">
    <div class="p-4 bg-white rounded-lg shadow-sm xl:p-8">
        <div class="space-y-3 sm:flex sm:items-start sm:space-y-0 sm:justify-between">
            <h2 class="text-lg font-medium text-gray-700 capitalize sm:text-xl md:text-2xl">المناطق</h2>

            <a href="{{route('regions.create')}}"
                class="flex items-center justify-center px-3 py-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-md dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                        clip-rule="evenodd"></path>
                </svg>

                <span>أضافة منطقه</span>
            </a>
        </div>

        <div class="flex flex-col mt-8">
            <div class="-my-2 overflow-x-auto xl:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead>
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-right">
                                        #
                                    </th>

                                    <th scope="col"
                                        class="px-6 py-3 pr-16 text-sm font-medium tracking-wider text-right text-gray-700 uppercase whitespace-nowrap">
                                        الأسم
                                    </th>

                                    <th scope="col"
                                        class="px-6 py-3 pr-16 text-sm font-medium tracking-wider text-right text-gray-700 uppercase whitespace-nowrap">
                                        المحلية
                                    </th>

                                    <th scope="col"
                                        class="px-6 py-3 text-sm font-medium tracking-wider text-right text-gray-700 uppercase whitespace-nowrap">
                                    </th>
                                </tr>
                            </thead>

                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($regions as $region)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        {{$region->id}}
                                    </td>

                                    <td class="flex-1 px-6 py-4 text-gray-500 whitespace-nowrap">
                                        {{$region->name}}
                                    </td>

                                    <td class="flex-1 px-6 py-4 text-gray-500 whitespace-nowrap">
                                        {{$region->local->name}}
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center space-x-4">
                                            <a href="{{route('regions.edit', $region->id)}}" class="text-gray-500 focus:outline-none hover:text-indigo-500">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                                    </path>
                                                </svg>
                                            </a>
                                            <form action="{{route('regions.destroy', $region->id)}}" method="post">
                                                @csrf {{ method_field('DELETE') }}
                                                <button class="text-gray-500 focus:outline-none hover:text-indigo-500">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                                        viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                        </path>
                                                    </svg>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table>

                        <div class="w-full mt-8 bg-white dark:bg-gray-800">
                            <div
                                class="container flex flex-col items-center mx-auto space-y-6 sm:flex-row sm:justify-between sm:space-y-0 ">
                                <div class="-mx-2">
                                    <a href="#"
                                        class="inline-flex items-center justify-center px-4 py-1 mx-2 text-gray-700 transition-colors duration-200 transform bg-gray-100 rounded-lg dark:text-white dark:bg-gray-700">
                                        1
                                    </a>

                                    <a href="#"
                                        class="inline-flex items-center justify-center px-4 py-1 mx-2 text-gray-700 transition-colors duration-200 transform rounded-lg hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                                        2
                                    </a>

                                    <a href="#"
                                        class="inline-flex items-center justify-center px-4 py-1 mx-2 text-gray-700 transition-colors duration-200 transform rounded-lg hover:bg-gray-100 dark:text-white dark:hover:bg-gray-700">
                                        3
                                    </a>
                                </div>

                                <div class="text-gray-500 dark:text-gray-400">
                                    <span class="font-medium text-gray-700 dark:text-gray-100">1 - 25</span> of 77
                                    records
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection
