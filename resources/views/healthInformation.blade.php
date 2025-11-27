<x-app-layout>
    @vite('resources/js/pages/gh_con.js')
    <div class="py-6">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8 mb-5">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h2 class="text-xl font-semibold mb-4 dark:text-gray-200">1. සෞඛ්‍ය ආයතන</h2>

                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <table class="shadow-md border rounded-lg w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 border"></th>
                                <th class="px-4 py-2 border" colspan="2" style="text-align: left;"><center>සෞඛ්‍ය ආයතන වර්ගය</center>
                                </th>
                                <th class="px-4 py-2 border">සංඛ්‍යාව</th>
                            </tr>

                            <tr>
                                <td class="px-4 py-2 border">1</td>
                                <th class="px-4 py-2 border" colspan="2" style="text-align: left;">රජයේ රෝහල්
                                    සංඛ්‍යාව</td>
                                <x-editable-table-cell>0</x-editable-table-cell>
                            </tr>

                            <tr>
                                <td class="px-4 py-2 border">2</td>
                                <th class="px-4 py-2 border" colspan="2" style="text-align: left;">පෞද්ගලික රෝහල්
                                    සංඛ්‍යාව (නේවාසික පහසුකම් සහිත)</td>
                               <x-editable-table-cell>0</x-editable-table-cell>
                            </tr>

                            <tr>
                                <td class="px-4 py-2 border">3</td>
                                <th class="px-4 py-2 border" colspan="2" style="text-align: left;">ආයුර්වේද
                                    රෝහල්/ආයුර්වේද මධ්‍යම බෙහෙත් ශාලා සංඛ්‍යාව </td>
                               <x-editable-table-cell>0</x-editable-table-cell>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border">4</td>
                                <th class="px-4 py-2 border" colspan="2" style="text-align: left;">සෞඛ්‍ය වෛද්‍ය
                                    නිළධාරි කාර්යාල/ග්‍රාමෝදය සෞඛ්‍ය මධ්‍යස්ථාන
                                    </td>
                                <x-editable-table-cell>0</x-editable-table-cell>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border" rowspan="2">5</td>
                                <td class="px-4 py-2 border" rowspan="2">ෆාමසි/ඔසුසල් සංඛ්‍යාව</td>
                                <td class="px-4 py-2 border">රජයේ ඔසුසල්</td>
                               <x-editable-table-cell>0</x-editable-table-cell>
                            </tr>
                            <tr>
                                <td class="px-4 py-2 border">පෞද්ගලික ෆාමසි</td>
                                <x-editable-table-cell>0</x-editable-table-cell>

                            </tr>

                        </thead>
                        <tbody class="text-center" id="healthSourceTableBody">
                        </tbody>
                    </table>

                    <br>

                     <button type="submit"
                                class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                                Insert
                            </button>
                </div>
            </div>
        </div>
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8 mb-5">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h2 class="text-xl font-semibold mb-4 dark:text-gray-200">2 රජයේ රෝහල් වල නම හා ලිපිනය</h2>
                    <form id="hospitalSourceForm"
                        class="max-w-2xl mx-auto p-8 bg-white dark:bg-gray-800 shadow-md rounded-md text-left">
                            @csrf

                            <div class="mb-6">
                                <label for="gh_name"
                                    class="block font-medium text-sm text-gray-700 dark:text-gray-300">රජයේ රෝහලේ නම
                                    :</label>
                                <input type="text" id="gh_name" name="gh_name" required
                                    class="mt-1 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                            </div>

                            <div class="mb-6">
                                <label for="gh_type"
                                    class="block font-medium text-sm text-gray-700 dark:text-gray-300">රෝහල්
                                    වර්ගය:</label>
                                <select id="gh_type" name="gh_type" required
                                    class="mt-1 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                    <option value="" disabled selected>වර්ගය තෝරන්න</option>
                                    <option value="අවු. 0-04">අවු.0-04</option>


                                </select>
                            </div>


                            <br>
                            <button type="submit"
                                class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                                Insert
                            </button>
                    </form>
                </div>


                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <table class="shadow-md border rounded-lg w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 border">ID</th>
                                <th class="px-4 py-2 border">රෝහලේ නම</th>
                                <th class="px-4 py-2 border">රෝහල් වර්ගය</th>
                            </tr>
                        </thead>
                        <tbody class="text-center" id="hospitalSourceTableBody">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8 mb-5">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h2 class="text-xl font-semibold mb-4 dark:text-gray-200">3 පෞද්ගලික රෝහල් වල නම හා ලිපිනය</h2>
                    <form id="privateHospitalForm"
                        class="max-w-2xl mx-auto p-8 bg-white dark:bg-gray-800 shadow-md rounded-md text-left">

                            @csrf

                            <div class="mb-6">
                                <label for="private_hospital"
                                    class="block font-medium text-sm text-gray-700 dark:text-gray-300">පෞද්ගලික රෝහලේ නම
                                    :</label>
                                <input type="text" id="private_hospital" name="private_hospital" required
                                    class="mt-1 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                            </div>

                            <div class="mb-6">
                                <label for="private_hospital_address"
                                    class="block font-medium text-sm text-gray-700 dark:text-gray-300">ලිපිනය
                                    :</label>
                                <input type="text" id="private_hospital_address" name="private_hospital_address" required
                                    class="mt-1 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                            </div>


                            <br>
                            <button type="submit"
                                class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                                Insert
                            </button>

                    </form>
                </div>


                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <table class="shadow-md border rounded-lg w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 border">ID</th>
                                <th class="px-4 py-2 border">රෝහලේ නම</th>
                                <th class="px-4 py-2 border">රෝහල් ලිපිනය</th>
                            </tr>
                        </thead>
                        <tbody class="text-center" id="privateHospitalTableBody">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8 mb-5">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h2 class="text-xl font-semibold mb-4 dark:text-gray-200">4 වෛද්‍ය නිළධාරී කාර්යාල/ග්‍රාමෝදය වෛද්‍ය මධ්‍යස්ථාන</h2>
                    <form id="doctorSourceForm"
                        class="max-w-2xl mx-auto p-8 bg-white dark:bg-gray-800 shadow-md rounded-md text-left">

                            @csrf

                            <div class="mb-6">
                                <label for="institute_name"
                                    class="block font-medium text-sm text-gray-700 dark:text-gray-300">ආයතනයේ
                                    නම
                                    :</label>
                                <input type="text" id="institute_name" name="institute_name" required
                                    class="mt-1 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                            </div>

                            <div class="mb-6">
                                <label for="institute_address"
                                    class="block font-medium text-sm text-gray-700 dark:text-gray-300">ලිපිනය
                                    :</label>
                                <input type="text" id="institute_address" name="institute_address" required
                                    class="mt-1 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                            </div>


                            <br>
                            <button type="submit"
                                class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                                Insert
                            </button>
                        </form>
                    
                </div>


                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <table class="shadow-md border rounded-lg w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 border">ID</th>
                                <th class="px-4 py-2 border">ආයතනයේ නම</th>
                                <th class="px-4 py-2 border">ලිපිනය</th>
                            </tr>
                        </thead>
                        <tbody class="text-center" id="doctorSourceTableBody">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
<x-footer />
