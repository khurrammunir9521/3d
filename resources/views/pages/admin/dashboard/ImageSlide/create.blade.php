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
            <label for="exampleInputEmail1"> Heading2 </label>
            <input type="text" class="form-control" name="heading2" id="" aria-describedby=""
                placeholder="Enter heading ">
            <small id="" class="form-text text-muted"> </small>
        </div>


        <div class="form-group">
            <label for="exampleInputEmail1"> Heading3</label>
            <input type="text" class="form-control" name="heading3" id="" aria-describedby=""
                placeholder="Enter heading ">
            <small id="" class="form-text text-muted"> </small>
        </div>


        <div class="form-group">
            <label for="exampleInputEmail1"> Heading4</label>
            <input type="text" class="form-control" name="heading4" id="" aria-describedby=""
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
            <label for="exampleInputEmail1">Sub Heading 2</label>
            <input type="text" class="form-control" name="sub_heading2" id="" aria-describedby=""
                placeholder="Enter sub heading ">
            <small id="" class="form-text text-muted"> </small>
        </div>



        <div class="form-group">
            <label for="exampleInputEmail1">Sub Heading 3</label>
            <input type="text" class="form-control" name="sub_heading3" id="" aria-describedby=""
                placeholder="Enter sub heading ">
            <small id="" class="form-text text-muted"> </small>
        </div>



        <div class="form-group">
            <label for="exampleInputEmail1">Sub Heading4 </label>
            <input type="text" class="form-control" name="sub_heading4" id="" aria-describedby=""
                placeholder="Enter sub heading ">
            <small id="" class="form-text text-muted"> </small>
        </div>


        <div class="form-group">
            <label for="exampleInputEmail1">Body text </label>
            <textarea id="" name="body_text"  placeholder="Enter body text" rows="4" cols="50" class="ckeditor form-control">

            </textarea>
        </div>


        <div class="form-group">
            <label for="exampleInputEmail1">Body text 2</label>
            <textarea id="" name="body_text2"  placeholder="Enter body text" rows="4" cols="50" class="ckeditor form-control">

            </textarea>
        </div>



        <div class="form-group">
            <label for="exampleInputEmail1">Body text 3</label>
            <textarea id="" name="body_text3"  placeholder="Enter body text" rows="4" cols="50" class="ckeditor form-control">

            </textarea>
        </div>



        <div class="form-group">
            <label for="exampleInputEmail1">Body text 4</label>
            <textarea id="" name="body_text4"  placeholder="Enter body text" rows="4" cols="50" class="ckeditor form-control">

            </textarea>
        </div>



        <div class="form-group">
            <label for="exampleInputEmail1">Images </label>
            <input type="file" class="form-control" name="images" id="" accept="image/*" type="file"
                id="download-cv-file-name" name="images" id="images" aria-describedby=""
                placeholder="Enter sub heading">
            <small id="" class="form-text text-muted"> </small>
        </div>

        <div class="form-group">
            <label for="exampleInputEmail1">Images2 </label>
            <input type="file" class="form-control" name="images2" id="" accept="image/*" type="file"
                id="download-cv-file-name" name="images2" id="images2" aria-describedby=""
                placeholder="Enter sub heading">
            <small id="" class="form-text text-muted"> </small>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Images3 </label>
            <input type="file" class="form-control" name="images3" id="" accept="image/*" type="file"
                id="download-cv-file-name" name="images3" id="images3" aria-describedby=""
                placeholder="Enter sub heading">
            <small id="" class="form-text text-muted"> </small>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Images4 </label>
            <input type="file" class="form-control" name="images4" id="" accept="image/*" type="file"
                id="download-cv-file-name" name="images4" id="images4" aria-describedby=""
                placeholder="Enter sub heading">
            <small id="" class="form-text text-muted"> </small>
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
