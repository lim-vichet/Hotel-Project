@extends('db.index')
@section('table')
    <div class="data-box">
        <div class="bar2">
            <ul>
                <li>
                    <h1 style="margin-left: 400px;">Welcome to Menu Form!!!</h1>
                </li>
                <li class="btn-default">
                    <a href="{{'menu_form'}}">Add New</a>
                </li>
            </ul>
        </div>
        <table border="1px" class="table table-striped" >
            <tr style="border: 1px solid black; text-align: center; background-color: #9fcdff;">
                <th>ID</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
            @if(count($menus))
                @foreach($menus as $menu)
                    <tr style="border: 1px solid black; text-align: center">
                        <td>{{$menu->id}}</td>
                        <td>{{$menu->name}}</td>
                        <td>
                            <a href="{{route('menu_update',$menu->id)}}" class="btn btn-primary">Edit</a>
                            <a href="{{route('menu_delete',$menu->id)}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            @endif
        </table>
        @if(!count($menus))
            <h1 style="text-align: center">
                There is no data!!!
            </h1>
        @endif
    </div>
@endsection
