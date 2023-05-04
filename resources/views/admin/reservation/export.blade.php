</html><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pembayaran</title>
    <style>
        body {
            display : flex;
            justify-content: center;
            padding: 2rem;
        }
        table{
            border: 1px solid black;
            width: 100%;
            background-color: #f1f1f1;
        }
        table thead th {
            border-bottom: 1px solid black;
            padding: 0.5rem 0.2rem;
            text-transform: Uppercase;
            font-size: 0.7rem;
        }
        table tbody{
            background-color: white;
        }
        table tbody tr td{
            text-align:center;
            padding: 0.5rem 0.2rem;
        }
     </style>
</head>
<body>
    <table class="">
        <thead>
            <tr>
                <th>Pegawai</th>
                <th>Pelanggan</th>
                <th>Tanggal</th>
                <th>Jam</th>
                <th>Meja</th>    
                <th>Menu</th>                   
            </tr>
        </thead>
        <tbody>
        @foreach ($reservation as $pesan)
             <tr>
            <td>{{$pesan->pegawai->nama}}</td>
            <td>{{$pesan->pelanggan->nama}}</td>
            <td>{{$pesan->tanggal}}</td>
            <td>{{$pesan->jam}}</td>
            <td>{{$pesan->meja}}</td>
             <td>{{$pesan->menu->makanan}}</td> 
    </td>
    </tr>
    @endforeach 

    </tbody>

    </table>
    
</body>
</html>