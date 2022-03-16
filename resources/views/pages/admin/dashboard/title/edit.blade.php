@extends('layouts.admin.app')
@section('content')
<form method="POST" action="{{ route('title.update', $title->id) }}">
    @csrf
    @method('put')
    <div class="form-group">
        <label for="exampleInputEmail1">Title </label>
        <input type="text" class="form-control" name="title" value="{{ $title->title }}" id="" aria-describedby="emailHelp" placeholder="Enter title">
        <small id="" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Discription </label>
        <input type="text" class="form-control" name="discription" value="{{ $title->discription }}" id="" aria-describedby="" placeholder="Enter discription">
        <small id="" class="form-text text-muted"></small>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection