<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Logo;
use App\Ads;
use App\MenuCategory;
use App\Slide;
use App\Room;
use App\Restaurant;
use App\Contact;
use App\About;
use Illuminate\Http\Request;

class DataController extends Controller
{

//    =========For Menu========
    function Data(){
        $menus = Menu::all();
        return view('db.index')->with('menus',$menus);
    }
    function Menu_Form(){
        return view('form.menu');
    }
    function Menu_insert(Request $request){
        $menu = new Menu();
        $menu->name = $request->name;
        $menu->save();
        return redirect()->route('data');
    }
    function Menu_delete($id){
        Menu::destroy($id);
        return redirect()->route('data');
    }
    function Menu_update($id){
        $menu = Menu::find($id);
        return view('form.update_menu')->with('menu',$menu);
    }
    function Menu_edit($id, Request $request){
        $menu = Menu::find($id);
        $menu->name = $request->name;
        $menu->save();
        return redirect()->route('data');
    }
    function Menu(){
        $menus = Menu::all();
        return view('db.menu')->with('menus',$menus);
    }

    //    =========For Menu========
    function Logo(){
        $logos = Logo::orderBy("id","DESC")->get();
        return view('db.logo')->with('logos',$logos);
    }
    function Logo_Form(){
        return view('form.logo_insert');
    }
    function logo_insert(Request $request){
        $logo = new Logo();
        if ($request->hasFile('img')){
            $file = $request->file('img')->getClientOriginalName();
            $request->file('img')->storeAs('public/uploads/logo', $file);
            $logo->img = $file;
        }
        else{
            $logo->img = '';
        }
        $logo->save();
        session()->put('logo_last_id',$logo->id +1);
        return redirect()->route('logo');
    }
    function Logo_Delete($id){
        Logo::destroy($id);
        return redirect()->route('logo');
    }
    function logo_update($id){
        $logo = Logo::find($id);
        return view('form.logo_update')->with('logo',$logo);
    }
    function Logo_Edit($id, Request $request){
        $logo = Logo::find($id);
        if ($request->hasFile('img')){
            $file = $request->file('img')->getClientOriginalName();
            $request->file('img')->storeAs('public/uploads/logo', $file);
            $logo->img = $file;
        }
        $logo->save();
        return redirect()->route('logo');
    }
//    =========For Ads========
    function Ads(){
        $adss = Ads::orderBy("id","DESC")->get();
        return view('db.ads')->with('adss',$adss);
    }
    function Ads_Form(){
        return view('form.ads_insert');
    }
    function Ads_Insert(Request $request){
        $ads = new Ads();
        if ($request->hasFile('img')){
            $file = $request->file('img')->getClientOriginalName();
            $request->file('img')->storeAs('public/uploads/logo', $file);
            $ads->img = $file;
        }
        else{
            $ads->img = '';
        }
        $ads->save();
        session()->put('ads_last_id',$ads->id +1);
        return redirect()->route('ads');
    }
    function Ads_Delete($id){
        Ads::destroy($id);
        return redirect()->route('ads');
    }
    function Ads_Update($id){
        $ads = Ads::find($id);
        return view('form.ads_update')->with('ads',$ads);
    }
    function Ads_Edit($id, Request $request){
        $ads = Ads::find($id);
        if ($request->hasFile('img')){
            $file = $request->file('img')->getClientOriginalName();
            $request->file('img')->storeAs('public/uploads/logo', $file);
            $ads->img = $file;
        }
        $ads->save();
        return redirect()->route('ads');
    }

