<?php 
session_start();
if (!isset($_SESSION['login'])) {
	header('location:../index.php');
}
include '../inc/config.php';
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Admin Home | Dashboard</title>
    <link rel="shortcut icon" href="../assets/img/logo.png">
    <!-- Bootstrap core CSS -->    
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="../assets/css/style.css" rel="stylesheet">
    <!-- sweat alert -->
    <link rel="stylesheet" href="../assets/alert/css/sweetalert.css">
    <!-- Untuk data table -->
    <link rel="stylesheet" type="text/css" href="../assets/DataTables/datatables.min.css"/>
  </head>

  <body>
<?php
if (@$_SESSION['login']) {
$sesi = @$_SESSION['id'];
}

$sql = mysqli_query($con,"select * from user where id_user = '$sesi'") or die(mysqli_error($con));
$data = mysqli_fetch_array($sql);
?>

    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#"> B4K Aplication</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="index.php"> <span class="glyphicon glyphicon-home"></span>  Dashboard</a></li>
            <li><a href="?page=list"> <span class="glyphicon glyphicon-user"></span> Student Data</a></li>
            <li><a href="?page=parents"> <span class="glyphicon glyphicon-th-large"></span> Parents Data</a></li>
            <li><a href="?page=report"> <span class="glyphicon glyphicon-print"></span> Report</a></li>
         <!--    <li><a href="users.html">Users</a></li> -->
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="?page=">Welcome, <b><?php echo $data['nama_lengkap'];?></b></a></li>
            <li><a href="../inc/logout.php">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <header id="header">
    <div class="container">
    	<div class="row">
    		<div class="col-md-10">
    			<h1>
           <!--  <span class="glyphicon glyphicon-home" aria-hidden="true"></span>  -->Dashboard <small> Administrator</small></h1>

    		</div>
    		<div class="col-md-2">
			   <div class="dropdown create">
			  <a href="?page=regist" class="btn btn-default dropdown-toggle">
			     <span class="glyphicon glyphicon-plus"></span> Add New Registrasion
			  </a>

			  <!--
			  	  <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
			     <span class="glyphicon glyphicon-plus"></span> Add New Registrasion
			    <span class="caret"></span>
			  </button>
			   <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
			    <li><a type="button" data-toggle="modal" data-target="#addPage">Add Page</a></li>
			    <li><a href="#">Add Post</a></li>
			    <li><a href="#">Add User</a></li>
			  </ul> -->
			</div>
    			
    		</div>

    	</div>


    </div>
   



    </header>

    <section id="breadcrumb">
    	<div class="container">
    		<!-- <ol class="breadcrumb">
    			<li class="active">Dashboard</li>

    		</ol> -->
        <img src="../assets/img/h.png" class="img-responsive" width="261" style="border-radius: 10px;">
        <br>
    	</div>
    </section>

    <section id="main">
    <div class="container">
    	<div class="row">
    		<div class="col-md-3">
			<div class="list-group">
			  <a href="index.php" class="list-group-item active main-color-bg">
			    <span class="glyphicon glyphicon-home" aria-hidden="true"></span> Dashboard
			  </a>
			<!--   <a href="pages.html" class="list-group-item">
          <span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span>
           Pages <span class="badge">31</span>
         </a> -->
			  <a href="?page=list" class="list-group-item">
          <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
          Student Data <!-- <span class="badge">41</span> -->
         </a>
          <a href="?page=parents" class="list-group-item">
          <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>
          Parents Data <!-- <span class="badge">41</span> -->
         </a>
			  <a href="?page=report" class="list-group-item">
          <span class="glyphicon glyphicon-print" aria-hidden="true"></span>
           Report <!-- <span class="badge">59</span> -->
         </a>
			</div>
			<div class="well ">
      <center>
        <h4> Admin Profile</h4><span class="glyphicon glyphicon-user" style="font-size: 50px;"></span></center>
      
      <table class="table">
          <tr>
            <th> Full Name</th>
            <th> :</th>
            <th> <?php echo $data['nama_lengkap'];?> </th>
          </tr>
          <tr>
            <th> Username</th>
            <th> :</th>
            <th> <?php echo $data['username'];?> </th>
          </tr>
          <tr>
            <th> Satatus</th>
            <th> :</th>
            <th> 
              <?php if ($data['aktif']=='Y') {
                echo "Aktif";
                # code...
              }else{
                echo "Non Aktif";
              
              }
              ?> 
            </th>
          </tr>
          <!-- <?php echo $data['id_user'] ?> -->

      </table>
      <button type="button" class="btn btn-default btn-block" data-toggle="modal" data-target="#edit<?php echo $data['id_user'] ?>" style="background-color:rgb(0,155,137);color: #fff;"> <span class="glyphicon glyphicon-edit"></span> Update Profile</button>

