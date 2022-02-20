@extends('master')
@section('styles')
    <link rel="stylesheet" href="<?php echo asset('css/perfil.css')?>" type="text/css">
@endsection
@section('content')
    <!-- Name Section -->
    <div class="bg-main">
        <div class="container-perfil px-3 md:px-0">
            <div class="row md:pt-32 mb-6 namesection">
                <div class="col-md-9">
                    <h3 class="text-31 md:text-41">Bienvenido Silvana :)</h3>
                </div>
                <div class="col-md-3 md:text-right">
                    <p>Cerrar sesion</p>
                </div>
            </div>
        </div>
        
        <!-- Profile -->
        <div class="container-perfil">
            <div class="row">
                <div class="col-md-4 profile text-center text-light pb-[28px] pt-[12px] px-5 md:px-0" style="border-radius: 10px;">
                    <img src="/img/perfil/foto.png" width="25%" class="m-auto">
                    <div class="row text-left mt-lg-2 justify-center">
                        <div class="col-md-9 ml-lg-5 text-lg profile_details_header">
                            <div class="flex items-baseline justify-between mt-3">
                                <p>Nombre</p>
                                <p class="text-sm text-white">Silvana Sesy</p>
                            </div>
                            <div class="flex items-baseline justify-between mt-3">
                                <p>Apellidos</p>
                                <p class="text-sm text-white">Cordoba Gutierres</p>
                            </div>
                            <div class="flex items-baseline justify-between mt-3">
                                <p>Correo</p>
                                <p class="text-sm text-white">asdee3212@gmail.com</p>
                            </div>
                            <div class="flex items-baseline justify-between mt-3">
                                <p>Telefono</p>
                                <p class="text-sm text-white">97987833</p>
                            </div>
                            <div class="flex items-baseline justify-between underline mt-3">
                                <p>Cambiar contrasena</p>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary mt-4 ">
                        <h6 class="mb-0 p-2">Editar informacion</h6>
                    </button>
                </div>
                <!-- Stats -->
                <div class="col-md-8 px-4 md:px-0 ml-lg-3">
                    <div class="grid grid-cols-2 gap-x-3 md:gap-x-10 text-2xl">
                        <div class="p-3 pb-2 statpoints">
                            <h5>Mis Cursos</h5>
                            <div class="d-flex mt-5 justify-content-between items-end">
                                <img src="/img/perfil/ICON1.png" width="20%">
                                <span>17</span>
                            </div>
                        </div>
                        <button onclick="document.getElementById('creditos').style.display='block'" class="p-3 pb-2 ml-lg-2 statpoints">
                            <h5>Creditos</h5>
                            <div class="d-flex mt-5 justify-content-between items-end">
                                <img src="/img/perfil/ICON2.png" width="48px">
                                <span>S/11.0</span>
                            </div>
                        </button>
        
                        <div class="modal fade" id="myModal1">
                            <div class="modal-dialog modal-md" style="margin-top: 8%">
                                <div class="modal-content">
                                    <div class="container-fluid">
                                        <div class="row">
                                            <div class="col-md-12 text-center text-dark">
                                                <button type="" data-dismiss="modal" class="close">&times;</button>
                                                <img src="assets/images/ICON2.png" width="40%">
                                                <h6>Creditos</h6>
                                                <h2>S/.11.0</h2>
                                                <p class="mt-5">Tus creditos vensen en 11/12/21</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
        
                        <div class=" p-3 pb-2 mt-4 statpoints">
                            <h5>Lista de desesos</h5>
                            <div class="d-flex mt-5 justify-content-between items-end">
                                <img src="/img/perfil/ICON3.png" width="20%">
                                <span>7</span>
                            </div>
                        </div>
       
                        <div class="p-3 pb-2 mt-4 ml-lg-2 statpoints">
                            <h5>Historial</h5>
                            <div class="d-flex mt-5 justify-content-between items-end">
                                <img src="/img/perfil/ICON4.png" width="20%">
                                <span></span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 p-3 pb-4 d-flex  statpoints items-center">
                        <img src="/img/perfil/ICON5.png" width="50px">
                        <h2 class="ml-4 text-[31px]">Certificacions</h2>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Benefit Section -->
        <div class="container-perfil text-light pb-5 mt-5">
            <div class="row mt-5 mb-5">
                <div class="col-md-12 ben text-center">
                    <h1 class="text-31 md:text-41">Beneficios</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="w-10/12 md:w-full m-auto card p-4 bluecard flex-column align-items-center md:h-[362px]">
                        <h2 class="bodiv">3%</h2>
                        <div class="card-body1 text-center">
                            <h3 class="text-26 md:text-31 md:w-10/12 m-auto">EI 3% de tus compras<br>van dirigidos a fomentar<br>la educacion para mas peruanos.</h3>
                            <h5 class="mt-5 mb-0"><a style="color: white;" href="">Mas information <i
                                        class="fa fa-arrow-right"></i></a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-[16px] md:mt-[0px]">
                    <div class="w-10/12 md:w-full m-auto card p-4 yellowcard flex-column align-items-center md:h-[362px]">
                        <i class="far fa-laugh-beam fa-3x"></i>
                        <div class="card-body text-center">
                            <h3 class="text-26 md:text-31">Refiere a un amigo y<br> obten S/5.00<br>automaticamente para<br> tus proximos cursos.</h3>
                            <h5 class="mt-5 mb-0"><a style="color: white;" href="">Mas information <i
                                        class="fa fa-arrow-right"></i></a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-3">
                    <div class=" p-4 darkcard flex-column align-items-center" data-aos="fade-up"> 
                        <h2 class="text-31 text-center">Preguntas frecuentes</h2>
                        <div class="card-body text-center">
                            <p style="color: #5E6470;" class="text-lg">!Hola! En caso desees ponerte en contacto con nosotros, tienes
                                los siguientes canales para<br> escribirnos.</p>
                            <h5 class="mt-3 mb-0"><a style="color: white;" href="">Mas information <i
                                        class="fa fa-arrow-right"></i></a></h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 mt-5 text-center" data-aos="fade-up" data-aos-delay="200">
                    <h5 style="color: #4B5561;">Deseo cancelar mi suscripcion al boletin informativo.</h5>
                </div>
        
        
            </div>
        </div>
    </div>
@endsection