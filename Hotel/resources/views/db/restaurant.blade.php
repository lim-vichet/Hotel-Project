@extends('db.index')
@section('table')
    <div class="data-box">
        <div class="bar2">
            <ul>
                <li>
                    <h1 style="margin-left: 400px;">Welcome to Restaurant Form!!!</h1>
                </li>
                <li class="btn-default">
                    <a href="{{'restaurant_form'}}">Add New</a>
                </li>
            </ul>
        </div>
        <table border="1px" class="table table-striped" >
            <tr style="border: 1px solid black; text-align: center; background-color: #9fcdff;">
                <th>ID</th>
                <th>Menu Name</th>
                <th>Menu Type</th>
                <th>Price</th>
{{--                <th>Description</th>--}}
                <th>Image</th>
                <th>OD</th>
                <th>Action</th>
            </tr>
            @if(count($restaurants))
                @foreach($restaurants as $restaurant)
                    <tr style="border: 1px solid black; text-align: center">
                        <td>{{$restaurant->id}}</td>
                        <td>{{$restaurant->name}}</td>
                        <td>{{$restaurant->menuCategory->name}}</td>
                        <td>{{$restaurant->price}}</td>
{{--                        <td>{{$restaurant->description}}</td>--}}
                        <td style="width: 80px;">
                            <img src="{{asset('storage/uploads/room/'.$restaurant->img)}}" style="width: 100%">
                        </td>
                        <td>{{$restaurant->od}}</td>
                        <td>
                            <a href="{{route('restaurant_update',$restaurant->id)}}" class="btn btn-primary">Edit</a>
                            <a href="{{route('restaurant_delete',$restaurant->id)}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            @endif
        </table>
{{--        ========="Pagination"=========--}}
        <div>
            {!! $restaurants->render() !!}
        </div>
        @if(!count($restaurants))
            <h1 style="text-align: center">
                There is no data!!!
            </h1>
        @endif
    </div>
@endsection
