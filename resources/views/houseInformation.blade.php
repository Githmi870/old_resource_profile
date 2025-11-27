<x-app-layout>
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-5">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
                <h2 class="text-xl font-semibold mb-4 dark:text-gray-200">1. නිවාස තොරතුරු  </h2>

                <table class="shadow-md border rounded-lg w-full mb-5" border="1">
                    <tr>

                        <th class="px-4 py-2 border">මුළු නිවාස සංඛ්‍යාව</th>
                        <th class="px-4 py-2 border">ස්ථීර නිවාස සංඛ්‍යාව</th>
                        <th class="px-4 py-2 border">අර්ධ ස්ථීර නිවාස සංඛ්‍යාව</th>
                        <th class="px-4 py-2 border">අස්ථීර නිවාස සංඛ්‍යාව</th>

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
                <h2 class="text-xl font-semibold mb-4 dark:text-gray-200">2.නිවාස නොමැති පවුල් සංඛ්‍යාව/ගෘහ කාණ්ඩ සංඛ්‍යාව  </h2>

                <table class="shadow-md border rounded-lg w-full mb-5" border="1">
                    <tr>

                        <th class="px-4 py-2 border">මුළු පවුල් සංඛ්‍යාව/ගෘහ කාණ්ඩ සංඛ්‍යාව</th>
                        <th class="px-4 py-2 border">නිවාස නොමැති පවුල් සංඛ්‍යාව/ගෘහ කාණ්ඩ සංඛ්‍යාව</th>


                    </tr>
                    <tr>

                        <x-editable-table-cell></x-editable-table-cell>
                        <x-editable-table-cell></x-editable-table-cell>

                    </tr>

                </table>
                <x-primary-button>Update</x-primary-button>
            </div>
        </div>
       
    </div>
    </div>
</x-app-layout>
<x-footer />
