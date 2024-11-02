<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}"> <!-- Menghilangkan public/ -->
</head>
<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <div class="bg-dark text-white p-4 vh-100" style="width: 250px;">
            <h2>Dashboard Penjualan</h2>
            <ul class="list-unstyled">
                <li><a href="{{ url('/dashboard') }}" class="text-white">Home</a></li>
                <li><a href="{{ url('/produk') }}" class="text-white">Produk</a></li> <!-- Link ke Produk -->
                <li><a href="#" class="text-white">Penjualan</a></li>
                <li><a href="#" class="text-white">Laporan</a></li>
                <li><a href="#" class="text-white">Pengaturan</a></li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="main-content flex-grow-1 p-4">
            <h1>Tambah Produk</h1>
            <form action="{{ route('produk.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nama_produk">Nama Produk:</label>
                    <input type="text" name="nama_produk" id="nama_produk" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="deskripsi">Deskripsi:</label>
                    <textarea name="deskripsi" id="deskripsi" class="form-control" required></textarea>
                </div>
                <div class="form-group">
                    <label for="harga">Harga:</label>
                    <input type="number" name="harga" id="harga" class="form-control" required>
                </div>
                <div class="form-group">
                    <label for="jumlah_produk">Jumlah Produk:</label>
                    <input type="number" name="jumlah_produk" id="jumlah_produk" class="form-control" required>
                </div>
                <button type="submit" class="btn btn-primary">Tambah Produk</button>
            </form>
        </div>
    </div>
</body>
</html>
