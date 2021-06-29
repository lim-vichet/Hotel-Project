<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;
use validator;
use Auth;
class MainController extends Controller
{
    //    =======Login=======
    function Login(){
        return view('form.login');
    }
    function CheckLogin(Request $request){
        $this->validate($request,[
            'email'        => 'required|email',
            'password'     => 'required|alphaNum|min:3'
        ]);

        if (Auth::attempt([ "email"  => $request->email , "password" => $request->password ])){
            return redirect()->route('success_login');
        }
        else{
            session()->flash('login error', '');

            return back();
        }
    }
    function SuccessLogin(){
        return view('db.index');
    }


    //========User=======
    function User(){
        $users = User::orderBy("id","DESC")->get();
        return view('db.user')->with('users',$users);
    }
    function User_Form(){
        return view('form/user_insert');
    }
    function User_Insert(Request $request){
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        if ($request->hasFile('img')){
            $file = $request->file('img')->getClientOriginalName();
            $request->file('img')->storeAs('public/uploads/logo', $file);
            $user->img = $file;
        }
        else{
            $user->img = '';
        }
        $user->save();
        session()->put('user_last_id',$user->id +1);
        return redirect()->route('user');
    }
    function User_Delete($id){
        User::destroy($id);
        return redirect()->route('user');
    }
    function User_Update($id){
        $user = User::find($id);
        return view('form/user_update',compact('user',$user));
    }
    function User_Edit($id, Request $request){
        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        if ($request->hasFile('img')){
            $file = $request->file('img')->getClientOriginalName();
            $request->file('img')->storeAs('public/uploads/logo', $file);
            $user->img = $file;
        }
        $user->save();
        return redirect()->route('user');
    }
}
