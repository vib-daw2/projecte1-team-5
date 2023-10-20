@extends('plantilla')
@section('content')

<div class="container">
    <div class="ficha-container">
	<a href="{{ route('sells.index') }}">
		Tornar
	</a>


<h2>Fitxa Paquete</h2>


	<strong>Nombre:</strong>
	{{ $sell->package->name }}
	<strong>Camion:</strong>
	{{ $sell->truck->name }}
	<strong>Almacen:</strong>
	{{ $sell->warehouse->name }}
</div>
</div>

@endsection