    //    =========For Slide========
    function Slide(){
        $slides = Slide::orderBy("id","DESC")->get();
        return view('db.slide')->with('slides',$slides);
    }
    function Slide_Form(){
        return view('form.slide_insert');
    }
    function Slide_Insert(Request $request){
        $slide = new Slide();
        //img_slide
        if ($request->hasFile('img_slide')){
            $file = $request->file('img_slide')->getClientOriginalName();
            $request->file('img_slide')->storeAs('public/uploads/logo', $file);
            $slide->img_slide = $file;
        }
        else{
            $slide->img_slide = '';
        }
        //img_ads1
        if ($request->hasFile('img_ads1')){
            $file = $request->file('img_ads1')->getClientOriginalName();
            $request->file('img_ads1')->storeAs('public/uploads/logo', $file);
            $slide->img_ads1 = $file;
        }
        else{
            $slide->img_ads1 = '';
        }
        //img_ads2
        if ($request->hasFile('img_ads2')){
            $file = $request->file('img_ads2')->getClientOriginalName();
            $request->file('img_ads2')->storeAs('public/uploads/logo', $file);
            $slide->img_ads2 = $file;
        }
        else{
            $slide->img_ads2 = '';
        }
        $slide->save();
        session()->put('slide_last_id',$slide->id +1);
        return redirect()->route('slide');
    }
    function Slide_Delete($id){
        Slide::destroy($id);
        return redirect()->route('slide');
    }
    function Slide_Update($id){
        $slide = Slide::find($id);
        return view('form.slide_update')->with('slide',$slide);
    }
    function Slide_Edit($id, Request $request){
        $slide = Slide::find($id);
        //img_slide
        if ($request->hasFile('img_slide')){
            $file = $request->file('img_slide')->getClientOriginalName();
            $request->file('img_slide')->storeAs('public/uploads/logo', $file);
            $slide->img_slide = $file;
        }

        //img_ads1
        if ($request->hasFile('img_ads1')){
            $file = $request->file('img_ads1')->getClientOriginalName();
            $request->file('img_ads1')->storeAs('public/uploads/logo', $file);
            $slide->img_ads1 = $file;
        }

        //img_ads2
        if ($request->hasFile('img_ads2')){
            $file = $request->file('img_ads2')->getClientOriginalName();
            $request->file('img_ads2')->storeAs('public/uploads/logo', $file);
            $slide->img_ads2 = $file;
        }

        $slide->save();
        return redirect()->route('slide');
    }

    //    =========For Room========
    function Rooms(){
//        $rooms = Room::all();
        $rooms = Room::orderBy("id","DESC")->paginate(5);
        return view('db.room')->with('rooms',$rooms);
    }
    function Room_Form(){
        return view('form.room_insert');
    }
    function Room_Insert(Request $request){
        $room = new Room();
        $room->name = $request->name;
        $room->price = $request->price;
        $room->description = $request->description;
        if ($request->hasFile('img')){
            $file = $request->file('img')->getClientOriginalName();
            $request->file('img')->storeAs('public/uploads/room', $file);
            $room->img = $file;
        }
        else{
            $room->img = '';
        }
        $room->save();
        session()->put('room_last_id',$room->id +1);
        return redirect()->route('rooms');
    }

        function Room_Delete($id){
            Room::destroy($id);
            return redirect()->route('rooms');
        }
        function Room_Update($id){
            $room = Room::find($id);
            return view('form/room_update', compact('room'));
        }
        function Room_Edit($id, Request $request){
            $room = Room::find($id);
            $room->name = $request->name;
            $room->price = $request->price;
            $room->description = $request->description;
            if ($request->hasFile('img')){
                $file = $request->file('img')->getClientOriginalName();
                $request->file('img')->storeAs('public/uploads/room', $file);
                $room->img = $file;
            }
            $room->save();
            return redirect()->route('rooms');
        }


//    =======================Upload Photo=============
    function Upload_Photo(Request $request){
        if ($request->hasFile('txtuploadpic')){
            $file = $request->file('txtuploadpic')->getClientOriginalName();
            $request->file('txtuploadpic')->storeAs('public/uploads/room', $file);
        }
        return response([
            'status' => 1
        ]);
    }


