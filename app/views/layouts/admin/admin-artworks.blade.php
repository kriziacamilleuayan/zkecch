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
        <td><button type="button" class="btn btn-info btn-sm animated fadeInUp delay-1s" data-toggle="modal" data-target="#contact">Contact Artist</button>
    </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  </div>
  <br>
</div>
<br><br><br><br><br>
<!-- Modal -->
 <div id="contact" class="modal fade" role="dialog">
   <div class="modal-dialog">
 
     <!-- Modal content-->
     <div class="modal-content">
       <div class="modal-header">
         <button type="button" class="close" data-dismiss="modal">&times;</button>
         <h4 class="modal-title">Contact Artist</h4>
       </div>
       <div class="modal-body">
         <div class="col-lg-6 col-sm-5">
               <div class="form">
                   <input class="input-text" type="text" name="" value="Title" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">
                     <input class="input-text" type="text" name="" value="Artist Email" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">
                   <textarea class="input-text text-area" cols="0" rows="0" onfocus="if(this.value==this.defaultValue)this.value='';" onblur="if(this.value=='')this.value=this.defaultValue;">Your Message *</textarea>
                    
                 </div>  
             </div>
       <div class="modal-footer">
         <button type="button" class="btn btn-default" data-dismiss="modal">Send Message</button>
         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       </div>
     </div>
 
   </div>
 </div>
</div>
@endsection