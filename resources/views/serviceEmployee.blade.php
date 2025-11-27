<x-app-layout>
    <div class="py-6">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8 mb-5">
            <div>
                <h2 class="text-xl font-semibold mb-4 dark:text-gray-200"> </h2>
                <div>
                    <h4 class="text-xl font-semibold mb-4 dark:text-gray-200"> 1 .රැකියා නියුක්තිය</h4>
                    <div>

                        <div>
                        </div>
                        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                            <table class="shadow-md border rounded-lg w-full">
                                <thead>
                                    <tr>
                                        <th class="px-4 py-2 border" rowspan="2"> ජන සංඛ්‍යාව</th>
                                        <th class="px-4 py-2 border" rowspan="2">ස්ත්‍රී</th>
                                        <th class="px-4 py-2 border" rowspan="2">පුරුෂ</th>
                                        <th class="px-4 py-2 border" colspan="2">රැකියා නියුක්ත පුද්ගලයින් ගණන</th>
                                        <th class="px-4 py-2 border" colspan="2">රැකියා වියුක්ත පුද්ගලයින් ගණන</th>

                                    </tr>
                                    <tr>
                                        <th class="px-4 py-2 border">ස්ත්‍රී</th>
                                        <th class="px-4 py-2 border">පුරුෂ</th>
                                        <th class="px-4 py-2 border">ස්ත්‍රී</th>
                                        <th class="px-4 py-2 border">පුරුෂ</th>
                                    </tr>

                                    <tr>
                                        <td class="px-4 py-2 border">(අවු . 15-60 දක්වා)</td>
                                    <x-editable-table-cell></x-editable-table-cell>
                        <x-editable-table-cell></x-editable-table-cell>
                        <x-editable-table-cell></x-editable-table-cell>
                        <x-editable-table-cell></x-editable-table-cell>
                        <x-editable-table-cell></x-editable-table-cell>
                        <x-editable-table-cell></x-editable-table-cell>
                                    </tr>

                                    <tr>
                                        <td class="px-4 py-2 border">(අවු 60 ට වැඩි )</td>
                                    <x-editable-table-cell></x-editable-table-cell>
                        <x-editable-table-cell></x-editable-table-cell>
                        <x-editable-table-cell></x-editable-table-cell>
                        <x-editable-table-cell></x-editable-table-cell>
                        <x-editable-table-cell></x-editable-table-cell>
                        <x-editable-table-cell></x-editable-table-cell>
                                    </tr>
                                </thead>
                                <tbody class="text-center" id="serviceSourceTableBody">
                                </tbody>
                            </table>
                            <br>
                            <br>
                            <x-primary-button>Update</x-primary-button>
                        </div>
                    </div>
                </div>
            </div>


        <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-5">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h2 class="text-xl font-semibold mb-4 dark:text-gray-200">2. රැකියාවන්ගේ බෙදී යාම  </h2>

                <table class="shadow-md border rounded-lg w-full mb-5" border="1">
                    <tr>

                        <th class="px-4 py-2 border">අවු: 15 ට වැඩි ජන සංඛ්‍යාව</th>
                        <th class="px-4 py-2 border">රාජ්‍ය / අර්_ධ රාජ්‍ය( නියුතු සංඛ්‍යාව)</th>
                        <th class="px-4 py-2 border">පෞද්ගලික අංශය( නියුතු සංඛ්‍යාව)</th>
                        <th class="px-4 py-2 border">ස්වයං රැකියා( නියුතු සංඛ්‍යාව)</th>
                        <th class="px-4 py-2 border">විදේශ රැකියා( නියුතු සංඛ්‍යාව)</th>
                        <th class="px-4 py-2 border">වෙනත් ( නියුතු සංඛ්‍යාව)</th>
                    </tr>
                    <tr>

                        <x-editable-table-cell></x-editable-table-cell>
                        <x-editable-table-cell></x-editable-table-cell>
                        <x-editable-table-cell></x-editable-table-cell>
                        <x-editable-table-cell></x-editable-table-cell>
                        <x-editable-table-cell></x-editable-table-cell>
                        <x-editable-table-cell></x-editable-table-cell>
                    </tr>

                </table>
                <x-primary-button>Update</x-primary-button>
            </div>
        </div>


<div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-5">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h2 class="text-xl font-semibold mb-4 dark:text-gray-200">3.අඩු ආදායම් ලාභී පවුල් සංඛ්‍යාව  -  </h2>

                <table class="shadow-md border rounded-lg w-full mb-5" border="1">
                    <tr>

                        <th class="px-4 py-2 border">මුලු පවුල් සංඛ්‍යාව/ගෘහ කාණ්ඩ සංඛ්‍යාව </th>
                        <th class="px-4 py-2 border">අඩු ආදායම් ලාභී පවුල් සංඛ්‍යාව/ගෘහ කාණ්ඩ සංඛ්‍යාව </th>
                    </tr>
                    <tr>

                        <x-editable-table-cell></x-editable-table-cell>
                        <x-editable-table-cell></x-editable-table-cell>

                </table>
                <x-primary-button>Update</x-primary-button>
            </div>
        </div>

</x-app-layout>
<x-footer />
