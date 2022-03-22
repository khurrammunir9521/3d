@extends('layouts.admin.app')
@section('content')

<div class="content-main">
    <h3>قائمة المستخدمين</h3>
    <div class="breadcrumb-main">
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}">الصفحة الرئيسية</a></li>
            <li><a href="#">صفحات الموقع</a></li>
            <li><a href="{{ route('client.index') }}">قائمة المستخدمين</a></li>
        </ol>
    </div>
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-sm-12">
                <div class="card medical-card">
                    <div class="card-body p-0">
                        <form method="POST" action="{{ route('client.store') }}"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Inactive
                                        </label>
                                        <input type="text" class="form-control"
                                            name="inactive" id=""
                                            aria-describedby="emailHelp"
                                            placeholder="Enter heading">
                                        <small id="" class="form-text
                                            text-muted"></small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Active
                                        </label>
                                        <input type="text" class="form-control"
                                            name="active" id=""
                                            aria-describedby=""
                                            placeholder="Enter sub heading">
                                        <small id="" class="form-text
                                            text-muted"></small>
                                    </div>
                                </div>
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label for="exampleInputEmail1"> Log
                                        </label>
                                        <input type="text" class="form-control"
                                            name="log" id="" aria-describedby=""
                                            placeholder="Enter log">
                                        <small id="" class="form-text
                                            text-muted"></small>
                                    </div>

                                </div>
                                <div class="col-md-6">

                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Team
                                            member
                                        </label>
                                        <input type="number"
                                            class="form-control"
                                            name="team_member" id=""
                                            aria-describedby=""
                                            placeholder="Enter Team member">
                                        <small id="" class="form-text
                                            text-muted"></small>
                                    </div>


                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Payment
                                        </label>
                                        <input type="number"
                                            class="form-control"
                                            name="payment" id=""
                                            aria-describedby=""
                                            placeholder="Enter payments">
                                        <small id="" class="form-text
                                            text-muted"></small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Request
                                        </label>
                                        <input type="text" class="form-control"
                                            name="requests" id=""
                                            aria-describedby=""
                                            placeholder="Enter request">
                                        <small id="" class="form-text
                                            text-muted">
                                        </small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Proposal
                                        </label>
                                        <input type="file"
                                            accept="application/pdf,
                                            application/vnd.ms-excel"
                                            class="form-control" name="proposal"
                                            id=""
                                            aria-describedby="">
                                        <small id="" class="form-text
                                            text-muted">
                                        </small>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Invoice
                                        </label>
                                        <input type="file"
                                            accept="application/pdf,
                                            application/vnd.ms-excel"
                                            class="form-control" name="invoice"
                                            id=""
                                            aria-describedby="">
                                        <small id="" class="form-text
                                            text-muted"><small>
                                            </div>


                                        </div>

                                    </div>








                                    <button type="submit" class="btn
                                        btn-primary">Submit</button>
                                </form>
                                @endsection
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>