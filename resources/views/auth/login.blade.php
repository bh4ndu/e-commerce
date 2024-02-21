@extends('layouts.admin')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicia sesion</title>
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
    font-size: 30px;
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
      
                      <form action="{{route('login')}}" method="POST">
                        @csrf
                        <p>Por favor inicia sesion con tu cuenta</p>
      
                        <div class="form-outline mb-4">
                          <input type="text" name="nombre_usuario" class="form-control"
                            placeholder="" />
                          <label class="form-label" for="form2Example11">Nombre de usuario</label>
                        </div>
      
                        <div class="form-outline mb-4">
                          <input type="password" name="password" class="form-control" />
                          <label class="form-label" for="form2Example22">Contraseña</label>
                        </div>
      
                        <div class="text-center pt-1 mb-5 pb-1">
                          <button class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3" type="submit">iniciar sesion</button>
                          <a class="text-muted" href="#!">Olvidaste tu contraseña?</a>
                        </div>
      
                        <div class="d-flex align-items-center justify-content-center pb-4">
                          <p class="mb-0 me-2">No tienes una cuenta?</p>
                          <a href="/register"><button type="button" class="btn btn-outline-danger">Create una!</button></a>
                        </div>
      
                      </form>
      
                    </div>
                  </div>
                  <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                    <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                      <h4 class="mb-4">Que te vaya bien!</h4>
                      <p class="mb-0">Agrega a tu carrito de compras todo lo que quieras, nuestra compra online es segura
                        y sin trucos.
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