@extends('form.master')
@section('content')
    <div class="container" style="margin-top: 10px;">
        <div class="row">
            <div class="col-md-4 offset-4" style="background-color: yellowgreen; padding: 10px; border-radius: 5px;">
                <form action="slide_insert" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <label for="">ID</label>
                    <input type="text" name="id" id="" class="form-control" readonly value="{{session()->get('slide_last_id')}}">
                    <label for="">Image Slide</label>
                    <input type="file" name="img_slide" id="">
                    <br><br>
                    <label for="">Image Advertise1</label>
                    <input type="file" name="img_ads1" id="">
                    <br><br>
                    <label for="">Image Advertise2</label>
                    <input type="file" name="img_ads2" id="">
                    <br><br>
                    <input type="submit" name="" id="" value="Submit" class="btn btn-success">
                    <a href="{{route('slide')}}" class="btn btn-primary">Go Back</a>
                </form>
            </div>
        </div>
    </div>
@endsection