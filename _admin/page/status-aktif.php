 

		 <div class="col-md-9">
    					<!-- Website Overview -->
			    			<div class="panel panel-default">
			  <div class="panel-heading main-color-bg">
			    <h3 class="panel-title"><h3><span class="glyphicon glyphicon-folder-open"></span> All Student Data</h3></h3>
			  </div>
			  <div class="panel-body">
<!-- 			  <div class="row">
			  	<div class="col-md-12">
			  		<input type="text" class="form-control" placeholder="Filter Pages">
			  	</div>
			  </div>
			  <br> -->
			<div class="table-responsive">
		<form action="" method="POST">
	    <?php 
		$id = @$_GET['id'];
		$result = mysqli_query($con,"SELECT * FROM tb_register WHERE id_register='$id' ");
		$data = mysqli_fetch_array($result);
		?>
		<input type="hidden" name="id" value="<?php echo $data['id_register'] ?>">
		<input type="hidden" name="status" value="Non">
		<input type="hidden" name="akt" value="Active">
				  <table class="table table-striped table-hover table-responsive" id="example">
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
					    		echo "<button type='submit' name='aktif' class='btn btn-info btn-block btn-xs'style='background-color: rgb(0,155,137);'> <span class='glyphicon glyphicon-ok'></span> Active</button>";
					    	}else{
					    		echo "<button type='submit' name='nonaktif' class='btn btn-danger btn-block btn-xs'> <span class='glyphicon glyphicon-remove'></span> Non-Active</button>";
					    	}
					    	 ?>
					    	 	
					    	 </td>
					    	<td>
					    		<a href="?page=detail&id=<?php echo $data['id_register'] ?>" class="btn btn-success"><span class="glyphicon glyphicon-zoom-in"></span></a>
					    		<a href="?page=edit&id=<?php echo $data['id_register'] ?>" class="btn btn-primary"><span class="glyphicon glyphicon-edit"></span></a>
					    		<a href="?page=del&id=<?php echo $data['id_register'] ?>" class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span></a>

					    	</td>
				    	</tr>
				    <?php
				     }
				     ?>
				    	</tbody>
				    </table>
				    </form>
				    <?php 
				    if (isset($_POST['aktif'])) {
				    	$id = $_POST['id'];
				    	$status = $_POST['status'];

					mysqli_query($con," UPDATE tb_register SET status='$status' WHERE id_register='$id' ") or die (mysqli_error($con));

					echo "<script>
					window.location='?page=list';
					</script>";
                     }elseif (isset($_POST['nonaktif'])) {
                     	$id = $_POST['id'];
				    	$aktif = $_POST['akt'];

					mysqli_query($con," UPDATE tb_register SET status='$aktif' WHERE id_register='$id' ") or die (mysqli_error($con));

					echo "<script>
					window.location='?page=list';
					</script>";
                     }

				     ?>

				
			</div>
			<!--   <table class="table table-striped table-hover" id="example">
				    	<tr>
				    	<th>Title</th>
				    	<th>Published</th>
				    	<th>Created</th>
				    	<th></th>
				    	</tr>
				    	<tr>
				    	<td>Home</td>
				    	<td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
				    	<td>December, 19th 2016</td>
				    	<td><a class="btn btn-default" href="edit.html">Edit</a> <a class="btn btn-danger" href="#">Delete</a></td>
				    	</tr>
				    	<tr>
				    	<td>About</td>
				    	<td><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></td>
				    	<td>December, 19th 2016</td>
				    	<td><a class="btn btn-default" href="edit.html">Edit</a> <a class="btn btn-danger" href="#">Delete</a></td>
				    	</tr>
				    	<tr>
				    	<td>Services</td>
				    	<td><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></td>
				    	<td>December, 19th 2016</td>
				    	<td><a class="btn btn-default" href="edit.html">Edit</a> <a class="btn btn-danger" href="#">Delete</a></td>
				    	</tr>
				    	<tr>
				    	<td>Contact</td>
				    	<td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
				    	<td>December, 19th 2016</td>
				    	<td><a class="btn btn-default" href="edit.html">Edit</a> <a class="btn btn-danger" href="#">Delete</a></td>
				    	</tr>
				    </table> -->
			    
			  </div>
			</div>

			<!-- Latest Users -->
		</div>
