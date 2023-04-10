<?php 
include '../inc/config.php';
 ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
.style1 {font-family: Arial, Helvetica, sans-serif}
.style2 {
	font-size: 24px;
	font-weight: bold;
}

</style>
</head>

<body>
<div align="center" class="style1">
  <p class="style2">STUDENT DATA RAPORT </P>
  <p class="style2">BRICKS 4 KIDS </P>
    <hr>
  <table width="100%" border="1" cellpadding="4" cellspacing="1" style="border-collapse: collapse;">
    <tr style="height: 40px;background-color: #f0f0f5;">
      <td><strong>No.</strong></td>
      <td><strong>Date Join </strong></td>
      <td><strong>Name Student </strong></td>
      <td><strong>Birth</strong></td>
      <td><strong>School</strong></td>
      <td><strong>Parents</strong></td>
      <td><strong>Email</strong></td>
      <td><strong>Hp</strong></td>
      <td><strong>Adress</strong></td>
      <td><strong>Now B4K </strong></td>
      <td><strong>Program Class </strong></td>
      <td><strong>Session</strong></td>
      <td><strong>Amount</strong></td>
      <td><strong>Paid</strong></td>
      <td><strong>Status</strong></td>
    </tr>
    <?php
    $no=1;
    $student ="SELECT * FROM tb_register  ORDER BY id_register DESC";
    $query = mysqli_query($con,$student);
    while ($data= mysqli_fetch_array($query)) {
    ?>
    <tr>
      <td><?php echo $no++ ?>.</td>
      <td><?php echo $data['tgl_dftr'] ?></td>
      <td><?php echo $data['name'] ?></td>
      <td><?php echo $data['tempat'] ?>,<?php echo $data['tgl'] ?></td>
      <td><?php echo $data['asal_skl'] ?></td>
      <td><?php echo $data['ortu'] ?></td>
      <td><?php echo $data['email'] ?></td>
      <td><?php echo $data['hp'] ?></td>
      <td><?php echo $data['alamat'] ?></td>
      <td><?php echo $data['info_b4k'] ?></td>
      <td><?php echo $data['program'] ?></td>
      <td><?php echo $data['session'] ?></td>
      <td><?php echo $data['jml_byr'] ?></td>
      <td><?php echo $data['paid'] ?></td>
       <td><?php echo $data['status'] ?></td>
    </tr>
      <?php
      }
      ?>
  </table>

  <p>&nbsp;  </p>

</div>
  <p> Print at <?php echo date('d F Y') ?> </p>
</body>
</html>
<?php
//otomatis muncul ketika laman di akses
echo "<script>window.print()</script>";
?> 