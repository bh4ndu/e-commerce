@extends('layouts.admin')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') E-commerce</title>

</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap');
    .conocenos {
        padding: 40px;
        font-size: 20px;
        text-align: center;
    }

    .muestras {
        img {
            height: 300px;
        }
    }

    .card-text {
        font-family: "Quicksand", sans-serif;
        font-optical-sizing: auto;
        font-weight: <weight>;
        font-style: normal;
    }
</style>
<body>
    @include('layouts.header')

    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel" data-interval="2000">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/electronicos/electronicos.jpg" class="d-block w-100"/>
          </div>
          <div class="carousel-item">
            <img src="assets/entretenimiento/entretenimiento.jpg" class="d-block w-100"/>
          </div>
          <div class="carousel-item">
            <img src="assets/ropa/ropa.jpg" class="d-block w-100" />
          </div>
        </div>
        
    </div>
    
    <section class="container conocenos">
        <div class="card">
            <div class="card-body">
                <p class="card-text">
                    E-commerce es una empresa pequeña de venta y comercio online, nuestro mayor repertorio son productos electronicos
                    desde celulares hasta laptops, en entretenimiento desde consolas y sus juegos hasta juguetes electricos, y
                    finalmente ropa de varias marcas populares como nike o puma, y de otras tiendas (con autorizacion de su parte) como topitop.
                    inclusive contamos con ropa de marcas genericas de calidad decente al alcance de casi todo el publico.
                    <br>
                    Puedes ver abajo una muestra de productos de las 3 Categorias que tenemos
                </p>           
            </div>
        </div>
    </section>

    <section class="container muestras">
        <div class="card" style="width: 18rem;">
            <img src="assets/ropa/C_blanca.jpg" class="card-img-top" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <div class="card-body">
              <h5 class="card-title">Camisa Blanca California all time winners</h5>
              <p class="card-text">
                camisa de boton con cuello y bordes blanco con negro, de estampado California all time winners, con talla en M, S, y L
              </p>
              <a href="#" class="btn btn-primary">Ver mas</a>
            </div>
        </div>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-body">
                    <img src="assets/ropa/C_blanca.jpg" class="card-img-top">
                </div>
              </div>
            </div>
        </div>
    </section> 
  <!-- Modal -->
  
    
    
    @include('layouts.footer')
</body>
</html>