<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
class AdminController extends Controller
{
    //
    public function login(Request $request){
        
        $username = $request['username'];
        $password = $request['password'];
       if ($username == 'admin' && $password == 'admin') {
        //    return "berhasil login";
        Session::put("username",$username);
            var_dump("berhasil tokek");
            // return redirect('/select');
       }else{
           return view('AdminLayout.loginAdmin');
       }
        // return $request;
    }
    public function logout(Request $request){
        Session::forget('username');
        return redirect('/login');
        // return Session::get("username");
    }
}
