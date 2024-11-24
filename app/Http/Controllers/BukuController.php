<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Hash;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\Models\Book;
use App\Models\User;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;


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

        // $array = [
        //     'key' => 1234,
        //     'key2' => [

        //     ]
        //     ];
        //     // echo $array;
        //     $json = json_encode($array);
        //     echo $json;

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
            'photo' => 'image|nullable|max:1999'

        ]);

        $filenameSimpan = 'noimage.png';
        $filenameSquare = null;

        if ($request->hasFile('photo')) {
            $filenameWithExt = $request->file('photo')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('photo')->getClientOriginalExtension();
            $basename = uniqid() . time();
            // $smallFilename = "small_{$basename}.{$extension}";
            // $mediumFilename = "medium_{$basename}.{$extension}";
            // $largeFilename = "large_{$basename}.{$extension}";
            $filenameSimpan = "{$basename}.{$extension}";
            $path = $request->file('photo')->storeAs('gallery_image', $filenameSimpan);
            //Resize gambar untuk square
            $filenameSquare = "{$basename}_square.{$extension}";
            $squarePath = public_path("storage/gallery_image/square/{$filenameSquare}");
             // Proses resize menggunakan Intervention Image
            // $image = Image::make($filenameWithExt->getRealPath());
            // $image->fit(300, 300); // Resize menjadi 300x300
            // $image->save($squarePath);

        // Buat directory "gallery_image/square" jika belum ada
            if (!file_exists(public_path('storage/gallery_image/square'))) {
                mkdir(public_path('storage/gallery_image/square'), 0755, true);
            }
        }


        $buku = new Book();
        $buku->judul = $request->judul;
        $buku->penulis = $request->penulis;
        $buku->harga = $request->harga;
        $buku->tgl_terbit = $request->tgl_terbit;
        $buku->photo = $filenameSquare;
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
            'photo' => 'image|nullable|max:19999'
        ]);
        if ($request->hasFile('photo')){
            $filenameWithExt = $request->file('photo')->getClientOriginalName();
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);
            $extension = $request->file('photo')->getClientOriginalExtension();
            $filenameSimpan = $filename . '_' . time() . '.' . $extension;
            $path = $request->file('photo')->storeAs('photos', $filenameSimpan);
        }

        User::create([
            'name' => $request->name,
            'email' =>  $request->email,
            'password' => Hash::make($request->password),
            'photo' => $path
        ]);

        if ($buku) {
            $buku->judul = $request->judul;
            $buku->penulis = $request->penulis;
            $buku->harga = $request->harga;
            $buku->tgl_terbit = $request->tgl_terbit;
            $buku->save();
            return redirect('/book')->with('pesan', 'Buku berhasil diperbarui');
        }
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
