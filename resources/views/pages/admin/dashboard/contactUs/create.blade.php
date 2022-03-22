@extends('layouts.admin.app')
@section('content')

<form method="POST" action="{{route('contact.store')}}">
    @csrf
    <div class="form-group">
      <label for="exampleInputEmail1">location_name </label>
      <input type="text" class="form-control" name="location_name"id="" aria-describedby="emailHelp" placeholder="Enterheading">
      <small id="" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">location_map </label>
        <input type="text" class="form-control" name="location_map"id="" aria-describedby="" placeholder="Enter sub heading">
        <small id="" class="form-text text-muted"></small>
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Sub Heading </label>
        <input type="text" class="form-control" name="subheading"id="" aria-describedby="" placeholder="Enter sub heading">
        <small id="" class="form-text text-muted"></small>
      </div>
      
      <div class="form-group">
        <label for="exampleInputEmail1"> Heading </label>
        <input type="text" class="form-control" name="heading"id="" aria-describedby="" placeholder="Enter sub heading">
        <small id="" class="form-text text-muted"></small>
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Body text </label>
        <textarea id="" name="body_text"  placeholder="Enter body text" rows="4" cols="50" class="ckeditor form-control">

        </textarea>
    </div>

      <div class="form-group">
        <label for="exampleInputEmail1">phone </label>
        <input type="number" class="form-control" name="phone"id="" aria-describedby="" placeholder="Enter sub heading">
        <small id="" class="form-text text-muted"></small>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Address </label>
        <input type="text" class="form-control"name="address" id="" aria-describedby="" placeholder="Enter body text">
        <small id="" class="form-text text-muted"></small>
      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Email </label>
        <input type="email" class="form-control"name="email" id="" aria-describedby="" placeholder="Enter body text">
        <small id="" class="form-text text-muted"></small>
      </div>


    <button type="submit" class="btn btn-primary">Submit</button>
  </form>

@endsection
