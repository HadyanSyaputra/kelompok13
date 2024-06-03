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
        <h1 class="text-center">Form Akademik Mahasiswa</h1>
        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <div class="mb-4 text-right">
            <a href="{{ route('akademik.index') }}" class="btn btn-primary">Lihat Data</a>
        </div>
        <form action="{{ route('akademik.store') }}" method="post" class="mx-auto mt-4" style="max-width: 500px;">
            @csrf
            <div class="mb-3">
                <label for="prodi" class="form-label">Program Studi </label>
                <input type="text" class="form-control" id="prodi" name="prodi" required>
            </div>

            <div class="mb-3">
                <label for="dospem" class="form-label">Dosen Pembimbing </label>
                <input type="text" class="form-control" id="dospem" name="dospem" required>
            </div>

            <div class="mb-3">
                <label for="kelas" class="form-label">Kurikulum Kelas </label>
                <select class="form-control" id="kelas" name="kelas" required>
                    <option value="Reguler">Reguler</option>
                    <option value="Non-Reguler">Non-Reguler</option>
                </select>
            </div>
            
            <div class="mb-3">
                <label for="angkatan" class="form-label">Angkatan </label>
                <input type="text" class="form-control" id="angkatan" name="angkatan" required>
            </div>
            
            <div class="mb-3">
                <label for="semester" class="form-label">Semester </label>
                <input type="text" class="form-control" id="semester" name="semester" required>
            </div>
            
            <div class="mb-3">
                <label for="jumlah_mk" class="form-label">Jumlah Mata Kuliah yang Diambil </label>
                <input type="text" class="form-control" id="jumlah_mk" name="jumlah_mk" required>
            </div>
            
            <div class="mb-3">
                <label for="ipk" class="form-label">Indeks Prestasi Kumulatif (IPK) </label>
                <input type="text" class="form-control" id="ipk" name="ipk" required>
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
