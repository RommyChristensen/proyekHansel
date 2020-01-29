<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Tamu;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;

class AdminController extends Controller
{
    //
    public function getTamu(){
        $tamu = DB::table('tamu')->orderByRaw('verfikasi_Admin DESC')->get();
        return $tamu;
    }

    public function toDashboard(){
        $total = DB::table('tamu')->where('verfikasi_Admin', 2)->sum('kuota');
        $jumlah = DB::table('tamu')->where('verfikasi_Admin', 2)->count('kuota');
        $jumlahGreja = DB::table('tamu')->where('kehadiran', 1)->sum('kuota');
        $jumlahResepsi = DB::table('tamu')->where('kehadiran', 2)->sum('kuota');
        $jumlahGrejaResepsi = DB::table('tamu')->where('kehadiran', 3)->sum('kuota');
        return view('AdminLayout.adminDashboard', ['tamu' => $this->getTamu()])->with('total',$total)->with('jumlah',$jumlah)->with('jumlahGreja',$jumlahGreja)->with('jumlahResepsi',$jumlahResepsi)->with('jumlahGrejaResepsi',$jumlahGrejaResepsi);
    }

    public function scan(){
        return view('AdminLayout.scanner');
    }

    public function scan2(){
        return view('AdminLayout.scan2');
    }

    public function testajax(Request $req){
        $userId = $req->id;

        $user = DB::table('tamu')->where('id', $userId)->get();

        echo json_encode($user);
    }

    public function getAllTamu(){
        //$tamu = DB::table('tamu')->offset(611)->limit(9)->get();
        //$tamu = DB::table('tamu')->where('id', '>', 667)->where('id', '<', 687)->get();
        //$tamu = $this->getTamu();
        //$tamu = DB::table('tamu')->where('id', '>', 714)->get();
        $tamu = DB::table('tamu')->where('id', '>', 716)->get();
        echo json_encode($tamu);
    }

    public function generateQRCode(){
        //$tamu = $this->getTamu();
        //$tamu = DB::table('tamu')->where('id', '20')->get();
        // $tamu = DB::table('tamu')->where('id', '573')
        //                         ->orWhere('id', '569')
        //                         ->orWhere('id', '197')
        //                         ->orWhere('id', '187')
        //                         ->orWhere('id', '577')
        //                         ->orWhere('id', '617')
        //                         ->orWhere('id', '171')
        //                         ->orWhere('id', '631')
        //                         ->orWhere('id', '466')
        //                         ->orWhere('id', '205')
        //                         ->orWhere('id', '172')
        //                         ->orWhere('id', '189')
        //                         ->orWhere('id', '525')
        //                         ->orWhere('id', '586')
        //                         ->orWhere('id', '287')
        //                         ->orWhere('id', '130')
        //                         ->orWhere('id', '608')
        //                         ->orWhere('id', '617')
        //                         ->orWhere('id', '607')
        //                         ->orWhere('id', '232')
        //                         ->orWhere('id', '621')
        //                         ->orWhere('id', '575')
        //                         ->orWhere('id', '595')
        //                         ->orWhere('id', '669')
        //                         ->orWhere('id', '693')
        //                         ->orWhere('id', '692')
        //                         ->orWhere('id', '689')
        //                         ->orWhere('id', '694')
        //                         ->orWhere('id', '679')
        //                         ->get();
        // $temp = DB::table('tamu')->where('id', '569')->get();
        // $tamu[] = $temp;

        //$tamu = DB::table('tamu')->offset(611)->limit(9)->get();
        //$tamu = DB::table('tamu')->where('id', '>', 667)->where('id', '<', 687)->get();
        //$tamu = DB::table('tamu')->where('id','>', 714)->get();
        $tamu = DB::table('tamu')->where('id', '>', 716)->get();
        return view('AdminLayout.previewQrCode', ['tamu' => $tamu]);
    }

    public function generateIndividualQR(){
        $tamu = DB::table('tamu')->where('id', 38)->get();
        $id = $tamu['id'];
        $nama = $tamu['nama'];
        $kuota = $tamu['kuota'];
        return view('AdminLayout.individualQrCode', ['id' => $id, 'nama' => $nama, 'kuota' => $kuota]);
    }

