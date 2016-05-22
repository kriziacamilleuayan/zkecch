@extends('layouts.artist.master')

@section('title')
Profile
@endsection

@section('content')
<br><br>
<h1>Profile</h1>
<br><br>
<img src="img/signup.png" alt="profile Picture" style="width: 200px; height: 200px;">
<br><br>
<P>Name: <b>Krizia Camille Uayan</b></P>
<p>Pen-Name: <b>Krizia</b></p>
<p>Email: <b>kriziacamilleuayan@gmail.com</b></p>
<p>Contact Number: <b>09123456789</b></p>
<p>Website: <b>Deviantart.com/Krizia</b></p>
<p>Description/Bio: <b>I love cats!!!!!!!!!!!!!!</b></p>
<br><br><br>
<a class="btn btn-info btn-lg link animated fadeInUp delay-1s" href="{{URL::to('artist-edit-profile')}}" style="margin-left:40px">Edit Profile</a>
<br><br><br><br><br>
@endsection