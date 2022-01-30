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
                                            الولايه
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-sm font-medium tracking-wider text-right text-gray-700 uppercase whitespace-nowrap">
                                            المحليه
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-sm font-medium tracking-wider text-right text-gray-700 uppercase whitespace-nowrap">
                                            المنطقه
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-sm font-medium tracking-wider text-right text-gray-700 uppercase whitespace-nowrap">
                                            المالك
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-sm font-medium tracking-wider text-right text-gray-700 uppercase whitespace-nowrap">
                                            الإستشاري
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-sm font-medium tracking-wider text-right text-gray-700 uppercase whitespace-nowrap">
                                            الممول
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-sm font-medium tracking-wider text-right text-gray-700 uppercase whitespace-nowrap">
                                            مدير المشروع
                                        </th>

                                        <th scope="col"
                                            class="px-5 py-3 text-sm font-medium tracking-wider text-right text-gray-700 uppercase whitespace-nowrap">
                                            مده التنفيذ
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-sm font-medium tracking-wider text-right text-gray-700 uppercase whitespace-nowrap">
                                            التكلفه
                                        </th>
                                        <th scope="col"
                                            class="px-6 py-3 text-sm font-medium tracking-wider text-right text-gray-700 uppercase whitespace-nowrap">
                                            التاريخ
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
<div name="page-footer" style="margin-top: 180px">
    <img src="{{ asset('assets/images/footer.jpeg') }}" alt="images" style="width:900px;height:100px;">
    
</div>
</body>


</html>