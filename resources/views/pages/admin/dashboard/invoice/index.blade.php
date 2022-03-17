@extends('layouts.admin.app')
@section('content')
<div class="card-body">
    <a class="btn btn-primary mb-2" href="{{ route('about.create') }}"> Create New Product</a>
    <div class="table-responsive product-table">
        <table class="display" id="example">
            <tr>

                <th>Heading</th>
                <th>Subheading</th>
                <th>Bodytext</th>
                <th >Action</th>
            </tr>
            @foreach ($abouts as $about)
            <tr>

                <td>{{ $about->heading }}</td>
                <td>{{ $about->subheading }}</td>
                <td>{!! $about->bodytext !!}</td>
                <td>
                    <form action="{{ route('about.destroy', $about->id) }}" method="POST">
                        <a class="btn btn-primary" href="{{ route('about.edit', $about->id) }}">Edit</a>

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