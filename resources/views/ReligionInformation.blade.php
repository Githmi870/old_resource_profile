<x-app-layout>
    <div class="py-6">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8 mb-5">
            <div>
                
                <div>
                    
                    <div>

                        <div>
                        </div>
                        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                            <h4 class="text-xl font-semibold mb-4 dark:text-gray-200">1. සියලුම ආගමික ස්ථාන සංඛ්‍යාව</h4>
                            <table class="shadow-md border rounded-lg w-full">
                                <thead>
                                    <tr>
                                        <th class="px-4 py-2 border" rowspan="4"> </th>
                                        <th class="px-4 py-2 border" rowspan="2">පන්සල්/ ආරණ්‍ය/ විහාරස්ථාන/ අසපු </th>
                                        <th class="px-4 py-2 border" rowspan="2">මෙ‍හෙනි ආරාම</th>
                                        <th class="px-4 py-2 border" rowspan="2">ඉස්ලාම් ආරාම</th>
                                        <th class="px-4 py-2 border" colspan="2">කතෝලික පල්ලි</th>
                                        <th class="px-4 py-2 border" rowspan="2">කෝවිල්</th>
                                    </tr>
                                     <tr>
                                    </tr>  
                                    <tr>
                                        <th class="px-4 py-2 border" rowspan="2"> (භික්ෂුන් වහස්සේලා)</th>
                                        <th class="px-4 py-2 border" rowspan="2"> (මෙහෙණින් වහස්සේලා)</th>
                                        <th class="px-4 py-2 border" rowspan="2"> (මවුලවිතුමන්ලා)</th>
                                        <th class="px-4 py-2 border" rowspan="2">(පියතුමන්ලා)</th>
                                        <th class="px-4 py-2 border" rowspan="2">(කන්‍යා සොයුරියන්)</th>
                                        <th class="px-4 py-2 border" rowspan="2"> (පූජකතුමන්ලා/ පූසාරි)</th>
                                    </tr>
                                    <tr>
                                        
                                    </tr>
                                    
                                   
                                </thead>
                                <tbody id="waterSourceTableBody">
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>

        </div>
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8 mb-5">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">

                    <h2 class="text-xl font-semibold mb-4 dark:text-gray-200">2. ප්‍රදේශයේ ඇති ආගමික ස්ථානයන්හි පුජනීය ස්ථානවන්හි නම්
                    </h2>
                    <form action="" method="post"
                        class="max-w-2xl mx-auto p-8 bg-white dark:bg-gray-800 shadow-md rounded-md text-left">
                        <div>
                            <div>
                                <label for="school_name"
                                    class="block font-medium text-sm text-gray-700 dark:text-gray-300">ආගමික ස්ථානයන්හි/ පුජනීය ස්ථානයේ
                                    නම:</label>
                                <input type="text" id="school_name" name="school_name" required
                                    class="mt-1 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                            </div><br>
                            @csrf

                            <div>
                                <label for="source_type"
                                    class="block font-medium text-sm text-gray-700 dark:text-gray-300">වර්ගය:</label>
                                <select id="source_type" name="source_type" required
                                    class="mt-1 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                    <option value="" disabled selected>පුජනීය ස්ථාන වර්ගයක් තෝරන්න</option>
                                    <option value="ජාතික පාසල් ">පන්සල්/ විහාරස්ථාන </option>
                                    <option value="1 AB උසස් පෙල විද්‍යා විෂයන් ඇති පාසල්"> ආරණ්‍ය සේනාසන 
                                    </option>
                                    <option value="1 C උසස් පෙල කලා/ වාණිජ විෂයන් ඇති පාසල්"> අසපුව 
                                    </option>
                                    <option value="1-11 ශ්‍රේණිය දක්වා පන්ති පවත්වන පාසල්"> භාවනා මධ්‍යස්ථාන
                                    </option>
                                    <option value="ප්‍රාථමික පාසල්"> මෙහෙනි ආරාම </option>
                                    <option value="ප්‍රාථමික පාසල්"> පල්ලි - ඉස්ලාම් පල්ලි</option>
                                    <option value="ප්‍රාථමික පාසල්"> කතෝලික පල්ලි</option>
                                    <option value="ප්‍රාථමික පාසල්"> කොවිල්</option>
                                    <option value="ප්‍රාථමික පාසල්"> දේවාල</option>
                                </select>
                            </div><br>

                            <div>
                                <label for="teacher_count"
                                    class="block font-medium text-sm text-gray-700 dark:text-gray-300"> සුවිශේෂි විමට
                                    හේතු:</label>
                                <input type="text" id="teacher_count" name="teacher_count" required
                                    class="mt-1 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                            </div><br>
                            <button type="submit"
                                class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                                Insert
                            </button>
                        </div>

                    </form>
                </div>
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <table class="shadow-md border rounded-lg w-full">
                        <thead>
                            <tr>
                                <th class="px-4 py-2 border"> පුජනීය ස්ථානයේ නම </th>
                                <th class="px-4 py-2 border"> වර්ගය </th>
                                <th class="px-4 py-2 border"> සුවිශේෂි විමට හේතු </th>
                            </tr>
                        </thead>
                        <tbody id="privateSchoolTableBody">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8 mb-5">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h2 class="text-xl font-semibold mb-4 dark:text-gray-200">3. කලායතන පිළිබද විස්තර</h2>
                    <form action="" method="post"
                        class="max-w-2xl mx-auto p-8 bg-white dark:bg-gray-800 shadow-md rounded-md text-left">
                        <form method="POST" action="">
                            @csrf
                            <div>
                               
                                <div>
                                    <label for="art_center_name"
                                        class="block font-medium text-sm text-gray-700 dark:text-gray-300"> කලායතනයේ
                                        නම:</label>
                                    <input type="text" id="art_center_name" name="art_center_name" required
                                        class="mt-1 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                </div><br>

                                <div>
                                    <label for="student_count"
                                        class="block font-medium text-sm text-gray-700 dark:text-gray-300"> සිසුන්
                                        ගණන:</label>
                                    <input type="text" id="student_count" name="student_count" required
                                        class="mt-1 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                </div><br>
                                <button type="submit"
                                    class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                                    Insert
                                </button>
                            </div>
                        </form>
                </div>
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <table class="shadow-md border rounded-lg w-full">
                        <thead>
                            <tr>
                                
                                <th class="px-4 py-2 border"> කලායතනයේ නම </th>
                                <th class="px-4 py-2 border"> සිසුන් ගණන </th>
                            </tr>
                        </thead>
                        <tbody id="privateSchoolTableBody">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8 mb-5">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <h2 class="text-xl font-semibold mb-4 dark:text-gray-200">4. ප්‍රදේශයේ පවතින ප්‍රධාන සංස්කෘතිකාංග-
                        බිහිවු කළාකරුවන්/ කළා පරපුරවල් </h2>
                    <form action="" method="post"
                        class="max-w-2xl mx-auto p-8 bg-white dark:bg-gray-800 shadow-md rounded-md text-left">
                       
                        <br>
                        @csrf

                        <div>
                            <label for="source_type"
                                class="block font-medium text-sm text-gray-700 dark:text-gray-300">ප්‍රසිද්ධ කලා
                                ක්ෂේත්‍රය:</label>
                            <select id="source_type" name="source_type" required
                                class="mt-1 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                                <option value="" disabled selected>ප්‍රසිද්ධ කලා ක්ෂේත්‍රය තෝරන්න</option>
                                <option value="ජාතික පාසල් "> ලේඛකයන්</option>
                                <option value="ජාතික පාසල් "> කව්යන්</option>
                                <option value="ජාතික පාසල් ">වියතුන් </option>
                                <option value="ජාතික පාසල් ">බලි තොව්ල් </option>
                                <option value="1 AB උසස් පෙල විද්‍යා විෂයන් ඇති පාසල්"> රූකඩ නැටුම් </option>
                                <option value="ජාතික පාසල් ">චිත්‍ර ශිල්පින් </option>
                                <option value="ජාතික පාසල් "> බෙර වාදන ශිල්පින් </option>
                                <option value="1 C උසස් පෙල කලා/ වාණිජ විෂයන් ඇති පාසල්">විවිධ සංස්කෘතිකාංග </option>

                            </select>
                        </div><br>

                        <div>
                            <label for="teacher_count"
                                class="block font-medium text-sm text-gray-700 dark:text-gray-300">
                                බිහිවූ කලාකරුවන්
                                :</label>
                            <input type="text" id="teacher_count" name="teacher_count" required
                                class="mt-1 block w-80 border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm">
                        </div><br>
                        @csrf
                        <button type="submit"
                            class="inline-flex items-center px-4 py-2 bg-gray-800 dark:bg-gray-200 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest hover:bg-gray-700 dark:hover:bg-white focus:bg-gray-700 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                            Insert
                        </button>
                </div>
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                    <table class="shadow-md border rounded-lg w-full">
                        <thead>
                            <tr>
                                
                                <th class="px-4 py-2 border"> ප්‍රසිද්ධ කලා ක්ෂේත්‍රය </th>
                                <th class="px-4 py-2 border"> බිහිවූ කලාකරුවන් </th>
                            </tr>
                        </thead>
                        <tbody id="privateSchoolTableBody">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
<x-footer />