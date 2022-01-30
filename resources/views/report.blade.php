<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>تقرير الأبار</title>
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" integrity="sha512-wnea99uKIC3TJF7v4eKk4Y+lMz2Mklv18+r4na2Gn1abDRPPOeef95xTzdwGD9e6zXJBteMIhZ1+68QC5byJZw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> --}}
</head>
<style>
    body {
        font-family: XB Riyaz;
        font-size: 12px
    }
    @page {
	header: page-header;
	footer: page-footer;
}

</style>

<body dir="rtl">

    <div name="page-header" style="margin-bottom: 50px">
        <img src="{{ asset('assets/images/header.jpeg') }}" alt="images" style="width:900px;height:100px;">
    </div>

    <div class="mt-6">
        <div class="p-4 bg-white rounded-lg shadow-sm xl:p-8">
            {{-- <div class="space-y-3 sm:flex sm:items-start sm:space-y-0 sm:justify-between">
                <h2 class="text-lg font-medium text-gray-700 capitalize sm:text-xl md:text-2xl">الأبار</h2>

                <a href="{{ route('basic-informations.create') }}"
                    class="flex items-center justify-center px-3 py-2 space-x-2 text-sm tracking-wide text-white capitalize transition-colors duration-200 transform bg-indigo-500 rounded-md dark:bg-indigo-600 dark:hover:bg-indigo-700 dark:focus:bg-indigo-700 hover:bg-indigo-600 focus:outline-none focus:bg-indigo-500 focus:ring focus:ring-indigo-300 focus:ring-opacity-50">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z"
                            clip-rule="evenodd"></path>
                    </svg>

                    <span>أضافة بئر</span>
                </a>

                <!-- component -->
                <!-- This is an example component -->

            </div> --}}
            {{-- <form action="{{route('search')}}" method="GET">
                @csrf
                <div class="pt-2 relative mx-auto text-gray-600">
                    <input class="border-2 border-gray-300 bg-white h-10 px-8 pr-10 rounded-lg text-sm focus:outline-none"
                        type="search" name="search" placeholder="بحث" value="{{request()->input('search')}}">
                    <button class="bg-indigo-500 text-white font-semie-bold py-2 px-4 rounded">بحث</button>
                </div>
            </form> --}}

            <div class="flex flex-col mt-8">
                <div class="-my-2 overflow-x-auto xl:-mx-8">
                    <div class="inline-block min-w-full py-2 align-right sm:px-6 lg:px-8">
                        <div class="overflow-hidden">
                            <table class="min-w-full divide-y divide-gray-200" id="basic-informations-table">
                                <thead>
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-right">
                                            #
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-sm font-medium tracking-wider text-right text-gray-700 uppercase whitespace-nowrap">
                                            state
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-sm font-medium tracking-wider text-right text-gray-700 uppercase whitespace-nowrap">
                                            local
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-sm font-medium tracking-wider text-right text-gray-700 uppercase whitespace-nowrap">
                                            Region
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-sm font-medium tracking-wider text-right text-gray-700 uppercase whitespace-nowrap">
                                            Owner
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-sm font-medium tracking-wider text-right text-gray-700 uppercase whitespace-nowrap">
                                            Advisor
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-sm font-medium tracking-wider text-right text-gray-700 uppercase whitespace-nowrap">
                                            Funded
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-sm font-medium tracking-wider text-right text-gray-700 uppercase whitespace-nowrap">
                                            P.M
                                        </th>

                                        <th scope="col"
                                            class="px-5 py-3 text-sm font-medium tracking-wider text-right text-gray-700 uppercase whitespace-nowrap">
                                            Days
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-sm font-medium tracking-wider text-right text-gray-700 uppercase whitespace-nowrap">
                                            Cost
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-sm font-medium tracking-wider text-right text-gray-700 uppercase whitespace-nowrap">
                                            Date
                                        </th>
                                    </tr>
                                </thead>

                                <tbody class="bg-white divide-y divide-gray-200">
                                    @foreach($basicInformations as $index => $basicInformation)
                                        <tr>
                                            <td class="px-6 py-4 whitespace-nowrap">
                                                {{ $basicInformation->id }}
                                            </td>

                                            <td class="flex-1 px-6 py-4 text-gray-500 whitespace-nowrap">
                                                {{ $basicInformation->state->name }}
                                            </td>
                                            <td class="flex-1 px-6 py-4 text-gray-500 whitespace-nowrap">
                                                {{ $basicInformation->local->name }}
                                            </td>
                                            <td class="flex-1 px-6 py-4 text-gray-500 whitespace-nowrap">
                                                {{ $basicInformation->region->name }}
                                            </td>
                                            <td class="flex-1 px-6 py-4 text-gray-500 whitespace-nowrap">
                                                {{ $basicInformation->owner }}
                                            </td>
                                            <td class="flex-1 px-6 py-4 text-gray-500 whitespace-nowrap">
                                                {{ $basicInformation->advisor }}
                                            </td>
                                            <td class="flex-1 px-6 py-4 text-gray-500 whitespace-nowrap">
                                                {{ $basicInformation->funded }}
                                            </td>
                                            <td class="flex-1 px-6 py-4 text-gray-500 whitespace-nowrap">
                                                {{ $basicInformation->project_manager }}
                                            </td>

                                            <td class="flex-1 px-6 py-4 text-gray-500 whitespace-nowrap">
                                                {{ $basicInformation->execution_time }}
                                            </td>
                                            <td class="flex-1 px-6 py-4 text-gray-500 whitespace-nowrap">
                                                {{ $basicInformation->total_cost }}
                                            </td>
                                            <td class="flex-1 px-6 py-4 text-gray-500 whitespace-nowrap">
                                                {{ $basicInformation->start_date }}
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>

                            <div class="w-full mt-8 bg-white dark:bg-gray-800">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <br>
<div name="page-footer" style="margin-top: 160px">
    <img src="{{ asset('assets/images/footer.jpeg') }}" alt="images" style="width:900px;height:100px;">
</div>
</body>


</html>
