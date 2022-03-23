<!-- @extends('layouts.admin.app')
@section('content')

<div class="content-main">
    <h3>صورة الخريطة</h3>
    <div class="breadcrumb-main">
        <ol class="breadcrumb">
            <li><a href="{{route('home')}}">الصفحة الرئيسية</a></li>

            <li><a href="#">إعدادات الموقع</a></li>
            <li><a href="{{ route('map.index') }}">صورة الخريطة</a></li>
        </ol>
    </div>
    <div class="container-fluid p-0">
        <div class="row">
            <div class="col-sm-12">
                <div class="card medical-card">
                    <div class="card-body p-0">
                        <a class="btn btn-primary mb-2" href="{{
                            route('map.create') }}"> إنشاء منتج جديد</a>
                        <div class="table-responsive medical-datatable">
                            <table class="display" style="width:100%"
                                id="basic-2">
                                <thead>
                                    <tr>
                                        <th>صورة</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                @foreach ($maps as $map)
                                <tr>

                                    <td><img src="{{ asset('storage/' . $map->map_image)
                                        }}" style="height:60px;width:60px;">
                                    </td>
                                    <td>
                                        <form action="{{ route('map.destroy',
                                            $map->id) }}" method="POST">
                                            <a class="btn btn-primary" href="{{
                                                route('map.edit', $map->id) }}">يحرر</a>
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn
                                                btn-danger">حذف</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </table>
                        </div>
                    </div>
                  
                </div>    
            </div>    
        </div>    
    </div>     
</div>    
@endsection -->


<!-- @extends('layouts.admin.app')
@section('content')

<div class="card-body">
    <a class="btn btn-primary mb-2" href="{{ route('map.create') }}"> Create New Product</a>
    <div class="table-responsive product-table">
        <table class="display" id="example">
            <tr>
                <th>Image</th>
                <th>Action</th>
            </tr>
            @foreach ($maps as $map)
            <tr>

                <td><img src="{{ asset('storage/' . $map->map_image) }}" style="height:60px;width:60px;">
                </td>
                <td>
                    <form action="{{ route('map.destroy', $map->id) }}" method="POST">
                        <a class="btn btn-primary" href="{{ route('map.edit', $map->id) }}">Edit</a>

                        @csrf
                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>
@endsection -->