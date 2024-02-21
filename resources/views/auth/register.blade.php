@extends('layouts.admin')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
</head>

<style>
  @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap');
.card-body {
  font-family: "Quicksand", sans-serif;
  font-optical-sizing: auto;
  font-weight: <weight>;
  font-style: normal;
}

.text-white {
font-family: "Quicksand", sans-serif;
font-optical-sizing: auto;
font-weight: <weight>;
font-style: normal;
font-size: 25px;
}

.gradient-custom-2 {
/* fallback for old browsers */
background: #184385;

/* Chrome 10-25, Safari 5.1-6 */
background: -webkit-linear-gradient(to right, #184385, #184385, #184385, #184385);

/* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
background: linear-gradient(to right, #7d9bc8, #42689f, #1f3582, #184385);
}

@media (min-width: 768px) {
.gradient-form {
height: 100vh !important;
}
}
@media (min-width: 769px) {
.gradient-custom-2 {
border-top-right-radius: .3rem;
border-bottom-right-radius: .3rem;
}
}
</style>

<body>
<section class="h-100 gradient-form" style="background: linear-gradient(to bottom right, rgba(240, 147, 251, 1), rgba(245, 87, 108, 1))">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-xl-10">
          <div class="card rounded-3 text-black">
            <div class="row g-0">
              <div class="col-lg-6">
                <div class="card-body p-md-5 mx-md-4">
  
                  <div class="text-center">
                    <img src="assets/logos/logoPrime.png"
                      style="width: 185px;" alt="logo">
                    <h4 class="mt-1 mb-5 pb-1">Somos el equipo E-commerce</h4>
                  </div>
  
                  <form action="{{route('register')}}" method="POST">
                    @csrf
                    <p>Por favor create una cuenta</p>
  
                    <div class="form-outline mb-4">
                      <input type="text" id="nombre" name="nombre" class="form-control"/>
                      <label class="form-label" >Nombres</label>
                    </div>
  
                    <div class="form-outline mb-4">
                      <input type="text" id="apellido" name="apellido" class="form-control" />
                      <label class="form-label" >Apellidos</label>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="text" id="nombre_usuario" name="nombre_usuario" class="form-control" />
                      <label class="form-label" >Nombre de usuario</label>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" class="form-control" />
                      <label class="form-label">Fecha de nacimiento</label>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="email" id="email" name="email" class="form-control" />
                      <label class="form-label" for="form2Example22">Correo</label>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="number" id="telefono" name="telefono" class="form-control" />
                      <label class="form-label" for="form2Example22">Telefono</label>
                    </div>

                    <div class="form-outline mb-4">
                      <input type="password" id="password" name="password" class="form-control" />
                      <label class="form-label" for="form2Example22">Contraseña</label>
                    </div>       
  
                    <div class="text-center pt-1 mb-5 pb-1">
                      <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit" value="registrar">Registrar</button>            
                    </div>
  
                    <div class="d-flex align-items-center justify-content-center pb-4">
                      <p class="mb-0 me-2">ya tienes una cuenta?</p>
                      <a href="/login"><button type="button" class="btn btn-outline-danger">Inicia sesion!</button></a>
                    </div>
  
                  </form>
  
                </div>
              </div>
              <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                  <h4 class="mb-4"><b>Por que deberias registrarte?</b></h4>
                  <p class="mb-0">
                    si no tienes cuenta puedes ojear todo lo que quieras , pero si quieres comprar online en nuestro sitio debes 
                    crearte una cuenta y asi: Desbloquear el carrito de compras!.
                    Con el carrito de compras podras guardar los productos que quieras comprar y puedes pagarlos todos a la vez
                    en lugar de uno por uno , ademas al comprar online los fines de semana todos tienen 20% de descuento.
                    adelante!.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</body>
</html>