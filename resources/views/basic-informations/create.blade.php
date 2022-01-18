@extends('layouts.app')

@push('title')
الأبار
@endpush
@push('breadcrumb')
<a href="{{route('basic-informations.index')}}" class="text-indigo-600 dark:text-gray-200 hover:underline">
    الأبار
</a>
<span class="mx-1 text-gray-500 dark:text-gray-300">
    /
</span>
<a href="#" class="text-gray-600 dark:text-gray-200 hover:underline">
    إنشاء
</a>
@endpush
@section('body')
<div class="w-full p-4 mt-8 bg-white rounded-lg xl:p-6">
    <h1 class="text-lg font-medium text-gray-700 capitalize sm:text-xl md:text-2xl">البيانات الأساسية</h1>

    <form action="{{route('basic-informations.store')}}" class="mt-6 space-y-5" method="POST">
        @csrf
        <div class="grid grid-cols-3 gap-8 mt-6"
            x-data="{ selectedState: null, selectedlocal: null, states: {{$states}},  locals: [], regions: [] }">
            <div x-init="$watch('selectedState', (selectedState) => { fetch('http://localhost:8000/states/locals/' + selectedState).then(res=> res.json()).then((localData) => { locals = localData }) })">
                <label for="states" class="block text-sm text-gray-700 capitalize dark:text-gray-200">الولاية</label>
                <select name="state_id" x-model="selectedState"
                    class="block w-full px-3 py-2 mt-2 text-gray-600 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40"
                    required>
                    <option></option>
                    <template x-for="state in states" :key="state.id">
                        <option :value="state.id"  x-text="state.name">
                        </option>
                    </template>
                </select>
                @error('state_id')
                <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div x-init="$watch('selectedlocal', (selectedlocal) => { fetch('http://localhost:8000/locals/regions/' + selectedlocal).then(res=> res.json()).then((regionData) => { regions = regionData }) })">
                <label for="locals" class="block text-sm text-gray-700 capitalize dark:text-gray-200">المحلية</label>
                <select name="local_id" x-model="selectedlocal"
                    class="block w-full px-3 py-2 mt-2 text-gray-600 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40"
                    required>
                    <option></option>
                    <template x-for="local in locals" :key="local.id">
                        <option :value="local.id"  x-text="local.name">
                        </option>
                    </template>
                </select>
                @error('local_id')
                <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="locals" class="block text-sm text-gray-700 capitalize dark:text-gray-200">المنطقه</label>
                <select name="region_id"
                    class="block w-full px-3 py-2 mt-2 text-gray-600 bg-white border border-gray-200 rounded-md focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40"
                    required>
                    <option></option>
                    <template x-for="region in regions" :key="region.id">
                        <option :value="region.id"  x-text="region.name">
                        </option>
                    </template>
                </select>
                @error('region_id')
                <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="grid grid-cols-2 gap-8 mt-6">
            <div>
                <label for="region" name="start_date"
                    class="block text-sm text-gray-700 capitalize dark:text-gray-200">تاريخ التنفيذ</label>
                <input type="date" name="start_date" placeholder="تاريخ التنفيذ" value="{{old('start_date')}}"
                    class="block w-full px-3 py-2 mt-2 text-gray-600 bg-white border @error('start_date') border-red-500 rounded-md focus:border-red-400 focus:outline-none focus:ring focus:ring-red-300 focus:ring-opacity-40 @enderror"
                    required>
                @error('start_date')
                <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="region" name="execution_time"
                    class="block text-sm text-gray-700 capitalize dark:text-gray-200">مدة التنفيذ</label>
                <input type="number" min="1" name="execution_time" placeholder="مدة التنفيذ" value="{{old('execution_time')}}"
                    class="block w-full px-3 py-2 mt-2 text-gray-600 bg-white border @error('execution_time') border-red-500 rounded-md focus:border-red-400 focus:outline-none focus:ring focus:ring-red-300 focus:ring-opacity-40 @enderror"
                    required>
                @error('execution_time')
                <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="grid grid-cols-2 gap-8 mt-6">
            <div>
                <label for="region" name="owner"
                    class="block text-sm text-gray-700 capitalize dark:text-gray-200">الجهة المالكة</label>
                <input type="text" name="owner" placeholder="الجهة المالكة" value="{{old('owner')}}"
                    class="block w-full px-3 py-2 mt-2 text-gray-600 bg-white border @error('owner') border-red-500 rounded-md focus:border-red-400 focus:outline-none focus:ring focus:ring-red-300 focus:ring-opacity-40 @enderror"
                    required>
                @error('owner')
                <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="region" name="advisor"
                    class="block text-sm text-gray-700 capitalize dark:text-gray-200">الجهة الأستشارية</label>
                <input type="text" name="advisor" placeholder="الجهة الأستشارية" value="{{old('advisor')}}"
                    class="block w-full px-3 py-2 mt-2 text-gray-600 bg-white border @error('advisor') border-red-500 rounded-md focus:border-red-400 focus:outline-none focus:ring focus:ring-red-300 focus:ring-opacity-40 @enderror"
                    required>
                @error('advisor')
                <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="grid grid-cols-2 gap-8 mt-6">
            <div>
                <label for="region" name="funded"
                    class="block text-sm text-gray-700 capitalize dark:text-gray-200">الجهة الممولة</label>
                <input type="text" name="funded" placeholder="الجهة الممولة" value="{{old('funded')}}"
                    class="block w-full px-3 py-2 mt-2 text-gray-600 bg-white border @error('funded') border-red-500 rounded-md focus:border-red-400 focus:outline-none focus:ring focus:ring-red-300 focus:ring-opacity-40 @enderror"
                    required>
                @error('funded')
                <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="region" name="project_manager"
                    class="block text-sm text-gray-700 capitalize dark:text-gray-200">مدير المشروع</label>
                <input type="text" name="project_manager" placeholder="مدير المشروع" value="{{old('project_manager')}}"
                    class="block w-full px-3 py-2 mt-2 text-gray-600 bg-white border @error('project_manager') border-red-500 rounded-md focus:border-red-400 focus:outline-none focus:ring focus:ring-red-300 focus:ring-opacity-40 @enderror"
                    required>
                @error('project_manager')
                <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="grid grid-cols-2 gap-8 mt-6">
            <div>
                <label for="region" name="total_cost"
                    class="block text-sm text-gray-700 capitalize dark:text-gray-200">التكلفة الكلية</label>
                <input type="number" name="total_cost" min="0.01" step="0.01" placeholder="التكلفة الكلية" value="{{old('total_cost')}}"
                    class="block w-full px-3 py-2 mt-2 text-gray-600 bg-white border @error('total_cost') border-red-500 rounded-md focus:border-red-400 focus:outline-none focus:ring focus:ring-red-300 focus:ring-opacity-40 @enderror"
                    required>
                @error('total_cost')
                <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <h1 class="text-lg font-medium text-gray-700 capitalize sm:text-xl md:text-2xl">بيانات الأبار</h1>

        <div class="grid grid-cols-2 gap-8 mt-6">
            <div>
                <label for="region" name="longitude"
                    class="block text-sm text-gray-700 capitalize dark:text-gray-200">خط الطول</label>
                <input type="number" step="0.01" name="longitude" placeholder="خط الطول" value="{{old('longitude')}}"
                    class="block w-full px-3 py-2 mt-2 text-gray-600 bg-white border @error('longitude') border-red-500 rounded-md focus:border-red-400 focus:outline-none focus:ring focus:ring-red-300 focus:ring-opacity-40 @enderror"
                    required>
                @error('longitude')
                <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="region" name="latitude"
                    class="block text-sm text-gray-700 capitalize dark:text-gray-200">خط العرض</label>
                <input type="number" step="0.01" name="latitude" placeholder="خط العرض" value="{{old('latitude')}}"
                    class="block w-full px-3 py-2 mt-2 text-gray-600 bg-white border @error('latitude') border-red-500 rounded-md focus:border-red-400 focus:outline-none focus:ring focus:ring-red-300 focus:ring-opacity-40 @enderror"
                    required>
                @error('latitude')
                <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="grid grid-cols-2 gap-8 mt-6">
            <div>
                <label for="region" name="well_depth"
                    class="block text-sm text-gray-700 capitalize dark:text-gray-200">عمق البئر</label>
                <input type="number" min="0.01" step="0.01" name="well_depth" placeholder="عمق البئر" value="{{old('well_depth')}}"
                    class="block w-full px-3 py-2 mt-2 text-gray-600 bg-white border @error('well_depth') border-red-500 rounded-md focus:border-red-400 focus:outline-none focus:ring focus:ring-red-300 focus:ring-opacity-40 @enderror"
                    required>
                @error('well_depth')
                <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="region" name="packaging_depth"
                    class="block text-sm text-gray-700 capitalize dark:text-gray-200">عمق التغليف</label>
                <input type="number" min="0.01" step="0.01" name="packaging_depth" placeholder="عمق التغليف" value="{{old('packaging_depth')}}"
                    class="block w-full px-3 py-2 mt-2 text-gray-600 bg-white border @error('packaging_depth') border-red-500 rounded-md focus:border-red-400 focus:outline-none focus:ring focus:ring-red-300 focus:ring-opacity-40 @enderror"
                    required>
                @error('packaging_depth')
                <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="grid grid-cols-2 gap-8 mt-6">
            <div>
                <label for="region" name="swl"
                    class="block text-sm text-gray-700 capitalize dark:text-gray-200">مستوي المياه الثابت (S.W.L)</label>
                <input type="number" min="0.01" step="0.01" name="swl" placeholder="مستوي المياه الثابت (S.W.L)" value="{{old('swl')}}"
                    class="block w-full px-3 py-2 mt-2 text-gray-600 bg-white border @error('swl') border-red-500 rounded-md focus:border-red-400 focus:outline-none focus:ring focus:ring-red-300 focus:ring-opacity-40 @enderror"
                    required>
                @error('swl')
                <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="region" name="dwl"
                    class="block text-sm text-gray-700 capitalize dark:text-gray-200">مستوي المياه المتحرك (D.W.L)</label>
                <input type="number" min="0.01" step="0.01" name="dwl" placeholder="مستوي المياه المتحرك (D.W.L)" value="{{old('dwl')}}"
                    class="block w-full px-3 py-2 mt-2 text-gray-600 bg-white border @error('dwl') border-red-500 rounded-md focus:border-red-400 focus:outline-none focus:ring focus:ring-red-300 focus:ring-opacity-40 @enderror"
                    required>
                @error('dwl')
                <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="grid grid-cols-2 gap-8 mt-6">
            <div>
                <label for="region" name="swl"
                    class="block text-sm text-gray-700 capitalize dark:text-gray-200">مستوي المياه الثابت (S.W.L)</label>
                <input type="number" min="0.01" step="0.01" name="swl" placeholder="مستوي المياه الثابت (S.W.L)" value="{{old('swl')}}"
                    class="block w-full px-3 py-2 mt-2 text-gray-600 bg-white border @error('swl') border-red-500 rounded-md focus:border-red-400 focus:outline-none focus:ring focus:ring-red-300 focus:ring-opacity-40 @enderror"
                    required>
                @error('swl')
                <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="region" name="productivity"
                    class="block text-sm text-gray-700 capitalize dark:text-gray-200">الإنتاجية</label>
                <input type="number" min="0.01" step="0.01" name="productivity" placeholder="الإنتاجية" value="{{old('productivity')}}"
                    class="block w-full px-3 py-2 mt-2 text-gray-600 bg-white border @error('productivity') border-red-500 rounded-md focus:border-red-400 focus:outline-none focus:ring focus:ring-red-300 focus:ring-opacity-40 @enderror"
                    required>
                @error('productivity')
                <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="grid grid-cols-2 gap-8 mt-6">
            <div>
                <label for="region" name="psd"
                    class="block text-sm text-gray-700 capitalize dark:text-gray-200">مستوي الإنزال (P.S.D)</label>
                <input type="number" min="0.01" step="0.01" name="psd" placeholder="مستوي الإنزال (P.S.D)" value="{{old('psd')}}"
                    class="block w-full px-3 py-2 mt-2 text-gray-600 bg-white border @error('psd') border-red-500 rounded-md focus:border-red-400 focus:outline-none focus:ring focus:ring-red-300 focus:ring-opacity-40 @enderror"
                    required>
                @error('psd')
                <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>
        </div>

        <div class="flex justify-start">
            <button
                class="flex items-center px-2 py-2 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-md hover:bg-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                <span class="mx-1">حفظ</span>
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mx-1" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                    </path>
                </svg>
            </button>
        </div>

    </form>
</div>

@endsection
