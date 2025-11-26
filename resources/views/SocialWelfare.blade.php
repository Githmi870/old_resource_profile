<x-app-layout>
    <div class="py-6">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-5">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h2 class="text-xl font-semibold mb-4 dark:text-gray-200">1 අස්වැසුම සහනාධාර බෙදී ගොස් ඇති ආකාරය </h2>

                <table class="shadow-md border rounded-lg w-full mb-5" border="1">
                    <tr>

                        <th class="px-4 py-2 border">මුළු පවුල් ගණන</th>
                        <th class="px-4 py-2 border">රු.2500 සංක්‍රාන්තික පවුල් සංඛ්‍යාව</th>
                        <th class="px-4 py-2 border">රු.5000 අවධානමට ලක් වූ පවුල් සංඛ්‍යාව</th>
                        <th class="px-4 py-2 border">රු.8500 දිළිඳු පවුල් සංඛ්‍යාව</th>
                        <th class="px-4 py-2 border">රු.15000 අන්ත දිළිඳු පවුල් සංඛ්‍යාව</th>
                        <th class="px-4 py-2 border">අස්වැසුම ප්‍රතිලාභී මුළු පවුල් සංඛ්‍යාව</th>
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
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-5">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h2 class="text-xl font-semibold mb-4 dark:text-gray-200">2.ආබාධිත දීමනා/වැඩිහිටි දීමනා/වෙනත් ආධාර
                    බෙදීගොස් ඇති ආකාරය </h2>

                <table class="shadow-md border rounded-lg w-full mb-5" border="1">
                    <tr>

                        <th class="px-4 py-2 border">ආබාධිත දීමනා ලබන ප්‍රතිලාභී සංඛ්‍යාව</th>
                        <th class="px-4 py-2 border">වැඩිහිටි දීමනා ලබන ප්‍රතිලාභී සංඛ්‍යාව</th>
                        <th class="px-4 py-2 border">මහජන ආධාර ලබන ප්‍රතිලාභී සංඛ්‍යාව</th>
                        <th class="px-4 py-2 border">වෙනත් සහනාධාර ලබන ප්‍රතිලාභී සංඛ්‍යාව</th>

                    </tr>
                    <tr>

                        <x-editable-table-cell></x-editable-table-cell>
                        <x-editable-table-cell></x-editable-table-cell>
                        <x-editable-table-cell></x-editable-table-cell>
                        <x-editable-table-cell></x-editable-table-cell>

                    </tr>

                </table>
                <x-primary-button>Update</x-primary-button>
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-5">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h2 class="text-xl font-semibold mb-4 dark:text-gray-200">3. වැඩිහිටි නිවාස පිලිබඳ තොරතුරු</h2>

                <table class="shadow-md border rounded-lg w-full mb-5" border="1">
                    <thead>
                        <tr>

                            <th class="px-4 py-2 border" rowspan="2">වැඩිහිටි නිවාසයේ නම</th>
                            <th class="px-4 py-2 border" rowspan="2">දුරකථන අංකය</th>
                            <th class="px-4 py-2 border" rowspan="2">වැඩිහිටි නිවාසයේ ධාරිතාව</th>

                            <th class="px-4 py-2 border" colspan="2">දැනට සිටින වැඩිහිටියන් සංඛ්‍යාව</th>
                        </tr>

                        <tr>
                            <th class="px-4 py-2 border">ගැහැණු</th>
                            <th class="px-4 py-2 border">පිරිමි</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr>
                            
                            <x-editable-table-cell></x-editable-table-cell>
                            <x-editable-table-cell></x-editable-table-cell>
                            <x-editable-table-cell></x-editable-table-cell>
                            <x-editable-table-cell></x-editable-table-cell>
                            <x-editable-table-cell></x-editable-table-cell>
                        </tr>
                    </tbody>
                </table>
                <x-primary-button>UPDATE</x-primary-button>
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-5">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h2 class="text-xl font-semibold mb-4 dark:text-gray-200">4. ළමා  නිවාස පිලිබඳ තොරතුරු</h2>

                <table class="shadow-md border rounded-lg w-full mb-5" border="1">
                    <thead>
                        <tr>

                            <th class="px-4 py-2 border" rowspan="2">ළමා නිවාසයේ නම</th>
                            <th class="px-4 py-2 border" rowspan="2">දුරකථන අංකය</th>
                            <th class="px-4 py-2 border" rowspan="2">ළමා නිවාසයේ ධාරිතාව</th>

                            <th class="px-4 py-2 border" colspan="2">දැනට සිටින ළමයින් සංඛ්‍යාව</th>
                        </tr>

                        <tr>
                            <th class="px-4 py-2 border">ගැහැණු</th>
                            <th class="px-4 py-2 border">පිරිමි</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <tr>

                            <x-editable-table-cell></x-editable-table-cell>
                            <x-editable-table-cell></x-editable-table-cell>
                            <x-editable-table-cell></x-editable-table-cell>
                            <x-editable-table-cell></x-editable-table-cell>
                            <x-editable-table-cell></x-editable-table-cell>
                        </tr>
                    </tbody>
                </table>
                <x-primary-button>UPDATE</x-primary-button>
            </div>
        </div>
    </div>
</x-app-layout>
