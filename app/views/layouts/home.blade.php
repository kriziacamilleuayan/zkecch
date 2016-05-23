<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">

<title>Homepage</title>
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

<nav class="main-nav-outer" id="test"><!--main-nav-start-->
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
            <li><a href="#header">Home</a></li>
            <li><a href="#service">Services</a></li>
            <li><a href="#Portfolio">Portfolio</a></li>
            <li class="small-logo"><a href="#header"><img src="img/small-logo.png" alt=""></a></li>
            <li><a href="#team">Team</a></li>
            <li><a href="#contact">Contact</a></li>
            
        </ul>
        <a class="res-nav_click" href="#"><i class="fa-bars"></i></a>
    </div>
</nav><!--main-nav-end-->

<div style="overflow:hidden;">
<header class="header" id="header"><!--header-start-->
    <div class="container">
        <figure class="logo animated fadeInDown delay-07s">
            <a href="#"><img src="img/logo.png" alt=""></a> 
        </figure>   
        <h1 class="animated fadeInDown delay-07s"><font color="gray"><bold>Welcome to <strong>Zkecch Co.</strong></bold></font></h1>
        <ul class="we-create animated fadeInUp delay-1s">
            <li><font size="+1" color="black">Show. Inspire. Earn</font></li>
        </ul>
        <!-- Triggers the modal with the log-in button -->
            <button type="button" class="btn btn-info btn-lg link animated fadeInUp delay-1s" data-toggle="modal" data-target="#signupModal">Sign Up</button>
        
            <button type="button" class="btn btn-info btn-lg link animated fadeInUp delay-1s" data-toggle="modal" data-target="#loginModal" style="margin-left:40px">Log in</button>
        
        <!-- Modal -->
        <div id="loginModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content -->
                <div class="modal-content">
                        <div class="col-lg-10 col-lg-offset-1  form-box">
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3>Login to our site</h3>
                                    <p>Enter your email and password to log on:</p>
                                </div>
                                <div class="form-top-right">
                                    <img src="img/lock.png" alt="">
                                </div>
                            </div>
                            <div class="form-bottom">
                                <form role="form" class="login-form" action="{{URL::to('login')}}" method="post">
                                    <div class="form-group">
                                        <label class="sr-only" for="form-username">Username</label>
                                        <input type="text" name="form-username" placeholder="Email..." class="form-username form-control" id="form-username">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-password">Password</label>
                                        <input type="password" name="form-password" placeholder="Password..." class="form-password form-control" id="form-password">
                                    </div>
                                    <button type="submit" class="btn">Sign in!</button>
                                </form>
                            </div>
                        </div>
                
 
                </div>

                <!-- End of modal content -->
            </div>
        </div>


        <div id="signupModal" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content -->
                <div class="modal-content">
                        <div class="col-lg-10 col-lg-offset-1  form-box">
                            <div class="form-top">
                                <div class="form-top-left">
                                    <h3>Start your membership now!</h3>
                                    <p>Be part in sharing wonderful masterpieces to the world!</p>
                                </div>
                                <div class="form-top-right">
                                    <img src="img/signup.png" alt="">
                                </div>
                            </div>
                            <div class="form-bottom">
                                <form role="form" action="{{URL::to('login')}}" method="post" class="login-form">
                                    <div class="form-group">
                                        <label class="sr-only" for="form-firstname">First Name</label>
                                        <input type="text" name="form-firstname" placeholder="First Name..." class="form-username form-control" id="form-username">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-lastname">Last Name</label>
                                        <input type="text" name="form-lastname" placeholder="Last Name..." class="form-username form-control" id="form-username">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-username">Email</label>
                                        <input type="text" name="form-username" placeholder="Email..." class="form-username form-control" id="form-username">
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-password">Password</label>
                                        <input type="password" name="form-password" placeholder="Password..." class="form-password form-control" id="form-password">
                                    </div>
                                    <button type="submit" class="btn">Begin your journey!</button>
                                </form>
                            </div>
                        </div>
                
 
                </div>

                <!-- End of modal content -->
            </div>
        </div>

    </div>


</div>
</header><!--header-end-->

