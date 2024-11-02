<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    /**
     * Menampilkan daftar produk.
     */
    public function ViewProduk()
    {
        $produk = Produk::all();
        return view('produk', ['produk' => $produk]);
    }

    /**
     * Membuat produk baru.
     */
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

    /**
     * Menampilkan formulir untuk menambah produk.
     */
    public function ViewAddproduk()
    {
        return view('add');
    }

    /**
     * Menghapus produk berdasarkan kode_produk.
     */
    public function DeleteProduk($kode_produk)
    {
        Produk::where('kode_produk', $kode_produk)->delete();
        return redirect('/produk')->with('success', 'Produk berhasil dihapus.');
    }

    /**
     * Menampilkan formulir untuk mengedit produk.
     */
    public function ViewEditProduk($kode_produk)
    {
        $ubahproduk = Produk::where('kode_produk', $kode_produk)->first();

        // Cek apakah produk ditemukan
        if (!$ubahproduk) {
            return redirect('/produk')->with('error', 'Produk tidak ditemukan.');
        }

        return view('editproduk', ['produk' => $ubahproduk]);
    }

    /**
     * Memperbarui produk.
     */
    public function UpdateProduk(Request $request, $kode_produk)
{
    $request->validate([
        'nama_produk' => 'required|string',
        'deskripsi' => 'required|string',
        'harga' => 'required|numeric',
        'jumlah_produk' => 'required|integer',
    ]);

    // Mencari produk berdasarkan kode_produk
    $produk = Produk::where('kode_produk', $kode_produk)->first();

    // Cek apakah produk ditemukan
    if (!$produk) {
        return redirect('/produk')->with('error', 'Produk tidak ditemukan.');
    }

    // Memperbarui data produk
    $produk->update([
        'nama_produk' => $request->nama_produk,
        'deskripsi' => $request->deskripsi,
        'harga' => $request->harga,
        'jumlah_produk' => $request->jumlah_produk,
    ]);

    return redirect('/produk')->with('success', 'Produk berhasil diperbarui.');
}

}
