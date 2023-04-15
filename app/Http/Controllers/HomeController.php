<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dispositivo;

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
        $cobre = Dispositivo::where('detail','=','Cobre')->count();
        $plastico = Dispositivo::where('detail','=','Plastico')->count();
        $cable = Dispositivo::where('detail','=','Cable')->count();
        //dd($cobre);

        return view('home', compact('cobre','plastico','cable'));
    }
}
