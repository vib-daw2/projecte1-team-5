<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


use App\Models\Sell;
use App\Models\Package;
use App\Models\Warehouse;
use App\Models\Truck;
use App\Models\User;

class SellController extends Controller
{
    /**
     * Display a listing of the r   esource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sells = Sell::paginate(10);
        return view('sells.index', compact('sells'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        $packages = Package::all(); 
        $trucks = Truck::all(); 
        return view("sells.create", compact('users', 'packages', 'trucks'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'package_id' => 'required',
            'truck_id' => 'required',
        ]);

        $sell = new Sell([
            'user_id' => Auth::id(), 
            'package_id' => $request->package_id,
            'truck_id' => $request->truck_id,
        ]);

        $sell->save();

        return redirect()->route('sells.index')
            ->with('success', 'La venta se ha creado correctamente.');
    }


    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $sell = Sell::findOrFail($id);
        $package = $sell->package;

        return view('sells.show', compact('sell', 'package'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id){
        $sell = Sell::findOrFail($id);
        $package = $sell->package;
        $warehouses = Warehouse::all();
        $trucks = Truck::all();

        if (!$package) {
            return redirect()->route('sells.index')->with('error', 'Venta no encontrada');
        }
        return view('sells.edit', compact('sell', 'package', 'warehouses', 'trucks'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id) {
        $sell = Sell::findOrFail($id);

        
        $request->validate([
            'package_name' => 'required',
            'new_warehouse' => 'required',
        ]);

        $package = $sell->package;
        $package->name = $request->input('package_name');

        $package->warehouse_id = $request->new_warehouse;

        $newWarehouseId = $request->input('new_warehouse');
        $newWarehouse = Warehouse::find($newWarehouseId);

        $newTruckId = $newWarehouse->id; 

        $sell->truck_id = $request->new_truck;

        $package->save();
        $sell->save();

        return redirect()->route('sells.index')
            ->with('success', 'Venta actualizada correctamente');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $sell = Sell::findOrFail($id);

        try {
            $result = $sell->delete();
        } catch (\Illuminate\Database\QueryException $e) {
            return redirect()->route('sells.index')
                ->with('error', 'Error esborrant la venta');
        }
        return redirect()->route('sells.index')
            ->with('success', 'Venta borrada correctamente.');
    }
}
