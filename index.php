<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Only Books</title>
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
<body>
    <form action="insert.php" method="post">
        <div class="container w-75">
            <div class="row justify-content-center bg-white m-auto mt-5  pt-3 pb-4">
                <h3 class="text-center font-monospace">TODO LIST</h3>
                <input type="text" name="list" class="form-control justify-content-center w-75 m-1" placeholder="Work List">
                <input type="text" name="desc" class="form-control justify-content-center w-75 m-1" placeholder="Work Description">
                <input type="text" name="prior" class="form-control justify-content-center w-75 m-1" placeholder="Work Priority">
                <input type="text" name="date" class="form-control justify-content-center w-75 m-1" placeholder="Category by date">
                <input type="submit" value="ADD" class="btn btn-outline-success w-25 m-auto mt-1">
               
            </div>
        </div>
    </form>

    <!-- Get Result -->
    <div class="container">
        <div class="  bg-white mt-3">
            <table class="table">
                <tr>
                    <td class="py-3 fs-4">ID</td>
                    <td class="py-3 fs-4">Work List</td>
                    <td class="py-3 fs-4">Work Description</td>
                    <td class="py-3 fs-4">Work Priority</td>
                    <td class="py-3 fs-4">Category by date</td>
                    <td class="py-3 fs-4">DELETE</td>
                    <td class="py-3 fs-4">UPDATE</td>
                </tr>
                <tr>
                    <td class="py-3"></td>
                    <td class="py-3"></td>
                    <td class="py-3"></td>
                    <td class="py-3"></td>
                    <td class="py-3"></td>
                    <td style="width:10%;"><a href="delete.php" class="btn btn-outline-danger" >DELETE</a></td>
                    <td style="width:10%;"><a href="update.php" class="btn btn-outline-success" >UPDATE</a></td>
                </tr>
            </table>
        </div>
    </div>
     <!-- Bootstrap 5 and JS Cdn -->
     <script src="assets/js/bootstrap.min.js"></script>

     <!-- Main Js -->
     <script src="assets/js/main.js"></script>
 
     <!-- Navbar Js -->
     <script src="assets/js/navbar-fixed.js"></script>
</body>
</html>