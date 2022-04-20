<script type="text/javascript">
	// $("body").on("click","#btn-submit",function(){
	// 	// alert('bisa');
	// 	var id = $('input[name=service]:checked').val();
	// 	var id_game = $("#id_game").val();
	// 	var paket = $("#paket"+id).text();
	// 	var harga = $("#harga"+id).text();
	// 	var harga1 = harga.replace(".","");
	// 	var userid = $("#userid").val();
	// 	var zoneid = $("#zoneid").val();
	// 	var no_hp = $("#no_hp").val();
	// 	var nama = $("#nama").val();
	// 	var bayar = $('input[name=tf]:checked').val();
	// 	var data = {id:id,
	// 				id_game:id_game,
	// 				harga:harga1,
	// 				userid:userid,
	// 				zoneid:zoneid,
	// 				no_hp:no_hp,
	// 				bayar:bayar,
	// 				nama:nama
	// 				}
	// 	// console.log(data);
	// 	$.ajax({
	//         type: 'POST',
	//         url: "<?php echo base_url('home/add_transaksi'); ?>",
	//         data:data,
	//         dataType : 'json',
	//         success: function(hasil) {
	//         	//console.log(hasil);
	//         	if(hasil.status=='sukses'){
	//         		//console.log(sukses.id_transaksi)
	// 	        	location.href = '<?php echo base_url('home/invoice'); ?>'
	// 	        	localStorage.setItem("id_transaksi", hasil.id_transaksi);
	// 	        }else{
	// 	        	alert("Mohon maaf sistem masih dalam perbaikan, cobalah beberapa saat lagi");
	// 	        }
	//         }
	//     });
	// });
	$("body").on("click","#btn-submit",function(){
		var metode = $('input[name=tf]:checked').val();
		var id = $('input[name=service]:checked').val();
		// var game = $('input[name=service]:checked').text();
		var id_transaksi = $("#id_transaksi").val();
		var id_game = $("#id_game").val();
		var paket = $("#paket"+id).text();
		var harga = $("#harga"+id).text();
		var harga1 = harga.replace(".","");
		var userid = $("#userid").val();
		var zoneid = $("#zoneid").val();
		var no_hp = $("#no_hp").val();
		var nama = $("#nama").val();
		var total = parseInt(harga1)+4000;

		if(metode=='va'){
			var data_va = {id_transaksi:id_transaksi,
						paket:paket,
						harga:harga1,
						total:total,
						no_hp:no_hp,
						nama:nama,
						id_paket:id,
						userid:userid,
						zoneid:zoneid,
						id_game:id_game
				}
			// console.log(data);
			$.ajax({
			  type: 'POST',
		      url: '<?=site_url()?>/snap/token',
		      data:data_va,
		      cache: false,

		      success: function(data) {
		        //location = data;

		        console.log('token = '+data);
		        
		        var resultType = document.getElementById('result-type');
		        var resultData = document.getElementById('result-data');

		        function changeResult(type,data){
		          $("#result-type").val(type);
		          $("#result-data").val(JSON.stringify(data));
		          //resultType.innerHTML = type;
		          //resultData.innerHTML = JSON.stringify(data);
		        }

		        snap.pay(data, {
		          
		          onSuccess: function(result){
		            changeResult('success', result);
		            console.log(result.status_message);
		            console.log(result);
		            $("#payment-form").submit();
		          },
		          onPending: function(result){
		            changeResult('pending', result);
		            console.log(result.status_message);
		            $("#payment-form").submit();
		          },
		          onError: function(result){
		            changeResult('error', result);
		            console.log(result.status_message);
		            $("#payment-form").submit();
		          }
		        });
		      }
		    });
		}else{
			var data = {id:id,
						id_game:id_game,
						harga:harga1,
						userid:userid,
						zoneid:zoneid,
						no_hp:no_hp,
						bayar:metode,
						nama:nama
					}
			$.ajax({
		        type: 'POST',
		        url: "<?php echo base_url('home/add_transaksi'); ?>",
		        data:data,
		        dataType : 'json',
		        success: function(hasil) {
		        	//console.log(hasil);
		        	if(hasil.status=='sukses'){
		        		//console.log(sukses.id_transaksi)
			        	location.href = '<?php echo base_url('home/invoice2'); ?>'
			        	localStorage.setItem("id_transaksi", hasil.id_transaksi);
			        }else{
			        	alert("Mohon maaf sistem masih dalam perbaikan, cobalah beberapa saat lagi");
			        }
		        }
		    });
		}
	});
</script>