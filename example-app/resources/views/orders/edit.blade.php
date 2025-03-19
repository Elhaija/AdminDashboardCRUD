@extends('orders.layout')

@section('content')
<h2>Edit Order</h2>

<form action="{{ route('orders.update', $order->id) }}" method="POST">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label>Product Name:</label>
        <input type="text" name="product_name" class="form-control" value="{{ $order->product_name }}">
    </div>
    <div class="form-group">
        <label>Quantity:</label>
        <input type="number" name="quantity" class="form-control" value="{{ $order->quantity }}">
    </div>
    <div class="form-group">
        <label>Price:</label>
        <input type="text" name="price" class="form-control" value="{{ $order->price }}">
    </div>

    <button type="submit" class="btn btn-primary mt-3">Update</button>
</form>
@endsection
