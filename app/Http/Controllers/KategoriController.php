<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriModel;
use Illuminate\Support\Facades\DB;

class KategoriController extends Controller
{
    public function index()
    {
        $listkategori = KategoriModel::all();
        return view('admin.kategori', ['listkategori' => $listkategori]);
    }

    public function store(Request $request)
    {
        $validasi = $request->validate([
            'jeniskategori'     =>  'required',
            'deskripsikategori' =>  'required',
            'status'            =>  'required',
        ]);

        DB::table('kategori')->insert(
            [
                'kategori'  =>  $request->jeniskategori,
                'deskripsi' =>  $request->deskripsikategori,
                'status'    => $request->status
            ]
        );
        return redirect('kategori')->with('success', 'Data Success Disimpan !');
    }

    public function update(Request $request, $id)
    {
        $listkategori = KategoriModel::where('id', $id)->first();
        $validasi = $request->validate([
            'jeniskategori'     =>  'required',
            'deskripsikategori' => 'required',
            'status'            =>  'required',
        ]);

        DB::table('kategori')
            ->where('id', $id)
            ->update(
                [
                    'kategori'  => $request->jeniskategori,
                    'deskripsi' => $request->deskripsikategori,
                    'status'    => $request->status
                ]
            );

        return redirect('kategori')->with('success', 'Data Success Diupdate !');
    }

    public function delete($id)
    {
        $listkategori = KategoriModel::where('id', $id)->delete();

        if ($listkategori) {
            return redirect('kategori')->with('success', 'Data Success Dihapus !');
        } else {
            return redirect('kategori')->with('danger', 'Data Gagal Dihapus !');
        }
    }
}
