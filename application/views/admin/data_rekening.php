<div class="row">
    <div class="col-md-12">
        <!-- Advanced Tables -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <div class="alert alert-warning">
                    <strong>Warning!</strong> Best check yo self, you're not looking too good.
                </div>
          </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Bank</th>
                                <th>No Rekening</th>
                                <th>Atas Nama</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach ($rekening as $key => $value) {?>
                            <tr class="odd gradeX">
                                <td><?php echo $no++; ?></td>
                                <td><?php echo $value->nama ?></td>
                                <td><?php echo $value->no_rekening ?></td>
                                <td><?php echo $value->atas_nama ?></td>
                                <td>
                                    <button type="button" class="btn btn-success btn-sm btn-rek" 
                                    data-id="<?php echo $value->id_rekening; ?>"
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

<!-- modal edit -->
<div class="modal fade" id="modal-edit">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Edit Rekening</h4>
            </div>
            <div class="modal-body">
              <form id="form_pegawai">
                <div class="card-body">
                    <div class="form-group">
                        <label>Nama Bank</label>
                        <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Paket" required>
                    </div>
                    <div class="form-group">
                        <label>No Rekening</label>
                        <input type="number" name="no_rek" class="form-control" id="no_rek" placeholder="Proses 1 - 2 Menit" required>
                    </div>
                    <div class="form-group">
                        <label>Atas Nama</label>
                        <input type="text" name="atas_nama" class="form-control" id="atas_nama" placeholder="Proses 1 - 2 Menit" required>
                    </div>
                    <input type="hidden" name="id" class="form-control" id="id">
                </div>
              </form>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
              <button type="submit" id="edit-rekening" class="btn btn-primary">Simpan</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>