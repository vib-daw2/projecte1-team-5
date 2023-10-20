@extends('plantilla')

@section('content')
<div class="container">
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    @if (session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
    @endif

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
                    <label for="selectedPackages">Selecciona el producto:</label>
                    <select name="selectedPackages[]" class="form-control" multiple id="selectedPackages">
                        @foreach ($packages as $package)
                            <option value="{{ $package->id }}" data-warehouse="{{ $package->warehouse_id }}">{{ $package->name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Realizar Operación</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    const warehouseSelector = document.getElementById('warehouseSelector');
    const selectedPackages = document.getElementById('selectedPackages');

    warehouseSelector.addEventListener('change', function () {
        const selectedWarehouse = warehouseSelector.value;
        const options = selectedPackages.options;

        for (let i = 0; i < options.length; i++) {
            const option = options[i];
            const warehouseId = option.getAttribute('data-warehouse');

            if (selectedWarehouse === '0' || selectedWarehouse === warehouseId) {
                option.style.display = 'block';
            } else {
                option.style.display = 'none';
            }
        }
    });
</script>

@endsection
 