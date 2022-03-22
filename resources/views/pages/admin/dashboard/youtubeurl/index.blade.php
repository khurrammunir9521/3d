@extends('layouts.admin.app')
@section('content')

<div class="card-body">
<div class="breadcrumb-main">
        <ol class="breadcrumb">
                        <li><a href="{{route('home')}}">الصفحة الرئيسية</a></li>

            <li><a href="#">إعدادات الموقع</a></li>
            <li><a href="#">يوتيوب رابط</a></li>
        </ol>
    </div>
    <a class="btn btn-primary mb-2" href="{{ route('youtubeurl.create') }}"> Create New Product</a>
    <div class="table-responsive product-table">
        <table class="display" id="example">

            <tr>
                <!-- <th>Id</th> -->
                <th>Vedio link</th>
                <th>Public Vedio link</th>
                <th>Action</th>
            </tr>
            @foreach ($youtubeurls as $youtubeurl)
            <tr>
                <!-- <td>{{ $youtubeurl->id }}</td> -->
                <td>{{ $youtubeurl->youtubeurl }}</td>
                <td>{{ $youtubeurl->youtubeurlpublic }}</td>
                <td>
                    <form action="{{ route('youtubeurl.destroy', $youtubeurl->id) }}" method="POST">
                        <a class="btn btn-primary" href="{{ route('youtubeurl.edit', $youtubeurl->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection