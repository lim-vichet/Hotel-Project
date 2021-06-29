@extends('master')
@section('body')
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 sub-body-box">
                <div class="sub-body">
                    <div class="txt-box">
                        <h1>
                            <i class="fab fa-battle-net" style="color: hotpink; font-size: 35px;"></i> អធិប្បាយអំពីអាហារដ្ឋាន
                        </h1>
                    </div>
                    {!! $restaurant->description !!}
                    <p style="margin-top: 10px;">អរគុណបងប្អូនសម្រាប់ការអានអត្ថបទនេះ!</p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 right-menu">
                <a href="{{route('room_detail', $last[0]->id)}}">
                    <div class="sub-right-menu">
                        <div class="sub-right-menu-img">
                            <img src="{{asset('storage/uploads/room/'.$last[0]->img)}}">
                        </div>
                        <div class="sub-right-menu-txt">
                            <h1 style="line-height: 30px; color: black;">
                                លេខបន្ទប់: {{$last[0]->name}}
                                <br>
                                តម្លៃ:{{$last[0]->price}}$
                            </h1>
                        </div>
                    </div>
                </a>
                <a href="{{route('room_detail', $first[0]->id)}}">
                    <div class="sub-right-menu">
                        <div class="sub-right-menu-img">
                            <img src="{{asset('storage/uploads/room/'.$first[0]->img)}}">
                        </div>
                        <div class="sub-right-menu-txt">
                            <h1 style="line-height: 30px; color: black;">
                                លេខបន្ទប់: {{$first[0]->name}}
                                <br>
                                តម្លៃ:{{$first[0]->price}}$
                            </h1>
                        </div>
                    </div>
                </a>

                <a href="{{route('restaurant_detail', $restaurant_last[0]->id)}}">
                    <div class="sub-right-menu">
                        <div class="sub-right-menu-img">
                            <img src="{{asset('storage/uploads/room/'.$restaurant_last[0]->img)}}">
                        </div>
                        <div class="sub-right-menu-txt">
                            <h1 style="line-height: 30px; color: black;">
                                ឈ្មោះទំនិញ: {{$restaurant_last[0]->name}}
                                <br>
                                តម្លៃ:{{$restaurant_last[0]->price}}$
                            </h1>
                        </div>
                    </div>
                </a>
                <a href="{{route('restaurant_detail', $restaurant_first[0]->id)}}">
                    <div class="sub-right-menu">
                        <div class="sub-right-menu-img">
                            <img src="{{asset('storage/uploads/room/'.$restaurant_first[0]->img)}}">
                        </div>
                        <div class="sub-right-menu-txt">
                            <h1 style="line-height: 30px; color: black;">
                                ឈ្មោះទំនិញ: {{$restaurant_first[0]->name}}
                                <br>
                                តម្លៃ:{{$restaurant_first[0]->price}}$
                            </h1>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
@endsection