<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="./public/css/style.css" />
    <link rel="stylesheet" href="./public/css/product.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body class="min-vh-100 d-flex flex-column justify-content-between">

<div class="container">
        <div class="store-heading d-flex flex-column justify-content-center align-items-center">
            <h1>Home Page</h1>
            <h1>Welcome Doctor</h1>
        </div>

<br><a href='login.html'>Logout</a>
<br><a href='newpatient.php'>New Patient</a>
<br><a href='findpatient.php'>Find Patient</a>
<br><a href='updatepatient.php'>Update Patient Information</a>
<br><a href='newapp.php'>New Appointment</a>
<br>


    <div class="alert-container">
        <?php
        if (isset($_SESSION)) {
            if (isset($_SESSION["flash"])) {
                echo '<div class="store-alert alert-${type}">
            <span class="text-white">$_SESSION["flash"]</span>
        </div>';
            }
        }
        ?>
    </div>
    


        

    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="./public/js/cart.js"></script>
    <script src="./public/js/navbar.js"></script>
</body>

</html>