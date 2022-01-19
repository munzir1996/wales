<div x-cloak :class="sidebarOpen ? 'block' : 'hidden'" @click="sidebarOpen = false" class="fixed inset-0 z-20 transition-opacity bg-black opacity-50 lg:hidden"></div>

<div x-cloak :class="sidebarOpen ? 'translate-x-0 ease-in lg:-translate-x-full' : '-translate-x-full ease-out lg:translate-x-0 lg:relative lg:inset-0'" class="fixed inset-y-0 left-0 z-30 w-64 px-4 overflow-y-auto transition duration-200 transform bg-white border-r border-gray-100 ">
    <div class="flex items-center mt-8 space-x-2">
        {{-- <svg class="w-8 h-8 text-indigo-500" viewBox="0 0 240 240" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M100.392 153.699L103.562 145.775C104.357 143.51 106.78 142.258 109.087 142.922L151.019 155.51L195.894 82.2426L81.8265 49.6388L100.392 153.699ZM198.34 73.2313V29.7143L158.174 59.8275L198.34 73.2313ZM238.37 55.5709L207.396 30.2124V52.8539L238.37 55.5709ZM197.117 97.6388L163.109 153.337L193.811 144.009L197.117 97.6388ZM144.679 163.299L110.445 153.02C100.347 178.243 107.411 161.035 76.0755 235.118L144.679 163.299ZM72.4529 48.6879L0.76985 63.7671L86.8076 128.205L72.4529 48.6879ZM60.317 119.782L22.4151 91.3445L0.724568 108.099L60.317 119.782Z" fill="currentColor"/>
        </svg> --}}
      <img src="{{asset('assets/images/logoathrib.png')}}" alt="images" style="width:200px;height:200px;">

     
    </div>

    <hr class="my-6 border-gray-100">

    <nav class="space-y-8">
        <div class="space-y-4">
            <h3 class="px-4 text-sm tracking-wider text-gray-400 uppercase">الصفحات</h3>

            <a class="flex items-center px-4 py-2 space-x-3 {{ Request::is('/') ? 'text-gray-600 bg-gray-200' : 'text-gray-500 hover:text-gray-600 hover:bg-gray-100' }} transition-colors duration-200 transform rounded-lg bg-opacity-40" href="/">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                </svg>

                <span class="font-medium capitalize">لوحة التحكم</span>
            </a>

            <div x-data="{{ Route::is('states*') || Route::is('locals*') || Route::is('regions*') ? '{ open: true }' : '{ open: false }'}}">
                <button @click="open = !open" class="flex items-center justify-between w-full px-4 py-2 text-gray-500 transition-colors duration-300 transform rounded-lg hover:text-gray-600 hover:bg-gray-100 bg-opacity-40">
                    <span class="flex items-center space-x-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                        </svg>

                        <span class="font-medium capitalize">الضبط</span>
                    </span>

                    <span>
                        <svg class="w-4 h-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path x-show="! open" d="M9 5L16 12L9 19" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                            <path x-show="open" d="M19 9L12 16L5 9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </span>
                </button>

                <div
                    x-show="open"
                    x-transition:enter="transition ease-out duration-200 transform"
                    x-transition:enter-start="opacity-0 -translate-y-5"
                    x-transition:enter-end="opacity-100 translate-y-0"
                    x-transition:leave="transition ease-in duration-200 transform"
                    x-transition:leave-start="opacity-100 translate-y-0"
                    x-transition:leave-end="opacity-0 -translate-y-5"
                    class="mt-2"
                >
                    <a href="{{route('states.index')}}" class="flex items-center px-4 py-2 space-x-3 {{ Request::is('states*') ? 'text-gray-600 bg-gray-200' : 'text-gray-500 hover:text-gray-600 hover:bg-gray-100' }} transition-colors duration-300 transform rounded-lg bg-opacity-40">
                        <span class="font-medium capitalize">الولاية</span>
                    </a>

                    <a href="{{route('locals.index')}}" class="flex items-center px-4 py-2 space-x-3 {{ Request::is('locals*') ? 'text-gray-600 bg-gray-200' : 'text-gray-500 hover:text-gray-600 hover:bg-gray-100' }} transition-colors duration-300 transform rounded-lg bg-opacity-40">
                        <span class="font-medium capitalize">المحلية</span>
                    </a>

                    <a href="{{route('regions.index')}}" class="flex items-center px-4 py-2 space-x-3 {{ Request::is('regions*') ? 'text-gray-600 bg-gray-200' : 'text-gray-500 hover:text-gray-600 hover:bg-gray-100' }} transition-colors duration-300 transform rounded-lg bg-opacity-40">
                        <span class="font-medium capitalize">المنطقه</span>
                    </a>

                    {{-- <a class="flex items-center px-4 py-2 space-x-3 {{ Request::is('project-managers*') ? 'text-gray-600 bg-gray-200' : 'text-gray-500 hover:text-gray-600 hover:bg-gray-100' }} transition-colors duration-300 transform rounded-lg bg-opacity-40" href="/cards">
                        <span class="font-medium capitalize">مدير المشروع</span>
                    </a> --}}
                </div>
            </div>

            <a href="{{route('basic-informations.index')}}" class="flex items-center px-4 py-2 space-x-3 {{ Request::is('basic-informations*') ? 'text-gray-600 bg-gray-200' : 'text-gray-500 hover:text-gray-600 hover:bg-gray-100' }} transition-colors duration-300 transform rounded-lg bg-opacity-40">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
                </svg>

                <span class="font-medium capitalize">الأبار</span>
            </a>

            <a href="{{route('basic-informations.index')}}" class="flex items-center px-4 py-2 space-x-3 {{ Request::is('basic-informations*') ? 'text-gray-600 bg-gray-200' : 'text-gray-500 hover:text-gray-600 hover:bg-gray-100' }} transition-colors duration-300 transform rounded-lg bg-opacity-40">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 3.055A9.001 9.001 0 1020.945 13H11V3.055z" />
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20.488 9H15V3.512A9.025 9.025 0 0120.488 9z" />
                </svg>

                <span class="font-medium capitalize">المستخدمين</span>
            </a>

        </div>

    </nav>
</div>
