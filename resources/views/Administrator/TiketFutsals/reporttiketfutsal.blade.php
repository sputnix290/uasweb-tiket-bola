<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Tiket Futsal</title>

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
    <h1>Data Tiket Futsal</h1>
    <table align="center">
        <thead>
            <tr>
                <th class="center">No</th>
                <th>ID Jadwal Futsal</th>
                <th>Kategori Tiket</th>
                <th>Harga Tiket</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item=>$row)
                <tr>
                    <td class="center">{{ $item+1 }}</td>
                    <td>{{ $row->jadwal_futsal->id}}</td>
                    <td>{{ $row->kategori_tiket}}</td>
                    <td>Rp. {{ number_format($row->harga_tiket, 0, ',','.') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>