@extends('layouts.admin.app')
@section('content')
<div class="card-body">
    <a class="btn btn-primary mb-2" href="{{ route('title.create') }}"> Create New Product</a>
    <div class="table-responsive product-table">
        <table class="display" id="example">
            <tr>

                <th>Title</th>
                <th>Discription</th>
                <th>Action</th>
            </tr>
            @foreach ($titles as $tec)
            <tr>
                <td>{{ $tec->title }}</td>
                <td>{{ $tec->discription }}</td>
                <td>
                    <form action="{{ route('title.destroy', $tec->id) }}" method="POST">
                        <a class="btn btn-primary" href="{{ route('title.edit', $tec->id) }}">Edit</a>

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