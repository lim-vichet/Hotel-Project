<!doctype html>
<html lang="en">
<head>
 <meta charset="UTF-8">
 <meta name="viewport"
       content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <link href="https://fonts.googleapis.com/css2?family=Battambang&family=Koulen&display=swap" rel="stylesheet">
 <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
 <link rel="stylesheet" href="{{asset('css/db-style.css')}}">
 <link rel="stylesheet" href="{{asset('css/fontawesome-free-5.13.0-web/css/all.min.css')}}">
 <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
 <script src="{{asset('js/js.js')}}"></script>
 <title>@yield('title')</title>
</head>
<body>
   <div class="bar1">
     <div class="btn-menu">
         <img src="{{asset('img\logo.png')}}">
{{--        <a href="#">--}}
{{--            <i class="fas fa-bars"></i>--}}
{{--        </a>--}}
     </div>
     <div class="title-box">
         <div class="logout" style="background-color: #d7f202;">
             <a href="{{route('index')}}">Logout</a>
         </div>
     </div>
   </div>
   <div class="menu-box">
       <ul>
           <li class="menu-left">
               <a href="{{route('abouts')}}">About Us</a>
           </li>

           <li class="menu-left">
               <a href="{{route('ads')}}">Ads</a>
           </li>
           <li class="menu-left">
               <a href="{{route('contacts')}}">Contact Us</a>
           </li>
           <li class="menu-left">
               <a href="{{route('logo')}}">Logo</a>
           </li>
{{--           <li class="menu-left">--}}
{{--               <a href="{{route('menu')}}">Menu</a>--}}
{{--           </li>--}}
           <li class="menu-left">
               <a href="{{route('restaurants')}}">Restaurant</a>
           </li>
           <li class="menu-left">
               <a href="{{route('rooms')}}">Room</a>
           </li>
           <li class="menu-left">
               <a href="{{route('slide')}}">Slide</a>
           </li>
           <li class="menu-left">
               <a href="{{route('user')}}">User</a>
           </li>

       </ul>
   </div>
   @yield('table')
   <script>
       $(document).ready(function () {
           $('.menu-left').click(function () {
               $('.menu-left').css({"background":"white"})
               $(this).css({"background":"red"})
           });
       })
   </script>
</body>
</html>
