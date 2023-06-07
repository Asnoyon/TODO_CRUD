<?php
include "config.php";
$idNumb = $_POST['id'];
$List = $_POST['list'];
$Desc = $_POST['desc'];
$Prior = $_POST['prior'];
$Date = $_POST['date'];

mysqli_query($conn, "UPDATE `tbtodo` SET `list`='$List',`description`='$Desc',`priority`='$Prior',`date`='$Date' WHERE id=$idNumb ");

header("location:index.php");
?>