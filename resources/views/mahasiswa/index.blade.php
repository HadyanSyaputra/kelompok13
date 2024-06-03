<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Data Akademik Mahasiswa</title>
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center">Data Akademik Mahasiswa</h2>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="mb-4 text-right">
            <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary">Tambah Data Baru</a>
        </div>
        <table class="table table-striped mt-4">
            <thead class="thead-dark">
                <tr>
                    <th>Nama</th>
                    <th>Nim</th>
                    <th>Email</th>
                    <th>Gender</th>
                    <th>Alamat</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach($dataMahasiswa as $data)
                    <tr>
                        <td>{{ $data->nama }}</td>
                        <td>{{ $data->nim }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->gender }}</td>
                        <td>{{ $data->alamat }}</td>
                        <td>
                            <form action="{{ route('mahasiswa.destroy', $data->id) }}" method="POST" onsubmit="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
