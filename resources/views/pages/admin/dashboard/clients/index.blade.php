@extends('layouts.admin.app')
@section('content')

<div class="card-body">
<div class="breadcrumb-main">
        <ol class="breadcrumb">
        <li><a href="{{route('home')}}">الصفحة الرئيسية</a></li>
            <li><a href="#">صفحات الموقع</a></li>
            <li><a href="#">قائمة المستخدمين</a></li>
            
        </ol>
    </div>
    <a class="btn btn-primary mb-2" href="{{ route('client.create') }}"> Create New Product</a>
    <div class="table-responsive product-table">
        <table class="display" id="example">
            <tr>

                <th>Inactive</th>
                <th>Active</th>
                <th>log</th>
                <th>team_member</th>
                <th>proposal</th>
                <th>invoice</th>
                <th>payment</th>
                <th>request</th>
                <th>Action</th>
            </tr>
            @foreach ($clients as $client)
            <tr>

                <td>{{ $client->inactive}}</td>
                <td>{{ $client->active }}</td>
                <td>{{ $client->log}}</td>
                <td>{{ $client->team_member }}</td>
                <td>
                    <a href="{{ asset('storage/' . $client->proposal) }}" download="{{ $client->proposal }}">Download</a>
                </td>
                <td>
                    <a href="{{ asset('storage/' . $client->invoice) }}" download="{{ $client->invoice }}">Download</a>
                </td>

                <td>{{ $client->payment }}</td>
                <td>{{$client->request}}</td>
                <td>
                    <form action="{{ route('client.destroy', $client->id) }}" method="POST">
                        <a class="btn btn-primary" href="{{ route('client.edit', $client->id) }}">Edit</a>

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