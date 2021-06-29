@extends('master')
@section('title')
    Welcome
    @endsection
@section('body')

    <!-- slide show and body -->
    <div class="container">
        <div class="row">
            <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12" style="padding-left: 0;">
                <div class="slide-box">
                    <div class="btn-slide btn-back">
                        <i class="fas fa-arrow-left"></i>
                    </div>
                    <div class="btn-slide btn-next">
                        <i class="fas fa-arrow-right"></i>
                    </div>
                    @foreach($slide as $item)
                        <div class="slide">
{{--                            <img src="{{asset('img/slide1.jpg')}}">--}}
                            <img src="{{asset('storage/uploads/logo/'.$item->img_slide)}}">
                            <div class="btn-more">
{{--                                Booking Now !--}}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class=" col-xl-3 col-lg-3 col-md-3 col-sm-12 picture-box">
                <div class="box1" style="margin-bottom: 0%;">
{{--                    <img src="{{asset('img/slide4.jpg')}}">--}}
                    <img src="{{asset('storage/uploads/logo/'.$slide[0]->img_ads1)}}">
                    <div class="btn-free-style">
{{--                        free style--}}
                    </div>
                </div>
                <div class="box1" style="margin-top: 6%;">
{{--                    <img src="{{asset('img/slide5.jpg')}}">--}}
                    <img src="{{asset('storage/uploads/logo/'.$slide[0]->img_ads2)}}">
                    <div class="btn-free-style">
{{--                        free style--}}
                    </div>
                </div>
            </div>
        </div>
        <!-- body -->
{{--        ======Room======--}}
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 big-box">
                <div class="title-box">
                    <div class="box">
                        Rooms <i class="fas fa-chevron-right"></i>
                    </div>
                </div>
                <div class="item-box">
                    <div class="n1">
                        <a href="{{route('room_detail', $first[0]->id)}}">
                            <img src="{{asset('storage/uploads/room/'.$first[0]->img)}}">
                            <div class="text-padding">
                                <h1 style="line-height: 40px;">
                                    លេខបន្ទប់: {{$first[0]->name}}
                                    <br>
                                    តម្លៃ:{{$first[0]->price}}$
                                </h1>
                            </div>
                        </a>
                    </div>
                    <div class="n2">
                        @foreach($room as $rooms)
                            <div class="small-box">
                                <a href="{{route('room_detail', $rooms->id)}}">
                                    <div class="bg-img">
                                        <img src="{{asset('storage/uploads/room/'.$rooms->img)}}">
                                    </div>
                                    <div class="bg-txt">
                                        <h1>
                                            លេខបន្ទប់: {{$rooms->name}}
                                            <br>
                                            តម្លៃ:{{$rooms->price}}$
                                        </h1>
                                    </div>
                                </a>
                            </div>
                         @endforeach
                    <!-- /// -->
                    </div>
                </div>
            </div>
        </div>
{{--        ======Restaurant======--}}
        <span class="more">
            <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 big-box">
                <div class="title-box" style="border-color: hotpink;">
                    <div class="box" style="background-color: hotpink;">
                        Restaurant <i class="fas fa-chevron-right"></i>
                    </div>
                </div>
                <div class="item-box">
                    <div class="n1">
                        <a href="{{route('restaurant_detail',$restaurant_first[0]->id)}}">
                            <img src="{{asset('storage/uploads/room/'.$restaurant_first[0]->img)}}">
                            <div class="text-padding" style="background-color: hotpink;">
                                <h1 style="line-height: 40px;">
                                    ឈ្មោះទំនិញ: {{$restaurant_first[0]->name}}
                                    <br>
                                    តម្លៃ:{{$restaurant_first[0]->price}}$
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
        </span>
        <button class="read" style="">
        Read More...</button>
    </div>
@endsection

@section('footer')
    <!-- footer -->
    @include('includes.footer');
@endsection


@section('script')
    <script type="text/javascript">
        $(document).ready(function () {
            //load more...
            $(".read").click(function(){
                $(this).prev().toggle();
                if ($(this).text()=='Read More') {
                    $(this).text('Read Less');
                }
                else{
                    $(this).text('Read More');
                }
            });
        })
    </script>
@endsection
