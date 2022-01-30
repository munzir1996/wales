@extends('layouts.app')

@push('title')
    Wales
@endpush
@push('css')
    <link rel="stylesheet" href="{{ asset('vendor/css/datatables.min.css') }}">
@endpush
@section('body')
    <section class="grid grid-cols-1 gap-6 sm:grid-cols-2 xl:grid-cols-2">
        <div class="flex items-center justify-between px-6 py-3 bg-white shadow-sm rounded-xl">
            <div>
                <p class="font-medium text-gray-500">عددالمشاريع المنفذه </p>

                <div class="flex items-end space-x-2">
                    <h2 class="mt-1 text-2xl font-medium text-gray-800">{{ $done }}</h2>
                    <span class="text-indigo-500">

                    </span>
                </div>
            </div>

            <div class="p-2 text-white bg-indigo-500 rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M17 9V7a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2m2 4h10a2 2 0 002-2v-6a2 2 0 00-2-2H9a2 2 0 00-2 2v6a2 2 0 002 2zm7-5a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
            </div>
        </div>
        <div class="flex items-center justify-between px-6 py-3 bg-white shadow-sm rounded-xl ">
            <div>
                <p class="font-medium text-gray-500">عدد المشاريع قيد التنفيذ</p>

                <div class="flex items-end space-x-2">
                    <h2 class="mt-1 text-2xl font-medium text-gray-800">{{ $inProgress }}</h2>
                    <span class="text-indigo-500">

                    </span>
                </div>
            </div>

            <div class="p-2 text-white bg-indigo-500 rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                </svg>
            </div>
        </div>
        <div class="flex items-center justify-between px-6 py-3 bg-white shadow-sm rounded-xl ">
            <div>
                <p class="font-medium text-gray-500">عدد الأبار</p>

                <div class="flex items-end space-x-2">
                    <h2 class="mt-1 text-2xl font-medium text-gray-800">{{ $wellCount }}</h2>
                    <span class="text-indigo-500">

                    </span>
                </div>
            </div>

            <div class="p-2 text-white bg-indigo-500 rounded-lg">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
                </svg>
            </div>
        </div>
    </section>

    <section class="mt-6 space-y-6 xl:flex xl:space-y-0">
        <div class="w-full p-4 bg-white rounded-lg shadow-sm xl:p-6"> {{-- xl:w-2/3 --}}
            {{-- <h2 class="text-lg font-medium text-gray-700 capitalize sm:text-xl md:text-2xl">اخر المشاريع </h2> --}}

            {{-- <p class="flex items-center mt-2 space-x-2 text-gray-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-green-500" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                        clip-rule="evenodd" />
                </svg>

                <span>التي تمت </span>
            </p> --}}
            <form action="{{ route('search') }}" method="GET">
                @csrf
                <div class="pt-2 relative mx-auto text-gray-600">
                    <input class="border-2 border-gray-300 bg-white h-10 px-8 pr-10 rounded-lg text-sm focus:outline-none"
                        type="search" name="search" placeholder="بحث" value="{{ request()->input('search') }}">
                    <button class="bg-indigo-500 text-white font-semie-bold py-2 px-4 rounded">بحث</button>
                </div>
            </form>


            <div class="flex flex-col mt-8">
                <div class="-my-2 overflow-x-auto xl:-mx-8">
                    <div class="inline-block min-w-full py-2 align-right sm:px-6 lg:px-8">
                        <div class="overflow-hidden">
                            <table class="min-w-full divide-y divide-gray-200" id="basic-informations-table">
                                <thead>
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-right">
                                            #
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-sm font-medium tracking-wider text-right text-gray-700 uppercase whitespace-nowrap">
                                            الولايه
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-sm font-medium tracking-wider text-right text-gray-700 uppercase whitespace-nowrap">
                                            المحليه
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-sm font-medium tracking-wider text-right text-gray-700 uppercase whitespace-nowrap">
                                            المنطقه
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-sm font-medium tracking-wider text-right text-gray-700 uppercase whitespace-nowrap">
                                            المالك
                                        </th>
                                        {{-- <th scope="col"
                                            class="px-6 py-3 text-sm font-medium tracking-wider text-right text-gray-700 uppercase whitespace-nowrap">
                                            Advisor
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-sm font-medium tracking-wider text-right text-gray-700 uppercase whitespace-nowrap">
                                            Funded
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-sm font-medium tracking-wider text-right text-gray-700 uppercase whitespace-nowrap">
                                            P.M
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-sm font-medium tracking-wider text-right text-gray-700 uppercase whitespace-nowrap">
                                            Date
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-sm font-medium tracking-wider text-right text-gray-700 uppercase whitespace-nowrap">
                                            Days
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-sm font-medium tracking-wider text-right text-gray-700 uppercase whitespace-nowrap">
                                            Cost
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-sm font-medium tracking-wider text-right text-gray-700 uppercase whitespace-nowrap">
                                        </th> --}}


                                        <th>
                                            <form action="{{ route('report') }}" method="POST">
                                                @csrf
                                                <button class="text-gray-500 focus:outline-none hover:text-indigo-500">
                                                    <input type="hidden" name=" basicInformations" id="" value="{{$basicInformations}}">
                                                    <svg class="w-6 h-6" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z">
                                                        </path>
                                                    </svg>
                                            </form>
                                            </button>

                                        </th>



                                    </tr>
                                </thead>

                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($basicInformations as $basicInformation)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                {{ $basicInformation->id }}
                                            </td>

                                            <td class="flex-1 px-6 py-4 text-gray-500 whitespace-nowrap">
                                                {{ $basicInformation->state->name }}
                                            </td>
                                            <td class="flex-1 px-6 py-4 text-gray-500 whitespace-nowrap">
                                                {{ $basicInformation->local->name }}
                                            </td>
                                            <td class="flex-1 px-6 py-4 text-gray-500 whitespace-nowrap">
                                                {{ $basicInformation->region->name }}
                                            </td>
                                            <td class="flex-1 px-6 py-4 text-gray-500 whitespace-nowrap">
                                                {{ $basicInformation->owner }}
                                            </td>
                                            {{-- <td class="flex-1 px-6 py-4 text-gray-500 whitespace-nowrap">
                                                {{ $basicInformation->advisor }}
                                            </td>
                                            <td class="flex-1 px-6 py-4 text-gray-500 whitespace-nowrap">
                                                {{ $basicInformation->funded }}
                                            </td>
                                            <td class="flex-1 px-6 py-4 text-gray-500 whitespace-nowrap">
                                                {{ $basicInformation->project_manager }}
                                            </td>
                                            <td class="flex-1 px-6 py-4 text-gray-500 whitespace-nowrap">
                                                {{ $basicInformation->start_date }}
                                            </td>
                                            <td class="flex-1 px-6 py-4 text-gray-500 whitespace-nowrap">
                                                {{ $basicInformation->execution_time }}
                                            </td>
                                            <td class="flex-1 px-6 py-4 text-gray-500 whitespace-nowrap">
                                                {{ $basicInformation->total_cost }}
                                            </td> --}}
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center space-x-2">
                                                    <a href="{{ route('basic-informations.show', $basicInformation->id) }}"
                                                        class="text-gray-500 focus:outline-none hover:text-indigo-500">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                        </svg>
                                                    </a>
                                                    <a href="{{ route('basic-informations.edit', $basicInformation->id) }}"
                                                        class="text-gray-500 focus:outline-none hover:text-indigo-500">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6"
                                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                    <form
                                                        action="{{ route('basic-informations.destroy', $basicInformation->id) }}"
                                                        method="post">
                                                        @csrf {{ method_field('DELETE') }}
                                                        <button
                                                            class="text-gray-500 focus:outline-none hover:text-indigo-500">
                                                            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6"
                                                                fill="none" viewBox="0 0 24 24" stroke="currentColor">
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

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
