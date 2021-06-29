@extends('form.master')
@section('content')
    <div class="container" style="margin-top: 10px;">
        <div class="row">
            <div class="col-md-6 offset-3" style="background-color: yellowgreen; padding: 10px; border-radius: 5px;">
                <form action="{{route('user_edit',$user->id)}}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    {{csrf_field()}}
                    <label for="">ID</label>
                    <input type="text" name="id" id="" class="form-control" readonly value="{{$user->id}}" >
                    <label for="">Name</label>
                    <input type="text" name="name" id="" class="form-control" value="{{$user->name}}">
                    <label for="">E-mail</label>
                    <input type="text" name="email" id="" class="form-control" value="{{$user->email}}">
                    <label for="">Password</label>
                    <input type="text" name="password" id="" class="form-control" value="{{$user->password}}">
                    <label for="">Photo</label>
                    <br>
                    <input type="file" name="img" id="">
                    <br><br>
                    <input type="submit" name="" id="" value="Submit" class="btn btn-success">
                    <a href="{{route('user')}}" class="btn btn-primary">Go Back</a>
                </form>
            </div>
        </div>
    </div>
@endsection