@extends('layouts.admin.app')
@section('content')
<div class="card-body">
<div class="breadcrumb-main">
        <ol class="breadcrumb">
                        <li><a href="{{route('home')}}">الصفحة الرئيسية</a></li>

            <li><a href="#">إعدادات الموقع</a></li>
            <li><a href="#"> عدادات</a></li>
        </ol>
    </div>
    <a class="btn btn-primary mb-2" href="{{ route('counter.create') }}"> Create New Product</a>
    <div class="table-responsive product-table">
        <table class="display" id="example">
            <tr>

                <th>Start</th>
                <th>End</th>
                <th>Action</th>
            </tr>
            @foreach ($counter as $tec)
            <tr>

                <td>{{ $tec->start }}</td>
                <td>{{ $tec->end }}</td>
                <td>
                    <form action="{{ route('counter.destroy', $tec->id) }}" method="POST">
                        <a class="btn btn-primary" href="{{ route('counter.edit', $tec->id) }}">Edit</a>

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