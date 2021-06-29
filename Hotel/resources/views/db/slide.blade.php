@extends('db.index')
@section('table')
    <div class="data-box">
        <div class="bar2">
            <ul>
                <li>
                    <h1 style="margin-left: 400px;">Welcome to Slide Form!!!</h1>
                </li>
                <li class="btn-default">
                    <a href="{{'slide_form'}}">Add New</a>
                </li>
            </ul>
        </div>
        <table border="1px" class="table table-striped" >
            <tr style="border: 1px solid black; text-align: center; background-color: #9fcdff;">
                <th>ID</th>
                <th>Image_Slide</th>
                <th>Image_Ads1</th>
                <th>Image_Ads2</th>
                <th>Action</th>
            </tr>
            @if(count($slides))
                @foreach($slides as $slide)
                    <tr style="border: 1px solid black; text-align: center">
                        <td>{{$slide->id}}</td>
                        <td style="width: 80px;">
                            <img src="{{asset('storage/uploads/logo/'.$slide->img_slide)}}" style="width: 100%">
                        </td>
                        <td style="width: 80px;">
                            <img src="{{asset('storage/uploads/logo/'.$slide->img_ads1)}}" style="width: 100%">
                        </td>
                        <td style="width: 80px;">
                            <img src="{{asset('storage/uploads/logo/'.$slide->img_ads2)}}" style="width: 100%">
                        </td>
                        <td>
                            <a href="{{route('slide_update',$slide->id)}}" class="btn btn-primary">Edit</a>
                            <a href="{{route('slide_delete',$slide->id)}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            @endif
        </table>
        @if(!count($slides))
            <h1 style="text-align: center">
                There is no data!!!
            </h1>
        @endif
    </div>
@endsection
