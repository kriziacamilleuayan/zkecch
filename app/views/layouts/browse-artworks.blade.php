<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, maximum-scale=1">

<title>Browse Artworks</title>
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


<section class="main-section paddind" id="Portfolio"><!--main-section-start-->
  <div class="container">
      <h2>Browse All Artworks</h2>
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
                  <button data-toggle="modal" data-target="#{{$art->intArtId}}"><img src="{{asset($art->strArtImagePath)}}" alt="" style="height: 250px; width: 300px;"></button>  
                  <h3>{{$art->strArtName}}</h3>
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
</section>

@foreach($arts as $art)
 <!-- Modal -->
  <form role="form" class="order-form" action="{{URL::to('add-to-cart')}}" method="post">
 <div id="{{$art->intArtId}}" class="modal fade" role="dialog">
   <div class="modal-dialog">
 
     <!-- Modal content-->
     <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
         <h4 class="modal-title">{{$art->strArtName}}</h4>
       </div>
       <div class="modal-body">
       <img src="{{asset($art->strArtImagePath)}}">
       <div class="text-left">
            <p>Date Created: <b>{{$art->strArtName}}</b></p>
            <p>Artist: <b>{{$art->strName}}</b></p>
            @if($art->intCategory == 1)
            <p>Category: <b>PORTRAIT</b></p>
            @elseif($art->intCategory == 2)
            <p>Category: <b>LANDSCAPE</b></p>
            @elseif($art->intCategory == 3)
            <p>Category: <b>DIGITAL</b></p>
            @elseif($art->intCategory == 4)
            <p>Category: <b>PAINTING</b></p>
            @endif
            <p>Description: <b>{{$art->strArtDescription}}</b></p>
            @if($art->intStatus == 1)
            <p>Status: <b>Not Available</b></p>
            @elseif($art->intStatus == 2)
            <p>Status: <b>Original Available</b></p>
            @elseif($art->intStatus == 3)
            <p>Status: <b>Print Available</b></p>
            @endif
           <br>
           <div style="display:flex">
               <button type="submit" class="btn btn-danger">Add to Cart</button>
               <p style="margin-left: 10px"><b>{{$art->strPrice}}</b></p>
           </div>
       </div>
         
       </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       </div>
     </div>

   </div>
 </div>
 </form>
@endforeach

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