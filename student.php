<?php 
include('dataconnect.php');

 ?>
<!DOCTYPE html>
<html>
<head>
  <title>  company Employee </title>


  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" media="screen and (max-width: 1170px)" href="css/phone.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Bree+Serif&display=swap" rel="stylesheet">

   <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body class="abc">
<!-- Head section ----->
<style type="text/css">
  .abc{
    background-color: #ffa64d;
  }

  .abc1{
    background-color: #ff9933;
  }
</style>

<section>
  <div class="abc1">
    <nav class="navbar navbar-expand-lg navbar-light ">
  <a class="navbar-brand" href="index.php" style="color: white"><button>HOME</button></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="navbar-brand" href="employ.php" style="color: white"><button>COMPANY</button><span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="navbar-brand"  style="color: white"><button onclick="document.getElementById('id02').style.display='block'" style="width:auto;">STUDENT LOGIN</button></a>
      </li>
      
      <li class="nav-item">
        <a class="navbar-brand"  style="color: white"><button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">STUDENT SINGUP</button></a>
      </li>
    
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: white">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#" >Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true" style="color: white">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit" style="color: white">Search</button>
    </form>
  </div>
</nav>
  </div>
</section>

<!-- Head section ----->

<!-- Sing form ---->
<section>
  <div>

<style type="text/css">
    .wth{
      width: 500px;
      margin-left: 600px;
    }

    .wth1{
      margin-top: 100px;
      height: 550px;
      width: 450px;
      margin-left: 550px;
      border: 5px solid green;
    }
  </style>
<section class="wth">
<div>
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content wth1" method="post" action="singup1.php">
    <div class="container">
      <h1>Sign Up..</h1>
      <p>Please fill in this form to create an account.</p>
      
    <div class="row">
         <div class="col">
          <label for="name"><b>Name</b></label>
          <input type="text" class="form-control" placeholder="Enter Name" name="namee">
        </div>
      <div class="col">
        <label for="name"><b>MOBILE NO</b></label>
       <input type="text" class="form-control" placeholder="Enter Mobile no" name="mobile">
       </div>
     </div>

     <div class="row">
         <div class="col">
          <label for="name"><b>College</b></label>
          <input type="text" class="form-control" placeholder="Enter College" name="college">
        </div>
      <div class="col">
        <label for="name"><b>Email</b></label>
       <input type="text" class="form-control" placeholder="Enter Email" name="email">
       </div>
     </div>

     <div class="row">
         <div class="col">
          <label for="name"><b>Enrollment No</b></label>
          <input type="text" class="form-control" placeholder="Enter Enrollment No" name="enroll">
        </div>
      <div class="col">
        <label for="name"><b>Date Of Birth</b></label>
       <input type="text" class="form-control" placeholder="Enter Date Of Birth" name="dob">
       </div>
     </div>


     <div class="row">
         <div class="col">
          <label for="name"><b>Password</b></label>
          <input type="text" class="form-control" placeholder="Enter Password" name="psw">
        </div>
      <div class="col">
       
       </div>
     </div>



      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="btn btn-primary">Cancel</button>
        <button type="submit" class="btn btn-primary">Sign Up</button>
      </div>
    </div>
  </form>
</div>
</div>
</section>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
  </div>
</section>
<!-- Close sing form-->



<!-- student login section start ----->
<section class="wth">
<div>
<div id="id02" class="modal">
  <span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content wth1" action="login1.php" method="post" >
    <div class="container">
      <h1>Login Here</h1>
       <div class="row">
      <div class="col">
        <label for="name"><b>MOBILE NO</b></label>
       <input type="text" class="form-control" name="mobile1" placeholder="Enter Mobile no" >
       </div>
     </div>
    <div class="row">
         <div class="col">
          <label for="name"><b>Password</b></label>
          <input type="Password" class="form-control" name="psw1" placeholder="Enter Password" >
        </div>
      <div class="col">
       
       </div>
     </div>
    <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>
      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id02').style.display='none'" class="btn btn-primary">Cancel</button>
        <button type="submit" class="btn btn-primary">Login</button>
      </div>
    </div>
  </form>
</div>
</div>
</section>

<script>
// Get the modal
var modal = document.getElementById('id02');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
  </div>
</section>
<!-- Close sing form-->

<!-- close student section ------------>

<!--- Devloper section  start ---->
 
<style type="text/css">
  .backcol{
           
            background-color:#ffd11a;
            }

            .mar{
                margin-left: 100px;
            }

</style>

</section > 
 <h1 class="h-primary center">About Devloper Section </h1>
<div class="container backcol">
    <div class="row row-cols-1 row-cols-md-2">
  <div class="col mb-4">
   <div class="w3-container">
  <h2>BACK END DEVLOPER</h2>

  <div class="w3-card-4 mar" style="width:70%">
    <header class="w3-container w3-light-grey">
      <h3>KAMESHWAR SAH</h3>
    </header>
    <div class="w3-container">
      <p style="color:green">10 new friend request</p>
      <hr>
      <img src="img/kam.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
      <p>Hi  I am kameshwar sah . I am student of 3rd year computer science. I am also a softwer devloper . You can follow me on Instagram, Twitter, Youtube,facebook. </p><br>
    </div>
    <button class="w3-button w3-block w3-dark-grey">+ Connect</button>
  </div>