    public function login(Request $request){
        
        $username = $request['username'];
        $password = $request['password'];
        if ($username == 'lorensonia' && $password == 'jwmarriot122020' || $username == 'tokek' && $password == 'tokek' ) {

        $tamu = $this->getTamu();
        Session::put("username",$username);
        // $total = DB::table('tamu')->sum('kuota')->where('verifikasi_admin =',2);
        $total = DB::table('tamu')->where('verfikasi_Admin', 2)->sum('kuota');
        $jumlah = DB::table('tamu')->where('verfikasi_Admin', 2)->count('kuota');
        $jumlahGreja = DB::table('tamu')->where('kehadiran', 1)->sum('kuota');
        $jumlahResepsi = DB::table('tamu')->where('kehadiran', 2)->sum('kuota');
        $jumlahGrejaResepsi = DB::table('tamu')->where('kehadiran', 3)->sum('kuota');
        // $jumlah = DB::table('tamu')->count('kuota')->where('verifikasi_admin =',2);
        return view('AdminLayout.adminDashboard', ['tamu' => $tamu])->with('total',$total)->with('jumlah',$jumlah)->with('jumlahGreja',$jumlahGreja)->with('jumlahResepsi',$jumlahResepsi)->with('jumlahGrejaResepsi',$jumlahGrejaResepsi);

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

    public function exportExcel(){
        return Excel::download(new UsersExport, 'users.xlsx');
    }

    public function verifiedAttendance(){
        $verified = DB::table('tamu')->where('verfikasi_Admin', 0)->get();
        $rejected = DB::table('tamu')->where('verfikasi_Admin', 1)->get();
        return view('AdminLayout.verifiedAttendance', ['tamu' => $verified, 'reject' => $rejected]);
    }

    public function editAttendance(Request $request){
        $id = $request['btnEdit'];
        $edit = DB::table('tamu')->where('id', $id)->get()->toArray();
        return view('AdminLayout.editAttendance', ['edited' => $edit]);
    }

    public function acceptVerified(Request $request){
        $id = $request->btnEdit;
        $res = DB::table('tamu')
            ->where('id', $id)
            ->update([
                'verfikasi_Admin' => 2
            ]);
        $verified = DB::table('tamu')->where('verfikasi_Admin', 0)->get();
        $rejected = DB::table('tamu')->where('verfikasi_Admin', 1)->get();
        return view('AdminLayout.verifiedAttendance', ['tamu' => $verified, 'reject' => $rejected]);
    }
    
    public function rejectVerified(Request $request){
        $id = $request->btnDelete;
        $res = DB::table('tamu')
            ->where('id', $id)
            ->update([
                'verfikasi_Admin' => 1
            ]);
        $verified = DB::table('tamu')->where('verfikasi_Admin', 0)->get();
        $rejected = DB::table('tamu')->where('verfikasi_Admin', 1)->get();
        $total = DB::table('tamu')->where('verfikasi_Admin', 2)->sum('kuota');
        $jumlah = DB::table('tamu')->where('verfikasi_Admin', 2)->count('kuota');
        $jumlahGreja = DB::table('tamu')->where('kehadiran', 1)->sum('kuota');
        $jumlahResepsi = DB::table('tamu')->where('kehadiran', 2)->sum('kuota');
        $jumlahGrejaResepsi = DB::table('tamu')->where('kehadiran', 3)->sum('kuota');
        return view('AdminLayout.verifiedAttendance', ['tamu' => $verified, 'reject' => $rejected])->with('total',$total)->with('jumlah',$jumlah)->with('jumlahGreja',$jumlahGreja)->with('jumlahResepsi',$jumlahResepsi)->with('jumlahGrejaResepsi',$jumlahGrejaResepsi);
    }

    public function addProses(Request $request){
        $newGuests = new Tamu();
        $newGuests->nama = $request->nama;  
        $newGuests->alamat = $request->alamat; 
        $newGuests->email = $request->email;  
        $newGuests->telp = $request->telp;   
        $newGuests->kuota = $request->kuota;  
        $newGuests->kehadiran = $request->kehadiran;
        $newGuests->verfikasi_Admin = 2;

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
            $total = DB::table('tamu')->where('verfikasi_Admin', 2)->sum('kuota');
            $jumlah = DB::table('tamu')->where('verfikasi_Admin', 2)->count('kuota');
            $jumlahGreja = DB::table('tamu')->where('kehadiran', 2)->sum('kuota');
            $jumlahResepsi = DB::table('tamu')->where('kehadiran', 1)->sum('kuota');
            $jumlahGrejaResepsi = DB::table('tamu')->where('kehadiran', 3)->sum('kuota');
            return view('AdminLayout.adminDashboard', ['tamu' => $tamu])->with('total',$total)->with('jumlah',$jumlah)->with('jumlahGreja',$jumlahGreja)->with('jumlahResepsi',$jumlahResepsi)->with('jumlahGrejaResepsi',$jumlahGrejaResepsi);
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
            $total = DB::table('tamu')->where('verfikasi_Admin', 2)->sum('kuota');
            $jumlah = DB::table('tamu')->where('verfikasi_Admin', 2)->count('kuota');
            $jumlahGreja = DB::table('tamu')->where('kehadiran', 1)->sum('kuota');
            $jumlahResepsi = DB::table('tamu')->where('kehadiran', 2)->sum('kuota');
            $jumlahGrejaResepsi = DB::table('tamu')->where('kehadiran', 3)->sum('kuota');
            return view('AdminLayout.adminDashboard', ['tamu' => $tamu])->with('total',$total)->with('jumlah',$jumlah)->with('jumlahGreja',$jumlahGreja)->with('jumlahResepsi',$jumlahResepsi)->with('jumlahGrejaResepsi',$jumlahGrejaResepsi);
        }
        else "failed";
    }

    public function editProses(Request $request){
        $id = $request['id'];
        $nama = $request['nama'];
        $email = $request['email'];
        $alamat = $request['alamat'];
        $kuota = $request['kuota'];
        $kehadiran = $request['kehadiran'];
        $updated = date("Y-m-d");

        $res = DB::table('tamu')
            ->where('id', $id)
            ->update([
                'nama' => $nama,
                'email' => $email,
                'alamat' => $alamat,
                'kuota' => $kuota,
                'kehadiran' => $kehadiran,
                'updated_at' => $updated
            ]);
            $total = DB::table('tamu')->where('verfikasi_Admin', 2)->sum('kuota');
            $jumlah = DB::table('tamu')->where('verfikasi_Admin', 2)->count('kuota');     
            $jumlahGreja = DB::table('tamu')->where('kehadiran', 1)->sum('kuota');
            $jumlahResepsi = DB::table('tamu')->where('kehadiran', 2)->sum('kuota');
            $jumlahGrejaResepsi = DB::table('tamu')->where('kehadiran', 3)->sum('kuota');   
            if($res) return view('AdminLayout.adminDashboard', ['tamu' => $this->getTamu()])->with('total',$total)->with('jumlah',$jumlah)->with('jumlahGreja',$jumlahGreja)->with('jumlahResepsi',$jumlahResepsi)->with('jumlahGrejaResepsi',$jumlahGrejaResepsi);
            else echo "failed";


    }
}
