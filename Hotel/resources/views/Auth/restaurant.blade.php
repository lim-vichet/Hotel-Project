@extends('master')
@section('body')
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 big-box">
                    <div class="title-box" style="border-color: hotpink;">
                        <div class="box" style="background-color: hotpink;">
                            Restaurant <i class="fas fa-chevron-right"></i>
                        </div>
                    </div>
                    <div class="item-box">
                        <div class="n1">
                            <a href="{{route('restaurant_detail',$first[0]->id)}}">
                                {{--                            <img src="{{asset('img/slide1.jpg')}}">--}}
                                <img src="{{asset('storage/uploads/room/'.$first[0]->img)}}">
                                <div class="text-padding" style="background-color: hotpink;">
                                    <h1>
                                        ឈ្មោះទំនិញ: {{$first[0]->name}}
                                        <br>
                                        តម្លៃ:{{$first[0]->price}}$
                                    </h1>
                                </div>
                            </a>
                        </div>
                        <div class="n2">
                            @foreach($restaurant as $restaurants)
                                @if($restaurants->id_type==1)
                                    <div class="small-box">
                                        <a href="{{route('restaurant_detail',$restaurants->id)}}">
                                            <div class="bg-img">
                                                <img src="{{asset('storage/uploads/room/'.$restaurants->img)}}">
                                            </div>
                                            <div class="bg-txt">
                                                <h1>
                                                    ឈ្មោះទំនិញ: {{$restaurants->name}}
                                                    <br>
                                                    តម្លៃ:{{$restaurants->price}}$
                                                </h1>
                                            </div>
                                        </a>
                                    </div>
                                @endif
                            @endforeach
                                @foreach($restaurant as $restaurants)
                                    @if($restaurants->id_type==2)
                                        <div class="small-box">
                                            <a href="{{route('restaurant_detail',$restaurants->id)}}">
                                                <div class="bg-img">
                                                    <img src="{{asset('storage/uploads/room/'.$restaurants->img)}}">
                                                </div>
                                                <div class="bg-txt">
                                                    <h1>
                                                        ឈ្មោះទំនិញ: {{$restaurants->name}}
                                                        <br>
                                                        តម្លៃ:{{$restaurants->price}}$
                                                    </h1>
                                                </div>
                                            </a>
                                        </div>
                                    @endif
                                @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection