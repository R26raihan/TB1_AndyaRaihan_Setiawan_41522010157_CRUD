Nama Andya raihan setiawan
Nim: 41522010157

Deskripsi Proyek: Manajemen Produk dengan Laravel
Proyek ini adalah aplikasi web sederhana yang dibangun menggunakan framework Laravel. Aplikasi ini bertujuan untuk mengelola produk, termasuk menampilkan daftar produk, menambah produk baru, mengedit produk yang sudah ada, dan menghapus produk.

Struktur Kode
1. Controller: ProdukController
a. Namespace dan Import
php
Salin kode
namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
Namespace: Menyatakan bahwa kelas ini adalah bagian dari namespace App\Http\Controllers.
Import: Mengimpor model Produk dan kelas Request dari Laravel untuk menangani data yang dikirim dari formulir.
b. Metode ViewProduk
php
Salin kode
public function ViewProduk()
{
    $produk = Produk::all();
    return view('produk', ['produk' => $produk]);
}
Fungsi: Menampilkan semua produk.
Proses: Mengambil semua data produk dari database menggunakan Produk::all() dan mengirimkannya ke view produk.
c. Metode CreateProduk
php
Salin kode
public function CreateProduk(Request $request)
{
    $request->validate([
        'nama_produk' => 'required|string',
        'deskripsi' => 'required|string',
        'harga' => 'required|numeric',
        'jumlah_produk' => 'required|integer',
    ]);

    Produk::create([
        'nama_produk' => $request->nama_produk,
        'deskripsi' => $request->deskripsi,
        'harga' => $request->harga,
        'jumlah_produk' => $request->jumlah_produk,
    ]);

    return redirect('/produk')->with('success', 'Produk berhasil ditambahkan.');
}
Fungsi: Menyimpan produk baru.
Proses:
Memvalidasi data yang diterima dari formulir menggunakan $request->validate().
Jika validasi berhasil, membuat produk baru dengan Produk::create().
Mengalihkan kembali ke halaman produk dengan pesan sukses.
d. Metode ViewAddproduk
php
Salin kode
public function ViewAddproduk()
{
    return view('add');
}
Fungsi: Menampilkan formulir untuk menambah produk baru.
Proses: Mengembalikan view add.
e. Metode DeleteProduk
php
Salin kode
public function DeleteProduk($kode_produk)
{
    Produk::where('kode_produk', $kode_produk)->delete();
    return redirect('/produk')->with('success', 'Produk berhasil dihapus.');
}
Fungsi: Menghapus produk berdasarkan kode_produk.
Proses: Mencari produk dengan kode_produk yang diberikan dan menghapusnya, kemudian mengalihkan kembali dengan pesan sukses.
f. Metode ViewEditProduk
php
Salin kode
public function ViewEditProduk($kode_produk)
{
    $ubahproduk = Produk::where('kode_produk', $kode_produk)->first();

    if (!$ubahproduk) {
        return redirect('/produk')->with('error', 'Produk tidak ditemukan.');
    }

    return view('editproduk', ['produk' => $ubahproduk]);
}
Fungsi: Menampilkan formulir untuk mengedit produk.
Proses:
Mencari produk berdasarkan kode_produk.
Jika produk tidak ditemukan, mengalihkan dengan pesan error.
Jika ditemukan, mengembalikan view editproduk dengan data produk yang akan diedit.
g. Metode UpdateProduk
php
Salin kode
public function UpdateProduk(Request $request, $kode_produk)
{
    $request->validate([
        'nama_produk' => 'required|string',
        'deskripsi' => 'required|string',
        'harga' => 'required|numeric',
        'jumlah_produk' => 'required|integer',
    ]);

    $produk = Produk::where('kode_produk', $kode_produk)->first();

    if (!$produk) {
        return redirect('/produk')->with('error', 'Produk tidak ditemukan.');
    }

    $produk->update([
        'nama_produk' => $request->nama_produk,
        'deskripsi' => $request->deskripsi,
        'harga' => $request->harga,
        'jumlah_produk' => $request->jumlah_produk,
    ]);

    return redirect('/produk')->with('success', 'Produk berhasil diperbarui.');
}
Fungsi: Memperbarui data produk yang ada.
Proses:
Memvalidasi data yang diterima dari formulir.
Mencari produk berdasarkan kode_produk.
Jika ditemukan, memperbarui data produk menggunakan $produk->update(), dan mengalihkan dengan pesan sukses.


2. Rute: web.php
a. Rute Umum
php
Salin kode
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});
Rute: Mengatur rute untuk halaman utama dan dashboard yang mengembalikan view masing-masing.
b. Rute untuk Produk
php
Salin kode
Route::get('/produk', [ProdukController::class, 'ViewProduk'])->name('produk.index');
Route::get('/produk/add', [ProdukController::class, 'ViewAddproduk'])->name('produk.create');
Route::post('/produk', [ProdukController::class, 'CreateProduk'])->name('produk.store');
Route::get('/produk/{kode_produk}/edit', [ProdukController::class, 'ViewEditProduk'])->name('produk.edit');
Route::put('/produk/{kode_produk}', [ProdukController::class, 'UpdateProduk'])->name('produk.update');
Route::delete('/produk/{kode_produk}', [ProdukController::class, 'DeleteProduk'])->name('produk.delete');
Rute: Mengatur semua rute yang berhubungan dengan produk, menghubungkan URL dengan metode di ProdukController.
GET /produk: Menampilkan daftar produk.
GET /produk/add: Menampilkan formulir untuk menambah produk baru.
POST /produk: Mengirim data untuk menambah produk baru.
GET /produk/{kode_produk}/edit: Menampilkan formulir untuk mengedit produk berdasarkan kode_produk.
PUT /produk/{kode_produk}: Memperbarui produk berdasarkan kode_produk.
DELETE /produk/{kode_produk}: Menghapus produk berdasarkan kode_produk.

Halaman Dashboard
![dashboard](https://github.com/user-attachments/assets/363d3664-16ed-4769-ae97-f581e596aaff)

Halaman produk
![Produk](https://github.com/user-attachments/assets/4cc737a8-a40b-4990-a0e5-2d000e7f19bd)

Form Untuk Edit produk Sebelum
![Edit produk](https://github.com/user-attachments/assets/580970ac-97b2-4dca-bf42-4e9001b6be0a)

Setelah di edit
![setelah di edit](https://github.com/user-attachments/assets/7aeccd13-7cef-4971-a7c9-b30779c428ea)

Hapus
![hapus](https://github.com/user-attachments/assets/0d7a12fd-8788-4d05-93d6-5c3d89335293)

Produk Berhasil di hapus
![setelah di hapus](https://github.com/user-attachments/assets/6c202ae8-936f-43a4-8621-116cfca1b004)

Form Add Produk
![add produk](https://github.com/user-attachments/assets/7151f21f-b1cd-4bea-abce-501d41581f5d)


Setelah di Add
![image](https://github.com/user-attachments/assets/fa0c0f56-995b-404c-814b-5cd8574834ad)








