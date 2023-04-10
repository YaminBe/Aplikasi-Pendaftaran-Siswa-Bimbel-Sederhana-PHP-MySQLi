<?php 
session_start();
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Login | B4F Aplication</title>

    <!-- Bootstrap core CSS -->
        <!-- sweat alert -->
    <link rel="stylesheet" href="assets/alert/css/sweetalert.css">
    
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">

  </head>

  <body>

    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">B4K Aplication</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          
          
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <header id="header">
    <div class="container">
    	<div class="row">
    		<div class="col-md-12">

    			<h1 class="text-center"> Admin Panel<small> Login</small></h1>
    		</div>
    		</div>
    </header>


    <section id="main">
    <div class="container">
    	<div class="row">       
    		<div class="col-md-4 col-md-offset-4">
           <center> <img src="assets/img/h.png" class="img-responsive" width="300" style="border-radius: 10px;"></center>
    		<form id="login" action="" method="post" class="well">
    		<div class="form-group">
    			<label>Username</label>
    			<input type="text" name="username" class="form-control" placeholder="Enter Username" required>
    		</div>
    		<div class="form-group">
    			<label>Password</label>
    			<input type="password" name="password" class="form-control" placeholder="Enter password" required>
    		</div>
    		<button type="submit" class="btn btn-info btn-block">Login</button>
    		</form>
                        <?php
                        include 'inc/config.php'; 
                        if ($_SERVER['REQUEST_METHOD']=='POST') {
                            $pass= md5($_POST['password']);
                            $sqlCek = mysqli_query($con,"SELECT * FROM user WHERE username='$_POST[username]' AND password='$pass' AND aktif='Y' ");
                            $jml = mysqli_num_rows($sqlCek);
                            $d = mysqli_fetch_array($sqlCek);

                            if ($jml > 0) {
                            
                               $_SESSION['login']= TRUE;
                               $_SESSION['username']= $d['username'];
                               $_SESSION['nama']= $d['nama_lengkap'];
                               $_SESSION['id']= $d['id_user'];                               

                         //       echo "<script>
                         //   alert('Success !!');
                         //   window.location='_admin/'
                         // </script>";
                          echo "
                          <script type='text/javascript'>
                          setTimeout(function () { 
                          swal({
                          title: 'Success !!',
                          text:  'Login Success !!',
                          type: 'success',
                          timer: 2000,
                          showConfirmButton: true
                          });     
                          },10);  
                          window.setTimeout(function(){ 
                          window.location.replace('_admin/');
                          } ,2000);   
                          </script>";










                            }else{
                                echo"
                                <a href='' class='flip-link btn btn-danger' id='to-recover'>
                                Oppss Username or Password Wrong ... Try Again !!</a>

                                ";
                            }
                        }

                         ?>

			</div>
		</div>
    </div>
    </section>

    <footer id="footer"><p>Copyright B4K, &copy; 2018</p></footer>

     <!-- Modals -->

     <!-- Add Page -->
      
  <script src="assets/js/jquery.min.js"></script>
    <!-- swear alert -->
    <script src="assets/alert/js/sweetalert.min.js"></script>



    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="http://cdn.ckeditor.com/4.6.2/standard/ckeditor.js"></script>
    <script>
            CKEDITOR.replace( 'editor1' );
        </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
  </body>
</html>
