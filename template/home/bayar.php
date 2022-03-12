<?php
include "koneksi.php";
$kode = substr(str_shuffle('0123456789'),1,8);
$biaya_admin = substr(str_shuffle('0123456789'),1,3); 
$id_transaksi = 'TX-'. $kode;
$userid = @$_POST['userid'];
$zoneid = @$_POST['zoneid'];
$nama = @$_POST['nama'];
$no_hp = @$_POST['no_hp'];
$paket = @$_POST['paket'];
$harga = @$_POST['harga'];
$bayar = @$_POST['bayar'];
$rekening = @$_POST['bayar'];
$total_bayar = $harga + $biaya_admin;
//echo json_encode($total_bayar);
// $data = array('userid' => $userid,
// 'zoneid' => $zoneid,
// 'nama' => $nama,
// 'no_hp' => $no_hp,
// 'paket' => $paket,
// 'harga' => $harga,
// 'bayar' => $bayar, );
	$query = mysqli_query($koneksi, "INSERT INTO tb_pesan(id_transaksi, userid, zoneid, paket, harga, biaya_admin, total_bayar, nama_user, no_telp, rekening, status) VALUES('$id_transaksi', '$userid', '$zoneid', '$paket', '$harga', '$biaya_admin','$total_bayar','$nama','$no_hp','$bayar','0')");
	        if ($query)
	        {
	            echo json_encode(array('status' => 'sukses',
	            						'id_transaksi' => $id_transaksi ));
	        }
	        else
	        {
	            echo json_encode(array('status' => 'gagal' ));
	        }
 ?>