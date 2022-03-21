@extends('layouts.admin.app')
@section('content')
    <div class="card-body">
    <div class="breadcrumb-main">
        <ol class="breadcrumb">
                        <li><a href="{{route('home')}}">الصفحة الرئيسية</a></li>

            <li><a href="#">إعدادات الموقع</a></li>
            <li><a href="#">صور البانر المتحرك</a></li>
        </ol>
    </div>
        <a class="btn btn-primary mb-2" href="{{ route('image.create') }}">+Add Slider</a>
        <div class="table-responsive product-table">
            <table class="display" id="example">
                <tr>
                    <th>Image</th>
                    <th>Heading</th>
                    <th>SubHeading</th>
                    <th>Content</th>
                    <th>Action</th>


                @foreach ($sliders as $slider)
                <tr>
                    <td><img src="{{ asset($slider->images) }}" style="height:60px;width:60px;"></td>
                    <td>{{$slider->heading}}</td>
                    <td>{{$slider->sub_heading}}</td>
                    <td>{{$slider->body_text}}</td>
                    <td><a href="{{route('view',$slider->id)}}" class="btn btn-primary">View</a></td>
                @endforeach
                <tr>
            </table>
        </div>
    </div>
@endsection
