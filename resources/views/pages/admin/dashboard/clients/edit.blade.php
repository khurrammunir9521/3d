@extends('layouts.admin.app')
@section('content')
    <form method="POST" action="{{ route('client.update', $clients->id) }}">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="exampleInputEmail1">Inactive </label>
            <input type="text" class="form-control" name="inactive" value="{{$clients->inactive}}"id="" aria-describedby="emailHelp" placeholder="Enterheading">
            <small id="" class="form-text text-muted"></small>
          </div>
          <div class="form-group">
              <label for="exampleInputEmail1">Active </label>
              <input type="text" class="form-control" name="active"id=""value="{{$clients->active}}" aria-describedby="" placeholder="Enter sub heading">
              <small id="" class="form-text text-muted"></small>
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1"> Log </label>
              <input type="text" class="form-control" name="log" value="{{$clients->log}}"id="" aria-describedby="" placeholder="Enter sub heading">
              <small id="" class="form-text text-muted"></small>
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Team member </label>
              <input type="text" class="form-control" name="team_member" value="{{$clients->team_member}}"id="" aria-describedby="" placeholder="Enter sub heading">
              <small id="" class="form-text text-muted"></small>
            </div>


            <div class="form-group">
              <label for="exampleInputEmail1">Payment </label>
              <input type="text" class="form-control"name="payment"value="{{$clients->payment}}" id="" aria-describedby="" placeholder="Enter body text">
              <small id="" class="form-text text-muted"></small>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail1">Request </label>
              <input type="text" class="form-control"name="requests"value="{{$clients->request}}" id="" aria-describedby="" placeholder="Enter body text">
              <small id="" class="form-text text-muted"> </small>
            </div>
            <!-- <div class="form-group">
              <label for="exampleInputEmail1">Proposal </label>
              <input type="text" class="form-control" name="proposal" value="{{$clients->proposal}}"id="" aria-describedby="" placeholder="Enter sub heading">
              <small id="" class="form-text text-muted"> </small>
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Invoice </label>
              <input type="text" class="form-control" name="invoice"value="{{$clients->invoice}}"id="" aria-describedby="" placeholder="Enter sub heading">
              <small id="" class="form-text text-muted">small>
            </div> -->

          <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
