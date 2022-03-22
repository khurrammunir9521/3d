@extends('layouts.admin.app')
@section('content')


<div class="card-body">
    <nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Library</a></li>
        <li class="breadcrumb-item active" aria-current="page">Data</li>
    </ol>
    </nav>
    <div class="table-responsive product-table medical-datatable">
    <table class="table table-striped" style="width:100%" id="example">
            <thead>
            <tr>

                <th>   اسم المريض</th>
                <th>  اسم الطبيب</th>
                <th>التخصص</th>
                <th>  ايميل الطبيب</th>
                <th> المستشفى</th>
                <th>المطلوب</th>
                <th>   رقم الطلب</th>
                <th>التاريخ</th>
                <!-- <th>Action</th> -->
            </tr>
            </thead>
            <tbody>
            @foreach ($medical as $medi)
            @if($medi->seen == 0)
            <tr>
                <td><b>{{ $medi->pa_name}}</b></td>
                <td><b>{{ $medi->dr_name }}</b></td>
                <td><b>{{ $medi->dr_spec}}</b></td>
                <td><b>{{ $medi->dr_email }}</b></td>
                <td><b>{{ $medi->hospital }}</b></td>
                <td><b>{{ $medi->procedure }}</b></td>
                <td>
                    <a class="btn btn-primary" href="{{ route('medi.show', $medi->id) }}">عرض</a>
                </td>
            </tr>
            @else
            <tr>
                <td>{{ $medi->pa_name}}</td>
                <td>{{ $medi->dr_name }}</td>
                <td>{{ $medi->dr_spec}}</td>
                <td>{{ $medi->dr_email }}</td>
                <td>{{ $medi->hospital }}</td>
                <td>{{ $medi->procedure }}</td>
                <td>
                    <a class="btn btn-primary" href="{{ route('medi.show', $medi->id) }}">عرض</a>
                </td>

            </tr>
            @endif
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection