@extends('layouts.artist.master')

@section('title')
Artworks
@endsection

@section('content')
<br>
<h1>Artworks</h1>
<br>
<div class="col-sm-12">
	<a class="btn btn-info btn-lg link animated fadeInUp delay-1s" href="{{URL::to('artist-submitart')}}">Submit Art</a>
</div>
<br><br>
<div>
    <div class="team-leader-box">
        <div class="fadeInDown delay-09s"> 
            <div class="team-leader-shadow"><a href="#"></a></div>
            <img src="img/portfolio-pic1.jpg" alt="" style="width: 300px; height: 300px">
        </div>
       	<h3 class="fadeInDown delay-09s"><button type="button" class="btn-link" data-toggle="modal" data-target="#art-description">Art Name</button></h3>
        <span class="fadeInDown delay-09s">Category</span>
        <p class="fadeInDown delay-09s">Description</p>
    </div>

    <div class="team-leader-box">
        <div class="fadeInDown delay-09s"> 
            <div class="team-leader-shadow"><a href="#"></a></div>
            <img src="img/portfolio-pic1.jpg" alt="" style="width: 300px; height: 300px">
        </div>
       	<h3 class="fadeInDown delay-09s"><button type="button" class="btn-link" data-toggle="modal" data-target="#art-description">Art Name</button></h3>
        <span class="fadeInDown delay-09s">Category</span>
        <p class="fadeInDown delay-09s">Description</p>
    </div>

    <div class="team-leader-box">
        <div class="fadeInDown delay-09s"> 
            <div class="team-leader-shadow"><a href="#"></a></div>
            <img src="img/portfolio-pic1.jpg" alt="" style="width: 300px; height: 300px">
        </div>
       	<h3 class="fadeInDown delay-09s"><button type="button" class="btn-link" data-toggle="modal" data-target="#art-description">Art Name</button></h3>
        <span class="fadeInDown delay-09s">Category</span>
        <p class="fadeInDown delay-09s">Description</p>
    </div>

    <div class="team-leader-box">
        <div class="fadeInDown delay-09s"> 
            <div class="team-leader-shadow"><a href="#"></a></div>
            <img src="img/portfolio-pic1.jpg" alt="" style="width: 300px; height: 300px">
        </div>
       	<h3 class="fadeInDown delay-09s"><button type="button" class="btn-link" data-toggle="modal" data-target="#art-description">Art Name</button></h3>
        <span class="fadeInDown delay-09s">Category</span>
        <p class="fadeInDown delay-09s">Description</p>
    </div>

    <div class="team-leader-box">
        <div class="fadeInDown delay-09s"> 
            <div class="team-leader-shadow"><a href="#"></a></div>
            <img src="img/portfolio-pic1.jpg" alt="" style="width: 300px; height: 300px">
        </div>
       	<h3 class="fadeInDown delay-09s"><button type="button" class="btn-link" data-toggle="modal" data-target="#art-description">Art Name</button></h3>
        <span class="fadeInDown delay-09s">Category</span>
        <p class="fadeInDown delay-09s">Description</p>
    </div>
    <div class="team-leader-box">
        <div class="fadeInDown delay-09s"> 
            <div class="team-leader-shadow"><a href="#"></a></div>
            <img src="img/portfolio-pic1.jpg" alt="" style="width: 300px; height: 300px">
        </div>
       	<h3 class="fadeInDown delay-09s"><button type="button" class="btn-link" data-toggle="modal" data-target="#art-description">Art Name</button></h3>
        <span class="fadeInDown delay-09s">Category</span>
        <p class="fadeInDown delay-09s">Description</p>
    </div>
</div>

<!-- Modal -->
<div id="art-description" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Art Name</h4>
      </div>
      <div class="modal-body">
		<img src="img/portfolio-pic1.jpg">
		<div class="text-left">
			<p>Year: <b>1990</b></p>
			<p>Artist: <b>Krizia</b></p>
			<p>Category: <b>Digital</b></p>
			<p>Description: <b>describe me. I'm pretty</b></p>
			<p>Status: <b>Original Available</b></p>
			<br>
			<div style="display:flex">
				<a type="button" class="btn btn-danger" href="{{URL::to('artist-addtocart')}}">Add to cart</a>
				<p style="margin-left: 10px"><b>Php 5000.00</b></p>
			</div>
		</div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


@endsection