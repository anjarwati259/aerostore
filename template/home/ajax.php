<script type="text/javascript">
	$("body").on("click","#btn-submit",function(){
		id = $('input[name=service]:checked').val();
		var paket = $("#paket"+id).text();
		var harga = $("#harga"+id).text();
		var harga1 = harga.replace(".","");
		var userid = $("#userid").val();
		var zoneid = $("#zoneid").val();
		var no_hp = $("#no_hp").val();
		var nama = $("#nama").val();
		var bayar = $('input[name=tf]:checked').val();
		var data = {paket:paket,
					harga:harga1,
					userid:userid,
					zoneid:zoneid,
					no_hp:no_hp,
					bayar:bayar,
					nama:nama
					}
		$.ajax({
	        type: 'POST',
	        url: "bayar.php",
	        data:data,
	        dataType : 'json',
	        success: function(hasil) {
	        	//console.log(hasil.status);
	        	if(hasil.status=='sukses'){
		        	location.href = 'invoice.php'
		        	localStorage.setItem("id_transaksi", hasil.id_transaksi);
		        }else{
		        	alert("Mohon maaf sistem masih dalam perbaikan, cobalah beberapa saat lagi");
		        }
	        }
	    });
	});

</script>