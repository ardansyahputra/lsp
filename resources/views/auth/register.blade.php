<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ 'DIGITECH | Register' }}</title>
    <link rel="icon" href="{{ asset('LOGO.ico') }}">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    <style>
        .video-background {
            position: fixed;
            top: 0; left: 0;
            width: 100%; height: 100%;
            object-fit: cover;
            z-index: -1;
        }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen overflow-hidden">

    <!-- Background video -->
    <video autoplay muted loop class="video-background">
        <source src="{{ asset('background.webm') }}" type="video/webm">
    </video>

    <div class="w-full max-w-md p-8 bg-white/70 backdrop-blur-md rounded-lg shadow-md z-10">
        <h2 class="text-2xl font-bold text-center mb-6">Register</h2>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-input-label for="name" :value="__('Name')" />
                <div class="flex items-center border rounded px-3 py-2">
                    <i class="fa fa-user text-gray-400 mr-2"></i>
                    <x-text-input id="name" class="block mt-1 w-full bg-transparent focus:outline-none" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                </div>
                <x-input-error :messages="$errors->get('name')" class="mt-2" />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-input-label for="email" :value="__('Email')" />
                <div class="flex items-center border rounded px-3 py-2">
                    <i class="fa fa-envelope text-gray-400 mr-2"></i>
                    <x-text-input id="email" class="block mt-1 w-full bg-transparent focus:outline-none" type="email" name="email" :value="old('email')" required autocomplete="username" />
                </div>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-input-label for="password" :value="__('Password')" />
                <div class="flex items-center border rounded px-3 py-2">
                    <i class="fa fa-lock text-gray-400 mr-2"></i>
                    <x-text-input id="password" class="block mt-1 w-full bg-transparent focus:outline-none" type="password" name="password" required autocomplete="new-password" />
                </div>
                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                <div class="flex items-center border rounded px-3 py-2">
                    <i class="fa fa-lock text-gray-400 mr-2"></i>
                    <x-text-input id="password_confirmation" class="block mt-1 w-full bg-transparent focus:outline-none" type="password" name="password_confirmation" required autocomplete="new-password" />
                </div>
                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-primary-button class="ms-4 flex items-center">
                    <i class="fa fa-user-plus mr-2"></i> {{ __('Register') }}
                </x-primary-button>
            </div>
        </form>

    </div>

</body>
</html>
