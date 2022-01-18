@extends('layouts.app')

@push('title')
    بيانات البئر
@endpush
@push('breadcrumb')
    <a href="#" class="text-gray-600 dark:text-gray-200 hover:underline">
        الأبار
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
                                    الولاية
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 pr-16 text-sm font-medium tracking-wider text-right text-gray-700 uppercase whitespace-nowrap">
                                    المحلية
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 pr-16 text-sm font-medium tracking-wider text-right text-gray-700 uppercase whitespace-nowrap">
                                    المنطقة
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 pr-16 text-sm font-medium tracking-wider text-right text-gray-700 uppercase whitespace-nowrap">
                                    تاريخ التنفيذ
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 pr-16 text-sm font-medium tracking-wider text-right text-gray-700 uppercase whitespace-nowrap">
                                    مدة التنفيذ
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 pr-16 text-sm font-medium tracking-wider text-right text-gray-700 uppercase whitespace-nowrap">
                                    الجهة المالكة
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 pr-16 text-sm font-medium tracking-wider text-right text-gray-700 uppercase whitespace-nowrap">
                                    الجهة الأستشارية
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 pr-16 text-sm font-medium tracking-wider text-right text-gray-700 uppercase whitespace-nowrap">
                                    الجهة الممولة
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 pr-16 text-sm font-medium tracking-wider text-right text-gray-700 uppercase whitespace-nowrap">
                                    مدير المشروع
                                </th>
                                <th scope="col"
                                    class="px-6 py-3 pr-16 text-sm font-medium tracking-wider text-right text-gray-700 uppercase whitespace-nowrap">
                                    التكلفة الكلية
                                </th>
                   

                                    <th scope="col"
                                        class="px-6 py-3 text-sm font-medium tracking-wider text-right text-gray-700 uppercase whitespace-nowrap">
                                    </th>
                                </tr>
                            </thead>

                            <tbody class="bg-white divide-y divide-gray-200">

                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        {{$basicInformation->id}}
                                    </td>

                                    <td class="flex-1 px-6 py-4 text-gray-500 whitespace-nowrap">
                                        {{$basicInformation->state->name}}
                                    </td>
                                    <td class="flex-1 px-6 py-4 text-gray-500 whitespace-nowrap">
                                        {{$basicInformation->local->name}}
                                    </td>
                                    <td class="flex-1 px-6 py-4 text-gray-500 whitespace-nowrap">
                                        {{$basicInformation->region->name}}
                                    </td>
                                    <td class="flex-1 px-6 py-4 text-gray-500 whitespace-nowrap">
                                        {{$basicInformation->start_date}}
                                    </td>
                                    <td class="flex-1 px-6 py-4 text-gray-500 whitespace-nowrap">
                                        {{$basicInformation->execution_time}}
                                    </td>
                                    <td class="flex-1 px-6 py-4 text-gray-500 whitespace-nowrap">
                                        {{$basicInformation->owner}}
                                    </td>
                                    <td class="flex-1 px-6 py-4 text-gray-500 whitespace-nowrap">
                                        {{$basicInformation->advisor}}
                                    </td>
                                    <td class="flex-1 px-6 py-4 text-gray-500 whitespace-nowrap">
                                        {{$basicInformation->funded}}
                                    </td>
                                    <td class="flex-1 px-6 py-4 text-gray-500 whitespace-nowrap">
                                        {{$basicInformation->project_manager}}
                                    </td>
                                    <td class="flex-1 px-6 py-4 text-gray-500 whitespace-nowrap">
                                        {{$basicInformation->total_cost}}
                                    </td>
                       
                             
                                </tr>
                            

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
