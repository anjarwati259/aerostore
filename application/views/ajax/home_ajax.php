<script type="text/javascript">
	$("body").on("click","#btn-submit",function(){
		// alert('bisa');
		var id = $('input[name=service]:checked').val();
		var id_game = $("#id_game").val();
		var paket = $("#paket"+id).text();
		var harga = $("#harga"+id).text();
		var harga1 = harga.replace(".","");
		var userid = $("#userid").val();
		var zoneid = $("#zoneid").val();
		var no_hp = $("#no_hp").val();
		var nama = $("#nama").val();
		var bayar = $('input[name=tf]:checked').val();
		var data = {id:id,
					id_game:id_game,
					harga:harga1,
					userid:userid,
					zoneid:zoneid,
					no_hp:no_hp,
					bayar:bayar,
					nama:nama
					}
		// console.log(data);
		$.ajax({
	        type: 'POST',
	        url: "<?php echo base_url('home/add_transaksi'); ?>",
	        data:data,
	        dataType : 'json',
	        success: function(hasil) {
	        	//console.log(hasil);
	        	if(hasil.status=='sukses'){
	        		//console.log(sukses.id_transaksi)
		        	location.href = '<?php echo base_url('home/invoice'); ?>'
		        	localStorage.setItem("id_transaksi", hasil.id_transaksi);
		        }else{
		        	alert("Mohon maaf sistem masih dalam perbaikan, cobalah beberapa saat lagi");
		        }
	        }
	    });
	});
</script>