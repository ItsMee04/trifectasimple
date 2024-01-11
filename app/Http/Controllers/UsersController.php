<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\AuthController;

class UsersController extends Controller
{
    public function index()
    {
        $listkaryawan = DB::table('users')
            ->select('users.*', 'karyawan.nama')
            ->leftjoin('karyawan', 'users.iduser', '=', 'karyawan.id')
            ->get();
        $role = DB::table('role')->get();

        return view('admin.users', ['listkaryawan' => $listkaryawan, 'role' => $role]);
    }

    public function update(Request $request, $id)
    {
        $validasi = $request->validate([
            'username' =>  'required',
            'role'     =>  'required',
            'status'   =>  'required'
        ]);

        if ($request->password) {
            DB::table('users')
                ->where('id', $id)
                ->update([
                    'username'  => $request->username,
                    'password'  => Hash::make($request->password),
                    'role'      => $request->role,
                    'status'    => $request->status
                ]);

            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
            return redirect('login');
        } else {
            DB::table('users')
                ->where('id', $id)
                ->update([
                    'role'      => $request->role,
                    'status'    => $request->status
                ]);
        }

        return redirect('users')->with('success', 'Data Success Diupdate !');
    }

    public function delete($id)
    {
        $listkaryawan = User::where('id', $id)->delete();
        return redirect('users')->with('success', 'Data Success Dihapus !');
    }
}
