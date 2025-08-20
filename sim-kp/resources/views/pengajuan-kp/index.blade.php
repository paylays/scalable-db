<h2>Daftar Pengajuan KP</h2>
<a href="{{ route('pengajuan-kp.create') }}" class="btn btn-primary mb-3">Tambah Pengajuan</a>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Mahasiswa</th>
            <th>NIM</th>
            <th>Judul</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach($pengajuans as $item)
            <tr>
                <td>{{ $item->mahasiswa_id }}</td>
                <td>{{ $item->mahasiswa['nama'] ?? 'Unknown' }}</td>
                <td>{{ $item->mahasiswa['nim'] ?? '-' }}</td>
                <td>{{ $item->judul }}</td>
                <td>{{ ucfirst($item->status) }}</td>
            </tr>
        @endforeach
    </tbody>
</table>