<section class="main-section" id="service"><!--main-section-start-->
	<div class="container">
    	<h2>Services</h2>
    	<h6>Earn big while inspiring others with your art.</h6>
        <div class="row">
        	<div class="col-lg-4 col-sm-6 wow fadeInLeft delay-05s">
            	<div class="service-list">
                	<div class="service-list-col2">
                        <h3>Sharing Art</h3>
                        <p>.</p>
                    </div>
                </div>
                <div class="service-list">
                	<div class="service-list-col2">
                        <h3>inspiring Others</h3>
                        <p>inspiring other artists.</p>
                    </div>
                </div>
                <div class="service-list">
                	<div class="service-list-col2">
                        <h3>earning money</h3>
                        <p>Earn money by making art.</p>
                    </div>
                </div>
                <div class="service-list">
                	<div class="service-list-col2">
                        <h3>Gallery</h3>
                        <p>You can have your own gallery.</p>
                    </div>
                </div>
            </div>
            <figure class="col-lg-8 col-sm-6  text-right wow fadeInUp delay-02s">
            	<img src="img/macbook-pro.png" alt="">
            </figure>
        
        </div>
	</div>
</section><!--main-section-end-->

<section class="main-section paddind" id="Portfolio"><!--main-section-start-->
	<div class="container">
    	<h2>Portfolio</h2>
    	<h6>Fresh portfolio of designs that will keep you wanting more.</h6>
      <div class="portfolioFilter">  
        <ul class="Portfolio-nav wow fadeIn delay-02s">
        	<li><a href="#" data-filter="*" class="current" >All</a></li>
            <li><a href="#" data-filter=".portrait" >Portrait</a></li>
            <li><a href="#" data-filter=".landscape" >Landscape</a></li>
            <li><a href="#" data-filter=".painting" >Painting</a></li>
            <li><a href="#" data-filter=".digital" >Digital</a></li>
        </ul>
       </div> 
        
	</div>
    <div class="portfolioContainer wow fadeInUp delay-04s">
            @foreach($arts as $art)
              @if($art->intCategory == 1)
              <div class=" Portfolio-box portrait">
              @elseif($art->intCategory == 2)
              <div class=" Portfolio-box landscape">
              @elseif($art->intCategory == 3)
              <div class=" Portfolio-box digital">
              @elseif($art->intCategory == 4)
              <div class=" Portfolio-box painting">
              @endif
                    <a href="#"><img src="{{asset($art->strImagePath)}}" alt=""></a>    
                    <h3>{{$art->strName}}</h3>
                  @if($art->intCategory == 1)
                    <p>Portrait</p>
                  @elseif($art->intCategory == 2)
                    <p>Landscape</p>
                  @elseif($art->intCategory == 3)
                    <p>Digital</p>
                  @elseif($art->intCategory == 4)
                    <p>Painting</p>
                  @endif
              </div>
              @endforeach
              </div>	
    </div>
</section><!--main-section-end-->


