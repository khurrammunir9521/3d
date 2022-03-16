@extends('layouts.admin.app')
@section('content')
    <form method="POST" action="{{ route('side.store') }}" enctype="multipart/form-data">
        @csrf
 <div class="form-group">
            <label for="exampleInputEmail1">Heading </label>
            <input type="text" class="form-control" name="heading" id="" aria-describedby="emailHelp"
                placeholder="Enterheading">
            <small id="" class="form-text text-muted"></small>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Sub Heading </label>
            <input type="text" class="form-control" name="subheading" id="" aria-describedby=""
                placeholder="Enter sub heading">
            <small id="" class="form-text text-muted"></small>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Logo </label>
            <input type="file" class="form-control" name="side_image" id="" accept="image/*" type="file"
                id="download-cv-file-name" name="side_image" id="side_image" aria-describedby=""
                placeholder="Enter sub heading">
            <small id="" class="form-text text-muted"> </small>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>

        @endsection
