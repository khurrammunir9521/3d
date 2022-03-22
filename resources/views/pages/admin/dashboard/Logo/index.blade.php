@extends('layouts.admin.app')
@section('content')
    <div class="card-body">
    <div class="breadcrumb-main">
        <ol class="breadcrumb">
                        <li><a href="{{route('home')}}">الصفحة الرئيسية</a></li>

            <li><a href="#">إعدادات الموقع</a></li>
            <li><a href="#">الشعارات</a></li>
        </ol>
    </div>
        <a class="btn btn-primary mb-2" href="{{ route('logo.create') }}"> إنشاء منتج جديد</a>
        <div class="table-responsive product-table">
            <table class="display" id="example">
                <tr>
                    <th>Image</th>
                    <th>Image1</th>
                    <th>Image2</th>
                    <th>Image3</th>
                    <th>Image4</th>
                    <th>Image5</th>
                    <th>Image6</th>
                    <th>Image7</th>
                    <th>Action</th>
                </tr>
                @foreach ($logos as $logo)
                    <tr>

                        <td><img src="{{ asset('storage/' . $logo->logo1) }}" style="height:60px;width:60px;">
                        </td>
                        <td><img src="{{ asset('storage/' . $logo->logo2) }}" style="height:60px;width:60px;">
                        </td>
                        <td><img src="{{ asset('storage/' . $logo->logo3) }}" style="height:60px;width:60px;">
                        </td>
                        <td><img src="{{ asset('storage/' . $logo->logo4) }}" style="height:60px;width:60px;">
                        </td>
                        <td><img src="{{ asset('storage/' . $logo->logo5) }}" style="height:60px;width:60px;">
                        </td>
                        <td><img src="{{ asset('storage/' . $logo->logo6) }}" style="height:60px;width:60px;">
                        </td>
                        <td><img src="{{ asset('storage/' . $logo->logo7) }}" style="height:60px;width:60px;">
                        </td>
                        <td><img src="{{ asset('storage/' . $logo->logo8) }}" style="height:60px;width:60px;">
                        </td>



                        <td>
                            <form action="{{ route('logo.destroy', $logo->id) }}" method="POST">
                                <a class="btn btn-primary" href="{{ route('logo.edit', $logo->id) }}">يحرر</a>

                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger">حذف</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
@endsection
