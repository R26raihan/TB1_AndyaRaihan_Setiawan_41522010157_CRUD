<!-- resources/views/dashboard.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard Penjualan</title>
    <!-- Link to Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('public/css/style.css') }}">
</head>
<body>
    <div class="d-flex">
        <!-- Sidebar -->
        <div class="bg-dark text-white p-4" style="width: 250px;">
            <h2>Dashboard Penjualan</h2>
            <ul class="list-unstyled">
                <li><a href="{{ url('/') }}" class="text-white">Home</a></li>
                <li><a href="{{ url('/produk') }}" class="text-white">Produk</a></li> <!-- Link ke Produk -->
                <li><a href="#" class="text-white">Penjualan</a></li>
                <li><a href="#" class="text-white">Laporan</a></li>
                <li><a href="#" class="text-white">Pengaturan</a></li>
            </ul>
        </div>

        <!-- Main Content -->
        <div class="container-fluid p-4">
            <header>
                <h1>Selamat Datang di Dashboard Penjualan</h1>
            </header>

            <!-- Stats Cards -->
            <div class="row">
                <div class="col-md-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <h3>Total Produk</h3>
                            <p id="total-product">320</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <h3>Penjualan Hari Ini</h3>
                            <p id="sales-today">100</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <h3>Total Pendapatan</h3>
                            <p id="total-revenue">Rp50,000,000</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card text-center">
                        <div class="card-body">
                            <h3>Pengguna Terdaftar</h3>
                            <p id="registered-users">350</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Alert -->
            <div class="alert alert-primary mt-4" role="alert">
                Ini adalah contoh notifikasi.
            </div>

            <!-- Chart Section -->
            <div id="chart" class="mt-4">
                <h2>Grafik Penjualan</h2>
                <canvas id="salesChart"></canvas>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- Chart.js for the chart -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        // Example of Chart.js configuration
        var ctx = document.getElementById('salesChart').getContext('2d');
        var salesChart = new Chart(ctx, {
            type: 'bar', // Type of chart
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'Penjualan Bulanan',
                    data: [1000, 1200, 1500, 1800, 2000, 2200],
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
</body>
</html>
