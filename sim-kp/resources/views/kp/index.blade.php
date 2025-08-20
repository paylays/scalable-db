<h1>Daftar Mahasiswa (SIM KP)</h1>
<ul>
    @foreach($mahasiswas as $m)
        <li>{{ $m['nim'] }} - {{ $m['nama'] }} ({{ $m['jurusan'] }})</li>
    @endforeach
</ul>