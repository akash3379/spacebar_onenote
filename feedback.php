<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>oneNOTES | Create</title>
    <link rel="stylesheet" href="foundation/css/foundation.css" />
    <script src="foundation/js/vendor/modernizr.js"></script>
  </head>
  <body>
  <nav class="top-bar" data-topbar role="navigation">
  <ul class="title-area">
    <li class="name">
      <h1><a href="index.php">oneNOTES</a></h1>
    </li>
     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
  </ul>
  <section class="top-bar-section">
    <!-- Right Nav Section -->
    <ul class="right">
	  <li><a href="see.php">See Notes</a></li>
      <li class="has-dropdown">
        <a href="#">User</a>
        <ul class="dropdown">
		  <li><a href="#">Help</a></li>
          <li class="active"><a href="#">Sign Out</a></li>
        </ul>
      </li>
	  <li class="active"><a href="create.php">Create Note</a></li>
	  <li class="active"><a href="#">Feedback</a></li>
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
	        <center><h3>Feedback</h3></center>
		   <form>
				<div class="large-4 medium-4 columns">
				      <div class="row collapse">
				        <label>Email(Not Mendatory)</label>
				        <div class="small-9 columns">
				          <input type="text" placeholder="Email" />
				        </div>
						<div class="small-3 columns">
				          <span class="postfix">.com</span>
				        </div>
					</div>
				</div>
				  <div class="row">
				    <div class="large-12 columns">
				      <label>Comment</label>
				      <textarea rows=5 placeholder="Comment here..."></textarea>
				    </div>
				  </div>
		   <a href="#" class="medium success button">DONE!</a>
		   </form>
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
