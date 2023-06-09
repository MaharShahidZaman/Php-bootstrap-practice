<?php
include 'database.php';

$obj = new database();
$shahid = $obj->select();


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="designs.css">
    <link rel="stylesheet" href="style.css">

    <title>DAEWOO EXPRESS</title>
</head>
<body>

<!-- navbar -->


<nav class="navbar navbar-expand-lg ps-4 pe-4 fixed-top" id = "about">
  <div class="container">
  <a class="navbar-brand" href="#">
        <img src="logo/logo2.jpg" alt="Error">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 fs-4 mb-lg-0 p-2 text-success">
        <li class="nav-item">
          <a class="nav-link  text-success " aria-current="page" href="index.php"><b>Home</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link  text-success " aria-current="page" href="add.php"><b>Ticket Booking</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link  text-success active" aria-current="page" href="passenger.php"><b>Passenger Record</b></a>
        </li>
        <li class="nav-item">
          <a class="nav-link  text-success " aria-current="page" href="contact.php"><b>Contact Us</b></a>
        </li>
      </ul>
    </div>
  </div>
</nav>


<!-- container -->


<div class="container-fluid" id = "headc">

<div class="row" id = "crow">

<div class="col-4 col-md-6 col-sm-12" id = "head1">
<h1 id = "hh1">PASSENGER RECORD</h1>
<h4 id = "hh1">DAEWOO BUSES</h4>

</div>

</div>

</div>

<hr>
<!-- table-->
<div class="container-fluid">

<div class="row justify-content-evenly pb-5 tbl">

<div class="col-lg-8 col-md-10 col-sm-12 pt-3 pb-5" id = "rtable">

<h3 class = "pb-2 text-light">PASSENGER RECORD</h3>

<table  class="table table-success table-striped pb-3 table-bordered border-danger">
  
  <thead>
    <tr>
      <th scope="col">Serial No</th>
      <th scope="col">Name</th>
      <th scope="col">Issue Date</th>
       <th scope="col">Dept Date</th>
      <th scope="col">Phone</th>
     
      <th scope="col">Time</th>
      <th scope="col">Route</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  <?php foreach($shahid as $zaman){ ?>
    <tr>
      
      <th scope="row"><?php echo $zaman['id']; ?></th>
      <td><?php echo $zaman['name']; ?></td>
      <td><?php echo $zaman['issued']; ?> </td>
      <td><?php echo $zaman['ddate']; ?></td>
      <td><?php echo $zaman['phone']; ?></td>
      <td><?php echo $zaman['time']; ?></td>
      <td><?php echo $zaman['route']; ?></td>
      <th><a class = "btn btn-sm btn-primary" href="update.php?id=<?php echo $zaman['id']?>">Edit</a> <a class = "btn btn-sm btn-primary" href="delete.php?id=<?php echo $zaman['id']?>">Delete</a></th>
    </tr>
     <?php }?>
  </tbody>
</table>

</div>
</div>

</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
</body>
</html>