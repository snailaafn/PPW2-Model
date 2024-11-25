
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1>Daftar Mahasiswa</h1>

        <!-- Tabel Menampilkan Data Mahasiswa -->
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>NIM</th>
                    <th>Jurusan</th>
                </tr>
            </thead>
            <tbody id="mahasiswa-list"></tbody>
        </table>
    </div>

    <script>
        // Fetch data mahasiswa dari API
        fetch('http://127.0.0.1:8000/api/mahasiswa')
            .then(response => response.json())
            .then(data => {
                let mahasiswaList = document.getElementById('mahasiswa-list');
                mahasiswaList.innerHTML = ''; // Clear existing data
                data.forEach((item, index) => {
                    let row = document.createElement('tr');
                    row.innerHTML = `
                        <td>${index + 1}</td>
                        <td>${item.nama}</td>
                        <td>${item.nim}</td>
                        <td>${item.jurusan}</td>
                    `;
                    mahasiswaList.appendChild(row);
                });
            })
            .catch(error => console.log('Error:', error));
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
