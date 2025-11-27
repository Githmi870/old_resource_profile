<x-guest-layout>
    <style>
        .dot-loader {
            display: flex;
            gap: 8px;
            justify-content: center;
            align-items: center;
            height: 50px;
        }

        .dot {
            width: 10px;
            height: 10px;
            background-color: #333;
            border-radius: 50%;
            opacity: 0.2;
            animation: blink 1.5s infinite;
        }

        .dot:nth-child(2) {
            animation-delay: 0.3s;
        }

        .dot:nth-child(3) {
            animation-delay: 0.6s;
        }

        @keyframes blink {

            0%,
            80%,
            100% {
                opacity: 0.2;
            }

            40% {
                opacity: 1;
            }
        }
    </style>
    <div class="flex flex-col justify-center items-center pt-6 sm:pt-0">
        <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
            <div class="text-center">
                <div class="dot-loader">
                    <span class="dot"></span>
                    <span class="dot"></span>
                    <span class="dot"></span>
                </div>
                <h1 class="text-2xl font-bold mb-4 text-gray-800 dark:text-gray-200">Please Wait...</h1>
                <p class="text-gray-600 dark:text-gray-400 mb-2">Your Registration Request is being reviewed. Contact System Administrator 0770109123</p>
                <a href="{{ route('home') }}" class="mt-4 pt-4 pb-2 underline">Go to Home Page</a>
            </div>
        </div>
    </div>
</x-guest-layout>