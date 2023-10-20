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
            <h3>Paquetes</h3>
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>Id Producto</th>
                        <th>Nombre Producto</th>
                        <th>Camion</th>
                        <th>Almacen</th>
                        <th>Operaciones</th>

                    </tr>
                </thead>

                <tbody>
                    @foreach ($sells as $sell)
                    <tr>
                        <td>{{ $sell->id }}</td>
                        <td>{{ $sell->package->name }}</td>
                        <td>{{ $sell->truck->name }}</td>
                        <td>{{ $sell->package->warehouse->name }}</td>
                        <td>
                            <a href="{{ route('sells.show', $sell->id) }}">Mostrar</a>

                            @if(Auth::user()->is_admin)
                            <a href="{{ route('sells.destroy', $sell->id) }}">Esborrar</a>
                          
                            <a href="{{ route('sells.edit', $sell->id) }}">Actualitzar</a>
                            @endif
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>

        </div>

        <div>
            {{ $sells->links('pagination::bootstrap-4') }}
        </div>
    </div>


</body>

</html>
@endsection