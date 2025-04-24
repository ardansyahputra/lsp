<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Digitech</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            .hero-height {
                min-height: calc(100vh - 80px);
            }
        </style>
    </head>
    <body class="bg-gradient-to-br from-gray-50 to-indigo-50 dark:bg-gradient-to-br dark:from-gray-900 dark:to-gray-800">
        <div class="flex flex-col items-center justify-center hero-height p-6">
            <!-- Hero Content -->
            <div class="w-full max-w-2xl mx-auto text-center">
                <!-- Logo -->
                <div class="flex justify-center mb-8">
                    <div class="w-24 h-24 bg-indigo-600 dark:bg-indigo-700 rounded-2xl flex items-center justify-center shadow-lg">
                        <svg class="w-12 h-12 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                </div>
                
                <!-- Heading -->
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 dark:text-white mb-6">
                    Welcome to <span class="text-indigo-600 dark:text-indigo-400">Digitech</span>
                </h1>
                
                <!-- Subheading -->
                <p class="text-xl text-gray-600 dark:text-gray-300 mb-10 max-w-md mx-auto leading-relaxed">
                    Your digital technology solution for modern business needs
                </p>
                
                <!-- Login Button -->
                @if (Route::has('login'))
                    <div class="flex justify-center">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="px-8 py-4 bg-indigo-600 hover:bg-indigo-700 text-white font-medium rounded-lg transition-all duration-300 text-lg shadow-md hover:shadow-lg">
                                Go to Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}" class="px-8 py-4 bg-indigo-600 hover:bg-indigo-700 text-white font-medium rounded-lg transition-all duration-300 text-lg shadow-md hover:shadow-lg transform hover:scale-105">
                                Get Started - Login
                            </a>
                        @endauth
                    </div>
                @endif
            </div>
        </div>

        <!-- Footer -->
        <footer class="py-6 text-center text-gray-500 dark:text-gray-400 text-sm">
            <p>&copy; {{ date('Y') }} Digitech. All rights reserved.</p>
        </footer>
    </body>
</html>