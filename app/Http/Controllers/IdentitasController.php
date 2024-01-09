<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\IdentitasModel;
use Illuminate\Support\Facades\DB;

class IdentitasController extends Controller
{
    public function index(){
        $listidentitas = IdentitasModel::all();
        return view('admin.identitas',['listidentitas'=>$listidentitas]);
    }

    public function store(Request $request)
    {
        $validasi = $request->validate([
            'jenisidentitas'  =>  'required',
            'status'          =>  'required',
        ]);

        DB::table('identitas')->insert(
            [
                'jenisidentitas' => $request->jenisidentitas,
                'status'   => $request->status
            ]
        );
        return redirect('identitas')->with('success', 'Data Success Disimpan !');
    }

    public function show($id)
    {
        $listidentitas = IdentitasModel::where('id',$id)->first();
        return view('admin.edit-identitas',['listidentitas'=>$listidentitas]);
    }

    public function update(Request $request, $id)
    {
        $listidentitas = IdentitasModel::where('id',$id)->first();
        $validasi = $request->validate([
            'jenisidentitas'  =>  'required',
            'status'          =>  'required',
        ]);

        DB::table('identitas')
        ->where('id',$id)
        ->update(
            [
                'jenisidentitas' => $request->jenisidentitas,
                'status'         => $request->status
            ]
        );

        return redirect('identitas')->with('success', 'Data Success Diupdate !');
    }

    public function delete($id)
    {
        $listidentitas = IdentitasModel::where('id',$id)->first();

        DB::table('identitas')
        ->where('id',$id)
        ->delete();

        return redirect('identitas')->with('success', 'Data Success Diahpus !');
    }
}
