<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Sell;
use App\Models\Package;

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

        //
        // Recuperem una col·lecció amb tots els Selles de la BD
               // Carreguem la vista sells/index.blade.php 
        // i li passem la llista de sells
        return view('sells.index',compact('sells')); // o ,['sells' => $sells];
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("sells.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       //
         // Validació dels camps
         $request->validate([
            'name' => 'required| unique:sells,name',            
        ]);

        $sell = new Sell;
        $sell->name = $request->name;
        $sell->save();
     
        return redirect()->route('sells.index')
                        ->with('success','La venta se ha creat correctament.');   
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        // Obtenim un objecte sell a partir del seu id
        $sell = Sell::findOrFail($id);
        // carreguem la vista i li passem el sella que volem visualitzar
        return view('sells.show',compact('sell'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $sell = Sell::findOrFail($id);
        $package = $sell->package;

        if (!$package) {
            return redirect()->route('sells.index')->with('error', 'Venta no encontrada');
        }

        return view('sells.edit', compact('sell', 'package'));
    
         $packages = Package::all();

  //  return view('sells.edit', compact('sell', 'packages'));
    
    }



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $sell = Sell::findOrFail($id);
        $package = $sell->package; // Obtén el paquete relacionado

        $request->validate([
            'package_name' => 'required', // Puedes agregar otras validaciones aquí
        ]);

        // Actualiza el nombre del paquete
        $package->name = $request->input('package_name');
        $package->save();

        return redirect()->route('sells.index')
            ->with('success', 'Venta actualizada correctamente');
    }

    
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //  Obtenim la venta que volem esborrar
        $sell = Sell::findOrFail($id);
        
        try {
            $result = $sell->delete();
            
        }
        catch(\Illuminate\Database\QueryException $e) {
             return redirect()->route('sells.index')
                        ->with('error','Error esborrant la venta');
        }   
        return redirect()->route('sells.index')
                        ->with('success','Venta borrada correctamente.');    
    }
}