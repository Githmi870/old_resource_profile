<!-- resources/views/team/portfolio.blade.php -->
<x-app-layout :hideNavigation="true">
    <x-slot name="header">
        <div class="flex items-center justify-center py-4 px-6">
            <div class="flex items-center space-x-4">
                <x-application-logo class="h-10 w-10 text-gray-800 dark:text-white" />
                <h1 class="text-2xl font-semibold text-gray-800 dark:text-white leading-tight">
                    {{ __('Our Development Team') }}
                </h1>
            </div>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <!-- Projects Overview Section -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-12">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200 border-l-4 border-l-blue-600">
                        <h2 class="text-2xl font-bold mb-3 text-gray-800 dark:text-white">Resource Profile</h2>
                        <p class="text-gray-600 dark:text-gray-400 mb-4">
                            A comprehensive Laravel web application designed to manage and showcase resource profiles with an intuitive interface and robust backend infrastructure.
                        </p>
                        <div class="flex items-center text-blue-600 font-semibold">
                            <span class="mr-2">🚀</span> Actively Developed
                        </div>
                    </div>
                </div>

                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 bg-white border-b border-gray-200 border-l-4 border-l-green-600">
                        <h2 class="text-2xl font-bold mb-3 text-gray-800 dark:text-white">CivicData Core</h2>
                        <p class="text-gray-600 dark:text-gray-400 mb-4">
                            A Flutter-based mobile application providing civic data accessibility with cross-platform support, offline capabilities, and seamless integration with backend services.
                        </p>
                        <div class="flex items-center text-green-600 font-semibold">
                            <span class="mr-2">📱</span> Actively Developed
                        </div>
                    </div>
                </div>
            </div>

            <!-- Team Lead Section -->
            <div class="mb-12">
                <h2 class="text-2xl font-bold mb-6 text-gray-800 dark:text-white">Team Lead & Senior Developer</h2>
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg border-l-4 border-l-blue-600">
                    <div class="p-6 bg-white">
                        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                            <!-- Avatar Section -->
                            <div class="flex flex-col items-center justify-start">
                                <div class="w-32 h-32 rounded-lg bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center shadow-md mb-4">
                                    <span class="text-5xl">👨‍💻</span>
                                </div>
                                <a href="mailto:msasindu450@gmail.com" class="w-full px-4 py-2 bg-blue-600 text-white rounded font-semibold hover:bg-blue-700 transition text-center text-sm">
                                    Contact
                                </a>
                            </div>

                            <!-- Main Info -->
                            <div class="md:col-span-3">
                                <h3 class="text-2xl font-bold text-gray-800 dark:text-white mb-2">Sasindu Manamperi</h3>
                                <p class="text-lg text-blue-600 font-semibold mb-1">Senior Full-Stack Developer & Team Lead</p>
                                <p class="text-gray-600 dark:text-gray-400 mb-4 text-sm">NVQ5 in ICT (Apprentice)</p>
                                
                                <p class="text-gray-700 dark:text-gray-300 mb-6 leading-relaxed">Lead architect and senior developer overseeing both mobile and web applications. Managing full-stack development of Resource Profile and spearheading the complete Flutter mobile application (CivicData Core) including database architecture.</p>

                                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                    <!-- Responsibilities -->
                                    <div>
                                        <h4 class="font-bold text-gray-800 dark:text-white mb-3 text-sm">
                                            ⚙️ KEY RESPONSIBILITIES
                                        </h4>
                                        <ul class="space-y-2">
                                            <li class="flex items-start text-gray-700 dark:text-gray-300 text-sm">
                                                <span class="text-blue-500 mr-3 mt-0.5 font-bold">✓</span>
                                                <span>Full-stack development of CivicData Core mobile application</span>
                                            </li>
                                            <li class="flex items-start text-gray-700 dark:text-gray-300 text-sm">
                                                <span class="text-blue-500 mr-3 mt-0.5 font-bold">✓</span>
                                                <span>Full-stack development of Resource Profile</span>
                                            </li>
                                            <li class="flex items-start text-gray-700 dark:text-gray-300 text-sm">
                                                <span class="text-blue-500 mr-3 mt-0.5 font-bold">✓</span>
                                                <span>Team coordination and technical mentorship</span>
                                            </li>
                                            <li class="flex items-start text-gray-700 dark:text-gray-300 text-sm">
                                                <span class="text-blue-500 mr-3 mt-0.5 font-bold">✓</span>
                                                <span>Database design and optimization</span>
                                            </li>
                                            <li class="flex items-start text-gray-700 dark:text-gray-300 text-sm">
                                                <span class="text-blue-500 mr-3 mt-0.5 font-bold">✓</span>
                                                <span>Backend development instruction to team members</span>
                                            </li>
                                        </ul>
                                    </div>

                                    <!-- Projects -->
                                    <div>
                                        <h4 class="font-bold text-gray-800 dark:text-white mb-3 text-sm">
                                            🎯 PROJECTS
                                        </h4>
                                        <ul class="space-y-2">
                                            <li class="flex items-center text-gray-700 dark:text-gray-300 text-sm">
                                                <span class="inline-block w-2 h-2 bg-blue-600 rounded-full mr-3"></span>
                                                <span>Resource Profile (Full-Stack)</span>
                                            </li>
                                            <li class="flex items-center text-gray-700 dark:text-gray-300 text-sm">
                                                <span class="inline-block w-2 h-2 bg-blue-600 rounded-full mr-3"></span>
                                                <span>CivicData Core (Full-Stack)</span>
                                            </li>
                                        </ul>
                                        <p class="text-xs text-gray-600 dark:text-gray-400 mt-4">
                                            <strong>Expertise:</strong> Full-Stack Development
                                        </p>
                                    </div>
                                </div>

                                <div class="border-t border-gray-200 dark:border-gray-700 pt-4 flex items-center space-x-6">
                                    <a href="mailto:msasindu450@gmail.com" class="flex items-center text-blue-600 hover:text-blue-800 dark:hover:text-blue-400 font-semibold text-sm">
                                        <span class="mr-2">✉️</span> msasindu450@gmail.com
                                    </a>
                                    <a href="tel:+94XXXXXXXXX" class="flex items-center text-blue-600 hover:text-blue-800 dark:hover:text-blue-400 font-semibold text-sm">
                                        <span class="mr-2">📞</span> +94-741514211
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Other Team Members Section -->
            <div>
                <h2 class="text-2xl font-bold mb-6 text-gray-800 dark:text-white">Development Team</h2>
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <!-- Team Member 1 -->
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg hover:shadow-lg transition">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <div class="flex justify-center mb-4">
                                <div class="w-24 h-24 rounded-lg bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center shadow-md">
                                    <span class="text-3xl">👨‍💻</span>
                                </div>
                            </div>

                            <h3 class="text-lg font-bold text-gray-800 dark:text-white mb-1 text-center">Githmi Sanara</h3>
                            <p class="text-blue-600 font-semibold text-sm text-center mb-1">Frontend Developer & Technical Support</p>
                            <p class="text-gray-600 dark:text-gray-400 text-xs text-center mb-4">NVQ5 in ICT (Apprentice)</p>

                            <div class="border-t border-gray-200 dark:border-gray-700 pt-4">
                                <p class="text-gray-700 dark:text-gray-300 text-sm mb-4 leading-relaxed">Focused on creating intuitive and responsive user interfaces. Contributing to the frontend development of Resource Profile with modern design principles.</p>

                                <div class="mb-4">
                                    <p class="text-xs font-semibold text-gray-700 dark:text-gray-400 mb-2">EXPERTISE</p>
                                    <span class="inline-block bg-gray-100 dark:bg-gray-700 px-3 py-1 rounded text-xs text-gray-800 dark:text-gray-200 font-semibold">
                                        UI/UX & Frontend & Documentation
                                    </span>
                                </div>

                                <div class="mb-4">
                                    <p class="text-xs font-semibold text-gray-700 dark:text-gray-400 mb-2">PROJECTS</p>
                                    <div class="inline-block bg-blue-50 dark:bg-blue-900 px-3 py-1 rounded text-xs text-blue-700 dark:text-blue-300">
                                        Resource Profile (Frontend)
                                    </div>
                                    <div class="inline-block bg-blue-50 dark:bg-blue-900 px-3 py-1 rounded text-xs text-blue-700 dark:text-blue-300">
                                        CivicData Core (Frontend)
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <p class="text-xs font-semibold text-gray-700 dark:text-gray-400 mb-2">KEY RESPONSIBILITIES</p>
                                    <ul class="space-y-1">
                                        <li class="text-gray-700 dark:text-gray-300 text-xs flex items-start">
                                            <span class="text-blue-500 mr-2 font-bold">•</span>
                                            <span>Resource Profile frontend development</span>
                                        </li>
                                        <li class="text-gray-700 dark:text-gray-300 text-xs flex items-start">
                                            <span class="text-blue-500 mr-2 font-bold">•</span>
                                            <span>CivicData Core User interface design</span>
                                        </li>
                                        <li class="text-gray-700 dark:text-gray-300 text-xs flex items-start">
                                            <span class="text-blue-500 mr-2 font-bold">•</span>
                                            <span>Technical Documentation</span>
                                        </li>
                                    </ul>
                                </div>

                                <div class="border-t border-gray-200 dark:border-gray-700 pt-4">
                                    <a href="mailto:member1@example.com" class="block w-full px-4 py-2 bg-blue-50 dark:bg-blue-900 text-blue-600 dark:text-blue-400 rounded font-semibold text-sm hover:bg-blue-100 dark:hover:bg-blue-800 transition text-center">
                                        Contact
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Team Member 2 -->
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg hover:shadow-lg transition">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <div class="flex justify-center mb-4">
                                <div class="w-24 h-24 rounded-lg bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center shadow-md">
                                    <span class="text-3xl">👨‍💻</span>
                                </div>
                            </div>

                            <h3 class="text-lg font-bold text-gray-800 dark:text-white mb-1 text-center">Januli Jayathma</h3>
                            <p class="text-blue-600 font-semibold text-sm text-center mb-1">Frontend Developer</p>
                            <p class="text-gray-600 dark:text-gray-400 text-xs text-center mb-4">NVQ5 in ICT (Apprentice)</p>

                            <div class="border-t border-gray-200 dark:border-gray-700 pt-4">
                                <p class="text-gray-700 dark:text-gray-300 text-sm mb-4 leading-relaxed">Specializing in frontend technologies and user experience. Contributing to Resource Profile frontend while learning backend concepts under team lead guidance.</p>

                                <div class="mb-4">
                                    <p class="text-xs font-semibold text-gray-700 dark:text-gray-400 mb-2">EXPERTISE</p>
                                    <span class="inline-block bg-gray-100 dark:bg-gray-700 px-3 py-1 rounded text-xs text-gray-800 dark:text-gray-200 font-semibold">
                                        Frontend Development
                                    </span>
                                </div>

                                <div class="mb-4">
                                    <p class="text-xs font-semibold text-gray-700 dark:text-gray-400 mb-2">PROJECTS</p>
                                    <div class="inline-block bg-blue-50 dark:bg-blue-900 px-3 py-1 rounded text-xs text-blue-700 dark:text-blue-300">
                                        Resource Profile (Frontend)
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <p class="text-xs font-semibold text-gray-700 dark:text-gray-400 mb-2">KEY RESPONSIBILITIES</p>
                                    <ul class="space-y-1">
                                        <li class="text-gray-700 dark:text-gray-300 text-xs flex items-start">
                                            <span class="text-blue-500 mr-2 font-bold">•</span>
                                            <span>Resource Profile frontend development</span>
                                        </li>
                                        <li class="text-gray-700 dark:text-gray-300 text-xs flex items-start">
                                            <span class="text-blue-500 mr-2 font-bold">•</span>
                                            <span>JavaScript functionality implementation</span>
                                        </li>
                                    </ul>
                                </div>

                                <div class="border-t border-gray-200 dark:border-gray-700 pt-4">
                                    <a href="mailto:member2@example.com" class="block w-full px-4 py-2 bg-blue-50 dark:bg-blue-900 text-blue-600 dark:text-blue-400 rounded font-semibold text-sm hover:bg-blue-100 dark:hover:bg-blue-800 transition text-center">
                                        Contact
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Team Member 3 -->
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg hover:shadow-lg transition">
                        <div class="p-6 bg-white border-b border-gray-200">
                            <div class="flex justify-center mb-4">
                                <div class="w-24 h-24 rounded-lg bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center shadow-md">
                                    <span class="text-3xl">👨‍💻</span>
                                </div>
                            </div>

                            <h3 class="text-lg font-bold text-gray-800 dark:text-white mb-1 text-center">Tharushi Sanjana</h3>
                            <p class="text-blue-600 font-semibold text-sm text-center mb-1">Frontend Developer</p>
                            <p class="text-gray-600 dark:text-gray-400 text-xs text-center mb-4">HND in IT (Apprentice)</p>

                            <div class="border-t border-gray-200 dark:border-gray-700 pt-4">
                                <p class="text-gray-700 dark:text-gray-300 text-sm mb-4 leading-relaxed">Contributing to Resource Profile frontend development while providing technical support and learning full-stack development practices.</p>

                                <div class="mb-4">
                                    <p class="text-xs font-semibold text-gray-700 dark:text-gray-400 mb-2">EXPERTISE</p>
                                    <span class="inline-block bg-gray-100 dark:bg-gray-700 px-3 py-1 rounded text-xs text-gray-800 dark:text-gray-200 font-semibold">
                                        Frontend Development
                                    </span>
                                </div>

                                <div class="mb-4">
                                    <p class="text-xs font-semibold text-gray-700 dark:text-gray-400 mb-2">PROJECTS</p>
                                    <div class="inline-block bg-blue-50 dark:bg-blue-900 px-3 py-1 rounded text-xs text-blue-700 dark:text-blue-300">
                                        Resource Profile (Frontend)
                                    </div>
                                </div>

                                <div class="mb-4">
                                    <p class="text-xs font-semibold text-gray-700 dark:text-gray-400 mb-2">KEY RESPONSIBILITIES</p>
                                    <ul class="space-y-1">
                                        <li class="text-gray-700 dark:text-gray-300 text-xs flex items-start">
                                            <span class="text-blue-500 mr-2 font-bold">•</span>
                                            <span>Resource Profile frontend development</span>
                                        </li>
                                    </ul>
                                </div>

                                <div class="border-t border-gray-200 dark:border-gray-700 pt-4">
                                    <a href="mailto:member3@example.com" class="block w-full px-4 py-2 bg-blue-50 dark:bg-blue-900 text-blue-600 dark:text-blue-400 rounded font-semibold text-sm hover:bg-blue-100 dark:hover:bg-blue-800 transition text-center">
                                        Contact
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer Info -->
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-12">
                <div class="p-6 bg-white border-b border-gray-200 text-center">
                    <p class="text-gray-800 dark:text-white font-semibold mb-2">
                        Planning Secretariat - Southern Province, Sri Lanka
                    </p>
                    <p class="text-gray-600 dark:text-gray-400 text-sm mb-2">
                        IT Trainee Team - 2025
                    </p>
                    <p class="text-gray-600 dark:text-gray-400 text-sm">
                        Committed to building innovative solutions and delivering quality applications
                    </p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>