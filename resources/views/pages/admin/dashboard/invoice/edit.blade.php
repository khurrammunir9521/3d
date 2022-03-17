@extends('layouts.admin.app')
@section('content')
<form method="POST" action="{{ route('about.update', $abouts->id) }}">
    @csrf
    @method('put')
    <div class="form-group">
        <label for="exampleInputEmail1">Heading </label>
        <input type="text" class="form-control" name="heading" value="{{ $abouts->heading }}" id="" aria-describedby="emailHelp" placeholder="Enterheading">
        <small id="" class="form-text text-muted"> </small>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Sub Heading </label>
        <input type="text" class="form-control" name="subheading" value="{{ $abouts->subheading }}" id="" aria-describedby="" placeholder="Enter sub heading">
        <small id="" class="form-text text-muted"> </small>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Body text </label>
        <textarea id="" name="bodytext" placeholder="Enter body text" rows="4" cols="50" class="ckeditor form-control">
        {{$abouts->bodytext}}
        </textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection