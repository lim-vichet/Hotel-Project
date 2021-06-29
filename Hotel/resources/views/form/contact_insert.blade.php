@extends('form.master')
@section('content')
    <div class="container" style="margin-top: 10px;">
        <div class="row">
            <div class="col-md-8 offset-2" style="background-color: rgba(229,236,225, 0.4); padding: 10px; border-radius: 5px;">
                <form action="{{route('contact_insert')}}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-cut">
                        <label for="">ID</label>
                        <input type="text" name="id" id="" class="form-control" readonly>
                        <label for="">FaceBook Link</label>
                        <input type="text" name="visit_link" id="" class="form-control">
                        <label for="">Facebook Detail </label>
                        <textarea name="visit_detail" id="" cols="30" rows="3" style="width: 100%;"></textarea>
                        <label for="">Call Detail </label>
                        <textarea name="call_detail" id="" cols="30" rows="3" style="width: 100%;"></textarea>
                        <input type="submit" name="" id="" value="Submit" class="btn btn-success">
                        <a href="{{route('contacts')}}" class="btn btn-primary">Go Back</a>
                    </div>
                    <div class="form-cut">
                        <label for="">G-mail Link</label>
                        <input type="text" name="message_link" id="" class="form-control">
                        <label for="">G-mail Detail</label>
                        <textarea name="message_detail" id="" cols="30" rows="3" style="width: 100%;"></textarea>
                        <label for="">Map Link</label>
                        <input type="text" name="meet_link" id="" class="form-control">
                        <label for="">Map Detail</label>
                        <textarea name="meet_detail" id="" cols="30" rows="3" style="width: 100%;"></textarea>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')

@endsection