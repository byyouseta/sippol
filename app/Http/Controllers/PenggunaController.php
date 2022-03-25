<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;
use Alert;
use Illuminate\Support\Facades\Hash;

class PenggunaController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        session()->put('halaman', 'users');

        $data = User::all();

        return view('admin.pengguna', ['data' => $data]);
    }

    public function edit($id)
    {

        $id = Crypt::decrypt($id);
        $data = User::find($id);

        return view('admin.pengguna_edit', [
            'data' => $data,
        ]);
    }

    public function update($id, Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'alamat' => 'required',
            'nohp' => 'required|unique:users,nohp,' . $id,
            'level' => 'required',
        ]);

        $user = User::find($id);
        $user->name = $request->nama;
        $user->nohp = $request->nohp;
        $user->alamat = $request->alamat;
        $user->level = $request->level;
        $user->save();

        Alert::success('Sukses', 'Data berhasil diupdate');
        //$request->session()->flash('sukses', 'Data berhasil diupdate');
        return redirect('/pengguna');
    }

    public function delete($id)
    {
        $id = Crypt::decrypt($id);
        $user = User::find($id);

        $user->delete();

        Alert::success('Sukses', 'Data berhasil dihapus');
        //Session::flash('sukses', 'Data berhasil dihapus');
        return redirect()->back();
    }

    public function resetpass($id)
    {
        $id = Crypt::decrypt($id);
        $user = User::find($id);
        // dd($user->nohp);
        $user->password = Hash::make($user->nohp);
        $user->save();

        Alert::success('Sukses', 'Password berhasil direset');
        //$request->session()->flash('sukses', 'Data berhasil diupdate');
        return redirect('/pengguna');
    }
}
