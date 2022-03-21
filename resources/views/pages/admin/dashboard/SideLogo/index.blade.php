@extends('layouts.admin.app')
@section('content')

<div class="card-body">
<div class="breadcrumb-main">
        <ol class="breadcrumb">
                        <li><a href="{{route('home')}}">الصفحة الرئيسية</a></li>

            <li><a href="#">إعدادات الموقع</a></li>
            <li><a href="#">الصورة الجانبية</a></li>
        </ol>
    </div>
    <a class="btn btn-primary mb-2" href="{{ route('side.create') }}"> Create New Product</a>
    <div class="table-responsive product-table">
        <table class="display" id="example">
            <tr>
                <th>Image</th>
<th >Heading</th>
				<th >Sub Heading</th>
                <th >Action</th>
            </tr>
            @foreach ($sides as $side)
            <tr>

                <td><img src="{{ asset('storage/' . $side->side_image) }}" style="height:60px;width:60px;">
                </td>
				<td>{{$side->heading }}
                </td>
				<td>{{$side->subheading}}
                </td>
                <td>
                    <form action="{{ route('side.destroy', $side->id) }}" method="POST">
                        <a class="btn btn-primary" href="{{ route('side.edit', $side->id) }}">Edit</a>

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
