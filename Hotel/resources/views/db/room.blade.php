@extends('db.index')
@section('table')
    <div class="data-box">
        <div class="bar2">
            <ul>
                <li>
                    <h1 style="margin-left: 400px;">Welcome to Room Form!!!</h1>
                </li>
                <li class="btn-default">
                    <a href="{{'room_form'}}">Add New</a>
                </li>
            </ul>
        </div>
        <table border="1px" class="table table-striped" >
            <tr style="border: 1px solid black; text-align: center; background-color: #9fcdff;">
                <th>ID</th>
                <th>Room Name</th>
                <th>Price</th>
{{--                <th>Title</th>--}}
{{--                <th>Description</th>--}}
                <th>Image</th>
                <th>Action</th>
            </tr>
            @if(count($rooms))
                @foreach($rooms as $room)
                    <tr style="border: 1px solid black; text-align: center">
                        <td>{{$room->id}}</td>
                        <td>{{$room->name}}</td>
                        <td>{{$room->price}}</td>
{{--                        <td>{{$room->title}}</td>--}}
{{--                        <td>{{$room->description}}</td>--}}
                        <td style="width: 80px;">
                            <img src="{{asset('storage/uploads/room/'.$room->img)}}" style="width: 100%">
                        </td>
                        <td>
                            <a href="{{route('room_update',$room->id)}}" class="btn btn-primary">Edit</a>
                            <a href="{{route('room_delete',$room->id)}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            @endif
        </table>
{{--        ========="Pagination"=========--}}
        <div>
            {!! $rooms->render() !!}
        </div>
        @if(!count($rooms))
            <h1 style="text-align: center">
                There is no data!!!
            </h1>
        @endif
    </div>
@endsection
