<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Penjualan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <style>
        /* Card Product Styling */
        .card-product {
            margin: 15px;
            width: 18rem;
            border: none;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s, box-shadow 0.3s;
            overflow: hidden;
        }

        .card-product:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        .card-product img {
            height: 200px;
            width: 100%;
            object-fit: cover;
            border-top-left-radius: 10px;
            border-top-right-radius: 10px;
            transition: opacity 0.3s;
        }

        .card-product:hover img {
            opacity: 0.9;
        }

        .card-body {
            padding: 15px;
        }

        /* Quantity Control Styling */
        .quantity-control {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 15px;
        }

        .quantity-control button {
            width: 35px;
            height: 35px;
            font-size: 20px;
            font-weight: bold;
            line-height: 1;
            color: #333;
            background-color: #f0f0f0;
            border: none;
            border-radius: 50%;
            transition: background-color 0.3s;
        }

        .quantity-control button:hover {
            background-color: #ddd;
        }

        .quantity-control input {
            width: 50px;
            text-align: center;
            margin: 0 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        /* Container Products Styling */
        .container-products {
            display: flex;
            justify-content: flex-start;
            flex-wrap: wrap;
            gap: 20px;
            padding: 20px;
            background-color: #f9f9f9;
        }

        /* Footer Styling */
        .footer {
            text-align: center;
            margin-top: 30px;
            padding: 15px;
            background-color: #333;
            color: #fff;
            font-size: 14px;
            border-top: 2px solid #ddd;
        }

        .footer a {
            color: #f1c40f;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer a:hover {
            color: #e67e22;
        }
    </style>
</head>
<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <div class="bg-dark text-white p-4" style="width: 250px;">
            <h2>Dashboard Penjualan</h2>
            <ul class="list-unstyled">
                <li><a href="{{ url('/dashboard') }}" class="text-white">Home</a></li>
                <li><a href="#" class="text-white">Produk</a></li>
                <li><a href="#" class="text-white">Penjualan</a></li>
                <li><a href="#" class="text-white">Laporan</a></li>
                <li><a href="#" class="text-white">Pengaturan</a></li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="container-fluid p-4">
            <header>
                <h1>Daftar Produk</h1>
                <p>Temukan produk terbaik untuk kebutuhan Anda</p>
            </header>

            <!-- Product Cards -->
            <div class="container-products">
                @foreach($produk as $item)
                <div class="card card-product">
                    <img src="{{ asset('storage/images/' . $item->image) }}" class="card-img-top" alt="{{ $item->nama_produk }}">
                    <div class="card-body text-center">
                        <h5 class="card-title">{{ $item->nama_produk }}</h5>
                        <p class="card-text text-success">{{ number_format($item->harga, 0, ',', '.') }}</p>
                        <p class="card-text text-muted">{{ $item->deskripsi }}</p>
                        <div class="quantity-control">
                            <button class="btn btn-primary">-</button>
                            <input type="text" value="0" readonly>
                            <button class="btn btn-primary">+</button>
                        </div>
                        <!-- Edit Button -->
                        <a href="{{ route('produk.edit', $item->kode_produk) }}" class="btn btn-warning mt-2">Edit</a>
                        <!-- Delete Button -->
                        <form action="{{ route('produk.delete', $item->kode_produk) }}" method="POST" class="mt-2">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?');">Hapus</button>
                        </form>
                    </div>
                </div>
                @endforeach
            </div>

        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</body>
</html>
