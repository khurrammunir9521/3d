@extends('layouts.admin.app')
@section('content')
    <form method="POST" action="{{ route('contact.update', $contacts->id) }}">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="exampleInputEmail1">location_name </label>
            <input type="text" class="form-control" name="location_name" value="{{$contacts->location_name}}"id="" aria-describedby="emailHelp" placeholder="Enterheading">
            <small id="" class="form-text text-muted">Describe your location name </small>
          </div>
          <div class="form-group">
              <label for="exampleInputEmail1">location_map</label>
              <input type="text" class="form-control" name="location_map" value="{{$contacts->location_map}}"id="" aria-describedby="" placeholder="Enter sub heading">
              <small id="" class="form-text text-muted">Describe your location map </small>
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Heading </label>
              <input type="text" class="form-control" name="heading"value="{{$contacts->heading}}"id="" aria-describedby="" placeholder="Enter sub heading">
              <small id="" class="form-text text-muted">Describe your heading </small>
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Sub Heading </label>
              <input type="text" class="form-control" name="subheading"value="{{$contacts->subheading}}"id="" aria-describedby="" placeholder="Enter sub heading">
              <small id="" class="form-text text-muted">Describe your heading </small>
            </div>


            <div class="form-group">
                <label for="exampleInputEmail1">Body text </label>
                <textarea id="" name="body_text" placeholder="Enter body text" rows="4" cols="50" class="ckeditor form-control">
                    {{$contacts->body_text}}
                </textarea>
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Phone </label>
              <input type="number" class="form-control" name="phone"value="{{$contacts->phone}}"id="" aria-describedby="" placeholder="Enter sub heading">
              <small id="" class="form-text text-muted"> </small>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">address </label>
              <input type="text" class="form-control"name="address"value="{{$contacts->address}}" id="" aria-describedby="" placeholder="Enter body text">
              <small id="" class="form-text text-muted">  </small>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">email</label>
              <input type="email" class="form-control"name="email"value="{{$contacts->email}}" id="" aria-describedby="" placeholder="Enter body text">
              <small id="" class="form-text text-muted"> </small>
            </div>


          <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
