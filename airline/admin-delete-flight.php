<?php
session_start();
include "database.php";
$p_id=$_GET['p_id'];
$f_id=$_GET['f_id'];
mysqli_query($con,"delete from ticket_detail where p_id = '$p_id' && f_id = '$f_id' ")or die(mysqli_error());
echo "<script>alert('Please wait while we delete your data.....!');
setTimeout(\"location.href = 'admine.php';\",2000);</script>";
?>
<script>alert('Successfully Deleted....|'); </script>
