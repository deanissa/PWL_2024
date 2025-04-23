<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
</head>
<body>
    <h1>Data Mahasiswa</h1>
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>
        @foreach($data as $mhs)
        <tr>
            <td>{{ $mhs->nim }}</td>
            <td>{{ $mhs->nama }}</td>
            <td>{{ $mhs->jurusan }}</td>
            <td>
                <a href="{{ url('mahasiswa/'.$mhs->mahasiswa_id.'/nilai') }}">Nilai</a> |
                <a href="{{ url('mahasiswa/'.$mhs->mahasiswa_id.'/edit') }}">Edit</a>
            </td>
        </tr>
        @endforeach
    </table>
</body>
</html>
