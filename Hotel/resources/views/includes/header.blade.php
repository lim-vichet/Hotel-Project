<?php
    use App\Logo;
    use App\Ads;
    $logo = Logo::orderBy("id","DESC")->get();
    $ads = Ads::orderBy("id","DESC")->get();
?>
    <!-- left menu -->
    <div class="draw-bar">
        <div class="left-menu">
            <ul>
                <li>
                    <a href="{{route('index')}}">
                        <i class="fas fa-home"></i>
                    </a>
                </li>
                <li>
                    <a href="{{route('room')}}">
                        Rooms
                    </a>
                </li>
                <li>
                    <a href="{{route('restaurant')}}">
                        Restaurant
                    </a>
                </li>
                <li>
                    <a href="{{route('contact')}}">
                        Contact Us
                    </a>
                </li>
                <li>
                    <a href="{{route('about')}}">
                        About Us
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- header -->
    <div class="container-fluid bg1">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-12 logo">
                    <img src="{{asset('storage/uploads/logo/'.$logo[0]->img)}}">
                </div>
                <div class="col-xl-9 col-lg-9 col-md-9 col-sm-12 col-12 ads">
{{--                    <img src="{{asset('img/header.jpg')}}">--}}
                    <img src="{{asset('storage/uploads/logo/'.$ads[0]->img)}}">
                </div>
            </div>
        </div>
    </div>
    <!-- menu bar -->
    <div class="container-fluid bar2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12​ menu">
                    <ul>
                        <li class="btn-menu">
                            <a href="#">
                                <i class="fas fa-bars"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/')}}">
                                <i class="fas fa-home"></i>
                            </a>
                        </li>
                        <li>
                            <a href="{{route('room')}}">
                                Rooms
                            </a>
                        </li>
                        <li>
                            <a href="{{route('restaurant')}}">
                                Restaurant
                            </a>
                        </li>
                        <li>
                            <a href="{{route('contact')}}">
                                Contact Us
                            </a>
                        </li>
                        <li>
                            <a href="{{route('about')}}">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="{{route('login')}}" style="color: greenyellow;">
{{--                                Login--}}
                                <i class="fas fa-sign-in-alt"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>