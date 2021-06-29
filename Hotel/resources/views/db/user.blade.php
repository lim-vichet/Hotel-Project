@extends('db.index')
@section('table')
    <div class="data-box">
        <div class="bar2">
            <ul>
                <li>
                    <h1 style="margin-left: 400px;">Welcome to User Form!!!</h1>
                </li>
                <li class="btn-default">
                    <a href="{{'user_form'}}">Add New</a>
                </li>
            </ul>
        </div>
        <table border="1px" class="table table-striped" >
            <tr style="border: 1px solid black; text-align: center; background-color: #9fcdff;">
                <th>ID</th>
                <th>Name</th>
                <th>E-mail</th>
                <th>Password</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
            @if(count($users))
                @foreach($users as $user)
                    <tr style="border: 1px solid black; text-align: center">
                        <td>{{$user->id}}</td>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->password}}</td>
                        <td style="width: 80px;">
                            <img src="{{asset('storage/uploads/logo/'.$user->img)}}" style="width: 100%">
                        </td>
                        <td>
                            <a href="{{route('user_update',$user->id)}}" class="btn btn-primary">Edit</a>
                            <a href="{{route('user_delete',$user->id)}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            @endif
        </table>
        @if(!count($users))
            <h1 style="text-align: center">
                There is no data!!!
            </h1>
        @endif
    </div>
@endsection
