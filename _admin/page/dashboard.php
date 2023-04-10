<div class="col-md-9">
<?php 
// include '../koneksi.php';
// 2007
$std =mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_register"));
$lk =mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_register WHERE gender='Male' "));
$pr =mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_register WHERE gender='Female' "));
// $jurnal =mysqli_num_rows(mysqli_query($con,"SELECT * FROM tb_jurnal"));
?>
    		<!-- Website Overview -->
			    			<div class="panel panel-default">
			  <div class="panel-heading main-color-bg">
			    <h3 class="panel-title">Main Page</h3>
			  </div>
			  <div class="panel-body">
			  	<!-- <img src="../assets/img/head.jpeg" class="img-responsive"> -->
			  	
			   <div class="col-md-4">
			    	<div class="well dash-box" style="background-color: #1e88e5;color: #fff;">
			    		<h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> <?php echo $std ?></h2>
			    		<h4>Student</h4>
			    	</div>
			    </div>
			    <div class="col-md-4">
			    	<div class="well dash-box" style="background-color: #8bc34a;color: #fff;">
			    		<h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> <?php echo $lk ?></h2>
			    		<h4>Male</h4>
			    	</div>
			    </div>
			    <div class="col-md-4">
			    	<div class="well dash-box" style="background-color: #f50057;color: #fff;">
			    		<h2><span class="glyphicon glyphicon-user" aria-hidden="true"></span> <?php echo $pr ?></h2>
			    		<h4>Female</h4>
			    	</div>
			    </div>
			  </div>
			</div>

			<!-- Latest Users -->

			<div class="panel panel-default">
				  <div class="panel-heading">
				    <h3 class="panel-title"><h3> <span class="glyphicon glyphicon-calendar"></span> Latest Registrasi</h3></h3>
				  </div>
				  <div class="panel-body">
				    <div class="table-responsive">
				    	 <table class="table table-striped table-hover table-responsive">
				    	<thead>
				    	<tr>
					    	<th>No.</th>
					    	<th>Name Student</th>
					    	<th>Program Class</th>
					    	<th>Session</th>
					    	<th>Status</th>
					    	<th>Act</th>
				    	</tr>
				    	</thead>
				    	<tbody>
				    		<?php
				    		$no=1;
				    		 $student ="SELECT * FROM tb_register  ORDER BY id_register DESC LIMIT 5";
				    		 $query = mysqli_query($con,$student);
				    		 while ($data= mysqli_fetch_array($query)) {
				    		 ?>
				    	<tr>
					    	<td><?php echo $no++ ?>.</td>
					    	<td><?php echo $data['name'] ?></td>
					    	<td><?php echo $data['program'] ?></td>
					    	<td><?php echo $data['session'] ?></td>
					    	<td>
					    		  	<?php
					    	if ($data['status']=='Active') {
					    		echo "<a href='#' class='btn btn-info btn-block btn-xs' style='background-color: rgb(0,155,137);'> <span class='glyphicon glyphicon-ok'></span> Active</a>";
					    	}else{
					    		echo "<a href='#' class='btn btn-danger btn-block btn-xs'> <span class='glyphicon glyphicon-remove'></span> Non-Active</a>";
					    	}
					    	 ?>
					    	</td>
					    	<td>
					    		<a href="?page=detail&id=<?php echo $data['id_register'] ?>" class="btn btn-success btn-xs"><span class="glyphicon glyphicon-zoom-in"></span></a>
					    		<a href="?page=edit&id=<?php echo $data['id_register'] ?>" class="btn btn-primary btn-xs"><span class="glyphicon glyphicon-edit"></span></a>
					    		<a href="?page=del&id=<?php echo $data['id_register'] ?>" class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></a>

					    	</td>
				    	</tr>
				    <?php
				     }
				     ?>
				    	</tbody>
				    </table>
				    	
				    </div>
				  </div>
				</div>
    		</div>