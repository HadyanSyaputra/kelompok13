<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Data</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Form Mahasiswa</h1>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="mb-4 text-right">
            <a href="{{ route('mahasiswa.index') }}" class="btn btn-primary">Lihat Data</a>
        </div>
        <form action="{{ route('mahasiswa.store') }}" method="post" class="mx-auto mt-4" style="max-width: 500px;">
            @csrf
            <div class="mb-3">
                <label for="nama" class="form-label">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" required>
            </div>

            <div class="mb-3">
                <label for="nim" class="form-label">Nim </label>
                <input type="text" class="form-control" id="nim" name="nim" required>
            </div>

            <div class="mb-3">
                <label for="genemailder" class="form-label">Email </label>
                <input type="text" class="form-control" id="email" name="email" required>
            </div>

            <div class="mb-3">
                <label for="gender" class="form-label">Gender </label>
                <select class="form-control" id="gender" name="gender" required>
                    <option value="Perempuan">Perempuan</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                </select>
            </div>
            
            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat </label>
                <input type="text" class="form-control" id="alamat" name="alamat" required>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
