@extends('layouts.admin.app')
@section('content')
<form method="POST" action="{{ route('map.update',$maps->id) }}" enctype="multipart/form-data">
    @csrf
    @method('PUT')

    <div class="form-group">
        <label for="exampleInputEmail1">Map Image </label>
        <input type="file" class="form-control" name="map_image" id="" accept="image/*" type="file" id="download-cv-file-name" name="map_image" id="map_image" aria-describedby="" placeholder="Enter sub heading">
        <small id="" class="form-text text-muted"> </small>
        <img src="/Storage/{{ $maps->map_image }}" width="100px">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
    @endsection