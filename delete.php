<?php

include "config.php";
$idn = $_POST['ID'];
mysqli_query($conn, "DELETE FROM `tbtodo` WHERE id=$idn");
header("location:index.php")


?>