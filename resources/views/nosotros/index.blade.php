<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-6">
            <!-- Contenido de la página "Nosotros" -->
            <h2>¿Quiénes somos?</h2>
            <p>Somos Envíos iVeloz, una empresa dedicada a brindar servicios de envío y recepción de paquetes de manera rápida, segura y eficiente. </p>
            <p>Nuestra misión es simplificar la logística para nuestros clientes, ofreciendo soluciones integrales que se adaptan a sus necesidades específicas. </p>
            <p>En Envíos iVeloz, valoramos la calidad del servicio y la excelencia en cada paso. Nuestro equipo está formado por profesionales capacitados y dedicados que se esfuerzan por superar las expectativas de nuestros clientes en cada envío.</p> 
            <p>Gracias por confiar en nosotros para sus necesidades de envío y recepción de paquetes. Esperamos seguir siendo su opción número uno para todas sus entregas.</p>
        </div>
        <div class="col-md-6">
            <!-- Mapa de Google Maps -->
            <div class="map-container">
                <h2>¿Dónde estamos?</h2>
                <p>Nos ubicamos en Camí Vell de Salou-I, 14, Tarragona, España</p>
                <div class="google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2898.401485234238!2d1.2321555155113223!3d41.11573818122823!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd1a37cf1e5f9f1d%3A0x8623ce4ba2f07c6b!2s14%20Cam%C3%AD%20Vell%20de%20Salou-I%2C%20Tarragona%2C%20Catalonia!5e0!3m2!1sen!2ses!4v1632901497901!5m2!1sen!2ses" width="700" height="520" style="border:0; border-radius: 15px;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

</body>
</html>
