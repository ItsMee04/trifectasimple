<?php

namespace App\Http\Controllers;

use App\Models\SuplierModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class SuplierController extends Controller
{
    public function index()
    {
        $listsuplier = SuplierModel::all();
        return view('admin.suplier',['listsuplier'=>$listsuplier]);
    }

    public function store(Request $request)
    {
        $validasi = $request->validate([
            'namasuplier'   =>  'required',
            'kontaksuplier' =>  'required',
            'alamatsuplier' =>  'required',
            'status'        =>  'required'
        ]);

        DB::table('suplier')->insert(
            [
                'namasuplier'     => $request->namasuplier,
                'kontaksuplier'   => $request->kontaksuplier,
                'alamatsuplier'   => $request->alamatsuplier,
                'status'          => $request->status
            ]
        );
        return redirect('suplier')->with('success', 'Data Success Disimpan !');
    }

    public function show($id)
    {
        $listsuplier = SuplierModel::where('id',$id)->first();
        return view('admin.edit-suplier',['listsuplier'=>$listsuplier]);
    }

    public function update(Request $request, $id)
    {
        $listsuplier = SuplierModel::where('id',$id)->first();

        $validasi = $request->validate([
            'namasuplier'   =>  'required',
            'kontaksuplier' =>  'required',
            'alamatsuplier' =>  'required',
            'status'        =>  'required'
        ]);

        DB::table('suplier')
        ->where('id', $id)
        ->update(
            [
                'namasuplier'     => $request->namasuplier,
                'kontaksuplier'   => $request->kontaksuplier,
                'alamatsuplier'   => $request->alamatsuplier,
                'status'          => $request->status
            ]
        );

        return redirect('suplier')->with('success', 'Data Success Diupdate !');
    }

    public function delete($id)
    {
        $listsuplier = SuplierModel::where('id',$id)->first();

        DB::table('suplier')
        ->where('id',$id)
        ->delete();

        return redirect('suplier')->with('success', 'Data Success Diahpus !');
    }
}
