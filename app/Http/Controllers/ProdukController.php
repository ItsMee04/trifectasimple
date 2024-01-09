<?php

namespace App\Http\Controllers;

use App\Models\ProdukModel;
use Illuminate\Http\Request;

class ProdukController extends Controller
{
    public function index()
    {
        $listproduk = ProdukModel::all();
        return view('admin.produk',['listproduk'=>$listproduk]);
    }
}
