Nama Andya raihan setiawan
Nim: 41522010157

Deskripsi Proyek: Manajemen Produk dengan Laravel
Proyek ini adalah aplikasi web sederhana yang dibangun menggunakan framework Laravel. Aplikasi ini bertujuan untuk mengelola produk, termasuk menampilkan daftar produk, menambah produk baru, mengedit produk yang sudah ada, dan menghapus produk.

Struktur Kode
1. Controller ProdukController

Controller ProdukController bertanggung jawab untuk mengelola semua interaksi yang terkait dengan produk. Berikut adalah penjelasan untuk setiap metode:

ViewProduk: Menampilkan semua produk yang ada di database dengan memanggil model Produk dan mengirimkan data ke view produk.

CreateProduk: Memvalidasi dan menyimpan produk baru ke database. Jika validasi berhasil, produk baru ditambahkan, dan pengguna akan diarahkan kembali dengan pesan sukses.

ViewAddproduk: Menampilkan formulir untuk menambah produk baru.

DeleteProduk: Menghapus produk dari database berdasarkan kode_produk yang diberikan. Setelah penghapusan, pengguna diarahkan kembali dengan pesan sukses.

ViewEditProduk: Menampilkan formulir untuk mengedit produk berdasarkan kode_produk. Jika produk tidak ditemukan, pengguna akan mendapatkan pesan error.

UpdateProduk: Memvalidasi dan memperbarui data produk yang ada. Jika produk ditemukan, data produk akan diperbarui, dan pengguna diarahkan kembali dengan pesan sukses.

2. Rute Web

Di dalam file web.php, rute-rute untuk aplikasi didefinisikan:

Rute untuk menampilkan halaman utama (/) dan dashboard (/dashboard).
Rute untuk menampilkan daftar produk, menambah produk, memperbarui produk, dan menghapus produk menggunakan metode HTTP yang sesuai (GET, POST, PUT, DELETE).
Teknologi yang Digunakan
Laravel: Framework PHP yang digunakan untuk membangun aplikasi web ini.
Blade: Template engine Laravel untuk memisahkan logika dan tampilan.
Eloquent ORM: Digunakan untuk berinteraksi dengan database secara sederhana dan efisien.

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








