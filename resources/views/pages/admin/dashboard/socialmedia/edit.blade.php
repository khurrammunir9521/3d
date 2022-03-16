@extends('layouts.admin.app')
@section('content')
    <form method="POST" action="{{ route('social.update', $socials->id) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="exampleInputEmail1">Whatsapp</label>
            <input type="url" class="form-control" name="whatsapp" value="{{$socials->whatsapp}}"id="" aria-describedby="emailHelp"
                placeholder="Enterheading">
            <small id="" class="form-text text-muted"></small>
        </div>


        <div class="form-group">
            <label for="exampleInputEmail1">Facebook </label>
            <input type="url" class="form-control" name="facebook"value="{{$socials->facebook}}" id="" aria-describedby=""
                placeholder="Enter sub heading">
            <small id="" class="form-text text-muted"></small>
        </div>


        <div class="form-group">
            <label for="exampleInputEmail1">Twitter </label>
            <input type="url" class="form-control" name="twitter"value="{{$socials->twitter}}" id="" aria-describedby=""
                placeholder="Enter sub heading">
            <small id="" class="form-text text-muted"> </small>
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    @endsection
