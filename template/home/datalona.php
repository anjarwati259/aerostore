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
		
		<br>
		
		
	<h2>Data Pesanan LonaStoreID</h2>
	<style>
        table,tr,td {
            border: 1px solid black;
        }
        thead {
            background-color: #cccddd;
        }
    </style>
    <table>
        <thead>
            <tr>
                <td>No.Pesanan</td>
			    <td><center>Tanggal</center></td>
				<td><center>Jam</center></td>
				<td><center>Whatsapp</center></td> 
				<td><center>Layanan</center></td> 
                <td><center>UserID</center></td>
                <td><center>ServerID</center></td>
				<td><center>Nominal</center></td>
				<td><center>Metode Bayar</center></td>
				<td><center>Nickname</center></td>
				<td><center>Sisa UC</center></td>
                               
            </tr>
        </thead>
		
        <?php
        include "koneksi.php";
        $no = 1;
        $query = mysqli_query($koneksi, 'SELECT * FROM lonastoreid');
        while ($data = mysqli_fetch_array($query)) {
        ?>
            <tr>
              
                <td><?php echo $data['no_transaksi'] ?></td>
				<td><?php echo $data['tanggal'] ?></td>
				<td><?php echo $data['waktu'] ?></td>
				<td><?php echo $data['nohp'] ?></td>
				<td><?php echo $data['layanan'] ?></td>
                <td><?php echo $data['userid'] ?></td>
                <td><?php echo $data['serverid'] ?></td>
				<td><?php echo $data['nominal'] ?></td>
				<td><?php echo $data['method'] ?></td>
				<td><?php echo $data['nickname'] ?></td>
				<td><?php echo $data['sisauc'] ?></td>
            </tr>
        <?php } ?>
    </table>
	
		
		
			
																						 
																						 
						
						
						
							
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