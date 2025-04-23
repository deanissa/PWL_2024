<!DOCTYPE html>
<html>
<head>
    <title>Nilai Mahasiswa</title>
</head>
<body>
    <h1>Nilai Mahasiswa: {{ $mahasiswa->nama }}</h1>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Mata Kuliah</th>
            <th>SKS</th>
            <th>Nilai</th>
        </tr>
        @foreach($nilai as $i => $n)
        <tr>
            <td>{{ $i+1 }}</td>
            <td>{{ $mahasiswa->nama }}</td>
            <td>{{ $n->nama }}</td>
            <td>{{ $n->sks }}</td>
            <td>{{ $n->nilai }}</td>
        </tr>
        @endforeach
    </table>

    <br>
    <a href="{{ url('mahasiswa') }}">← Kembali</a>
</body>
</html>
