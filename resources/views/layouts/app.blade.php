<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'DIGITECH') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- Favicon -->
    <link rel="icon" href="{{ asset('LOGO.ico') }}">
</head>

<body class="font-sans antialiased flex flex-col min-h-screen bg-gray-100 dark:bg-gray-900">
    @include('layouts.navigation')

    <!-- Page Heading -->
    @isset($header)
        <header class="bg-white dark:bg-gray-800 shadow">
            <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                {{ $header }}
            </div>
        </header>
    @endisset

    <!-- Page Content -->
    <main class="flex-1">
        {{ $slot }}
    </main>

    <footer class="bg-black text-white text-center py-4">
        <p class="text-sm">&copy; 2025 @Digitech</p>
        <p class="text-sm">Contact Person: <a href="mailto:contact@digitech.com" class="text-blue-400">contact@digitech.com</a></p>
        
        <!-- Social Media Links -->
        <div class="mt-4">
            <a href="https://wa.me/1234567890" target="_blank" class="text-white mx-2 hover:text-green-500">
                <svg class="h-16 w-16 inline-block" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21 2H3c-1.1 0-1.99.9-1.99 2L1 20c0 1.1.9 2 2 2h18c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zM11 17l-4-4h2V9h4v4h2l-4 4z"/>
                </svg>
            </a>
            <a href="https://instagram.com/digitech" target="_blank" class="text-white mx-2 hover:text-pink-500">
                <svg class="h-16 w-16 inline-block" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 2.163c3.053 0 5.537 2.484 5.537 5.537 0 3.053-2.484 5.537-5.537 5.537-3.053 0-5.537-2.484-5.537-5.537 0-3.053 2.484-5.537 5.537-5.537zm0 9.842c2.361 0 4.305-1.944 4.305-4.305 0-2.361-1.944-4.305-4.305-4.305-2.361 0-4.305 1.944-4.305 4.305 0 2.361 1.944 4.305 4.305 4.305zM12 6c1.39 0 2.538 1.148 2.538 2.538 0 1.39-1.148 2.538-2.538 2.538-1.39 0-2.538-1.148-2.538-2.538 0-1.39 1.148-2.538 2.538-2.538zM4.153 2.538c-.835 0-1.513.678-1.513 1.513v16.548c0 .835.678 1.513 1.513 1.513h16.548c.835 0 1.513-.678 1.513-1.513V4.051c0-.835-.678-1.513-1.513-1.513H4.153z"/>
                </svg>
            </a>
            <a href="https://facebook.com/digitech" target="_blank" class="text-white mx-2 hover:text-blue-600">
                <svg class="h-16 w-16 inline-block" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path d="M22.675 0h-21.35C.672 0 0 .672 0 1.5v21c0 .828.672 1.5 1.5 1.5h11.211v-9.266h-3.042v-3.622h3.042v-2.67c0-3.001 1.771-4.668 4.569-4.668 1.327 0 2.723.099 3.075.144v3.584h-1.61c-1.264 0-1.606.747-1.606 1.523v2.98h3.217l-.427 3.622h-2.79v9.266h5.446c.828 0 1.5-.672 1.5-1.5v-21c0-.828-.672-1.5-1.5-1.5z"/>
                </svg>
            </a>
        </div>
    </footer>
    
    
</body>

</html>
