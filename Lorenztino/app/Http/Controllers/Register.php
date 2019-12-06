<?php

namespace App\Http\Controllers;
use App\Tamu;
use Illuminate\Support\Facades\Mail;
use App\Mail\Surat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;

class Register extends Controller
{
    //
    public function insert(Request $request){
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
            'telp' => 'required|between:3,15',
            'kuota' => 'required|between:1,4',
            'kehadiran' => 'required'
        ],[
            'between' => 'The phone number must  between 3 and 15 characters.'
        ]);
        $messages = [
            'telp'    => 'The phone number must be ex:081928270981',
        ];

        if($validator->fails()){
            return redirect(url()->previous() . "#rsvp")
            ->withErrors($validator)
            ->withInput();
        }
        if ($newGuests->save()) {
            // dd($newGuests->id);
            $tamu = $request->email;
            $kode = hash("SHA512",($newGuests->id));
            $verifikasi["nama"] = $request->nama;
            $verifikasi["kode"] = $kode;
            // Mail::to($tamu)->send(new Surat ("Mail.Verifikasi",$verifikasi,"Verifikasi Email"));
            return view('UserIndex.successRegister',['nama'=>$request->nama]);
        }
        else{
        }
        
    }

    public function Verifikasi(Request $request,$token){
        // var_dump($token);
        $newGuests = Tamu::where(DB::raw("SHA2(id,512)"),"=",$token)->first();
        // dd($newGuests->id);
        // var_dump($newGuests);
        $newGuests->verfikasi_Email = 1; 
        if ($newGuests->save()) {
            return view("UserIndex.successVerify");
        }
        else {
            
        }
    }

}
