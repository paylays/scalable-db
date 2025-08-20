<h2>Tambah Pengajuan KP</h2>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form method="POST" action="{{ route('pengajuan-kp.store') }}">
    @csrf
    <div class="mb-3">
        <label for="mahasiswa_id" class="form-label">Mahasiswa ID</label>
        <input type="number" name="mahasiswa_id" class="form-control" required>
    </div>
    <div class="mb-3">
        <label for="judul" class="form-label">Judul</label>
        <input type="text" name="judul" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
</form>