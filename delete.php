<?php

include "config.php";
echo $idn = $_GET['ID'];
mysqli_query($conn, "DELETE FROM `tbtodo` WHERE id = $idn");
header("location:index.php")


?>