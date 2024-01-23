<?php

namespace App\Http\Controllers;

use App\Models\CartModel;
use App\Models\ProdukModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $listcart = DB::table('cart')
        ->select('cart.*','produk.namaproduk','karyawan.nama as namasales')
        ->leftjoin('produk','cart.produk','=','produk.id')
        ->leftjoin('karyawan','cart.sales','=','karyawan.id')
        ->get();

        return view('admin.cart',['listcart'=>$listcart]);
    }

    public function store($id)
    {
        $listproduk = ProdukModel::where('kodeproduk',$id)->first()->id;
        $idcartterakhir = DB::table('cart')
        ->latest('idcart')
        ->first();

        $id = "C-";
        $tahun = date('Y');

        if($idcartterakhir == null)
        {
            $nourut = "000001";
            $idcart = $id.$tahun.$nourut;

            DB::table('cart')
            ->insert([
                'idcart' => $idcart,
                'produk' => $listproduk,
                'status' => 1,
                'sales'  => Auth::user()->id
            ]);
        }elseif($idcartterakhir->status == 1)
        {
            $nourut = substr($idcartterakhir->idcart, 6,6);
            $idcart = $id.$tahun.$nourut;

            DB::table('cart')
            ->insert([
                'idcart' => $idcart,
                'produk' => $listproduk,
                'status' => 1,
                'sales'  => Auth::user()->id
            ]);
        }elseif($idcartterakhir->status == 2)
        {
            $nourut = substr($idcartterakhir->idcart, 6,6)+1;
            $nourut = str_pad($nourut, 6,"0", STR_PAD_LEFT);

            $idcart = $id.$tahun.$nourut;

            DB::table('cart')
            ->insert([
                'idcart' => $idcart,
                'produk' => $listproduk,
                'status' => 1,
                'sales'  => Auth::user()->id
            ]);
        }

        return redirect('pos')->with('success','Data Ditambahkan Ke Keranjang');
    }

   


}
