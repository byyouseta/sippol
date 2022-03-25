<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Peristiwa;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Session;
use Alert;

class PeristiwaController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        session()->put('halaman', 'master');

        $data = Peristiwa::all();

        return view('admin.peristiwa', ['peristiwa' => $data]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'deskripsi' => 'required',
        ]);

        $peristiwa = new Peristiwa();
        $peristiwa->nama = $request->nama;
        $peristiwa->deskripsi = $request->deskripsi;
        $peristiwa->save();

        Alert::success('Sukses', 'Data berhasil disimpan');

        return redirect('/peristiwa');
    }

    public function edit($id)
    {

        $id = Crypt::decrypt($id);
        $peristiwa = Peristiwa::find($id);

        return view('admin.peristiwa_edit', ['data' => $peristiwa]);
    }

    public function update($id, Request $request)
    {
        $this->validate($request, [
            'nama' => 'required',
            'deskripsi' => 'required',
        ]);

        $peristiwa = Peristiwa::find($id);
        $peristiwa->nama = $request->nama;
        $peristiwa->deskripsi = $request->deskripsi;
        $peristiwa->save();

        Alert::success('Sukses', 'Data berhasil diupdate');
        //$request->session()->flash('sukses', 'Data berhasil diupdate');
        return redirect('/peristiwa');
    }

    public function delete($id)
    {
        $id = Crypt::decrypt($id);
        $pelaporan = Peristiwa::find($id);

        $pelaporan->delete();

        Alert::success('Sukses', 'Data berhasil dihapus');
        //Session::flash('sukses', 'Data berhasil dihapus');
        return redirect()->back();
    }
}
