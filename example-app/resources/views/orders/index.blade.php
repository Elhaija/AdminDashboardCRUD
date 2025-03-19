@extends('orders.layout')
  
  @section('content')
  <div class="row">
      <div class="col-lg-12 margin-tb">
          <div class="pull-left">
              <h2>Order Management</h2>
          </div>
          <div class="pull-right">
              <a class="btn btn-success" href="{{ route('orders.create') }}"> Create New Order</a>
          </div>
      </div>
  </div>
  
  @if ($message = Session::get('success'))
      <div class="alert alert-success">
          <p>{{ $message }}</p>
      </div>
  @endif
  
  <table class="table table-bordered">
      <tr>
          <th>No</th>
          <th>Product Name</th>
          <th>Quantity</th>
          <th>Price</th>
          <th width="280px">Action</th>
      </tr>
      @foreach ($orders as $order)
      <tr>
          <td>{{ ++$i }}</td>
          <td>{{ $order->product_name }}</td>
          <td>{{ $order->quantity }}</td>
          <
::contentReference[oaicite:0]{index=0}
 
