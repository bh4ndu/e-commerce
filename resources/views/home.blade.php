
@extends('layouts.menuSidebar')

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
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>
@section('sidebar')
<section class="offcanvas offcanvas-start bg-dark">
    <div class="offcanvas-body">
        <ul class="navbar-nav fs-5">
            <li class="nav-item p-3 py-md-1"><a href="#" class="nav-link">Inicio</a></li>
            <li class="nav-item p-3 py-md-1"><a href="#" class="nav-link">Registrar producto</a></li>
            <li class="nav-item p-3 py-md-1"><a href="#" class="nav-link">Control de stock</a></li>
            <li class="nav-item p-3 py-md-1"><a href="#" class="nav-link">electronicos</a></li>
            <li class="nav-item p-3 py-md-1"><a href="#" class="nav-link">entretenimiento</a></li>
            <li class="nav-item p-3 py-md-1"><a href="#" class="nav-link">ropa</a></li>
        </ul>
    </div>
</section>
@endsection


@section('content')
@include('layouts.headerAdmin')
<!-- Contenido específico de la página de inicio -->
<body>
    <div class="container-fluid">
        <h1>Dashboard</h1>
        <p>esto esta pasando en el E-commerce</p>
    </div>
    <div class="container-fluid row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                stock de todos los productos</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">$40,000</div>
                        </div>
                        <div class="col-auto">
                            <i class="fa-solid fa-boxes-stacked fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Nº de usuarios Publicos
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                        </div>
                        <div class="col-auto">
                            <i class="fa-solid fa-user fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Nº de marcas afiliadas
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">$215,000</div>
                        </div>
                        <div class="col-auto"> 
                            <i class="fa-solid fa-copyright fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<div class="row">
    <div class="col-lg-5 mb-4" style="margin-left: 18px;">

        <!-- Project Card Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Porcentaje de stocks de las mercancias </h6>
            </div>
            <div class="card-body">
                <h4 class="small font-weight-bold">Electronicos<span
                        class="float-right">20%</span></h4>
                <div class="progress mb-4">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 20%"
                        aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <h4 class="small font-weight-bold">Entretenimiento<span
                        class="float-right">40%</span></h4>
                <div class="progress mb-4">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 40%"
                        aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <h4 class="small font-weight-bold">Ropa<span
                        class="float-right">60%</span></h4>
                <div class="progress mb-4">
                    <div class="progress-bar" role="progressbar" style="width: 60%"
                        aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6 mb-4">
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="card bg-primary text-white shadow">
                    <div class="card-body">
                        Samsung
                        <div class="text-white-50 small">12</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card bg-success text-white shadow">
                    <div class="card-body">
                        Xiaomi
                        <div class="text-white-50 small">21</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card bg-info text-white shadow">
                    <div class="card-body">
                        Motorola
                        <div class="text-white-50 small">34</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card bg-warning text-white shadow">
                    <div class="card-body">
                        ASUS BIBOOK
                        <div class="text-white-50 small">26</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card bg-danger text-white shadow">
                    <div class="card-body">
                        RUK
                        <div class="text-white-50 small">28</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card bg-secondary text-white shadow">
                    <div class="card-body">
                        hawk
                        <div class="text-white-50 small">27</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card bg-light text-black shadow">
                    <div class="card-body">
                        Topitop hombre
                        <div class="text-black-50 small">20</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mb-4">
                <div class="card bg-dark text-white shadow">
                    <div class="card-body">
                        California
                        <div class="text-white-50 small">12</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

  
    <div class="card shadow mb-4 container col-lg-11" style="margin-right: 85px;">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Resumen de las ventas de ayer</h6>
        </div>
        <div class="card-body">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. A quae aperiam dignissimos perferendis,
                laborum fuga. Exercitationem reiciendis in molestiae, amet rerum commodi est ratione corrupti
                pariatur minus quae qui sunt.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. A quae aperiam dignissimos perferendis,
                laborum fuga. Exercitationem reiciendis in molestiae, amet rerum commodi est ratione corrupti
                pariatur minus quae qui sunt.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. A quae aperiam dignissimos perferendis,
                laborum fuga. Exercitationem reiciendis in molestiae, amet rerum commodi est ratione corrupti
                pariatur minus quae qui sunt.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. A quae aperiam dignissimos perferendis,
                laborum fuga. Exercitationem reiciendis in molestiae, amet rerum commodi est ratione corrupti
                pariatur minus quae qui sunt.
                Lorem ipsum dolor sit amet consectetur adipisicing elit. A quae aperiam dignissimos perferendis,
                laborum fuga. Exercitationem reiciendis in molestiae, amet rerum commodi est ratione corrupti
                pariatur minus quae qui sunt.
            </p>
        </div>
    </div>
        

    
</body>


@include('layouts.copyright')
@endsection