<!-- Modal -->
<div class="modal fade" id="edit<?php echo $data['id_user'] ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header" style="background-color:rgb(0,155,137);color: #fff;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"> <span class="glyphicon glyphicon-edit"></span> <b>Form Update Profile</b></h4>
      </div>
    <form action="" method="POST">
      <div class="modal-body">     
            <div class="form-group">
              <label for="exampleInputEmail1">Full Name</label>
              <input type="text" name="fullname" class="form-control" id="exampleInputEmail1" value="<?php echo $data['nama_lengkap'] ?>">
              <input type="hidden" name="id" value="<?php echo $data['id_user'] ?>" required>
            </div>
              <div class="form-group">
              <label for="Username">Username</label>
              <input type="text" name="username" class="form-control" id="Username" value="<?php echo $data['username'] ?>">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">New Password</label>
              <input type="password" name="pass" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        <input type="submit" name="update" class="btn btn-info" value="Save changes">
      </div>
         </form> 
         <?php
         if (isset($_POST['update'])) {
            $id = $_POST['id'];
            $fullname= $_POST['fullname'];
            $username= $_POST['username'];
            $password= md5($_POST['pass']);

            mysqli_query($con," UPDATE user SET username='$username',password='$password',nama_lengkap='$fullname' WHERE id_user='$id' ") or die (mysqli_error($con));  
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
    window.location.replace('index.php');
    } ,3000);   
    </script>";



         }
           ?>    
    </div>
  </div>
</div>



			</div>
    		</div>
    		<!-- Dashboard -->
    		<?php 
    		error_reporting();
    		$page=@$_GET['page'];
    		if ($page=='proses') {
    			include 'page/procces.php';
    		}elseif ($page=='regist') {
    			include 'page/new-register.php';
    		}elseif ($page=='') {
    			include 'page/dashboard.php';
          // regis terakhir
    		}elseif ($page=='last_regis') {
    			include 'page/last_regis.php';
    		}elseif ($page=='detail') {
          include 'page/detail.php';
        }elseif ($page=='list') {
          include 'page/list-data.php';
        }elseif ($page=='del') {
          include 'page/del-data.php';
        }elseif ($page=='edit') {
          include 'page/edit.php';
          // report
        }elseif ($page=='report') {
          include 'page/Report-View.php';
          // aktif-non aktif
        }elseif ($page=='aktif') {
          include 'page/status-aktif.php';
          // parents
        }elseif ($page=='parents') {
          include 'page/v-parents.php';
        }else{
    			echo "Not Found !!";
    		}


    		 ?>
    		<!-- End Dashboard -->
    	</div>

    </div>
    	

    </section>

    <footer id="footer"><p>Copyright B4K, &copy; 2018</p></footer>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
    <script>
            CKEDITOR.replace( 'editor1' );
        </script>
    <script src="../assets/js/jquery.min.js"></script>
    <!-- swear alert -->
    <script src="../assets/alert/js/sweetalert.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script type="text/javascript" src="../assets/DataTables/datatables.min.js"></script>
    <script>
      $(document).ready(function() {
    $('#example').DataTable();
} );
    </script>
  </body>
</html>
