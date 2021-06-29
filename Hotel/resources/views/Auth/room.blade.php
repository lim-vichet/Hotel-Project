@extends('master')
@section('title')
    Room
@endsection
@section('body')
<div class="container-fluid">
    <div class="container">
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
                                <h1>
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
                                        <h1 style="color: black;">
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
    </div>
</div>
<!-- footer -->
@endsection