<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name', 'DIGITECH') }}</title>
        <link rel="icon" href="{{ asset('LOGO.ico') }}">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <style>
            /* Styling untuk video background */
            .video-background {
                position: fixed;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                z-index: -1;
                object-fit: cover;
            }

            .hero-height {
                min-height: calc(100vh - 80px);
            }

            body {
                margin: 0;
                padding: 0;
                overflow: hidden;
            }

            /* Override warna teks dan tombol */
            .text-white-important {
                color: #fff !important;
            }

            .btn-red {
                background-color: #dc2626; /* Red-600 */
                color: #fff;
            }

            .btn-red:hover {
                background-color: #b91c1c; /* Red-700 */
            }
        </style>
    </head>
    <body>
        <!-- Video background -->
        <video autoplay loop muted class="video-background">
            <source src="{{ asset('background.webm') }}" type="video/webm">
            Your browser does not support the video tag.
        </video>

        <div class="flex flex-col items-center justify-center hero-height p-6 text-white-important">
            <!-- Logo -->
            <div class="flex justify-center mb-8">
                <div class="w-24 h-24 bg-red-600 rounded-2xl flex items-center justify-center shadow-lg">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="white" class="w-12 h-12">
                        <path d="M5.223 2.25c-.497 0-.974.198-1.325.55l-1.3 1.298A3.75 3.75 0 0 0 7.5 9.75c.627.47 1.406.75 2.25.75.844 0 1.624-.28 2.25-.75.626.47 1.406.75 2.25.75.844 0 1.623-.28 2.25-.75a3.75 3.75 0 0 0 4.902-5.652l-1.3-1.299a1.875 1.875 0 0 0-1.325-.549H5.223Z" />
                        <path fill-rule="evenodd" d="M3 20.25v-8.755c1.42.674 3.08.673 4.5 0A5.234 5.234 0 0 0 9.75 12c.804 0 1.568-.182 2.25-.506a5.234 5.234 0 0 0 2.25.506c.804 0 1.567-.182 2.25-.506 1.42.674 3.08.675 4.5.001v8.755h.75a.75.75 0 0 1 0 1.5H2.25a.75.75 0 0 1 0-1.5H3Zm3-6a.75.75 0 0 1 .75-.75h3a.75.75 0 0 1 .75.75v3a.75.75 0 0 1-.75.75h-3a.75.75 0 0 1-.75-.75v-3Zm8.25-.75a.75.75 0 0 0-.75.75v5.25c0 .414.336.75.75.75h3a.75.75 0 0 0 .75-.75v-5.25a.75.75 0 0 0-.75-.75h-3Z" clip-rule="evenodd" />
                    </svg>
                </div>
            </div>

            <!-- Hero Content -->
            <div class="w-full max-w-2xl mx-auto text-center">
                <h1 class="text-4xl md:text-5xl font-bold mb-6">
                    Welcome to <span class="text-white">Digitech</span>
                </h1>

                <p class="text-xl mb-10 max-w-md mx-auto leading-relaxed">
                    Your digital technology solution for modern business needs
                </p>

                @if (Route::has('login'))
                    <div class="flex justify-center space-x-4">
                        @auth
                            <a href="{{ url('/dashboard') }}"
                               class="px-8 py-4 btn-red font-medium rounded-lg transition-all duration-300 text-lg shadow-md hover:shadow-lg">
                                Go to Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}"
                               class="px-8 py-4 btn-red font-medium rounded-lg transition-all duration-300 text-lg shadow-md hover:shadow-lg transform hover:scale-105">
                                Login
                            </a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                   class="px-8 py-4 btn-red font-medium rounded-lg transition-all duration-300 text-lg shadow-md hover:shadow-lg transform hover:scale-105">
                                    Register
                                </a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </div>

        <footer class="py-6 text-center text-white text-sm">
            <p>&copy; {{ date('Y') }} Digitech. All rights reserved.</p>
        </footer>
    </body>
</html>
