<div class="col-md-9">
<div class="panel panel-default">
  <div class="panel-heading"><h3> <span class="glyphicon glyphicon-pencil"></span> New Registrasion</h3></div>
  <div class="panel-body">
    	<!-- Form -->
			<form action="?page=proses" method="post" enctype="multipart/form-data">
						<div class="panel panel-default" style="border:1px solid #007b73;">
					<div class="panel-body">
					<div class="row">
					<div class="col-md-6">
						<div class="form-group">
						    <label for="Name">Name Student *</label>
						    <input type="text" name="nama" class="form-control" id="Name" placeholder="Enter Name Student" required>
						</div>
					</div>
					<div class="col-md-6">
						 <div class="form-group">
						    <label for="Parents">Parents *</label>
						    <input type="text" name="ortu" class="form-control" id="Parents" placeholder="Enter Parents" required>
						</div>
					</div>
				</div>
				<div class="row">
						<div class="col-md-6">
						  <div class="form-group">
						    <label for="Name">Gender *</label>
						    <select name="jk" class="form-control" required>
						    	<option value="">--Please Select--</option>
						    	<option value="Male">Male</option>
						    	<option value="Female">Female</option>
						    	
						    </select>
						</div>
					</div>
					<div class="col-md-6">
						  <div class="form-group">
						    <label for="Email">Email</label>
						    <input type="text" name="email" class="form-control" id="Email" placeholder="Enter Email">
						</div>
					</div>
				</div>
				<div class="row">
						<div class="col-md-3">
						  <div class="form-group">
						    <label for="Birth">Birth *</label>
						    <input type="text" name="tempat" class="form-control" id="Birth" placeholder="Enter Birth" required>
						</div>
					</div>
					<div class="col-md-3">
						  <div class="form-group">
						    <label for="Birth" style="color: #fff;">Birth</label>
						    <input type="date" name="tgl" class="form-control" id="Birth" placeholder="Enter Birth" required>
						</div>
					</div>
					<div class="col-md-6">
						  <div class="form-group">
						    <label for="Hp">Hp</label>
						    <input type="number" name="hp" class="form-control" id="Hp" placeholder="Enter Hp">
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<div class="form-group">
						    <label for="School">School</label>
						    <input type="text" name="school" class="form-control" id="School" placeholder="Enter School">
						</div>
				    </div>
				    <div class="col-md-6">
						<div class="form-group">
						    <label for="Adress">Adress *</label>
						    <input type="text" name="alamat" class="form-control" id="Adress" placeholder="Enter Adress" required>
						</div>
				    </div>
				</div>
			</div>
		</div>
					<div class="row">
					<div class="col-md-12">
						<div class="panel panel-default" style="border:1px solid #007b73;">
						<div class="panel-body">
							<div class="col-md-12">
								<div class="form-group">
									<label>Now B4K From</label>
										<div class="checkbox" style="font-size: 16px;">
										<label for="Instagram">
										<input type="checkbox" name="info" id="Instagram" value="Instagram" aria-label="Instagram">
										Instagram
										</label>
										<label for="Website">
										<input type="checkbox" name="info" id="Website" value="Website" aria-label="Website">
										Website
										</label>
										<label for="Others">
										<input type="checkbox" name="info" id="Others" value="Others" aria-label="Others">
										Others
										</label>
										</div>

								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label> Program Class</label>
										<div class="checkbox" style="font-size: 16px;">
										<label for="After School">
										<input type="checkbox" name="program" id="After School" value="After School" aria-label="After School">
										After School
										</label>

										<label for="Preschool">
										<input type="checkbox" name="program" id="Preschool" value="Preschool" aria-label="Preschool">
										Preschool
										</label>

										<label for="Robotic">
										<input type="checkbox" name="program" id="Robotic" value="Robotic" aria-label="Robotic">
										Robotic
										</label>
										<label for="Camp">
										<input type="checkbox" name="program" id="Camp" value="Camp" aria-label="Camp" >
										Camp
										</label>

										</div>
										<div class="form-group">
										<label for="Note">Note</label>
										<input type="text" name="note" class="form-control" id="Note" placeholder="Enter Note ...."required>
										</div>

								</div>
							</div>

							<div class="col-md-12">
								<div class="form-group">
									<label> Session</label>
										<div class="checkbox" style="font-size: 16px;">

										<label for="Persession">
										<input type="checkbox" name="sessi" id="Persession" value="Persession" aria-label="Persession" >
										Persession
										</label>

										<label for="12 Session">
										<input type="checkbox" name="sessi" id="12 Session" value="12 Session" aria-label="12 Session">
										12 Session
										</label>

										<label for="24 Session">
										<input type="checkbox" name="sessi" id="24 Session" value="24 Session" aria-label="24 Session">
										24 Session
										</label>

										<label for="48 Session">
										<input type="checkbox" name="sessi" id="48 Session" value="48 Session" aria-label="48 Session">
										48 Session
										</label>

									</div>
								</div>
								<div class="form-group">
										<label for="Amount">Amount</label>
										<input type="number" name="jml" class="form-control" id="Amount" placeholder="Rp.(...................................)"required>
								</div>
							</div>
										<div class="col-md-12">
								<div class="form-group">
									<label> Paid</label>
										<div class="checkbox" style="font-size: 16px;">

										<label for="Cash">
										<input type="checkbox" name="paid" id="Cash" value="Cash" aria-label="Cash">
										Cash
										</label>

										<label for="Debit Card">
										<input type="checkbox" name="paid" id="Debit Card" value="Debit Card" aria-label="Debit Card">
										Debit Card
										</label>

										<label for="Kredit Card">
										<input type="checkbox" name="paid" id="Kredit Card" value="Kredit Card" aria-label="Kredit Card">
										Kredit Card
										</label>


									</div>
									<img src="../assets/img/avatar.png" alt="..." class="img-thumbnail" style="width: 70px;">
										<div class="form-group">
										<label for="Adress">Images</label>										
										<input type="file" name="foto" required>
										</div>
										
								</div>

						</div>
						</div>			

						
				    </div>
					<div class="panel panel-default" style="border:1px solid #007b73;">
					<div class="panel-body">

					<button type="submit" class="btn btn-info" name="register"> <span class="glyphicon glyphicon-floppy-save" ></span> Register</button>

					<button type="reset" class="btn btn-danger"> <span class="glyphicon glyphicon-remove"></span> Reset</button>
					</div>
					</div>
				</div>

						
			</div><!-- END Row -->
			
			
				
			</form>



    	<!-- End Form -->
  </div>
</div>
</div>
