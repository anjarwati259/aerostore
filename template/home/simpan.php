<?php
  // Koneksi ke database MySQL
  $dbhost = "localhost";
  $dbuser = "kliq6538_hendra";
  $dbpass = "cuncun123";
  $link = mysqli_connect($dbhost,$dbuser,$dbpass);
  
  //Memeriksa Koneksi
  if(!$link){
    die ("Koneksi dengan database gagal: ".mysqli_connect_errno().
         " - ".mysqli_connect_error());
  }


  //Memilih database kliq6538_tokobaju
  $result = mysqli_select_db($link, "kliq6538_tokobaju");
  if(!$result){
    die ("Query Error: ".mysqli_errno($link).
         " - ".mysqli_error($link));
  }
  
  //Pertama ambil data kiriman dari form
$userid = @$_POST['data'];

INSERT INTO lonastoreid (userid) VALUES ("$userid");
  
  ?>