<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sell; // Importa la clase Sell
use App\Models\Warehouse;
use App\Models\Package;

class WarehouseController extends Controller
{
    public function index()
    {
        $packages = Package::paginate(10); // Cambia "Product" a "Sell" con mayúscula inicial

        return view('products.index', compact('packages')); // Ajusta la vista según tu estructura de carpetas

        $warehouses = Warehouse::all();
    }

    public function realizarOperacion(Request $request)
    {
        // Aquí procesa las operaciones con las ventas seleccionadas
        $selectedPackages = $request->input('selected_packages');
        // Realiza las operaciones deseadas con las ventas seleccionadas

        return redirect()->route('sells.index')->with('success', 'Operación realizada con éxito');
    }
}
