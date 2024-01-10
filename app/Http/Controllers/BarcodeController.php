<?php

namespace App\Http\Controllers;

use App\Models\ProdukModel;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\App;

class BarcodeController extends Controller
{
    public function index()
    {
        return view('admin.scanbarcode');
    }

    public function scanbarcodevalidasi(Request $request)
    {
        $id = $request->qr_code;
        $qrcodeid = ProdukModel::where('kodeproduk', $id)->first()->kodeproduk;

        if ($id == $qrcodeid) {
            return response()->json([
                'status' => 200
            ]);
            return view('produk-detail/' . $request->id)->with('success', 'Data Berhasil Di Scan');
        } else {
            return response()->json([
                'status' => 400
            ]);
        }
    }

    public function viewBarcode($id)
    {
        $qrcodeid = ProdukModel::where('kodeproduk', $id)->first()->kodeproduk;
        return view('admin.view-barcode', ['qrcodeid' => $qrcodeid]);
    }

    public function printBarcode()
    {
        $qrcodeid = [
            'produk' => ProdukModel::all()
        ];

        $pdf = Pdf::loadView('admin.view-barcode', $qrcodeid);
        return $pdf->download('qrbarcode.pdf');
    }
}
