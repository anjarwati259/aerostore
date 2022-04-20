<div class="container">
		<div class="row">        	                        
			<div class="col-12 mb-3">
				<div class="card">
					<div class="card-body">
						<div class="card-header">
							<div class="row">
								<div class="col-8 mb-3" style="line-height: 12px; font-weight: 600;">
									<label>Nama: <span id="nama"></span></label><br>
									<label>No. Telfon: <span id="no_telp"></span></label><br>
									<label>Kode Pesanan: <span id="kode"></span></label><br>
									<label>Invoice: <span id="tgl"></span></label><br>
									<label style="color: red; font-weight: bold;">Pembayaran Menggunakan Transfer Bank Maksimal 3 Jam Setelah Transaksi</label>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-10" style="text-align: right;">
								<a id='download' href="#" class="btn btn-sm btn-success" target="_blank">Download Invoice</a>
							</div>
							<div class="col-2" style="text-align: left;">
								<label style="text-align: right;">Status: <span class="badge badge-warning right" style="text-align: right;">Belum Bayar</span></label>
							</div>
						</div>
						<div class="tabel">
							<table class="table">
							  <thead>
							    <tr class="table-warning">
							      <th scope="col">#</th>
							      <th scope="col">Nama Layanan</th>
							      <th scope="col">Data</th>
							      <th></th>
							      <th></th>
							    </tr>
							  </thead>
							  <tbody>
							    <tr>
							      <th scope="row">1</th>
							      <td><span id="paket"></span></td>
							      <td colspan="3"><span id="userid"></span>(<span id="zoneid"></span>)</td>
							    </tr>
							    <tr>
							      <td colspan="3" rowspan="3" style="max-width: 20px;">
							      	<h5>Silahkan Transfer Ke Rekening Beikut</h5>
							      	<h5>Transfer Bank <span id="nama_bank"></span></h5>
							      	<p>No Rekening : <span id="no_rekening"></span> Atas Nama : <span id="atas_nama"></span> Mohon Transfer sesuai dengan nominal total yang harus dibayar (yang berwarna hijau), Termasuk kode unik di akhir. Agar pesanan anda bisa di proses otomatis oleh sistem kami</p>
							      </td>
							      <td>Harga</td>
							      <td><span id="harga"></span></td>
							    </tr>
							    <tr>
							    	<td>Biaya Admin</td>
							    	<td><span id="biaya_admin"></span></td>
							    </tr>
							    <tr>
							    	<td style="font-weight: bold;">Total Bayar</td>
							    	<td style="color: green;"><span id="total_bayar"></span></td>
							    </tr>
							  </tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		$(document).ready(function(){
		var id = localStorage.getItem("id_transaksi");
		var data = "&id="+id;
		//console.log(id);
		$.ajax({
	        type: 'POST',
	        url: "<?php echo base_url('home/detail_invoice'); ?>",
	        data:data,
	        dataType : 'json',
	        success: function(hasil) {
	        	console.log(hasil);
	        	$("#nama").html(hasil.nama_user);
	        	$("#no_telp").html(hasil.no_telp);
	        	$("#kode").html(hasil.id_transaksi);
	        	$("#tgl").html(hasil.tgl_transaksi);

	        	$("#paket").html(hasil.nama_paket);
	        	$("#userid").html(hasil.userid);
	        	$("#zoneid").html(hasil.zoneid);
	        	$("#harga").html(hasil.harga);
	        	$("#biaya_admin").html(hasil.biaya_admin);
	        	$("#total_bayar").html(hasil.total_bayar);

	        	$("#nama_bank").html(hasil.nama);
	        	$("#no_rekening").html(hasil.no_rekening);
	        	$("#atas_nama").html(hasil.atas_nama);
	        	var download = document.getElementById('download');
    			download.href = "<?php echo base_url('home/print/') ?>"+hasil.id_transaksi;
	        }
	    });
		
	});
	</script>