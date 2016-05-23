@extends('layouts.admin.master')

@section('title')
Artworks All
@endsection

@section('content')
<br><br>
<h1>Artworks</h1>
<br><br>
<div class="container">
<div class="table-responsive text-left">          
  <table class="table">
    <thead>
      <tr>
        <th>Artwork Name</th>
        <th>Creator</th>
        <th>Date Created</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
        @foreach($arts as $art)
      <tr>
        <td>{{$art->strArtName}}</td>
        <td>{{$art->strPenName}}</td>
        <td>{{$art->strYearCreated}}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  <br>
</div>
<br><br><br><br><br>

<!-- Modal -->
<div id="status" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Deactivate Account</h4>
      </div>
      <div class="modal-body">
        <br>
          <h4>Are you sure you want to deactivate this account?</h4>
        <br>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Deactivate</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
      </div>
    </div>

  </div>
</div>

@endsection