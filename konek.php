<?php
    $namahost = "localhost";
    $user = "root";
    $password = "";
    $databases = "p3";
    $conn = mysqli_connect($namahost,$user,$password,$databases);
    if (!$conn) {
        echo "database tidak terhubung";
    }
?>