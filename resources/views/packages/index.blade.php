@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Nuestros productos') }}</div>

                <div class="card-body"> 
                @if(Auth::user()->is_admin)
                <a href="{{ route('packages.create') }}" class="crear-btn">Crear producto</a>
                @endif

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                </div>

                <!-- Primer carrusel -->
                <h3>Videojuegos</h3>
                <div id="carouselExampleControls1" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($packagesByWarehouse[1] as $key => $package)
                            <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                                    <div class="d-flex align-items-center justify-content-center" style="height: 300px;">
                                        <a href="{{ route('packages.show', ['id' => $package->id]) }}">
                                            <img src="{{ asset('img/' . $package->image) }}" alt="{{ $package->name }}" style="max-height: 200px; max-width: 200px;">
                                        </a>
                                        </div>
                                    <div>
                                    <p>{{ $package->name }}</p>
                            </div>
                            </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls1" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls1" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>

                <!-- Segundo carrusel (para el almacén 2) -->
                <h3>Sustancias toxicas</h3>
                <div id="carouselExampleControls2" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($packagesByWarehouse[2] as $key => $package)
                            <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                                <div class="d-flex align-items-center justify-content-center" style="height: 300px;">
                                    <a href="{{ route('packages.show', ['id' => $package->id]) }}">
                                        <img src="{{ asset('img/' . $package->image) }}" alt="{{ $package->name }}" style="max-height: 200px; max-width: 200px;">
                                    </a>
                                    </div>
                                    <div>
                                    <p>{{ $package->name }}</p>
                            </div>
                            </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls2" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls2" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>

                <!-- Tercer carrusel (para el almacén 3) -->
                <h3>Electronica</h3>
                <div id="carouselExampleControls3" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($packagesByWarehouse[3] as $key => $package)
                            <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                                <div class="d-flex align-items-center justify-content-center" style="height: 300px;">
                                    <a href="{{ route('packages.show', ['id' => $package->id]) }}">
                                        <img src="{{ asset('img/' . $package->image) }}" alt="{{ $package->name }}" style="max-height: 200px; max-width: 200px;">
                                    </a>
                                    </div>
                                    <div>
                                    <p>{{ $package->name }}</p>
                            </div>
                            </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls3" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls3" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>

                <!-- Cuarto carrusel (para el almacén 4) -->
                <h3>Ropa</h3>
                <div id="carouselExampleControls4" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        @foreach ($packagesByWarehouse[4] as $key => $package)
                            <div class="carousel-item {{ $key === 0 ? 'active' : '' }}">
                                <div class="d-flex align-items-center justify-content-center" style="height: 300px;">
                                    <a href="{{ route('packages.show', ['id' => $package->id]) }}">
                                        <img src="{{ asset('img/' . $package->image) }}" alt="{{ $package->name }}" style="max-height: 200px; max-width: 200px;">
                                    </a>
                                    </div>
                                    <div>
                                    <p>{{ $package->name }}</p>
                            </div>
                            </div>
                        @endforeach
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls4" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleControls4" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
