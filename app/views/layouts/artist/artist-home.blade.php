@extends('layouts.artist.master')

@section('title')
Welcome
@endsection

@section('content')

<section class="main-section paddind" id="Portfolio"><!--main-section-start-->
	<div class="container">
    	<h2>Latest Artworks</h2>
    	<h6>Fresh artworks from different artists that will keep you wanting more.</h6>
      <div class="portfolioFilter">  
        <ul class="Portfolio-nav wow fadeIn delay-02s">
        	<li><a href="#" data-filter="*" class="current" >All</a></li>
            <li><a href="#" data-filter=".branding" >Portrait</a></li>
            <li><a href="#" data-filter=".webdesign" >Landscape</a></li>
            <li><a href="#" data-filter=".printdesign" >Painting</a></li>
            <li><a href="#" data-filter=".photography" >Digital</a></li>
        </ul>
       </div> 
        
	</div>
    <div class="portfolioContainer wow fadeInUp delay-04s">
            	<div class=" Portfolio-box printdesign">
                	<a href="#"><img src="img/Portfolio-pic1.jpg" alt=""></a>	
                	<h3>Foto Album</h3>
                    <p>Print Design</p>
                </div>
                <div class="Portfolio-box webdesign">
                	<a href="#"><img src="img/Portfolio-pic2.jpg" alt=""></a>	
                	<h3>land that can scape</h3>
                    <p>Landscape</p>
                </div>
                <div class=" Portfolio-box branding">
                	<a href="#"><img src="img/Portfolio-pic3.jpg" alt="" style="height: 360px, width: 270px"></a>	
                	<h3>Honey</h3>
                    <p>Portrait</p>
                </div>
                <div class=" Portfolio-box photography" >
                	<a href="#"><img src="img/Portfolio-pic4.jpg" alt=""></a>	
                	<h3>Vinyl Record</h3>
                    <p>Digital</p>
                </div>
                <div class=" Portfolio-box branding">
                	<a href="#"><img src="img/Portfolio-pic5.jpg" alt=""></a>	
                	<h3>Honey Honey</h3>
                    <p>portrait</p>
                </div>
                <div class=" Portfolio-box photography">
                	<a href="#"><img src="img/Portfolio-pic6.jpg" alt=""></a>	
                	<h3>Windmills</h3>
                    <p>Digital</p>
                </div>
    </div>
</section><!--main-section-end-->


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

@endsection