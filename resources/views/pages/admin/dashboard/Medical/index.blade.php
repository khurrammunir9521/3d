@extends('layouts.admin.app')
@section('content')


<div class="content-main">
    <div class="breadcrumb-main">
        <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Pictures</a></li>
            <li><a href="#">Summer 15</a></li>
            <li>Italy</li>
        </ol>
    </div>
    
    <div class="container-fluid p-0">
            <div class="row">
              <div class="col-sm-12">
                <div class="card medical-card">
                 <div class="card-body p-0">
                 <div class="table-responsive medical-datatable">
                    <table class="display" style="width:100%" id="basic-2">

            <thead>
            <tr>

                <th>Patient Name</th>
                <th>Doctor Name</th>
                <th>Docter Spec</th>
                <th>Docter Email</th>
                <th>Hospital</th>
                <th>procedure</th>
                <th>Action</th>
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
            </tbody>
        </table>
    </div>
                 </div>
                 </div>
                 </div>
                 </div>
                 </div>
    
</div>
@endsection