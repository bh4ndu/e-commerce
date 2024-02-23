@extends('layouts.menuSidebar')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registrar producto</title>
    <link rel="shortcut icon" href="assets/logos/logoPrime.png" type="image/x-icon">

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
    <section class="col-lg-5 mb-4 container-fluid">
        <div class="text-center">
            <img src="assets/logos/logoPrime.png"
            style="width: 185px;" alt="logo">
            <h4 class="mt-1 mb-5 pb-1">Registrar nuevo producto</h4>
        </div>

        <form action="{{route('RegistrarProducto.store')}}" method="POST">
            @csrf
            <p>Agregue todos los datos del nuevo producto</p>

                <div class=" position-relative d-inline-block mx-auto  mb-4">
                    <b>imagen del producto</b><br><br>
                    <img id="product-image" src="" class="img-thumbnail image" alt="image" style="">
                    @csrf
                    <input id="product-img-file-input" name="foto" type="file" accept="image/*" class="product-img-file-input">
                    <label for="product-img-file-input" class="`product-photo-edit avatar-xs">
                        <span class="avatar-title rounded-circle bg-light text-body">
                            <i class="ri-camera-fill"></i>
                        </span>
                    </label>
                </div>
            
            <div class="form-outline mb-4">
                <b>Area del producto</b><br><br>
                <select class="form-select" id="area" name="area" required>
                    <option value="" >Seleccionar Area de producto...</option>
                    <option value="electronicos" >electronicos</option>
                    <option value="entretenimiento">entretenimiento</option>
                    <option value="ropa">ropa</option>
                </select>
            </div>
            <div class="form-outline mb-4">
            <input type="text" id="nombre" name="nombre" class="form-control"/>
            <label class="form-label" ><b>Nombre</b></label>
            </div>

            <div class="form-outline mb-4">
            <input type="number" id="precio" name="precio" class="form-control" />
            <label class="form-label" ><b>Precio</b></label>
            </div>

            <div class="form-outline mb-4">
            <input type="text" id="marca" name="marca" class="form-control" />
            <label class="form-label" ><b>Marca</b></label>
            </div>

            <div class="form-outline mb-4">
                <textarea class="form-control" name="caracteristicas" id="caracteristicas" placeholder="Introducir caracteristicas del producto" rows="3"></textarea>
                <label class="form-label"><b>caracteristicas</b></label>
            </div>

            <div class="form-outline mb-4">
            <input type="text" id="stock" name="stock" class="form-control" />
            <label class="form-label" for="form2Example22"><b>Stock disponible al registrar</b></label>
            </div>

            <div class="text-center pt-1 mb-5 pb-1">
            <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit" value="registrar">Registrar</button>            
            </div>
        </form>
    </section>
      
</body>
@include('layouts.copyright')
@endsection
</html>