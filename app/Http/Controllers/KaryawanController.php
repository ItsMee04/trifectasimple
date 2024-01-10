<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KaryawanModel;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\ProfesiModel;

class KaryawanController extends Controller
{
    public function index()
    {
        $listkaryawan = DB::table('karyawan')
        ->select('karyawan.*','profesi.jenisprofesi')
        ->leftjoin('profesi','karyawan.profesi','=','profesi.id')
        ->get();

        $profesi = DB::table('profesi')->get();
        return view('admin.karyawan',['listkaryawan'=>$listkaryawan,'profesi'=>$profesi]);
    }

    public function store(Request $request)
    {
        $validasi = $request->validate([
            'namakaryawan'   =>  'required',
            'kontakkaryawan' =>  'required',
            'profesi'        =>  'required',
            'status'         =>  'required',
            'alamatkaryawan' =>  'required',
        ]);

        $dt = date('Y');
        $newName = '';
        if ($request->file('ttdkaryawan')) {
            $extension = $request->file('ttdkaryawan')->getClientOriginalExtension();
            $newName = $dt . '-' . now()->timestamp . '.' . $extension;
            $request->file('ttdkaryawan')->storeAs('ttdkaryawan', $newName);
            $request['ttd'] = $newName;
        }

        DB::table('karyawan')->insert(
            [
                'nama'      => $request->namakaryawan,
                'alamat'    => $request->alamatkaryawan,
                'kontak'    => $request->kontakkaryawan,
                'profesi'   => $request->profesi,
                'status'    => $request->status,
                'ttd'       => $newName
            ]
        );
        return redirect('karyawan')->with('success', 'Data Success Disimpan !');
    }
}
