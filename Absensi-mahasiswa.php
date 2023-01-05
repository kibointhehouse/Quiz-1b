<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Absensi</title>
</head>
<body>
    <header>
        <h3>Absensi Mahasiswa</h3>
</header>
<form action="proses-absensi.php" method="post">
    <fieldset>
        <p>
            <label for="Nama">Nama: </label>
            <input type="text" name="nama" placeholder="nama lengkap" />
        </p>
        <p>
            <label for="Jurusan">Jurusan: </label>
            <textarea name="Jurusan"></textarea>
        </p>
        <p>
            <label for="Kelas">Kelas</label>
            <textarea name="Kelas"></textarea>
        </p>
        <p>
        <label for="Nama">Npm: </label>
        <input type="text" name="Npm" placeholder="Npm" />
        </p>
        <p>
            <input type="submit" value="Absen" name="Absen">
        </p>
    </fieldset>
</form>
</body>
</html>