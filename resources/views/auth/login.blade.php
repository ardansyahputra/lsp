<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ 'DIGITECH | Login' }}</title>
    <link rel="icon" href="{{ asset('LOGO.ico') }}">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Icons (Font Awesome) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />

    <style>
        .video-background {
            position: fixed;
            top: 0;
            left: 0;
            min-width: 100%;
            min-height: 100%;
            object-fit: cover;
            z-index: -1;
        }
    </style>
</head>
<body class="flex items-center justify-center min-h-screen bg-transparent relative overflow-hidden">

    <!-- Video background -->
    <video autoplay loop muted class="video-background">
        <source src="{{ asset('background.webm') }}" type="video/webm">
        Your browser does not support the video tag.
    </video>

    <div class="w-full max-w-md p-8 bg-white/70 backdrop-blur-md rounded-lg shadow-md z-10">
        <h2 class="text-2xl font-bold text-center mb-6">Login</h2>
    
        @if (session('error'))
            <div class="mb-4 text-red-600 text-sm">
                {{ session('error') }}
            </div>
        @endif
    
        @if (session('status'))
            <div class="mb-4 text-green-600 text-sm">
                {{ session('status') }}
            </div>
        @endif
    
        <form method="POST" action="{{ route('login') }}">
            @csrf
    
            <div class="mb-4">
                <label for="email" class="block mb-1 font-medium text-sm text-gray-700">Email</label>
                <div class="flex items-center border rounded px-3 py-2">
                    <i class="fa fa-envelope text-gray-400 mr-2"></i>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus class="w-full focus:outline-none bg-transparent">
                </div>
            </div>
    
            <div class="mb-4">
                <label for="password" class="block mb-1 font-medium text-sm text-gray-700">Password</label>
                <div class="flex items-center border rounded px-3 py-2">
                    <i class="fa fa-lock text-gray-400 mr-2"></i>
                    <input id="password" type="password" name="password" required class="w-full focus:outline-none bg-transparent">
                </div>
            </div>
    
            <div class="mb-4 flex items-center justify-between">
                <label class="inline-flex items-center">
                    <input type="checkbox" name="remember" class="form-checkbox">
                    <span class="ml-2 text-sm text-gray-600">Remember me</span>
                </label>
            </div>
    
            <div class="mb-4">
                <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded">
                    Login
                </button>
            </div>
    
            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif
            </div>
        </form>
    </div>    

</body>
</html>
