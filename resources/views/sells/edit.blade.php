@extends('layouts.app')

@section('content')
<div class="container">
<div class="card">
<link rel="icon" type="image/x-icon" href="../img/favicon.png">
        <div class="card-header">{{ __('Actualizar Paquete') }}</div>
        <div class="card-body">

        
        <a href="{{ route('sells.index') }}" class="volver-btn">Volver</a>
        
    @if ($errors->any())
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
    @endif

    <form action="{{ route('sells.update', $sell->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="current_warehouse">Almacén actual:</label>
            <input type="text" name="current_warehouse" value="{{ $sell->package->warehouse->name }}" disabled>
        </div>

        <div class="form-group">
            <label for="current_truck">Camión actual:</label>
            <input type="text" name="current_truck" value="{{ $sell->truck->name }}" disabled>
        </div>

        <div class="form-group">
            <label for="package_name">Nombre del nuevo producto:</label>
            <input type="text" name="package_name" value="{{ $sell->package->name }}">
        </div>

        <div class="form-group">
            <label for="new_warehouse">Selecciona un nuevo almacén:</label>
            <select name="new_warehouse" class="form-control">
                @foreach ($warehouses as $warehouse)
                <option value="{{ $warehouse->id }}">{{ $warehouse->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="new_truck">Selecciona un nuevo camión:</label>
            <select name="new_truck" class="form-control">
                @foreach ($trucks as $truck)
                <option value="{{ $truck->id }}">{{ $truck->name }}</option>
                @endforeach
            </select>
        </div>


        <input type="submit" value="Actualizar">
    </form>
</div>
@endsection