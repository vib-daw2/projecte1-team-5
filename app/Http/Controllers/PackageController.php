<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Package;

class PackageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $packages = Package::all(); // Obtener todos los paquetes de la base de datos
        return view('packages.index', compact('packages'));

        $packages = Package::all(); // Obtener todos los paquetes de la base de datos
        return view('sells.edit', compact('packages'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // 
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $package = Package::findOrFail($id); 
        $packages = Package::all();
        return view('packages.edit', compact('package'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //    
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
        // Aquí procesas las operaciones según los datos enviados en el formulario
        // Puedes acceder a los datos del formulario utilizando $request
        // Luego, realiza las operaciones necesarias y redirige a donde sea necesario

        // Por ejemplo, puedes redirigir de nuevo a la lista de paquetes
        return redirect()->route('packages.index')->with('success', 'Operación realizada con éxito');
    }
}
