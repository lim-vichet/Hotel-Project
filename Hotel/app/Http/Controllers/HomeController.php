<?php

namespace App\Http\Controllers;
//use App\Http\Controllers\HomeController;
use App\About;
use App\Ads;
use App\Logo;
use App\Restaurant;
use Illuminate\Http\Request;
use App\Menu;
use App\Slide;
use App\Room;
use App\Contact;
//use App\Restaurant;
class HomeController extends Controller
{
    public function Header(){
        return view('includes.header');
    }

    public function Index(){
        $results = Menu::get();
        $slide = Slide::get();
        $room = Room::orderBy("id","DESC")->get();
        $first = Room::get();
        $restaurant = Restaurant::orderBy("id","DESC")->get();
        $restaurant_first = Restaurant::all();
        return view('Auth.index', compact('results','first', 'slide','room','restaurant','restaurant_first'));
    }
    public function Room(){
        $room = Room::orderBy("id","DESC")->get();
        $first = Room::get();
        return view('Auth.room', compact('room',"first"));
    }
    public function Restaurant(){
        $restaurant = Restaurant::orderBy("id","DESC")->get();
        $first = Restaurant::get();
        return view('Auth.restaurant', compact('restaurant','first'));
    }
    public function Contact(){
        $contact = Contact::orderBy("id","DESC")->get();
        return view('Auth.contact',compact('contact',$contact));
    }
    public function About(){
        $about = About::orderBy("id","DESC")->get();
        return view('Auth.about', compact('about'));
    }
//   ===== room detail=====
    public function Det_Room1($id){
        $room = Room::find($id);
        $first = Room::all();
        $last = Room::orderBy("id","DESC")->get();
        $restaurant_first = Restaurant::all();
        $restaurant_last = Restaurant::orderBy("id","DESC")->get();
        return view('Auth/det-room1', compact('room',"first","last",'restaurant_first','restaurant_last'));
    }
    public function Det_Restaurant1($id){
        $restaurant = Restaurant::find($id);
        $first = Room::all();
        $last = Room::orderBy("id","DESC")->get();
        $restaurant_first = Restaurant::all();
        $restaurant_last = Restaurant::orderBy("id","DESC")->get();
        return view('Auth.det-restaurant1', compact('restaurant',"first","last",'restaurant_first','restaurant_last'));
    }
//    test
    function DB(){
        return view('db.index');
    }
    function Test(){
        $results = Menu::get();
        return view('Auth.test',['article'=>$results]);
    }
}
