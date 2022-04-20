<?php if($this->session->flashdata('sukses')) { ?>
  <script type="text/javascript">
    var pesan = '<?php echo $this->session->flashdata('sukses') ?>'
    toastr.success(pesan);
  </script>
<?php }else if($this->session->flashdata('error')){ ?>
  <script type="text/javascript">
    var pesan = '<?php echo $this->session->flashdata('error') ?>'
    toastr.error(pesan);
  </script>
<?php }; ?>

<script type="text/javascript">
	if(localStorage.getItem("sukses"))
    {
        toastr.success("Data Berhasil Ditambah");
        localStorage.clear();
    }else if(localStorage.getItem("edit")){
    	toastr.success("Data Berhasil Diedit");
        localStorage.clear();
    }

    // ==================================== Game ============================= //
	//input game
	$("body").on("click","#input-game",function(){
		//var upload = new FormData(document.getElementById("upload"));
		$.ajax({
             url:'<?php echo base_url('admin/add_game');?>',
             type:"post",
             data:new FormData(document.getElementById("form_input")),
             processData:false,
             contentType:false,
             dataType : 'json',
             cache:false,
             async:false,
             success: function(data){
             	//console.log(data);
              if (data==='sukses') {
				    localStorage.setItem("sukses",data)
				    window.location.reload(); 
				}else if(data==='error'){
					$('#modal-input').modal('hide');
					toastr.error("Data Ada yg belum diisi, Silahkan lengkapi!!!");
				} 
           }
         });
	});

	// set data
	$(document).on( "click", '.btn-edit',function(e) {
		var id = $(this).data('id');
		var data = {id:id};
		$.ajax({
	        type: 'POST',
	        url: "<?php echo base_url('admin/get_game'); ?>",
	        data:data,
	        dataType : 'json',
	        success: function(data) {
	        	$("#id").val(data.id_game);
	        	$("#nama-edit").val(data.nama_game);
				$("#proses-edit").val(data.proses);
				$("#keterangan-edit").text(data.keterangan);
				$('#status-edit').val(data.status).change();
	        }
	    });
	});

	//edit game
	$("body").on("click","#edit-game",function(){
		var id = $("#id").val();
		var nama = $("#nama-edit").val();
		var proses = $("#proses-edit").val();
		var keterangan = $("#keterangan-edit").val();
		var status = $("#status-edit").val();

		var data = {nama:nama,
					id:id,
					proses:proses,
					keterangan:keterangan,
					status:status,
					}

		console.log(data);		
		$.ajax({
	        type: 'POST',
	        url: "<?php echo base_url('admin/edit_game'); ?>",
	        data:data,
	        dataType : 'json',
	        success: function(data) {
	        	if (data=='sukses') {
				    localStorage.setItem("edit",data)
				    window.location.reload(); 
				}else if(data=='error'){
					$('#modal-input').modal('hide');
					toastr.error("Data Ada yg belum diisi, Silahkan lengkapi!!!");
				}
	        }
	    });
	});

	// ==================================== Paket ============================= //
	// input paket game
	$("body").on("click","#input-paket",function(){
		var id_game = $("#id_game").val();
		var nama = $("#nama").val();
		var harga = $("#harga").val();

		var data = {id_game:id_game,
					nama:nama,
					harga:harga,
					}

		//console.log(data);		
		$.ajax({
	        type: 'POST',
	        url: "<?php echo base_url('admin/add_paket'); ?>",
	        data:data,
	        dataType : 'json',
	        success: function(data) {
	        	if (data=='sukses') {
				    localStorage.setItem("sukses",data)
				    window.location.reload(); 
				}else if(data=='error'){
					$('#modal-input').modal('hide');
					toastr.error("Data Ada yg belum diisi, Silahkan lengkapi!!!");
				}
	        }
	    });
	});

	// set data
	$(document).on( "click", '.btn-paket',function(e) {
		var id = $(this).data('id');
		var data = {id:id};
		console.log(data);
		$.ajax({
	        type: 'POST',
	        url: "<?php echo base_url('admin/get_paket'); ?>",
	        data:data,
	        dataType : 'json',
	        success: function(data) {
	        	console.log(data);
	        	$("#id").val(data.id_paket);
	        	$("#nama-edit").val(data.nama_paket);
				$("#harga-edit").val(data.harga);
				$('#id_game-edit').val(data.id_game).change();
	        }
	    });
	});

	$("body").on("click","#edit-paket",function(){
		var id = $("#id").val();
		var nama = $("#nama-edit").val();
		var id_game = $("#id_game-edit").val();
		var harga = $("#harga-edit").val();

		var data = {nama:nama,
					id:id,
					id_game:id_game,
					harga:harga,
					}

		console.log(data);		
		$.ajax({
	        type: 'POST',
	        url: "<?php echo base_url('admin/edit_paket'); ?>",
	        data:data,
	        dataType : 'json',
	        success: function(data) {
	        	if (data=='sukses') {
				    localStorage.setItem("edit",data)
				    window.location.reload(); 
				}else if(data=='error'){
					$('#modal-input').modal('hide');
					toastr.error("Data Ada yg belum diisi, Silahkan lengkapi!!!");
				}
	        }
	    });
	});

	// ==================================== Paket ============================= //
	// set data
	$(document).on( "click", '.btn-rek',function(e) {
		var id = $(this).data('id');
		var data = {id:id};
		console.log(data);
		$.ajax({
	        type: 'POST',
	        url: "<?php echo base_url('admin/get_rekening'); ?>",
	        data:data,
	        dataType : 'json',
	        success: function(data) {
	        	console.log(data);
	        	$("#id").val(data.id_rekening);
	        	$("#nama").val(data.nama);
				$("#no_rek").val(data.no_rekening);
				$('#atas_nama').val(data.atas_nama);
	        }
	    });
	});
	// ecit rekening
	$("body").on("click","#edit-rekening",function(){
		var id = $("#id").val();
		var nama = $("#nama").val();
		var atas_nama = $("#atas_nama").val();
		var no_rek = $("#no_rek").val();

		var data = {nama:nama,
					id:id,
					atas_nama:atas_nama,
					no_rek:no_rek,
					}

		console.log(data);		
		$.ajax({
	        type: 'POST',
	        url: "<?php echo base_url('admin/edit_rekening'); ?>",
	        data:data,
	        dataType : 'json',
	        success: function(data) {
	        	if (data=='sukses') {
				    localStorage.setItem("edit",data)
				    window.location.reload(); 
				}else if(data=='error'){
					$('#modal-input').modal('hide');
					toastr.error("Data Ada yg belum diisi, Silahkan lengkapi!!!");
				}
	        }
	    });
	});
	// ==================================== Transaksi ============================= //
	$(document).on( "click", '.btn-konfirm',function(e) {
		var id = $(this).data('id');
		var data = {id:id};
		//console.log(data);
		$.ajax({
	        type: 'POST',
	        url: "<?php echo base_url('admin/get_pesan'); ?>",
	        data:data,
	        dataType : 'json',
	        success: function(data) {
	        	//console.log(data);
	        	$('#id').val(data.id_transaksi);
	        	$("#id_transaksi").text(data.id_transaksi);
	        	$("#total_bayar").val(data.total_bayar);
				$("#tgl_transaksi").val(data.tgl_transaksi);
				$('#metode_bayar').val(data.nama);
	        }
	    });
	});

	$("body").on("click","#konfirmasi",function(){
		var id = $("#id").val();
		var total_bayar = $("#total_bayar").val();
		var tgl_bayar = $("#tgl_bayar").val();

		var data = {total_bayar:total_bayar,
					id:id,
					tgl_bayar:tgl_bayar,
					}

		console.log(data);		
		$.ajax({
	        type: 'POST',
	        url: "<?php echo base_url('admin/konfirmasi'); ?>",
	        data:data,
	        dataType : 'json',
	        success: function(data) {
	        	if (data=='sukses') {
				    localStorage.setItem("edit",data)
				    window.location.reload(); 
				}else if(data=='error'){
					$('#modal-konfirm').modal('hide');
					toastr.error("Data Ada yg belum diisi, Silahkan lengkapi!!!");
				}
	        }
	    });
	});

	$(document).on( "click", '#btn_follow',function(e) {
		var id = $(this).data('id');
		var data = {id:id};
		console.log(data);
		// $.ajax({
	 //        type: 'POST',
	 //        url: "<?php echo base_url('admin/get_pesan'); ?>",
	 //        data:data,
	 //        dataType : 'json',
	 //        success: function(data) {
	 //        	//console.log(data);
	 //        	$('#id').val(data.id_transaksi);
	 //        	$("#id_transaksi").text(data.id_transaksi);
	 //        	$("#total_bayar").val(data.total_bayar);
		// 		$("#tgl_transaksi").val(data.tgl_transaksi);
		// 		$('#metode_bayar').val(data.nama);
	 //        }
	 //    });
	});

</script>