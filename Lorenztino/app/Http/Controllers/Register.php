<?php

namespace App\Http\Controllers;
use App\Tamu;
use Illuminate\Support\Facades\Mail;
use App\Mail\Surat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
            $tamu = $request->email;
            $kode = hash("SHA512",($newGuests->id));
            $verifikasi["nama"] = $request->nama;
            $verifikasi["kode"] = $kode;
            Mail::to($tamu)->send(new Surat ("Mail.Konfirmasi",$verifikasi,"Verifikasi Email"));
            return view('UserIndex.successRegistration');
        }
        else{
            return view('failed');
        }
        
    }

    public function Verifikasi(Request $request,$token){
        $newGuests = Tamu::where(DB::raw("SHA2(id, 512)"),"=",$token)
        ->first();
        $newGuests->verfikasi_Email = 1; 
        if ($newGuests->save()) {
            return view("UserIndex.successVerfication");
        }
        else {
            
        }
    }

}
