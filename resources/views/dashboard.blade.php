<x-app-layout>
    <!-- Add title here -->
    <x-slot name="title">
        <title>{{ 'DIGITECH | Admin Dashboard' }}</title>
    </x-slot>

    <!-- Header Slot -->
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight text-center">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <!-- Video Background -->
    <div class="relative flex items-center justify-center min-h-screen overflow-hidden bg-transparent">
        <!-- Video background -->
        <video autoplay loop muted class="video-background absolute top-0 left-0 w-full h-full object-cover z-0">
            <source src="{{ asset('ip16.webm') }}" type="video/webm">
            Your browser does not support the video tag.
        </video>

        <!-- Inner content - Hapus bg-white/90 atau ganti dengan bg-transparent -->
        <div class="relative z-10 w-full bg-transparent min-h-screen pt-12 pb-10">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8">
                <!-- Welcome Banner -->
                <div class="text-center">
                    <div class="bg-gradient-to-r from-indigo-600 to-purple-700 rounded-xl shadow-xl overflow-hidden inline-block w-full max-w-4xl">
                        <div class="p-8 flex flex-col items-center justify-center">
                            <div class="bg-white bg-opacity-20 p-2 rounded-full mb-4">
                                <img src="{{ asset('images/LOGO.png') }}" alt="Welcome" class="h-16 w-16 rounded-full object-cover">
                            </div>
                            <div>
                                <h3 class="text-2xl md:text-3xl font-bold text-white">
                                    {{ __("Selamat datang, Admin!") }}
                                </h3>
                                <p class="text-indigo-100 mt-2">
                                    {{ now()->format('l, d F Y') }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Tentang Digitech Section -->
                <div class="text-center">
                    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md p-6 inline-block w-full max-w-4xl">
                        <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-4">Tentang Digitech</h3>
                        <p class="text-gray-600 dark:text-gray-300 text-sm leading-relaxed mx-auto max-w-3xl">
                            Digitech adalah platform digital yang menyediakan solusi teknologi modern untuk membantu bisnis dalam mengelola produk, transaksi, dan analisis penjualan secara efisien. Kami berkomitmen untuk memberikan kemudahan dan kecepatan dalam setiap proses operasional Anda.
                        </p>
                    </div>
                </div>

                 <!-- Produk Unggulan / Semua Produk -->
            <div class="flex justify-center">
                <div class="w-full max-w-6xl">
                    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 gap-6">
                        @foreach($products as $product)
                            <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-md overflow-hidden hover:shadow-lg transition transform hover:-translate-y-1">
                                <img class="w-full h-auto object-contain max-h-64 bg-white p-2" 
                                    src="{{ asset('storage/images/products/' . $product->gambar) }}" 
                                    alt="{{ $product->nama_produk }}">
                                <div class="p-4 space-y-2">
                                    <h4 class="text-xl font-semibold text-gray-900 dark:text-white">{{ $product->nama_produk }}</h4>
                                    <p class="text-sm text-gray-600 dark:text-gray-300 line-clamp-2 leading-relaxed">{{ $product->deskripsi }}</p>
                                    <div class="mt-2 flex justify-between items-center">
                                        <span class="text-green-600 dark:text-green-400 font-bold text-base">Rp {{ number_format($product->harga, 0, ',', '.') }}</span>
                                        <span class="text-sm text-gray-500 dark:text-gray-400">{{ $product->kuantitas }} pcs</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>


                 <!-- Stats Cards - Centered Grid -->
                 <div class="flex justify-center">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 w-full max-w-6xl">
                        <!-- Categories Card -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md hover:shadow-lg hover:-translate-y-1 transition transform">
                            <div class="p-6 flex flex-col items-center text-center">
                                <div class="p-3 bg-indigo-100 rounded-full mb-3">
                                    <svg class="h-8 w-8 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7h18M3 12h18M3 17h18" />
                                    </svg>
                                </div>
                                <div class="text-sm text-gray-500 dark:text-gray-400">Kategori</div>
                                <div class="text-2xl font-bold text-gray-900 dark:text-white mt-1">{{ $totalCategories }}</div>
                            </div>
                        </div>

                        <!-- Products Card -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md hover:shadow-lg hover:-translate-y-1 transition transform">
                            <div class="p-6 flex flex-col items-center text-center">
                                <div class="p-3 bg-green-100 rounded-full mb-3">
                                    <svg class="h-8 w-8 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V7a2 2 0 00-2-2h-4.586a1 1 0 00-.707.293l-1.414 1.414a1 1 0 01-.707.293H6a2 2 0 00-2 2v6" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 17h8m-4-4v8" />
                                    </svg>
                                </div>
                                <div class="text-sm text-gray-500 dark:text-gray-400">Total Produk</div>
                                <div class="text-2xl font-bold text-gray-900 dark:text-white mt-1">{{ $totalProducts }}</div>
                            </div>
                        </div>

                        <!-- Transactions Card -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md hover:shadow-lg hover:-translate-y-1 transition transform">
                            <div class="p-6 flex flex-col items-center text-center">
                                <div class="p-3 bg-yellow-100 rounded-full mb-3">
                                    <svg class="h-8 w-8 text-yellow-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-6h6v6h5V7H4v10h5z" />
                                    </svg>
                                </div>
                                <div class="text-sm text-gray-500 dark:text-gray-400">Jumlah Transaksi</div>
                                <div class="text-2xl font-bold text-gray-900 dark:text-white mt-1">{{ $totalTransactions }}</div>
                            </div>
                        </div>

                        <!-- Revenue Card -->
                        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md hover:shadow-lg hover:-translate-y-1 transition transform">
                            <div class="p-6 flex flex-col items-center text-center">
                                <div class="p-3 bg-blue-100 rounded-full mb-3">
                                    <svg class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-10v2m0 12v-2m0-10c-4.418 0-8 1.79-8 4s3.582 4 8 4 8-1.79 8-4-3.582-4-8-4z" />
                                    </svg>
                                </div>
                                <div class="text-sm text-gray-500 dark:text-gray-400">Total Pendapatan</div>
                                <div class="text-2xl font-bold text-green-600 dark:text-green-400 mt-1">Rp {{ number_format($totalRevenue, 0, ',', '.') }}</div>
                            </div>
                        </div>
                    </div>
                </div>




                <!-- Chart and Activity Sections -->
                <div class="flex justify-center">
                    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md w-full max-w-6xl">
                        <div class="p-6 border-b border-gray-200 dark:border-gray-700 text-center">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Grafik Transaksi (Rupiah per Bulan)</h3>
                        </div>
                        <div class="p-6">
                            <canvas id="transactionChart" height="100"></canvas>
                        </div>
                    </div>
                </div>

                <!-- Recent Activity Section -->
                <div class="flex justify-center">
                    <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md w-full max-w-6xl">
                        <div class="p-6 border-b border-gray-200 dark:border-gray-700 text-center">
                            <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Aktivitas Terkini</h3>
                        </div>
                        <div class="divide-y divide-gray-200 dark:divide-gray-700">
                            <div class="p-4 text-center">
                                <a href="/transaksi" class="text-sm font-medium text-indigo-600 dark:text-indigo-400 hover:text-indigo-500 dark:hover:text-indigo-300">
                                    Lihat semua aktivitas →
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('transactionChart').getContext('2d');
        const transactionChart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: @json($transactionMonths),
                datasets: [{
                    label: 'Jumlah Transaksi (Rp)',
                    data: @json($transactionTotals),
                    backgroundColor: 'rgba(99, 102, 241, 0.3)',
                    borderColor: 'rgba(99, 102, 241, 1)',
                    borderWidth: 2,
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            callback: function(value) {
                                return 'Rp' + value.toLocaleString();
                            }
                        }
                    }
                },
                plugins: {
                    legend: {
                        position: 'top',
                        align: 'center',
                        labels: {
                            boxWidth: 12,
                            padding: 20
                        }
                    }
                }
            }
        });
    </script>
</x-app-layout>