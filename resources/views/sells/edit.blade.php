@extends('layouts.app')

@section('content')
<div class="container">
    <a href="{{ route('sells.index') }}">Tornar</a>
    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif

   

    {{-- El siguiente bloque muestra el contenido del formulario de selección de almacén y producto --}}
    <div class="card">
        <div class="card-header">{{ __('Enviar Paquete') }}</div>
        <div class="card-body">
            <form action="{{ route('realizar-operacion') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="warehouse">Selecciona el almacén:</label>
                    <select name="warehouse" class="form-control" id="warehouseSelector">
                        <option value="0">Seleccione un almacén</option>
                        <option value="1">Videojuegos</option>
                        <option value="2">Sustancias Tóxicas</option>
                        <option value="3">Electrónico</option>
                        <option value="4">Ropa</option>
                    </select>
                </div>

                <div class="form-group" id="productSelection">
                    <label for="selectedPackages">Selecciona el producto a actualizar :</label>
                    <select name="selectedPackages[]" class="form-control" multiple id="selectedPackages">
                        
                    </select>
                </div>

            </form>

            <form action="{{ route('sells.update', $sell->id) }}" method="POST">
        @csrf
        @method('PUT') {{-- Agrega el método PUT para la actualización --}}

        <strong>Nombre del nuevo producto:</strong>
        <input type="text" name="package_name" value="{{ $sell->package->name }}"> {{-- Usa $sell en lugar de $package --}}
        <input type="submit" value="Actualizar">
    </form>
        </div>
    </div>
</div>
@endsection
