<?php

namespace App\Http\Controllers;

use App\DataPelaporan;
use App\ManualPelaporan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        session()->put('halaman', 'home');

        if (Auth::user()->level == 1) {
            $masuk = DataPelaporan::where('status', '=', 0)->count();
            $proses = DataPelaporan::where('status', '=', 1)->count();
            $selesai = DataPelaporan::where('status', '=', 2)->count();
            $masuk2 = ManualPelaporan::where('status', '=', 0)->count();
            $proses2 = ManualPelaporan::where('status', '=', 1)->count();
            $selesai2 = ManualPelaporan::where('status', '=', 2)->count();
        } else {
            $masuk = DataPelaporan::where('status', '=', 0)
                ->where('user_id', '=', Auth::user()->id)
                ->count();
            $proses = DataPelaporan::where('status', '=', 1)
                ->where('user_id', '=', Auth::user()->id)
                ->count();
            $selesai = DataPelaporan::where('status', '=', 2)
                ->where('user_id', '=', Auth::user()->id)
                ->count();
            $masuk2 = ManualPelaporan::where('status', '=', 0)
                ->where('user_id', '=', Auth::user()->id)
                ->count();
            $proses2 = ManualPelaporan::where('status', '=', 1)
                ->where('user_id', '=', Auth::user()->id)
                ->count();
            $selesai2 = ManualPelaporan::where('status', '=', 2)
                ->where('user_id', '=', Auth::user()->id)
                ->count();
        }


        $masuk = $masuk + $masuk2;
        $proses = $proses + $proses2;
        $selesai = $selesai + $selesai2;
        //dd($masuk, $proses, $selesai);
        return view('home2', compact('masuk', 'proses', 'selesai'));
    }
}
