@extends('layouts.admin.app')
@section('content')

<div class="card-body">
    <a class="btn btn-primary mb-2" href="{{ route('social.create') }}"> Create New Product</a>
    <div class="table-responsive product-table">
        <table class="display" id="example">

            <tr>
                <!-- <th>Id</th> -->
                <th>Whatsapp link</th>
                <th>instagram link</th>
                <th> Facebook link</th>
                <th>Twitter link</th>

                <th >Action</th>
            </tr>
            @foreach ($socials as $social)
            <tr>
                <!-- <td>{{ $social->id }}</td> -->
                <td>{{ $social->whatsapp }}</td>
                <td>{{ $social->facebook }}</td>
                <td>{{ $social->twitter }}</td>

                <td>
                    <form action="{{ route('social.destroy', $social->id) }}" method="POST">
                        <a class="btn btn-primary" href="{{ route('social.edit', $social->id) }}">Edit</a>

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