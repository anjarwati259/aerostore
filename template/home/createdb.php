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
  // cek apakah tbl_mahasiswa sudah ada. jika ada, hapus tabel
  $query = "DROP TABLE IF EXISTS lonastoreid";
  $hasil_query = mysqli_query($link, $query);
  
  if(!$hasil_query){
    die ("Query Error: ".mysqli_errno($link).
         " - ".mysqli_error($link));
  }
  // Pembuatan tbl_mahasiswa
  $query  = "CREATE TABLE lonastoreid (no_transaksi INT NOT NULL AUTO_INCREMENT, tanggal DATE, waktu TIME, layanan VARCHAR(50), userid VARCHAR(50), "; 
  $query .= "serverid INT NOT NULL, nickname VARCHAR(20), sisauc INT, ";
  $query .= "nominal VARCHAR(50), method VARCHAR(50), ";
  $query .= "nohp VARCHAR(20), PRIMARY KEY (no_transaksi))";

  $hasil_query = mysqli_query($link, $query);
  if(!$hasil_query){
      die ("Query Error: ".mysqli_errno($link).
           " - ".mysqli_error($link));
  }
  else {
    echo "Tabel 'lonastoreid' sukses dibuat... 
";
  }
  
  
  ?>