@extends('master')
@section('body')
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-8 col-md-12 col-sm-12 col-12 sub-body-box" style="margin: auto; margin-top: 20px;">
                <div class="sub-body">
                    <div class="txt-box">
                        <h1>
                            <i class="fas fa-arrows-alt" style="color: red;"></i>
                            អធិប្បាយអំពីប្រវត្តក្រុមហ៊ុន
                        </h1>
                    </div>
                    {!! $about[0]->description !!}
                    <p style="margin-top: 10px;">អរគុណបងប្អូនសម្រាប់ការអានអត្ថបទនេះ!</p>
                </div>
            </div>
        </div>
    </div>
@endsection