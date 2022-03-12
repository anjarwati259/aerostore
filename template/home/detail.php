<?php
include "koneksi.php";
//SELECT tb_pesan.*, tb_rekening.nama, tb_rekening.atas_nama, tb_rekening.no_rekening FROM tb_pesan LEFT JOIN tb_rekening ON tb_pesan.rekening = tb_rekening.id_rekening WHERE tb_pesan.id_transaksi = 'TX-05629783'
$id_transaksi = @$_POST['id'];
//echo json_encode($total_bayar);
// $data = array('userid' => $userid,
// 'zoneid' => $zoneid,
// 'nama' => $nama,
// 'no_hp' => $no_hp,
// 'paket' => $paket,
// 'harga' => $harga,
// 'bayar' => $bayar, );
	$query = mysqli_query($koneksi, "SELECT tb_pesan.*, tb_rekening.nama, tb_rekening.atas_nama, tb_rekening.no_rekening FROM tb_pesan LEFT JOIN tb_rekening ON tb_pesan.rekening = tb_rekening.id_rekening WHERE tb_pesan.id_transaksi = '$id_transaksi'");
	//echo json_encode($query);
	        if ($query)
	        {
	            $data_pesan = mysqli_fetch_array($query);
	            //echo json_encode($koneksi->connect_error);
	            echo json_encode($data_pesan);
	        }
	        else
	        {
	        	//$data_pesan = mysqli_fetch_array($query);
	            echo json_encode(array('status' => 'gagal' ));
	            //echo json_encode($data_pesan);
	        }
 ?>