<?php

if($_GET["returnc"]==1)
{
echo '<script>
alert("Your Login ID Created Sucessfully.Please Login using your Login ID");</script>';
}

if($_GET["rc"]==1)
{
echo '<script>
alert("WRONG username or password");</script>';
}
?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>oneNOTES | SignIn</title>
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
          <li><a href="abouut.php">ABOUT</a></li>
		  <li><a href="#">Help</a></li>
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
	        <h3>Sign In </h3>
	     <form method="post" action="check.php" name="fromsignin">
				<div class="row">
				    <div class="large-12 columns">
				      <label>Username*</label>
				      <input type="text" placeholder="Username" name="username" class="txt" />
				    </div>
				</div>
				<div class="row">
				    <div class="large-12 columns">
				      <label>Password*</label>
				      <input type="password" placeholder="Password" name="password"/>
				    </div>
					</div>
					<!--+++++++++++
					++++++++++++++++
					+++++++++++<input type="checkbox" name="reme">Remember me</td>-->
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				 <input type="submit" class="medium success button" name="sub" value="Sign In"/>
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
