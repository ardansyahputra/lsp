<section class="max-w-2xl mx-auto space-y-6">
    <!-- Header with decorative accent -->
    <header class="relative pl-6">
        <div class="absolute left-0 top-0 h-full w-1 bg-gradient-to-b from-red-500 to-red-600 rounded-full"></div>
        <h2 class="text-2xl font-bold text-gray-800 dark:text-white">
            <span class="bg-clip-text text-transparent bg-gradient-to-r from-red-600 to-red-500">
                {{ __('Delete Account') }}
            </span>
        </h2>
        <p class="mt-2 text-gray-600 dark:text-gray-300">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </header>

    <button
        x-data=""
        x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
        class="px-6 py-3 bg-gradient-to-r from-red-600 to-red-500 hover:from-red-700 hover:to-red-600 focus:ring-2 focus:ring-red-500/30 text-white font-medium rounded-lg shadow transition-all duration-300"
    >
        {{ __('Delete Account') }}
    </button>

    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6 bg-white dark:bg-gray-800 rounded-2xl">
            @csrf
            @method('delete')

            <h2 class="text-xl font-bold text-gray-800 dark:text-white">
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-red-600 to-red-500">
                    {{ __('Confirm Account Deletion') }}
                </span>
            </h2>

            <p class="mt-2 text-gray-600 dark:text-gray-300">
                {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
            </p>

            <div class="mt-6 relative z-0">
                <x-text-input
                    id="password"
                    name="password"
                    type="password"
                    class="block w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 focus:ring-2 focus:ring-red-500/30 focus:border-red-500 dark:focus:border-red-400 transition-all duration-200 peer"
                    placeholder=" "
                />
                <x-input-label 
                    for="password" 
                    value="{{ __('Password') }}" 
                    class="absolute left-3 -top-2.5 px-1 bg-white dark:bg-gray-800 text-gray-600 dark:text-gray-300 text-sm font-medium transition-all duration-200 peer-placeholder-shown:text-base peer-placeholder-shown:text-gray-400 peer-placeholder-shown:top-3 peer-placeholder-shown:left-4 peer-placeholder-shown:font-normal peer-focus:-top-2.5 peer-focus:left-3 peer-focus:text-sm peer-focus:font-medium peer-focus:text-red-600 dark:peer-focus:text-red-400" 
                />
                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-1 text-sm text-red-600 dark:text-red-400" />
            </div>

            <div class="mt-6 flex justify-end space-x-3">
                <button 
                    type="button" 
                    x-on:click="$dispatch('close')"
                    class="px-4 py-2.5 border border-gray-300 dark:border-gray-600 text-gray-700 dark:text-gray-300 hover:bg-gray-50 dark:hover:bg-gray-700 rounded-lg transition-all duration-200"
                >
                    {{ __('Cancel') }}
                </button>

                <button 
                    type="submit"
                    class="px-4 py-2.5 bg-gradient-to-r from-red-600 to-red-500 hover:from-red-700 hover:to-red-600 text-white rounded-lg transition-all duration-200"
                >
                    {{ __('Delete Account') }}
                </button>
            </div>
        </form>
    </x-modal>
</section>