<?php
include("config.php");
?>

<html>
    <head>
        <title>edit</title>
    </head>
    <body>
        <table>
            <tr>
                <td><a href="Absensi-mahasiswa.php">Absen Mahasiswa</a></td>
                <td><a href="list-mahasiswa.php">list mahasiswa</a></td>
            </tr>
        </table>
        <table>
            <?php
            $id=$_GET['id'];
            $query=mysql_query("SELECT *  FROM mahasiswa WHERE id='".$id."'");
            $data=mysql_fetch_assoc($query);
            if(isset($_POST['edit']))
            {
                $query=mysql_query("UPDATE barang SET nama_mahasiswa'".$_POST.['nama_pegawai']."' WHERE id='$id'");
                if($query)
                {
                    echo"data berhasil disimpan";
                    $query=mysql_query("SELECT * FROM mahasiswa WHERE id='".$id."'");
                    $data=mysql_fetch_assoc($query);
                }else{
                    echo"data gagal disimpan".mysql_error();
                }
            }
            ?>
            <form method="POST">
                <tr>
                    <td>Nama Pegawai</td>
                    <td><input type="text" name="nama_mahasiswa" size="30" value="<?php echo
                    $data['nama_mahasiswa'];?>"></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="edit" value="Edit"></td>
                </tr>
        </form>
        </table>
    </body>
</html>