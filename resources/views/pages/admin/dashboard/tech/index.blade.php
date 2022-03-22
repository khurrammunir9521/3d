@extends('layouts.admin.app')
@section('content')
<div class="card-body">
<div class="breadcrumb-main">
        <ol class="breadcrumb">
                        <li><a href="{{route('home')}}">الصفحة الرئيسية</a></li>

            <li><a href="#">صفحات الموقع</a></li>
            <li><a href="#">صفحة تقنية الـ 3D</a></li>
            
        </ol>
    </div>
    <a class="btn btn-primary mb-2" href="{{ route('tech.create') }}"> Create New Product</a>
    <div class="table-responsive product-table">
        <table class="display" id="example">
            <tr>

                <th>Heading</th>
                <th>Subheading</th>
                <th>Bodytext</th>
                <th>Action</th>
            </tr>
            @foreach ($tech as $tec)
            <tr>

                <td>{{ $tec->heading }}</td>
                <td>{{ $tec->subheading }}</td>
                <td>{!! $tec->bodytext !!}</td>
                <td>
                    <form action="{{ route('tech.destroy', $tec->id) }}" method="POST">
                        <a class="btn btn-primary" href="{{ route('tech.edit', $tec->id) }}">Edit</a>

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
