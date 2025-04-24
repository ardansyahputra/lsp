<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Optional: Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Icons (Font Awesome CDN) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">

    <div class="w-full max-w-md p-8 bg-white rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-center mb-6">Login</h2>

        @if (session('error'))
            <div class="mb-4 text-red-600 text-sm">
                {{ session('error') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-4">
                <label for="email" class="block mb-1 font-medium text-sm text-gray-700">Email</label>
                <div class="flex items-center border rounded px-3 py-2">
                    <i class="fa fa-envelope text-gray-400 mr-2"></i>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus class="w-full focus:outline-none">
                </div>
            </div>

            <div class="mb-4">
                <label for="password" class="block mb-1 font-medium text-sm text-gray-700">Password</label>
                <div class="flex items-center border rounded px-3 py-2">
                    <i class="fa fa-lock text-gray-400 mr-2"></i>
                    <input id="password" type="password" name="password" required class="w-full focus:outline-none">
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
        </form>
    </div>

</body>
</html>
