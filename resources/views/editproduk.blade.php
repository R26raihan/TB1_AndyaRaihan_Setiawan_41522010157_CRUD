<!-- edit.blade.php -->

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="d-flex">
        <div class="bg-dark text-white p-4 vh-100" style="width: 250px;">
            <h2>Dashboard Penjualan</h2>
            <ul class="list-unstyled">
                <li><a href="{{ url('/dashboard') }}" class="text-white">Home</a></li>
                <li><a href="{{ url('/produk') }}" class="text-white">Produk</a></li>
                <li><a href="#" class="text-white">Penjualan</a></li>
                <li><a href="#" class="text-white">Laporan</a></li>
                <li><a href="#" class="text-white">Pengaturan</a></li>
            </ul>
        </div>

        <div class="main-content flex-grow-1 p-4">
            <h1>Edit Produk</h1>

            @if (session('error'))
                <div class="alert alert-danger">{{ session('error') }}</div>
            @endif
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif

            @if ($produk)
                <form action="{{ route('produk.update', $produk->kode_produk) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="nama_produk">Nama Produk:</label>
                        <input type="text" name="nama_produk" id="nama_produk" class="form-control" value="{{ $produk->nama_produk }}" required>
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi:</label>
                        <textarea name="deskripsi" id="deskripsi" class="form-control" required>{{ $produk->deskripsi }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga:</label>
                        <input type="number" name="harga" id="harga" class="form-control" value="{{ $produk->harga }}" required>
                    </div>
                    <div class="form-group">
                        <label for="jumlah_produk">Jumlah Produk:</label>
                        <input type="number" name="jumlah_produk" id="jumlah_produk" class="form-control" value="{{ $produk->jumlah_produk }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Update Produk</button>
                </form>
            @else
                <p>Produk tidak ditemukan.</p>
            @endif
        </div>
    </div>
</body>
</html>
