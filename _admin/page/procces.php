<?php 
include '../inc/config.php'; // Panggil File Konek ke databas..

if (isset($_POST['register'])) { // jika Tombol register di klik oleh uesr
	$nama  = $_POST['nama'];
	$tempat = $_POST['tempat'];
	$tgl = $_POST['tgl'];
	$ortu = $_POST['ortu'];
	$email = $_POST['email'];
	$hp = $_POST['hp'];
	$school = $_POST['school'];
	$alamat = $_POST['alamat'];
	$info = $_POST['info'];
	$program = $_POST['program'];
	$tempat = $_POST['tempat'];
	$note = $_POST['note'];
	$sessi = $_POST['sessi'];
	$jml = $_POST['jml'];
	$paid = $_POST['paid'];
	$jk = $_POST['jk'];
	$tgl_regis = date('Y-m-d');

	// File Foto
	$sumber = @$_FILES['foto']['tmp_name'];
	$target = '../assets/img/';
	$nama_gambar = @$_FILES['foto']['name'];
	$pindah = move_uploaded_file($sumber, $target.$nama_gambar);

	if ($pindah) {

	mysqli_query($con," INSERT INTO tb_register (id_register,name,tempat,tgl,gender,ortu,asal_skl,email,hp,alamat,info_b4k,program,note,session,jml_byr,paid,tgl_dftr,status,foto) VALUES(NULL,'$nama','$tempat','$tgl','$jk','$ortu','$school','$email','$hp','$alamat','$info','$program','$note','$sessi','$jml','$paid','$tgl_regis','Active','$nama_gambar') ") or die (mysqli_error($con));

	// echo "<script>
	// alert('successfully .. You successfully Register!!');
	// window.location='?page=last_regis';
	// </script>";

			echo "
		<script type='text/javascript'>
		setTimeout(function () { 
		swal({
		title: 'successfully  !!',
		text:  'You successfully Register!!!!',
		type: 'success',
		timer: 3000,
		showConfirmButton: true
		});     
		},10);  
		window.setTimeout(function(){ 
		window.location.replace('?page=last_regis');
		} ,3000);   
		</script>";





	
}


}elseif (isset($_POST['edit'])) { // jika Tombol register di klik oleh uesr
	$id  = $_POST['id'];
	$nama  = $_POST['nama'];
	$tempat = $_POST['tempat'];
	$tgl = $_POST['tgl'];
	$ortu = $_POST['ortu'];
	$email = $_POST['email'];
	$hp = $_POST['hp'];
	$school = $_POST['school'];
	$alamat = $_POST['alamat'];
	$info = $_POST['info'];
	$program = $_POST['program'];
	$tempat = $_POST['tempat'];
	$note = $_POST['note'];
	$sessi = $_POST['sessi'];
	$jml = $_POST['jml'];
	$jk = $_POST['jk'];
	$paid = $_POST['paid'];
	$tgl_regis = date('Y-m-d');

	// File Foto
		$gambar = @$_FILES['foto']['name'];
		if (!empty($gambar)) {
		move_uploaded_file($_FILES['foto']['tmp_name'],"../assets/img/$gambar");
		$ganti = mysqli_query($con,"UPDATE tb_register SET foto='$gambar' WHERE id_register='$id' ");
		}

	mysqli_query($con," UPDATE tb_register SET 
		name='$nama',
		tempat='$tempat',
		tgl='$tgl',
		gender='$jk',
		ortu='$ortu',
		asal_skl='$school',
		email='$email',
		hp='$hp',
		alamat='$alamat',
		info_b4k='$info',
		program='$program',
		note='$note',
		session='$sessi',
		jml_byr='$jml',paid='$paid',tgl_dftr='$tgl_regis' WHERE id_register='$id' ") or die (mysqli_error($con));

	// echo "<script>
	// alert('Success !! Data Has Changed !!');
	// window.location='?page=list';
	// </script>";

	
			echo "
		<script type='text/javascript'>
		setTimeout(function () { 
		swal({
		title: 'successfully  !!',
		text:  'Data Has Changed !!',
		type: 'success',
		timer: 3000,
		showConfirmButton: true
		});     
		},10);  
		window.setTimeout(function(){ 
		window.location.replace('?page=list');
		} ,3000);   
		</script>";


	
}



 ?>