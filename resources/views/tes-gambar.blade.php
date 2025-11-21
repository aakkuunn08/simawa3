<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tes Gambar</title>
</head>
<body style="background: #f3f4f6;">

    <h1>Tes Gambar dari public/images</h1>

    <p>Kalau gambar muncul di bawah ini, berarti path sudah benar.</p>

    <img src="{{ asset('images/kampus.jpeg') }}" alt="kampus" style="width:400px; height:auto; border:1px solid #000;">

</body>
</html>
