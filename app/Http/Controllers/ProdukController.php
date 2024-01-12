<?php

namespace App\Http\Controllers;

use App\Models\ProdukModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ProdukController extends Controller
{
    public function index()
    {
        $listproduk     = ProdukModel::all();
        $jenisproduk    = DB::table('jenisproduk')->get();
        $produkbarang   = rand(0, 99999999999999999);

        return view('admin.produk', ['listproduk' => $listproduk, 'produkbarang' => $produkbarang, 'jenisproduk' => $jenisproduk]);
    }

    public function store(Request $request)
    {
        $validasi = $request->validate([
            'kodeproduk'        =>  'required|unique:produk',
            'namaproduk'        =>  'required',
            'keteranganproduk'  =>  'required',
            'hargaproduk'       =>  'required',
            'jenisproduk'       =>  'required',
            'beratproduk'       =>  'required',
            'karatproduk'       =>  'required',
            'status'            =>  'required'
        ]);

        $dt = date('Y');
        $newName = '';
        if ($request->file('fotoproduk')) {
            $extension = $request->file('fotoproduk')->getClientOriginalExtension();
            $newName = $dt . '-' . now()->timestamp . '.' . $extension;
            $request->file('fotoproduk')->storeAs('fotoproduk', $newName);
            $request['fotoproduk'] = $newName;
        }

        DB::table('produk')->insert(
            [
                'kodeproduk'          => $request->kodeproduk,
                'namaproduk'          => $request->namaproduk,
                'keteranganproduk'    => $request->keteranganproduk,
                'hargaproduk'         => $request->hargaproduk,
                'jenisproduk'         => $request->jenisproduk,
                'beratproduk'         => $request->beratproduk,
                'karatproduk'         => $request->karatproduk,
                'status'              => $request->status,
                'fotoproduk'          => $newName
            ]
        );
        return redirect('produk')->with('success', 'Data Success Disimpan !');
    }

    public function detailProduk($id)
    {
        $listproduk     = ProdukModel::where('kodeproduk', $id)->first();
        return view('admin.pages.produk-detail', ['listproduk' => $listproduk]);
    }

    public function show($id)
    {
        $listproduk     = ProdukModel::where('id', $id)->first();
        $jenisproduk    = DB::table('jenisproduk')->get();
        return view('admin.pages.edit-produk', ['listproduk' => $listproduk, 'jenisproduk' => $jenisproduk]);
    }

    public function update(Request $request, $id)
    {
        $listproduk = ProdukModel::where('id', $id)->first();

        $validasi = $request->validate([
            'namaproduk'        =>  'required',
            'hargaproduk'       =>  'required',
            'keteranganproduk'  =>  'required',
            'jenisproduk'       =>  'required',
            'beratproduk'       =>  'required',
            'karatproduk'       =>  'required',
            'status'            =>  'required'

        ]);

        if ($request->file('fotoproduk')) {

            $path = 'storage/fotoproduk/' . $listproduk->fotoproduk;

            if (File::exists($path)) {
                File::delete($path);
            }
            $dt = date('Y');
            $extension = $request->file('fotoproduk')->getClientOriginalExtension();
            $newName = $dt . '-' . now()->timestamp . '.' . $extension;
            $request->file('fotoproduk')->storeAs('fotoproduk', $newName);
            $request['fotoproduk'] = $newName;

            DB::table('produk')
                ->where('id', $request->id)
                ->update([
                    'namaproduk'          => $request->namaproduk,
                    'hargaproduk'         => $request->hargaproduk,
                    'keteranganproduk'    => $request->keteranganproduk,
                    'jenisproduk'         => $request->jenisproduk,
                    'beratproduk'         => $request->beratproduk,
                    'karatproduk'         => $request->karatproduk,
                    'status'              => $request->status,
                    'fotoproduk'          => $newName
                ]);
        } else {
            DB::table('produk')
                ->where('id', $request->id)
                ->update([
                    'namaproduk'          => $request->namaproduk,
                    'hargaproduk'         => $request->hargaproduk,
                    'keteranganproduk'    => $request->keteranganproduk,
                    'jenisproduk'         => $request->jenisproduk,
                    'beratproduk'         => $request->beratproduk,
                    'karatproduk'         => $request->karatproduk,
                    'status'              => $request->status
                ]);
        }
        return redirect('produk')->with('success', 'Data Success Diupdate !');
    }

    public function delete($id)
    {
        $listproduk = ProdukModel::where('id', $id)->first();
        $path = 'storage/fotoproduk/' . $listproduk->fotoproduk;

        if (File::exists($path)) {
            File::delete($path);
        }

        DB::table('produk')
            ->where('id', $id)
            ->delete();

        return redirect('produk')->with('success', 'Data Success Dihapus !');
    }
}
