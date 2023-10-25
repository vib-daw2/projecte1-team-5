@extends('plantilla')
@section('content')
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Paquetes!</title>
</head>

<body>

<div class="container">
<div class="card">
    
        <div class="card-header">{{ __('Paquetes') }}</div>
        <div class="card-body">
        <a href="{{ route('sells.create') }}" class="crear-btn">Hacer Pedido</a>
    
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

        <div>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        @if(Auth::user()->is_admin)
                        <th>Id Pedido</th>
                        <th>Id Usuario</th>
                        @endif
                        <th>Nombre Producto</th>
                        <th>Camion</th>
                        <th>Almacen</th>
                        <th>Operaciones</th>

                    </tr>
                </thead>

                <tbody>
                    @foreach ($sells as $sell)
                    @if (Auth::user()->is_admin || $sell->user_id === Auth::user()->id)
                    <tr>
                        @if(Auth::user()->is_admin)
                        <td>{{ $sell->id }}</td>
                        <th>{{ $sell->user_id }}</th>
                        @endif
                        <td>{{ $sell->package->name }}</td>
                        <td>{{ $sell->truck->name }}</td>
                        <td>{{ $sell->package->warehouse->name }}</td>
                        <td>
                            <a href="{{ route('sells.show', $sell->id) }}">Mostrar</a>

                            @if(Auth::user()->is_admin)
                            <a href="{{ route('sells.destroy', $sell->id) }}">Eliminar</a>
                          
                            <a href="{{ route('sells.edit', $sell->id) }}">Actualizar</a>
                            @endif
                        </td>
                    </tr>
                    @endif
                    @endforeach

                </tbody>
            </table>

        </div>

        <div>
            {{ $sells->links('pagination::bootstrap-4') }}
        </div>
    </div>
    </div>
    </div>
    </div>


</body>

</html>
@endsection
