<?php 

require_once('konek.php');
$id = $_GET['id'];

$query = "DELETE FROM artikel WHERE id=$id";
mysqli_query($conn, $query);
echo "<script> alert ('Berhasil Menghapus Cerita');
    window.location.replace('index.php');
    </script>";