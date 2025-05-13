<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Masukkan ke Keranjang') }}
        </h2>
    </x-slot>
    <div class="py-12 max-w-lg mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
            <form action="{{ route('keranjang.store') }}" method="POST">
                @csrf

                <div class="mb-4">
                    <label for="produk_id"
                        class="block text-gray-700 dark:text-gray-300 font-semibold mb-1">Produk</label>
                    <select name="produk_id" id="produk_id"
                        class="w-full rounded gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-100 @error('produk_id') border-red-500 @enderror">
                        <option value="">Pilih Produk</option>
                        @foreach ($produks as $produk)
                            <option value="{{ $produk->id }}" {{ old('produk_id') == $produk->id ? 'selected' : '' }}>
                                {{ $produk->nama_produk }} - Stok: {{ $produk->tersedia }}
                            </option>
                        @endforeach
                    </select>
                    {{-- @error('produk_id')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror --}}
                </div>

                <div class="mb-4">
                    <label for="jumlah"
                        class="block text-gray-700 dark:text-gray-300 font-semibold mb-1">Jumlah</label>
                    <input type="text" name="jumlah" id="jumlah" placeholder="" value="{{ old('jumlah') }}"
                        class="w-full rounded gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-100 @error('jumlah') border-red-500 @enderror"
                        oninput="this.value = this.value.replace(/[^0-9]/g, '')" />
                    @error('jumlah')
                        <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex justify-end space-x-3">
                    <a href="{{ route('keranjang.index') }}"
                        class="px-4 py-2 rounded bg-gray-300 hover:bg-gray-400 text-gray-800 font-semibold">Batal</a>
                    <button type="submit"
                        class="px-4 py-2 rounded bg-green-600 hover:bg-green-700 text-white font-semibold">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
