<?php
$host = "localhost";
$user ="root";
$pass="";
$db="dblatihan";

$koneksi = mysqli_connect ($host, $user, $pass, $db);
 if($koneksi){
 echo "koneksi berhasil"."<br>";
 }
 else{
     echo "koneksi gagal";
 }