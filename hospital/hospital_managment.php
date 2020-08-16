<?php
//include auth.php file on all secure pages
include("LoginSystem/auth.php");
?>
<!DOCTYPE html>
<html lang="en"><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Hospital Managment</title>
    <link rel="stylesheet" href="style.css">

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/jumbotron/">

    <!-- Bootstrap core CSS -->
    <link href="Jumbotron%20Template%20for%20Bootstrap_files/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="Jumbotron%20Template%20for%20Bootstrap_files/jumbotron.css" rel="stylesheet">
  </head>

  <body>

  <div class="form">
<p>Welcome <?php echo $_SESSION['username']; ?>!</p>

<a href="LoginSystem/logout.php">Logout</a>
</div>


    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="#">Home</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          
          <li class="nav-item">
            <a class="nav-link" href="doctor_list.html" >Doctor</a>
          </li>
        </li>
       </li>
       </ul>
        
      </div>
    </nav>

    <main role="main">

      <!-- Main jumbotron for a primary marketing message or call to action -->
      <div class="jumbotron">
        <div class="container">
          <img  src="img\logo.png" alt="logo">
          <h1 class="display-3">SYNERGY</h1>
          <h2>For Better Health</h2>
          
        </div>
      </div>

      <div class="container">
        <!-- Example row of columns -->
        <div class="row">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="img\mobile-doctor.jpg" alt="Card image cap">
            <div class="card-body">
              <h2>Doctor</h2>
              <p><a class="btn btn-secondary" href="doctor_list.html" role="button">View details »</a></p>
            </div>
          </div>
          <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                   <img class="card-img-top" src="img\Pharmacist.jpg" alt="Card image cap">
                      <div class="card-body">
                           <h2>Pharmacist</h2>
                          <p><a class="btn btn-secondary" href="http://localhost/hospital/pharmacist.php" role="button">View details »</a></p>
                      </div>
          </div>
        </div>
          <div class="col-md-4">
            <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="img\patient.jpg" alt="Card image cap">
                 <div class="card-body">
              <h2>Patient</h2>
            <p><a class="btn btn-secondary" href="http://localhost/hospital/patient.php" role="button">View details »</a></p>
          </div>
        </div>
       </div>
        <hr>

      </div> 

      

    </main>



    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="Jumbotron%20Template%20for%20Bootstrap_files/jquery-3.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery-slim.min.js"><\/script>')</script>
    <script src="Jumbotron%20Template%20for%20Bootstrap_files/popper.js"></script>
    <script src="Jumbotron%20Template%20for%20Bootstrap_files/bootstrap.js"></script>

    <div class="footer">
      <!-- Footer -->
<footer class="footer footer-expand-small footer-white fixed-down bg-dark">

<!-- Copyright -->
<div class="footer-copyright text-center py-3">© 2020 Copyright: TONNEY.
    
  </div>

<!-- Copyright -->

</footer>
<!-- Footer -->

</div>
  

</body>
</html>