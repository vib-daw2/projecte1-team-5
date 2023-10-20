<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/inicio.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="../img/favicon.png">
    <button id="darkModeButton">Modo Oscuro</button>
    <script>
    const darkModeButton = document.getElementById("darkModeButton");
    const body = document.body;


    const userPreference = localStorage.getItem("darkModePreference");
    if (userPreference === "dark" || (userPreference === null && window.matchMedia('(prefers-color-scheme: dark)')
            .matches)) {
        body.classList.add("dark-mode");
        darkModeButton.textContent = "Modo Claro";
    }


    darkModeButton.addEventListener("click", () => {
        body.classList.toggle("dark-mode");
        const isDarkMode = body.classList.contains("dark-mode");
        darkModeButton.textContent = isDarkMode ? "Modo Claro" : "Modo Oscuro";


        localStorage.setItem("darkModePreference", isDarkMode ? "dark" : "light");
    });
    </script>

    <title>ENVIOS IVELOZ</title>
</head>

<body>

    <nav class="navbar navbar-expand-md navbar-light bg-white">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <img src="../img/logo.png" alt="Logo" class="navbar-logo">
            </a>

            <div class="navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="btn btn-dark btn-round">Iniciar Sesión</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="btn btn-custom btn-round">Registrar</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="maincontent pt-0 pb-0">
        <div class="section">
            <div class="image-container">
                <img src="https://i.ibb.co/ZTLG4L5/4.png" alt="4">
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
            <div class="text-container">
                <h3>Siempre pensando en ti</h3>
                <p>Nuestros servicios de envío cubren una amplia gama de necesidades.
                    Ya sea que necesites enviar documentos importantes, paquetes pequeños o cargas más grandes,
                    Envíos iVeloz tiene la solución para ti. Ofrecemos envíos nacionales e internacionales,
                    servicios de seguimiento en tiempo real y opciones de entrega exprés.</p>
            </div>
            <div class="image-container">
                <img src="https://i.ibb.co/HCgcxSk/2.png" alt="2">
            </div>
        </div>

        <div class="section">
            <div class="image-container">
                <img src="https://i.ibb.co/0sdLkMw/3.png" alt="3">
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
        <div class="d-md-flex align-items-center h-md-100 p-3 justify-content-center">
            <div>
                <h3 class="mb-4 text-center">Disfruta hoy mismo!</h3>
                <p class="text-center">¡Inicia sesión para acceder a tu cuenta!</p>
                <a href="{{ route('login') }}" class="btn btn-dark btn-round">Iniciar Sesión</a>
            </div>
        </div>
    </div>
</body>

</html>