</div>
  </div>
  <div class="col mb-4">
    <div class="w3-container">
  <h2>BACK END DEVLOPER </h2>

  <div class="w3-card-4" style="width:70%">
    <header class="w3-container w3-light-grey">
      <h3>AMRIT PRIYADARSHI</h3>
    </header>
    <div class="w3-container">
      <p style="color:green"> 1 new friend request</p>
      <hr>
      <img src="img/amrit.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
      <p>Hi  I am AMRIT PRIYADARSHI. I am student of 3rd year computer science. I am also a softwer devloper . You can follow me on Instagram, Twitter,facebook.</p><br>
    </div>
    <button class="w3-button w3-block w3-dark-grey">+ Connect</button>
  </div>
</div>
  </div>
  <div class="col mb-4">
    <div class="w3-container">
  <h2>FONT END DEVLOPER</h2>

  <div class="w3-card-4 mar" style="width:70%">
    <header class="w3-container w3-light-grey">
      <h3>JYOTI KUMARI</h3>
    </header>
    <div class="w3-container">
      <p style="color:green">1000 new friend request</p>
      <hr>
      <img src="img/jyoti.jpg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
      <p>Hi  I am JYOTI . I am student of 3rd year computer science. I am also a softwer devloper . You can follow me on Instagram, Twitter, Youtube,facebook.</p><br>
    </div>
    <button class="w3-button w3-block w3-dark-grey">+ Connect</button>
  </div>
</div>
  </div>
  <div class="col mb-4">
   <div class="w3-container">
  <h2>FONT END DEVLOPER</h2>

  <div class="w3-card-4" style="width:70%">
    <header class="w3-container w3-light-grey">
      <h3>RANJANI KUMARI</h3>
    </header>
    <div class="w3-container">
      <p style="color:green">500 new friend request</p>
      <hr>
      <img src="img/ranjani.jpeg" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
      <p>Hi  I am RANJANI. I am student of 3rd year computer science. I am also a softwer devloper . You can follow me on Instagram, Twitter, Youtube,facebook.</p><br>
    </div>
    <button class="w3-button w3-block w3-dark-grey">+ Connect</button>
  </div>
</div>
</div>
    
</div>
</section>








<!-- footer section start ----->
<section>
  <div>
    <style type="text/css">
  .abc{
    
  }

</style>
<section class="abc">
  
<!-- Footer -->
<div class="abcd">

<footer class="page-footer font-small mdb-color lighten-3 pt-4">

  <!-- Footer Links -->
  <div class=" text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 mr-auto my-md-4 my-0 mt-4 mb-1">

        <!-- Content -->
        <h5 class="font-weight-bold text-uppercase mb-4">Footer Content</h5>
        <p>Here you can use rows and columns to organize your footer content.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit amet numquam iure provident voluptate
          esse
          quasi, veritatis totam voluptas nostrum.</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 mx-auto my-md-4 my-0 mt-4 mb-1">

        <!-- Links -->
        <h5 class="font-weight-bold text-uppercase mb-4" ><a href=mycv.php target="black"> <button>About</button> </a></h5>

        <ul class="list-unstyled">
          <li>
            <p>
              <a href="#!">PROJECTS</a>
            </p>
          </li>
          <li>
            <p>
              <a href=mycv.php >ABOUT US</a>
            </p>
          </li>
          <li>
            <p>
              <a href="#!">BLOG</a>
            </p>
          </li>
          <li>
            <p>
              <a href="#!">AWARDS</a>
            </p>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 mx-auto my-md-4 my-0 mt-4 mb-1">

        <!-- Contact details -->
        <h5 class="font-weight-bold text-uppercase mb-4">Address</h5>

        <ul class="list-unstyled">
          <li>
            <p>
              <i class="fas fa-home mr-3"></i> India Bhopal, Corporat college</p>
          </li>
          <li>
            <p>
              <i class="fas fa-envelope mr-3"></i> javacore54@gmail.com</p>
          </li>
          <li>
            <p>
              <i class="fas fa-phone mr-3"></i> 9123474879</p>
          </li>
          <li>
            <p>
              <i class="fas fa-print mr-3"></i> 7079446350</p>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none">

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 text-center mx-auto my-4">

        <!-- Social buttons -->
        <h5 class="font-weight-bold text-uppercase mb-4">Developed BY Kameshar</h5>

        <!-- Facebook -->

        <style type="text/css">
          .ft{
            float: left;
          }
        </style>
       <div ft>
          <img src="img/comp11.jpg" style="border:7px double black; " height="250px" width="142px" >
        
       </div>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>


</footer>
<!-- Footer -->
</div>
</section> 
<script type="text/javascript" src ="js/bootstrap.js"></script>
  <script type="text/javascript" src="js/jquery.js"></script>

</body>
</html>
  </div>
</section>
<!-- footer section close ------>









<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
