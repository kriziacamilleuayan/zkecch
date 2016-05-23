@extends('layouts.admin.master')

@section('title')
Artworks
@endsection

@section('content')
<br><br>
<h1>Artworks</h1>
<br><br>

<div class="col-sm-12">
	<a class="btn btn-info btn-lg link animated fadeInUp delay-1s" href="{{URL::to('artist-submitart')}}">Submit Art</a>
</div>
<br><br>
<div>
@foreach($arts as $art)
    <div class="team-leader-box">
        <div class="fadeInDown delay-09s"> 
            <div class="team-leader-shadow"><a href="#"></a></div>
            <img src="{{ asset($art->strImagePath) }}" alt="" style="width: 300px; height: 300px">
        </div>
       	<h3 class="fadeInDown delay-09s"><button type="button" class="btn-link" data-toggle="modal" data-target="#{{$art->intId}}">{{$art->strName}}</button></h3>
        @if($art->intCategory == 1)
        <span class="fadeInDown delay-09s">PORTRAIT</span>
        @elseif($art->intCategory == 2)
        <span class="fadeInDown delay-09s">LANDSCAPE</span>
        @elseif($art->intCategory == 3)
        <span class="fadeInDown delay-09s">DIGITAL</span>
        @elseif($art->intCategory == 4)
        <span class="fadeInDown delay-09s">PAINTING</span>
        @endif
        <p class="fadeInDown delay-09s">{{$art->strDescription}}</p>
    </div>
@endforeach

</div>

<!-- Modal -->
@foreach($arts as $art)
<div id="{{$art->intId}}" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">{{$art->strName}}</h4>
      </div>
      <div class="modal-body">
		<img src="{{ asset($art->strImagePath) }}">
		<div class="text-left">
			<p>Year: <b>{{$art->strYearCreated}}</b></p>
			<p>Artist: <b>{{Session::get('name')}}</b></p>
      @if($art->intCategory == 1)
			<p>Category: <b>PORTRAIT</b></p>
      @elseif($art->intCategory == 2)
      <p>Category: <b>LANDSCAPE</b></p>
      @elseif($art->intCategory == 3)
      <p>Category: <b>DIGITAL</b></p>
      @elseif($art->intCategory == 4)
      <p>Category: <b>PAINTING</b></p>
      @endif
			<p>Description: <b>{{$art->strDescription}}</b></p>
      @if($art->intStatusId == 1)
			<p>Status: <b>Not Available</b></p>
      @elseif($art->intStatusId == 2)
      <p>Status: <b>Original Available</b></p>
      @elseif($art->intStatusId == 3)
      <p>Status: <b>Print Available</b></p>
      @endif
			<br>
			<!-- <div style="display:flex">
				<a type="button" class="btn btn-danger" href="{{URL::to('artist-addtocart')}}">Add to cart</a>
				<p style="margin-left: 10px"><b>Php 5000.00</b></p>
			</div> -->
		</div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
@endsection