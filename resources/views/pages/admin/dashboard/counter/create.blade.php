@extends('layouts.admin.app')
@section('content')

            <form method="POST" action="{{route('counter.store')}}">
              @csrf
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">يبدأ </label>
                    <input type="text" class="form-control" name="start" id=""
                      aria-describedby="emailHelp" placeholder="أدخل رقم">
                    <small id="" class="form-text text-muted"></small>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label for="exampleInputEmail1">نهاية </label>
                    <input type="text" class="form-control" name="end" id=""
                      aria-describedby="" placeholder="أدخل رقم">
                    <small id="" class="form-text text-muted"></small>
                  </div>
                </div>
                
              </div>
             
              

              <button type="submit" class="btn btn-primary">يقدم</button>
            </form>

            @endsection
          </div>
        </div>
      </div>
    </div>
  </div>
</div>