@extends('orders.layout')

@section('content')
<h2>Create New Order</h2>

<form action="{{ route('orders.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label>Product Name:</label>
        <input type="text" name="product_name" class="form-control">
    </div>
    <div class="form-group">
        <label>Quantity:</label>
        <input type="number" name="quantity" class="form-control">
    </div>
    <div class="form-group">
        <label>Price:</label>
        <input type="text" name="price" class="form-control">
    </div>
    <button type="submit" class="btn btn-success mt-3">Submit</button>
</form>
@endsection
