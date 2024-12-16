<?php 

require_once('konek.php');

if(isset($_POST['simpan'])) {
    $judul           = $_POST['judul'];
    $deskripsi       = $_POST['deskripsi'];
    $tgl_buat        = $_POST['tgl_buat'];
    $penulis         = $_POST['penulis'];
    $query           = "INSERT INTO artikel (judul,deskripsi,tgl_buat,penulis) VALUES('$judul','$deskripsi','$tgl_buat','$penulis')";
    mysqli_query($conn, $query);
    echo "<script> alert ('Berhasil Menambahkan Cerita');
    window.location.replace('index.php');
    </script>";
}


?>