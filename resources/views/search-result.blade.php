@extends('layouts.app')


@push('title')
    نتيجه البحث
@endpush

@push('breadcrumb')
    <a href="#" class="text-gray-600 dark:text-gray-200 hover:underline">
        نتيجه البحث
    </a>
@endpush

@section('body')
    <div class="mt-6">
        <div class="p-4 bg-white rounded-lg shadow-sm xl:p-8">

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
                                            state
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-sm font-medium tracking-wider text-right text-gray-700 uppercase whitespace-nowrap">
                                            local
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-sm font-medium tracking-wider text-right text-gray-700 uppercase whitespace-nowrap">
                                            Region
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-sm font-medium tracking-wider text-right text-gray-700 uppercase whitespace-nowrap">
                                            Owner
                                        </th>
                                        <th>
                                            <div class="flex items-center space-x-2">

                                                <p> pdf </p>
                                                <a href="{{ route('report') }}">
                                                    <button class="text-gray-500 focus:outline-none hover:text-indigo-500">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6"
                                                            fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                                stroke-width="2"
                                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                            </path>
                                                        </svg>
                                                    </button>
                                                </a>

                                            </div>
                                        </th>

                                    </tr>
                                </thead>

                                <tbody class="bg-white divide-y divide-gray-200">
                                    @forelse ($basicInformations as $basicInformation)
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

                                            <td class="px-6 py-4 whitespace-nowrap">

                                            </td>
                                        </tr>
                                    @empty
                                        <td class="flex-col px-6 py-4 text-gray-500 whitespace-nowrap ">

                                            <p class=""> لاتوجد بينات حاليا</p>
                                        </td>
                                    @endforelse



                                </tbody>

                            </table>

                            <div class="w-full mt-8 bg-white dark:bg-gray-800">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


@endsection
