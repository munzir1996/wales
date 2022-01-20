@extends('layouts.app')

@push('title')
الولايات
@endpush
@push('breadcrumb')
    <a href="#" class="text-gray-600 dark:text-gray-200 hover:underline">
        الولاية
    </a>
@endpush
@push('css')
<link rel="stylesheet" href="{{asset('vendor/css/datatables.min.css')}}">
@endpush
@section('body')

<div>

</div>

<div class="mt-6">
    <div class="p-4 bg-white rounded-lg shadow-sm xl:p-8">
        <div class="space-y-3 sm:flex sm:items-start sm:space-y-0 sm:justify-between">
            <h2 class="text-lg font-medium text-gray-700 capitalize sm:text-xl md:text-2xl">الولايات</h2>

            <a href="{{route('states.create')}}"
                class="flex items-center justify-center px-3 py-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-md dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                        clip-rule="evenodd"></path>
                </svg>

                <span>أضافة ولاية</span>
            </a>
        </div>

        <div class="flex flex-col mt-8">
            <div class="-my-2 overflow-x-auto xl:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table class="min-w-full divide-y divide-gray-200" id="states-table">
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
                                        class="px-6 py-3 text-sm font-medium tracking-wider text-right text-gray-700 uppercase whitespace-nowrap">
                                    </th>
                                </tr>
                            </thead>

                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($states as $state)
                                <tr>
                                    <td class="px-6 py-4 whitespace-nowrap">
                                        {{$state->id}}
                                    </td>

                                    <td class="flex-1 px-6 py-4 text-gray-500 whitespace-nowrap">
                                        {{$state->name}}
                                    </td>

                                    <td class="px-6 py-4 whitespace-nowrap">
                                        <div class="flex items-center space-x-4">
                                            <a href="{{route('states.edit', $state->id)}}" class="text-gray-500 focus:outline-none hover:text-indigo-500">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none"
                                                    viewBox="0 0 24 24" stroke="currentColor">
                                                    <path stroke-linecap="round" stroke-linejoin="round"
                                                        stroke-width="2"
                                                        d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z">
                                                    </path>
                                                </svg>
                                            </a>
                                            <form action="{{route('states.destroy', $state->id)}}" method="post">
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
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection


@push('js')
<script src="{{ asset('vendor/js/datatables.min.js') }}"></script>
{{-- <script src="{{ asset('vendor/js/datatables.bootstrap.js') }}"></script> --}}
<script>
    //Datatable
    $(document).ready(function () {
        $('#states-table').DataTable({
            "language": {
                "emptyTable": "لا توجد بيانات متوفرة في الجدول",
                "search": "بحث:",
                "lengthMenu": "_MENU_ السجلات",
                "sInfo": "إظهار الصفحة _PAGE_ من _PAGES_",
                "sInfoEmpty": "إظهار 0 إلى 0 من 0 السجلات",
                "zeroRecords": "لم يتم العثور على سجلات مطابقة",
                "infoFiltered": "(تمت تصفيته من إجمالي السجلات _MAX_)",
            }
        });
    });
</script>
@endpush
