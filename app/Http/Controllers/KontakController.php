<?php

namespace App\Http\Controllers;

use App\Models\KontakModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KontakController extends Controller
{
    public function index(){
        $listkontak = KontakModel::all();
        return view('admin.kontak',['listkontak'=>$listkontak]);
    }

    public function store(Request $request)
    {
        $validasi = $request->validate([
            'jeniskontak'  =>  'required',
            'status'       =>  'required',
        ]);

        DB::table('kontak')->insert(
            [
                'jeniskontak' => $request->jeniskontak,
                'status'      => $request->status
            ]
        );
        return redirect('kontak')->with('success', 'Data Success Disimpan !');
    }

    public function show($id)
    {
        $listkontak = KontakModel::where('id',$id)->first();
        return view('admin.edit-kontak',['listkontak'=>$listkontak]);
    }

    public function update(Request $request, $id)
    {
        $listkontak = KontakModel::where('id',$id)->first();
        $validasi = $request->validate([
            'jeniskontak'  =>  'required',
            'status'       =>  'required',
        ]);

        DB::table('kontak')
        ->where('id',$id)
        ->update(
            [
                'jeniskontak' => $request->jeniskontak,
                'status'      => $request->status
            ]
        );

        return redirect('kontak')->with('success', 'Data Success Diupdate !');
    }

    public function delete($id)
    {
        $listkontak = KontakModel::where('id',$id)->first();

        DB::table('kontak')
        ->where('id',$id)
        ->delete();

        return redirect('kontak')->with('success', 'Data Success Diahpus !');
    }
}
