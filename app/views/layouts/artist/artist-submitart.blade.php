@extends('layouts.artist.master')

@section('title')
Submit Art
@endsection

@section('content')
<br><br>
<h1>Submit Art</h1>
<br><br>
<form action="{{ URL::to('artist-artworks') }}" method="POST"  enctype="multipart/form-data">
<img src="img/signup.png" alt="profile Picture" style="width: 200px; height: 200px;">
<div class="fileinput fileinput-new" data-provides="fileinput">
    <span class="btn btn-default btn-file"><input id="user_image_input" name="user_image_input" type="file" accept=".jpg, .png, .jpeg|images/*"/></span>
</div>
<br>
<div class="text-left">
<div class="form-group col-sm-8">
  <label for="usr">Title:</label>
  <input type="text" class="form-control" id="usr" name='name'>
</div>
<div class="form-group col-sm-8">
  <label for="usr">Date Created:</label>
  <input type="date" class="form-control" id="usr" name='date'>
</div>
<div class="form-group col-sm-8">
  <label for="comment">Description/Bio:</label>
  <textarea class="form-control" rows="5" id="comment" name='description'></textarea>
</div>
    <div class="form-group col-sm-8">
      <label for="sel2">Category:</label>
      <select class="form-control" name="category" id="sel2">
        <option value="1">Portrait</option>
        <option value="2">Landscape</option>
        <option value="4">Painting</option>
        <option value="3">Digital</option>
      </select>
    </div>
    <div class="form-group col-sm-8">
      <label for="sel1">Availability:</label>
      <select class="form-control" name='status' id="sel1">
        <option value="1">Not for Sale</option>
        <option value="2">Original for Sale</option>
        <option value="3">Print for Sale</option>
      </select>
      <br>
    </div>
<div class="form-group col-sm-8">
  <label for="price">Price (Php):</label>
  <input type="number" class="form-control" id="price" name='price'>
</div>
</div>
<br>
<label class="checkbox-inline"><input type="checkbox" value="">'I have read and agree to the Terms and Conditions'*</label>
<br><br>
<button type="submit" class="btn btn-info btn-lg link animated fadeInUp delay-1s" style="margin-left:40px">Submit Art</button>
</form>
<br><br><br><br><br>
@endsection