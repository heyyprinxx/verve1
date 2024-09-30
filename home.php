<?php
session_start(); 
if(!isset( $_SESSION["user"]))
{
    header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<style>
    img{
      border-radius:25px; 
      padding:2px;
    }
    .navbar-brand{
        color:white;
        font-family: 'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serif;
    
    }
    .navbar-brand:hover{
       color: rgb(255, 255, 255);
    }
    .nav-link{
        color:white;
    }
    .nav-link:hover{
       color: rgba(255, 255, 255, 0.676);
    }

.container{
    font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
    width:1900px;
    height:100px;
    border-radius:8px;
    margin-top:15px;
}
.head2{
  font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
  font-weight:700;
  margin-left: 6px;
}
.card-img-top {
      width: 120px; 
      height: 120px;
      object-fit: cover;
      border-radius: 50%;
      margin: 0 auto;
    }
    .card {
      text-align: center;
      border: none;
    }
    .row{
      font-family:Arial, Helvetica, sans-serif;
    }
   .last{
    background-image: url(last.png);
    background-position:center;
    background-size: cover;
    height:80vh;
    padding:30px;
    font-family:'Trebuchet MS', 'Lucida Sans Unicode', 'Lucida Grande', 'Lucida Sans', Arial, sans-serifs;
   }
   p{
    font-size: 20px;
   }
</style>
</head>
<body>

 <!--creating navigation bar-->
 <nav class="navbar navbar-expand-lg bg-dark border-body">
        <div class="container-fluid">
          <img src="logo.png"  width="90" height="70">
          <a class="navbar-brand" href="online.html"><b>Healthy_Wealthy Hub </b></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" aria-controls="navbarContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button> 
          <div class="collapse navbar-collapse" id="navbarContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item active">
                <a class="nav-link" href="available.html">Appointment Booking</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="find.php">Search Doctors Here</a>
              </li>
            </ul>
            </ul>
          </div>
        </div>
      </nav> 
    <!--navigation bar ends-->  

 <div class="container">
    <h1><website name></h1>
    <a href="logout.php" class="btn btn-warning">Logout</a>
 </div><br><br>

 <div class="head2">
  <h2><b>Consult top doctors online for any health concern</b></h2>
 </div>

 <!--album card starts here-->
 <div class="container mt-5">
    <div class="row">
      <!-- Card 1 -->
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="a1.avif" class="card-img-top" alt="Image 1">
          <div class="card-body">
            <h5 class="card-title">Acne or skin issues</h5>
            <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="consult_acne.php">
  CONSULT NOW
</a>
          </div>
        </div>
      </div>
      <!-- Card 2 -->
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="a2.jpg" class="card-img-top" alt="Image 2">
          <div class="card-body">
            <h5 class="card-title">Cold, cough or fever</h5>
            <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="consult_cold.php">
  CONSULT NOW
</a>
          </div>
        </div>
      </div>
      <!-- Card 3 -->
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="a3.jpg" class="card-img-top" alt="Image 3">
          <div class="card-body">
            <h5 class="card-title">Stomach and Digestion</h5>
            <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="consult.php">
  CONSULT NOW
</a>
          </div>
        </div>
      </div>
    </div>
  </div><br><br><br><br>

  <!--SECOND ROW-->
<div class="container mt-5">
    <div class="row">
      <!-- Card 1 -->
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="a4.jpg" class="card-img-top" alt="Image 1">
          <div class="card-body">
            <h5 class="card-title">Depression and Anxiety</h5>
            <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="consult_anxiety.php">
  CONSULT NOW
</a>
          </div>
        </div>
      </div>
      <!-- Card 2 -->
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="a5.webp" class="card-img-top" alt="Image 2">
          <div class="card-body">
            <h5 class="card-title">Child not feeling well</h5>
            <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="consult_child.php">
  CONSULT NOW
</a>
          </div>
        </div>
      </div>
      <!-- Card 3 -->
      <div class="col-md-4 mb-4">
        <div class="card">
          <img src="a6.jpg" class="card-img-top" alt="Image 3">
          <div class="card-body">
            <h5 class="card-title">Period problem</h5>
            <a class="link-offset-2 link-offset-3-hover link-underline link-underline-opacity-0 link-underline-opacity-75-hover" href="consult_pp.php">
  CONSULT NOW
</a>
          </div>
        </div>
      </div>
    </div>
  </div><br><br><br><br><br><br><br><br>


  <div class="last">
    <h2><b>CONTACT</b></h2><br><br>
    <p>For any query contact us through the following details given below :</p><br>
    <p>Phone no : </p><br>
    <p>Email id : </p><br>
    
 </div>

  <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script> 
</body>
</html>