@extends('layouts.admin.master')

@section('title')
Profile
@endsection

@section('content')
<br><br>
<h1>Profile</h1>
<br><br>
@if($user->strImagePath == NULL)
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
@endsection