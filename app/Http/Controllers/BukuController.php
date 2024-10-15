<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\Book;

class BukuController extends Controller
{
    public function index()
    {
        $data_buku = Book::all()->sortByDesc('id');
        $data_buku = Book::orderBy('id', 'desc')->get();
        $res = 0;
        $total = 0;
        foreach ($data_buku as $buku){
            $buku -> tgl_terbit = Carbon::createFromFormat('Y-m-d', $buku -> tgl_terbit);
            $res++;
            $total+=$buku -> harga;
        }

        return view('index', compact('data_buku', 'res', 'total'));
    }

    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
