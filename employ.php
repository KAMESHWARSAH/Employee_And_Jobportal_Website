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
<body class="abc1">
<!-- Head section ----->
<style type="text/css">
	.abc{
		background-color:#004080;
	}

  .abc1{
    background-color:#ffa64d;
  }
</style>

<section>
	<div class="abc">
		<nav class="navbar navbar-expand-lg navbar-light ">
  <a class="navbar-brand" href="shopjob.php" style="color: white"><button>JOB IN MALL AND SHOP</button></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="navbar-brand" href="index.php" style="color: white"><button>HOME</button> <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="navbar-brand" href="student.php" style="color: white"><button> STUDENT </button></a>
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

<!--- crosel section ---->
<section>
	<div>
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/slid1.jfif" height="400px" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/slid2.jpeg" height="400px"  class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/slid3.jpg" height="400px"  class="d-block w-100" alt="...">
    </div>

    <div class="carousel-item">
      <img src="img/slid4.jpg" height="400px"  class="d-block w-100" alt="...">
    </div>

    <div class="carousel-item">
      <img src="img/slid5.jpg" height="400px"  class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
	</div>
</section>
<!--- Close crousel Section -->

<!-- 1 Company Section -------->

<style type="text/css">

  <?php
$sql = "select * from `company`";
$res = mysql_query($sql);
while ($row= mysql_fetch_array($res)) {
?>

	.imgg{
    height: 200px;
	


	}

  <?php
        }
       ?>
  .abcd1{
    width: 400px;
    height: 100px;
    border: 2px solid #00264d;

  }
   .abcd2{
    width: 200px;
    height: 100px;
    border: 2px solid #00264d;
    border-radius: 5px red;
    margin-left: 5px;
    margin-top: 0px;
    margin-right: 5px;

  
</style>
<?php
$sql = "select * from `company`";
$res = mysql_query($sql);
while ($row= mysql_fetch_array($res)) {
?>

<br>
<section class="container">
	<div >
		<div class="card text-center">
  <div class="card-header">
    <ul class="nav nav-pills card-header-pills">
      <div class="abcd1">
      <li class="nav-item">
        <b class="nav-link active" href="#"> CNAME</b>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="color:red"><b><?php echo $row[1] ?> </b></a>
      </li>
      </div>


      <div class="abcd2">
      <li class="nav-item">
        <b class="nav-link active" href="#" tabindex="-1" aria-disabled="true">POST</b>
      </li>
      <li class="nav-item">
        <b class="nav-link" href="#" style="color:red"><?php echo $row[8] ?></b>
      </li>
      </div>
       <div class="abcd2">
      <li class="nav-item">
        <b class="nav-link active" href="#" tabindex="-1" aria-disabled="true">NEEDEMP</b>
      </li>
      <li class="nav-item">
        <b class="nav-link" href="#" style="color:red"><?php echo $row[9] ?></b>
      </li>
      </div> <div class="abcd2">
      <li class="nav-item">
        <b class="nav-link active" href="#" tabindex="-1" aria-disabled="true">EDUCATION</b>
      </li>
      <li class="nav-item">
        <b class="nav-link" href="#" style="color:red"><?php echo $row[10] ?></b>
      </li>
      </div>
    </ul>
  </div>
       
  <div class="card-body imgg">

    <img  src="img/<?php echo $row[4] ?> "height="250px "   class="card-img-top" alt="...">
    <a href="https://pin-code.org.in/companies/details/madhya-pradesh/bhopal/NARMADA+CATTLE+FEED+CORPORATE+LIMITED" class="btn btn-primary">WEBSITE</a>
<!---- Test section start ------>
   
       <a href="student.php" class="btn btn-primary">TEST</a>
      
    
<!----- close Test section ------->    
    <br><br><br>
    <h5 class="card-title" ></h5>
    <p class="card-text"></p>
    
  </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<hr>


<br>
<br>
	</div>
  
</section>
<?php
        }
       ?>
<!-- 1 close section ----------> 
<hr>
<br>
<!-- Sectio 2 start =====---->
 
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
      <img src="img/amrit.jpg" height="80px" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
      <p>Hi  I am AMRIT PRIYADARSHI. I am student of 3rd year computer science. I am also a softwer devloper . You can follow me on Instagram, Twitter, Youtube,facebook.</p><br>
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
      <img src="img/jyoti.jpg" height="80px" alt="Avatar" class="w3-left w3-circle w3-margin-right" style="width:60px">
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













<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>



<?php
include('footer.php');
?>
