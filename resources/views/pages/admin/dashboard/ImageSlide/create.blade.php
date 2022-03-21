@extends('layouts.admin.app')
@section('content')
    <form method="POST" action="{{ route('image.store') }}" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Speed </label>
            <input type="number" class="form-control" name="speed" id="" aria-describedby="emailHelp"
                placeholder="Enter speed">
            <small id="" class="form-text text-muted"> </small>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Number </label>
            <input type="number" class="form-control" name="number" id="" aria-describedby=""
                placeholder="Enter number">
            <small id="" class="form-text text-muted"> </small>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1"> Heading </label>
            <input type="text" class="form-control" name="heading" id="" aria-describedby=""
                placeholder="Enter heading ">
            <small id="" class="form-text text-muted"> </small>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Sub Heading </label>
            <input type="text" class="form-control" name="sub_heading" id="" aria-describedby=""
                placeholder="Enter sub heading ">
            <small id="" class="form-text text-muted"> </small>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Body text </label>
            <textarea id="" name="body_text"  placeholder="Enter body text" rows="4" cols="50" class="ckeditor form-control">

            </textarea>
        </div>
        <!-- <div class="form-group">
            <label for="exampleInputEmail1">Images </label>
            <input type="file" class="form-control" name="images" id="" accept="image/*" type="file"
                id="download-cv-file-name" name="images" id="images" aria-describedby=""
                placeholder="Enter sub heading">
            <small id="" class="form-text text-muted"> </small>
        </div> -->
        <div class="row">
        <div class="col-md-12">
            <h2>BBBOOTSTRAP FILE UPLOAD</h2>
            <div class="file-drop-area"> <span class="choose-file-button">Choose files</span> <span class="file-message">or drag and drop files here</span> <input class="file-input" type="file" multiple>
            </div>
        </div>
    </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection

