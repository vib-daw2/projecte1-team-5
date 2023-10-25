@extends('plantilla')
@section('content')
<div class="container">
<div class="card">
    
        <div class="card-header">{{ __('Pedidos') }}</div>
        <div class="card-body">

        <a href="{{ route('sells.index') }}" class="volver-btn">Volver</a>

        <br><br>

        <form action="{{ route('sells.store') }}" method="POST">
            @csrf

            @if(Auth::user()->is_admin)
                <div class="form-group">
                    <label for="user_id">Usuario:</label>
                    <select name="user_id" class="form-control">
                        @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                        @endforeach
                    </select>
                </div>
            @else
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
            @endif

            <div class="form-group">
                <label for="package_id">Paquete:</label>
                <select name="package_id" class="form-control">
                    @foreach ($packages as $package)
                        <option value="{{ $package->id }}">{{ $package->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="truck_id">Camión:</label>
                <select name="truck_id" class="form-control">
                    @foreach ($trucks as $truck)
                        <option value="{{ $truck->id }}">{{ $truck->name }}</option>
                    @endforeach
                </select>
            </div><br>


            <input type="submit" value="Crear Venta" class="btn btn-primary">
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
