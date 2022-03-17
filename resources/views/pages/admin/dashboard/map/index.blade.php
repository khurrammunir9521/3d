@extends('layouts.admin.app')
@section('content')

<div class="card-body">
    <a class="btn btn-primary mb-2" href="{{ route('map.create') }}"> Create New Product</a>
    <div class="table-responsive product-table">
        <table class="display" id="example">
            <tr>
                <th>Image</th>
                <th>Action</th>
            </tr>
            @foreach ($maps as $map)
            <tr>

                <td><img src="{{ asset('storage/' . $map->map_image) }}" style="height:60px;width:60px;">
                </td>
                <td>
                    <form action="{{ route('map.destroy', $map->id) }}" method="POST">
                        <a class="btn btn-primary" href="{{ route('map.edit', $map->id) }}">Edit</a>

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