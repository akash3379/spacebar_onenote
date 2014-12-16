<?php
include("header.php");
include("database.php");
include("function.php");
session_start();
$sub=$_GET["subject"];
$id=$_SESSION["txt"];
$search="SELECT * FROM $id WHERE `subject`='$sub'";
$rc=mysql_query($search);
$row=mysql_fetch_array($rc);

if(login())
{
?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>oneNOTES | Explore</title>
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
	  <li 	><a href="see.php">See Notes</a></li>
	  <li class="active"><a href="create.php">Create Note</a></li>
      <li class="has-dropdown">
        <a href="#" class="style1"><font size="3">Hi.<?php echo $_SESSION["username"]; ?></font></a>
        <ul class="dropdown">
		  <li><a href="#">Help</a></li>
          <li class="active"><a href="signout.php">Sign Out</a></li>
        </ul>
      </li>
	  
	
    </ul>
    <!-- Left Nav Section -->
    <ul class="left">
      <li><a href="menu.php">Home</a></li>
    </ul>
  </section>
</nav>
	<div class="row">
      <div class="large-12 columns">
      	<div class="panel">
	        <center><h3><b><?php echo $id; ?>'s Notes...</h3></center></b>
			<script src="foundation/js/vendor/jquery.js"></script>
    <script src="foundation/js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
			
			
			
			
<div class="row">
      <div class="large-12 columns">
      	<div class="panel">
	        
		   
				  <div class="row">
				    <div class="large-4 medium-4 columns">
				      <label>Name</label>
					

					  
				      <input type="text" value="<?php echo $row['subject']; ?>" name="subject" />
				    </div>
				  </div>
				  <div class="row">
				    <div class="large-12 columns">
				      <label>Content</label>
				      <textarea rows="25"  name="note"><?php echo $row['note']; ?></textarea>
				    </div>
				  </div>
				    
		 <br/></center>
      	</div>
      </div>
    </div>









<?php


}
















else{
?>


<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>oneNOTES | Welcome</title>
    <link rel="stylesheet" href="foundation/css/foundation.css" />
    <script src="foundation/js/vendor/modernizr.js"></script>
    <style type="text/css">
<!--
.style2 {font-size: 12%}
-->
    </style>
	<script language="javascript">
function check()
{

 if(document.form1.user.value=="")
  {
    alert("Plese Enter Username/Email-id");
	document.form1.user.focus();
	return false;
  }
 }
	
	</script>
</head>
  <body>
  <nav class="top-bar" data-topbar role="navigation">
  <ul class="title-area">
    <li class="name">
      <h1><a href="index.php">oneNOTES</a></h1>
    </li>
     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="index.php"><span>Menu</span></a></li>
  </ul>
  <section class="top-bar-section">
    <!-- Right Nav Section -->
    <ul class="right">
	  <li><a href="signin.php">Sign In</a></li>	
      <li class="has-dropdown">
        <a href="#">New?</a>
        <ul class="dropdown">
          <li><a href="about.php">ABOUT</a></li>
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
	<div class="row">
      <div class="large-12 columns">
      	<div class="panel">
	        <center><h3><b><?php echo $_SESSION["txt"]; ?>'s Notes...</h3></center></b>
			<script src="foundation/js/vendor/jquery.js"></script>
    <script src="foundation/js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
			
<div class="row">
      <div class="large-12 columns">
      	<div class="panel">
	       
		   
				  <div class="row">
				    <div class="large-4 medium-4 columns">
				      <label>Name</label>
					

					  
				      <input type="text" value="<?php echo $row['subject']; ?>" name="subject" />
				    </div>
				  </div>
				  <div class="row">
				    <div class="large-12 columns">
				      <label>Content</label>
				      <textarea rows="25"  name="note"><?php echo $row['note']; ?></textarea>
				    </div>
				  </div>
				    
		 <br/></center>
      	</div>
      </div>
    </div>




			


<?php
}
?>