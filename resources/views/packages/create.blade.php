@extends('plantilla')
@section('content')
<div class="container">
<div class="card">
    
        <div class="card-header">{{ __('Producto') }}</div>
        <div class="card-body">
        <a href="{{ route('packages.index') }}" class="volver-btn">Volver</a>
    <br><br>
        <form action="{{ route('packages.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="id">ID:</label>
                <input type="text" name="id" class="form-control">
            </div>

            <div class="form-group">
                <label for="name">Nombre:</label>
                <input type="text" name="name" class="form-control">
            </div>

            <div class="form-group">
                <label for="weight">Peso:</label>
                <input type="text" name="weight" class="form-control">
            </div>

			<div class="form-group">
                <label for="image">Imagen:</label>
                <input type="text" name="image" class="form-control">
            </div>

            <div class="form-group">
                <label for="warehouse_id">Almacén:</label>
                <select name="warehouse_id" class="form-control">
                    @foreach ($warehouses as $warehouse)
                        <option value="{{ $warehouse->id }}">{{ $warehouse->name }}</option>
                    @endforeach
                </select>
            </div>

            <br>
            <input type="submit" value="Guardar" class="btn btn-primary">
        </form>

        @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>
</div>
@endsection
