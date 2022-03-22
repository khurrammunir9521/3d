@extends('layouts.admin.app')
@section('content')

<div class="card-body">
<div class="breadcrumb-main">
        <ol class="breadcrumb">
                        <li><a href="{{route('home')}}">الصفحة الرئيسية</a></li>

            <li><a href="#">طلبات الخدمات العامة</a></li>
           
        </ol>
    </div>
    <div class="table-responsive product-table public-datatable">
        <table class="table table-striped" style="width:100%" id="example">
        <thead>
            <tr>

                <th>اسم المريض</th>
                <th>التخصص</th>
                <th>  البريد الالكتروني</th>
                <th>النوع</th>
                <th>رقم الطلب</th>
                <th>التاريخ</th>
                <!-- <th>Action</th> -->
            </tr>
            </thead>
            <tbody>
            @foreach ($publics as $medi)
            @if($medi->seen == 0)
            <tr>
                <td><b>{{ $medi->full_name}}</b></td>
                <td><b>{{ $medi->specialization }}</b></td>
                <td><b>{{ $medi->email }}</b></td>
                <td><b>{{ $medi->gender }}</b></td>
                <td>
                    <a class="btn btn-primary" href="{{ route('publics.show', $medi->id) }}">عرض</a>
                </td>
            </tr>
            @else
            <tr>
                <td>{{ $medi->full_name}}</td>
                <td>{{ $medi->specialization }}</td>
                <td>{{ $medi->email }}</td>
                <td>{{ $medi->gender }}</td>
                <td>
                    <a class="btn btn-primary" data-artid="<?php echo $medi['id']; ?>" href="{{ route('publics.show', $medi->id) }}">عرض</a>
                </td>
            </tr>
            @endif


            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@push('scripts')
<script type="text/javascript">
        $(function(){
            $('.link').click(function(){
                var elem = $(this);
                $.ajax({
                    type: "GET",
                    url: "{{route('mark.read')}}",
                    data: "id="+elem.attr('data-artid'),
                    dataType:"json",  
                    success: function(data) {
                        if(data.success){
                               elem.hide();
                               $('#message').html(data.message);
                        }
                    }
                });
                return false;
            });
        });
        </script>
@endpush