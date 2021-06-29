@extends('form.master')
@section('content')
    <div class="container" style="margin-top: 10px;">
        <div class="row">
            <div class="col-md-4 offset-4" style="background-color: yellowgreen; padding: 10px; border-radius: 5px;">
                <form action="{{route('ads_edit',$ads->id)}}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    {{csrf_field()}}
                    <label for="">ID</label>
                    <input type="text" name="id" id="" class="form-control" value="{{$ads->id}}" readonly>
                    <label for="">Photo</label>
                    <br>
                    {{--                    <div class="img-box">--}}
                    {{--                        <input type="file" name="img" id="">--}}
                    {{--                    </div>--}}
                    <input type="file" name="img" id="" value="{{$ads->img}}">
                    <br><br>
                    <input type="submit" name="" id="" value="Update Now" class="btn btn-success">
                    <a href="{{route('ads')}}" class="btn btn-primary">Go Back</a>
                </form>
            </div>
        </div>
    </div>
@endsection