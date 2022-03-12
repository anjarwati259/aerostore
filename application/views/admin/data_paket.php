<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-input">
                Tambah
              </button>
          </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Game</th>
                                <th>Nama Paket</th>
                                <th>harga</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach ($data_paket as $key => $value) {?>
                            <tr class="odd gradeX">
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $value->nama_game ?> - <?php echo $value->proses ?></td>
                                <td><?php echo $value->nama_paket ?></td>
                                <td><?php echo $value->harga ?></td>
                                <td>
                                    <button type="button" class="btn btn-success btn-sm btn-paket" 
                                    data-id="<?php echo $value->id_paket; ?>"
                                    data-toggle="modal" data-target="#modal-edit">
                                    <i class="fa fa-edit" aria-hidden="true"></i>&nbsp;Edit</button>
                                    <!-- hapus -->
                                    <a href="<?php echo base_url('admin/del_paket/'.$value->id_paket) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data ini? Dengan menghapus data ini?')"><i class="fa fa-trash-o" aria-hidden="true"></i>&nbsp;Hapus</a>
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

<!-- modal tambah -->
<div class="modal fade" id="modal-input">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Tambah Paket Game</h4>
            </div>
            <div class="modal-body">
              <form id="form_input">
                <div class="card-body">
                    <div class="form-group">
                        <label>Nama Game</label>
                        <select class="form-control select2" name="id_game" id="id_game">
                            <?php foreach ($data_game as $key => $value) { ?>
                                <option value="<?php echo $value->id_game ?>"><?php echo $value->nama_game ?> - <?php echo $value->proses ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Nama Paket</label>
                        <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Paket" required>
                    </div>
                    <div class="form-group">
                        <label>Harga</label>
                        <input type="number" name="harga" class="form-control" id="harga" placeholder="Harga" required>
                    </div>
                </div>
              </form>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
              <button type="submit" id="input-paket" class="btn btn-success">Simpan</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!-- modal edit -->
<div class="modal fade" id="modal-edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Game</h4>
            </div>
            <div class="modal-body">
              <form id="form_pegawai">
                <div class="card-body">
                    <div class="form-group">
                        <label>Nama Game</label>
                        <select class="form-control select2" name="id_game-edit" id="id_game-edit">
                            <?php foreach ($data_game as $key => $value) { ?>
                                <option value="<?php echo $value->id_game ?>"><?php echo $value->nama_game ?> - <?php echo $value->proses ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Nama Paket</label>
                        <input type="text" name="nama-edit" class="form-control" id="nama-edit" placeholder="Nama Paket" required>
                    </div>
                    <div class="form-group">
                        <label>Harga</label>
                        <input type="number" name="harga-edit" class="form-control" id="harga-edit" placeholder="Proses 1 - 2 Menit" required>
                    </div>
                    <input type="hidden" name="id" class="form-control" id="id">
                </div>
              </form>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
              <button type="submit" id="edit-paket" class="btn btn-primary">Simpan</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>