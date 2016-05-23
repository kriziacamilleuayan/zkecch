<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">

<title>Add to Cart</title>
<link rel="icon" href="favicon.png" type="image/png">
<link rel="shortcut icon" href="favicon.ico" type="img/x-icon">

<link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,800italic,700italic,600italic,400italic,300italic,800,700,600' rel='stylesheet' type='text/css'>

<link href="css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<link href="css/style1.css" rel="stylesheet" type="text/css">
<link href="css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="css/responsive.css" rel="stylesheet" type="text/css">
<link href="css/animate.css" rel="stylesheet" type="text/css">

<!--[if IE]><style type="text/css">.pie {behavior:url(PIE.htc);}</style><![endif]-->

<script type="text/javascript" src="js/jquery.1.8.3.min.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script type="text/javascript" src="js/jquery-scrolltofixed.js"></script>
<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
<script type="text/javascript" src="js/jquery.isotope.js"></script>
<script type="text/javascript" src="js/wow.js"></script>
<script type="text/javascript" src="js/classie.js"></script>


<!--[if lt IE 9]>
    <script src="js/respond-1.1.0.min.js"></script>
    <script src="js/html5shiv.js"></script>
    <script src="js/html5element.js"></script>
<![endif]-->


</head>
<body>

<nav class="main-nav-outer" id="test" style="background-color: rgb(212, 192, 180)"><!--main-nav-start-->
	<div class="container">
        <div id="custom-search-input" class="col-sm-2 pull-right" style="margin-top: 35px">
                <div class="input-group">
                    <input type="text" class="form-control input-sm" placeholder="Search" />
                    <span class="input-group-btn">
                        <button class="btn btn-info btn-sm" type="button" style="background-color: pink">
                            <i class="glyphicon glyphicon-search"></i>
                        </button>
                    </span>
                </div>
            </div>
        <ul class="main-nav">
        	<li></li>
            <li><a href="{{URL::to('/')}}">Home</a></li>
            <li><a href="{{URL::to('/')}}">Services</a></li>
            <li><a href="{{URL::to('/')}}">Gallery</a></li>
            <li class="small-logo"><a href="{{URL::to('/')}}"><img src="img/small-logo.png" alt=""></a></li>
            <li><a href="{{URL::to('/')}}">Team</a></li>
            <li><a href="{{URL::to('/')}}">Contact</a></li>
            
        </ul>
        <a class="res-nav_click" href="#"><i class="fa-bars"></i></a>
    </div>
</nav><!--main-nav-end-->
<div class="container">
<br><br>
<h1>Add to Cart</h1>
<br><br>

<div class="container">
<div class="table-responsive text-left">          
  <table class="table">
    <thead>
      <tr>
        <th>Item</th>
        <th>Description</th>
        <th>Price</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Item Name</td>
        <td>Item Description</td>
        <td>5000.00</td>
      </tr>
    </tbody>
  </table>
  </div>
  <br>
  <p class="text-right">Sub-Total: <b>Php 5000.00</b></p>
  
  <div class="text-left">
  <p><b>Shipping fee*</b></p>
    <div class="radio">
        <label><input type="radio" name="shippingfee">Php 100.00 - NCR</label>
    </div>
    <div class="radio">
        <label><input type="radio" name="shippingfee">Php 150.00 - Province</label>
    </div>
  </div>
  <br>
  <p class="text-right">_________________________________________</p>
  <p class="text-right">Total: <b>Php 5100.00</b></p>
  <br><br>

<div class="form-group col-sm-6 text-left">
  <label for="usr">Full Name*:</label>
  <input type="text" class="form-control" id="usr">
</div>
<div class="col-sm-4"></div>
<div class="form-group col-sm-6 text-left">
  <label for="usr">Contact Number*:</label>
  <input type="nummber" class="form-control" id="usr">
</div>
<div class="form-group col-sm-6 text-left">
  <label for="usr">Email*:</label>
  <input type="email" class="form-control" id="usr">
</div>
<div class="form-group col-sm-6 text-left">
  <label for="usr">Address*:</label>
  <input type="text" class="form-control" id="usr">
</div>
  <div class="text-left col-sm-6 form-group">
    <br>
  <p><b>Delivery Mode*</b></p>
    <div class="radio">
        <label><input type="radio" name="deliverymode">Meet-up</label>
    </div>
    <div class="radio">
        <label><input type="radio" name="deliverymode">Shipping</label>
    </div>
  </div>
<br><br>
<label class="checkbox-inline"><input type="checkbox" value="">'I have read and agree to the Terms and Conditions'*</label>
  <br><br>
<button type="button" class="btn btn-info btn-lg link animated fadeInUp delay-1s" style="margin-left:40px">Proceed to Checkout</button>
  <br><br><br><br>

</div>

</div>


<footer class="footer">
    <div class="container">
        <div class="footer-logo"><a href="#"><img src="img/footer-logo.png" alt=""></a></div>
        <span class="copyright">Copyright © 2015 | <a href="http://bootstraptaste.com/">Bootstrap Themes</a> by BootstrapTaste</span>
    </div>
    <!-- 
        All links in the footer should remain intact. 
        Licenseing information is available at: http://bootstraptaste.com/license/
        You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Knight
    -->
</footer>

    <main>
        @yield('content')
      </main>


<script type="text/javascript">
    $(document).ready(function(e) {
        $('#test').scrollToFixed();
        $('.res-nav_click').click(function(){
            $('.main-nav').slideToggle();
            return false    
            
        });
        
    });
</script>

  <script>
    wow = new WOW(
      {
        animateClass: 'animated',
        offset:       100
      }
    );
    wow.init();
 
  </script>


<script type="text/javascript">
	$(window).load(function(){
		
		$('.main-nav li a').bind('click',function(event){
			var $anchor = $(this);
			
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top - 102
			}, 1500,'easeInOutExpo');
			/*
			if you don't want to use the easing effects:
			$('html, body').stop().animate({
				scrollTop: $($anchor.attr('href')).offset().top
			}, 1000);
			*/
			event.preventDefault();
		});
	})
</script>

<script type="text/javascript">

$(window).load(function(){
  
  
  var $container = $('.portfolioContainer'),
      $body = $('body'),
      colW = 375,
      columns = null;

  
  $container.isotope({
    // disable window resizing
    resizable: true,
    masonry: {
      columnWidth: colW
    }
  });
  
  $(window).smartresize(function(){
    // check if columns has changed
    var currentColumns = Math.floor( ( $body.width() -30 ) / colW );
    if ( currentColumns !== columns ) {
      // set new column count
      columns = currentColumns;
      // apply width to container manually, then trigger relayout
      $container.width( columns * colW )
        .isotope('reLayout');
    }
    
  }).smartresize(); // trigger resize to set container width
  $('.portfolioFilter a').click(function(){
        $('.portfolioFilter .current').removeClass('current');
        $(this).addClass('current');
 
        var selector = $(this).attr('data-filter');
        $container.isotope({
			
            filter: selector,
         });
         return false;
    });
  
});

</script>
</body>
</html>