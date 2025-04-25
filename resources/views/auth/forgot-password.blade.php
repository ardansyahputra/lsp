<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Reset Password</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Optional: Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Icons (Font Awesome CDN) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100">

    <div class="w-full max-w-md p-8 bg-white rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-center mb-6">Reset Password</h2>

        <!-- Session Status -->
        @if (session('status'))
            <div class="mb-4 text-green-600 text-sm">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div class="mb-4">
                <label for="email" class="block mb-1 font-medium text-sm text-gray-700">Email</label>
                <div class="flex items-center border rounded px-3 py-2">
                    <i class="fa fa-envelope text-gray-400 mr-2"></i>
                    <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus class="w-full focus:outline-none">
                </div>
                @error('email')
                    <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-4">
                <button type="submit" class="w-full bg-blue-600 hover:bg-blue-700 text-white py-2 px-4 rounded">
                    Send Password Reset Link
                </button>
            </div>

            <div class="text-center text-sm text-gray-600">
                Remember your password? 
                <a href="{{ route('login') }}" class="text-blue-600 hover:text-blue-800">
                    Login here
                </a>
            </div>
        </form>
    </div>

</body>
</html>