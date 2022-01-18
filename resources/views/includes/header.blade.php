<header class="bg-white border-b border-gray-100">
    <div class="flex items-center justify-between px-4 py-4 sm:px-6">
        <div class="flex items-center space-x-4">
            <button @click="sidebarOpen = !sidebarOpen" class="text-gray-500 focus:outline-none">
                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>

            @include('includes.search')
        </div>

        <div class="flex items-center space-x-2 sm:space-x-4">
            <div x-data="{ dropdownOpen: false }" class="relative inline-block">
                <button @click="dropdownOpen = ! dropdownOpen" class="relative z-10 block text-gray-700 focus:outline-none">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                    </svg>
                </button>

                <div class="absolute left-0 z-20 w-64 mt-2 overflow-hidden bg-white rounded-md shadow-lg sm:w-80"
                    x-show="dropdownOpen"
                    x-cloak
                    x-transition:enter="transition ease-out duration-100 transform"
                    x-transition:enter-start="opacity-0 scale-95"
                    x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75 transform"
                    x-transition:leave-start="opacity-100 scale-100"
                    x-transition:leave-end="opacity-0 scale-95"
                    @click.away="dropdownOpen = false"
                >
                    <div class="flex items-center justify-between px-4 pt-4">
                        <h4 class="text-lg font-medium text-gray-700 capitalize">notifications</h4>
                        <button class="text-sm text-indigo-600 hover:underline focus:outline-none">Clear all</button>
                    </div>

                    <div class="py-2 divide-y divide-gray-100">
                        <a href="#" class="flex px-4 py-3 -mx-2 transition-colors duration-200 transform hover:bg-gray-50">
                            <p class="mx-2 text-sm text-gray-600 truncate"><span class="font-bold" href="#">Modern </span> Project updated . 11m</p>
                        </a>

                        <a href="#" class="flex px-4 py-3 -mx-2 transition-colors duration-200 transform hover:bg-gray-50">
                            <p class="mx-2 text-sm text-gray-600 truncate"><span class="font-bold" href="#">Slick Net</span> start following you . 45m</p>
                        </a>

                        <a href="#" class="flex px-4 py-3 -mx-2 transition-colors duration-200 transform hover:bg-gray-50">
                            <p class="mx-2 text-sm text-gray-600 truncate"><span class="font-bold" href="#">Abigail Bennett</span> create new project . 3h</p>
                        </a>
                    </div>
                </div>
            </div>

            <div x-data="{ dropdownOpen: false }" class="relative inline-block">
                <button @click="dropdownOpen = ! dropdownOpen" class="relative z-10 flex items-center flex-shrink-0 text-sm text-gray-600 focus:outline-none">
                    <img class="flex-shrink-0 object-cover w-8 h-8 rounded-full" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" alt="john avatar">
                </button>

                <div class="absolute left-0 z-20 w-56 py-2 mt-2 overflow-hidden bg-white rounded-md shadow-xl"
                    x-show="dropdownOpen"
                    x-cloak
                    x-transition:enter="transition ease-out duration-100 transform"
                    x-transition:enter-start="opacity-0 scale-95"
                    x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-75 transform"
                    x-transition:leave-start="opacity-100 scale-100"
                    x-transition:leave-end="opacity-0 scale-95"
                    @click.away="dropdownOpen = false"
                >
                    <a href="#" class="flex items-center p-3 -mt-2 text-sm text-gray-600 transition-colors duration-200 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                        <img class="flex-shrink-0 object-cover mx-1 rounded-full w-9 h-9" src="https://images.unsplash.com/photo-1570295999919-56ceb5ecca61?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=880&q=80" alt="john avatar">
                        <div class="mx-1">
                            <h1 class="text-sm font-semibold text-gray-700 dark:text-gray-200">John Doe</h1>
                            <p class="text-sm text-gray-500 dark:text-gray-400">johndoe@example.com</p>
                        </div>
                    </a>

                    <hr class="border-gray-200 dark:border-gray-700 ">

                    <a href="#" class="block px-4 py-2 text-sm text-gray-600 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                        Profile
                    </a>

                    <a href="#" class="block px-4 py-2 text-sm text-gray-600 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                        Team
                    </a>

                    <a href="#" class="block px-4 py-2 text-sm text-gray-600 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                        Settings
                    </a>

                    <hr class="border-gray-200 dark:border-gray-700 ">

                    <a href="#" class="block px-4 py-2 text-sm text-gray-600 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                        Help
                    </a>

                    <a href="/sign-in" class="block px-4 py-2 text-sm text-gray-600 capitalize transition-colors duration-200 transform dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-700 dark:hover:text-white">
                        Sign Out
                    </a>
                </div>
            </div>
        </div>
    </div>
</header>
