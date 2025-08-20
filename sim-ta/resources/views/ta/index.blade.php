<h1>Daftar Mahasiswa (SIM TA)</h1>
<ul>
    @foreach($mahasiswas as $m)
        <li>{{ $m['nim'] }} - {{ $m['nama'] }} ({{ $m['jurusan'] }})</li>
    @endforeach
</ul>