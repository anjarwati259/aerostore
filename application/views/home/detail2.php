<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
<div class="row mt-2" style="margin:0px">
		<div id="slider-img" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#slider-img" data-slide-to="0" class="active"></li>
		</ol>
		<div class="carousel-inner" style="border-radius: 5px;">
			<div class="carousel-item active">
				<img src="<?php echo base_url() ?>/template/home/aero2.png" class="d-block w-100"></div>
		</div>
		<a class="carousel-control-prev" href="#slider-img" role="button" data-slide="prev">
		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#slider-img" role="button" data-slide="next">
		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		<span class="sr-only">Next</span>
		</a>
	</div>
	</div>
	<div class="col-12 mb-3 mt-4">
		<center>
		<span class="p-2" style="font-weight: 700; font-size: 20px; border-radius: 4px; color: #001439"></span>
		</center>
	</div>
	
	<div class="container">
    <div class="row mt-2" style="margin:0px">
        <div class="col-md-12 col-sm-12 col-lg-4">
            <div class="text-center text-md-left mb-2">
                <img src="<?php echo base_url('/template/image/'.$detail->gambar) ?>" class="img-responsive rounded mb-2" width="200px" height="200px">
            </div>
            <h5><?php echo $detail->nama_game ?></h5>
            <input type="hidden" name="id_game" id="id_game" value="<?php echo $detail->id_game; ?>">
            <span class="strip-primary"></span>
            <p class="mt-4 pr-4"><h6><?php echo $detail->proses ?></h6><center><font size="4" color="#00BFFF"><b>Open 24 Jam</b></font></center>
			<font size="4" color="black"><b> Cara Order : </b>
			<br>
			1. Masukan ID<br/>
			2. Pilih nominal Coupons <br/>
			3. Pilih Metode Pembayaran<br/>
			4. Masukan Nomor WhatsApp Kamu<br/>
			5. Klik Beli Sekarang & Lakukan Pembayaran<br/>
			6. <?php echo $detail->keterangan ?></b></font>
			<br>
			<br>
			<center><font size="4" color="#00BFFF"><b>Estimasi <?php echo $detail->proses ?></b></font></center>
			<!DOCTYPE html>
			<html>
			<head>
			<title> TEKS BERJALAN </title>
			</head>
			<body>
			<marquee><font size="4" color="#00BFFF"><b>Jika Event Maximal 360 Menit</b></font></marquee>
			<body>
			<html>
        </html></body></body></html></div>
        <div class="col-md-12 col-sm-12 col-lg-8">
			<!-- <form action="" method="post"> -->
               <div class="row">
                	                        
					<div class="col-12 mb-3">
					<div class="card">
					<div class="card-body">
					<div class="text-white text-center position-absolute circle-primary">1</div><h5 style="margin-left: 40px;">Lengkapi data</h5>
								<hr><div class="form-row mt-4">
									<div class="col">
										<input type="number" class="form-control" name="data" id="userid" placeholder="Masukan ID" required>
									</div>
									<div class="col">
										<input type="number" class="form-control" id="zoneid" name="zoneid" placeholder="Masukan ServerID" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" maxlength="5" required="">
									</div>
								</div>
								<div class="mt-3">
								</div>
							</div>
						</div>
						
					</div>
                    <div id="note"></div>
					<div class="col-12 mb-3">
                    <div class="card">
                            <div class="card-body">
                            <div class="text-white text-center position-absolute circle-primary">2</div>
                            <h5 style="margin-left: 40px;">Pilih nominal</h5>
                                <hr>
                                <div class="mt-4">
                                    <div class="panel-topup">
                                    	<?php $id=1; foreach ($data_paket as $key => $value) {?>
                                        <input type="radio" id="service<?php echo $id; ?>" name="service" value="<?php echo $value->id_paket; ?>">
                                        <label id="label_service<?php echo $id; ?>"  for="service<?php echo $id; ?>"><span id="paket<?php echo $value->id_paket; ?>"><?php echo $value->nama_paket ?></span> <br>Rp <span id="harga<?php echo $value->id_paket; ?>"><?php echo number_format($value->harga,'0',',','.') ?></span></label>
                                        <?php $id++;} ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
					
                    <div class="col-12 mb-3">
						<div class="card">
							<div class="card-body">
								<div class="text-white text-center position-absolute circle-primary">3</div>
								<h5 style="margin-left: 40px;">Pilih Metode Pembayaran</h5>
								<hr>
								<h6 style="margin-left: 20px;">Transfer Bank</h6>
								<div class="form-row mt-4">
									<div class="panel-topup">
									<input type="radio" id="tf-bni" name="tf" value="2"><label id="bni" for="tf-bni"><img style="margin-right: 3px !important;" height="50px" src="<?php echo base_url()?>template\home\assets\images\bayar\bni.png"></label>
									<input type="radio" id="tf-bri" name="tf" value="1"><label id="bri" for="tf-bri"><img style="margin-right: 3px !important;" height="50px" src="<?php echo base_url()?>template\home\assets\images\bayar\bri.png"></label>
									<input type="radio" id="tf-mandiri" name="tf" value="3"><label id="mandiri" for="tf-mandiri"><img style="margin-right: 3px !important;" height="50px" src="<?php echo base_url()?>template\home\assets\images\bayar\mandiri.png"></label>
								</div>
								<div class="mt-4">
									<h6 style="margin-left: 20px;">E - Wallet</h6>
									<input type="radio" id="tf-dana" name="tf" value="6"><label for="tf-dana"><img style="margin-right: 3px !important;" height="50px" src="<?php echo base_url()?>template\home\assets\images\bayar\dana.png"></label>
									<input type="radio" id="tf-gopay" name="tf" value="5"><label for="tf-gopay"><img style="margin-right: 3px !important;" height="50px" src="<?php echo base_url()?>template\home\assets\images\bayar\gopay.png"></label>
									<input type="radio" id="tf-ovo" name="tf" value="4"><label id="ovo" for="tf-ovo"><img style="margin-right: 3px !important;" height="50px" src="<?php echo base_url()?>template\home\assets\images\bayar\ovo.png"></label>
								</div>
						</div>
					</div>

					<div class="col-12 mb-3">
						<div class="card">
							<div class="card-body">
								<div class="text-white text-center position-absolute circle-primary">4</div>
								<h5 style="margin-left: 40px;">Nomor Telp (WhatsApp)</h5>
								<hr>
								<div class="form-row mt-4">
									<div class="col">
										<input type="number" id="no_hp" class="form-control" name="no_hp" placeholder="6281xxxx" required="">
									</div>
								</div>
								<div class="form-row mt-4">
									<div class="col">
										<input type="text" id="nama" class="form-control" name="nama" placeholder="Nama User" required="">
									</div>
								</div>
						</div>
					</div>
                    
             
                    <div class="col-12 mb-3">
						 <button type="submit" id="btn-submit"><b>BELI SEKARANG</b></button> 
                    </div>
                    <div id="ordermodal" class="modal fade" tabindex="-1" role="dialog">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <div id="orderdetail"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <!-- </form> -->
        </div>
    </div>
</div>