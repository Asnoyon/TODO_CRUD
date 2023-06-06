<?php
 include "config.php";
 $list = $_POST['list'];
 $desc = $_POST['desc'];
 $prior = $_POST['prior'];
 $date = $_POST['date'];
 
 mysqli_query($conn,"INSERT INTO `tbtodo`(`list`, `description`, `priority`, `date`) VALUES ('$list,'$desc',' $prior',' $date')");
 header("location:index.php");
?>