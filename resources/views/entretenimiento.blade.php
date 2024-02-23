@extends('layouts.menuSidebar')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Entretenimiento</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Fredoka:wdth,wght@103.6,300..700&display=swap');

    * {
        font-family: "Fredoka", sans-serif;
        font-optical-sizing: auto;
        font-weight: 364;
        font-style: normal;
        font-variation-settings:
        "wdth" 100.6;
    }

    .card {
        margin-left: 20px;
        margin-right: 20px;

    }

    h1 {
        margin-left: 20px;
    }
</style>
@section('sidebar')
    <section class="offcanvas offcanvas-start bg-dark">
        <center><img src="assets/logos/logoPrime.png" style="width: 100px; height: 80px;"></center>
        <div class="offcanvas-body">
            <ul class="navbar-nav fs-5">
                <li class="nav-item p-3 py-md-1"><a href="{{ route('home') }}" class="nav-link"><i class="fa-solid fa-house" style="padding-right:10px;"></i> Inicio</a></li>
                <li class="nav-item p-3 py-md-1"><a href="{{ route('RegistrarProducto.index') }}" class="nav-link"><i class="fa-regular fa-registered" style="padding-right:10px;"></i> Registrar producto</a></li>
                <li class="nav-item p-3 py-md-1"><a href="{{ route('controlStock.index') }}" class="nav-link"><i class="fa-regular fa-clipboard" style="padding-right:10px;"></i> Control de stock</a></li>
                <li class="nav-item p-3 py-md-1"><a href="{{ route('Electronicos.index') }}" class="nav-link"><i class="fa-solid fa-microchip" style="padding-right:10px;"></i> electronicos</a></li>
                <li class="nav-item p-3 py-md-1"><a href="{{ route('Entretenimiento.index') }}" class="nav-link"><i class="fa-solid fa-gamepad" style="padding-right:10px;"></i> entretenimiento</a></li>
                <li class="nav-item p-3 py-md-1"><a href="{{ route('Ropa.index') }}" class="nav-link"><i class="fa-solid fa-shirt" style="padding-right:10px;"></i> ropa</a></li>
            </ul>
        </div>
    </section>
@endsection
@section('content')
@include('layouts.headerAdmin')

<body>
    <h1>Modulo de productos de entretenimiento</h1><br>
  <div class="card">
    <div class="card-body">
        <div class="live-preview">
            <div class="table-responsive table-card">
                <table class="table align-middle table-nowrap table-striped-columns mb-0">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Marca</th>
                            <th scope="col">Caracteristicas</th>
                            <th scope="col">Stock</th>
                            <th scope="col" class="acciones" style="width: 150px;">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- FILAS DE LA TABLA -->
                        @php $contador = 1; @endphp
                        @foreach($entretenimientos as $entretenimiento)
                            <tr>
                                <td>{{ $contador }}</td>
                                <td>{{ $entretenimiento->nombre }}</td>
                                <td>{{ $entretenimiento->foto }}</td>
                                <td>{{ $entretenimiento->precio }}</td>
                                <td>{{ $entretenimiento->marca }}</td>
                                <td>{{ $entretenimiento->caracteristicas }}</td>
                                <td>{{ $entretenimiento->stock }}</td>
                            </td>
                                <td class="acciones">
                                    <a href="#" class="btn btn-primary btn-sm"
                                        data-bs-toggle="modal"
                                        data-bs-target="#editarModal">
                                        <i class="fas fa-pencil-alt"></i>
                                    </a>

                                    <a href="#" class="btn btn-sm btn-danger"
                                        data-bs-toggle="modal"
                                        data-bs-target="#eliminarModal">
                                        <i class="fas fa-trash-alt"></i>
                                    </a>
                                </td>
                            </tr>
                            @php 
                                $contador++; 
                            @endphp
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>   
</div>
</body>
@include('layouts.copyright')
@endsection
</html>