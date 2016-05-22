@extends('layouts.artist.master')

@section('title')
Profile
@endsection

@section('content')
<br><br>
<h1>Profile</h1>
<br><br>
@if($user->strName == NULL)
<img src="img/signup.png" alt="profile Picture" style="width: 200px; height: 200px;">
@else
<img src="{{ asset($user->strImagePath) }}" alt="profile Picture" style="width: 200px; height: 200px;">
@endif
<br><br>
<P>Name: <b>{{$user->strName}}</b></P>
<p>Pen-Name: <b>{{$user->strPenName}}</b></p>
<p>Email: <b>{{$user->strUserEmail}}</b></p>
<p>Contact Number: <b>{{$user->strContactNumber}}</b></p>
<p>Website: <b>{{$user->strWebsite}}</b></p>
<p>Description/Bio: <b>{{$user->strDescription}}</b></p>
<br><br><br>
<a class="btn btn-info btn-lg link animated fadeInUp delay-1s" href="{{URL::to('artist-edit-profile')}}" style="margin-left:40px">Edit Profile</a>
<br><br><br><br><br>
@endsection