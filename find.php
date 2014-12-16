<?php
include("header.php");
include("database.php");
include("function.php");
session_start();


$txt=$_GET["user"];


$user=$_SESSION["username"];

$s="SELECT * FROM  `signup` WHERE  `user` LIKE '%$txt%' ";
$rc=mysql_query($s);

$sss=0;


if(login())
{
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
	        
			 
	<br><br>
  
		 
		   <form  method="get" name="form" action="find.php">
          <input name="txt" type="text" placeholder="Username/Email-id" style="width:89%; height: 2.3125rem;  "  >
          <input type="submit" name="sub" value="Find" class="medium success button"  />
        </form>
		</div>
		 <h4>Usernames/Email-id...</h4>
			<?php
			
			while($row=mysql_fetch_array($rc))
            {
					echo "<a href='findsee.php? id=".$row["user"]."'>".$row["user"]."</a>";
					echo "<br>";
					$sss++;
					
			}
			if($sss==0)
			echo "No Result";
			?>
			
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
     
			<br><br>
  
		 
		   <form  method="get" name="form" action="find.php">
          <input name="txt" type="text" placeholder="Username/Email-id" style="width:89%; height: 2.3125rem;  "  >
          <input type="submit" name="sub" value="Find" class="medium success button"  />
        </form>
	
      </div>
	 
    </div>
    
    <div class="row">
      <div class="large-12 columns">
      	<div class="panel">
	      <h4>Usernames/Email-id...</h4>
			<?php
			
			while($row=mysql_fetch_array($rc))
            {
					echo "<a href='findsee.php? id=".$row["user"]."'>".$row["user"]."</a>";
					echo "<br>";
					$sss++;
					
			}
			if($sss==0)
			echo "No Result";
			?>
			
			
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



<?php
}
?>