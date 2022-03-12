<html>
<head>




<title>LonaStoreID - Top Up Games Aman, Murah, & Terpercaya</title>
<link rel="shortcut icon" href="logolona.jpeg" type="image/x-icon">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="LonaStoreID Tempat Top Up Games Yang Aman, Murah, dan Terpercaya Sejak 2017 Menyediakan Layanan Top Up Diamond Mobile Legends Dan UC PUBG Mobile Serta Jasa Joki Mobile Legends .">
<meta name="robots" content="index,nofollow">
<meta name="author" content="LonaStoreID">
<meta name="keywords" content="diamond ml murah, top up ml murah, diamond mobile legend murah, LonaStoreID">
<meta name="language" content="ID">
<meta name="coverage" content="Worldwide">
<link rel="stylesheet" href="assets\vendor\fontawesome\css\all.css">
<link rel="stylesheet" href="assets\vendor\bootstrap\css\bootstrap.min.css">
<script src="assets\js\jquery-3.5.1.min.js"></script>
<script src="assets\vendor\bootstrap\js\bootstrap.bundle.min.js"></script>
<script src="assets\vendor\alertifyjs\alertify.min.js"></script>
<link rel="stylesheet" href="assets\vendor\alertifyjs\css\alertify.min.css">
<link rel="stylesheet" href="assets\vendor\alertifyjs\css\themes\bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="assets\vendor\DataTables\DataTables-1.10.22\css\dataTables.bootstrap4.min.css?x">
<script type="text/javascript" src="assets\vendor\DataTables\DataTables-1.10.22\js\jquery.dataTables.min.js?x">
    </script>
<script type="text/javascript" src="assets\vendor\DataTables\DataTables-1.10.22\js\dataTables.bootstrap4.min.js?x">
    </script>
<link rel="stylesheet" href="assets\css\style.css?v=1641098465">
<script src="https://www.google.com/recaptcha/api.js" async="" defer=""></script>
</head>
<header>
<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-custom shadow-sm p-3 mb-5 bg-white">
<div class="container">
	<a class="navbar-brand" href="index.htm"><img src="logolona.jpeg" width="140px"></a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	<i class="fas fa-bars color-primary" style="font-size: 26px;"></i>
	</button>
	<div class="collapse navbar-collapse" id="navbarSupportedContent">
		<div class="mr-auto"></div>
		<ul class="navbar-nav">
			<li class="nav-item">
				<li class="nav-item">
					<a class="nav-link active" href="index.htm"><i class="fas fa-home"></i> Home</a>
				</li>
			
			</ul>
		</div>
	</div>
	</nav>
	</header>
	<div class="preloader">
		<div class="loading">
			<img src="assets\images\preloader.gif" width="100"></div>
	</div>
<script>
$(document).ready(function() {
    $(".preloader").fadeOut();
})
</script>



<br>
<body class="d-flex flex-column min-vh-100">
    <br><br><br><br>
    <div class="container">
        <div class="row mt-2" style="margin:0px">
            
			
            <div class="col-md-12 col-sm-12 col-lg-8">
			
		<center>
			
			<?php
																						
									
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
	
	// mengambil data barang dengan kode paling besar
$query = mysqli_query($koneksi, "SELECT max(no_transaksi) as kodeTerbesar FROM lonastoreid");
$data = mysqli_fetch_array($query);
$kodeBarang = $data['kodeTerbesar'];
 
// mengambil angka dari kode barang terbesar, menggunakan fungsi substr
// dan diubah ke integer dengan (int)
$urutan = $kodeBarang;
 
// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
$urutan++;
		
			
	
		date_default_timezone_set('Asia/Jakarta');
		$tanggal = date('Y-m-d');
		$waktu = date("H:i:s");
		$sisauc = @$_POST['sisauc'];
		$nickname = @$_POST['nickname'];
		
		$layanan = @$_POST['layanan'];
		$userid = @$_POST['data'];
		$serverid = @$_POST['zoneid'];
		$nominal = @$_POST['service'];
		$nohp = @$_POST['nohp'];
		$method = @$_POST['method'];
		
		$bayar = substr($nominal,-9);
		
				
																								
		$hasil = mysqli_query($koneksi,"INSERT INTO lonastoreid (no_transaksi, tanggal, waktu, layanan, userid, serverid, nominal, method, nohp, sisauc, nickname) VALUES ('$urutan','$tanggal','$waktu','$layanan','$userid','$serverid','$nominal','$method','$nohp','$sisauc','$nickname')");																							
																									
																									
								
									
																									echo "<br />";
																									echo "BERIKUT PEMESANAN ANDA";
																									echo "<br />";
																									
																									
																									echo $layanan;
																									echo "<br />";
																									echo "<br />";
																																															
																																																																								
																									echo "No.Pesanan : ";
																									echo $urutan;
																									echo "<br />";
																									echo "<br />";
																									
																									echo "UserID : ";
																									echo $_POST['data'];
																								
																								
																									echo "<br />";
																									echo "Nickname : ";
																									echo $_POST['nickname'];
																									
																									echo "<br />";
																									echo "Sisa UC : ";
																									echo $_POST['sisauc'];
																									
																									
																									echo "<br />";
																									echo "<br />";
																									echo "Nominal : ";
																									echo "<br />";
																									echo $_POST['service'];
																									echo "<br />";
																									echo "<br />";
																									
																																																																											echo "<br />";
																									echo "Whatsapp : ";
																									echo $_POST['nohp'];
																									echo "<br />";
																									echo "<br />";
																									
																									echo "Metode Pembayaran : ";
																									echo "<br />";
																									echo $_POST['method'];
																									echo "<br />";
																									echo "<br />";
			

		 																	
																						 ?>
																						 
																						 
						<h5><font color="red">Simpan/Catat No.Pesanan Anda/Screenshootkan Data Pesanan Anda Untuk Mempermudah Saat Konfirmasi Pembayaran</font></h5>
						
						<br>
						
						<h5><font color="red">Segera Proses Pembayaran Sesuai Nominal & Metode Pembayaran Diatas</font></h5>
						
						<br>
						
						
							<div class="elementor-element elementor-element-cdb8326 elementor-align-center elementor-widget elementor-widget-button" data-id="cdb8326" data-element_type="widget" data-widget_type="button.default">
																	<div class="elementor-widget-container">
																		<div class="elementor-button-wrapper">
																			<a href="https://wa.me/6282240798083?text=Halo, Saya Sudah Proses Pembayaran.
																			%0A%0A(Harap Isi No Pesanan Anda dan Sertakan Bukti Pembayaran)
																			%0A%0A*No.Pesanan:*.....																			
																			"><img src="konfirmasi4.png" width="300" height="150">
																			</a>
																		</div>
																	</div>
																</div>
						
						
																					</div>
						
						
						<script type='text/javascript'>
$('#whatsapp .submit').click(WhatsApp);
var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
function WhatsApp() {
    var ph = '';
    if ($('#whatsapp .nick').val() == '') {
        ph = $('#whatsapp .nick').attr('placeholder');
        alert('Silahkan tulis ' + ph);
        $('#whatsapp .nick').focus();
        
    } else if ($('#whatsapp .id').val() == '') {
        ph = $('#whatsapp .id').attr('placeholder');
        alert(ph + ' Harus Diisi');
        $('#whatsapp .id').focus();
       
  	} else if ($('#whatsapp .server').val() == '') {
        ph = $('#whatsapp .server').attr('placeholder');
        alert(ph + ' Harus Diisi');
        $('#whatsapp .server').focus();
        
   	} else if ($('#whatsapp .nominal').val() == '') {
        ph = $('#whatsapp .nominal').attr('placeholder');
        alert('Anda harus memilih ' + ph);
        $('#whatsapp .nominal').focus();
        
  	} else if ($('#whatsapp .pembayaran').val() == '') {
        ph = $('#whatsapp .pembayaran').attr('placeholder');
        alert('Anda harus memilih ' + ph);
        $('#whatsapp .pembayaran').focus();
        
    } else {
       
	  
	   
            // Get Value
            var nomorwa = $('#whatsapp .nomorwa').val(),
                    produk_url = location.href,
  					nick = $('#whatsapp .nick').val(),
                    id = $('#whatsapp .id').val(),
                    server = $('#whatsapp .server').val(),
                    nominal = $('#whatsapp .nominal').val(),
  					pembayaran = $('#whatsapp .pembayaran').val(),
                    pesan = $('#whatsapp .pesan').val();
               $(this).attr(https://wa.me/ + '?phone=6282240798083' + '&text=Halo Admin, Saya mau order Genesis Crystal. Berikut datanya:%0A%0A*Nickname:* ' + nick + '%0A*UserID:* ' + id + '%0A*Server:* ' + server + '%0A*Top Up:* ' + nominal + '%0A*Pembayaran:* ' + pembayaran + '%0A*Catatan:* ' + pesan + '%0A%0A*Produk* ' + produk_url); 
            var w = 960,
                    h = 540,
                    left = Number((screen.width / 2) - (w / 2)),
                    tops = Number((screen.height / 2) - (h / 2)),
                    popupWindow = window.open(this.href, '', 'toolbar=no, location=no, directories=no, status=no, menubar=no, scrollbars=yes, resizable=1, copyhistory=no, width=' + w + ', height=' + h + ', top=' + tops + ', left=' + left);
            popupWindow.focus();
            return false;
        }
    }
}
</script>
						
						
															
																
																<br>
																<br>
														
																				 
																						 
																						
		</center>
			
            </div>
        </div>
    </div>
