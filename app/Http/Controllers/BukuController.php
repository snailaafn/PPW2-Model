<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\Models\Book;

class BukuController extends Controller
{
    public function index()
    {
        Paginator::useBootstrapFive();
        $batas = 5;
        $jumlah_buku = Book::count();
        $data_buku = Book::all()->sortBy('id');
        // $no = $batas * ($data_buku->currentPage()- 1);
        $res = 0;
        $total = 0;
        foreach ($data_buku as $buku){
            $buku -> tgl_terbit = Carbon::createFromFormat('Y-m-d', $buku -> tgl_terbit);
            $res++;
            $total+=$buku -> harga;
        }

        return view('index', compact('data_buku', 'jumlah_buku', 'total'));
    }

    public function create()
    {
        return view('buku.create');
    }

    /**
     * Store a newly created resource in storage.
     */
     public function store(Request $request)
    {
        $this->validate($request,[
            'judul' => 'required|string',
            'penulis' => 'required|string|max:30',
            'harga' => 'required|numeric',
            'tgl_terbit' => 'required|date',
        ]);

        $buku = new Book();
        $buku->judul = $request->judul;
        $buku->penulis = $request->penulis;
        $buku->harga = $request->harga;
        $buku->tgl_terbit = $request->tgl_terbit;
        $buku->save();

        return redirect('/book')->with('pesan', 'Data Buku berhasil di Simpan');
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
        $buku = Book::find($id);
        return view('buku.update', compact('buku'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $buku = Book::find($id);
        $this->validate($request,[
            'judul' => 'required|string',
            'penulis' => 'required|string|max:30',
            'harga' => 'required|numeric',
            'tgl_terbit' => 'required|date',
        ]);

        if ($buku) {
            $buku->judul = $request->judul;
            $buku->penulis = $request->penulis;
            $buku->harga = $request->harga;
            $buku->tgl_terbit = $request->tgl_terbit;
            $buku->save();
            return redirect('/book')->with('pesan', 'Buku berhasil diperbarui');
        }
        //  else {
        //     return redirect('/book')->with('error', 'Buku tidak ditemukan');
        // }
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $buku = Book::find($id);
        $buku->delete();

        return redirect('/book')->with('pesan', 'Buku berhasil dihapus');
    }



    // public function search(Request $request)
    // {
    //     $batas = 5;
    //     $cari = $request->kata;
    //     $jumlah_buku = Book::count();
    //     $data_buku = Book::where('judul', 'like',"%".$cari."%")->orWhere('penulis', 'like',"%".$cari."%")
    //     ->paginate($batas);
    //     $no = $batas * ($data_buku->currentPage()- 1);
    //     $res = 0;
    //     $total = 0;
    //     foreach ($data_buku as $buku){
    //         $buku -> tgl_terbit = Carbon::createFromFormat('Y-m-d', $buku -> tgl_terbit);
    //         $res++;
    //         $total+=$buku -> harga;
    //     }

    //     return view('index', compact('data_buku', 'no', 'jumlah_buku', 'total'));
    // }
}
