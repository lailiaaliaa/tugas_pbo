<!DOCTYPE html>
<html>

<head>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }
    </style>
</head>

<body>

    <h1>Data Siswa</h1>

    <table id="customers">
        <tr>
            <th>No.</th>
            <th>Nisn</th>
            <th>Nis</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Alamat</th>
            <th>No Telepon</th>
            <th>Spp</th>
        </tr>
        @php
        $no=1;
        @endphp
        @foreach ($data as $row)
        <tr>
            <th scope="row">{{ $no++ }}</th>
            <td>{{ $row->nisn }}</td>
            <td>{{ $row->nis }}</td>
            <td>{{ $row->nama }}</td>
            <td>{{ $row->kelas }}</td>
            <td>{{ $row->alamat }}</td>
            <td>{{ $row->telp }}</td>
            <td>{{ $row->spp }}</td>
        </tr>
        @endforeach
    </table>

</body>

</html>
