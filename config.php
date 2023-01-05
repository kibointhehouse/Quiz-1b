<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $server = "localhost";
    $user = "root";
    $password = "root";
    $namadb = "absensi-mahasiswa";

    $db = "mysqli_connect($server,$user,$password,$namadb";

    if(!$db)
    
        die("gagal terhubung dengan database :". mysqli_connect());
     
    ?>
</body>
</html>