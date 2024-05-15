<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>
        <h1>DATA TABEL TRANSAKSI</h1>

        <table border="2">
            <tr>
                <th>ID</th>
                <th>Nama_pembeli</th>
                <th>Kelamin</th>
                <th>Nama_barang</th>
                <th>Jumlah</th>
                <th>Tanggal</th>
            </tr>
        @php $no = 1; @endphp
    @foreach ($transaksi as $data)
    <tr>
        <td>{{ $data->id }}</td>
        <td>{{ $data->nama_pembeli}}</td>
        <td>{{ $data->kelamin}}</td>
        <td>{{ $data->nama_barang}}</td>
        <td>{{ $data->jumlah}}</td>
        <td>{{ $data->tanggal}}</td>
    </tr>
    @endforeach
        </table>
    </center>
</body>
</html>