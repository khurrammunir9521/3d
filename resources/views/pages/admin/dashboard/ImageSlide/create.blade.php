@extends('layouts.admin.app')
@section('content')
<div class="content-main">
    <h3>صور البانر المتحرك</h3>
    <div class="breadcrumb-main">
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}">الصفحة الرئيسية</a></li>

            <li><a href="#">إعدادات الموقع</a></li>
            <li><a href="{{ route('image.index') }}">صور البانر المتحرك</a></li>
        </ol>
    </div>
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-sm-12">
                <div class="card medical-card">
                    <div class="card-body p-0">
                        <form method="POST" action="{{ route('image.store') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Speed </label>
                                        <input type="number" class="form-control"
                                            name="speed" id=""
                                            aria-describedby="emailHelp"
                                            placeholder="Enter speed">
                                        <small id="" class="form-text text-muted">
                                        </small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Number </label>
                                        <input type="number" class="form-control"
                                            name="number" id="" aria-describedby=""
                                            placeholder="Enter number">
                                        <small id="" class="form-text text-muted">
                                        </small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1"> Heading
                                        </label>
                                        <input type="text" class="form-control"
                                            name="heading" id="" aria-describedby=""
                                            placeholder="Enter heading">
                                        <small id="" class="form-text text-muted">
                                        </small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    
                            <div class="form-group">
                                <label for="exampleInputEmail1">Sub Heading
                                </label>
                                <input type="text" class="form-control"
                                    name="sub_heading" id="" aria-describedby=""
                                    placeholder="Enter sub heading">
                                <small id="" class="form-text text-muted">
                                </small>
                            </div>
                                </div>
                                
                                
                            </div>
                            
                           

                           
                            <div class="form-group">
                                <label for="exampleInputEmail1">Body text
                                </label>
                                <textarea id="" name="body_text"
                                    placeholder="Enter body text" rows="4"
                                    cols="50" class="ckeditor form-control">
                                </textarea>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Images </label>
                                    <input type="file" class="form-control"
                                        name="images" id="" accept="image/*"
                                        type="file"
                                        id="download-cv-file-name" name="images"
                                        id="images" aria-describedby=""
                                        placeholder="Enter sub heading">
                                    <small id="" class="form-text text-muted">
                                    </small>
                                </div>
                            </div>
                           

                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                        @endsection
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
