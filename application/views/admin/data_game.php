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
                                <th>Proses</th>
                                <th>Keterangan</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach ($data_game as $key => $value) {?>
                            <tr class="odd gradeX">
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $value->nama_game ?></td>
                                <td><?php echo $value->proses ?></td>
                                <td style="width:20%;"><?php echo $value->keterangan ?></td>
                                <td>
                                    <?php if($value->status==1){
                                        echo "Publish";
                                    }else{
                                        echo "UnPublish";
                                    }
                                        ?>
                                </td>
                                <td>
                                    <button type="button" class="btn btn-success btn-sm btn-edit" 
                                    data-id="<?php echo $value->id_game; ?>"
                                    data-toggle="modal" data-target="#modal-edit">
                                    <i class="fa fa-edit" aria-hidden="true"></i>&nbsp;Edit</button>
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
              <h4 class="modal-title">Tambah Game</h4>
            </div>
            <div class="modal-body">
              <form id="form_input">
                <div class="card-body">
                    <div class="form-group">
                        <label>Nama Game</label>
                        <input type="text" name="nama" class="form-control" id="nama" placeholder="Mobile Legend" required>
                    </div>
                    <div class="form-group">
                        <label>Proses</label>
                        <input type="text" name="proses" class="form-control" id="proses" placeholder="Proses 1 - 2 Menit" required>
                    </div>
                    <div class="form-group">
                        <label>Keterangan</label>
                        <textarea style="min-height: 100px;" name="keterangan" class="form-control" id="keterangan"></textarea>
                    </div>
                    <div class="form-group">
                        <label>File input</label>
                        <input type="file" name="gambar" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select class="form-control select2" name="status" id="status">
                            <option value="1">Publish</option>
                            <option value="0">UnPublish</option>
                        </select>
                    </div>
                </div>
              </form>
            </div>
            <div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
              <button type="submit" id="input-game" class="btn btn-success">Simpan</button>
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
                        <input type="text" name="nama-edit" class="form-control" id="nama-edit" placeholder="Mobile Legend" required>
                    </div>
                    <div class="form-group">
                        <label>Proses</label>
                        <input type="text" name="proses-edit" class="form-control" id="proses-edit" placeholder="Proses 1 - 2 Menit" required>
                    </div>
                    <div class="form-group">
                        <label>Keterangan</label>
                        <textarea style="min-height: 100px;" class="form-control" id="keterangan-edit"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <select class="form-control select2" id="status-edit">
                            <option value="1">Publish</option>
                            <option value="0">UnPublish</option>
                        </select>
                    </div>
                    <input type="hidden" name="id" class="form-control" id="id">
                </div>
              </form>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
              <button type="submit" id="edit-game" class="btn btn-primary">Simpan</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>