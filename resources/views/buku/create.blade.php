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
        <h4>Tambah Buku</h4>
        @if (count($errors)>0)
            <ul class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif

        <form method="post" action="{{route('buku.store')}}" enctype="multipart/form-data">
            @csrf
            <div>Judul <input type="text" name="judul"></div>
            <div>Penulis <input type="text" name="penulis"></div>
            <div>Harga <input type="text" name="harga"></div>
            <div>Tanggal Terbit <input type="date" name="tgl_terbit" placeholder="yyyy/mm/dd"></div>
            <div>
                <label for="photo" class="col-md-4 col-form-label text-md-end text-start">Photo</label>
                <div class="col-md-6">
                    <input type="file" class="form-control @error ('photo') is-invalid @enderror" id="photo" name="photo" value="{{old('photo')}}">
                    @if ($errors->has('photo'))
                    <span class="text-danger">{{ $errors->first('photo')}}</span>
                    @endif
                </div>
            </div>
            <button type="submit">Simpan</button>
            <a href="{{'/book'}}">Kembali</a>
        </form>
    </div>
</body>
</html>
