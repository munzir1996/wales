@extends('layouts.app')

@push('title')
    الأبار
@endpush
@push('breadcrumb')
    <a href="{{ route('basic-informations.index') }}" class="text-indigo-600 dark:text-gray-200 hover:underline">
        الأبار
    </a>
    <span class="mx-1 text-gray-500 dark:text-gray-300">
        /
    </span>
    <a href="#" class="text-gray-600 dark:text-gray-200 hover:underline">
        التفاصيل
    </a>
@endpush
@section('body')
    <div class="w-full p-4 mt-8 bg-white rounded-lg xl:p-6">
        <h1 class="text-lg font-medium text-gray-700 capitalize sm:text-xl md:text-2xl">البيانات الأساسية</h1>

        <form action="{{ route('basic-informations.store') }}" class="mt-6 space-y-5" method="POST">
            @csrf
            <div class="grid grid-cols-3 gap-8 mt-6">
                <div>
                    <label for="region" name="state_id"
                        class="block text-sm text-gray-700 capitalize dark:text-black-200">الولاية</label>
                    <input type="text" name="state_id" placeholder="الولاية" value="{{ $basicInformation->state->name }}"
                        class="block w-full px-3 py-2 mt-2 text-gray-600 bg-white border" disabled>
                </div>

                <div>
                    <label for="region" name="local_id"
                        class="block text-sm text-gray-700 capitalize dark:text-black-200">المحلية</label>
                    <input type="text" name="local_id" placeholder="المحلية" value="{{ $basicInformation->local->name }}"
                        class="block w-full px-3 py-2 mt-2 text-gray-600 bg-white border" disabled>
                </div>

                <div>
                    <label for="region" name="region_id"
                        class="block text-sm text-gray-700 capitalize dark:text-black-200">المنطقه</label>
                    <input type="text" name="region_id" placeholder="المنطقه" value="{{ $basicInformation->region->name }}"
                        class="block w-full px-3 py-2 mt-2 text-gray-600 bg-white border" disabled>
                </div>
            </div>
            <div>
                <label for="project_status" name="project_status"
                    class="block text-sm text-gray-700 capitalize dark:text-black-200">حاله المشروع</label>
                <input type="text" name="project_status" placeholder="المنطقه" value="{{ $basicInformation->project_status == 0 ? 'قيد التنفيذ' :'تم التنفيذ'}}"
                    class="block w-full px-3 py-2 mt-2 text-gray-600 bg-white border" disabled>
            </div>

            <div class="grid grid-cols-2 gap-8 mt-6">
                <div>
                    <label for="region" name="start_date"
                        class="block text-sm text-gray-700 capitalize dark:text-black-200">تاريخ التنفيذ</label>
                    <input type="date" name="start_date" placeholder="تاريخ التنفيذ"
                        value="{{ $basicInformation->start_date }}"
                        class="block w-full px-3 py-2 mt-2 text-gray-600 bg-white border" disabled>
                </div>
                <div>
                    <label for="region" name="execution_time"
                        class="block text-sm text-gray-700 capitalize dark:text-black-200">مدة التنفيذ</label>
                    <input type="number" min="1" name="execution_time" placeholder="مدة التنفيذ"
                        value="{{ $basicInformation->execution_time }}"
                        class="block w-full px-3 py-2 mt-2 text-gray-600 bg-white border" disabled>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-8 mt-6">
                <div>
                    <label for="region" name="owner"
                        class="block text-sm text-gray-700 capitalize dark:text-black-200">الجهة المالكة</label>
                    <input type="text" name="owner" placeholder="الجهة المالكة" value="{{ $basicInformation->owner }}"
                        class="block w-full px-3 py-2 mt-2 text-gray-600 bg-white border" disabled>
                </div>
                <div>
                    <label for="region" name="advisor"
                        class="block text-sm text-gray-700 capitalize dark:text-black-200">الجهة الأستشارية</label>
                    <input type="text" name="advisor" placeholder="الجهة الأستشارية"
                        value="{{ $basicInformation->advisor }}"
                        class="block w-full px-3 py-2 mt-2 text-gray-600 bg-white border" disabled>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-8 mt-6">
                <div>
                    <label for="region" name="funded"
                        class="block text-sm text-gray-700 capitalize dark:text-black-200">الجهة الممولة</label>
                    <input type="text" name="funded" placeholder="الجهة الممولة" value="{{ $basicInformation->funded }}"
                        class="block w-full px-3 py-2 mt-2 text-gray-600 bg-white border" disabled>
                </div>
                <div>
                    <label for="region" name="project_manager"
                        class="block text-sm text-gray-700 capitalize dark:text-black-200">مدير المشروع</label>
                    <input type="text" name="project_manager" placeholder="مدير المشروع"
                        value="{{ $basicInformation->project_manager }}"
                        class="block w-full px-3 py-2 mt-2 text-gray-600 bg-white border" disabled>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-8 mt-6">
                <div>
                    <label for="region" name="total_cost"
                        class="block text-sm text-gray-700 capitalize dark:text-black-200"> التكلفة الكليه
                        (بالدولار)</label>
                    <input type="number" name="total_cost" min="0.01" step="0.01" placeholder="التكلفة الكلية"
                        value="{{ $basicInformation->total_cost }}"
                        class="block w-full px-3 py-2 mt-2 text-gray-600 bg-white border" disabled>
                </div>
            </div>

            <h1 class="text-lg font-medium text-gray-700 capitalize sm:text-xl md:text-2xl">بيانات الأبار</h1>

            <div class="grid grid-cols-2 gap-8 mt-6">
                <div>
                    <label for="region" name="longitude"
                        class="block text-sm text-gray-700 capitalize dark:text-black-200">خط الطول</label>
                    <input type="number" step="0.01" name="longitude" placeholder="خط الطول"
                        value="{{ $basicInformation->well->longitude }}"
                        class="block w-full px-3 py-2 mt-2 text-gray-600 bg-white border" disabled>
                </div>
                <div>
                    <label for="region" name="latitude"
                        class="block text-sm text-gray-700 capitalize dark:text-black-200">خط العرض</label>
                    <input type="number" step="0.01" name="latitude" placeholder="خط العرض"
                        value="{{ $basicInformation->well->latitude }}"
                        class="block w-full px-3 py-2 mt-2 text-gray-600 bg-white border" disabled>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-8 mt-6">
                <div>
                    <label for="region" name="well_depth"
                        class="block text-sm text-gray-700 capitalize dark:text-black-200">عمق البئر</label>
                    <input type="number" min="0.01" step="0.01" name="well_depth" placeholder="عمق البئر"
                        value="{{ $basicInformation->well->well_depth }}"
                        class="block w-full px-3 py-2 mt-2 text-gray-600 bg-white border" disabled>
                </div>
                <div>
                    <label for="region" name="packaging_depth"
                        class="block text-sm text-gray-700 capitalize dark:text-black-200">عمق التغليف</label>
                    <input type="number" min="0.01" step="0.01" name="packaging_depth" placeholder="عمق التغليف"
                        value="{{ $basicInformation->well->packaging_depth }}"
                        class="block w-full px-3 py-2 mt-2 text-gray-600 bg-white border" disabled>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-8 mt-6">
                <div>
                    <label for="region" name="swl" class="block text-sm text-gray-700 capitalize dark:text-black-200">مستوي
                        المياه الثابت (S.W.L)</label>
                    <input type="number" min="0.01" step="0.01" name="swl" placeholder="مستوي المياه الثابت (S.W.L)"
                        value="{{ $basicInformation->well->swl }}"
                        class="block w-full px-3 py-2 mt-2 text-gray-600 bg-white border" disabled>
                </div>
                <div>
                    <label for="region" name="dwl" class="block text-sm text-gray-700 capitalize dark:text-black-200">مستوي
                        المياه المتحرك (D.W.L)</label>
                    <input type="number" min="0.01" step="0.01" name="dwl" placeholder="مستوي المياه المتحرك (D.W.L)"
                        value="{{ $basicInformation->well->dwl }}"
                        class="block w-full px-3 py-2 mt-2 text-gray-600 bg-white border" disabled>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-8 mt-6">
                <div>
                    <label for="region" name="swl" class="block text-sm text-gray-700 capitalize dark:text-black-200">مستوي
                        المياه الثابت (S.W.L)</label>
                    <input type="number" min="0.01" step="0.01" name="swl" placeholder="مستوي المياه الثابت (S.W.L)"
                        value="{{ $basicInformation->well->swl }}"
                        class="block w-full px-3 py-2 mt-2 text-gray-600 bg-white border" disabled>
                </div>
                <div>
                    <label for="region" name="productivity"
                        class="block text-sm text-gray-700 capitalize dark:text-black-200">الإنتاجية</label>
                    <input type="number" min="0.01" step="0.01" name="productivity" placeholder="الإنتاجية"
                        value="{{ $basicInformation->well->productivity }}"
                        class="block w-full px-3 py-2 mt-2 text-gray-600 bg-white border" disabled>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-8 mt-6">
                <div>
                    <label for="region" name="psd" class="block text-sm text-gray-700 capitalize dark:text-black-200">مستوي
                        الإنزال (P.S.D)</label>
                    <input type="number" min="0.01" step="0.01" name="psd" placeholder="مستوي الإنزال (P.S.D)"
                        value="{{ $basicInformation->well->psd }}"
                        class="block w-full px-3 py-2 mt-2 text-gray-600 bg-white border" disabled>
                    @error('psd')
                        <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                    @enderror
                </div>
            </div>

        </form>

        <div class="flex flex-col mt-8">
            <div class="-my-2 overflow-x-auto xl:-mx-8">
                <div class="inline-block min-w-full py-2 align-right sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead>
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-right">
                                        ملفات اختبار تحليل المياه
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-sm font-medium tracking-wider text-right text-gray-700 uppercase whitespace-nowrap">
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($basicInformation->getMedia('water_analysis_test_file') as $media)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{ $media->name }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center space-x-2">
                                                <a href="{{ route('basic_informations.downloadfile', $media->id) }}"
                                                    class="text-gray-500 focus:outline-none hover:text-indigo-500">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10" />
                                                    </svg>
                                                </a>
                                                <a href="{{ route('basic_informations.deletefile', [$media->id, $basicInformation->id]) }}"
                                                    class="text-gray-500 focus:outline-none hover:text-indigo-500">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                        </path>
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

        <div class="flex flex-col mt-8">
            <div class="-my-2 overflow-x-auto xl:-mx-8">
                <div class="inline-block min-w-full py-2 align-right sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead>
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-right">
                                        ملفات الدراسة الجوفيزيائية
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-sm font-medium tracking-wider text-right text-gray-700 uppercase whitespace-nowrap">
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($basicInformation->getMedia('geophysical_study_file') as $media)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{ $media->name }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center space-x-2">
                                                <a href="{{ route('basic_informations.downloadfile', $media->id) }}"
                                                    class="text-gray-500 focus:outline-none hover:text-indigo-500">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10" />
                                                    </svg>
                                                </a>
                                                <a href="{{ route('basic_informations.deletefile', [$media->id, $basicInformation->id]) }}"
                                                    class="text-gray-500 focus:outline-none hover:text-indigo-500">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                        </path>
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

        <div class="flex flex-col mt-8">
            <div class="-my-2 overflow-x-auto xl:-mx-8">
                <div class="inline-block min-w-full py-2 align-right sm:px-6 lg:px-8">
                    <div class="overflow-hidden">
                        <table class="min-w-full divide-y divide-gray-200">
                            <thead>
                                <tr>
                                    <th scope="col" class="px-6 py-3 text-right">
                                        ملفات تفاصيل البئر كاملة
                                    </th>
                                    <th scope="col"
                                        class="px-6 py-3 text-sm font-medium tracking-wider text-right text-gray-700 uppercase whitespace-nowrap">
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-200">
                                @foreach ($basicInformation->getMedia('full_well_details_file') as $media)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            {{ $media->name }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap">
                                            <div class="flex items-center space-x-2">
                                                <a href="{{ route('basic_informations.downloadfile', $media->id) }}"
                                                    class="text-gray-500 focus:outline-none hover:text-indigo-500">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M9 19l3 3m0 0l3-3m-3 3V10" />
                                                    </svg>
                                                </a>
                                                <a href="{{ route('basic_informations.deletefile', [$media->id, $basicInformation->id]) }}"
                                                    class="text-gray-500 focus:outline-none hover:text-indigo-500">
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6"
                                                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16">
                                                        </path>
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

@endsection
