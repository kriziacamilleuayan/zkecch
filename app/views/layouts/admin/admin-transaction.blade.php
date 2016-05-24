@extends('layouts.admin.master')

@section('title')
Transaction
@endsection

@section('content')
<br><br>
<h1>Transaction</h1>
<br><br>
<div class="container">
<div class="table-responsive text-left">          
  <table class="table">
    <thead>
      <tr>
        <th>Ordered Item</th>
        <th>Client</th>
        <th>Status</th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    @foreach($order as $order)
      <tr>
        <td>{{$order->strArtName}}</td>
        <td>{{$order->strName}}</td>
        @if($order->intStatusId == 1)
        <td>Pending</td>
        @elseif($order->intStatusId == 2)
        <td>Accepted</td>
        @elseif($order->intStatusId == 2)
        <td>Rejected</td>
        @endif
      </tr>
    @endforeach
    </tbody>
  </table>
  </div>
  <br>
</div>
<br><br><br>
@endsection