<section class="main-section team" id="team"><!--main-section team-start-->
	<div class="container">
        <h2>team</h2>
        <h6>Take a closer look into our amazing team. We won’t bite.</h6>
        <div class="team-leader-block clearfix">
            <div class="team-leader-box" style="height: inherit">
                <div class="team-leader wow fadeInDown delay-03s"> 
                    <div class="team-leader-shadow"><a href="#"></a></div>
                    <img src="img/team-leader-pic1.jpg" alt="">
                    
                </div>
                <h3 class="wow fadeInDown delay-03s">Erik Jon del Castillo</h3>
                <span class="wow fadeInDown delay-03s">Project Manager</span>
                <p class="wow fadeInDown delay-03s">Erik is a third year IT student who does nothing but KPOP. He has a talent in designing but hardly makes it in use. And he is the leader of the group.</p>
            </div>
            <div class="team-leader-box" style="height: inherit">
                <div class="team-leader  wow fadeInDown delay-06s"> 
                    <div class="team-leader-shadow"><a href="#"></a></div>
                    <img src="img/team-leader-pic2.jpg" alt="">
                    
                </div>
                <h3 class="wow fadeInDown delay-06s">Camille Escobar</h3>
                <span class="wow fadeInDown delay-06s">Lead Programmer</span>
                <p class="wow fadeInDown delay-06s">Camille is the face of the group. She is good in web programming, as well, with PHP as the language of use. Reading is her hobby. She can read a 7-book series in two days!</p>
            </div>
            <div class="team-leader-box" style="height: inherit">
                <div class="team-leader wow fadeInDown delay-09s"> 
                    <div class="team-leader-shadow"><a href="#"></a></div>
                    <img src="img/team-leader-pic3.jpg" alt="">
                    
                </div>
                <h3 class="wow fadeInDown delay-09s">Honey May Buenavides</h3>
                <span class="wow fadeInDown delay-09s">Senior Developer</span>
                <p class="wow fadeInDown delay-09s">Honey does most of the work. She loves to write, not codes but actual literary pieces. She loves It Started With A Kiss, and Conrad. She wants to be a novelist someday.</p>
            </div>
        </div><br><br><br>
        <div class="team-leader-block clearfix" style="height: inherit">
            <div class="team-leader-box">
                <div class="team-leader wow fadeInDown delay-03s"> 
                    <div class="team-leader-shadow"><a href="#"></a></div>
                    <img src="img/team-leader-pic4.jpg" alt="">
                    
                </div>
                <h3 class="wow fadeInDown delay-03s">Zylah Mae Cuerpo</h3>
                <span class="wow fadeInDown delay-03s">Systems Analyst</span>
                <p class="wow fadeInDown delay-03s">Zylah also loves KPOP like the leader. She is good in database. She loves reading pocketbooks. She is a good dancer, too. You should see her dance to the beat sometimes. </p>
            </div>
            <div class="team-leader-box" style="height: inherit">
                <div class="team-leader  wow fadeInDown delay-06s"> 
                    <div class="team-leader-shadow"><a href="#"></a></div>
                    <img src="img/team-leader-pic5.jpg" alt="">
                    
                </div>
                <h3 class="wow fadeInDown delay-06s">Cassandra de Asis</h3>
                <span class="wow fadeInDown delay-06s">Database Administrator</span>
                <p class="wow fadeInDown delay-06s">Cassandra is quite good in designing too. She is fun to hang around with. She works better than those I-have-a-lot-of-excuses-so-I-cant-get-it-done dudes. She's sweet.</p>
            </div>
            <div class="team-leader-box" style="height: inherit">
                <div class="team-leader wow fadeInDown delay-09s"> 
                    <div class="team-leader-shadow"><a href="#"></a></div>
                    <img src="img/team-leader-pic6.jpg" alt="">
                    
                </div>
                <h3 class="wow fadeInDown delay-09s">Krizia Camille Uayan</h3>
                <span class="wow fadeInDown delay-09s">Junior Developer</span>
                <p class="wow fadeInDown delay-09s">Krizia is a bitch. She does only a quarter of her job and leaves the rest for Honey to do. She is evil. She loves to pick on innocent people especially Honey, who is really nice and sweet.</p>
            </div>
        </div>
    </div>
</section><!--main-section team-end-->



<section class="business-talking"><!--business-talking-start-->
	<div class="container">
        <h2>Let’s Talk Business.</h2>
    </div>
</section><!--business-talking-end-->
<div class="container">
<section class="main-section contact" id="contact">
	
        <div class="row">
        	<div class="col-lg-6 col-sm-7 wow fadeInLeft">
            	<div class="contact-info-box address clearfix">
                	<h3><i class=" icon-map-marker"></i>Address:</h3>
                	<span>308 Negra Arroyo Lane<br>Albuquerque, New Mexico, 87111.</span>
                </div>
                <div class="contact-info-box phone clearfix">
                	<h3><i class="fa-phone"></i>Phone:</h3>
                	<span>1-800-BOO-YAHH</span>
                </div>
                <div class="contact-info-box email clearfix">
                	<h3><i class="fa-pencil"></i>email:</h3>
                	<span>hello@knightstudios.com</span>
                </div>
            	<div class="contact-info-box hours clearfix">
                	<h3><i class="fa-clock-o"></i>Hours:</h3>
                	<span><strong>Monday - Thursday:</strong> 10am - 6pm<br><strong>Friday:</strong> People work on Fridays now?<br><strong>Saturday - Sunday:</strong> Best not to ask.</span>
                </div>
                <ul class="social-link">
                	<li class="twitter"><a href="#"><i class="fa-twitter"></i></a></li>
                    <li class="facebook"><a href="#"><i class="fa-facebook"></i></a></li>
                    <li class="pinterest"><a href="#"><i class="fa-pinterest"></i></a></li>
                    <li class="gplus"><a href="#"><i class="fa-google-plus"></i></a></li>
                    <li class="dribbble"><a href="#"><i class="fa-dribbble"></i></a></li>
                </ul>
            </div>
        	<div class="col-lg-6 col-sm-5 wow fadeInUp delay-05s">
            	<div class="form">
                	<input class="input-text" type="text" name="" value="Your Name *" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">
                    <input class="input-text" type="text" name="" value="Your E-mail *" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">
                	<textarea class="input-text text-area" cols="0" rows="0" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">Your Message *</textarea>
                    <input class="input-btn" type="submit" value="send message">
                </div>	
            </div>
        </div>
</section>
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