<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tamu;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
class AdminController extends Controller
{
    //
    public function getTamu(){
        $tamu = DB::table('tamu')->get();
        return $tamu;
    }

    public function login(Request $request){
        
        $username = $request['username'];
        $password = $request['password'];
        if ($username == 'admin' && $password == 'admin') {

        $tamu = $this->getTamu();
        Session::put("username",$username);

        return view('AdminLayout.adminDashboard', ['tamu' => $tamu]);

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
    public function addAttendance(Request $request){
        return view('AdminLayout.addAttendance');
    }

    public function addProses(Request $request){
        $newGuests = new Tamu();
        $newGuests->nama = $request->nama;  
        $newGuests->alamat = $request->alamat; 
        $newGuests->email = $request->email;  
        $newGuests->telp = $request->telp;   
        $newGuests->kuota = $request->kuota;  
        $newGuests->kehadiran = $request->kehadiran; 

        $validator = Validator::make($request->all(), [
            // untuk error bisa d kasi nullable, required, dll
            // kalo nullable brti bisa d kosongin
            // kalo required brti semua nya harus diisi
            'nama' => 'required|min:2',
            'email' => 'required|email',
            'alamat' => 'required',
            'telp' => 'required|digits_between:3,15|numeric',
            'kuota' => 'required|between:1,4',
            'kehadiran' => 'required'
        ]);

        if($validator->fails()){
            return redirect(url()->previous() . "#reg")
            ->withErrors($validator)
            ->withInput();
        }

        if ($newGuests->save()) {
            $tamu = $this->getTamu();
            return view('AdminLayout.adminDashboard', ['tamu' => $tamu]);
        }
        else{
            return view('failed');
        }
    }

    public function deleteProses(Request $request){
        $id = $request['btnDelete'];
        $res = DB::table('tamu')
            ->where('id', $id)
            ->delete();
        if($res){
            $tamu = $this->getTamu();
            return view('AdminLayout.adminDashboard', ['tamu' => $tamu]);
        }
        else "failed";
    }

    public function editProses(Request $request){
        
    }
}
