@extends('layouts.artist.master')

@section('title')
Edit Profile
@endsection

@section('content')
<br><br>
<h1>Profile</h1>
<br><br>
<form action="{{ URL::to('artist-save-edit-profile') }}" method="POST"  enctype="multipart/form-data">
@if($user->strImagePath != NULL)
<img src="{{ asset($user->strImagePath) }}" alt="profile Picture" style="width: 200px; height: 200px;">
@else
<img src="img/signup.png" alt="profile Picture" style="width: 200px; height: 200px;">
@endif
<div class="fileinput fileinput-new" data-provides="fileinput">
    <span class="btn btn-default btn-file"><input id="user_image_input" name="user_image_input" type="file" accept=".jpg, .png, .jpeg|images/*"/></span>
</div>

<br><br>
<div class="form-group col-sm-6">
  <label for="usr">Name:</label>
  <input type="text" class="form-control" id="usr" name="name" value="{{$user->strName}}">
</div>
<div class="form-group col-sm-6">
  <label for="usr">Pen-name:</label>
  <input type="text" class="form-control" id="usr" name="penname" value="{{$user->strPenName}}">
</div>
<div class="form-group col-sm-6">
  <label for="usr">Contact Number:</label>
  <input type="number" class="form-control" id="usr" name="contactnumber" value="{{$user->strContactNumber}}">
</div>
<div class="form-group col-sm-6">
  <label for="usr">Website:</label>
  <input type="text" class="form-control" id="usr" name="website" value="{{$user->strWebsite}}">
</div>
<div class="form-group col-sm-6">
  <label for="comment">Description/Bio:</label>
  <textarea class="form-control" rows="5" name="description" id="comment" >{{$user->strDescription}}</textarea>
</div>
<br><br><br>
<button type="submit" class="btn btn-info btn-lg link animated fadeInUp delay-1s" style="margin-left:40px">Save</button>
<a class="btn btn-info btn-lg link animated fadeInUp delay-1s" href="{{URL::to('artist-profile')}}" style="margin-left:40px">Cancel</a>
</form>
<br><br><br><br><br>
@endsection