</body>

<br>
<footer class="footer mt-auto">
	<div class="container pt-md-3 pb-md-3 text-left text-md-left">
		<div class="row">
			<div class="col-md-3 col-lg-3 col-sm-12 mt-md-0 mt-3 p-3 text-center footer-tutorial">
				<h1><i class="fas fa-gamepad mb-2"></i></h1>
				<h5>PILIH GAME</h5>
				 Tersedia beberapa game pilihan seperti Mobile Legends dan PUBG Mobile.
			</div>
			<div class="col-md-3 col-lg-3 col-sm-12 mt-md-0 mt-3 p-3 text-center footer-tutorial">
				<h1><i class="fas fa-hand-pointer mb-2"></i></h1>
				<h5>PILIH NOMINAL</h5>
				 Pilih nominal topup game yang kamu pilih yang tersedia pada form order web.
			</div>
			<div class="col-md-3 col-lg-3 col-sm-12 mt-md-0 mt-3 p-3 text-center footer-tutorial">
				<h1><i class="fas fa-money-bill-wave mb-2"></i></h1>
				<h5>LAKUKAN PEMBAYARAN</h5>
				 Tersedia berbagai metode pembayaran diantaranya Bank BCA, Bank BSI, DANA & LINK AJA
			</div>
			<div class="col-md-3 col-lg-3 col-sm-12 mt-md-0 mt-3 p-3 text-center footer-tutorial">
				<h1><i class="fas fa-gift mb-2"></i></h1>
				<h5>TOPUP BERHASIL</h5>
				 Topup akan diproses segera setelah pembayaran & konfirmasi pembayaran sudah dilakukan
			</div>
		</div>
	</div>
	<div class="footer-copyright py-3">
		<div class="container mt-2">
			<div class="row">
				<div class="col-lg-6 mb-3">
					<h4 class="mt-2 mb-3">LonaStoreID</h4>
					 LonaStoreID Adalah Tempat Top Up Games Yang Aman, Murah, dan Terpercaya. LonaStoreID Menyediakan Layanan Top Up Games seperti Diamond Mobile Legends Dan UC PUBG Mobile. Untuk Mempermudah Pembayaran Anda Disini Kami Menyediakan Metode Pembayaran Bank BCA, Bank BSI, DANA & LINK AJA. <br>
					<br>
					 CS Whatsapp : 0822-4079-8083 <br>( Jam : 08.00-23.00 WIB )
				</div>
				
				<div class="col-lg-12 text-center text-md-left">
					<hr>
					<div class="">
						 © 2022 <a href="#">LonaStoreID</a>  <a href="terms.html"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	</footer>
	<a href="https://www.instagram.com/lonastoreid/" class="btn-ig-float shadow-sm" target="_blank"><i class="fab fa-instagram" style="margin-top: 9px;"></i></a>
	<a href="https://api.whatsapp.com/send?phone=6282240798083" class="btn-call-float shadow-sm" target="_blank"><i class="fab fa-whatsapp" style="margin-top: 9px;"></i></a>
	<a href="#" id="btn-gotop" onclick="topFunction()"><i class="fas fa-angle-up mt-1"></i></a>
	<script>
mybutton = document.getElementById("btn-gotop");
window.onscroll = function() {
    scrollFunction()
};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        mybutton.style.display = "block";
    } else {
        mybutton.style.display = "none";
    }
}

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>

</html>