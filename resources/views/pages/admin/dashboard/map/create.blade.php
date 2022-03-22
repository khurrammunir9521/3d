@extends('layouts.admin.app')
@section('content')
<form method="POST" action="{{ route('map.store') }}" enctype="multipart/form-data">
    @csrf

    <div class="form-group">
        <label for="exampleInputEmail1">Map </label>
        <input type="file" class="form-control" name="map_image" id="" accept="image/*" type="file" id="download-cv-file-name" name="map_image" id="map_image" aria-describedby="" placeholder="Enter sub heading">
        <small id="" class="form-text text-muted"> </small>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>

    @endsection