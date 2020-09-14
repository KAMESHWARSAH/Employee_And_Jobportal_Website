
<!DOCTYPE htmlh>
<html>
<head>
	<title>Sing Form</title>
	<link rel="stylesheet" type="text/css" href="css/singupcss.css">
</head>
<body>
<!-- Sing form ---->
<section>
	<div>

<style type="text/css">
		.wth{
			width: 500px;
			margin-left: 600px;
		}

		.wth1{
			height: 870px;
			width: 450px;
			margin-left: 550px;
			border: 5px solid green;
		}
	</style>




<section class="wth">
<div>
<h2 >Modal Signup Form</h2>

<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;" > Sign Up</button>

<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content wth1" method="post" action="">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr>
       <label for="name"><b>Name</b></label>
      <input type="text" placeholder="Enter Name" name="namee" required>

        <label for="mobile"><b>Mobile</b></label>
      <input type="text" placeholder="Enter Mobile No" name="mobile" required>

        <label for="name"><b>College</b></label>
      <input type="text" placeholder="Enter College" name="college" required>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Enter Email" name="email" required>

      
       <label for="text"><b>Enrollment No</b></label>
      <input type="text" placeholder="Enter Enrollment No" name="enroll" required>


       <label for="text"><b>Date Of Birth</b></label>
      <input type="text" placeholder="Enter DOB" name="dob" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="psw" required>

      <label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="">Sign Up</button>
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

</body>
</html>