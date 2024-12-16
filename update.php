<?php
require_once('konek.php');

$id=$_GET['id'];
$query="SELECT * FROM artikel WHERE id= $id";
$eksekusi=mysqli_query($conn, $query);
$artikels=mysqli_fetch_assoc($eksekusi);

if (isset($_POST['judul'])) {
    $judul       = $_POST['judul'];
    $deskripsi   = $_POST['deskripsi'];
    $tgl_buat    = $_POST['tgl_buat'];
    $penulis     = $_POST['penulis'];

    $update = "UPDATE artikel SET
            judul       = '$judul',
            deskripsi   = '$deskripsi',
            tgl_buat    = '$tgl_buat',
            penulis     = '$penulis'
            WHERE id    = '$id'";

mysqli_query($conn, $update);
echo "<script>alert('berhasil edit catatan sekolah');window.location.replace('index.php');</script>";

}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Catatan</title>
    <link href="styleu.css" rel="stylesheet">
</head>
<body>
    <div class="box">
        <h1>EDIT CATATAN</h1>
        <form method="POST" action="">
            <div class="box-1">
                <input type="hidden" name="id" value="<?=$artikels['id']?>">
                <label>Judul:</label>
                <input type="text" name="judul" value="<?=$artikels['judul']?>">
            </div>
            <div class="box-1">
                <label>Deskripsi:</label>
                <textarea name="deskripi" cols="38" rows="18"><?=$artikels['deskripsi']?></textarea>
            </div>
            <div class="box-1">
                <label>Tanggal penulisan:</label>
                <input type="date" name="tgl_buat" value="<?=$artikels['tgl_buat']?>">
            </div>
            <div class="box-1">
                <label>Penulis:</label>
                <input type="text" name="penulis" value="<?=$artikels['penulis']?>">
            </div>
                <input type="submit" name="simpan" value="simpan">
        </form>
    </div>
</body>
</html>