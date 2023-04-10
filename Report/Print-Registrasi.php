<?php 
include '../inc/config.php';
$id = $_GET['id'];
$result = mysqli_query($con,"SELECT * FROM tb_register WHERE id_register='$id' ");
$data = mysqli_fetch_array($result);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<style type="text/css">
<!--
.style1 {font-family: Arial, Helvetica, sans-serif}
.style2 {font-family: Arial, Helvetica, sans-serif; font-weight: bold; }
-->
</style>
</head>

<body>
<p>REPORT</p>
<table width="100%" border="1" style="border-collapse:collapse;border: 2px dashed;" cellpadding="30">
  <tr>
    <td>
 	<table width="100%">
  <tr>
    <td width="13%" class="style1">Date Join </td>
    <td width="1%" class="style2">:</td>
    <td width="31%" class="style1"><?php echo $data['tgl_dftr'] ?></td>
    <td width="55%" class="style1">&nbsp;</td>
  </tr>
  <tr>
    <td class="style1">Personal Data </td>
    <td class="style2">&nbsp;</td>
    <td class="style1">&nbsp;</td>
    <td rowspan="8" class="style1"><img src="../assets/img/<?php echo $data['foto'] ?>" width="130" height="130" / style="border: 1px dashed;border-radius: 15px;background-color: #f0f0f5;"></td>
  </tr>
  <tr>
    <td class="style1">Name Student</td>
    <td class="style2">:</td>
    <td class="style1"><?php echo $data['name'] ?></td>
  </tr>
  <tr>
    <td class="style1">Birth</td>
    <td class="style2">:</td>
    <td class="style1"><?php echo $data['tempat'] ?>, <?php echo $data['tgl'] ?></td>
  </tr>
  <tr>
    <td class="style1">Parents</td>
    <td class="style2">:</td>
    <td class="style1"><?php echo $data['ortu'] ?></td>
  </tr>
  <tr>
    <td class="style1">School</td>
    <td class="style2">:</td>
    <td class="style1"><?php echo $data['asal_skl'] ?></td>
  </tr>
  <tr>
    <td class="style1">Email</td>
    <td class="style2">:</td>
    <td class="style1"><?php echo $data['email'] ?></td>
  </tr>
  <tr>
    <td class="style1">Hp</td>
    <td class="style2">:</td>
    <td class="style1"><?php echo $data['hp'] ?></td>
  </tr>
  <tr>
    <td class="style1">Adress</td>
    <td class="style2">:</td>
    <td class="style1"><?php echo $data['alamat'] ?></td>
  </tr>
  <tr>
    <td colspan="4" class="style1">&nbsp;</td>
  </tr>
  <tr>
    <td class="style1">Now B4K From</td>
    <td class="style2">:</td>
    <td class="style1"><?php echo $data['info_b4k'] ?></td>
    <td class="style1">&nbsp;</td>
  </tr>
  <tr>
    <td class="style1">Program Class</td>
    <td class="style2">:</td>
    <td class="style1"><?php echo $data['program'] ?></td>
    <td class="style1">&nbsp;</td>
  </tr>
  <tr>
    <td class="style1">Note</td>
    <td class="style2">;</td>
    <td class="style1"><?php echo $data['note'] ?></td>
    <td class="style1">&nbsp;</td>
  </tr>
  <tr>
    <td class="style1">Session</td>
    <td class="style2">:</td>
    <td class="style1"><?php echo $data['session'] ?></td>
    <td class="style1">&nbsp;</td>
  </tr>
  <tr>
    <td class="style1">Amount</td>
    <td class="style2">:</td>
    <td class="style1"><?php echo $data['jml_byr'] ?></td>
    <td class="style1">&nbsp;</td>
  </tr>
  <tr>
    <td class="style1">Paid</td>
    <td class="style2">:</td>
    <td class="style1"><?php echo $data['paid'] ?></td>
    <td class="style1">&nbsp;</td>
  </tr>
    <tr>
    <td class="style1">Status</td>
    <td class="style2">:</td>
    <td class="style1"><?php echo $data['status'] ?></td>
    <td class="style1">&nbsp;</td>
  </tr>
</table>
<p class="style1">&nbsp; </p>


 </table>
</td>
</tr>
</table>

</body>
</html>
<?php
//otomatis muncul ketika laman di akses
echo "<script>window.print()</script>";
?> 