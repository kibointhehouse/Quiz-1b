<?php
include("config.php");

//cek apakah tombol absen sudah di klik atau belum
if(isset($_POST['absensi'])){

    // ambil data dari formulir
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $kelas = $_POST['kelas'];
    $npm = $_POST['npm'];

    //buat query
    $sql = "INSERT INTO pendaftaran (nama,jurusan,kelas,npm)
    VALUE ('$nama,$jurusan,$kelas,$npm)";
    $query = mysqli_query($db,$sql);

    // apakah query simpan berhasil?
    if( $query ) {
        // kalau berhasil alihkan ke halaman index.php dengan status=sukses
        header('location: index.php?status=sukses');
    } else {
        //kalau gagal alihkan ke halaman index.php dengan status=gagal
        header('location: index.php?status=gagal');
    }

} else {
    die("akses dilarang...");
}
?>
