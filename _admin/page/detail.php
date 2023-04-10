<div class="col-md-9">
	<?php
	$id = $_GET['id'];

$sql = mysqli_query($con,"SELECT *FROM tb_register WHERE id_register='$id' ") or die(mysqli_error($con));
$data = mysqli_fetch_array($sql);

?>
<!-- <div class="alert alert-warning alert-dismissible" role="alert" style="background-color: #f50057;color: #fff;">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><b style="color: #fff;">&times; Close</b></span></button>
  <strong>Succes!</strong> You Successfull Registration .. !
</div> -->
<div class="panel panel-default">
  <div class="panel-heading"><h3> <span class="glyphicon glyphicon-list-alt"></span> Student Data Details</h3></div>
  <div class="panel-body">

<!-- 	  	<div class="alert alert-warning alert-dismissible" role="alert" style="background-color: #f50057;color: #fff;">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true"><b style="color: #fff;">&times; Close</b></span></button>
  <strong>Succes!</strong> You Successfull Registration .. !
</div> -->
		<div class="row">

	<div class="col-lg-9">
		<div class="panel panel-default">
		  <div class="panel-body">
		  	  	<p>Date Join >> <b><?php echo $data['tgl_dftr'] ?></b></p>
			<table width="100%">
				<thead>
					<b>Personal Data</b>
					
					<tr>
						<th>Name Student</th>
						<th>:</th>
						<th><?php echo $data['name'] ?></th>
					</tr>
					<tr>
						<th>Birth</th>
						<th>:</th>
						<th><?php echo $data['tempat'] ?>, <?php echo $data['tgl'] ?></th>
					</tr>
					<tr>
						<th> Parents</th>
						<th>:</th>
						<th><?php echo $data['ortu'] ?></th>
					</tr>
					<tr>
						<th> School</th>
						<th>:</th>
						<th><?php echo $data['asal_skl'] ?></th>
					</tr>
					<tr>
						<th> Email</th>
						<th>:</th>
						<th><?php echo $data['email'] ?></th>
					</tr>
					<tr>
						<th> Hp</th>
						<th>:</th>
						<th><?php echo $data['hp'] ?></th>
					</tr>
					<tr>
						<th> Adress</th>
						<th>:</th>
						<th><?php echo $data['alamat'] ?></th>
					</tr>
				</thead>
			</table>		  	
		  </div>
		</div>
		<div class="panel panel-default">
		  <div class="panel-body">
			<table width="100%">
				<thead>
					<!-- <b>Personal Data</b> -->
					<tr>
						<th>Now B4K From</th>
						<th>:</th>
						<th><?php echo $data['info_b4k'] ?></th>
					</tr>
					<tr>
						<th>Program Class</th>
						<th>:</th>
						<th><?php echo $data['program'] ?></th>
					</tr>
					<tr>
						<th>Note</th>
						<th>:</th>
						<th><?php echo $data['note'] ?></th>
					</tr>
					<tr>
						<th>Session</th>
						<th>:</th>
						<th><?php echo $data['session'] ?></th>
					</tr>
					<tr>
						<th>Amount</th>
						<th>:</th>
						<th><?php echo $data['jml_byr'] ?></th>
					</tr>
					<tr>
						<th>Paid</th>
						<th>:</th>
						<th><?php echo $data['paid'] ?></th>
					</tr>
				</thead>
			</table>		  	
		  </div>
		</div>
	</div>
	<div class="col-lg-3">
		<div class="panel panel-default">
		  <div class="panel-body">
		  	<img src="../assets/img/<?php echo $data['foto'] ?>" alt="..." class="img-thumbnail" style="width: 200px; height: 150px;">
		  	<!-- <img src="../assets/img/<?php echo $data['foto'] ?>" width="100" height="150" style="border-radius: 15px;border:2px solid #212121;"/> -->

		  </div>
		</div>
	</div>
			
		</div>
		<div class="row">
			<div class="col-lg-9">
		<div class="panel panel-default">
		<div class="panel-body">
		<a href="../Report/Print-Registrasi.php?id=<?php echo $data['id_register'] ?>" target="_blank" class="btn btn-success btn-lg"> <span class="glyphicon glyphicon-print"></span> Print</a>
		<!-- <a href="" class="btn btn-danger btn-lg"> <span class="glyphicon glyphicon-download"></span> Download</a> -->
		</div>
		</div>
			
		</div>
</div>
</div>
</div>

  	
  </div>


  <!-- <table class="table">
		<tr>
			<th width="30%">Name Student</th>
			<th width="1%">:</th>
			<td width="69%"><?php echo $data['name'] ?></td>
			<td width="10%" rowspan="4"><img src="../assets/img/<?php echo $data['foto'] ?>" width="100" height="150" style="border-radius: 15px;border:2px solid #212121;"/></td>
		</tr>
		<tr>
			<th> Birth </th>
			<th>:</th>
			<td> <?php echo $data['tempat'] ?>, <?php echo $data['tgl'] ?></td>
		</tr>
		<tr>
			<th>Parents </th>
			<th>:</th>
			<td><?php echo $data['ortu'] ?></td>
		</tr>
		<tr>
			<th>School </th>
			<th>:</th>
			<td><?php echo $data['asal_skl'] ?></td>
		</tr>
		<tr>
			<th> Email </th>
			<th>:</th>
			<td><?php echo $data['email'] ?></td>
		</tr>
		<tr>
			<th>Hp </th>
			<th>:</th>
			<td><?php echo $data['hp'] ?></td>
		</tr>
		<tr>
			<th> Adress </th>
			<th>:</th>
			<td><?php echo $data['alamat'] ?></td>
		</tr>
		<tr>
			<th>Now Info B4K</th>
			<th>:</th>
			<td><?php echo $data['info_b4k'] ?></td>
		</tr>
		<tr>
			<th>Program Class</th>
			<th>:</th>
			<td><?php echo $data['program'] ?></td>
		</tr>
		<tr>
			<th>Note </th>
			<th>:</th>
			<td><?php echo $data['note'] ?></td>
		</tr>
		<tr>
			<th> Session </th>
			<th>:</th>
			<td><?php echo $data['session'] ?></td>
		</tr>
		<tr>
			<th>Amount</th>
			<th>:</th>
			<td><?php echo $data['jml_byr'] ?></td>
		</tr>
		<tr>
			<th>Paid</th>
			<th>:</th>
			<td><?php echo $data['paid'] ?></td>
		</tr>
	</tbody>
</table> -->

 