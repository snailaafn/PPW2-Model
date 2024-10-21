<!DOCTYPE html>
<html>
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css">

    <style>
        .table thead th {
            background-color: #266bea;
            color: white;
            text-align: center;
        }
        .table tbody {
            background-color: #white;
        }
        .table td {
            vertical-align: middle;
        }
        .table-container {
            margin-top: 20px;
            margin-bottom: 20px;
        }
        /* .dt-layout-row {
            display: flex;
            justify-content: flex-end;
        } */

    </style>
</head>

<body>
<div class="container table-container">
    @if (Session::has('pesan'))
        <div class="alert alert-success">{{Session::get('pesan')}}</div>
    @endif
    <table border="1" class="table table-striped" id="datatable">
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
                    <td>{{ "Rp " . number_format($buku->harga, 0, ',', '.') }}</td>
                    <td>{{ $buku->tgl_terbit->format('d/m/Y') }}</td>
                    <td>
                        <form action="{{ route('buku.destroy', $buku->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Yakin mau dihapus?')" type="submit"
                            class="btn btn-danger">Hapus</button>
                        </form>
                        <form action="{{ route('buku.edit', $buku->id) }}" method="POST">
                            @csrf
                            @method('GET')
                            <button type="submit" class="btn btn-primary">Edit</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- <div>{{ $data_buku->links() }}</div> --}}
    {{-- <div><strong>Jumlah Buku: {{ $jumlah_buku }}</strong></div> --}}

    <div class="row">
        <div class="col-md-6">
            <h5>Jumlah total adalah: {{ $jumlah_buku }}</h5>
        </div>
        <div class="col-md-6 text-right">
            <h5>Jumlah total harga: {{"Rp " . number_format($total, 2, ',', '.')}}</h5>
        </div>
    </div>
    <div>
        <a href="{{ route('buku.create') }}" class="btn btn-primary">Tambah Buku</</a>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#datatable').DataTable();
    }   );
</script>
</body>
</html>
