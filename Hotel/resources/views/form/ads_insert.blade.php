@extends('form.master')
@section('content')
    <div class="container" style="margin-top: 10px;">
        <div class="row">
            <div class="col-md-4 offset-4" style="background-color: yellowgreen; padding: 10px; border-radius: 5px;">
                <form action="ads_insert" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <label for="">ID</label>
                    <input type="text" name="id" id="" class="form-control" value="{{session()->get('ads_last_id')}}" readonly>
                    <label for="">Photo</label>
                    <br>
                    <input type="file" name="img" id="">
                    <br><br>
                    <input type="submit" name="" id="" value="Submit" class="btn btn-success">
                    <a href="{{route('ads')}}" class="btn btn-primary">Go Back</a>
                </form>
            </div>
        </div>
    </div>
@endsection