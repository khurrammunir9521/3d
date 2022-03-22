@extends('layouts.admin.app')
@section('content')
    <form method="POST" action="{{ route('image.store') }}" enctype="multipart/form-data">
        @csrf
       
        <div class="form-group">
            <label for="exampleInputEmail1">Sub Heading </label>
            <input type="text" class="form-control" name="sub_heading" id="" aria-describedby=""
                placeholder="Enter sub heading ">
            <small id="" class="form-text text-muted"> </small>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1"> Heading </label>
            <input type="text" class="form-control" name="heading" id="" aria-describedby=""
                placeholder="Enter heading ">
            <small id="" class="form-text text-muted"> </small>
        </div>
       
        <div class="form-group">
            <label for="exampleInputEmail1">Body text </label>
            <textarea id="" name="body_text"  placeholder="Enter body text" rows="4" cols="50" class="ckeditor form-control">

            </textarea>
        </div>
        
        <div class="form-group">
            <label for="exampleInputEmail1">Images </label>
            <input type="file" class="form-control" name="images" id="" accept="image/*" type="file"
                id="download-cv-file-name" name="images" id="images" aria-describedby=""
                placeholder="Enter sub heading">
            <small id="" class="form-text text-muted"> </small>
        </div>
    
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection

