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
                        <div class="card-body">
                            <a class="btn btn-primary" href="{{
                                route('image.index') }}"> Back</a><br>
                            {{-- <div class="table-responsive product-table">
                                --}}
                                {{-- <table class="display" id="example"> --}}
                                    <div class="row">
                                        <div class="col-6">
                                            <label>Speed:</label>
                                        </div>
                                        <div class="col-6">
                                            <p>{{ $image->speed }}</p>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-6">
                                            <label>Number:</label>

                                        </div>
                                        <div class="col-6">
                                            <p>{{ $image->number }}</p>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-6">
                                            <label>Heading:</label>

                                        </div>
                                        <div class="col-6">
                                            <p>{{ $image->heading }}</p>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-6">
                                            <label>Subheading:</label>

                                        </div>
                                        <div class="col-6">
                                            <p>{{ $image->sub_heading }}</p>
                                        </div>
                                    </div>
                                    <br>

                                    <div class="row">
                                        <div class="col-6">
                                            <label>Bodytext:</label>

                                        </div>
                                        <div class="col-6">
                                            <p>{!! $image->body_text !!}</p>
                                        </div>
                                    </div>
                                    <br>
                                    {{--

                                    <div class="row">
                                        <div class="col-6">
                                            <label>Heading2:</label>

                                        </div>
                                        <div class="col-6">
                                            <p>{{ $image->heading2 }}</p>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-6">
                                            <label>Subheading 2:</label>

                                        </div>
                                        <div class="col-6">
                                            <p>{{ $image->sub_heading2 }}</p>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-6">
                                            <label>Bodytext2:</label>

                                        </div>
                                        <div class="col-6">
                                            <p>{!!$image->body_text2 !!}</p>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-6">
                                            <label>Heading3:</label>

                                        </div>
                                        <div class="col-6">
                                            <p>{{ $image->heading3 }}</p>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-6">
                                            <label>Subheading3:</label>

                                        </div>
                                        <div class="col-6">
                                            <p>{{ $image->sub_heading3 }}</p>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-6">
                                            <label>Heading4:</label>

                                        </div>
                                        <div class="col-6">
                                            <p>{{ $image->heading4 }}</p>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-6">
                                            <label>Subheading4:</label>

                                        </div>
                                        <div class="col-6">
                                            <p>{{ $image->sub_heading4 }}</p>
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-6">
                                            <label>Bodytext4:</label>

                                        </div>
                                        <div class="col-6">
                                            <p>{!! $image->body_text4 !!}</p>
                                        </div>
                                    </div>
                                    <br>
                                    --}}
                                    <form action="{{ route('image.destroy',
                                        $image->id) }}" method="POST">
                                        <a class="btn btn-primary" href="{{
                                            route('image.edit', $image->id) }}">Edit</a>
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit" class="btn
                                            btn-danger">Delete</button>
                                    </form>



                                    {{-- </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
