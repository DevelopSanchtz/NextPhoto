<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">


    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">


    <script src="https://kit.fontawesome.com/0dd7a6f868.js" crossorigin="anonymous"></script>

    <!-- Link Swiper's CSS -->
    <link rel="stylesheet" href="assets/css/swiper.min.css">
    <link rel="stylesheet" href="/assets/css/estilos.css">

    <title>Next Photo</title>
</head>


<body>

    <!-- seccion navbar y carusel -->
    <header>
        <!-- navbar  -->
        <nav class="navbar fixed-top shadow-sm bg-white rounded navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="/assets/images/logo-claro.jpg" width="30" height="30" alt="" loading="lazy">
            </a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#portafolio">Portafolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#paquetes">Paquetes</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#teams">¿Quienes somos?</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#resenas">Reseñas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contacto">Contacto</a>
                    </li>

                </ul>
            </div>
        </nav>



        <!-- carusel -->
        <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">

                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                    <li data-target="#myCarousel" data-slide-to="3"></li>
                </ol>

                <div class="carousel-item active" data-interval="10000">
                    <div class="d-block w-100 imagen-portada1">
                        <img src="/assets/images/portada3.jpg" class="d-block w-100" alt="...">
                        <a href="#paquetes"
                            class="btn btn-portada1 d-none d-xl-block d-lg-block d-md-block d-sm-block d-xs-none">Ver
                            paquetes</a>
                    </div>
                </div>

                <div class="carousel-item" data-interval="10000">
                    <div class="d-block w-100 imagen-portada1">
                        <img src="/assets/images/cateorias/casuales.jpg" class="d-block w-100" alt="...">
                        <a href="#paquetes"
                            class="btn btn-portada3 d-none d-xl-block d-lg-block d-md-block d-sm-block d-xs-none">Ver
                            paquetes</a>
                    </div>
                </div>

                <div class="carousel-item" data-interval="10000">
                    <div class="d-block w-100 imagen-portada1">
                        <img src="/assets/images/cateorias/xv.jpg" class="d-block w-100" alt="...">
                        <a href="#paquetes"
                            class="btn btn-portada4 d-none d-xl-block d-lg-block d-md-block d-sm-block d-xs-none">Ver
                            paquetes</a>
                    </div>
                </div>

                <!-- <div class="carousel-item" data-interval="10000">
                    <div class="d-block w-100 imagen-portada1">
                        <div class="video-comercial">
                            <div class="overlay"></div>
                            <div class="absolute">
                                <h1 class="titulo-video">Next Photo</h1>
                            </div>
                            <video onloadedmetadata="this.muted=true" autoplay loop>
                                <source src="assets/videos/video.m4v">
                            </video>
                        </div>
                    </div>
                </div> -->

                <div class="carousel-item" data-interval="10000">
                    <div class="d-block w-100 imagen-portada1">
                        <img src="/assets/images/portada4.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>




    <!-- texto paquetes -->
    <section id="pricing" class="divider">
        <div class="container">
            <h2 class="titulo-paquete ">Categorias <b>Next Photo</b></h2>
        </div>
    </section>




    <!-- seccion fotos -->
    <section>
        <div class="container mt-5  ">
            <div class="row mt-4">
                <div class="col-12 col-lg-3 col-md-6 col-sm-12 col-xs-12 mt-2 ">
                    <img class="img" src="/assets/images/cateorias/xv.jpg" class="d-block w-100" alt="...">
                </div>

                <div class="col-12 col-lg-3 col-md-6 col-sm-12 col-xs-12 mt-2">
                    <img class="img" src="/assets/images/cateorias/casuales.jpg" class="d-block w-100" alt="...">
                </div>

                <div class="col-12 col-lg-3 col-md-6 col-sm-12 col-xs-12 mt-2">
                    <img class="img" src="/assets/images/cateorias/exterior.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="col-12 col-lg-3 col-md-6 col-sm-12 col-xs-12 mt-2">
                    <img class="img" src="/assets/images/cateorias/boda.jpg" class="d-block w-100" alt="...">

                </div>
            </div>
        </div>
    </section>



    <!-- texto paquetes -->
    <section id="portafolio" class="divider">
        <div data-aos="fade-up">
            <div class="container">
                <div class="content-center">
                    <h2 class="font-weight-light titulo-paquete ">Portafolio</h2>
                </div>
            </div>
        </div>
    </section>




    <!-- portafolio -->
    <section id="">
        <div class="container mt-5">
            <div class="row">
                <div class="col-3">
                    <div class="div-img hidden">
                        <img class="img" src="/assets/images/fotos/foto6.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="div-img hidden mt-2">
                        <img class="img" src="/assets/images/fotos/foto8.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="div-img hidden mt-2">
                        <img class="img" src="/assets/images/fotos/foto4.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <div class="col-6">
                    <div class="div-img hidden">
                        <img class="img" src="/assets/images/fotos/foto7.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <div class="col-3">
                    <div class="div-img hidden">
                        <img class="img" src="/assets/images/fotos/foto9.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="div-img hidden mt-2">
                        <img class="img" src="/assets/images/fotos/foto10.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="div-img hidden mt-2">
                        <img class="img" src="/assets/images/fotos/foto12.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>

            </div>
        </div>
    </section>




    <!-- imagenes swiper -->
    <section class="container-imagenes-swiper mt-4">
        <div data-aos="fade-left">
            <!-- Swiper -->
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <div class="swiper-slide" style="background-image:url(assets/images/fotos/foto2.jpg)"></div>
                    <div class="swiper-slide" style="background-image:url(assets/images/fotos/foto13.jpg)"></div>
                    <div class="swiper-slide" style="background-image:url(assets/images/fotos/foto3.jpg)"></div>
                    <div class="swiper-slide" style="background-image:url(assets/images/fotos/foto4.jpg)"></div>
                    <div class="swiper-slide" style="background-image:url(assets/images/fotos/foto5.jpg)"></div>
                    <div class="swiper-slide" style="background-image:url(assets/images/fotos/foto6.jpg)"></div>
                    <div class="swiper-slide" style="background-image:url(assets/images/fotos/foto7.jpg)"></div>
                    <div class="swiper-slide" style="background-image:url(assets/images/fotos/foto8.jpg)"></div>
                    <div class="swiper-slide" style="background-image:url(assets/images/fotos/foto9.jpg)"></div>
                    <div class="swiper-slide" style="background-image:url(assets/images/fotos/foto10.jpg)"></div>
                    <div class="swiper-slide" style="background-image:url(assets/images/fotos/foto11.jpg)"></div>
                    <div class="swiper-slide" style="background-image:url(assets/images/fotos/foto12.jpg)"></div>

                </div>

                <div class="swiper-pagination"></div>
            </div>
        </div>


    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#000000" fill-opacity="1"
            d="M0,224L60,213.3C120,203,240,181,360,170.7C480,160,600,160,720,176C840,192,960,224,1080,240C1200,256,1320,256,1380,256L1440,256L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z">
        </path>
    </svg>
    <!-- <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#FFB300" fill-opacity="1" d="M0,224L60,213.3C120,203,240,181,360,170.7C480,160,600,160,720,176C840,192,960,224,1080,240C1200,256,1320,256,1380,256L1440,256L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg> -->


    <!-- seccion video -->
    <div class="video-comercial">
        <div class="overlay"></div>
        <div class="absolute">
            <h3 class="titulo-video titulo-paquete">Next Photo <span>
                    <p>“Las fotografías más bellas son aquellas que te generan recuerdos.”</p>
                </span></h3>
        </div>
        <video onloadedmetadata="this.muted=true" autoplay loop>
            <source src="assets/videos/video.m4v">
        </video>
    </div>






    <!-- modal solicitar paquete 1  -->
    <div class="  modal fade" id="modal-paquete1" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="modal-paquete1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content modal-borde">
                <img src="/assets/images/paquetes-imagenes/paquete1.jpg" class="card-img-top" alt="...">
                <div class="modal-body">
                    <div class="container">
                        <form action="{{route('paqueteUno')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <!-- <label for="nombre">Nombre:</label> -->
                                <input placeholder="Nombre" name="nombre" type="text" class="form-control" id="nombre"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <!-- <label for="Telefono">Teléfono:</label> -->
                                    <input placeholder="Teléfono" name="telefono" type="text" class="form-control" id="Telefono">
                                </div>

                                <div class="form-group col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <!-- <label for="Cantidad">Cantidad:</label> -->
                                    <input placeholder="Cantidad" name="cantidad" type="number" class="form-control" id="Cantidad">
                                </div>

                            </div>

                            <div class="form-group  ">
                                <!-- <label for="Cantidad">Ubicación:</label> -->
                                <input placeholder="Ubicación" name="ubicacion" type="text" class="form-control" id="Ubicación">
                            </div>

                            <div class="form-group">
                                <!-- <label for="Hora">Fecha y hora:</label> -->
                                <input placeholder="Hora" name="fecha_hora" type="datetime-local" class="form-control" id="Hora"
                                    aria-describedby="emailHelp">
                            </div>
                            <h4 class="text-center">Precio: <span class="badge badge-warning">$8,500 </span> </h4>

                            <br/>

                            <div class="container mb-3">
                                <div class="row justify-content-center">
                                    <button type="button" class="btn btn-secondary " data-dismiss="modal">Cancelar</button>
                                    <button class="btn btn-warning ml-2">Solicitar</button>
                                </div>
                            </div>

                        </form>
                    </div>

                </div>

                


            </div>
        </div>
    </div>



    <!-- modal solicitar paquete 2  -->
    <div class="modal fade" id="modal-paquete2" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="modal-paquete12" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <img src="/assets/images/paquetes-imagenes/paquete2.jpg" class="card-img-top" alt="...">
                <div class="modal-body">
                    <div class="container">
                        <form action="{{route('paqueteDos')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input placeholder="Nombre" name="nombre" type="text" class="form-control" id="nombre"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input placeholder="Teléfono" name="telefono" type="text" class="form-control" id="Telefono">
                                </div>

                                <div class="form-group col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input placeholder="Cantidad" name="cantidad" type="number" class="form-control" id="Cantidad">
                                </div>

                            </div>

                            <div class="form-group  ">
                                <input placeholder="Ubicación" name="ubicacion" type="text" class="form-control" id="Ubicación">
                            </div>

                            <div class="form-group">
                                <input placeholder="Hora" name="fecha_hora" type="datetime-local" class="form-control" id="Hora"
                                    aria-describedby="emailHelp">
                            </div>
                            <h4 class="text-center">Precio: <span class="badge badge-warning">$13,500 </span> </h4>
                                <br/>
                            <div class="container mb-3">
                                <div class="row justify-content-center">
                                    <button type="button" class="btn btn-secondary " data-dismiss="modal">Cancelar</button>
                                    <button class="btn btn-warning ml-2">Solicitar</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>

                

            </div>
        </div>
    </div>


    <!-- modal solicitar paquete 3 -->
    <div class="modal fade" id="modal-paquete3" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="modal-paquete3" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <img src="/assets/images/paquetes-imagenes/sesion-boda-xv.jpg" class="card-img-top" alt="...">

                <div class="modal-body">
                    <div class="container">
                        <form action="{{route('bodaxv')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input placeholder="Nombre" name="nombre" type="text" class="form-control" id="nombre"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input placeholder="Teléfono" name="telefono" type="text" class="form-control" id="Telefono">
                                </div>

                                <div class="form-group col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input placeholder="Cantidad" name="cantidad" type="number" class="form-control" id="Cantidad">
                                </div>

                            </div>

                            <div class="form-group  ">
                                <input placeholder="Ubicación" name="ubicacion" type="text" class="form-control" id="Ubicación">
                            </div>

                            <div class="form-group">
                                <input placeholder="Hora" name="fecha_hora" type="datetime-local" class="form-control" id="Hora"
                                    aria-describedby="emailHelp">
                            </div>
                            <h4 class="text-center">Precio: <span class="badge badge-warning">$1,550 </span> </h4>

                            <div class="container mb-3">
                                <div class="row justify-content-center">
                                    <button type="button" class="btn btn-secondary " data-dismiss="modal">Cancelar</button>
                                    <button class="btn btn-warning ml-2">Solicitar</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            

            </div>
        </div>
    </div>


    <!-- modal solicitar paquete 4  -->
    <div class="modal fade" id="modal-paquete4" data-backdrop="static" data-keyboard="false" tabindex="-1"
        aria-labelledby="modal-paquete4" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <img src="/assets/images/paquetes-imagenes/exterior-estudio.jpg" class="card-img-top" alt="...">

                <div class="modal-body">
                    <div class="container">
                        <form action="{{route('casuales')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input placeholder="Nombre" name="nombre" type="text" class="form-control" id="nombre"
                                    aria-describedby="emailHelp">
                            </div>
                            <div class="form-row">
                                <div class="form-group col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input placeholder="Teléfono" name="telefono" type="text" class="form-control" id="Telefono">
                                </div>

                                <div class="form-group col-12 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                    <input placeholder="Cantidad" name="cantidad" type="number" class="form-control" id="Cantidad">
                                </div>

                            </div>

                            <div class="form-group  ">
                                <input placeholder="Ubicación" name="ubicacion" type="text" class="form-control" id="Ubicación">
                            </div>

                            <div class="form-group">
                                <input placeholder="Hora" name="fecha_hora" type="datetime-local" class="form-control" id="Hora"
                                    aria-describedby="emailHelp">
                            </div>
                            <h4 class="text-center">Precio: <span class="badge badge-warning">$850 </span> </h4>

                            <div class="container mb-3">
                                <div class="row justify-content-center">
                                    <button type="button" class="btn btn-secondary " data-dismiss="modal">Cancelar</button>
                                    <button class="btn btn-warning ml-2">Solicitar</button>
                                </div>
                            </div>

                        </form>
                    </div>

                </div>
             
            </div>
        </div>
    </div>





    <!-- texto paquetes -->
    <section id="paquetes" class="divider margen">
        <div class="container ">
            <div class="content-center">
                <div data-aos="fade-up">
                    <h2 class="titulo-paquete ">Paquetes de <b>Next Photo</b></h2>
                    <p>“Las fotografías más bellas son aquellas que te generan recuerdos.”
                    </p>
                    <p>
                        Sesiones casuales (estudio y exterior). Bodas XV
                    </p>
                </div>


            </div>
        </div>
    </section>


    <!-- paquetes -->
    <section id="" class="seccion-paquetes">
        <div class="container mt-2">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div data-aos="fade-right">
                        <div class="card">
                            <img src="/assets/images/cateorias/casuales.jpg" class="card-img-top" alt="">
                            <h1 class="text-center titulo-paquete mt-3">Paquete 1</h1>
                            <ul class="mt-4">
                                <li>Cobertura de fotográfica tipo documental (makeup, iglesia, evento)</li>
                                <li>50 Fotografías impresas 5x7”</li>
                                <li>Sesión fotográfica previa</li>
                                <li>Sesión fotográfica el dia del evento</li>
                                <li>Ampliación fotográfica tamaño 11x14” con soporte y textura</li>
                                <li>Ampliación Fotográfica tamaño 16x20” con soporte y textura</li>
                            </ul>
                            <h5 class="text-center">Precio:</h5>
                            <h5 class="text-center precio">$8,500</h5>
                            <button class="btn-solicitar btn-block mb-3" type="button" data-toggle="modal"
                                data-target="#modal-paquete1">Solicitar</button>
                        </div>
                    </div>


                    <br>
                </div>

                <br>

                <div class="col-12 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div data-aos="fade-left">
                        <div class="card">
                            <img src="/assets/images/portada3.jpg" class="card-img-top img-fluid" alt="">
                            <h1 class="text-center titulo-paquete mt-3">Paquete 2</h1>
                            <ul class="mt-4">
                                <li>Cobertura de fotográfica tipo documental (makeup, iglesia, evento)</li>
                                <li>150 Fotografías impresas 5x7”</li>
                                <li>Sesión fotográfica previa</li>
                                <li>Sesión fotográfica el día del evento</li>
                                <li>Ampliación fotográfica tamaño 11x14” con marco, textura y soporte</li>
                                <li>Ampliación Fotográfica tamaño 16x20” con marco, textura y soporte</li>
                                <li>Video clip 4k con los momentos más importantes del evento</li>
                                <li>Video del evento (duración de aproximadamente 2 horas) en Full HD, entregado en USB
                                </li>
                            </ul>
                            <h5 class="text-center">Precio:</h5>
                            <h5 class="text-center precio">$13,500</h5>
                            <button class="btn-solicitar btn-block mb-3" type="button" data-toggle="modal"
                                data-target="#modal-paquete2">Solicitar</button>
                        </div>
                    </div>


                    <br>
                </div>
            </div>

            <br>
            <div class="row justify-content-center mt-4">
                <div class="col-12 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div data-aos="fade-right">
                        <div class="card">
                            <img src="/assets/images/cateorias/boda.jpg" class="card-img-top img-fluid" alt="">
                            <h1 class="text-center titulo-paquete mt-3">Sesión Boda y XV</h1>
                            <ul class="mt-4">
                                <li>25 imágenes editadas</li>
                                <li>3 cambios</li>
                                <li>1 hora de sesión</li>
                                <li>1 fotografía impresa 8x10”</li>
                                <li>5 fotografías impresas 6x8”</li>
                            </ul>
                            <h5 class="text-center">Precio:</h5>
                            <h5 class="text-center precio">$1,550</h5>
                            <button class="btn-solicitar btn-block mb-3" type="button" data-toggle="modal"
                                data-target="#modal-paquete3">Solicitar</button>
                        </div>
                    </div>


                    <br>
                </div>

                <br>
                <div class="col-12 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div data-aos="fade-left">
                        <div class="card">
                            <img src="/assets/images/cateorias/exterior.jpg" class="card-img-top img-fluid" alt="">
                            <h1 class="text-center titulo-paquete mt-3">Sesiones casuales (exterior y estudio)</h1>
                            <ul class="mt-4">
                                <li>20 imágenes editadas</li>
                                <li>2 cambios</li>
                                <li>1 hora de sesión</li>
                            </ul>
                            <h5 class="text-center">Precio:</h5>
                            <h5 class="text-center precio">$850</h5>
                            <button class="btn-solicitar btn-block mb-3" type="button" data-toggle="modal"
                                data-target="#modal-paquete4">Solicitar</button>
                        </div>
                    </div>


                    <br>
                </div>
                <br>
            </div>
        </div>
    </section>




    <section class="imagen-scroll">
        <div class="scene">
            <div class="magic"></div>
        </div>
    </section>


    <!-- equipo -->
    <section id="teams" class="mt-5">
        <div class="max-width">
            <div data-aos="fade-up">
                <h2 class="title titulo-paquete display-4 text-center">¿Quienes somos?</h2>
                <p class="text-center">Somos una microempresa que ofrece servicios de fotografía al público en general,
                    ubicada en la ciudad El Mante. Que busca generar la máxima satisfacción en cada uno de nuestros
                    clientes.</p>
            </div>



            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div data-aos="fade-right">
                            <h3 class="mt-2"> <i class="icono-m  fas fa-photo-video"></i> Misión</h3>
                            <p class="text-valores">Somos una empresa dedicada a ofrecer servicios de fotografía,
                                utilizando
                                calidad en cada uno
                                de
                                nuestros servicios, con el propósito de satisfacer las necesidades de nuestros clientes,
                                ofreciendo un trato personalizado.</p>

                            <h3> <i class="icono-v fas fa-crosshairs"></i> Visión</h3>
                            <p class="text-valores">Lograr la satisfacción de cada uno de nuestros clientes con el
                                servicio
                                que ofrecemos y
                                cumplir
                                nuestro objetivo general..</p>

                            <h3> <i class=" icono-va fas fa-heart"></i> Valores</h3>
                            <ul>
                                <li>
                                    <h6 class="font-weight-light text-valores">Respeto</h6>
                                </li>
                                <li>
                                    <h6 class="font-weight-light text-valores">Honestidad</h6>
                                </li>
                                <li>
                                    <h6 class="font-weight-light text-valores">Profesionalismo</h6>
                                </li>
                                <li>
                                    <h6 class="font-weight-light text-valores">Confidencialidad</h6>
                                </li>
                                <li>
                                    <h6 class="font-weight-light text-valores">Puntualidad</h6>
                                </li>
                                <li>
                                    <h6 class="font-weight-light text-valores">Sustentabilidad</h6>
                                </li>
                            </ul>
                        </div>


                    </div>

                    <div class="col-12 col-lg-6 col-md-6 col-sm-12 col-xs-12">
                        <div data-aos="fade-left">
                            <img src="/assets/images/fotos/foto9.jpg" class="img-valores" alt="">

                        </div>

                    </div>
                </div>
            </div>

            <div class="container mt-5">
                <h2 class="title titulo-paquete display-4 mt-2 text-center">Integrantes</h2>
                <div class="row">
                    <div class="col-12 col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-5">
                        <div data-aos="fade-down-right">
                            <div class="card card-fondo">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="container">
                                            <div class="row justify-content-center">
                                                <img src="/assets/images/equipo/Citlali.jpg" width="120" height="120"
                                                    class="imagenes-integrantes" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <h4 class=" ">Citlali Castillo</h4>
                                        <p>Líder y encargada de la atención con el cliente</p>
                                        <div class="division"></div>
                                        <div class="container">
                                            <div class="row">
                                                <a href="https://www.facebook.com/citlalidayanira.castillocarreon.5"
                                                    target="_blank" class="enlace-redes"><i class="fab fa-facebook"></i>
                                                </a>
                                                <a href="" class="enlace-redes ml-2"><i class="fab fa-instagram"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>

                    <div class="col-12 col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-5">
                        <div data-aos="fade-down-left">
                            <div class="card card-fondo">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="container">
                                            <div class="row justify-content-center">
                                                <img src="/assets/images/equipo/Berenice.jpg" width="120" height="120"
                                                    class="imagenes-integrantes" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <h4 class=" ">Berenice Mendoza</h4>
                                        <p>Editora</p>
                                        <div class="division"></div>
                                        <div class="container">
                                            <div class="row">
                                                <a href="https://www.facebook.com/profile.php?id=100011882911033"
                                                    target="_blank" class="enlace-redes"><i class="fab fa-facebook"></i>
                                                </a>
                                                <a href="" class="enlace-redes ml-2"><i class="fab fa-instagram"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>



                    <div class="col-12 col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-5">
                        <div data-aos="fade-up-right">
                            <div class="card card-fondo">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="container">
                                            <div class="row justify-content-center">
                                                <img src="/assets/images/equipo/Mónica.jpg" width="120" height="120"
                                                    class="imagenes-integrantes" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <h4 class=" ">Mónica Ramírez Mata</h4>
                                        <p>Ayudante</p>
                                        <div class="division"></div>
                                        <div class="container">
                                            <div class="row">
                                                <a href="https://www.facebook.com/Monicaa.ramz" target="_blank"
                                                    class="enlace-redes"><i class="fab fa-facebook"></i> </a>
                                                <a href="" class="enlace-redes ml-2"><i class="fab fa-instagram"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>

                    <div class="col-12 col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-5">
                        <div data-aos="fade-up-left">
                            <div class="card card-fondo">
                                <div class="row">
                                    <div class="col-6">
                                        <div class="container">
                                            <div class="row justify-content-center">
                                                <img src="/assets/images/equipo/cesar.png" width="120" height="120"
                                                    class="imagenes-integrantes" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-6">
                                        <h4 class=" ">Cesar Alexis Ramírez</h4>
                                        <p>Fotógrafo</p>
                                        <div class="division"></div>


                                        <div class="container">
                                            <div class="row">
                                                <a href="https://www.facebook.com/cesaralexis.ramirez.3" target="_blank"
                                                    class="enlace-redes"><i class="fab fa-facebook"></i> </a>
                                                <a href="" class="enlace-redes ml-2"><i class="fab fa-instagram"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>

        </div>
    </section>






    <!-- testimonios -->
    <section id="resenas" class="divider">
        <div class="container mb-5">
            <div data-aos="fade-up">
                <div class="content-center">
                    <h2>Observa los testimonios de nuestros <b>clientes</b></h2>
                    <p>Lograr la satisfacción de cada uno de nuestros clientes con el servicio que ofrecemos y cumplir
                        nuestro objetivo general.</p>
                </div>
            </div>


            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="carousel-container">
                            <p>"Muy bonitas fotos, muy recomendado"
                            </p>
                            <div class="rating">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><i class="fas fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fas fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fas fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fas fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fas fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="testimonial-user">
                                <div class="row">
                                    <div class="col-md-3 col-3">
                                        <img src="assets/images/testimonio1.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-md-9 col-9">
                                        <h6>Jesus Emmanuel</h6>
                                        <span>Cliente</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-container">
                            <p>"El trato al cliente es muy bueno, me gustaron mucho las fotos, buen precio "</p>
                            <div class="rating">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><i class="fas fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fas fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fas fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fas fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fas fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="testimonial-user">
                                <div class="row">
                                    <div class="col-md-3 col-3">
                                        <img src="assets/images/testimonio2.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-md-9 col-9">
                                        <h6>Armando Sánchez</h6>
                                        <span>Cliente</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="carousel-container">
                            <p>"Buen trato al cliente, excelente trabajo"</p>
                            <div class="rating">
                                <ul class="list-inline">
                                    <li class="list-inline-item"><i class="fas fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fas fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fas fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fas fa-star"></i></li>
                                    <li class="list-inline-item"><i class="fas fa-star"></i></li>
                                </ul>
                            </div>
                            <div class="testimonial-user">
                                <div class="row">
                                    <div class="col-md-3 col-3">
                                        <img src="assets/images/testimonio3.jpg" class="img-fluid" alt="">
                                    </div>
                                    <div class="col-md-9 col-9">
                                        <h6>Idalia Balderas</h6>
                                        <span>Cliente</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <div class="control-button">
                        <i class="fas fa-arrow-circle-left"></i>
                    </div>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <div class="control-button">
                        <i class="fas fa-arrow-circle-right"></i>
                    </div>
                    <span class="sr-only">Next</span>
                </a>
            </div>
            <div class="row justify-content-center mt-3">
                <a href="#contacto" class="btn btn-outline-warning"><i class="fas fa-spell-check"></i> Escribir
                    reseña</a>

            </div>
        </div>
    </section>

    <!-- contacto -->
    <section class="seccion-contacto" id="contacto">
        <div class="container mb-4">

            <div class="row">
                <div class=" col-12 col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-4">
                    <div data-aos="fade-right">
                        <h3>Si tienes dudas o sugerencias <b>contáctanos.</b></h3>
                        <p>Para cualquier duda, sugerencia o preguntas sobre los paquetes disponibles porfavor
                            contáctanos.
                        </p>
                    </div>

                </div>
                <div class="col-12 col-lg-6 col-md-6 col-sm-12 col-xs-12 mt-4">
                    <div data-aos="fade-left">
                        <form action="{{route('correo')}}" method="POST">
                            @csrf
                    <div class="row">

                        <div class="col-md-6">
                            <div class="form-group">
                                <input name="nombre" type="text" class="form-control" id="" placeholder="Nombre">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <input name="apellido" type="text" class="form-control" id="" placeholder="Apellido">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <input name="correo" type="email" class="form-control" id="" placeholder="Email">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <input name="telefono" type="text" class="form-control" id="" placeholder="Teléfono (optional)">
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="form-group">
                                <textarea name="mensaje" type="text" class="form-control" id="" placeholder="Mensaje"
                                    rows="3"></textarea>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <button onclick="mensaje()" class="btn btn-contacto btn-block">Enviar</button>
                        </div>
                    </div>
                </form>
                    </div>

                </div>
            </div>
        </div>

    </section>


    <!-- footer -->
    <footer class="bgDark">
        <div class="container">
            <a href="#"><img src="assets/images/logo-claro.jpg" width="100" height="100" alt="logo"> </a>
            <ul class="list-inline">
                <li class="list-inline-item footer-menu"><a href="#">Inicio</a></li>
                <li class="list-inline-item footer-menu"><a href="#paquetes">Paquetes</a></li>
                <li class="list-inline-item footer-menu"><a href="#portafolio">Portafolio</a></li>
                <li class="list-inline-item footer-menu"><a href="#teams">¿Quienes somos?</a></li>
                <li class="list-inline-item footer-menu"><a href="#resenas">Reseñas</a></li>
                <li class="list-inline-item footer-menu"><a href="#contacto">Contacto</a></li>
            </ul>
            <ul class="list-inline">

                <li class="list-inline-item"><a class="redes-facebook"
                        href="https://www.facebook.com/Next-Photo-110308234225764" target="_blank"><i
                            class="fab fa-facebook"></i></a>
                </li>

            </ul>
            <small>©2020 Next Photo <a href="https://www.facebook.com/jesusemmanuel.lerma/" class="font-weight-bold"
                    target="_blank" rel="noopener"> by: @Emmanuel y @Armando</a></small>
        </div>
    </footer>


    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"
        integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s"
        crossorigin="anonymous"></script>


    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>



    <!-- Swiper JS -->
    <script src="assets/js/swiper.min.js"></script>



    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper('.swiper-container', {
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            slidesPerView: 'auto',
            coverflowEffect: {
                rotate: 50,
                stretch: 0,
                depth: 100,
                modifier: 1,
                slideShadows: true,
            },
            pagination: {
                el: '.swiper-pagination',
            },
        });




    </script>


    <script>
        function mensaje() {
            Swal.fire({
                icon: 'success',
                title: '¡Enviado!',
                text: 'Su mensaje se envió correctamente',
                confirmButtonText: "Aceptar",
            })
        }
    </script>



</body>

</html>