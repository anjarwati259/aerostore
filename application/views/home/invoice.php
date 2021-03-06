<div class="container">
		<div class="row">        	                        
			<div class="col-12 mb-3">
				<div class="card">
					<div class="card-body">
						<div class="card-header">
							<div class="row">
								<div class="col-8 mb-3" style="line-height: 12px; font-weight: 600;">
									<label>Nama: <span id="nama"><?php echo $data_pesan->nama_user ?></span></label><br>
									<label>No. Telfon: <span id="no_telp"><?php echo $data_pesan->no_telp ?></span></label><br>
									<label>Kode Pesanan: <span id="kode"><?php echo $data_pesan->id_transaksi ?></span></label><br>
									<label>Invoice: <span id="tgl"><?php echo $data_pesan->tgl_transaksi ?></span></label><br>
									<label style="color: red; font-weight: bold;">Pembayaran Menggunakan Transfer Bank Maksimal 3 Jam Setelah Transaksi</label>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-10" style="text-align: right;">
								<a href="<?php echo base_url('home/print/'.$data_pesan->id_transaksi) ?>" class="btn btn-sm btn-success" target="_blank">Download Invoice</a>
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
							      <td><span id="paket"><?php echo $data_pesan->nama_paket ?></span></td>
							      <td colspan="3"><span id="userid"><?php echo $data_pesan->userid ?></span>(<span id="zoneid"><?php echo $data_pesan->zoneid ?></span>)</td>
							    </tr>
							    <tr>
							      <td colspan="3" rowspan="3" style="max-width: 20px;">
							      	<h5>Silahkan Lakukan Pembayaran Sesuai Dengan Instruksi</h5>
							      	<h5>Nama Bank :<span id="nama_bank"><?php echo $data_pesan->bank ?></span></h5>
							      	<p>Virtual Account : <span id="no_rekening"><?php echo $data_pesan->virtual_account ?></span>, untuk instruksi pembayaran bisa download link berikut: <a href="<?php echo $data_pesan->link_pdf ?>">Download Instruksi</a></p>
							      </td>
							      <td>Harga</td>
							      <td><span id="harga"><?php echo $data_pesan->harga ?></span></td>
							    </tr>
							    <tr>
							    	<td>Biaya Admin</td>
							    	<td><span id="biaya_admin"><?php echo $data_pesan->biaya_admin ?></span></td>
							    </tr>
							    <tr>
							    	<td style="font-weight: bold;">Total Bayar</td>
							    	<td style="color: green;"><span id="total_bayar"><?php echo $data_pesan->total_bayar ?></span></td>
							    </tr>
							  </tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>