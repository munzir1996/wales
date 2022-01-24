@extends('layouts.app')

@push('title')
    المستخدمين
@endpush
@push('breadcrumb')
    <a href="{{ route('users.index') }}" class="text-indigo-600 dark:text-gray-200 hover:underline">
        المستخدمين
    </a>
    <span class="mx-1 text-gray-500 dark:text-gray-300">
        /
    </span>
    <a href="#" class="text-gray-600 dark:text-gray-200 hover:underline">
        المستخدمين
    </a>
@endpush
@section('body')

    <div class="w-full p-4 bg-white rounded-lg xl:p-6">
        <h1 class="text-lg font-medium text-gray-700 capitalize sm:text-xl md:text-2xl">تعديل بينات {{ $user->name }} </h1>

        <form action="{{ route('users.update', $user->id) }}" class="mt-6 space-y-5" method="POST">
            @csrf
            {{ method_field('PUT') }}
            <div>
                <label for="user" name="name" class="block text-sm text-gray-700 capitalize dark:text-gray-200">الأسم</label>
                <input type="text" name="name" placeholder="الأسم" value="{{ $user->name }}"
                    class="block w-full px-3 py-2 mt-2 text-gray-600 bg-white border @error('name') border-red-500 rounded-md focus:border-red-400 focus:outline-none focus:ring focus:ring-red-300 focus:ring-opacity-40 @enderror"
                    required>
                @error('name')
                    <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div>
                <label for="email" name="email" class="block text-sm text-gray-700 capitalize dark:text-gray-200">البريد
                    الالكتروني</label>
                <input type="email" name="email" placeholder="البريد الاكتروني" value="{{ $user->email }}"
                    class="block w-full px-3 py-2 mt-2 text-gray-600 bg-white border @error('name') border-red-500 rounded-md focus:border-red-400 focus:outline-none focus:ring focus:ring-red-300 focus:ring-opacity-40 @enderror"
                    required>
                @error('email')
                    <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="password" name="password" class="block text-sm text-gray-700 capitalize dark:text-gray-200">
                    كلمه المرور</label>
                <input type="password" name="password" placeholder=" كلمه المرور" value="{{ old('password') }}"
                    class="block w-full px-3 py-2 mt-2 text-gray-600 bg-white border @error('name') border-red-500 rounded-md focus:border-red-400 focus:outline-none focus:ring focus:ring-red-300 focus:ring-opacity-40 @enderror"
                    required>
                @error('password')
                    <p class="mt-2 text-sm text-red-500">{{ $message }}</p>
                @enderror
            </div>
            <div dir="ltr">
                <p>الصلاحيه:</p>
                @foreach ($permissions as $permission)
                    <input name="permissions[]" type="checkbox" value="{{$permission}}"
                        class="w-5 h-5 text-black-500 border-black-300 rounded-md focus:border-black-500 focus:ring focus:ring-black-300 focus:ring-opacity-40"
                        {{  ($userPermissions->contains($permission) ? ' checked' : '') }}>
                    <label class="mx-2 text-black-700 dark:text-blcak-200" for="{{ $permission }}">
                        {{ $permission }}
                    </label>
                @endforeach
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
