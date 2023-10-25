<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Package;
use App\Models\Warehouse;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $packagesByWarehouse = [];

        // Obtén los paquetes para cada almacén y guárdalos en arrays separados
        for ($i = 1; $i <= 4; $i++) {
            $packages = Package::where('warehouse_id', $i)->get();
            $packagesByWarehouse[$i] = $packages;
        }

        return view('packages.index', compact('packagesByWarehouse'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $warehouses = Warehouse::all();
    
        return view('packages.create', compact('warehouses'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $request->validate([
        'id' => 'required',
        'name' => 'required',
        'weight' => 'required',
        'image'=> 'required',
        'warehouse_id' => 'required',
    ]);

    Package::create([
        'id' => $request->input('id'),
        'name' => $request->input('name'),
        'weight' => $request->input('weight'),
        'image'=> $request->input('image'),
        'warehouse_id' => $request->input('warehouse_id'),
    ]);

    return redirect()->route('packages.index')->with('success', 'Paquete creado con éxito');
}

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $package = Package::find($id); // Recupera el paquete por su id

        return view('packages.show', compact('package'));
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $package = Package::findOrFail($id); 
        $packages = Package::all();
        $warehouses = Warehouse::all();
        return view('packages.edit', compact('package', 'warehouses'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
{
    $package = Package::findOrFail($id);

    $request->validate([
        'id' => 'required',
        'name' => 'required',
        'weight' => 'required',
        'image'=> 'required',
        'warehouse_id' => 'required',
    ]);

    $package->update([
        'id' => $request->input('id'),
        'name' => $request->input('name'),
        'weight' => $request->input('weight'),
        'image'=> $request->input('image'),
        'warehouse_id' => $request->input('warehouse_id'),
    ]);

    return redirect()->route('packages.index')->with('success', 'Paquete actualizado con éxito');
}
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // 
    }

    public function realizarOperacion(Request $request)
    {
             return redirect()->route('packages.index')->with('success', 'Operación realizada con éxito');
    }
}
