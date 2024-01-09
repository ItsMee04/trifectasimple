<?php

namespace App\Http\Controllers;

use App\Models\ProfesiModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProfesiController extends Controller
{
    public function index(){
        $listprofesi = ProfesiModel::all();
        return view('admin.profesi',['listprofesi'=>$listprofesi]);
    }

    public function store(Request $request)
    {
        $validasi = $request->validate([
            'jenisprofesi'    =>  'required',
            'status'          =>  'required',
        ]);

        DB::table('profesi')->insert(
            [
                'jenisprofesi'  => $request->jenisprofesi,
                'status'        => $request->status
            ]
        );
        return redirect('profesi')->with('success', 'Data Success Disimpan !');
    }

    public function show($id)
    {
        $listprofesi = ProfesiModel::where('id',$id)->first();
        return view('admin.edit-profesi',['listprofesi'=>$listprofesi]);
    }

    public function update(Request $request, $id)
    {
        $listprofesi = ProfesiModel::where('id',$id)->first();
        $validasi = $request->validate([
            'jenisprofesi'    =>  'required',
            'status'          =>  'required',
        ]);

        DB::table('profesi')
        ->where('id',$id)
        ->update(
            [
                'jenisprofesi'   => $request->jenisprofesi,
                'status'         => $request->status
            ]
        );

        return redirect('profesi')->with('success', 'Data Success Diupdate !');
    }

    public function delete($id)
    {
        $listprofesi = ProfesiModel::where('id',$id)->first();

        DB::table('profesi')
        ->where('id',$id)
        ->delete();

        return redirect('profesi')->with('success', 'Data Success Diahpus !');
    }
}
