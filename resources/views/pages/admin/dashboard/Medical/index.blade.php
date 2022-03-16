@extends('layouts.admin.app')
@section('content')

<div class="card-body">
    <div class="table-responsive product-table">
        <table class="display" id="example">
            <tr>

                <th>Patient Name</th>
                <th>Doctor Name</th>
                <th>Docter Spec</th>
                <th>Docter Email</th>
                <th>Hospital</th>
                <th>procedure</th>
                <th>Action</th>
            </tr>
            @foreach ($medical as $medi)
            <tr>

                <td>{{ $medi->pa_name}}</td>
                <td>{{ $medi->dr_name }}</td>
                <td>{{ $medi->dr_spec}}</td>
                <td>{{ $medi->dr_email }}</td>
                <td>{{ $medi->hospital }}</td>
                <td>{{ $medi->procedure }}</td>
                <td>
                    <a class="btn btn-primary" href="{{ route('medi.show', $medi->id) }}">View</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection