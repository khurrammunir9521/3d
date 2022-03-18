@extends('layouts.admin.app')
@section('content')
<form method="POST" action="{{ route('invoicess.store') }}">
    @csrf
    <div class="row">
    <div class="col-md-6">
    <div class="form-group">
    <label for="exampleInputEmail1 invoice-field ">Order </label>
    <select class="form-select invoice-field" required name="order_id" aria-label="Default select example">
        <option selected disabled>Select Order</option>
        @foreach($orders as $order)
        <option value="{{$order->id}}">{{$order->pa_name}}</option>
        @endforeach
    </select>
</div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
        <label for="exampleInputEmail1">Dates </label>
        <input type="date" class="form-control invoice-field" required name="date" id="" aria-describedby="emailHelp" placeholder="Enter Date">
        <small id="" class="form-text text-muted"></small>
    </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
        <label for="exampleInputEmail1">Valid Till </label>
        <input type="number" class="form-control  invoice-field" required name="validtill" id="" aria-describedby="" placeholder="Enter Valid till">
        <small id="" class="form-text text-muted"></small>
    </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
        <label for="exampleInputEmail1">3D Design Qty </label>
        <input type="number" class="form-control invoice-field" required name="qty_design" id="" aria-describedby="" placeholder="Enter 3D design quantity">
        <small id="" class="form-text text-muted"></small>
    </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
        <label for="exampleInputEmail1">3D Design Price/Unit </label>
        <input type="number" class="form-control invoice-field" required name="price_design" id="" aria-describedby="" placeholder="Enter 3D design quantity">
        <small id="" class="form-text text-muted"></small>
    </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
        <label for="exampleInputEmail1">3D Model Qty </label>
        <input type="number" class="form-control invoice-field" required name="qty_model" id="" aria-describedby="" placeholder="Enter 3D model quantity">
        <small id="" class="form-text text-muted"></small>
    </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
        <label for="exampleInputEmail1">3D Model Price/Unit </label>
        <input type="number" class="form-control invoice-field" required name="price_model" id="" aria-describedby="" placeholder="Enter 3D model quantity">
        <small id="" class="form-text text-muted"></small>
    </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
        <label for="exampleInputEmail1">VAT Rate </label>
        <input type="number" class="form-control invoice-field" required name="tax" id="" aria-describedby="" placeholder="Enter VAT rate">
        <small id="" class="form-text text-muted"></small>
    </div>
        </div>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection