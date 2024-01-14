<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CustomerModel;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    //
    public function index()
    {
        $listcustomer = CustomerModel::all();
        return view('admin.customer', ['listcustomer' => $listcustomer]);
    }

    public function store(Request $request)
    {
        $validasi = $request->validate([
            'namacustomer'      =>  'required',
            'kontakcustomer'    =>  'required',
            'nikcustomer'       =>  'required',
            'tanggalcustomer'   =>  'required',
            'alamatcustomer'    =>  'required',
            'status'            =>  'required',
        ]);

        DB::table('customer')->insert(
            [
                'namacustomer'      =>  $request->namacustomer,
                'kontakcustomer'    =>  $request->kontakcustomer,
                'nikcustomer'       =>  $request->nikcustomer,
                'tanggalcustomer'   =>  $request->tanggalcustomer,
                'alamatcustomer'    =>  $request->kontakcustomer,
                'status'            => $request->status
            ]
        );
        return redirect('customer')->with('success', 'Data Success Disimpan !');
    }

    public function update(Request $request, $id)
    {
        $listcustomer = CustomerModel::where('id', $id)->first();
        $validasi = $request->validate([
            'namacustomer'      =>  'required',
            'kontakcustomer'    =>  'required',
            'nikcustomer'       =>  'required',
            'tanggalcustomer'   =>  'required',
            'alamatcustomer'    =>  'required',
            'pointcustomer'     =>  'required',
            'status'            =>  'required',
        ]);

        DB::table('customer')
            ->where('id', $id)
            ->update(
                [
                    'namacustomer'      =>  $request->namacustomer,
                    'kontakcustomer'    =>  $request->kontakcustomer,
                    'nikcustomer'       =>  $request->nikcustomer,
                    'tanggalcustomer'   =>  $request->tanggalcustomer,
                    'alamatcustomer'    =>  $request->kontakcustomer,
                    'pointcustomer'     =>  $request->pointcustomer,
                    'status'            => $request->status
                ]
            );

        return redirect('customer')->with('success', 'Data Success Diupdate !');
    }

    public function delete($id)
    {
        $listcustomer = CustomerModel::where('id', $id)->delete();
        return redirect('customer')->with('success', 'Data Success Diahpus !');
    }
}
