@extends('layouts.admin.app')
@section('content')
<div class="card-body">
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item"><a href="#">Library</a></li>
        <li class="breadcrumb-item active" aria-current="page">الفاتورة</li>
    </ol>
    </nav>
    <a class="btn btn-primary mb-2" href="{{ route('invoicess.create') }}"> New +</a>
    <div class="table-responsive product-table">
        <table class="display" id="example">
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
                    <form action="{{ route('invoicess.destroy', $invoice->id) }}" method="POST">
                        <a class="btn btn-primary" href="{{ route('invoicess.edit', $invoice->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                    <a class="btn btn-primary" href="{{ route('invoicess.show', $invoice->id) }}">Invoice</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection