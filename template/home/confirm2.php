<!DOCTYPE html>
<html lang="en">
<head>
</head>

<body>

	<?php
	
		$service = @$_POST['service'];
	
			echo $service;
		
			if($service == "423"){
				//header("Location: https://invoice-staging.xendit.co/od/MLFAST86DIAMOND");
				// include('order1.php');
			}
			
			if($service == "424"){
				header("Location: https://invoice-staging.xendit.co/od/MLFAST172DIAMOND");
			}
			
			if($service == "425"){
				header("Location: https://invoice-staging.xendit.co/od/MLFAST257DIAMOND");
			}
			
			if($service == "426"){
				header("Location: https://invoice-staging.xendit.co/od/MLFAST344DIAMOND");
			}
			
			if($service == "427"){
				header("Location: https://invoice-staging.xendit.co/od/MLFAST429DIAMOND");
			}
			
			if($service == "428"){
				header("Location: https://invoice-staging.xendit.co/od/MLFAST514DIAMOND");
			}
			
			if($service == "431"){
				header("Location: https://invoice-staging.xendit.co/od/MLFAST706DIAMOND");
			}
			
			if($service == "432"){
				header("Location: https://invoice-staging.xendit.co/od/MLFAST878DIAMOND");
			}
			
			if($service == "433"){
				header("Location: https://invoice-staging.xendit.co/od/MLFAST963DIAMOND");
			}
			
			if($service == "434"){
				header("Location: https://invoice-staging.xendit.co/od/MLFAST1412DIAMOND");
			}
			
			if($service == "435"){
				header("Location: https://invoice-staging.xendit.co/od/MLFAST2195DIAMOND");
			}
			
			if($service == "436"){
				header("Location: https://invoice-staging.xendit.co/od/MLFAST3688DIAMOND");
			}
			
			if($service == "437"){
				header("Location: https://invoice-staging.xendit.co/od/MLFAST4394DIAMOND");
			}
			
			if($service == "438"){
				header("Location: https://invoice-staging.xendit.co/od/MLFAST5532DIAMOND");
			}
			
			if($service == "439"){
				header("Location: https://invoice-staging.xendit.co/od/MLFAST6235DIAMOND");
			}
			
			if($service == "440"){
				header("Location: https://invoice-staging.xendit.co/od/MLFAST7727DIAMOND");
			}
			
			if($service == "441"){
				header("Location: https://invoice-staging.xendit.co/od/MLFAST9288DIAMOND");
			}
			
			if($service == ""){
				header("Location: order1.php");
			}
		
	?>

	
	<div class="container-contact100" style="background-image: url('images/bg-01.jpg');">
	
		
	</div>
		
  


<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>

<script type="text/javascript">
     
     function printDiv(elementId) {
    var a = document.getElementById('print-area-2').value;
    var b = document.getElementById(elementId).innerHTML;
    window.frames["print_frame"].document.title = document.title;
    window.frames["print_frame"].document.body.innerHTML = '<style>' + a + '</style>' + b;
    window.frames["print_frame"].window.focus();
    window.frames["print_frame"].window.print();
}
</script>

</body>
</html>
