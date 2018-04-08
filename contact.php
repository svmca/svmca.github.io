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
<!-- FACEBOOK PLUGIN JS -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.12';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<!-- TOP WRAPPER IMAGE -->
<div class="topimage" style="background-image:url('images/contactheader.jpeg');"> 

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
				  <h1 id="wrapheadercontent">Get In Touch</h1>
				  <hr align="left">
			 </div>
		  </div>
	 </div>
  </div>
</div>

<!-- CONTENT SECTION 1 -->
<div class="jumbotron" id="leadjumbotron">
    <h2 class="h2-responsive">Where to find us</h2>
    <p class="lead">We're conveniently based in Belfast City Centre.  To protect the security of our animals, viewings are by appointment only.</p>
    <hr class="my-2">
    <p>123 Bark Way<br />Belfast</p>
    <p><iframe
      float="right"
  width="600"
  height="450"
  frameborder="0" style="border:0"
  src="https://www.google.com/maps/embed/v1/place?key=AIzaSyDftCFI-1h5SXMI8auJDaSodvubq4S8t6A
    &q=BT1 1AA" allowfullscreen>
</iframe>
    </p>

</div>

<!-- CONTENT SECTION 2 -->
  <div class="row">
    <div class="col-lg-4 col-sm-6 col-xs-12">
      <div class="thumbnail">
      <div class="fb-page" data-href="https://www.facebook.com/Almost-Home-Animal-Rescue-NI-165471356992884/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="false"><blockquote cite="https://www.facebook.com/Almost-Home-Animal-Rescue-NI-165471356992884/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/Almost-Home-Animal-Rescue-NI-165471356992884/">Almost Home Animal Rescue NI</a></blockquote></div>
      <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FAlmost-Home-Animal-Rescue-NI-165471356992884%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
    </div>
  </div>

    <div class="col-lg-4 col-sm-6 col-xs-12">
      <div class="thumbnail">
        <img src="https://images.unsplash.com/photo-1452441271666-5d998aa2f6cc">
        <div class="caption">
          <h3>Thumbnail label</h3>
          <p>...</p>
          <p><a href="#" class="btn btn-primary" role="button">Button</a> </p>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-sm-6 col-xs-12">
      <div class="thumbnail">
        <img src="https://images.unsplash.com/photo-1443806798002-651c462956ff">
        <div class="caption">
          <h3>Thumbnail label</h3>
          <p>...</p>
          <p><a href="#" class="btn btn-primary" role="button">Button</a> </p>
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