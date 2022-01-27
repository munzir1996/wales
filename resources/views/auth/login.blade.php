<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <img src="{{ asset('assets/images/logo.jpeg') }}" alt="images" style="width:200px;height:200px;">

        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div dir="rtl">
                <x-label for="email" :value="__('البريد الألكتروني')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required
                    autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4" dir="rtl">
                <x-label for="password" :value="__('كلمه المرور')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="current-password" />
            </div>

            <!-- Remember Me -->
            <div class="block mt-4">

            </div>

            <div class="flex items-center justify-end mt-4">


                <x-button class="ml-3">
                    {{ __(' تسجيل الدخول') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>

    <footer class="text-center">
        <a href="http://www.athrib.com/" style="color:rgb(0, 0, 255)">Athrib</a> كل الحقوق محفوظة 2022 لي | All &copy;
        Copyright 2022 To <a href="http://www.athrib.com/" style="color:rgb(0, 0, 255)">Athrib</a>
    </footer>
</x-guest-layout>
