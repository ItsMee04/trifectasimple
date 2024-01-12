<?php

namespace App\Http\Controllers;

use App\Models\ProfesiModel;
use Illuminate\Http\Request;
use App\Models\KaryawanModel;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

class KaryawanController extends Controller
{
    public function index()
    {
        $listkaryawan = DB::table('karyawan')
            ->select('karyawan.*', 'profesi.jenisprofesi')
            ->leftjoin('profesi', 'karyawan.profesi', '=', 'profesi.id')
            ->get();

        $profesi = DB::table('profesi')->get();
        $role = DB::table('role')->get();
        return view('admin.karyawan', ['listkaryawan' => $listkaryawan, 'profesi' => $profesi, 'role' => $role]);
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

    public function show($id)
    {
        $listkaryawan = KaryawanModel::where('id', $id)->first();
        $profesi = DB::table('profesi')->get();
        return view('admin.pages.edit-karyawan', ['listkaryawan' => $listkaryawan, 'profesi' => $profesi]);
    }

    public function update(Request $request, $id)
    {
        $listkaryawan = KaryawanModel::where('id', $id)->first();

        $validasi = $request->validate([
            'namakaryawan'   =>  'required',
            'kontakkaryawan' =>  'required',
            'profesikaryawan' =>  'required',
            'status'         =>  'required',
            'alamatkaryawan' =>  'required',
        ]);

        if ($request->file('ttdkaryawan')) {

            $path = 'storage/ttdkaryawan/' . $listkaryawan->ttd;

            if (File::exists($path)) {
                File::delete($path);
            }
            $dt = date('Y');
            $extension = $request->file('ttdkaryawan')->getClientOriginalExtension();
            $newName = $dt . '-' . now()->timestamp . '.' . $extension;
            $request->file('ttdkaryawan')->storeAs('ttdkaryawan', $newName);
            $request['ttdkaryawan'] = $newName;

            DB::table('karyawan')
                ->where('id', $request->id)
                ->update([
                    'nama'          => $request->namakaryawan,
                    'kontak'        => $request->kontakkaryawan,
                    'profesi'       => $request->profesikaryawan,
                    'alamat'        => $request->alamatkaryawan,
                    'status'        => $request->status,
                    'ttd'           => $newName
                ]);
        } else {
            DB::table('karyawan')
                ->where('id', $request->id)
                ->update([
                    'nama'          => $request->namakaryawan,
                    'kontak'        => $request->kontakkaryawan,
                    'profesi'       => $request->profesikaryawan,
                    'alamat'        => $request->alamatkaryawan,
                    'status'        => $request->status
                ]);
        }
        return redirect('karyawan')->with('success', 'Data Success Diupdate !');
    }

    public function usersKaryawan(Request $request, $id)
    {
        $idkaryawan = KaryawanModel::where('id', $id)->first()->id;

        $validasi = $request->validate([
            'username' =>  'required',
            'password' =>  'required',
            'role'     =>  'required'
        ]);

        DB::table('users')->insert(
            [
                'iduser'    => $idkaryawan,
                'username'  => $request->username,
                'password'  => Hash::make($request->password),
                'role'      => $request->role
            ]
        );
        return redirect('users')->with('success', 'Data Success Disimpan !');
    }

    public function delete($id)
    {
        $listkaryawan = KaryawanModel::where('id', $id)->first();
        $listusers    = User::where('iduser', $id)->first()->id;

        $deletekaryawan = DB::table('karyawan')
            ->where('id', $id)
            ->delete();

        if ($deletekaryawan) {
            DB::table('users')
                ->where('id', $listusers)
                ->delete();
        }

        return redirect('karyawan')->with('success', 'Data Success Diahpus !');
    }
}
