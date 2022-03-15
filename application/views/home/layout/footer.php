</div>
	</body>
	
	<script>
		var demoImage = '1645470336.png';
	</script>
	<script src="<?php echo base_url() ?>/template/home/assets\promobox.js"></script>
	
	<div class="container container-1440">
    <div class="px-lg-3 pt-3">
      <div class="row">
        <div class="col-12">
          <div class="caption-group caption-group caption-group-lg-left">
            <div class="sub-caption">Dukungan Pelanggan</div>

            <div class="caption">
              <h2>Hubungi kami</h2>
            </div>
          </div>

          <div class="home-cs-container mt-3">
            <a class="home-cs-card" href="http://wa.me/6282234963134" target="_blank">
              <div class="cs-image">
                  <img alt="" src="wa.svg">
              </div>
              <div class="cs-caption"></div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
	
	
	<script>var demoImage = '';</script>
	<script src="<?php echo base_url() ?>/template/home/assets\js\promobox.js"></script>
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
				 Tersedia berbagai metode pembayaran diantaranya Alfamart, Bank BCA, Bank Mandiri, Bank BNI, Bank Bri, DANA, OVO, Gopay, Shopee Pay, Link Aja, dll.
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
				
				
				<div class="col-lg-12 text-center text-md-left">
					<hr>
					<div class="">
						 © 2022 <a href="#">AEROSTORE</a>  <a href="terms.html"></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	</footer>
	<a href="https://www.instagram.com/aero_store1/" class="btn-ig-float shadow-sm" target="_blank"><i class="fab fa-instagram" style="margin-top: 9px;"></i></a>
	<a href="https://api.whatsapp.com/send?phone=6282234963134" class="btn-call-float shadow-sm" target="_blank"><i class="fab fa-whatsapp" style="margin-top: 9px;"></i></a>
	<a href="#" id="btn-gotop" onclick="topFunction()"><i class="fas fa-angle-up mt-1"></i></a>
	<?php include(APPPATH.'views/ajax/home_ajax.php'); ?>
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