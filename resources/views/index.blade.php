<!DOCTYPE html>
<html>
<head>
    <!-- Link ke CSS Bootstrap -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .table thead th {
            background-color: #513a31;
            color: white;
            text-align: center;
        }
        .table tbody {
            background-color: #ffeed5;
        }
        .table td {
            vertical-align: middle;
        }
        .table-container {
            margin-top: 20px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<div class="container table-container">
    <table border="1" class="table table-striped table-hover">
        <thead>
            <tr>
                <th>Id</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Harga</th>
                <th>Tanggal Terbit</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data_buku as $index => $buku)
                <tr>
                    <td class="text-center">{{ $index + 1 }}</td>
                    <td>{{ $buku->judul }}</td>
                    <td>{{ $buku->penulis }}</td>
                    <td>{{ "Rp " . number_format($buku->harga, 2, ',', '.') }}</td>
                    <td>{{ $buku->tgl_terbit->format('d/m/Y') }}</td>
                    <td>
                        <a href="#" class="btn btn-sm btn-primary">Edit</a>
                        <a href="#" class="btn btn-sm btn-danger">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="row">
        <div class="col-md-6">
            <h5>Jumlah total adalah: {{ $res }}</h5>
        </div>
        <div class="col-md-6 text-right">
            <h5>Jumlah total harga: {{"Rp " . number_format($total, 2, ',', '.')}}</h5>
        </div>
    </div>
</div>

</body>
</html>
