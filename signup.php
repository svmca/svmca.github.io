<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pet Rescue NI</title>
	
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:400,700" rel="stylesheet">
	<script defer src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>

<body>
<!-- TOP WRAPPER IMAGE -->
<div class="topimage" style="background-image:url('images/loginheader.jpeg');"> 

  <!-- NAV BAR -->
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.php"><span><img class="logo" src="images/petsbest-logo.png"></span>Pet Rescue NI</a>
      </div>

      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="gallery.php">Available Pets</a></li>
          <li><a href="adopt.php">Apply to Adopt</a></li>
          <li class="dropdown">
            <a href="support.php" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Support our Work<span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="support.php">Events</a></li>
              <li><a href="support.php#donate">Donate</a></li>
            </ul>
          </li>
          <li><a href="contact.php">Contact Us</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="login.php">Staff Log In <i class="fas fa-sign-in-alt"></i></a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container -->
  </nav>
<!-- WRAPPER TEXT -->
  <div class="container">
	 <div class="topimage">
		  <div class="col-lg-12">
			 <div id="content">
				  <h1 id="wrapheadercontent">Sign Up</h1>
				  <hr align="left">
              <form class="signup" action="includes/signup.inc.php" method="POST">
                  <input type="text" class="form-control" name="first" placeholder="First Name">
                  <input type="text" class="form-control" name="last" placeholder="Last Name">
                  <input type="text" class="form-control" name="email" placeholder="Email">
                  <input type="text" class="form-control" name="uid" placeholder="Username">
                  <input type="password" class="form-control" name="pwd" placeholder="Password">
                  <button type="submit" class="btn-warning" name="submit">Sign up</button>
            </form>
			 </div>
		  </div>
	 </div>
  </div>
</div>

<footer id="myFooter">
  <div class="container2">
    <div class="fullrow">
      <div class="col-sm-3">
        <h2 class="logo"><a href="index.php" <span> <img class="logoftr" src="images/petsbest-logo.png"></span></a></h2>
      </div>
      <div class="col-sm-2">
       <h5>Support Us!</h5>
        <ul>
          <li><a href="support.php">Events</a></li>
          <li><a href="support.php#donate">Donation Options</a></li>              
        </ul>
          <form action="https://www.paypal.com/cgi-bin/webscr" method="post">
            <input type="hidden" name="business" value="petrescueni@test.org.uk">   
            <input type="hidden" name="cmd" value="_donations"> 
            <input type="hidden" name="item_name" value="Pet Rescue NI">      
            <input type="hidden" name="item_number" value="Website Donation">
            <input type="hidden" name="currency_code" value="GBP"> 
            <input type="image" name="submit" src="https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif" alt="Donate">
            <img alt="" width="40" height="40" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif">
         </form> 
      </div>
      <div class="col-sm-2">
        <h5>Adoptions</h5>
        <ul>
          <li><a href="#">Available Pets</a></li>
          <li><a href="#">Apply to Adopt</a></li>
        </ul>
      </div>
      <div class="col-sm-2">        <h5>Contact Us</h5>
          <ul>
            <li>123 Bark Way</li>
            <li>Belfast</li>
            <li>BT1 1AA</li>
            <li></li>
            <li>(028) 9012 3456</li>
          </ul>
        </div>
      <div class="col-sm-3">
        <div class="social-networks">
            <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
            <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
            <a href="#" class="google"><i class="fab fa-google-plus-g"></i></a>
        </div>
        <div>
        <a href="contact.php" type="button" class="btn btn-default">Contact us</a> 

        </div>
      </div>
    </div>
  </div>
  <div class="footer-copyright">
    <p>© 2018 Pet Rescue NI</p>
  </div>
</footer>

<!-- SCRIPT LINKS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>