

<?php
include("header.php");
include("database.php");
include("function.php");
if(login())
{
	header("location:menu.php");
}
session_start();



?>


<!doctype html>
<html class="no-js" lang="en">
  <head>
  
 <script language="javascript">
function check()
{
if(document.form1.name.value=="")
  {
    alert("Plese Enter Your Name");
	document.form1.name.focus();
	return false;
  }

 if(document.form1.user.value=="")
  {
    alert("Plese Enter Username");
	document.form1.user.focus();
	return false;
  }
 
 if(document.form1.pass.value=="")
  {
    alert("Plese Enter Your Password");
	document.form1.pass.focus();
	return false;
  } 
  if(document.form1.cpass.value=="")
  {
    alert("Plese Enter Confirm Password");
	document.form1.cpass.focus();
	return false;
  }
  if(document.form1.pass.value!=document.form1.cpass.value)
  {
    alert("Confirm Password does not matched");
	document.form1.cpass.focus();
	return false;
  }
  


 
  if(document.form1.email.value=="")
  {
    alert("Plese Enter your Email Address");
	document.form1.email.focus();
	return false;
  }
 
  }
  
</script>
  
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>oneNOTES | SignUp</title>
    <link rel="stylesheet" href="foundation/css/foundation.css" />
    <script src="foundation/js/vendor/modernizr.js"></script>
  </head>
  <body>
  <nav class="top-bar" data-topbar role="navigation">
  <ul class="title-area">
    <li class="name">
      <h1><a href="#">oneNOTES</a></h1>
    </li>
     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>
  <section class="top-bar-section">
    <!-- Right Nav Section -->
    <ul class="right">
	  <li><a href="signin.php">Sign In</a></li>
      <li class="has-dropdown">
        <a href="#">New?</a>
        <ul class="dropdown">
          <li><a href="about.php">ABOUT</a></li>
		  <li><a href="help.php">Help</a></li>
          <li class="active"><a href="signup.php">Sign Up</a></li>
        </ul>
      </li>
	  <li class="active"><a href="signup.php">Sign Up</a></li>
	
    </ul>

    <!-- Left Nav Section -->
    <ul class="left">
      <li><a href="index.php">Home</a></li>
    </ul>
  </section>
</nav>
    <center>
    <div class="row">
      <div class="large-12 columns">
      	<div class="panel">
	        <h3>
			<?php
			
			
			if($_GET["rc"]==1)
{
echo "Username is not available Plz take another one<br>";
}
			?>Sign Up! </h3>
	    <form name="form1" method="post" action="insert.php" onSubmit="return check();">
				  <div class="row">
				    <div class="large-12 columns">
				      <label>Name*</label>
				      <input type="text" name="name" class="txt" placeholder="First Name                                       Middle Name                                         Last Name" />
				    </div>
				  </div>
				  <div class="row">
				    <div class="large-4 medium-4 columns">
				      <label>Username*</label>
				      <input type="text" placeholder="Username" name="user" class="txt" />
				    </div>
				    <div class="large-4 medium-4 columns">
				      <label>Password*</label>
				      <input type="password" placeholder="Password" name="pass"/>
				    </div>
					<div class="large-4 medium-4 columns">
				      <label>Confirm Password*</label>
				      <input type="password" placeholder="Confirm Password" name="cpass"/>
				    </div>
				<div>
				<div class="row">
					<div class="large-4 medium-4 columns">
				      <label>City</label>
				      <input type="text" placeholder="City" name="city" class="txt"/>
				    </div>
				    <div class="large-4 medium-4 columns">
				      <label>Phone</label>
				      <input type="text" name="phone" placeholder="Phone/(ISD CODE)Telephone" class="txt"/>
				    </div>
				   <div class="large-4 medium-4 columns">
				      <label>Email-Id*</label>
				      <input type="text" name="email" placeholder="Email-Id" class="txt"/>
				    </div>
				       
				      </div>
				    </div>
				  </div>
				 
				   <input type="submit" class="medium success button" name="subsignup" value="Sign In"/>
				</form>   
	   
      	</div>
      </div>
    </div>
	</center>
    </div>
    <script src="foundation/js/vendor/jquery.js"></script>
    <script src="foundation/js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
