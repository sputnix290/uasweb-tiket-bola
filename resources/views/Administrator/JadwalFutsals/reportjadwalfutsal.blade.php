<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Jadwal Futsal</title>

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
    <h1>Data Jadwal Futsal</h1>
    <table align="center">
        <thead>
            <tr>
                <th class="center">No</th>
                <th>Tim Home</th>
                <th>Tim Away</th>
                <th>Kompetisi</th>
                <th>Tanggal</th>
                <th>Waktu Mulai</th>
                <th>Gor</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $item=>$row)
                <tr>
                    <td class="center">{{ $item+1 }}</td>
                    <td>{{ $row->tim_home->nama_tim_home}}</td>
                    <td>{{ $row->tim_away->nama_tim_away}}</td>
                    <td>{{ $row->kompetisi->nama_kompetisi}}</td>
                    <td>{{ $row->tanggal}}</td>
                    <td>{{ $row->waktu_mulai}}</td>
                    <td>{{ $row->gor->nama_gor}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>