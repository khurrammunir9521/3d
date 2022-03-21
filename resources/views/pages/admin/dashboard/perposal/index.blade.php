@extends('layouts.admin.app')
@section('content')
<div class="card-body">
<div class="breadcrumb-main">
        <ol class="breadcrumb">
                        <li><a href="{{route('home')}}">الصفحة الرئيسية</a></li>

            <li><a href="#">وضع اليد</a></li>
           
        </ol>
    </div>
    <a class="btn btn-primary mb-2" href="{{ route('perposal.create') }}"> New +</a>
    <div class="table-responsive product-table">
    <table class="table table-striped" style="width:100%" id="example">
           <thead>
            <tr>
                <th>السعر_نموذج</th>
                <th>السعر_تصميم</th>
                <th>نموذج_الكمية</th>
                <th>الكمية التصميم</th>
                <th>صالح لغاية</th>
                <th>تاريخ</th>
                <th>ضريبة</th>
                <th>أجراءات</th>
             </tr>
            </thead>
            <tbody>
            @foreach ($invoices as $invoice)
            <tr>

                <td>{{$invoice->price_model}}</td>
                <td>{{$invoice->price_design}}</td>
                <td>{{$invoice->qty_model}}</td>
                <td>{{$invoice->qty_design}}</td>
                <td>{{$invoice->validtill}}</td>
                <td>{{$invoice->date}}</td>
                <td>{{$invoice->tax}}</td>

                <td>
                    <form action="{{ route('perposal.destroy', $invoice->id) }}" method="POST">
                        <a class="btn btn-primary" href="{{ route('perposal.edit', $invoice->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    <a class="btn btn-primary" href="{{ route('perposal.show', $invoice->id) }}">Invoice</a>
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection