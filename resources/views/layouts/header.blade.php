@extends('layouts.admin')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>NAV fOOT</title>
</head>
<style>
    #navbarSupportedContent {
        font-size: 15px;
    }
    
    @media (max-width:1136px) {
        #navbarSupportedContent {
            font-size: 12px;
        }
        
    }


    a {
        text-decoration: none;
    }
    @media (max-width:969px) {
        #navbarSupportedContent {
            font-size: 12px;
        }
        .login {
            font-size: 12px;
        }
        .busqueda {
            font-size: 12px;
        }

    }

    button a {
      text-decoration: none;
    }
   

    @media (max-width:901px) {
        #navbarSupportedContent {
            font-size: 12px;
        }

        .login {
            font-size: 10px;
        }
        .busqueda {
            font-size: 10px;
        }
    }

    @media (max-width:809px) {

        .form-control {
            font-size: 10px;
        }
        .btn-outline-success {
            font-size: 10px;
        }
    }
    
</style>
<body>
    <header>
        <nav class="navbar navbar-expand-md navbar-light bg navbar-dark bg-primary">
            <div class="container-fluid">
                <img src="assets/logos/logoPrime.png" alt="logo light" height="80" width="100" />
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 col-9">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Inicio</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">quienes somos</a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Categoria
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="#">Electronicos</a></li>
                      <li><a class="dropdown-item" href="#">Entretenimiento</a></li>
                      <li><hr class="dropdown-divider"></li>
                      <li><a class="dropdown-item" href="#">Ropa</a></li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="#">ofertas</a>
                  </li>
                  <form class="d-flex busqueda" style="margin-left:20px;">
                    <input class="form-control me-2" type="search" placeholder="" aria-label="Search"style="background-color: white;">
                    <button class="btn btn-outline-dark" type="submit">busca</button>
                  </form>
                </ul>
                
                <div class="nav-item login col-3">
                  <a href="/login"><button class="btn btn-outline-dark">Iniciar sesion</button></a>
                    <a href="/register"><button class="btn btn-outline-dark">Registrate</button></a>
                </div>
              </div>
            </div>
          </nav>
    </header>
</body>
</html>