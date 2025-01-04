<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Pesan Tiket Futsal</title>

    <style>
        body {
            box-sizing: border-box;
            font-size: 16px;
        }
        h1 {
            text-align: center;
        }
        table {
            box-sizing: border-box;
            border: 2px solid black;
            border-collapse: collapse;
            width: 100%;
        }
        thead {
            background-color: #0d47a1;
            color: white;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            text-align: left;
            padding: 10px;
        }
        .center {
            text-align: center;
        }
    </style>
</head>
<body>
    <h1>Data Pesan Tiket Futsal</h1>
    <table align="center">
        <thead>
            <tr>
                <th class="center">No</th>
                <th>ID Tiket Futsal</th>
                <th>Nama Pengguna</th>
                <th>Tanggal Pesan</th>
                <th>Jumlah Pesan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item=>$row)
                <tr>
                    <td class="center">{{ $item+1 }}</td>
                    <td>{{ $row->tiket_futsal->id}}</td>
                    <td>{{ $row->pengguna->nama_pengguna}}</td>
                    <td>{{ $row->tanggal_pesan}}</td>
                    <td>{{ $row->jumlah_pesan}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>