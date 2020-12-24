<?php
  session_start();
  $id=$_GET['id'];
  include('../config.php');
 mysqli_query($con,"delete from forgotten_password where id='$id'");
 $_SESSION['xmsg']= '<span style="color:green;">'."User Data was successfully deleted".'</span>';
 header("location:forgotten_password.php");
?>