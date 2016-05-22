@extends('layouts.artist.master')

@section('title')
Edit Profile
@endsection

@section('content')
<br><br>
<h1>Profile</h1>
<br><br>
<img src="img/signup.png" alt="profile Picture" style="width: 200px; height: 200px;">
<div class="fileinput fileinput-new" data-provides="fileinput">
    <span class="btn btn-default btn-file"><input type="file" accept=".jpg, .png, .jpeg|images/*"/></span>
</div>

<br><br>
<div class="form-group col-sm-6">
  <label for="usr">Name:</label>
  <input type="text" class="form-control" id="usr">
</div>
<div class="form-group col-sm-6">
  <label for="usr">Pen-name:</label>
  <input type="text" class="form-control" id="usr">
</div>
<div class="form-group col-sm-6">
  <label for="usr">contact number:</label>
  <input type="number" class="form-control" id="usr">
</div>
<div class="form-group col-sm-6">
  <label for="usr">Website:</label>
  <input type="text" class="form-control" id="usr">
</div>
<div class="form-group col-sm-6">
  <label for="comment">Description/Bio:</label>
  <textarea class="form-control" rows="5" id="comment"></textarea>
</div>
<br><br><br>
<button type="button" class="btn btn-info btn-lg link animated fadeInUp delay-1s" style="margin-left:40px">Save</button>
<a class="btn btn-info btn-lg link animated fadeInUp delay-1s" href="{{URL::to('artist-profile')}}" style="margin-left:40px">Cancel</a>
<br><br><br><br><br>
@endsection