<div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
    <div>
        {{ $logo }}
    </div>

    <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg">
        {{ $slot }}
    </div>
    <div class="flex items-center justify-center mt-8">
        <p>All &copy; CopyRights 2022 to <a href="https://wales.sd" class="text-red-500" style="font-weight: bold">
                Wales </a> |
            Developed and Powerded by <a href="http://www.athrib.com/"
                style="color: blue ; font-weight: bold">Athrib</a></p>
    </div>
</div>
