<section class="max-w-2xl mx-auto">
    <!-- Header with decorative accent -->
    <header class="mb-8 relative pl-6">
        <div class="absolute left-0 top-0 h-full w-1 bg-gradient-to-b from-blue-500 to-purple-600 rounded-full"></div>
        <h2 class="text-2xl font-bold text-gray-800 dark:text-white">
            <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-purple-500">
                {{ __('Profile Information') }}
            </span>
        </h2>
        <p class="mt-2 text-gray-600 dark:text-gray-300">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <!-- Form without card wrapper -->
    <form method="post" action="{{ route('profile.update') }}" class="space-y-6">
        @csrf
        @method('patch')

        <!-- Name Input -->
        <div class="relative z-0">
            <x-text-input 
                id="name" 
                name="name" 
                type="text" 
                class="block w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 focus:ring-2 focus:ring-blue-500/30 focus:border-blue-500 dark:focus:border-blue-400 transition-all duration-200 peer" 
                :value="old('name', $user->name)" 
                required 
                autofocus 
                autocomplete="name" 
                placeholder=" "
            />
            <x-input-label 
                for="name" 
                :value="__('Name')" 
                class="absolute left-3 -top-2.5 px-1 bg-white dark:bg-gray-800 text-gray-600 dark:text-gray-300 text-sm font-medium transition-all duration-200 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-3 peer-placeholder-shown:left-4 peer-placeholder-shown:font-normal peer-focus:-top-2.5 peer-focus:left-3 peer-focus:text-sm peer-focus:font-medium peer-focus:text-blue-600 dark:peer-focus:text-blue-400" 
            />
            <x-input-error class="mt-1 text-sm text-red-600 dark:text-red-400" :messages="$errors->get('name')" />
        </div>

        <!-- Email Input -->
        <div class="relative z-0">
            <x-text-input 
                id="email" 
                name="email" 
                type="email" 
                class="block w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 focus:ring-2 focus:ring-blue-500/30 focus:border-blue-500 dark:focus:border-blue-400 transition-all duration-200 peer" 
                :value="old('email', $user->email)" 
                required 
                autocomplete="username" 
                placeholder=" "
            />
            <x-input-label 
                for="email" 
                :value="__('Email')" 
                class="absolute left-3 -top-2.5 px-1 bg-white dark:bg-gray-800 text-gray-600 dark:text-gray-300 text-sm font-medium transition-all duration-200 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-3 peer-placeholder-shown:left-4 peer-placeholder-shown:font-normal peer-focus:-top-2.5 peer-focus:left-3 peer-focus:text-sm peer-focus:font-medium peer-focus:text-blue-600 dark:peer-focus:text-blue-400" 
            />
            <x-input-error class="mt-1 text-sm text-red-600 dark:text-red-400" :messages="$errors->get('email')" />

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div class="mt-4 p-4 bg-amber-50 dark:bg-amber-900/20 rounded-lg border border-amber-200 dark:border-amber-800/50">
                    <div class="flex items-start">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-amber-500 dark:text-amber-400 mt-0.5 mr-2 flex-shrink-0" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2h-1V9z" clip-rule="evenodd" />
                        </svg>
                        <div>
                            <p class="text-sm text-gray-800 dark:text-gray-200">
                                {{ __('Your email address is unverified.') }}
                                <button form="send-verification" class="ml-1 underline text-sm text-blue-600 dark:text-blue-400 hover:text-blue-800 dark:hover:text-blue-300 transition duration-150">
                                    {{ __('Click here to re-send the verification email.') }}
                                </button>
                            </p>

                            @if (session('status') === 'verification-link-sent')
                                <p class="mt-2 font-medium text-sm text-green-600 dark:text-green-400">
                                    {{ __('A new verification link has been sent to your email address.') }}
                                </p>
                            @endif
                        </div>
                    </div>
                </div>
            @endif
        </div>

        <div class="flex items-center gap-4 pt-2">
            <x-primary-button class="px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-500 hover:from-blue-700 hover:to-blue-600 focus:ring-2 focus:ring-blue-500/30 text-white font-medium rounded-lg shadow transition-all duration-300">
                {{ __('Save Changes') }}
            </x-primary-button>

            @if (session('status') === 'profile-updated')
                <p
                    x-data="{ show: true }"
                    x-show="show"
                    x-transition
                    x-init="setTimeout(() => show = false, 2000)"
                    class="text-sm text-green-600 dark:text-green-400 flex items-center"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1.5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                    </svg>
                    {{ __('Saved successfully!') }}
                </p>
            @endif
        </div>
    </form>
</section>