@extends('db.index')
@section('table')
    <div class="data-box">
        <div class="bar2">
            <ul>
                <li>
                    <h1 style="margin-left: 400px;">Welcome to About Us Form!!!</h1>
                </li>
                <li class="btn-default">
                    <a href="{{'about_form'}}">Add New</a>
                </li>
            </ul>
        </div>
        <table border="1px" class="table table-striped" >
            <tr style="border: 1px solid black; text-align: center; background-color: #9fcdff;">
                <th>ID</th>
                <th>Description</th>
                <th>Action</th>
            </tr>
            @if(count($abouts))
                @foreach($abouts as $about)
                    <tr style="border: 1px solid black; text-align: center">
                        <td>{{$about->id}}</td>
                        <td >{!! $about->description !!}</td>
                        <td width="180">
                            <a href="{{route('about_update',$about->id)}}" class="btn btn-primary">Edit</a>
                            <a href="{{route('about_delete',$about->id)}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            @endif
        </table>
        {{--        ========="Pagination"=========--}}
        <div>
{{--            {!! $rooms->render() !!}--}}
        </div>
        @if(!count($abouts))
            <h1 style="text-align: center">
                There is no data!!!
            </h1>
        @endif
    </div>
@endsection
