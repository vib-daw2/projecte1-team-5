<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;

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
        $packagesByWarehouse = [];

        // Obtén los paquetes para cada almacén y guárdalos en arrays separados
        for ($i = 1; $i <= 4; $i++) {
            $packages = Package::where('warehouse_id', $i)->get();
            $packagesByWarehouse[$i] = $packages;
        }

        return view('home', compact('packagesByWarehouse'));
    }
}
