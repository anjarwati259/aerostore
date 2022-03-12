<?php
 
  global $koneksi;
 
  // Koneksi ke database MySQL
  $dbhost = "localhost";
  $database="kliq6538_tokobaju";
  $dbuser = "kliq6538_hendra";
  $dbpass = "cuncun123";
  $koneksi = mysqli_connect($dbhost,$dbuser,$dbpass, $database);


  
  //Memeriksa Koneksi
  if(!$koneksi){
    die ("Koneksi dengan database gagal: ".mysqli_connect_errno().
         " - ".mysqli_connect_error());
  }



 
  
  ?>