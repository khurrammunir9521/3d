@extends('layouts.admin.app')
@section('content')
<div class="card-body">
<div class="breadcrumb-main">
        <ol class="breadcrumb">
                        <li><a href="{{route('home')}}">الصفحة الرئيسية</a></li>

            <li><a href="#">صفحات الموقع</a></li>
            <li><a href="#">اتصل بنا</a></li>
            
        </ol>
    </div>
    <a class="btn btn-primary mb-2" href="{{ route('contact.create') }}"> Create New Product</a>
    <div class="table-responsive product-table">
        <table class="display" id="example">
            <tr>
                <th>Location name</th>
                <th>Location map</th>
                <th>Heading</th>
                <th>Subheading</th>
                <th>Email</th>
                <th> Phone</th>
                <th>Address</th>

                <th>Bodytext</th>
                <th>Action</th>
            </tr>
            @foreach ($contacts as $contact)
            <tr>
                <td>{{ $contact->location_name }}</td>
                <td>{{ $contact->location_map }}</td>
                <td>{{ $contact->heading}}</td>
                <td>{{ $contact->subheading }}</td>
                <td>{{ $contact->email }}</td>
                <td>{{ $contact->phone }}</td>
                <td>{{ $contact->address }}</td>
                <td>{!!$contact->body_text!!}</td>
                <td>
                    <form action="{{ route('contact.destroy', $contact->id) }}" method="POST">
                        <a class="btn btn-primary" href="{{ route('contact.edit', $contact->id) }}">Edit</a>

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
