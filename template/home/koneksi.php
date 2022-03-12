<?php
$koneksi=new mysqli('localhost','root','','aerostore');
if ($koneksi->connect_errno){
    "Database Error".$koneksi->connect_error;
}
?>