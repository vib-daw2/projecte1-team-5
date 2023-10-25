@extends('plantilla')
@section('content')

<div class="container">
<div class="card">
        <div class="card-header">{{ __('Información del producto') }}</div>
        <div class="card-body">
        
        <a href="{{ route('sells.index') }}" class="volver-btn">Volver</a>

            <img src="{{ asset('img/' . $package->image) }}" alt="{{ $package->name }}" style="max-width: 100%;">
        

            <h2>{{ $package->name }}</h2>

            <p><strong>Almacén:</strong> {{ $package->warehouse->name }}</p>

        </div>
    </div>

@endsection
