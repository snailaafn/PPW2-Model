<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
    <div class="container">
        <h4>Edit Buku</h4>
        @if (count($errors)>0)
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
        <form action="{{ route('buku.update', $buku->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div>Judul <input type="text" class="form-control" name="judul" value="{{ $buku->judul }}"></div>
            <div>Penulis <input type="text" class="form-control" name="penulis" value="{{ $buku->penulis }}"></div>
            <div>Harga <input type="text" class="form-control" name="harga" value="{{ $buku->harga }}"></div>
            <div>Tanggal Terbit <input type="date" class="form-control" name="tgl_terbit" value="{{ $buku->tgl_terbit }}"></div>
            <button type="submit">Simpan</button>
            <a href="{{'/book'}}">Kembali</a>
        </form>
    </div>
</body>
</html>
