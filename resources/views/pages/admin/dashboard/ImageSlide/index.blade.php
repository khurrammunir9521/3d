@extends('layouts.admin.app')
@section('content')
    <div class="card-body">
        <a class="btn btn-primary mb-2" href="{{ route('image.create') }}"> Create New Product</a>
        <div class="table-responsive product-table">
            <table class="display" id="example">
                <tr>
                    <th>Image</th>
                    <th>Image2</th>
                    <th>Image3</th>
                    <th>Image4</th>
                    <th>Action</th>


                @foreach ($imagess as $image)
                <tr>
                    <td><img src="{{ asset('storage/' . $image->images) }}" style="height:60px;width:60px;">
                    </td>
                    <td><img src="{{ asset('storage/' . $image->images2) }}" style="height:60px;width:60px;">
                    </td>
                    <td><img src="{{ asset('storage/' . $image->images3) }}" style="height:60px;width:60px;">
                    </td>
                    <td><img src="{{ asset('storage/' . $image->images4) }}" style="height:60px;width:60px;">
                    </td>
                    <td><a href="{{route('view',$image->id)}}" class="btn btn-primary">View</a></td>

                @endforeach


            </table>
        </div>
    </div>
@endsection
