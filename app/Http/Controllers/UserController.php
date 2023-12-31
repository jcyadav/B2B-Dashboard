<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;
class UserController extends Controller
{
    public function registerUser(Request $request)
    {
        dd($request->all());
      $request->validate([
          'name'=>'required',
          'mobile'=>'required|string|unique:users|min:11|max:11',
          'email'=>'required|email|unique:users',
          'password'=>'required|min:5|max:12',
      ]);
      $user = new User();
      $user->name = $request->name;
      $user->mobile = $request->mobile;
      $user->email = $request->email;
      $user->password = Hash::make($request->password);
      $res = $user->save();
    //   dd($res);
      if($res){
return back()->with('success','You have registerd successfully');
      }else{
return back()->with('fail','Something wrong');
      }
}
public function loginUser(Request $request){
    // dd($request->all());
    $request->validate([
        'email'=>'required|email',
        'password'=>'required|min:5|max:12',
    ]);
    $user = User::where('email','=',$request->email)->first();
    // print_r($user); exit;
    if($user){
if(Hash::check($request->password, $user->password)){
    $request ->Session()->put('loginId', $user->id);
    return redirect('frontend.index');
}else{
    return back()->with('fail','Password does not match');  
}
    }else{
        return back()->with('fail','This email is not registerd.');
    }
}
public function dashboard(){
    $data = array();
    if(Session::has('loginId')){
        $data = User::where('id','=', Session::get('loginId'))->first();  
    }
    return view('dashboard', compact('data'));
}
public function logout(){
    if(Session::has('loginId')){
        Session::pull('loginId');
        return redirect('/');
    }
}
public function admin(){
  return view('frontend.index');
}

}
