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
                	<a href="#"><img src="{{asset($art->strArtImagePath)}}" alt="" style="height: 250px; width: 300px;"></a>	
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