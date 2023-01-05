<?php include ("config.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Absensi Mahasiswa</title>
</head>
<body>
<header>
<h3>Absensi Mahasiswa</h3>
</header>
<nav>
<a href="Absensi-mahasiswa.php">[+] Absen</a>
</nav>
<br>
<table border="1">
<thead>
<tr>
<th>Nama</th>
<th>jurusan</th>
<th>kelas</th>
<th>npm</th>
</tr>
</thead>
<tbody>
<?php
$sql = "SELECT FROM Absensi";
$query = mysqli($db,$sql);
while($mahasiswa = mysqli_fetch_array ($query))
{
    echo "<tr>";
    echo "<td>".$mahasiswa['id']."</td>";
    echo "<td>".$mahasiswa['Nama']."</td>";
    echo "<td>".$mahasiswa['Jurusan']."</td>";
    echo "<td>".$mahasiswa['Kelas']."</td>";
    echo "<td>".$mahasiswa['Npm']."</td>";
    echo "<a href='formedit.php?id=".$mahasiswa['id']."'>Edit</a> | ";
    echo "<a href='hapus.php?id=".$mahasiswa['id']."'>Hapus</a>";
    echo "</td>";
    echo "</tr>";
}
?>
</tbody>
</table>
<p> Total: <?php echo mysqli_num_rows($query) ?></p>
</body>
</html>