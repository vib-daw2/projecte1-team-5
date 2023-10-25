<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/inicio.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../img/favicon.png">


    <title>ENVIOS IVELOZ</title>
</head>

<body>

<nav class="navbar">
        <div class="navbar-content">
            <div class="logo">
                <img src="../img/logo.png" alt="Logo">
            </div>
        </div>
    </nav>


    <div class="maincontent pt-0 pb-0">
        <div class="section">
            <div class="image-container">
            <img src="../img/image1.png" alt="Imagen 1">
            </div>
            <div class="text-container">
                <h3>Disfruta con iVeloz</h3>
                <p>¡Bienvenido/a a Envíos iVeloz! Tu solución confiable para envíos seguros y puntuales a nivel nacional
                    e internacional.
                    Nuestra misión es hacer que tus envíos lleguen a su destino de manera eficiente y sin
                    complicaciones.
                    ¿Listo para enviar? ¡Comencemos!</p>
            </div>
        </div>

        <div class="section">
            <div class="text-container-yellow">
                <h3>Siempre pensando en ti</h3>
                <p>Nuestros servicios de envío cubren una amplia gama de necesidades.
                    Ya sea que necesites enviar documentos importantes, paquetes pequeños o cargas más grandes,
                    Envíos iVeloz tiene la solución para ti. Ofrecemos envíos nacionales e internacionales,
                    servicios de seguimiento en tiempo real y opciones de entrega exprés.</p>
            </div>
            <div class="image-container">
            <img src="../img/image2.png" alt="Imagen 2">
            </div>
        </div>

        <div class="section">
            <div class="image-container">
            <img src="../img/image3.png" alt="Imagen 3">
            </div>
            <div class="text-container">
                <h3>¿Quieres hacer un envío?</h3>
                <p>Enviar con Envíos Rápidos es fácil y conveniente. Simplemente embala tu envío de manera segura,
                    elige el servicio que mejor se adapte a tus necesidades, y nosotros nos encargaremos del resto.
                    Con opciones de recogida y entrega puerta a puerta, tu envío estará en buenas manos desde el momento
                    en que nos lo entregues hasta que llegue a su destino."</p>
            </div>
        </div>
    </div>

    <div class="col-md-6 p-0 h-md-100 loginarea">
    <div class="d-md-flex align-items-center h-md-100 p-3 justify-content-between">
        <div>
            <h3 class="mb-4 text-center">Disfruta hoy mismo!</h3>
            <p class="text-center">¡Inicia sesión para acceder a tu cuenta!</p>
            <a href="{{ route('login') }}" class="btn btn-dark btn-round">Iniciar Sesión</a>

            <a href="{{ route('register') }}" class="btn btn-dark btn-round">Registrarse</a>
        </div>
    </div>
</div>

</body>

</html>