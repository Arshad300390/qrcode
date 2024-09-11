<?php
if(isset($_POST) && !empty($_POST)) {
	include('qrlib.php'); 
	$codesDir = "codes/";	
	$codeFile = date('d-m-Y-h-i-s').'.png';
	$formData = $_POST['formData'];
	QRcode::png($formData, $codesDir.$codeFile, $_POST['ecc'], $_POST['size']); 
	echo '<img class="img-thumbnail" src="'.$codesDir.$codeFile.'" />';
} else {
	header('location:./');
}
?>