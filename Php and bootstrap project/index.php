
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
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="add.php">Ticket Booking</a>
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


<!-- carousel -->
<div class = "container-fluid bg-secondary">

<div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-interval="2000"
        data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/bus1.jpg" class="d-block w-80 ms-auto me-auto pb-50" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5 class = "text-black">DAEWOO EXPRESS</h5>
        
      </div>
    </div>
    <div class="carousel-item">
      <img src="image/bus4.jpg" class="d-block w-70 ms-auto me-auto" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>DAEWOO EXPRESS</h5>
        
      </div>
    </div>
    <div class="carousel-item">
      <img src="image/bus2.jpg" class="d-block w-70 ms-auto me-auto" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>DAEWOO EXPRESS</h5>
        
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" id = "prev" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
</div>
</div>

<div class="container-fluid">
<h1 class = "p-2 text-center" id = "head">DAEWOO EXPRESS</h1>
</div>


<div class="container-fluid bg-secondary">

<div class="row justify-content-evenly pt-2 pb-5">
  <div class="col-lg-4 col-12 col-md-6 ps-3">

  <div class="card" >
  <img src="image/bus4.jpg" class="card-img-top" alt="...">
  <div class="card-body text-center">
    <h5 class="card-title bg-primary p-2 text-white">ABOUT US</h5>
    <p class="card-text">Daewoo Express is the first and the biggest foreign investment Company with an advanced and organized transport system in Pakistan. It is the only transport company to have a nationwide network with various international trade links. Being a transport service provider the company owns a large fleet of buses, Technically Advanced Workshops to maintain the fleet for the safety of the passengers, State of the Art Terminals, Training Institutes for Drivers and Mechanical Staff.</p>
    <a href="#" class="btn btn-primary">Go back</a>
  </div>
</div>
</div>

<div class="col-lg-4 col-12 col-md-6 ps-3">

  <div class="card" >
  <img src="image/bus1.jpg" class="card-img-top" alt="...">
  <div class="card-body text-center">
    <h5 class="card-title bg-primary p-2 text-white">WORKSHOPS</h5>
    <p class="card-text">We are recruiting our workers (drivers, technician, etc) through a comprehensive testing and observation process. During the testing/observation, our experts observed the candidates keenly both practically and theoretically. Through our highly advance techograph system we observed the driver's driving on the routes on every arrival of the bus at its destination. Drivers are bound to drive the buses as per the rules and regulations (i.e. specified speed limit, specified stopovers and etc) of the company.</p>
    <a href="#" class="btn btn-primary">Go Back</a>
  </div>
</div>
</div>

<div class="col-lg-4 col-12 col-md-6 ps-3">

  <div class="card" >
  <img src="image/bus4.jpg" class="card-img-top" alt="...">
  <div class="card-body text-center">
    <h5 class="card-title bg-primary p-2 text-white">TRAVELLING SERVICES</h5>
    <p class="card-text">Time is the most precious asset at this age and at Daewoo, safety of this asset is guaranteed. Punctuality & regularity is the key feature of our service which is assured by leaving no stone unturned in making timely departures and arrivals. The passengers are valuable to us so as their time. Daewoo is committed to make your journey full of comfort & excitement. Every possible support is available for carrying personal luggage while traveling. All esteemed daily Newspapers are also available in the bus.</p>
    <a href="#" class="btn btn-primary">Go Back</a>
  </div>
</div>



  </div>
</div>

</div>




    



<script src="assets/js/popper.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>
</html>