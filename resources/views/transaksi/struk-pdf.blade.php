<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Struk Transaksi #{{ $transaksi->id }}</title>
    <style>
        body {
            font-family: 'Helvetica', 'Arial', sans-serif;
            font-size: 12px;
            color: #333;
            line-height: 1.5;
        }
        .header {
            text-align: center;
            margin-bottom: 20px;
            border-bottom: 2px solid #eee;
            padding-bottom: 15px;
        }
        .logo {
            max-width: 150px;
            margin-bottom: 10px;
        }
        .invoice-title {
            font-size: 24px;
            font-weight: bold;
            color: #2c3e50;
        }
        .store-name {
            font-size: 18px;
            font-weight: bold;
            margin: 5px 0;
        }
        .store-address {
            font-size: 12px;
            color: #7f8c8d;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f8f9fa;
            font-weight: bold;
        }
        .text-right {
            text-align: right;
        }
        .text-center {
            text-align: center;
        }
        .total-row {
            font-weight: bold;
            background-color: #f8f9fa;
        }
        .footer {
            margin-top: 30px;
            padding-top: 15px;
            border-top: 2px solid #eee;
            text-align: center;
            font-size: 11px;
            color: #7f8c8d;
        }
        .product-image {
            width: 40px;
            height: 40px;
            object-fit: cover;
            border-radius: 4px;
        }
        .transaction-info {
            margin-bottom: 20px;
        }
        .info-row {
            display: flex;
            margin-bottom: 5px;
        }
        .info-label {
            font-weight: bold;
            width: 120px;
        }
    </style>
</head>
<body>
    <div class="header">
        <!-- Ganti dengan path logo Anda -->
        <img src="{{ public_path('images/logo.png') }}" class="logo" alt="Logo Toko">
        <div class="store-name">DIGITECH</div>
        <div class="store-address">
            Alamat Toko: Jl. Citra Land No. 25, Surabaya<br>
            Telp: (+62) 871-2228-9021 | Email: digitech@gmail.com
        </div>
    </div>

    <div class="invoice-title">STRUK TRANSAKSI #{{ $transaksi->id }}</div>
    
    <div class="transaction-info">
        <div class="info-row">
            <div class="info-label">Tanggal Transaksi:</div>
            <div>{{ $transaksi->created_at->format('d F Y H:i') }}</div>
        </div>
        <div class="info-row">
            <div class="info-label">Kasir:</div>
            <div>{{ $transaksi->user->name ?? 'CUSTOMER' }}</div>
        </div>
    </div>

    <table>
        <thead>
            <tr>
                <th width="10%">Gambar</th>
                <th width="35%">Nama Produk</th>
                <th width="15%" class="text-right">Harga Satuan</th>
                <th width="10%" class="text-center">Jumlah</th>
                <th width="15%" class="text-right">Subtotal</th>
            </tr>
        </thead>
        <tbody>
            @foreach($transaksi->items as $item)
            <tr>
                <td class="text-center">
                    @if($item->produk->gambar)
                        <img src="{{ storage_path('app/public/images/products/' . $item->produk->gambar) }}" 
                             class="product-image" alt="{{ $item->produk->nama_produk }}">
                    @else
                        <div style="width:40px;height:40px;background:#eee;border-radius:4px;"></div>
                    @endif
                </td>
                <td>{{ $item->produk->nama_produk }}</td>
                <td class="text-right">Rp {{ number_format($item->produk->harga, 0, ',', '.') }}</td>
                <td class="text-center">{{ $item->jumlah }}</td>
                <td class="text-right">Rp {{ number_format($item->total_harga, 0, ',', '.') }}</td>
            </tr>
            @endforeach
            <tr class="total-row">
                <td colspan="3"></td>
                <td class="text-right"><strong>Total Item:</strong></td>
                <td class="text-right"><strong>{{ $transaksi->total_item }}</strong></td>
            </tr>
            <tr class="total-row">
                <td colspan="3"></td>
                <td class="text-right"><strong>Total Harga:</strong></td>
                <td class="text-right"><strong>Rp {{ number_format($transaksi->total_harga, 0, ',', '.') }}</strong></td>
            </tr>
        </tbody>
    </table>

    <div class="footer">
        Terima kasih telah berbelanja di toko kami<br>
        Barang yang sudah dibeli tidak dapat ditukar atau dikembalikan<br>
        {{ date('d F Y') }}
    </div>
</body>
</html>