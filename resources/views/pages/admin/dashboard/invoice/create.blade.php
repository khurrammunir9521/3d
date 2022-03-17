@extends('layouts.admin.app')
@section('content')
<form method="POST" action="{{ route('invoicess.store') }}">
    @csrf
    <select class="form-select" required name="order_id" aria-label="Default select example">
        <option selected disabled>Select Order</option>
        @foreach($orders as $order)
        <option value="{{$order->id}}">{{$order->pa_name}}</option>
        @endforeach
    </select>
    <div class="form-group">
        <label for="exampleInputEmail1">Dates </label>
        <input type="date" class="form-control" required name="date" id="" aria-describedby="emailHelp" placeholder="Enter Date">
        <small id="" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Valid Till </label>
        <input type="number" class="form-control" required name="validtill" id="" aria-describedby="" placeholder="Enter Valid till">
        <small id="" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">3D Design Qty </label>
        <input type="number" class="form-control" required name="qty_design" id="" aria-describedby="" placeholder="Enter 3D design quantity">
        <small id="" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">3D Design Price/Unit </label>
        <input type="number" class="form-control" required name="price_design" id="" aria-describedby="" placeholder="Enter 3D design quantity">
        <small id="" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">3D Model Qty </label>
        <input type="number" class="form-control" required name="qty_model" id="" aria-describedby="" placeholder="Enter 3D model quantity">
        <small id="" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">3D Model Price/Unit </label>
        <input type="number" class="form-control" required name="price_model" id="" aria-describedby="" placeholder="Enter 3D model quantity">
        <small id="" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">VAT Rate </label>
        <input type="number" class="form-control" required name="tax" id="" aria-describedby="" placeholder="Enter VAT rate">
        <small id="" class="form-text text-muted"></small>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection