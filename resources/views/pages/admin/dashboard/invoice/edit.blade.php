@extends('layouts.admin.app')
@section('content')
<form method="POST" action="{{ route('invoicess.update', $invoice->id) }}">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-md-6">
        <div class="form-group">
        <label for="exampleInputEmail1 ">تاريخ </label>
        <input type="date" class="form-control invoice-field" value="{{$invoice->date}}" required name="date" id="" aria-describedby="emailHelp" placeholder="Enter Date">
        <small id="" class="form-text text-muted"></small>
    </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
        <label for="exampleInputEmail1 ">صالح لغاية</label>
        <input type="number" class="form-control invoice-field" value="{{$invoice->validtill}}" required name="validtill" id="" aria-describedby="" placeholder="Enter Valid till">
        <small id="" class="form-text text-muted"></small>
    </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
        <label for="exampleInputEmail1 ">كمية التصميم ثلاثي الأبعاد </label>
        <input type="number" class="form-control invoice-field" value="{{$invoice->qty_design}}" required name="qty_design" id="" aria-describedby="" placeholder="Enter 3D design quantity">
        <small id="" class="form-text text-muted"></small>
    </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
        <label for="exampleInputEmail1 ">سعر / وحدة تصميم ثلاثي الأبعاد </label>
        <input type="number" class="form-control invoice-field" value="{{$invoice->price_design}}" required name="price_design" id="" aria-describedby="" placeholder="Enter 3D design quantity">
        <small id="" class="form-text text-muted"></small>
    </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
        <label for="exampleInputEmail1 ">نموذج ثلاثي الأبعاد الكمية</label>
        <input type="number" class="form-control invoice-field" value="{{$invoice->qty_model}}" required name="qty_model" id="" aria-describedby="" placeholder="Enter 3D model quantity">
        <small id="" class="form-text text-muted"></small>
    </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
        <label for="exampleInputEmail1 ">سعر النموذج ثلاثي الأبعاد / الوحدة </label>
        <input type="number" class="form-control invoice-field" value="{{$invoice->price_model}}" required name="price_model" id="" aria-describedby="" placeholder="Enter 3D model quantity">
        <small id="" class="form-text text-muted"></small>
    </div>
        </div>
        <div class="col-md-6">
        <div class="form-group">
        <label for="exampleInputEmail1 ">قيمة الضريبة</label>
        <input type="number" class="form-control invoice-field" value="{{$invoice->tax}}" required name="tax" id="" aria-describedby="" placeholder="Enter VAT rate">
        <small id="" class="form-text text-muted"></small>
    </div>
        </div>
       
    </div>
    
   
    
   
   
    
    

    <button type="submit" class="btn btn-primary">يقدم</button>
</form>
@endsection