<?php 
include '../inc/config.php';
$id = $_GET['id'];
mysqli_query($con,"DELETE FROM tb_register WHERE id_register='$id' ");
// echo " <script>
//  	alert('Successful !! .. Data Deleted !!');
//  	window.location='?page=list';
//  </script>";
 			echo "
		<script type='text/javascript'>
		setTimeout(function () { 
		swal({
		title: 'Successful !!',
		text:  '.. Data Deleted !!',
		type: 'success',
		timer: 3000,
		showConfirmButton: true
		});     
		},10);  
		window.setTimeout(function(){ 
		window.location.replace('?page=list');
		} ,3000);   
		</script>";





 ?>
