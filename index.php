<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>qrcode</title>
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>


</head>
<body>
<div class="container">		
	<div class="row">
	<h2>Example: Build QR Code Generator with PHP and Ajax</h2>
		<div class="col-md-3">
			<form class="form-horizontal" method="post" id="codeForm" onsubmit="return false">
				<div class="form-group">
					<label class="control-label">Code Content : </label>
					<input class="form-control col-xs-1" id="content" type="text" required="required">
				</div>
				<div class="form-group">
					<label class="control-label">Code Level (ECC) : </label>
					<select class="form-control col-xs-10" id="ecc">
						<option value="H">H - best</option>
						<option value="M">M</option>
						<option value="Q">Q</option>
						<option value="L">L - smallest</option>       		            
					</select>
				</div>
				<div class="form-group">
					<label class="control-label">Size : </label>
					<input type="number" min="1" max="10" step="1" class="form-control col-xs-10" id="size" value="4">
				</div>
				<div class="form-group">
					<label class="control-label"></label>
					<input type="submit" name="submit" id="submit" class="btn btn-success" value="Generate QR Code">
				</div>
			</form>
		</div>
		<div class="col-md-6">
			<div class="showQRCode"></div>
		</div>
	</div>
</div>
</body>
<?php
?>
<script src="ajax_generate_code.js"></script>
<!-- <script>
$(document).ready(function() {
	$("#codeForm").submit(function(){
		$.ajax({
			url:'generate_code.php',
			type:'POST',
			data: {formData:$("#content").val(), ecc:$("#ecc").val(), size:$("#size").val()},
			success: function(response) {
				$(".showQRCode").html(response);  
			},
		 });
	});
});
</script> -->
</html>