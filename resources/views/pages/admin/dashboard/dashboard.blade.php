@extends('layouts.admin.app')

@section('content')


<div class="container-fluid">
  <div class="page-header">


    الأحصائيات

  </div>
</div>
<div class="container-fluid general-widget">
  <div class="row">
    <div class="col-sm-6 col-xl-3 col-lg-6">
      <div class="card o-hidden border-0">
        <div class="bg-primary b-r-4 card-body">
          <div class="media static-top-widget">
            <div class="align-self-center text-center chart-module"><i data-feather="database"></i></div>
            <div class="media-body"><span class="m-0">الطلبات الطبية</span>
              <h4 class="mb-0 counter">6659</h4><i class="icon-bg" data-feather="database"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- <div class="col-sm-6 col-xl-3 col-lg-6">
                <div class="card o-hidden border-0">
                  <div class="bg-secondary b-r-4 card-body">
                    <div class="media static-top-widget">
                      <div class="align-self-center text-center"><i data-feather="shopping-bag"></i></div>
                      <div class="media-body"><span class="m-0">Products</span>
                        <h4 class="mb-0 counter">9856</h4><i class="icon-bg" data-feather="shopping-bag"></i>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->
    <div class="col-sm-6 col-xl-3 col-lg-6">
      <div class="card o-hidden border-0">
        <div class="bg-primary b-r-4 card-body">
          <div class="media static-top-widget">
            <div class="align-self-center text-center chart-module"><i data-feather="message-circle"></i></div>
            <div class="media-body"><span class="m-0">الطلبات العامة</span>
              <h4 class="mb-0 counter">893</h4><i class="icon-bg" data-feather="message-circle"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-sm-6 col-xl-3 col-lg-6">
      <div class="card o-hidden border-0">
        <div class="bg-primary b-r-4 card-body">
          <div class="media static-top-widget">
            <div class="align-self-center text-center chart-module"><i data-feather="user-plus"></i></div>
            <div class="media-body"><span class="m-0">المستخدمون المسجلون</span>
              <h4 class="mb-0 counter">4531</h4><i class="icon-bg" data-feather="user-plus"></i>
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
</div>

@endsection