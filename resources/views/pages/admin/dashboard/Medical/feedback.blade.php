@extends('layouts.admin.app')
@section('content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
			  <form action="{{route('feedback.store')}}" method="POST">
				  @csrf
				 <div class="col-12">
					<label class="form-label">Email</label>
					<input type="email" class="form-control" name="email" >
				</div>
				   <div class="col-12">
					<label class="form-label">Question</label>
					   <textarea class="form-control" name="question"></textarea>
				</div>
			  </form>
			<button type="submit" class="btn btn-primary">Submit</button>
		</div>
	</div>
</div>

@endsection