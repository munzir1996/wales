@extends('layouts.app')

@push('title')
  Athrib
@endpush
@push('css')
<link rel="stylesheet" href="{{asset('vendor/css/datatables.min.css')}}">
@endpush
@section('body')
    <section class="grid grid-cols-1 gap-6 sm:grid-cols-2 xl:grid-cols-2">
        <div class="flex items-center justify-between px-6 py-3 bg-white shadow-sm rounded-xl">
            <div>
                <p class="font-medium text-gray-500">عدد المستخدمين </p>

                <div class="flex items-end space-x-2">
                    <h2 class="mt-1 text-2xl font-medium text-gray-800">{{ $userCount }}</h2>
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
            <h2 class="text-lg font-medium text-gray-700 capitalize sm:text-xl md:text-2xl">اخر المشاريع </h2>

            <p class="flex items-center mt-2 space-x-2 text-gray-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-green-500" viewBox="0 0 20 20"
                    fill="currentColor">
                    <path fill-rule="evenodd"
                        d="M6.267 3.455a3.066 3.066 0 001.745-.723 3.066 3.066 0 013.976 0 3.066 3.066 0 001.745.723 3.066 3.066 0 012.812 2.812c.051.643.304 1.254.723 1.745a3.066 3.066 0 010 3.976 3.066 3.066 0 00-.723 1.745 3.066 3.066 0 01-2.812 2.812 3.066 3.066 0 00-1.745.723 3.066 3.066 0 01-3.976 0 3.066 3.066 0 00-1.745-.723 3.066 3.066 0 01-2.812-2.812 3.066 3.066 0 00-.723-1.745 3.066 3.066 0 010-3.976 3.066 3.066 0 00.723-1.745 3.066 3.066 0 012.812-2.812zm7.44 5.252a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                        clip-rule="evenodd" />
                </svg>

                <span>التي تمت </span>
            </p>

            <div class="flex flex-col mt8">
                <div class="overflow-x-auto">
                    <div class="inline-block min-w-full align-middle">
                        <div class="overflow-hidden">
                            <table class="min-w-full divide-y divide-gray-200" id="wells-table">
                                <thead>
                                    <tr>

                                        <th scope="col"
                                            class="px-6 py-3 text-sm font-medium tracking-wider text-right text-gray-500 uppercase">
                                            <span>الجهه المالكه</span>
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-sm font-medium tracking-wider text-right text-gray-500 uppercase">
                                            <span>الجهه الاستشاريه</span>
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-sm font-medium tracking-wider text-right text-gray-500 uppercase">
                                            <span>الجهه الممولة</span>
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-sm font-medium tracking-wider text-right text-gray-500 uppercase">
                                            <span>مدير المشروع</span>
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-sm font-medium tracking-wider text-right text-gray-500 uppercase">
                                            <span>تاريخ التنفيذ</span>
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-sm font-medium tracking-wider text-right text-gray-700 uppercase whitespace-nowrap">
                                        </th>

                                    </tr>
                                </thead>

                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach ($basicInformations as $basicInformation)
                                        <tr>
                                            <td class="px-6 py-4 font-medium text-gray-800 whitespace-nowrap">
                                                {{ $basicInformation->owner }}
                                            </td>
                                            <td class="px-6 py-4 font-medium whitespace-nowrap">
                                                {{ $basicInformation->advisor }}
                                            </td>
                                            <td class="px-6 py-4 font-medium text-gray-700 whitespace-nowrap">
                                                {{ $basicInformation->funded }}
                                            </td>
                                            <td class="px-6 py-4 text-gray-700 capitalize whitespace-nowrap">
                                                {{ $basicInformation->project_manager }}
                                            </td>
                                            <td class="px-6 py-4 text-gray-700 capitalize whitespace-nowrap">
                                                {{ $basicInformation->start_date }}
                                            </td>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                <div class="flex items-center space-x-4">
                                                    <a href="{{route('basic-informations.show', $basicInformation->id)}}" class="text-gray-500 focus:outline-none hover:text-indigo-500">
                                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                                        </svg>
                                                    </a>
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

        {{-- <div class="w-full p-4 mr-6 bg-white rounded-lg shadow-sm xl:w-1/3 xl:p-6">
            <h2 class="text-lg font-medium text-gray-700 capitalize sm:text-xl md:text-2xl">Orders overview</h2>

            <p class="mt-2 text-gray-500">
                <span class="text-green-500">+30%</span>&nbsp;this month
            </p>

            <div class="flow-root mt-6">
                <ul class="-mb-8">
                    <li>
                        <div class="relative pb-8">
                            <span class="absolute top-4 right-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                            <div class="relative flex space-x-3">
                                <div>
                                    <span
                                        class="flex items-center justify-center w-8 h-8 bg-white rounded-full ring-8 ring-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-blue-500"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M10 2a6 6 0 00-6 6v3.586l-.707.707A1 1 0 004 14h12a1 1 0 00.707-1.707L16 11.586V8a6 6 0 00-6-6zM10 18a3 3 0 01-3-3h6a3 3 0 01-3 3z" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="min-w-0 flex-1 pt-1.5">
                                    <div>
                                        <p class="text-sm font-medium text-gray-700">$2400, Design changes</p>
                                        <p class="w-32 mt-1 text-sm text-gray-500 truncate sm:w-auto">22 DEC 7:20 PM</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="relative pb-8">
                            <span class="absolute top-4 right-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                            <div class="relative flex space-x-3">
                                <div>
                                    <span
                                        class="flex items-center justify-center w-8 h-8 bg-white rounded-full ring-8 ring-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-indigo-500"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M10 2a4 4 0 00-4 4v1H5a1 1 0 00-.994.89l-1 9A1 1 0 004 18h12a1 1 0 00.994-1.11l-1-9A1 1 0 0015 7h-1V6a4 4 0 00-4-4zm2 5V6a2 2 0 10-4 0v1h4zm-6 3a1 1 0 112 0 1 1 0 01-2 0zm7-1a1 1 0 100 2 1 1 0 000-2z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="min-w-0 flex-1 pt-1.5">
                                    <div>
                                        <p class="text-sm font-medium text-gray-700">New order #4219423</p>
                                        <p class="w-32 mt-1 text-sm text-gray-500 truncate sm:w-auto">21 DEC 11:21 PM</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="relative pb-8">
                            <span class="absolute top-4 right-4 -ml-px h-full w-0.5 bg-gray-200" aria-hidden="true"></span>
                            <div class="relative flex space-x-3">
                                <div>
                                    <span
                                        class="flex items-center justify-center w-8 h-8 bg-white rounded-full ring-8 ring-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-cyan-500"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M4 4a2 2 0 00-2 2v1h16V6a2 2 0 00-2-2H4z" />
                                            <path fill-rule="evenodd"
                                                d="M18 9H2v5a2 2 0 002 2h12a2 2 0 002-2V9zM4 13a1 1 0 011-1h1a1 1 0 110 2H5a1 1 0 01-1-1zm5-1a1 1 0 100 2h1a1 1 0 100-2H9z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="min-w-0 flex-1 pt-1.5">
                                    <div>
                                        <p class="text-sm font-medium text-gray-700">New card added for order #3210145</p>
                                        <p class="w-32 mt-1 text-sm text-gray-500 truncate sm:w-auto">21 DEC 11:21 PM</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>

                    <li>
                        <div class="relative pb-8">
                            <div class="relative flex space-x-3">
                                <div>
                                    <span
                                        class="flex items-center justify-center w-8 h-8 bg-white rounded-full ring-8 ring-white">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-green-500"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path
                                                d="M3 1a1 1 0 000 2h1.22l.305 1.222a.997.997 0 00.01.042l1.358 5.43-.893.892C3.74 11.846 4.632 14 6.414 14H15a1 1 0 000-2H6.414l1-1H14a1 1 0 00.894-.553l3-6A1 1 0 0017 3H6.28l-.31-1.243A1 1 0 005 1H3zM16 16.5a1.5 1.5 0 11-3 0 1.5 1.5 0 013 0zM6.5 18a1.5 1.5 0 100-3 1.5 1.5 0 000 3z" />
                                        </svg>
                                    </span>
                                </div>

                                <div class="min-w-0 flex-1 pt-1.5">
                                    <div>
                                        <p class="text-sm font-medium text-gray-700">Server Payments for April</p>
                                        <p class="w-32 mt-1 text-sm text-gray-500 truncate sm:w-auto">21 DEC 9:28 PM</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div> --}}
    </section>
@endsection

@push('js')
<script src="{{ asset('vendor/js/datatables.min.js') }}"></script>
{{-- <script src="{{ asset('vendor/js/datatables.bootstrap.js') }}"></script> --}}
<script>
    //Datatable
    $(document).ready(function () {
        $('#wells-table').DataTable({
            dom: 'Bfrtip',
            "columnDefs": [ {
                "targets": 0,
                "searchable": false
            }],
            "language": {
                "emptyTable": "لا توجد بيانات متوفرة في الجدول",
                "search": "بحث:",
                "lengthMenu": "_MENU_ السجلات",
                "sInfo": "إظهار الصفحة _PAGE_ من _PAGES_",
                "sInfoEmpty": "إظهار 0 إلى 0 من 0 السجلات",
                "zeroRecords": "لم يتم العثور على سجلات مطابقة",
                "infoFiltered": "(تمت تصفيته من إجمالي السجلات _MAX_)",
            },
            buttons: [
                'excel', 'pdf'
            ],

        });
    });
</script>
@endpush
