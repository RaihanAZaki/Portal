<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Email</title>
</head>
<body>
    <h1>Contact Message</h1>
    <p>Name : {{$data['nama']}}</p>
    <p>Tanda Pengenal : {{$data['tanda_pengenal']}}</p>
    <p>Email : {{$data['email']}}</p>
    <p>Telp : {{$data['no_telp']}}</p>
    <p>Kategori : {{$data['kategori']}}</p>
    <p>Pesan : {!!$data['pesan']!!}</p>
</body>
</html>