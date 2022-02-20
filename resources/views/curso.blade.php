@extends('master')
@section('styles')
<link rel="stylesheet" href="<?php echo asset('css/curso.css')?>" type="text/css">
@endsection
@section('content')

<body>


    <div class="container-fluid topsec">
        <!-- Main Heading -->
        <div class="container">
            <div class="row text-light pt-5">
                <div class="col-md-8">
                    <h3 class="title-curso">Adobe Premiere Pro CC - Essentials Training Course</h3>
                    <p clasS="autor-curso">Daniel Scott, Adobe Certified Trainer</p>
                </div>
            </div>
        </div>
        <!-- Video Section -->
        <div class="container mb-5 videosec">
            <div class="row">
                <div class="col-md-8">
                    <video controls poster="assets/images/image_video0.png" width="100%">
                        <source src="" type="">
                    </video>
                </div>
                <div class="content-mobile">
                    <div class="tab">
                        <button class="tablinks active" onclick="openSection(event, 'Contenido')">Contenido</button>
                        <button class="tablinks" onclick="openSection(event, 'Informacion')">Información</button>
                        <button class="tablinks" onclick="openSection(event, 'Cometarios')">Cometarios</button>
                        <button class="tablinks" onclick="openSection(event, 'PF')">Preguntas frecuentes</button>
                    </div>

                    <div id="Contenido" class="tabcontent default-tab">
                        <div class="row text-light ">
                            <p class="text-right">
                                138 Lessons (15h 30m)
                            </p>
                            <div class="col-md-12 bg-primary d-flex justify-content-between p-3">
                                <span><i class="fa fa-play-circle"></i> 1.Adding transitions
                                    bet....</span><span>10:32</span>
                            </div>
                            <div class="col-md-12 d-flex justify-content-between p-3">
                                <span><i class="fa fa-lock"></i> 1.Adding transitions bet....</span><span>10:32</span>
                            </div>
                            <div class="col-md-12 d-flex justify-content-between p-3">
                                <span><i class="fa fa-lock"></i> 2.Adding transitions bet....</span><span>10:32</span>
                            </div>
                            <div class="col-md-12 d-flex justify-content-between p-3">
                                <span><i class="fa fa-lock"></i> 3.Adding transitions bet....</span><span>10:32</span>
                            </div>

                            <div class="col-md-12 d-flex justify-content-between p-3">
                                <span><i class="fa fa-lock"></i> 4.Adding transitions bet....</span><span>10:32</span>
                            </div>
                            <div class="col-md-12 d-flex justify-content-between p-3">
                                <span><i class="fa fa-lock"></i> 5.Adding transitions bet....</span><span>10:32</span>
                            </div>
                            <div class="col-md-12 d-flex justify-content-between p-3">
                                <span><i class="fa fa-lock"></i> 6.Adding transitions bet....</span><span>10:32</span>
                            </div>
                        </div>

                    </div>

                    <div id="Informacion" class="tabcontent">
                        <div class="">
                            <h4 class="contenido_title mt-[41px]">El curso online incluye</h4>
                            <div class="row py-4">
                                <div class="col-md-8 mr-lg-auto text-base">
                                    <div class="row text-light text-lg">
                                        <div class="col-md-6">
                                            <div class="mt-2"><i class="fa txt-23 fa-clock"></i> <span class="text-base"> Acceso cuantas
                                                    vecas
                                                    quieras</span>
                                            </div>
                                            <div class="mt-2"><i class="fas txt-23 fa-calendar-check"></i> <span class="text-base"> Acceso
                                                    a examen</span>
                                            </div>
                                            <div class="mt-2"><i class="fa txt-23 fa-graduation-cap"></i> <span class="text-base">
                                                    Certificadode
                                                    aprobacion</span></div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mt-2"><i class="fa txt-23 fa-folder"></i> <span class="text-base"> Material
                                                    descargable</span>
                                            </div>
                                            <div class="mt-2"><i class="fa txt-23 fa-video"></i> <span class="text-base"> Acceso a un foro
                                                    con profesor &
                                                    estudianter</span></div>
                                            <div class="mt-2"><i class="fa txt-23 fa-graduation-cap"></i> <span class="text-base"> 36
                                                    clases de acceso
                                                    ilimitado
                                                </span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class=" content-mobile">
                            <!-- Descriptions -->
                            <div class=" text-light">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h2 class="contenido_title content2_title">Descripcion del curso online</h2>
                                        <p class="mt-[23px] w-11/12">Power BI es un programa de Microsoft que permite
                                            crear informes y
                                            Dashboards, obteniendo datos de
                                            diversas fuentes como hojas de calculo de Excel, bases de datos de Access y
                                            paginas web. Cuente
                                            con
                                            dos elementos: el Power BI Desktop y el Power BI Service. El primero permite
                                            el diseno de los
                                            informes y dashboards y el segundo permite compertir dichos informes con un
                                            equipo de trabajo a
                                            traves de una plataforma exclusiva para los usuarios de este software.</p>
                                        <p class="w-11/12 mt-2">En este curso veremos el manejo de Power BI Desktop
                                            desde su descarga de
                                            internet y su instalacion,
                                            hasta la creacion de informes usando tablas graficos y matrices. Luego,
                                            veremos el proceso de
                                            creacion de una cuenta en Power BI Service y detalles importantes sobre la
                                            estructura de la
                                            pantalla
                                            de este servicio.</p>
                                        <h2 class="contenido_title title_3">¿Que voy a aprender?</h2>
                                        <p class="w-11/12 mt-[23px]">En este curso aprenderas como crear informes y
                                            dashboards untilizando
                                            el programa Power Bi Desktop.
                                            Ademas, aprenderas a subir los informes a la nube a traves del Power BI
                                            Service para
                                            compartirlos
                                            asi con un equipo de trabajo.</p>
                                        <h2 class="contenido_title mt-6">¿A quienes esta dirigido?</h2>
                                        <p class="mt-[23px]">Publico en general</p>
                                        <h2 class="contenido_title mt-6">Requisitos</h2>
                                        <p class="mt-[23px]">Para llevar este curso debes contar con sistema operativo
                                            Windows y tener
                                            conocimientos basicos o
                                            intermedios de Excel.</p>


                                        <div class="row expertbox mt-5 pb-5 p-3 " data-aos="fade-up">
                                            <div class=" justify-content-between">
                                                <div class="col-md-3">
                                                    <img style="border-radius: 50%" src="/img/curso/autor.png"
                                                        width="169px" class="m-auto">
                                                </div>
                                                <div class="col-md-9">
                                                    <h4 class="text-[21px] mt-5">Sobre nuestro experto</h4>
                                                    <div class="details text-base mt-2">
                                                        <p>Ing. Antonio Ortigoza</p>
                                                        <p>Ingeriero Industrial</p>
                                                        <p>Master Gestion Operaciones y Calidad</p>
                                                        <p>Certificado Six Sigma Black Belt</p>
                                                        <p>Lider en mejora continua</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12 mt-3 ">
                                                <h6>Sobre mi:</h6>
                                                <p>Me da gusto saludarte,m mi nombre es Antonio Ortigoza Ingerniero
                                                    Industrial cursando mi
                                                    Master en Direccion de Operaciones y Claidad, mis certificaciones
                                                    mas destacables en Six
                                                    sigma, Lean Manufacturing y Core Tools, las pongo a tu disposicion,
                                                    Soy certificado en
                                                </p>

                                            </div>

                                            <div class="col-md-12 text-center">
                                                <a style="color: #EF2567;" href="">Ver mas <i class="fa fa-angle-down"
                                                        style="color: #EF2567;"></i></a>
                                            </div>

                                        </div>

                                        <div class="row text-light mb-5">
                                            <div class="col-md-12 mb-3">
                                                <h3 class="text-[21px]">Certificate e impulsa tu carrera</h3>
                                            </div>
                                            <div class="col-md-4">
                                                <img src="/img/curso/certificado.png" width="80%" class="m-auto">
                                            </div>
                                            <div class="my-auto text-base">
                                                <p>Al terminar el curso habra un pequeno examen, que deberas aprobar
                                                    pata que te emitamos un
                                                    certificado firmado por nosotros (sin ningun costo adicional), con
                                                    un codigo unico con
                                                    el
                                                    cual cualquier institucion/persona podra validar la autenticidad de
                                                    tu certificado y tus
                                                    conocimientos.</p>
                                            </div>
                                        </div>
                                        <div class="col-md-12 mb-5">
                                            <h3 class="text-left text-[28px]">Beneficios de curso online</h3>
                                        </div>
                                        <div class="grid grid-cols-2 text-sm text-center mb-5 ">
                                            <div class="col-md-6">
                                                <img src="/img/curso/icono1.png" width="88px" class="m-auto">
                                                <h5>Preparate<br>para una carrera profeional</h5>
                                                <p>en campos de mucha demanda, como<br>TI,AI e ingenieria de la nube.
                                                </p>
                                            </div>
                                            <div class="col-md-6">
                                                <img src="/img/curso/icono1.png" width="88px" class="m-auto">
                                                <h5>Preparate<br>para una carrera profeional</h5>
                                                <p>en campos de mucha demanda, como<br>TI,AI e ingenieria de la nube.
                                                </p>
                                            </div>
                                            <div class="col-md-6">
                                                <img src="/img/curso/icono1.png" width="88px" class="m-auto">
                                                <h5>Preparate<br>para una carrera profeional</h5>
                                                <p>en campos de mucha demanda, como<br>TI,AI e ingenieria de la nube.
                                                </p>
                                            </div>
                                            <div class="col-md-6">
                                                <img src="/img/curso/icono1.png" width="88px" class="m-auto">
                                                <h5>Preparate<br>para una carrera profeional</h5>
                                                <p>en campos de mucha demanda, como<br>TI,AI e ingenieria de la nube.
                                                </p>
                                            </div>
                                            <div class="col-md-6">
                                                <img src="/img/curso/icono1.png" width="88px" class="m-auto">
                                                <h5>Preparate<br>para una carrera profeional</h5>
                                                <p>en campos de mucha demanda, como<br>TI,AI e ingenieria de la nube.
                                                </p>
                                            </div>
                                            <div class="col-md-6">
                                                <img src="/img/curso/icono1.png" width="88px" class="m-auto">
                                                <h5>Preparate<br>para una carrera profeional</h5>
                                                <p>en campos de mucha demanda, como<br>TI,AI e ingenieria de la nube.
                                                </p>
                                            </div>

                                        </div>


                                        <div class="row mt-5 mb-5">
                                            <div class="col-md-12">
                                                <h3 class="text-[21px] md:mt-10">Proyectos de Estudiantes</h3>
                                            </div>
                                            <div class="estudiantes grid grid-cols-2 gap-x-3">
                                                <div class="col-md-3 mt-2">
                                                    <img src="/img/curso/estudiante.png" width="100%">
                                                </div>
                                                <div class="col-md-3 mt-2">
                                                    <img src="/img/curso/estudiante.png" width="100%">
                                                </div>
                                                <div class="col-md-3 mt-2">
                                                    <img src="/img/curso/estudiante.png" width="100%">
                                                </div>
                                                <div class="col-md-3 mt-2">
                                                    <img src="/img/curso/estudiante.png" width="100%">
                                                </div>
                                                <div class="col-md-3 mt-2">
                                                    <img src="/img/curso/estudiante.png" width="100%">
                                                </div>
                                                <div class="col-md-3 mt-2">
                                                    <img src="/img/curso/estudiante.png" width="100%">
                                                </div>
                                                <div class="col-md-3 mt-2">
                                                    <img src="/img/curso/estudiante.png" width="100%">
                                                </div>
                                                <div class="col-md-3 mt-2">
                                                    <img src="/img/curso/estudiante.png" width="100%">
                                                </div>
                                                <div class="col-md-3 mt-2">
                                                    <img src="/img/curso/estudiante.png" width="100%">
                                                </div>
                                                <div class="col-md-3 mt-2">
                                                    <img src="/img/curso/estudiante.png" width="100%">
                                                </div>
                                                <div class="col-md-3 mt-2">
                                                    <img src="/img/curso/estudiante.png" width="100%">
                                                </div>
                                                <div class="col-md-3 mt-2">
                                                    <img src="/img/curso/estudiante.png" width="100%">
                                                </div>
                                            </div>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-12">
                                                <h3 class="text-21 md:mb-[44px]">Cursos recomendados</h3>
                                            </div>
                                            <div class="gap-5">
                                                <div class="col-md-5 mt-8" data-aos="fade-up">
                                                    <div class="curso-prog">
                                                        <div class="preview-curso-1 w-full h-[180px]"
                                                            style="background:url('/img/cursos/curso-1.jpg')"></div>
                                                        <div class="curso-prog_content">
                                                            <span class="badge badge-nuevo">Nuevo</span>
                                                            <h3 class="title-curso-des text-base font-white">Branding
                                                                estratégico para
                                                                marcas de emprendimiento</h3>
                                                            <p class="autor-curso text-sm">Por Mike Rom Card</p>
                                                            <div class="prices flex">
                                                                <p class="precio-normal text-base w-1/3">S/38.99</p>
                                                                <p class="precio-desc text-sm line-through w-2/3">S/
                                                                    149.90</p>
                                                            </div>
                                                            <div class="cursos-btn flex">
                                                                <button class="w-1/2 btn-agregar flex items-center"> <i
                                                                        class="fas fa-shopping-cart mr-1"></i>Agregar al
                                                                    carrito</button>
                                                                <button
                                                                    class="w-1/2 btn-comprar text-lg text-center">Comprar
                                                                    ahora</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-5 mt-8">
                                                    <div class="curso-prog" data-aos="fade-up">
                                                        <div class="preview-curso-1 w-full h-[180px]"
                                                            style="background:url('/img/cursos/curso-1.jpg')"></div>
                                                        <div class="curso-prog_content">
                                                            <span class="badge badge-nuevo">Nuevo</span>
                                                            <h3 class="title-curso-des text-base font-white">Branding
                                                                estratégico para
                                                                marcas de emprendimiento</h3>
                                                            <p class="autor-curso text-sm">Por Mike Rom Card</p>
                                                            <div class="prices flex">
                                                                <p class="precio-normal text-base w-1/3">S/38.99</p>
                                                                <p class="precio-desc text-sm line-through w-2/3">S/
                                                                    149.90</p>
                                                            </div>
                                                            <div class="cursos-btn flex">
                                                                <button class="w-1/2 btn-agregar flex items-center"> <i
                                                                        class="fas fa-shopping-cart mr-1"></i>Agregar al
                                                                    carrito</button>
                                                                <button
                                                                    class="w-1/2 btn-comprar text-lg text-center">Comprar
                                                                    ahora</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div
                                                class="col-md-12 mx-auto d-flex justify-content-center mt-5 mb-5 text-center pagination">
                                                <i class="fa fa-angle-left fa-2x p-3"></i>&nbsp; <span
                                                    class="my-auto">&nbsp;2 de
                                                    20&nbsp;</span>&nbsp; <i class="fa fa-angle-right fa-2x p-3"></i>
                                            </div>
                                        </div>

                                        <div class="row mb-5">
                                            <div class="col-md-12">
                                                <h3 class="text-28">Preguntas frecuentes</h3>
                                            </div>

                                            <div class="preguntas md:w-10/12">
                                                <button class="accordion ">¿Tengo acceso ilimitado a las
                                                    clases?</button>
                                                <div class="panel active-1">
                                                    <p class="mb-4 text-lg">¡Sí! Luego de que realices la compra vas a
                                                        poder acceder a las
                                                        clases cuando y donde quieras. El curso se queda en tu cuenta de
                                                        Crehana para
                                                        siempre. :)</p>
                                                </div>

                                                <button class="accordion">¿Dónde lo encuentro y cómo me
                                                    suscribo?</button>
                                                <div class="panel">
                                                    <p class="mb-4 text-lg">Lorem ipsum dolor sit amet, consectetur
                                                        adipisicing elit, sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                                        enim ad minim veniam,
                                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                        commodo consequat.
                                                    </p>
                                                </div>

                                                <button class="accordion">¿Cuándo inicia el curso?</button>
                                                <div class="panel">
                                                    <p class="mb-4 text-lg">Lorem ipsum dolor sit amet, consectetur
                                                        adipisicing elit, sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                                        enim ad minim veniam,
                                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                        commodo consequat.
                                                    </p>
                                                </div>

                                                <button class="accordion">¿Qué dispositivo y sistema operativo
                                                    necesito?</button>
                                                <div class="panel">
                                                    <p class="mb-4 text-lg">Lorem ipsum dolor sit amet, consectetur
                                                        adipisicing elit, sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                                        enim ad minim veniam,
                                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                        commodo consequat.
                                                    </p>
                                                </div>
                                                <button class="accordion">¿Cómo obtengo el certificado del
                                                    curso?</button>
                                                <div class="panel">
                                                    <p class="mb-4 text-lg">Lorem ipsum dolor sit amet, consectetur
                                                        adipisicing elit, sed do
                                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut
                                                        enim ad minim veniam,
                                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                        commodo consequat.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row mb-5 md:w-10/12">
                                            <div class="">
                                                <img src="/img/curso/banner-educacion.png" width="100%">
                                            </div>
                                            <div class="">
                                                <p class="text-[22px]">Ayudanos a que la educacion llegue a mas personas
                                                </p>
                                                <h3 class="text-[31px] mt-4">Tu compra ayuda a que cada inicio de ano
                                                    recaudamos los fondos
                                                    ingresador para dar
                                                    materiales a los ninos de bajos recursos para que impulsen sus
                                                    educacion y exito
                                                    profesional.</h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card coursecard p-4" data-aos="fade-up">
                                            <div class="card-img-overlay p-0"><i
                                                    style="position: absolute;left: 90%;top: 3%;color:red;"
                                                    class="fa fa-heart"></i></div>
                                            <h4 class="text-2xl">Adobe Premiere Pro CC – Essentials Training Course</h4>
                                            <p class="text-lg mt-[10px]">Dictado por Daniel Scott, Adobe Certified
                                                Trainer</p>
                                            <div class="d-flex justify-content-around pb-4"
                                                style="border-bottom: 1px solid #262D40;">
                                                <div><i class="fa fa-fire"></i>&nbsp; Nivel Basico</div>
                                                <div><i class="fa fa-star"></i>&nbsp; 4.5</div>
                                                <div><i class="fa fa-user-plus"></i>&nbsp; 207</div>
                                            </div>
                                            <div class="d-flex justify-content-between pt-4 flex-sm-column flex-lg-row">
                                                <h1 class="text-[40px]">S/179.00</h1>
                                                <span class="text-lg" style="color: #F82466;">78%
                                                    dcto<br>S/229.00</span>
                                            </div>
                                            <div class="d-flex justify-content-between pt-2  pb-3 text-lg">
                                                <p style="color: #F82466;">Oferta expira en:</p>
                                                <span>
                                                    <p class="text-[23px]" style="color: #F82466;">5 días 12:02:06</p>
                                                </span>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 pr-0 pl-0">
                                                    <button class="btn btn-info coursebtn1 pt-3 pb-3"><b>Comprar
                                                            ahora</b></button>

                                                </div>
                                                <div class="col-md-6 pr-0 pl-0">
                                                    <button class="btn btn-info coursebtn2 pt-3 pb-3"><b><i
                                                                class="fa fa-shopping-cart"></i>
                                                            Agregar</b></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div id="Cometarios" class="tabcontent">
                        <div class="row mb-5" data-aos="fade-up">
                            <div class="col-md-12">
                                <h3 class="text-28 mt-[41px]">Comentarios</h3>
                            </div>
                            <div class="coments md:w-10/12 grid grid-cols-1 gap-5 mt-6">
                                <div class=" mt-3">
                                    <div class="coment p-4">
                                        <h5>Cursos Excel Avanzado</h5>
                                        <p>Un curso 100% recomendado, te<br>ayuda a ampliar tu
                                            vision,conocer<br>realmente
                                            que es lo
                                            que te impide avanzar, dejar de lado de tus miedos para en
                                            lo..."</p>
                                        <div class="row flex">
                                            <div class="w-3/12">
                                                <img src="img/testimonial.jpg" width="48px">
                                            </div>
                                            <div class="w-9/12">
                                                <h6>Edith Lopez Sal</h6>
                                                <div>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class=" mt-3">
                                    <div class="coment p-4">
                                        <h5>Cursos Excel Avanzado</h5>
                                        <p>Un curso 100% recomendado, te<br>ayuda a ampliar tu
                                            vision,conocer<br>realmente
                                            que es lo
                                            que te impide avanzar, dejar de lado de tus miedos para en
                                            lo..."</p>
                                        <div class="row flex">
                                            <div class="w-3/12">
                                                <img src="img/testimonial.jpg" width="48px">
                                            </div>
                                            <div class="w-9/12">
                                                <h6>Edith Lopez Sal</h6>
                                                <div>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class=" mt-3">
                                    <div class="coment p-4">
                                        <h5>Cursos Excel Avanzado</h5>
                                        <p>Un curso 100% recomendado, te<br>ayuda a ampliar tu
                                            vision,conocer<br>realmente
                                            que es lo
                                            que te impide avanzar, dejar de lado de tus miedos para en
                                            lo..."</p>
                                        <div class="row flex">
                                            <div class="w-3/12">
                                                <img src="img/testimonial.jpg" width="48px">
                                            </div>
                                            <div class="w-9/12">
                                                <h6>Edith Lopez Sal</h6>
                                                <div>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                                <div class=" mt-3">
                                    <div class="coment p-4">
                                        <h5>Cursos Excel Avanzado</h5>
                                        <p>Un curso 100% recomendado, te<br>ayuda a ampliar tu
                                            vision,conocer<br>realmente
                                            que es lo
                                            que te impide avanzar, dejar de lado de tus miedos para en
                                            lo..."</p>
                                        <div class="row flex">
                                            <div class="w-3/12">
                                                <img src="img/testimonial.jpg" width="48px">
                                            </div>
                                            <div class="w-9/12">
                                                <h6>Edith Lopez Sal</h6>
                                                <div>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div id="PF" class="tabcontent sec-tab">
                        <div class="row mb-5">
                            <div class="col-md-12">
                                <h3 class="text-28 mt-[41px]">Preguntas frecuentes</h3>
                            </div>
    
                            <div class="questions">
                                <button class="accordion text-18 ">¿Tengo acceso ilimitado a las clases?</button>
                                <div class="panel active-1">
                                    <p class="mb-4 text-lg">¡Sí! Luego de que realices la compra vas a poder acceder a las
                                        clases cuando y donde quieras. El curso se queda en tu cuenta de Crehana para
                                        siempre. :)</p>
                                </div>
    
                                <button class="accordion text-18">¿Dónde lo encuentro y cómo me suscribo?</button>
                                <div class="panel">
                                    <p class="mb-4 text-lg">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    </p>
                                </div>
    
                                <button class="accordion text-18">¿Cuándo inicia el curso?</button>
                                <div class="panel">
                                    <p class="mb-4 text-lg">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    </p>
                                </div>
    
                                <button class="accordion text-18">¿Qué dispositivo y sistema operativo necesito?</button>
                                <div class="panel">
                                    <p class="mb-4 text-lg">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    </p>
                                </div>
                                <button class="accordion text-18">¿Cómo obtengo el certificado del curso?</button>
                                <div class="panel">
                                    <p class="mb-4 text-lg">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                        eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="row mb-5 ">
                            <div class="">
                                <img src="/img/curso/banner-educacion.png" width="100%">
                            </div>
                            <div class="">
                                <p class="text-[18px]">Ayudanos a que la educacion llegue a mas personas</p>
                                <h3 class="text-[21px] lh-29 mt-4">Tu compra ayuda a que cada inicio de ano recaudamos los fondos
                                    ingresador para dar
                                    materiales a los ninos de bajos recursos para que impulsen sus educacion y exito
                                    profesional.</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row text-light content-desktop">
                        <p class="text-right">
                            138 Lessons (15h 30m)
                        </p>
                        <div class="col-md-12 bg-primary d-flex justify-content-between p-3">
                            <span><i class="fa fa-play-circle"></i> 1.Adding transitions
                                bet....</span><span>10:32</span>
                        </div>
                        <div class="col-md-12 d-flex justify-content-between p-3">
                            <span><i class="fa fa-lock"></i> 1.Adding transitions bet....</span><span>10:32</span>
                        </div>
                        <div class="col-md-12 d-flex justify-content-between p-3">
                            <span><i class="fa fa-lock"></i> 2.Adding transitions bet....</span><span>10:32</span>
                        </div>
                        <div class="col-md-12 d-flex justify-content-between p-3">
                            <span><i class="fa fa-lock"></i> 3.Adding transitions bet....</span><span>10:32</span>
                        </div>

                        <div class="col-md-12 d-flex justify-content-between p-3">
                            <span><i class="fa fa-lock"></i> 4.Adding transitions bet....</span><span>10:32</span>
                        </div>
                        <div class="col-md-12 d-flex justify-content-between p-3">
                            <span><i class="fa fa-lock"></i> 5.Adding transitions bet....</span><span>10:32</span>
                        </div>
                        <div class="col-md-12 d-flex justify-content-between p-3">
                            <span><i class="fa fa-lock"></i> 6.Adding transitions bet....</span><span>10:32</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container content-desktop">
            <h4 class="contenido_title">El curso online incluye</h4>
            <div class="row py-4">
                <div class="col-md-8 mr-lg-auto">
                    <div class="row text-light text-lg">
                        <div class="col-md-6">
                            <div class="mt-2"><i class="fa txt-28 fa-clock"></i> <span> Acceso cuantas vecas
                                    quieras</span>
                            </div>
                            <div class="mt-2"><i class="fas txt-28 fa-calendar-check"></i> <span> Acceso a examen</span>
                            </div>
                            <div class="mt-2"><i class="fa txt-28 fa-graduation-cap"></i> <span> Certificadode
                                    aprobacion</span></div>
                        </div>
                        <div class="col-md-6">
                            <div class="mt-2"><i class="fa txt-28 fa-folder"></i> <span> Material descargable</span>
                            </div>
                            <div class="mt-2"><i class="fa txt-28 fa-video"></i> <span> Acceso a un foro con profesor &
                                    estudianter</span></div>
                            <div class="mt-2"><i class="fa txt-28 fa-graduation-cap"></i> <span> 36 clases de acceso
                                    ilimitado
                                </span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="bg-main content-desktop">
        <!-- Descriptions -->
        <div class="container text-light">
            <div class="row">
                <div class="col-md-8">
                    <h2 class="contenido_title content2_title">Descripcion del curso online</h2>
                    <p class="mt-[23px] ">Power BI es un programa de Microsoft que permite crear informes y
                        Dashboards, obteniendo datos de
                        diversas fuentes como hojas de calculo de Excel, bases de datos de Access y paginas web. Cuente
                        con
                        dos elementos: el Power BI Desktop y el Power BI Service. El primero permite el diseno de los
                        informes y dashboards y el segundo permite compertir dichos informes con un equipo de trabajo a
                        traves de una plataforma exclusiva para los usuarios de este software.</p>
                    <p class=" mt-2">En este curso veremos el manejo de Power BI Desktop desde su descarga de
                        internet y su instalacion,
                        hasta la creacion de informes usando tablas graficos y matrices. Luego, veremos el proceso de
                        creacion de una cuenta en Power BI Service y detalles importantes sobre la estructura de la
                        pantalla
                        de este servicio.</p>
                    <h2 class="contenido_title title_3">¿Que voy a aprender?</h2>
                    <p class="mt-[23px]">En este curso aprenderas como crear informes y dashboards untilizando
                        el programa Power Bi Desktop.
                        Ademas, aprenderas a subir los informes a la nube a traves del Power BI Service para
                        compartirlos
                        asi con un equipo de trabajo.</p>
                    <h2 class="contenido_title mt-6">¿A quienes esta dirigido?</h2>
                    <p class="mt-[23px]">Publico en general</p>
                    <h2 class="contenido_title mt-6">Requisitos</h2>
                    <p class="mt-[23px]">Para llevar este curso debes contar con sistema operativo Windows y tener
                        conocimientos basicos o
                        intermedios de Excel.</p>


                    <div class="row expertbox mt-5 pb-5 p-3 w-10/12" data-aos="fade-up">
                        <div class="d-flex justify-content-between">
                            <div class="col-md-3">
                                <img style="border-radius: 50%" src="/img/curso/autor.png" width="169px">
                            </div>
                            <div class="col-md-9">
                                <h4 class="text-[28px]">Sobre nuestro experto</h4>
                                <div class="details text-lg mt-2">
                                    <p>Ing. Antonio Ortigoza</p>
                                    <p>Ingeriero Industrial</p>
                                    <p>Master Gestion Operaciones y Calidad</p>
                                    <p>Certificado Six Sigma Black Belt</p>
                                    <p>Lider en mejora continua</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-3 ">
                            <h6>Sobre mi:</h6>
                            <p>Me da gusto saludarte,m mi nombre es Antonio Ortigoza Ingerniero Industrial cursando mi
                                Master en Direccion de Operaciones y Claidad, mis certificaciones mas destacables en Six
                                sigma, Lean Manufacturing y Core Tools, las pongo a tu disposicion, Soy certificado en
                            </p>

                        </div>

                        <div class="col-md-12 text-center">
                            <a style="color: #EF2567;" href="">Ver mas <i class="fa fa-angle-down"
                                    style="color: #EF2567;"></i></a>
                        </div>

                    </div>

                    <div class="row text-light mb-5">
                        <div class="col-md-12 mb-3">
                            <h3 class="text-[28px]">Certificate e impulsa tu carrera</h3>
                        </div>
                        <div class="col-md-4">
                            <img src="/img/curso/certificado.png" width="100%">
                        </div>
                        <div class="col-md-5 my-auto text-lg">
                            <p>Al terminar el curso habra un pequeno examen, que deberas aprobar pata que te emitamos un
                                certificado firmado por nosotros (sin ningun costo adicional), con un codigo unico con
                                el
                                cual cualquier institucion/persona podra validar la autenticidad de tu certificado y tus
                                conocimientos.</p>
                        </div>
                    </div>

                    <div class="row text-center mb-5 md:w-11/12">
                        <div class="col-md-12 mb-5">
                            <h3 class="text-left text-[28px]">Beneficios de curso online</h3>
                        </div>
                        <div class="col-md-6">
                            <img src="/img/curso/icono1.png" width="88px" class="m-auto">
                            <p>Preparate<br>para una carrera profeional en campos de mucha demanda, como<br>TI,AI e ingenieria de la nube.</p>
                        </div>
                        <div class="col-md-6">
                            <img src="/img/curso/icono1.png" width="88px" class="m-auto">
                            <p>Preparate<br>para una carrera profeional en campos de mucha demanda, como<br>TI,AI e ingenieria de la nube.</p>
                        </div>
                        <div class="col-md-6">
                            <img src="/img/curso/icono1.png" width="88px" class="m-auto">
                            <p>Preparate<br>para una carrera profeional en campos de mucha demanda, como<br>TI,AI e ingenieria de la nube.</p>
                        </div>
                        <div class="col-md-6">
                            <img src="/img/curso/icono1.png" width="88px" class="m-auto">
                            <p>Preparate<br>para una carrera profeional en campos de mucha demanda, como<br>TI,AI e ingenieria de la nube.</p>
                        </div>
                        <div class="col-md-6">
                            <img src="/img/curso/icono1.png" width="88px" class="m-auto">
                            <p>Preparate<br>para una carrera profeional en campos de mucha demanda, como<br>TI,AI e ingenieria de la nube.</p>
                        </div>
                        <div class="col-md-6">
                            <img src="/img/curso/icono1.png" width="88px" class="m-auto">
                            <p>Preparate<br>para una carrera profeional en campos de mucha demanda, como<br>TI,AI e ingenieria de la nube.</p>
                        </div>

                    </div>


                    <div class="row mt-5 mb-5">
                        <div class="col-md-12">
                            <h3 class="text-[28px] md:mt-10">Proyectos de Estudiantes</h3>
                        </div>
                        <div class="estudiantes row md:w-10/12">
                            <div class="col-md-3 mt-4">
                                <img src="/img/curso/estudiante.png" width="100%">
                            </div>
                            <div class="col-md-3 mt-4">
                                <img src="/img/curso/estudiante.png" width="100%">
                            </div>
                            <div class="col-md-3 mt-4">
                                <img src="/img/curso/estudiante.png" width="100%">
                            </div>
                            <div class="col-md-3 mt-4">
                                <img src="/img/curso/estudiante.png" width="100%">
                            </div>
                            <div class="col-md-3 mt-4">
                                <img src="/img/curso/estudiante.png" width="100%">
                            </div>
                            <div class="col-md-3 mt-4">
                                <img src="/img/curso/estudiante.png" width="100%">
                            </div>
                            <div class="col-md-3 mt-4">
                                <img src="/img/curso/estudiante.png" width="100%">
                            </div>
                            <div class="col-md-3 mt-4">
                                <img src="/img/curso/estudiante.png" width="100%">
                            </div>
                            <div class="col-md-3 mt-4">
                                <img src="/img/curso/estudiante.png" width="100%">
                            </div>
                            <div class="col-md-3 mt-4">
                                <img src="/img/curso/estudiante.png" width="100%">
                            </div>
                            <div class="col-md-3 mt-4">
                                <img src="/img/curso/estudiante.png" width="100%">
                            </div>
                            <div class="col-md-3 mt-4">
                                <img src="/img/curso/estudiante.png" width="100%">
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="text-28 md:mb-[44px]">Cursos recomendados</h3>
                        </div>
                        <div class=" flex gap-5">
                            <div class="col-md-5" data-aos="fade-up">
                                <div class="curso-prog">
                                    <div class="preview-curso-1 w-full h-[180px]"
                                        style="background:url('/img/cursos/curso-1.jpg')"></div>
                                    <div class="curso-prog_content">
                                        <span class="badge badge-nuevo">Nuevo</span>
                                        <h3 class="title-curso-des text-base font-white">Branding estratégico para
                                            marcas de emprendimiento</h3>
                                        <p class="autor-curso text-sm">Por Mike Rom Card</p>
                                        <div class="prices flex">
                                            <p class="precio-normal text-base w-1/3">S/38.99</p>
                                            <p class="precio-desc text-sm line-through w-2/3">S/ 149.90</p>
                                        </div>
                                        <div class="cursos-btn flex">
                                            <button class="w-1/2 btn-agregar flex items-center"> <i
                                                    class="fas fa-shopping-cart mr-1"></i>Agregar al carrito</button>
                                            <button class="w-1/2 btn-comprar text-lg text-center">Comprar ahora</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-5">
                                <div class="curso-prog" data-aos="fade-up">
                                    <div class="preview-curso-1 w-full h-[180px]"
                                        style="background:url('/img/cursos/curso-1.jpg')"></div>
                                    <div class="curso-prog_content">
                                        <span class="badge badge-nuevo">Nuevo</span>
                                        <h3 class="title-curso-des text-base font-white">Branding estratégico para
                                            marcas de emprendimiento</h3>
                                        <p class="autor-curso text-sm">Por Mike Rom Card</p>
                                        <div class="prices flex">
                                            <p class="precio-normal text-base w-1/3">S/38.99</p>
                                            <p class="precio-desc text-sm line-through w-2/3">S/ 149.90</p>
                                        </div>
                                        <div class="cursos-btn flex">
                                            <button class="w-1/2 btn-agregar flex items-center"> <i
                                                    class="fas fa-shopping-cart mr-1"></i>Agregar al carrito</button>
                                            <button class="w-1/2 btn-comprar text-lg text-center">Comprar ahora</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12 mx-auto d-flex justify-content-center mt-5 mb-5 text-center pagination">
                            <i class="fa fa-angle-left fa-2x p-3"></i>&nbsp; <span class="my-auto">&nbsp;2 de
                                20&nbsp;</span>&nbsp; <i class="fa fa-angle-right fa-2x p-3"></i>
                        </div>
                    </div>

                    <div class="row mb-5" data-aos="fade-up">
                        <div class="col-md-12">
                            <h3 class="text-28">Comentarios</h3>
                        </div>
                        <div class="coments md:w-10/12 grid grid-cols-2 gap-5 mt-6">
                            <div class="mt-3">
                                <div class="coment p-4">
                                    <h5>Cursos Excel Avanzado</h5>
                                    <p>Un curso 100% recomendado, te<br>ayuda a ampliar tu vision,conocer<br>realmente
                                        que es lo
                                        que te impide avanzar, dejar de lado de tus miedos para en lo..."</p>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="img/testimonial.jpg" width="65%">
                                        </div>
                                        <div class="col-md-8">
                                            <h6>Edith Lopez Sal</h6>
                                            <div>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class=" mt-3">
                                <div class="coment p-4">
                                    <h5>Cursos Excel Avanzado</h5>
                                    <p>Un curso 100% recomendado, te<br>ayuda a ampliar tu vision,conocer<br>realmente
                                        que es lo
                                        que te impide avanzar, dejar de lado de tus miedos para en lo..."</p>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="img/testimonial.jpg" width="65%">
                                        </div>
                                        <div class="col-md-8">
                                            <h6>Edith Lopez Sal</h6>
                                            <div>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class=" mt-3">
                                <div class="coment p-4">
                                    <h5>Cursos Excel Avanzado</h5>
                                    <p>Un curso 100% recomendado, te<br>ayuda a ampliar tu vision,conocer<br>realmente
                                        que es lo
                                        que te impide avanzar, dejar de lado de tus miedos para en lo..."</p>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="img/testimonial.jpg" width="65%">
                                        </div>
                                        <div class="col-md-8">
                                            <h6>Edith Lopez Sal</h6>
                                            <div>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class=" mt-3">
                                <div class="coment p-4">
                                    <h5>Cursos Excel Avanzado</h5>
                                    <p>Un curso 100% recomendado, te<br>ayuda a ampliar tu vision,conocer<br>realmente
                                        que es lo
                                        que te impide avanzar, dejar de lado de tus miedos para en lo..."</p>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <img src="img/testimonial.jpg" width="65%">
                                        </div>
                                        <div class="col-md-8">
                                            <h6>Edith Lopez Sal</h6>
                                            <div>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-5">
                        <div class="col-md-12">
                            <h3 class="text-28">Preguntas frecuentes</h3>
                        </div>

                        <div class="preguntas md:w-10/12">
                            <button class="accordion ">¿Tengo acceso ilimitado a las clases?</button>
                            <div class="panel active-1">
                                <p class="mb-4 text-lg">¡Sí! Luego de que realices la compra vas a poder acceder a las
                                    clases cuando y donde quieras. El curso se queda en tu cuenta de Crehana para
                                    siempre. :)</p>
                            </div>

                            <button class="accordion">¿Dónde lo encuentro y cómo me suscribo?</button>
                            <div class="panel">
                                <p class="mb-4 text-lg">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </div>

                            <button class="accordion">¿Cuándo inicia el curso?</button>
                            <div class="panel">
                                <p class="mb-4 text-lg">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </div>

                            <button class="accordion">¿Qué dispositivo y sistema operativo necesito?</button>
                            <div class="panel">
                                <p class="mb-4 text-lg">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </div>
                            <button class="accordion">¿Cómo obtengo el certificado del curso?</button>
                            <div class="panel">
                                <p class="mb-4 text-lg">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                                    eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-5 md:w-10/12">
                        <div class="">
                            <img src="/img/curso/banner-educacion.png" width="100%">
                        </div>
                        <div class="">
                            <p class="text-[22px]">Ayudanos a que la educacion llegue a mas personas</p>
                            <h3 class="text-[31px] mt-4">Tu compra ayuda a que cada inicio de ano recaudamos los fondos
                                ingresador para dar
                                materiales a los ninos de bajos recursos para que impulsen sus educacion y exito
                                profesional.</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card coursecard p-4" data-aos="fade-up">
                        <div class="card-img-overlay p-0"><i style="position: absolute;left: 90%;top: 3%;color:red;"
                                class="fa fa-heart"></i></div>
                        <h4 class="text-2xl">Adobe Premiere Pro CC – Essentials Training Course</h4>
                        <p class="text-lg mt-[10px]">Dictado por Daniel Scott, Adobe Certified Trainer</p>
                        <div class="d-flex justify-content-around pb-4" style="border-bottom: 1px solid #262D40;">
                            <div><i class="fa fa-fire"></i>&nbsp; Nivel Basico</div>
                            <div><i class="fa fa-star"></i>&nbsp; 4.5</div>
                            <div><i class="fa fa-user-plus"></i>&nbsp; 207</div>
                        </div>
                        <div class="d-flex justify-content-between pt-4 flex-sm-column flex-lg-row">
                            <h1 class="text-[40px]">S/179.00</h1>
                            <span class="text-lg" style="color: #F82466;">78% dcto<br>S/229.00</span>
                        </div>
                        <div class="d-flex justify-content-between pt-2  pb-3 text-lg">
                            <p style="color: #F82466;">Oferta expira en:</p>
                            <span>
                                <p class="text-[23px]" style="color: #F82466;">5 días 12:02:06</p>
                            </span>
                        </div>
                        <div class="row">
                            <div class="col-md-6 pr-0 pl-0">
                                <button class="btn btn-info coursebtn1 pt-3 pb-3"><b>Comprar ahora</b></button>

                            </div>
                            <div class="col-md-6 pr-0 pl-0">
                                <button class="btn btn-info coursebtn2 pt-3 pb-3"><b><i class="fa fa-shopping-cart"></i>
                                        Agregar</b></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</body>

</html>
@endsection
@section('scripts')
<script>
    var acc = document.getElementsByClassName("accordion");
    var i;

    for (i = 0; i < acc.length; i++) {
        acc[i].addEventListener("click", function () {
            this.classList.toggle("active");
            var panel = this.nextElementSibling;
            if (panel.style.display === "block") {
                panel.style.display = "none";
            } else {
                panel.style.display = "block";
            }
        });
    }
</script>
<script>
    function openSection(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>
@endsection