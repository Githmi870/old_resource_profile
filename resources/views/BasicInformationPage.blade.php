<x-app-layout>
    @vite('resources/js/pages/basicinfo_con.js')
    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8 mb-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-8">
                    <h2 class="text-xl font-semibold mb-6 dark:text-gray-200">1.රාජ්‍ය ආයතන පිළිබඳ තොරතුරු</h2>
                    <form id="govFig" class="max-w-2xl mx-auto p-8 bg-white dark:bg-gray-800 shadow-md rounded-md text-left">
                        @csrf
                        <div class="mb-6">
                            <x-input-label for="source_name" >ආයතනයේ නම:</x-input-label>
                            <x-text-input type="text" id="gf_name" name="gf_name" required />
                        </div>
                        <div class="mb-6">
                            <x-input-label for="source_type" >වර්ගය:</x-input-label>
                            <select id="gf_type" name="gf_type" class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" required>
                                <option value="" disabled selected>ආයතන වර්ගයක් තෝරන්න</option>
                                <option value="මධ්‍යම රජයේ ආයතන">මධ්‍යම රජයේ ආයතන</option>
                                <option value="පළාත් සභා ආයතන">පළාත් සභා ආයතන</option>
                                <option value="අර්ධ රාජ්‍ය ආයතන">අර්ධ රාජ්‍ය ආයතන</option>
                            </select>
                        </div>
                        <div class="mb-6">
                            <x-input-label for="source_name" >ලිපිනය:</x-input-label>
                            <x-text-input type="text" id="gf_address" name="gf_address" required />
                        </div>
                        <x-primary-button>insert</x-primary-button>
                        <x-input-error :messages="$errors->all()" />
                    </form>

                </div>

                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-8">
                    <div class="w-full overflow-x-auto lg:overflow-y-auto lg:max-h-96">
                        <table class="shadow-md border rounded-lg w-full min-w-[400px]">
                            <thead>
                                <tr>
                                    <th class="px-6 py-6 border"></th>
                                    <th class="px-6 py-3 border">අනු අංකය</th>
                                    <th class="px-6 py-3 border">ආයතනයේ නම</th>
                                    <th class="px-6 py-3 border">ආයතන වර්ගය</th>
                                    <th class="px-6 py-3 border">ලිපිනය</th>
                                </tr>
                            </thead>
                            <tbody class="text-center" id="govFigTable">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8 mb-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-8">
                    <h2 class="text-xl font-semibold mb-6 dark:text-gray-200">2.අතහැර දැමූ රජයේ ගොඩනැගිලි පිළිබඳ තොරතුරු</h2>
                    <form id="AbFig" class="max-w-2xl mx-auto p-8 bg-white dark:bg-gray-800 shadow-md rounded-md text-left">
                        @csrf
                        <div class="mb-6">
                            <x-input-label for="ab_name" >ගොඩනැගිල්ලේ නම:</x-input-label>
                            <x-text-input type="text" id="ab_name" name="ab_name" required />
                        </div>
                        <div class="mb-6">
                            <x-input-label for="ab_used_for" >යොදාගත් කාර්‍යය:</x-input-label>
                            <x-text-input type="text" id="ab_used_for" name="ab_used_for" required />
                        </div>
                        <div class="mb-6">
                            <x-input-label >නැවත භාවිතයට ගත හැකිද?:</x-input-label>
                            <div class="mt-2">
                                <x-input-label class="inline-flex items-center">
                                    <input type="radio" class="form-radio" name="ab_is_retrievable" value="ඔව්">
                                    <span class="ml-2">ඔව්</span>
                                </x-input-label>
                                <x-input-label class="inline-flex items-center ml-8">
                                    <input type="radio" class="form-radio" name="ab_is_retrievable" value="නැත">
                                    <span class="ml-2">නැත</span>
                                </x-input-label>
                            </div>
                        </div>
                        <x-primary-button>insert</x-primary-button>
                        <x-input-error :messages="$errors->all()" />
                    </form>
                </div>

                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-8">
                    <div class="w-full overflow-x-auto lg:overflow-y-auto lg:max-h-96">
                        <table class="shadow-md border rounded-lg w-full min-w-[500px]">
                            <thead>
                                <tr>
                                    <th class="px-6 py-6 border"></th>
                                    <th class="px-6 py-3 border">අනු අංකය</th>
                                    <th class="px-6 py-3 border">ගොඩනැගිල්ලේ නම</th>
                                    <th class="px-6 py-3 border">යොදාගත් කාර්‍යය</th>
                                    <th class="px-6 py-3 border">නැවත භාවිතයට ගත හැකිද?</th>
                                </tr>
                            </thead>
                            <tbody class="text-center" id="AbFigTable">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8 mb-8">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">

                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-8">
                    <h2 class="text-xl font-semibold mb-6 dark:text-gray-200">2.අතහැර දැමූ රජයේ ව්‍යාපෘති පිළිබඳ තොරතුරු</h2>
                    <form id="formAP" class="max-w-2xl mx-auto p-8 bg-white dark:bg-gray-800 shadow-md rounded-md text-left">
                        @csrf
                        <div class="mb-6">
                            <x-input-label for="ap_name" >ව්‍යාපෘතියේ නම:</x-input-label>
                            <x-text-input type="text" id="ap_name" name="ap_name" required />
                        </div>
                        <div class="mb-6">
                            <x-input-label for="ap_reason" >නවතා දැමීමට හේතුව:</x-input-label>
                            <x-text-input type="text" id="ap_reason" name="ap_reason" required />
                        </div>
                        <x-primary-button>insert</x-primary-button>
                        <x-input-error :messages="$errors->all()" />
                    </form>
                </div>

                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-8">
                    <div class="w-full overflow-x-auto lg:overflow-y-auto lg:max-h-96">
                        <table class="shadow-md border rounded-lg w-full min-w-[400px]">
                            <thead>
                                <tr>
                                    <th class="px-6 py-6 border"></th>
                                    <th class="px-6 py-3 border">අනු අංකය</th>
                                    <th class="px-6 py-3 border">ව්‍යාපෘතියේ නම</th>
                                    <th class="px-6 py-3 border">නවතා දැමීමට හේතුව</th>
                                </tr>
                            </thead>
                            <tbody class="text-center" id="APBody">
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
<x-footer />