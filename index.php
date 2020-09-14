<?php
include('dataconnect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Job And Emoloyee</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" media="screen and (max-width: 1170px)" href="css/phone.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Bree+Serif&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<style type="text/css">
    .clobg{
        background-color: #ffa64d;
    }
</style>
<body class="clobg">
    <nav id="navbar">
        <div id="logo">
            <img src="logo.png" alt="MyOnlineMeal.com">
        </div>
        <ul>
            <li class="item "><a href="#home">Home</a></li>
            <li class="item"><a href="#services-container">Services</a></li>
            <li class="item"><a href="#client-section">Our Clients</a></li>
            <li class="item"><a href="#contact">Contact Us</a></li>

        </ul>

        <ul>
            <li class="item"><a href="student.php">STUDENT</a></li>
            <li class="item"><a href="adminlogin.php">ADMIN</a></li>
           

        </ul>
       
    </nav>

    <section id="home">
        <h1 class="h-primary">Welcome to Job And Employee</h1>
        <p> </p>
        <p></p>
 <!--- Start our service sevtion ---------------------------------->       
    </section>

    <section id="services-container">
        <h1 class="h-primary center">Our Services</h1>
        <div id="services">
            <a href="compjob.php">
            <div class="box">
                <img src="img/images.jfif" alt="">
                <h2 class="h-secondary center">EMPLOYEE</h2>
                <p class="center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem, culpa suscipit error
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et qui, repudiandae similique nam, recusandae quidem ab asperiores ex, aut fugit labore veritatis facere?
                    sint delectus ab dolorum nam. Debitis facere, incidunt voluptates eos, mollitia voluptatem iste sunt
                    voluptas beatae facilis labore, omnis sint quae eum.</p>
            </div>
            </a>
            <a href="employ.php">
            <div class="box">
                <img src="img/job.jfif" alt="">
                <h2 class="h-secondary center">JOB</h2>
                <p class="center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem, culpa suscipit error
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Unde laudantium a incidunt animi ad, ab dignissimos vero? Unde numquam odit repudiandae perferendis nisi.

                    sint delectus ab dolorum nam. Debitis facere, incidunt voluptates eos, mollitia voluptatem iste sunt
                    voluptas beatae facilis labore, omnis sint quae eum.</p>
            </div>
            </a>
            <div class="box">
                <img src="img/3.png" alt="">
                <h2 class="h-secondary center">sweeper</h2>
                <p class="center">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem, culpa suscipit error
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Necessitatibus provident fugiat aliquam minima at explicabo. Earum eveniet quaerat, sunt molestias nesciunt quas! Quis.
                    sint delectus ab dolorum nam. Debitis facere, incidunt voluptates eos, mollitia voluptatem iste sunt
                    voluptas beatae facilis labore, omnis sint quae eum.</p>
            </div>
        </div>
</section>



<!-- close our services --------------------------------------------------------->
    <section id="client-section">
        <h1 class="h-primary center">College And Placement</h1>
        
       

</section>
<!-- College section Placement ----->
<style>
.checked {
  color: orange;
}
</style>
<?php
$sql = "select * from `college`";
$res = mysql_query($sql);
while ($row= mysql_fetch_array($res)) {
?>
<section class="container">
<div>
  <div class="row row-cols-4 row-cols-md-1">
    <div class="col mb-1">
      <div class="card">
        <img src="img/<?php echo $row[6] ?>" height="300px" class="card-img-top" alt="">
        <div class="card-body">
          <h5 class="card-title"><b><?php echo $row[1] ?></b></h5>
          <p class="card-text"><?php echo $row[5] ?></p>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star checked"></span>
          <span class="fa fa-star "></span>
        </div>
    </div>
</div>

</style>

</section>
           <?php
     }
       ?>
       <br>
<!--close  College placement section close ----> 
</section>


<section id="client-section">
  <h1 class="h-primary center">Our Clients</h1>
    <div id="clients">
      <div class="client-item">
        <img src="img/logo1.png" alt="Our Client">
      </div>
      <div class="client-item">
        <img src="img/logo2.png" alt="Our Client">
      </div>
      <div class="client-item">
        <img src="img/logo4.png" alt="Our Client">
      </div>
      <div class="client-item">
        <img src="img/logo3.png" alt="Our Client">
      </div>
        </div>
</section>

    <section id="contact">
        <h1 class="h-primary center">Contact Us</h1>
        <div id="contact-box">
            <form action="">
                <div class="form-group">
                    <label for="name">Name: </label>
                    <input type="text" name="name" id="name" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="email">Email: </label>
                    <input type="email" name="name" id="email" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number: </label>
                    <input type="phone" name="name" id="phone" placeholder="Enter your phone">
                </div>
                <div class="form-group">
                    <label for="message">Message: </label>
                    <textarea name="message" id="message" cols="30" rows="5"></textarea>
                </div>

                <div class="form-group">
                    
                    <input type="submit" id="submit" cols="30" ></input>
                </div>
            </form>
        </div>
    </section>

 <!--- about developer section --->
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

<!-- Close Devloper section ----------------->



    <footer>
        <div class="center">
            
        </div>
    </footer>
</body>

</html>
<?php
include('footer.php');
?>
  