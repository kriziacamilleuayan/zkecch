@extends('layouts.artist.master')

@section('title')
Edit Account
@endsection

@section('content')
<br><br>
<h1>Account</h1>
<br><br>
<div class="col-sm-3"></div>
<div class="form-group col-sm-6">
  <label for="usr">Email:</label>
  <input type="email" class="form-control" id="usr">
</div>
<div class="col-sm-3"></div>
<div class="form-group col-sm-6">
  <label for="usr">Password:</label>
  <input type="password" class="form-control" id="usr">
</div>
<div class="col-sm-3"></div>
<div class="form-group col-sm-6">
  <label for="usr">Confirm Password:</label>
  <input type="password" class="form-control" id="usr">
</div>
<br><br><br>
<button type="button" class="btn btn-info btn-lg link animated fadeInUp delay-1s" style="margin-left:40px">Save Changes</button>
<a class="btn btn-info btn-lg link animated fadeInUp delay-1s" href="{{URL::to('artist-home')}}" style="margin-left:40px">Cancel</a>
<br><br><br><br><br>
@endsection