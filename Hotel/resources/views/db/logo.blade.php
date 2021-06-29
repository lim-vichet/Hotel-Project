@extends('db.index')
@section('table')
    <div class="data-box">
        <div class="bar2">
            <ul>
                <li>
                    <h1 style="margin-left: 400px;">Welcome to Logo Form!!!</h1>
                </li>
                <li class="btn-default">
                    <a href="{{'logo_form'}}">Add New</a>
                </li>
            </ul>
        </div>
        <table border="1px" class="table table-striped" >
            <tr style="border: 1px solid black; text-align: center; background-color: #9fcdff;">
                <th>ID</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
            @if(count($logos))
                @foreach($logos as $logo)
                    <tr style="border: 1px solid black; text-align: center">
                        <td>{{$logo->id}}</td>
                        <td style="width: 80px;">
                            <img src="{{asset('storage/uploads/logo/'.$logo->img)}}" style="width: 100%">
                        </td>
                        <td>
                            <a href="{{route('logo_update',$logo->id)}}" class="btn btn-primary">Edit</a>
                            <a href="{{route('logo_delete',$logo->id)}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            @endif
        </table>
        @if(!count($logos))
            <h1 style="text-align: center">
                There is no data!!!
            </h1>
        @endif
    </div>
@endsection
