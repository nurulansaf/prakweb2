<?php

namespace App\Http\Controllers;

use App\Models\Pesanan;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PesananController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pesanan = new Pesanan();
        return view('admin.pesanan.pesanan', ['pesanan' => $pesanan->getALLData()]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // menampilkan seluruh data kategori produk
        $produk = Produk::all();

        // menampilkan seluruh data produk
        $pesanan = Pesanan::all();
        return view('admin.pesanan.add_pesanan', compact('produk','pesanan'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        // buat instance di ambil dari class produk
        // ambil daata di input di form create menggunakan parameter request
        // simpan data yang di ambil ke dalam colom table produk
        // save semua data ke dalam instance produk menggunakan method save
        // kembalikan ke tampilan produk, setelah klik button submit 

        $pesanan = new Pesanan();
        $pesanan->tanggal            = $request->tanggal;
        $pesanan->nama_pemesan       = $request->nama_pemesan;
        $pesanan->alamat_pemesan     = $request->alamat_pemesan;
        $pesanan->no_hp              = $request->no_hp;
        $pesanan->email              = $request->email;
        $pesanan->jumlah_pesanan     = $request->jumlah_pesanan;
        $pesanan->deskripsi          = $request->deskripsi;
        $pesanan->produk_id          = $request->produk_id;

        $pesanan->save();
        return redirect('admin/pesanan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pesanan = DB::table('pesanan')->get();
        $produk = DB::table('produk')->where('id', $id)->get();
        return view('admin.pesanan.edit_pesanan', compact('produk', 'pesanan'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $pesanan = Pesanan::find($request->id);
        $pesanan->tanggal            = $request->tanggal;
        $pesanan->nama_pemesan       = $request->nama_pemesan;
        $pesanan->alamat_pemesan     = $request->alamat_pemesan;
        $pesanan->no_hp              = $request->no_hp;
        $pesanan->email              = $request->email;
        $pesanan->jumlah_pesanan     = $request->jumlah_pesanan;
        $pesanan->deskripsi          = $request->deskripsi;
        $pesanan->produk_id          = $request->produk_id;

        $pesanan->save();
        return redirect('admin/pesanan');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // buka tbale pesanan
        // cari data yang ingn di hapus berdasarkan id
        // hapus data menggunakan method delete()
        DB::table('pesanan')->where('id', $id)->delete();
        return redirect('admin/pesanan');
    }
}
