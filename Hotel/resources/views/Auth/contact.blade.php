@extends('master')
@section('body')
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 contact-body-box">
                <div class="sub-contact-box">
                    <img src="img/contact.jpg">
                    <div class="contact-item">
                        <ul>
                            <li>
                                <div class="contact-item-box">
                                    <a href="{{route('index')}}">
                                        <i class="fas fa-home" style="color: orange;"></i>
                                    </a>
                                    <a href="{{$contact[0]->visit_link}}" target="blank">
                                        <i class="fab fa-facebook-square" style="color: orange"></i>
                                    </a>
                                    <h1>Visite Us!</h1>
                                    <p>{{$contact[0]->visit_detail}}</p>
{{--                                    <p>you can also contact us by visite us on our website or facebook App</p>--}}
                                </div>
                            </li>
                            <li>
                                <div class="contact-item-box">
                                    <a href="#">
                                        <i class="fas fa-phone-square-alt" style="color: orange;"></i>
                                    </a>
                                    <h1>Call Us!</h1>
                                    <p>{{$contact[0]->call_detail}}</p>
{{--                                    <p>you can also contact us by call us on :090 290 544 / 096 273 7153</p>--}}
                                </div>
                            </li>
                            <li>
                                <div class="contact-item-box">
                                    <a href="{{$contact[0]->message_link}}" target="blank;">
                                        <i class="far fa-envelope" style="color: orange;"></i>
                                    </a>
                                    <h1>Message Us!</h1>
                                    <p>{{$contact[0]->message_detail}}</p>
{{--                                    <p>you can also contact us by using E-mail: kikifasasas@gmail.com</p>--}}
                                </div>
                            </li>
                            <li>
                                <div class="contact-item-box">
                                    <a href="{{$contact[0]->meet_link}}" target="blank;">
                                        <i class="fas fa-map-marker-alt" style="color: orange;"></i>
                                    </a>
                                    <h1>Meet Us!</h1>
                                    <p>{{$contact[0]->meet_detail}}</p>
{{--                                    <p>you can also contact us by using Google Map</p>--}}
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection