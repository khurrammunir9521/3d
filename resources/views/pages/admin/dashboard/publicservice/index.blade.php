@extends('layouts.admin.app')
@section('content')

<div class="card-body">
    <div class="table-responsive product-table">
        <table class="display" id="example">
            <tr>

                <th>Patient Name</th>
                <th>Specialization</th>
                <th>Email</th>
                <th>Gender</th>
                <th>Action</th>
            </tr>
            @foreach ($publics as $medi)
            <tr>
                if($medi->seen == 0){
                <td><b>{{ $medi->full_name}}</b></td>
                <td><b>{{ $medi->specialization }}</b></td>
                <td><b>{{ $medi->email }}</b></td>
                <td><b>{{ $medi->gender }}</b></td>
                }else{

                <td>{{ $medi->full_name}}</td>
                <td>{{ $medi->specialization }}</td>
                <td>{{ $medi->email }}</td>
                <td>{{ $medi->gender }}</td>
                }
                <td>
                    <a class="btn btn-primary" href="{{ route('public.show', $medi->id) }}">View</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection