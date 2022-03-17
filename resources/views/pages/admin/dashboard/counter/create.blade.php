@extends('layouts.admin.app')
@section('content')

<form method="POST" action="{{route('counter.store')}}">
  @csrf
  <div class="form-group">
    <label for="exampleInputEmail1">Start </label>
    <input type="text" class="form-control" name="start" id="" aria-describedby="emailHelp" placeholder="Enter Number">
    <small id="" class="form-text text-muted"></small>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">End </label>
    <input type="text" class="form-control" name="end" id="" aria-describedby="" placeholder="Enter Number">
    <small id="" class="form-text text-muted"></small>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection