
<?php
include("header.php");
include("database.php");
include("function.php");
if(!login())
{
	header("location:index.php");
}
session_start();


?>
<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>oneNOTES | Menu</title>
    <link rel="stylesheet" href="foundation/css/foundation.css" />
    <script src="foundation/js/vendor/modernizr.js"></script>
    <style type="text/css">
<!--
.style1 {
	color: #00FF00;
	font-weight: bold;
	font-style: italic;
}
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
	        <center><h3>Start oneNOTING...</h3></center>
			  <div align="right">
	  <form  method="get" name="form1" action="find.php" onSubmit="return check();">
          <input name="user" type="text" placeholder="Username/Email-id"  >
          <input type="submit" name="sub" value="Find" class="opqbutton" />
        </form>
		</div>
			<p>To Create New note select "Create" & Select "See" to see your older notes.</p>
		   <b>Create Note</b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		   <a href="create.php" class="small radius button">Create</a><br/>
		   <b>Open Saved Notes</b>&nbsp;&nbsp;&nbsp;&nbsp;
		   <a href="see.php" class="small radius button">See</a><br/>
      	</div>
      </div>
    </div>
    <script src="foundation/js/vendor/jquery.js"></script>
    <script src="foundation/js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
