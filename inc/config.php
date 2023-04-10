<!-- <?php
//variabel koneksi
$con = mysqli_connect("localhost","root","","db_b4k");

if(!$con){
	echo "Koneksi Database Gagal...!!!";
}
?> -->
<?php 

$con = new mysqli("localhost","root","","db_b4k");
if(!$con){
	echo "Koneksi Database Gagal...!!!";
}
 ?>