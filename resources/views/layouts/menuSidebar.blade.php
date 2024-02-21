<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>E-commerce</title>
<!-- Bootstrap CSS -->
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<style>
    /* Estilos para hacer el menú lateral fijo a la izquierda desde el principio */
    .offcanvas-start {
        position: fixed;
        top: 0;
        left: 0;
        bottom: 0;
        z-index: 1040; /* mismo nivel de apilamiento que el navbar */
        display: flex;
        flex-direction: column;
        width: 220px; /* ajusta el ancho según sea necesario */
        background-color: #343a40; /* color de fondo oscuro */
        padding: 10px;
        overflow-y: auto;
    }

    .offcanvas-header {
        display: flex;
        align-items: center;
        justify-content: space-between;
        border-bottom: 1px solid #454d55;
        padding: 0.5rem 1rem;
    }

    .offcanvas-title {
        margin-bottom: 0;
        line-height: 1.5;
        color: #fff;
    }

    .offcanvas-body {
        flex-grow: 1;
        padding: 0;
        overflow-y: auto;
    }

    .nav-item {
        width: 100%;
    }

    .nav-link {
        color: #fff;
    }

    /* Ajuste del contenido principal para dejar espacio para el menú */
    .main-content {
        margin-left: 220px; /* Ancho del menú lateral */
        transition: margin-left 0.3s ease-in-out;
    }
</style>
</head>
<body>

<!-- Menú lateral -->
@yield('sidebar')

<!-- Contenido principal -->
<div class="main-content">
    <div>
        @yield('content')
    </div>
</div>

<!-- jQuery y Bootstrap Bundle JS (Necesario para que funcione el offcanvas) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
</body>
</html>