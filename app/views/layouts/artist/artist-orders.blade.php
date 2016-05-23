@extends('layouts.artist.master')

@section('title')
Orders
@endsection

@section('content')
<br><br>
<h1>Orders</h1>
<br><br>
<div class="container">
<div class="table-responsive text-left">          
  <table class="table">
    <thead>
      <tr>
        <th>Order no.</th>
        <th>Date of Order</th>
        <th>Items</th>
        <th>Status</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>01</td>
        <td>November 01, 1988</td>
        <td>wew</td>
        <td>unpaid</td>
        <td><button type="button" class="btn btn-info btn-sm animated fadeInUp delay-1s" data-toggle="modal" data-target="#status">Change Status</button>
			<button type="button" class="btn btn-info btn-sm animated fadeInUp delay-1s" data-toggle="modal" data-target="#viewdetails">View Details</button>
        </td>
      </tr>
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
        <h4 class="modal-title">Order Status</h4>
      </div>
      <div class="modal-body">
      	<br>
		<div class="text-left">
			<div class="form-group col-sm-8">
      		<select class="form-control" id="sel1">
        		<option>upaid</option>
        		<option>confirmed</option>
        		<option>paid</option>
        		<option>delivered</option>
      		</select>
      <br>
    </div>
    <br>
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Confirm</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


<!-- Modal -->
<div id="viewdetails" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Order Details</h4>
      </div>
      <div class="modal-body">
      	<br>
		<div class="table-responsive text-left">          
  <table class="table">
    <thead>
      <tr>
        <th>Order no.</th>
        <th>Item Name</th>
        <th>Price</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>01</td>
        <td>meh</td>
        <td>1000.00</td>
        </tr>
    </tbody>
  </table>
  </div>
  <p class="text-right">Sub-Total: <b>Php 1000.00</b></p>
  <p class="text-right">Delivery fee: <b>Php 50.00</b></p>
  <p class="text-right">_________________________________________</p>
  <p class="text-right">Total: <b>Php 1050.00</b></p>
  <br><br>

<div class="text-left">
  <p>Name: <b>Erik Jon del Castro</b></p>
  <p>Contact No.: <b>09999999999</b></p>
  <p>Email: <b>erikjonjon@friendster.com</b></p>
  <p>Delivery Mode: <b>Meet-up</b></p>
  <p>Address: <b>Saan saan</b></p>
 </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


@endsection