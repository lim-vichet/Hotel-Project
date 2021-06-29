@extends('db.index')
@section('table')
    <div class="data-box">
        <div class="bar2">
            <ul>
                <li>
                    <h1 style="margin-left: 400px;">Welcome to Contact Form!!!</h1>
                </li>
                <li class="btn-default">
                    <a href="{{'contact_form'}}">Add New</a>
                </li>
            </ul>
        </div>
        <table border="1px" class="table table-striped" >
            <tr style="border: 1px solid black; text-align: center; background-color: #9fcdff;">
                <th>ID</th>
                <th>Visit Detail</th>
                <th>Call Detail</th>
                <th>Message Detail</th>
                <th>Meet Detail</th>
                <th>Action</th>
            </tr>
            @if(count($contacts))
                @foreach($contacts as $contact)
                    <tr style="border: 1px solid black; text-align: center">
                        <td>{{$contact->id}}</td>
                        <td>{{$contact->visit_detail}}</td>
                        <td>{{$contact->call_detail}}</td>
                        <td>{{$contact->message_detail}}</td>
                        <td>{{$contact->meet_detail}}</td>
                        <td width="170">
                            <a href="{{route('contact_update',$contact->id)}}" class="btn btn-primary">Edit</a>
                            <a href="{{route('contact_delete',$contact->id)}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            @endif
        </table>
        {{--        ========="Pagination"=========--}}
        <div>
{{--            {!! $contacts->render() !!}--}}
        </div>
        @if(!count($contacts))
            <h1 style="text-align: center">
                There is no data!!!
            </h1>
        @endif
    </div>
@endsection
