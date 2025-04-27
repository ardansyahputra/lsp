<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Admin Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-8">
        <!-- Welcome Banner -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mb-10">
            <div class="bg-gradient-to-r from-indigo-600 to-purple-700 rounded-xl shadow-xl overflow-hidden">
                <div class="p-8 md:p-10 flex flex-col md:flex-row items-center justify-between">
                    <div class="flex items-center space-x-6">
                        <div class="bg-white bg-opacity-20 p-4 rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M18 14.25C18 12.4551 16.5449 11 14.75 11H9.25C7.45507 11 6 12.4551 6 14.25V15.25C6 15.6642 6.33579 16 6.75 16H17.25C17.6642 16 18 15.6642 18 15.25V14.25Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M12 10C13.6569 10 15 8.65685 15 7C15 5.34315 13.6569 4 12 4C10.3431 4 9 5.34315 9 7C9 8.65685 10.3431 10 12 10Z" />
                            </svg>
                        </div>
                        <div>
                            <h3 class="text-2xl md:text-3xl font-bold text-white">
                                {{ __("Selamat datang, Admin!") }}
                            </h3>
                            <p class="text-indigo-100 mt-1">
                                Semoga hari Anda menyenangkan dan produktif 🎉
                            </p>
                        </div>
                    </div>
                    <div class="mt-6 md:mt-0">
                        <p class="text-indigo-100 text-sm md:text-base">
                            {{ now()->format('l, d F Y') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>

       <!-- Stats Cards -->
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <!-- Categories Card -->
        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
            <div class="p-6 flex items-center space-x-4">
                <div class="p-3 bg-indigo-100 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 7h18M3 12h18M3 17h18" />
                    </svg>
                </div>
                <div>
                    <div class="text-gray-500 dark:text-gray-400 text-sm">Kategori</div>
                    <div class="text-2xl font-bold text-gray-900 dark:text-white">{{ $totalCategories }}</div>
                </div>
            </div>
        </div>

        <!-- Products Card -->
        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
            <div class="p-6 flex items-center space-x-4">
                <div class="p-3 bg-green-100 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-green-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 13V7a2 2 0 00-2-2h-4.586a1 1 0 00-.707.293l-1.414 1.414a1 1 0 01-.707.293H6a2 2 0 00-2 2v6" />
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 17h8m-4-4v8" />
                    </svg>
                </div>
                <div>
                    <div class="text-gray-500 dark:text-gray-400 text-sm">Total Produk</div>
                    <div class="text-2xl font-bold text-gray-900 dark:text-white">{{ $totalProducts }}</div>
                </div>
            </div>
        </div>

        <!-- Transactions Card -->
        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
            <div class="p-6 flex items-center space-x-4">
                <div class="p-3 bg-yellow-100 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-yellow-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17v-6h6v6h5V7H4v10h5z" />
                    </svg>
                </div>
                <div>
                    <div class="text-gray-500 dark:text-gray-400 text-sm">Jumlah Transaksi</div>
                    <div class="text-2xl font-bold text-gray-900 dark:text-white">{{ $totalTransactions }}</div>
                </div>
            </div>
        </div>

        <!-- Total Revenue Card -->
        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md overflow-hidden transition-all duration-300 hover:shadow-lg hover:-translate-y-1">
            <div class="p-6 flex items-center space-x-4">
                <div class="p-3 bg-blue-100 rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-10v2m0 12v-2m0-10c-4.418 0-8 1.79-8 4s3.582 4 8 4 8-1.79 8-4-3.582-4-8-4z" />
                    </svg>
                </div>
                <div>
                    <div class="text-gray-500 dark:text-gray-400 text-sm">Total Pendapatan</div>
                    <div class="text-2xl font-bold text-green-600 dark:text-green-400">Rp {{ number_format($totalRevenue, 0, ',', '.') }}</div>
                </div>
            </div>
        </div>
    </div>
</div>

        <!-- Transaction Chart -->
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-10">
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md overflow-hidden">
                <div class="p-6 border-b border-gray-200 dark:border-gray-700">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Grafik Transaksi (Rupiah per Bulan)</h3>
                </div>
                <div class="p-6">
                    <canvas id="transactionChart" height="100"></canvas>
                </div>
            </div>
        </div>

         <!-- Recent Activity Section -->
         <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 mt-10">
            <div class="bg-white dark:bg-gray-800 rounded-xl shadow-md overflow-hidden">
                <div class="p-6 border-b border-gray-200 dark:border-gray-700">
                    <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Aktivitas Terkini</h3>
                </div>
                <div class="divide-y divide-gray-200 dark:divide-gray-700">
                <div class="p-4 border-t border-gray-200 dark:border-gray-700 text-center">
                    <a href="/transaksi" class="text-sm font-medium text-indigo-600 dark:text-indigo-400 hover:text-indigo-500 dark:hover:text-indigo-300">
                        Lihat semua aktivitas →
                    </a>
                </div>
            </div>
        </div>

        <!-- Chart.js CDN -->
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
                    scales: {
                        y: {
                            ticks: {
                                beginAtZero: true,
                                callback: function(value) {
                                    return 'Rp' + value.toLocaleString();
                                }
                            }
                        }
                    }
                }
            });

            // Count Chart (Jumlah Transaksi per Bulan)
            const countCtx = document.getElementById('countChart').getContext('2d');
            const countChart = new Chart(countCtx, {
                type: 'line',
                data: {
                    labels: @json($transactionMonths),
                    datasets: [{
                        label: 'Jumlah Transaksi',
                        data: @json($transactionCounts),
                        backgroundColor: 'rgba(16, 185, 129, 0.2)', // area bawah garis
                        borderColor: 'rgba(5, 150, 105, 1)', // warna garis
                        borderWidth: 2,
                        tension: 0.4, // bikin garis MELENGKUNG
                        fill: false, // jangan di-fill supaya fokus ke garis
                        pointBackgroundColor: 'rgba(5, 150, 105, 1)',
                        pointRadius: 4
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        x: {
                            grid: {
                                display: true,
                                color: '#e0e0e0'
                            }
                        },
                        y: {
                            beginAtZero: true,
                            ticks: {
                                precision: 0
                            },
                            grid: {
                                display: true,
                                color: '#e0e0e0'
                            }
                        }
                    },
                    plugins: {
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    return context.parsed.y + ' transaksi';
                                }
                            }
                        },
                        legend: {
                            display: true
                        }
                    }
                }
            });

        </script>
    </div>
</x-app-layout>
