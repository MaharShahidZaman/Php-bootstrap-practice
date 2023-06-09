<?php
include 'database.php';
$obj = new database();

if(isset($_GET['id'])){
$mahar = $obj->editdata($_GET['id']);
}
if(isset($_POST['update'])){
    $obj->update($_POST);
    header("Location: http://localhost/daewoo project/passenger.php");
}


?> 



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">

    <title>DAEWOO EXPRESS</title>
</head>
<body>



<!-- navbar -->

<nav class="navbar navbar-expand-lg navbar-dark ps-4 pe-4 fixed-top" id = "mynavbar">
  <div class="container">
  <a class="navbar-brand" href="#">
        <img src="logo/logo2.jpg" alt="Error">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 fs-5 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="add.php">Ticket Booking</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " aria-current="page" href="passenger.php">Passenger Record</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="contact.php">Contact Us</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>


<!-- table-->
<div class="container-fluid">



<div class="row justify-content-evenly pb-5 tbl">
<h1 class = "p-2 text-center mt-5 pt-5" id = "head">DAEWOO EXPRESS</h1>
<div class="col-lg-6 col-md-8 col-sm-12 pt-3 pb-5 text-light" id = "form1">

<h3 class = "pb-2">Booking Ticket</h3>

<form method = "POST">

<div class="mb-3">
    <input type="hidden" class="form-control" id = "id" name = "id" aria-describedby="emailHelp" placeholder = "Enter your Name" value = "<?php echo $mahar['id']; ?>" >
    
  </div>

  <div class="mb-3">
    <label for="name" class="form-label fs-4">NAME</label>
    <input type="text" class="form-control"  name = "name" id="name" value = "<?php echo $mahar['name']; ?>" >
  </div>

  <div class="mb-3">
    <label for="issued" class="form-label fs-4">ISSUE DATE</label>
    <input type="date" class="form-control" name = "issued" id="issued" value = "<?php echo $mahar['issued']; ?>">
  </div>

  <div class="mb-3">
    <label for="ddate" class="form-label fs-4">DEPT DATE</label>
    <input type="date" class="form-control" name = "ddate" id="ddate" value = "<?php echo $mahar['ddate']; ?>">
  </div>

  <div class="mb-3">
    <label for="phone" class="form-label fs-4">PHONE</label>
    <input type="number" class="form-control" name = "phone" id="phone" value = "<?php echo $mahar['phone']; ?>" placeholder = "1212121">
  </div>

  <div class="mb-3">
    <label for="time" class="form-label fs-4">TIME</label>
    <input type="time" class="form-control" name = "time" id="time"  value = "<?php echo $mahar['time']; ?>" >
  </div>

  <div class="mb-3">
    <label for="route" class="form-label fs-4">ROUTE</label>
    <input type="text" class="form-control" name = "route" id="route"  value = "<?php echo $mahar['route']; ?>" placeholder = "Enter Route">
  </div>
 
  <button type="submit" name ="update" class="btn btn-primary">Submit</button>
</form>

</div>
</div>

</div>
    



<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>
</html>