<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TODO LIST APP</title>
    <!-- font awesome online cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Bootstrap 5 css -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Style css -->
    <!-- <link rel="stylesheet" href="assets/css/style.css"> -->
    <link rel="stylesheet" href="style.css">
    <!-- Responsive css -->
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- Navbar css -->
    <link rel="stylesheet" href="assets/css/navbar-fixed.css">
</head>

<?php
include "config.php";
$Id = $_GET['ID'];
$rData = mysqli_query($conn, "select * from tbtodo where id= $Id");
$data= mysqli_fetch_array($rData);

?>

<body>
<form action="update1.php" method="post">
        <div class="container w-75">
            <div class="row justify-content-center bg-white m-auto mt-5  pt-3 pb-4">
                <h3 class="text-center font-monospace">UPDATE PAGE</h3>
                <label for=""class=" justify-content-center w-75 ml-0 fw-bold">Id:</label>
                <input type="text" name="id" value="<?php echo $data['id'] ?>" id=""class="form-control justify-content-center w-75 m-1" >
                <label for=""class=" justify-content-center w-75 m-0 fw-bold">Work List:</label>
                <input type="text" name="list" value="<?php echo $data['list'] ?>" class="form-control justify-content-center w-75 m-1" placeholder="Work List">
                <label for=""class=" justify-content-center w-75 m-0 fw-bold">Work Description:</label>
                <input type="text" name="desc" value="<?php echo $data['description']  ?>" class="form-control justify-content-center w-75 m-1" placeholder="Work Description">
                <label for=""class=" justify-content-center w-75 m-0 fw-bold">Work Priority:</label>
                <input type="text" name="prior" value="<?php echo $data['priority']  ?>" class="form-control justify-content-center w-75 m-1" placeholder="Work Priority">
                <label for=""class=" justify-content-center w-75 m-0 fw-bold">Category By Date:</label>
                <input type="text" name="date" value="<?php echo $data['date']  ?>" class="form-control justify-content-center w-75 m-1" placeholder="Category by date">
                <input type="submit" value="UPDATE" class="btn btn-outline-success w-25 m-auto mt-1">
               
            </div>
        </div>
    </form>
   
     <!-- Bootstrap 5 and JS Cdn -->
     <script src="assets/js/bootstrap.min.js"></script>

     <!-- Main Js -->
     <script src="assets/js/main.js"></script>
 
     <!-- Navbar Js -->
     <script src="assets/js/navbar-fixed.js"></script>
</body>
</html>