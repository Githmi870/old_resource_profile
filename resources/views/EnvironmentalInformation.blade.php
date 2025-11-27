<x-app-layout>
    @vite('resources/js/pages/envinfo_con.js')
    <div class="py-6">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8 mb-5">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h2 class="text-xl font-semibold mb-4 dark:text-gray-200">1 ජල මුලාශ්‍ර විස්තර </h2>
                    <form id="waterSourceForm" class="max-w-2xl mx-auto p-8 bg-white dark:bg-gray-800 shadow-md rounded-md text-left">
                        @csrf

                        <div class="mb-6">
                            <label for="wr_name" class="block font-medium text-sm text-gray-700 dark:text-gray-300">ජල
                                මුලාශ්‍ර නම:</label>

                            <x-text-input type="text" id="wr_name" name="wr_name" required/>
                        </div>


                        <div class="mb-6">
                            <label for="wr_type"
                                class="block font-medium text-sm text-gray-700 dark:text-gray-300">වර්ගය:</label>
                            <select id="wr_type" name="wr_type" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" required>
                                <option value="" disabled selected>ජල මුලාශ්‍ර වර්ගයක් තෝරන්න</option>
                                <option value="ගංගාව">ගංගාව</option>
                                <option value="ජලාශය/වැව">ජලාශය/වැව</option>
                                <option value="උල්පත්/බුබුලු">උල්පත්/බුබුලු</option>
                                <option value="ඇල/දොළ">ඇල/දොළ</option>
                                <option value="පොදු ළිං">පොදු ළිං</option>
                                <option value="වෙනත්">වෙනත්</option>
                            </select>
                        </div>


                        <br>
                        <x-primary-button>insert</x-primary-button>
                    </form>
                </div>


                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <table class="shadow-md border rounded-lg w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 border"></th>
                                <th class="px-4 py-2 border">ID</th>
                                <th class="px-4 py-2 border">ජල මුලාශ්‍ර නම</th>
                                <th class="px-4 py-2 border">වර්ගය</th>
                            </tr>
                        </thead>
                        <tbody id="waterSourceTableBody">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8 mb-5">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h2 class="text-xl font-semibold mb-4 dark:text-gray-200">2 පාරිසරික වශයෙන් සංවේදී කලාප/ස්ථාන</h2>

                    <form id="snzForm" class="max-w-2xl mx-auto p-8 bg-white dark:bg-gray-800 shadow-md rounded-md text-left">
                        @csrf

                        <div class="mb-6">
                            <label for="snz_name"
                                class="block font-medium text-sm text-gray-700 dark:text-gray-300">කලාප/ස්ථාන නම
                                :</label>
                            <x-text-input type="text" id="snz_name" name="snz_name" required/>
                        </div>

                        <div class="mb-6">
                            <label for="snz_importance"
                                class="block font-medium text-sm text-gray-700 dark:text-gray-300">ස්ථානයේ/කලාපයේ
                                වැදගත්කම
                                :</label>
                            <x-text-input type="text" id="snz_importance" name="snz_importance" required/>
                        </div>

                        <br>
                        <x-primary-button>Insert</x-primary-button>
                        <x-input-error :messages="$errors->all()" />
                    </form>

                </div>


                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <table class="shadow-md border rounded-lg w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 border"></th>
                                <th class="px-4 py-2 border">ID</th>
                                <th class="px-4 py-2 border">කලාප/ස්ථාන නම</th>
                                <th class="px-4 py-2 border">ස්ථානයේ/කලාපයේ වැදගත්කම</th>
                            </tr>
                        </thead>
                        <tbody id="snzTableBody">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="max-w-8xl mx-auto sm:px-6 lg:px-8 mb-5">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h2 class="text-xl font-semibold mb-4 dark:text-gray-200">3 ප්‍රදේශයේ පවතින භෞතික සම්පත්</h2>
                <form action="" method="post" class="max-w-2xl mx-auto p-8 bg-white dark:bg-gray-800 shadow-md rounded-md text-left">
                    <form id="physicalSourceForm" class="space-y-4">
                        @csrf

                        <div class="mb-6">
                            <label for="physical_name" class="block font-medium text-sm text-gray-700 dark:text-gray-300">
                                භෞතික සම්පත් නම:</label>
                            <x-text-input type="text" id="physical_name" name="physical_name" required/>
                        </div>

                        <div class="mb-6">
                            <label class="block font-medium text-sm text-gray-700 dark:text-gray-300 mb-2">නිෂ්පාදන
                                කටයුත්තකට,සංවර්ධනයට යොදාගෙන තිබේද?:</label>

                            <div class="mb-6">

                                <div class="mt-2">
                                    <label class="inline-flex items-center">
                                        <input type="radio" class="form-radio" name="radio_option" value="yes">
                                        <span class="ml-2">ඇත</span>
                                    </label>
                                    <label class="inline-flex items-center ml-8">
                                        <input type="radio" class="form-radio" name="radio_option" value="no">
                                        <span class="ml-2">නැත</span>
                                    </label>
                                </div>
                            </div>



                            <br>
                            <x-primary-button>insert</x-primary-button>
                            <x-input-error :messages="$errors->all()" />
                    </form>
                </form>
            </div>
        </div>
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
            <table class="shadow-md border rounded-lg w-full">
                <thead>
                    <tr>
                        <th class="px-4 py-2 border">ID</th>
                        <th class="px-4 py-2 border">භෞතික සම්පත් නම</th>
                        <th class="px-4 py-2 border">නිෂ්පාදනය කටයුත්තකට,සංවර්ධනයට යොදාගෙන තිබේද</th>
                    </tr>
                </thead>
                <tbody id="physicalSourceTableBody">
                </tbody>
            </table>
        </div>
    </div>

    </div>
    <div class="max-w-8xl mx-auto sm:px-6 lg:px-8 mb-5">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h2 class="text-xl font-semibold mb-4 dark:text-gray-200">4 පාරිසරික ගැටළු හා ආපදාවන් </h2>
                <form action="" method="post" class="max-w-2xl mx-auto p-8 bg-white dark:bg-gray-800 shadow-md rounded-md text-left">
                    <form id="econSourceForm" class="space-y-4">
                        @csrf


                        <div class="mb-6">
                            <label for="econ_problem"
                                class="block font-medium text-sm text-gray-700 dark:text-gray-300">පාරිසරික ගැටළුව:</label>
                            <select id="econ_problem" name="econ_problem" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" required>
                                <option value="" disabled selected>ගැටළුව තෝරන්න</option>
                                <option value="ගංවතුර">ගංවතුර</option>
                                <option value="නියඟය">නියඟය</option>
                                <option value="නායයෑම්">නායයෑම්</option>
                                <option value="වන විනාශය">වන විනාශය</option>
                                <option value="ජල මූලාශ්‍ර සිඳී යාම">ජල මූලාශ්‍ර සිඳී යාම</option>
                                <option value="අක්‍රමවත් පහත් බිම් ගොඩ කිරීම">අක්‍රමවත් පහත් බිම් ගොඩ කිරීම</option>
                                <option value="කැලිකසළ">කැලිකසළ</option>
                                <option value="වන අලි">වන අලි</option>
                                <option value="වෙනත්">වෙනත්</option>
                            </select>
                        </div>
                        <div class="mb-6">
                            <label for="econ_time"
                                class="block font-medium text-sm text-gray-700 dark:text-gray-300">ඇත්නම් බහුලව සිදුවන
                                කාලසීමාව:</label>
                            <x-text-input type="text" id="econ_time" name="econ_time" required/>
                        </div>
                        <div class="mb-6">
                            <label for="suggession"
                                class="block font-medium text-sm text-gray-700 dark:text-gray-300">ගැටළුව සඳහා ගත යුතු පිළියම් යෝජනා :</label>
                            <x-text-input type="text" id="suggession" name="suggession" required/>
                        </div>

                        <br>
                        <x-primary-button>insert</x-primary-button>
                        <x-input-error :messages="$errors->all()" />
                    </form>
                </form>
            </div>


            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <table class="shadow-md border rounded-lg w-full">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 border">ID</th>
                            <th class="px-4 py-2 border">පාරිසරික ගැටළුව</th>
                            <th class="px-4 py-2 border">බහුලව සිදුවන
                                කාලසීමාව</th>
                            <th class="px-4 py-2 border">ගත යුතු පිළියම් යෝජනා</th>
                        </tr>
                    </thead>
                    <tbody id="econSourceTableBody">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="max-w-8xl mx-auto sm:px-6 lg:px-8 mb-5">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h2 class="text-xl font-semibold mb-4 dark:text-gray-200">5 හදිසි ආපදා අවස්ථාවකදී හඳුනාගත් ආරක්ෂිත ස්ථාන</h2>
                <form action="" method="post" class="max-w-2xl mx-auto p-8 bg-white dark:bg-gray-800 shadow-md rounded-md text-left">
                    <form id="emergencySourceForm" class="space-y-4">
                        @csrf

                        <div class="mb-6">
                            <label for="safe_place_name"
                                class="block font-medium text-sm text-gray-700 dark:text-gray-300">ආරක්ෂිත ස්ථානයේ නම
                                :</label>
                            <x-text-input type="text" id="safe_place_name" name="safe_place_name" required/>
                        </div>

                        <div class="mb-6">
                            <label for="safe_place_address"
                                class="block font-medium text-sm text-gray-700 dark:text-gray-300">ලිපිනය
                                :</label>
                            <x-text-input type="text" id="safe_place_address" name="safe_place_address" required/>
                        </div>



                        <br>
                        <x-primary-button>insert</x-primary-button>
                        <x-input-error :messages="$errors->all()" />
                    </form>
                </form>
            </div>


            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <table class="shadow-md border rounded-lg w-full">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 border">ID</th>
                            <th class="px-4 py-2 border">ආරක්ෂිත ස්ථානයේ නම</th>
                            <th class="px-4 py-2 border">ලිපිනය</th>
                        </tr>
                    </thead>
                    <tbody id="safePlaceTableBody">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="max-w-8xl mx-auto sm:px-6 lg:px-8 mb-5">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">

            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h2 class="text-xl font-semibold mb-4 dark:text-gray-200">6 සංචාරක ආකර්ශනය සහිත ප්‍රදේශ</h2>
                <form action="" method="post" class="max-w-2xl mx-auto p-8 bg-white dark:bg-gray-800 shadow-md rounded-md text-left">
                    <form id="touristSourceForm" class="space-y-4">
                        @csrf

                        <div class="mb-6">
                            <label for="tourist_place"
                                class="block font-medium text-sm text-gray-700 dark:text-gray-300"> ස්ථානයේ නම
                                :</label>
                            <x-text-input type="text" id="tourist_place" name="tourist_place" required/>
                        </div>

                        <div class="mb-6">
                            <label for="attaction"
                                class="block font-medium text-sm text-gray-700 dark:text-gray-300">ආකර්ශනය ඇතිවීමට හේතුව/ස්ථානයේ විශේෂත්වය
                                :</label>
                            <x-text-input type="text" id="attaction" name="attaction" required/>
                        </div>

                        <div class="mb-6">
                            <label for="right"
                                class="block font-medium text-sm text-gray-700 dark:text-gray-300">අයිතිය
                                :</label>
                            <x-text-input type="text" id="right" name="right" required/>
                        </div>


                        <br>
                        <x-primary-button>insert</x-primary-button>
                        <x-input-error :messages="$errors->all()" />
                    </form>
                </form>
            </div>


            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <table class="shadow-md border rounded-lg w-full">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 border">ID</th>
                            <th class="px-4 py-2 border">ස්ථානයේ නම</th>
                            <th class="px-4 py-2 border">ආකර්ශනය ඇතිවීමට හේතුව/ස්ථානයේ විශේෂත්වය</th>
                            <th class="px-4 py-2 border">අයිතිය</th>
                        </tr>
                    </thead>
                    <tbody id="touristTableBody">
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>
<x-footer />