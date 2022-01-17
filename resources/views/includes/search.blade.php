<div class="relative" x-data="{ search: '' }" @click.away="search = ''">
    <div class="relative">
        <span class="absolute inset-y-0 left-0 flex items-center pl-3">
            <svg class="w-5 h-5 text-gray-400" viewBox="0 0 24 24" fill="none">
                <path d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
        </span>

        <input x-model="search" type="text" class="w-32 h-10 py-2 pl-10 pr-4 text-gray-700 placeholder-gray-400 transition-all duration-150 bg-white border border-gray-200 rounded-md focus:w-44 sm:w-64 sm:focus:w-80 focus:border-indigo-400 focus:outline-none focus:ring focus:ring-indigo-300 focus:ring-opacity-40" placeholder="Find anything...">
    </div>

    <div class="absolute right-0 z-20 w-full py-2 mt-2 space-y-4 overflow-hidden bg-white rounded-md shadow-xl"
        x-show="search.length > 0"
        x-cloak
        x-transition:enter="transition ease-out duration-100 transform"
        x-transition:enter-start="opacity-0 scale-95"
        x-transition:enter-end="opacity-100 scale-100"
        x-transition:leave="transition ease-in duration-75 transform"
        x-transition:leave-start="opacity-100 scale-100"
        x-transition:leave-end="opacity-0 scale-95"
    >
        <div>
            <h3 class="px-5 text-xs tracking-wider text-gray-500 uppercase">Accounts</h3>

            <div class="mt-2">
                <a class="block px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 transform sm:px-12 hover:text-gray-600 hover:bg-gray-100 bg-opacity-40" href="/">
                    Esther Howard
                </a>

                <a class="block px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 transform sm:px-12 hover:text-gray-600 hover:bg-gray-100 bg-opacity-40" href="/">
                    Cameron Williamson
                </a>
            </div>
        </div>

        <div>
            <h3 class="px-5 text-xs tracking-wider text-gray-500 uppercase">projects</h3>

            <div class="mt-2">
                <a class="block px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 transform sm:px-12 hover:text-gray-600 hover:bg-gray-100 bg-opacity-40" href="/">
                    Minimalist
                </a>

                <a class="block px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 transform sm:px-12 hover:text-gray-600 hover:bg-gray-100 bg-opacity-40" href="/">
                    Scandinavian
                </a>

                <a class="block px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 transform sm:px-12 hover:text-gray-600 hover:bg-gray-100 bg-opacity-40" href="/">
                    Classic
                </a>

                <a class="block px-5 py-2 text-sm text-gray-700 capitalize transition-colors duration-200 transform sm:px-12 hover:text-gray-600 hover:bg-gray-100 bg-opacity-40" href="/">
                    Modern
                </a>
            </div>
        </div>
    </div>
</div>