    //    =======================Restaurant=============
    function Restaurants(){
//      $restaurants = Restaurant::all();
        $restaurants = Restaurant::orderBy("id","DESC")->paginate(5);
        return view('db/restaurant')->with('restaurants',$restaurants);
    }
    function Restaurant_Form(){
        $categories = MenuCategory::all();

        return view('form.restaurant_insert', compact('categories'));
    }
    function Restaurant_Insert(Request $request){
        $restaurant = new Restaurant();
        $restaurant->name = $request->name;
        $restaurant->id_type = $request->id_type;
        $restaurant->price = $request->price;
        $restaurant->description = $request->description;
        if ($request->hasFile('img')){
            $file = $request->file('img')->getClientOriginalName();
            $request->file('img')->storeAs('public/uploads/room', $file);
            $restaurant->img = $file;
        }
        else{
            $restaurant->img = '';
        }
        $restaurant->od = $request->od;
        $restaurant->save();
        session()->put('restaurant_last_id',$restaurant->id +1);
        return redirect()->route('restaurants');
    }
    function Restaurant_Delete($id){
        Restaurant::destroy($id);
        return redirect()->route('restaurants');
    }
    function Restaurant_Update($id){
        $restaurant = Restaurant::find($id);
        $categories = MenuCategory::all();
        return view('form/restaurant_update', compact('restaurant','categories'));
    }
    function Restaurant_Edit($id, Request $request){
        $restaurant = Restaurant::find($id);
        $restaurant->name = $request->name;
        $restaurant->id_type = $request->id_type;
        $restaurant->price = $request->price;
        $restaurant->description = $request->description;
        if ($request->hasFile('img')){
            $file = $request->file('img')->getClientOriginalName();
            $request->file('img')->storeAs('public/uploads/room', $file);
            $restaurant->img = $file;
        }
        $restaurant->od = $request->od;
        $restaurant->save();
        return redirect()->route('restaurants');
    }
    function Restaurant_Detail($id){
        $restaurant = Restaurant::find($id);
        $first = Room::all();
        $last = Room::orderBy("id","DESC")->get();
        $restaurant_first = Restaurant::all();
        $restaurant_last = Restaurant::orderBy("id","DESC")->get();
        return view('Auth.det-restaurant1',compact('restaurant',"first","last",'restaurant_first','restaurant_last'));
    }
//    ==============contact Us=========
    function Contact(){
        $contacts = Contact::orderBy("id","DESC")->get();
        return view('db/contact')->with('contacts',$contacts);
    }
    function Contact_Form(){
        return view('form.contact_insert');
    }
    function Contact_Insert(Request $request){
        $contact = new Contact();
        $contact->visit_link = $request->visit_link;
        $contact->visit_detail = $request->visit_detail;
        $contact->call_detail = $request->call_detail;
        $contact->message_link = $request->message_link;
        $contact->message_detail = $request->message_detail;
        $contact->meet_link = $request->meet_link;
        $contact->meet_detail = $request->meet_detail;
        $contact->save();
        return redirect()->route('contacts');
    }
    function Contact_Delete($id){
        Contact::destroy($id);
        return redirect()->route('contacts');
    }
    function Contact_Update($id){
        $contact = Contact::find($id);
        return view('form.contact_update')->with('contact',$contact);
    }
    function Contact_Edit($id, Request $request){
        $contact = Contact::find($id);
        $contact->visit_link = $request->visit_link;
        $contact->visit_detail = $request->visit_detail;
        $contact->call_detail = $request->call_detail;
        $contact->message_link = $request->message_link;
        $contact->message_detail = $request->message_detail;
        $contact->meet_link = $request->meet_link;
        $contact->meet_detail = $request->meet_detail;
        $contact->save();
        return redirect()->route('contacts');
    }
//    ============Abouts============
    function Abouts(){
        $abouts = About::orderBy("id","DESC")->get();
        return view('db/about')->with('abouts',$abouts);
    }
    function About_Form(){
        return view('form.about_insert');
    }
    function About_Insert(Request $request){
        $about = new About();
        $about->description = $request->description;
        $about->save();
        return redirect()->route('abouts');
    }
    function About_Delete($id){
        About::destroy($id);
        return redirect()->route('abouts');
    }
    function About_Update($id){
        $about = About::find($id);
        return view('form.about_update')->with('about',$about);
    }
    function About_Edit($id, Request $request){
        $about = About::find($id);
        $about->description = $request->description;
        $about->save();
        return redirect()->route('abouts');
    }
}
