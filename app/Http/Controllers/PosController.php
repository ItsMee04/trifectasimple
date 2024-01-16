<?php

namespace App\Http\Controllers;

use App\Models\CartModel;
use App\Models\CustomerModel;
use App\Models\ProdukModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PosController extends Controller
{
    public function index()
    {
        $produkcincin = DB::table('jenisproduk')->select('id')->where('jenis', 'CINCIN');
        $listcincin = ProdukModel::where('jenisproduk', $produkcincin)->get();

        $produkanting = DB::table('jenisproduk')->select('id')->where('jenis', 'ANTING');
        $listanting = ProdukModel::where('jenisproduk', $produkanting)->get();

        $produkgelang = DB::table('jenisproduk')->select('id')->where('jenis', 'GELANG');
        $listgelang = ProdukModel::where('jenisproduk', $produkgelang)->get();

        $produkkalung = DB::table('jenisproduk')->select('id')->where('jenis', 'KALUNG');
        $listkalung = ProdukModel::where('jenisproduk', $produkkalung)->get();

        $random = rand(0, 99999999);
        $dt = date('Y');
        $idTransaksi = $dt . $random;

        $listcustomer = CustomerModel::all();

        $listcart  = DB::table('cart')
        ->select('produk.*','cart.*')
        ->leftjoin('produk','cart.produk','produk.id')
        ->where('cart.status',1)
        ->get();
        $countcart = CartModel::count('status',1); 

        $subtotal = DB::table('produk')
        ->join('cart','produk.id','=','cart.produk')
        ->where('cart.status',1)
        ->sum('produk.hargaproduk');
        
        return view('admin.pos', [
            'listcincin'    => $listcincin,
            'listanting'    => $listanting,
            'listgelang'    => $listgelang,
            'listkalung'    => $listkalung,
            'idTransaksi'   => $idTransaksi,
            'listcustomer'  => $listcustomer,
            'listcart'      => $listcart,
            'countcart'     => $countcart,
            'subtotal'      => $subtotal
        ]);
    }
}
