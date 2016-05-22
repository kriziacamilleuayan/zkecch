@extends('layouts.artist.master')

@section('title')
Add to Cart
@endsection

@section('content')
<br><br>
<h1>Add to Cart</h1>
<br><br>

<div class="container">
<div class="table-responsive text-left">          
  <table class="table">
    <thead>
      <tr>
        <th>Item</th>
        <th>Description</th>
        <th>Price</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>Item Name</td>
        <td>Item Description</td>
        <td>5000.00</td>
      </tr>
    </tbody>
  </table>
  </div>
  <br>
  <p class="text-right">Sub-Total: <b>Php 5000.00</b></p>
  
  <div class="text-left">
	<p><b>Shipping fee*</b></p>
		<div class="radio">
  			<label><input type="radio" name="shippingfee">Php 100.00 - NCR</label>
		</div>
		<div class="radio">
  			<label><input type="radio" name="shippingfee">Php 150.00 - Province</label>
		</div>
  </div>
  <br>
  <p class="text-right">_________________________________________</p>
  <p class="text-right">Total: <b>Php 5100.00</b></p>
	<br><br>

<div class="form-group col-sm-6 text-left">
  <label for="usr">Full Name*:</label>
  <input type="text" class="form-control" id="usr">
</div>
<div class="col-sm-4"></div>
<div class="form-group col-sm-6 text-left">
  <label for="usr">Contact Number*:</label>
  <input type="nummber" class="form-control" id="usr">
</div>
<div class="form-group col-sm-6 text-left">
  <label for="usr">Email*:</label>
  <input type="email" class="form-control" id="usr">
</div>
  <div class="text-left col-sm-6 form-group">
    <br>
  <p><b>Delivery Mode*</b></p>
    <div class="radio">
        <label><input type="radio" name="deliverymode">Meet-up</label>
    </div>
    <div class="radio">
        <label><input type="radio" name="deliverymode">Shipping</label>
    </div>
  </div>
<br><br>
<label class="checkbox-inline"><input type="checkbox" value="">'I have read and agree to the Terms and Conditions'*</label>
  <br><br>
<button type="button" class="btn btn-info btn-lg link animated fadeInUp delay-1s" style="margin-left:40px">Proceed to Checkout</button>
  <br><br><br><br>

</div>
@endsection