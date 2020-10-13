<?php
    $server = "localhost";
    $user = "root";
    $password = "";
    $nama_database ="dts_raport";

    $db = mysqli_connect($server, $user, $password, $nama_database);
    if(!$db){
        die("Gagal Terhubung Ke Database : ".mysqli_connect.error());
    }
?>