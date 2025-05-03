<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Transaksi') }} {{ $transaksi->created_at->format('d M Y H:i') }}
        </h2>
    </x-slot>

    <div class="py-12 max-w-4xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg p-6">
            <h3 class="text-lg font-semibold text-gray-900 dark:text-gray-100 mb-4">Transaksi pada
                {{ $transaksi->created_at->format('d F Y H:i') }}</h3>

            <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
                <thead>
                    <tr>
                        <th class="px-6 py-3 bg-gray-50 dark:bg-gray-900 text-left text-xs leading-4 font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                            Gambar
                        </th>
                        <th class="px-6 py-3 bg-gray-50 dark:bg-gray-900 text-left text-xs leading-4 font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                            Nama Produk
                        </th>
                        <th class="px-6 py-3 bg-gray-50 dark:bg-gray-900 text-left text-xs leading-4 font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                            Harga Satuan
                        </th>
                        <th class="px-6 py-3 bg-gray-50 dark:bg-gray-900 text-left text-xs leading-4 font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                            Jumlah
                        </th>
                        <th class="px-6 py-3 bg-gray-50 dark:bg-gray-900 text-left text-xs leading-4 font-medium text-gray-500 dark:text-gray-300 uppercase tracking-wider">
                            Harga Total
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white dark:bg-gray-800 divide-y divide-gray-200 dark:divide-gray-700">
                    @forelse ($transaksi->items as $item)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                @if($item->produk->gambar)
                                    <img src="{{ asset('storage/images/products/' . $item->produk->gambar) }}" 
                                         alt="{{ $item->produk->nama_produk }}"
                                         class="h-16 w-16 object-cover rounded">
                                @else
                                    <div class="h-16 w-16 bg-gray-200 rounded flex items-center justify-center">
                                        <span class="text-gray-500 text-xs">No Image</span>
                                    </div>
                                @endif
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                                {{ $item->produk->nama_produk }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                                Rp {{ number_format($item->produk->harga, 0, ',', '.') }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                                {{ $item->jumlah }}
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                                Rp {{ number_format($item->total_harga, 0, ',', '.') }}
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-300"
                                colspan="5">
                                Belum ada data item.
                            </td>
                        </tr>
                    @endforelse
                    <tr class="bg-gray-50 dark:bg-gray-700">
                        <td class="px-6 py-4 font-bold whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                            Total
                        </td>
                        <td class="px-6 py-4 font-bold whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                            -
                        </td>
                        <td class="px-6 py-4 font-bold whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                            -
                        </td>
                        <td class="px-6 py-4 font-bold whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                            -
                        </td>
                        <td class="px-6 py-4 font-bold whitespace-nowrap text-sm text-gray-500 dark:text-gray-300">
                            Rp {{ number_format($transaksi->total_harga, 0, ',', '.') }}
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="mt-6 flex justify-between">
            <a href="{{ route('transaksi.index') }}"
                class="inline-block px-4 py-2 bg-gray-300 hover:bg-gray-400 text-gray-800 rounded font-semibold">
                Kembali ke History Transaksi
            </a>
            
            <a href="{{ route('transaksi.downloadStruk', $transaksi->id) }}"
                class="inline-block px-4 py-2 bg-green-600 hover:bg-green-700 text-white rounded font-semibold">
                Download Struk PDF
            </a>
        </div>
    </div>
</x-app-layout>