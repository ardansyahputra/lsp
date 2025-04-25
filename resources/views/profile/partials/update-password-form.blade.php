<section class="max-w-2xl mx-auto">
    <!-- Header with decorative accent -->
    <header class="mb-8 relative pl-6">
        <div class="absolute left-0 top-0 h-full w-1 bg-gradient-to-b from-blue-500 to-purple-600 rounded-full"></div>
        <h2 class="text-2xl font-bold text-gray-800 dark:text-white">
            <span class="bg-clip-text text-transparent bg-gradient-to-r from-blue-600 to-purple-500">
                {{ __('Update Password') }}
            </span>
        </h2>
        <p class="mt-2 text-gray-600 dark:text-gray-300">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="space-y-6">
        @csrf
        @method('put')

        <!-- Current Password -->
        <div class="relative z-0">
            <x-text-input 
                id="update_password_current_password" 
                name="current_password" 
                type="password" 
                class="block w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 focus:ring-2 focus:ring-blue-500/30 focus:border-blue-500 dark:focus:border-blue-400 transition-all duration-200 peer" 
                autocomplete="current-password" 
                placeholder=" "
            />
            <x-input-label 
                for="update_password_current_password" 
                :value="__('Current Password')" 
                class="absolute left-3 -top-2.5 px-1 bg-white dark:bg-gray-800 text-gray-600 dark:text-gray-300 text-sm font-medium transition-all duration-200 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-3 peer-placeholder-shown:left-4 peer-placeholder-shown:font-normal peer-focus:-top-2.5 peer-focus:left-3 peer-focus:text-sm peer-focus:font-medium peer-focus:text-blue-600 dark:peer-focus:text-blue-400" 
            />
            <x-input-error class="mt-1 text-sm text-red-600 dark:text-red-400" :messages="$errors->updatePassword->get('current_password')" />
        </div>

        <!-- New Password -->
        <div class="relative z-0">
            <x-text-input 
                id="update_password_password" 
                name="password" 
                type="password" 
                class="block w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 focus:ring-2 focus:ring-blue-500/30 focus:border-blue-500 dark:focus:border-blue-400 transition-all duration-200 peer" 
                autocomplete="new-password" 
                placeholder=" "
            />
            <x-input-label 
                for="update_password_password" 
                :value="__('New Password')" 
                class="absolute left-3 -top-2.5 px-1 bg-white dark:bg-gray-800 text-gray-600 dark:text-gray-300 text-sm font-medium transition-all duration-200 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-3 peer-placeholder-shown:left-4 peer-placeholder-shown:font-normal peer-focus:-top-2.5 peer-focus:left-3 peer-focus:text-sm peer-focus:font-medium peer-focus:text-blue-600 dark:peer-focus:text-blue-400" 
            />
            <x-input-error class="mt-1 text-sm text-red-600 dark:text-red-400" :messages="$errors->updatePassword->get('password')" />
        </div>

        <!-- Confirm Password -->
        <div class="relative z-0">
            <x-text-input 
                id="update_password_password_confirmation" 
                name="password_confirmation" 
                type="password" 
                class="block w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 focus:ring-2 focus:ring-blue-500/30 focus:border-blue-500 dark:focus:border-blue-400 transition-all duration-200 peer" 
                autocomplete="new-password" 
                placeholder=" "
            />
            <x-input-label 
                for="update_password_password_confirmation" 
                :value="__('Confirm Password')" 
                class="absolute left-3 -top-2.5 px-1 bg-white dark:bg-gray-800 text-gray-600 dark:text-gray-300 text-sm font-medium transition-all duration-200 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-3 peer-placeholder-shown:left-4 peer-placeholder-shown:font-normal peer-focus:-top-2.5 peer-focus:left-3 peer-focus:text-sm peer-focus:font-medium peer-focus:text-blue-600 dark:peer-focus:text-blue-400" 
            />
            <x-input-error class="mt-1 text-sm text-red-600 dark:text-red-400" :messages="$errors->updatePassword->get('password_confirmation')" />
        </div>

        <div class="flex items-center gap-4 pt-2">
            <x-primary-button class="px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-500 hover:from-blue-700 hover:to-blue-600 focus:ring-2 focus:ring-blue-500/30 text-white font-medium rounded-lg shadow transition-all duration-300">
                {{ __('Save Changes') }}
            </x-primary-button>

            @if (session('status') === 'password-updated')
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
                    {{ __('Password updated successfully!') }}
                </p>
            @endif
        </div>
    </form>
</section>