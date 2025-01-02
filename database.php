<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "web_aril";

$db = mysqli_connect($server, $user, $password, $nama_database);

if( !$db ){
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
echo "Koneksi berhasil";
?>