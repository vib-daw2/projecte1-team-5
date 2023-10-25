@extends('plantilla')
@section('content')

<div class="container">
	<div class="card">
		<div class="card-header">{{ __('Información del pedido') }}</div>
		<div class="card-body">
			<a href="{{ route('sells.index') }}" class="volver-btn">Volver</a>

			<h2>Información del Pedido</h2>


			<img src="{{ asset('img/' . $package->image) }}" alt="{{ $package->name }}" style="max-height: 200px; max-width: 200px;">
			<strong>Nombre:</strong>
			{{ $sell->package->name }}
			<strong>Camion:</strong>
			{{ $sell->truck->name }}
			<strong>Almacen:</strong>
			{{ $sell->package->warehouse->name }}
		</div>
	</div>

	@endsection