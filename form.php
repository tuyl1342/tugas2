<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Form tambah mahasiswa</h2>
    <form action="simpan.php" method="POST">
    NIM : <br>
    <input type="text" name="txtnim"><br>
    Nama : <br>
    <input type="text" name="txtnama"><br>
    Jenis Kelamin : <br>
    <select name="txtjenkel">
        <option value="Laki-laki">Laki-laki</option>
        <option value="Perempuan">Perempuan</option>
</select><br>
Tempat Tanggal Lahir : <br>
<input type="text" name="txtlahir"><br>
Nomor hp : <br>
<input type="text" name="txthp"><br>
<button type="submit">Simpan</button>
</body>
</html>