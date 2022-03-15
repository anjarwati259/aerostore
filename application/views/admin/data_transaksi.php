<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-input">
                Tambah
              </button> -->
          </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Tanggal</th>
                                <th>Layanan</th>
                                <th>UserID</th>
                                <th>Total Bayar</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($pesan as $key => $value) {?>
                            <tr class="odd gradeX">
                                <td><?php echo $value->id_transaksi ?></td>
                                <td><?php echo $value->tgl_transaksi ?></td>
                                <td><?php echo $value->nama_paket ?><br>(<?php echo $value->nama_game ?>)</td>
                                <td><?php echo $value->userid ?> <br>(<?php echo $value->zoneid ?>)</td>
                                <td>Rp. <?php echo number_format($value->total_bayar,'0',',','.') ?><br>(<?php echo $value->nama ?>)</td>
                                <td><?php if($value->status==0){ ?>
                                    <span style="color: orange; font-weight: bold;">Belum Bayar</span><br>
                                    <button class="btn btn-sm btn-success">Follow Up</button>
                                <?php }else if($value->status==1){ ?>
                                    <span style="color: green; font-weight: bold;">Sudah Bayar</span><br>
                                    <button class="btn btn-sm btn-success">Follow Up</button>
                                <?php }else{ ?>
                                    <span style="color: red; font-weight: bold;">Dibatalkan</span><br>
                                    <button class="btn btn-sm btn-success">Follow Up</button>
                                <?php } ?>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-success btn-sm btn-konfirm" 
                                    data-id="<?php echo $value->id_transaksi; ?>"
                                    data-toggle="modal" data-target="#modal-konfirm">
                                    <i class="fa fa-check-square-o" aria-hidden="true"></i></button>
                                    <!-- hapus -->
                                    <a href="<?php echo base_url('admin/batal/'.$value->id_transaksi) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin membatalkan transaksi ini?')"><i class="fa fa-ban" aria-hidden="true"></i></a>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
                
            </div>
        </div>
        <!--End Advanced Tables -->
    </div>
</div>

<?php date_default_timezone_set("Asia/Jakarta"); ?>
<div class="modal fade" id="modal-konfirm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title" id="myModalLabel">ID: #<span id="id_transaksi"></span></h4>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Total Bayar</label>
                            <input type="text" name="total_bayar" class="form-control" id="total_bayar" placeholder="Total Bayar" required>
                        </div>
                        <div class="form-group">
                            <label>Metode Bayar</label>
                            <input type="text" name="nama" class="form-control" id="metode_bayar" placeholder="Nama Paket" readonly="">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Tanggal Transaksi</label>
                            <input type="text" name="tgl_transaksi" class="form-control" id="tgl_transaksi" placeholder="Tanggal Transaksi" readonly="">
                        </div>
                        <div class="form-group">
                            <label>Tanggal Bayar</label>
                            <input type="text" name="tgl_bayar" value="<?php echo date('Y-m-d h:i:sa') ?>" class="form-control" id="tgl_bayar" placeholder="Tanggal Bayar" required>
                        </div>
                        <input type="hidden" name="id" id="id">
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-success" id="konfirmasi">Konfirmasi</button>
            </div>
        </div>
    </div>
</div>