@extends('layouts.admin.app')
@section('content')


<form method="POST" action="{{ route('youtubeurl.store') }}">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">URL</label>
        <input type="url" class="form-control" name="youtubeurl" id="" aria-describedby="emailHelp" placeholder="Enter URL">
        <small id="" class="form-text text-muted"></small>
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">URL Public</label>
        <input type="url" class="form-control" name="youtubeurlpublic" id="" aria-describedby="emailHelp" placeholder="Enter URL">
        <small id="" class="form-text text-muted"></small>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection