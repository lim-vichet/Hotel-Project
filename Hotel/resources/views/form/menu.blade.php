@extends('form.master')
@section('content')
    <div class="container" style="margin-top: 10px;">
        <div class="row">
            <div class="col-md-4 offset-4" style="background-color: yellowgreen; padding: 10px; border-radius: 5px;">
                <form action="menu_insert" method="POST">
                    @csrf
                    <label for="">ID</label>
                    <input type="text" name="id" id="" class="form-control">
                    <label for="">name</label>
                    <input type="text" name="name" id="" class="form-control">
                    <br>
                    <input type="submit" name="" id="" value="Submit" class="btn btn-success">
                    <a href="{{route('data')}}" class="btn btn-primary">Go Back</a>
                </form>
            </div>
        </div>
    </div>
@endsection