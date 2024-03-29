<?php

namespace App\Http\Controllers;

use App\Models\CartModel;
use App\Models\CustomerModel;
use App\Models\ProdukModel;
use App\Models\PromoModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

        $listcartaktif = DB::table('cart')
            ->where('sales', Auth::user()->iduser)
            ->where('status', 1)
            ->latest('idcart')
            ->first();

        $listcustomer = CustomerModel::all();

        $listcart  = DB::table('cart')
            ->select('produk.*', 'cart.*')
            ->leftjoin('produk', 'cart.produk', 'produk.id')
            ->where('cart.status', 1)
            ->where('cart.sales', Auth::user()->iduser)
            ->get();

        $countcart = DB::table('cart')
            ->select('*')
            ->where('sales', Auth::user()->iduser)
            ->where('status', 1)
            ->count();

        $subtotal = DB::table('produk')
            ->join('cart', 'produk.id', '=', 'cart.produk')
            ->where('cart.status', 1)
            ->where('sales', Auth::user()->iduser)
            ->sum('produk.hargaproduk');

        $idTransaksi = DB::table('transaksi')
            ->latest('idtransaksi')
            ->first();

        $id = "T-";
        $tahun = date('Y');

        if ($idTransaksi == null) {
            $nourut = "000001";
            $idcart = $id . $tahun . $nourut;
        } else {
            $nourut = substr($idTransaksi->idtransaksi, 6, 6) + 1;
            $nourut = str_pad($nourut, 6, "0", STR_PAD_LEFT);

            $idcart = $id . $tahun . $nourut;
        }

        $listpromo = PromoModel::where('status', 1)->get();

        return view('admin.pos', [
            'listcincin'    => $listcincin,
            'listanting'    => $listanting,
            'listgelang'    => $listgelang,
            'listkalung'    => $listkalung,
            'listcustomer'  => $listcustomer,
            'listcart'      => $listcart,
            'countcart'     => $countcart,
            'idtransaksi'   => $idcart,
            'subtotal'      => $subtotal,
            'listcartaktif' => $listcartaktif,
            'listpromo'     => $listpromo
        ]);
    }

    public function deletePos($id)
    {
        $listcart = CartModel::where('id', $id)->delete();

        return redirect('pos')->with('success', 'Data Berhasil Dihapus !');
    }

    public function deleteAllPos($id)
    {
        $listcart = CartModel::where('idcart', $id)
            ->where('sales', Auth::user()->iduser)
            ->delete();

        return redirect('pos')->with('success', 'Data Berhasil Dihapus !');
    }

    public function checkout(Request $request)
    {
        $validasi = $request->validate([
            'namacustomer'  =>  'required',
            'payments'      =>  'required',
            'keterangan'    =>  'required',
        ]);

        $idcart = CartModel::where('sales', Auth::user()->iduser)
            ->where('status', 1)
            ->first()
            ->idcart;

        $nomortransaksi = DB::table('transaksi')
            ->latest('idtransaksi')
            ->first();

        $id = "T-";
        $tahun = date('Y');

        if ($nomortransaksi == null) {
            $nourut = "000001";
            $idtransaksi = $id . $tahun . $nourut;
        } else {
            $nourut = substr($nomortransaksi->idtransaksi, 6, 6) + 1;
            $nourut = str_pad($nourut, 6, "0", STR_PAD_LEFT);

            $idtransaksi = $id . $tahun . $nourut;
        }

        $subtotal = DB::table('produk')
            ->join('cart', 'produk.id', '=', 'cart.produk')
            ->where('cart.status', 1)
            ->where('sales', Auth::user()->iduser)
            ->sum('produk.hargaproduk');


        $insert = DB::table('transaksi')
            ->insert([
                'idtransaksi'   => $idtransaksi,
                'idcart'        => $idcart,
                'customer'      => $request->namacustomer,
                'tanggal'       => date("Y-m-d"),
                'payment'       => $request->payments,
                'total'         => $subtotal,
                'sales'         => Auth::user()->iduser,
                'keterangan'    => $request->keterangan
            ]);

        if ($insert) {
            DB::table('cart')
                ->where('sales', Auth::user()->iduser)
                ->where('status', 1)
                ->where('idcart', $idcart)
                ->update([
                    'status' => 2
                ]);
        }

        return redirect('pos')->with('success', 'Pembelian Success !');
        // dd($idcart, $idtransaksi, $request, $subtotal);
    }
}
