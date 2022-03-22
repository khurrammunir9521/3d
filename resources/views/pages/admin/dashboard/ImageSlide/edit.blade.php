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
                        <form method="POST" action="{{ route('image.update',
                            $images->id) }}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-md-6">
                                <div class="form-group">
                                <label for="exampleInputEmail1">Speed </label>
                                <input type="number" class="form-control"
                                    name="speed" id="" value="{{ $images->speed
                                }}"
                                aria-describedby="emailHelp"
                                placeholder="Enterheading">
                                <small id="" class="form-text text-muted">
                                </small>
                            </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group">
                                <label for="exampleInputEmail1">Number </label>
                                <input type="number" class="form-control"
                                    name="number" value="{{ $images->speed }}"
                                id=""
                                aria-describedby="" placeholder="Enter sub
                                heading">
                                <small id="" class="form-text text-muted">
                                </small>
                            </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group">
                                <label for="exampleInputEmail1"> Heading
                                </label>
                                <input type="text" class="form-control"
                                    name="heading" value="{{ $images->heading
                                }}" id=""
                                aria-describedby="" placeholder="Enter sub
                                heading">
                                <small id="" class="form-text text-muted">
                                </small>
                            </div>

                                </div>
                                <div class="col-md-6">
                                <div class="form-group">
                                <label for="exampleInputEmail1"> Heading
                                </label>
                                <input type="text" class="form-control"
                                    name="heading2" value="{{ $images->heading2
                                }}" id=""
                                aria-describedby="" placeholder="Enter sub
                                heading">
                                <small id="" class="form-text text-muted">
                                </small>
                            </div>
                                </div>
                                <div class="col-md-6">
                                
                            <div class="form-group">
                                <label for="exampleInputEmail1"> Heading
                                </label>
                                <input type="text" class="form-control"
                                    name="heading3" value="{{ $images->heading3
                                }}" id=""
                                aria-describedby="" placeholder="Enter sub
                                heading">
                                <small id="" class="form-text text-muted">
                                </small>
                            </div>

                                </div>
                                <div class="col-md-6">
                                <div class="form-group">
                                <label for="exampleInputEmail1"> Heading
                                </label>
                                <input type="text" class="form-control"
                                    name="heading4" value="{{ $images->heading4
                                }}" id=""
                                aria-describedby="" placeholder="Enter sub
                                heading">
                                <small id="" class="form-text text-muted">
                                </small>
                            </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group">
                                <label for="exampleInputEmail1">Sub Heading
                                </label>
                                <input type="text" class="form-control"
                                    name="sub_heading" value="{{ $images->sub_heading
                                }}" id=""
                                aria-describedby="" placeholder="Enter sub
                                heading">
                                <small id="" class="form-text text-muted">
                                </small>
                            </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group">
                                <label for="exampleInputEmail1">Sub Heading
                                </label>
                                <input type="text" class="form-control"
                                    name="sub_heading2" value="{{ $images->sub_heading2
                                }}" id=""
                                aria-describedby="" placeholder="Enter sub
                                heading">
                                <small id="" class="form-text text-muted">
                                </small>
                            </div>
                                </div>
                                <div class="col-md-6">
                                <div class="form-group">
                                <label for="exampleInputEmail1">Sub Heading
                                </label>
                                <input type="text" class="form-control"
                                    name="sub_heading3" value="{{ $images->sub_heading3
                                }}" id=""
                                aria-describedby="" placeholder="Enter sub
                                heading">
                                <small id="" class="form-text text-muted">
                                </small>
                            </div>
                                </div>
                                <div class="col-md-6">
                                
                            <div class="form-group">
                                <label for="exampleInputEmail1">Sub Heading
                                </label>
                                <input type="text" class="form-control"
                                    name="sub_heading4" value="{{ $images->sub_heading4
                                }}" id=""
                                aria-describedby="" placeholder="Enter sub
                                heading">
                                <small id="" class="form-text text-muted">
                                </small>
                            </div>
                                </div>
                                <div class="col-md-6">
                                
                            <div class="form-group">
                                <label for="exampleInputEmail1">Body text
                                </label>
                                <textarea id="" name="body_text"
                                    placeholder="Enter body text" rows="4"
                                    cols="50" class="ckeditor form-control">
                                    {{ $images->body_text }}
                                </textarea>
                            </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Body text 2</label>
                                        <textarea id="" name="body_text2"
                                            placeholder="Enter body text" rows="4"
                                            cols="50" class="ckeditor form-control">
                                            {{ $images->body_text2 }}
                                        </textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                
                            <div class="form-group">
                                <label for="exampleInputEmail1">Body text 3</label>
                                <textarea id="" name="body_text3"
                                    placeholder="Enter body text" rows="4"
                                    cols="50" class="ckeditor form-control">
                                    {{ $images->body_text3 }}
                                </textarea>
                            </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Body text 4</label>
                                        <textarea id="" name="body_text4"
                                            placeholder="Enter body text" rows="4"
                                            cols="50" class="ckeditor form-control">
                                            {{ $images->body_text4 }}
                                        </textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Images </label>
                                        <input type="file" class="form-control"
                                            name="images" id="" accept="image/*"
                                            type="file"
                                            id="download-cv-file-name" name="images"
                                            id="images" value="{{ $images->images }}"
                                        aria-describedby=""
                                        placeholder="Enter sub heading">
                                        <small id="" class="form-text text-muted">
                                        </small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Images2 </label>
                                        <input type="file" class="form-control"
                                            name="images2" id="" accept="image/*"
                                            type="file"
                                            id="download-cv-file-name" name="images2"
                                            id="images2" value="{{ $images->images2 }}"
                                        aria-describedby=""
                                        placeholder="Enter sub heading">
                                        <small id="" class="form-text text-muted">
                                        </small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Images3 </label>
                                        <input type="file" class="form-control"
                                            name="images3" id="" accept="image/*"
                                            type="file"
                                            id="download-cv-file-name" name="images3"
                                            id="images3" value="{{ $images->images3 }}"
                                        aria-describedby=""
                                        placeholder="Enter sub heading">
                                        <small id="" class="form-text text-muted">
                                        </small>
                                    </div>
        
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Images4 </label>
                                        <input type="file" class="form-control"
                                            name="images4" id="" accept="image/*"
                                            type="file"
                                            id="download-cv-file-name" name="images4"
                                            id="images4" value="{{ $images->images4 }}"
                                        aria-describedby=""
                                        placeholder="Enter sub heading">
                                        <small id="" class="form-text text-muted">
                                        </small>
                                    </div>
        
        
                                </div>
                                
                            </div>
                           <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
