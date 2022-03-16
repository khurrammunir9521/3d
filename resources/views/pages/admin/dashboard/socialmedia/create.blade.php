@extends('layouts.admin.app')
@section('content')


    <form method="POST" action="{{ route('social.store') }}">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Whatsapp</label>
            <input type="url" class="form-control" name="whatsapp" id="" aria-describedby="emailHelp"
                placeholder="Enterheading">
            <small id="" class="form-text text-muted"></small>
        </div>


        <div class="form-group">
            <label for="exampleInputEmail1">Facebook </label>
            <input type="url" class="form-control" name="facebook" id="" aria-describedby=""
                placeholder="Enter sub heading">
            <small id="" class="form-text text-muted"></small>
        </div>


        <div class="form-group">
            <label for="exampleInputEmail1">Twitter </label>
            <input type="url" class="form-control" name="twitter" id="" aria-describedby=""
                placeholder="Enter sub heading">
            <small id="" class="form-text text-muted"> </small>
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
