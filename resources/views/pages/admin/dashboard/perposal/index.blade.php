@extends('layouts.admin.app')
@section('content')
<div class="card-body">
    <a class="btn btn-primary mb-2" href="{{ route('perposal.create') }}"> New +</a>
    <div class="table-responsive product-table">
        <table class="display" id="example">
            <tr>


                <th>Price_model</th>
                <th>Price_design</th>
                <th>Qty_model</th>
                <th>Qty_design</th>
                <th>Validtill</th>
                <th>Date</th>
                <th>Tax</th>
                <th>Actions</th>

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
        </table>
    </div>
</div>
@endsection