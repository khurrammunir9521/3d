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
            @if($medi->seen == 0)
            <tr>
                <td><b>{{ $medi->pa_name}}</b></td>
                <td><b>{{ $medi->dr_name }}</b></td>
                <td><b>{{ $medi->dr_spec}}</b></td>
                <td><b>{{ $medi->dr_email }}</b></td>
                <td><b>{{ $medi->hospital }}</b></td>
                <td><b>{{ $medi->procedure }}</b></td>
                <td>
                    <a class="btn btn-primary" href="{{ route('medi.show', $medi->id) }}">View</a>
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
                    <a class="btn btn-primary" href="{{ route('medi.show', $medi->id) }}">View</a>
                </td>

            </tr>
            @endif
            @endforeach
        </table>
    </div>
</div>
@endsection