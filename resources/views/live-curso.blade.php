@extends('master')
@section('styles')
<link rel="stylesheet" href="<?php echo asset('css/live-curso.css')?>" type="text/css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@2.3.1/dist/css/splide.min.css"
type="text/css">
@endsection
@section('content')
    <!-- Headerimg -->
<div class="bg-main md:pt-[63px]">
    <div class="container pt-5">
        <div class="row">
            <div class=" mx-auto">
                <div class="row">
                    <div class="col-md-12 portadabg w-11/12 md:w-full m-auto">
                        <div class="row justify-center">
                            <div class="relative  imgover rounded-xl" style="background:url('/img/comunidad/PORTADA.png');background-position:bottom">
                                <div class=" content-portada absolute">
                                    <h2 class="text-41" style="color: #DAE3E5;">Área de Gráfica y Arte</h2>
                                        <span class="text-light mt-3">Cursos de 2 meses - Online</span>
                                </div>
                                <div class="socialicons align-self-end absolute">
                                    <i class="fab fa-facebook"></i>
                                    <i class="fab fa-twitter"></i>
                                    <i class="fab fa-linkedin"></i>
                                    <i class="fa fa-share-alt"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Course Details Section -->
    <div class="container mb-5 relative w-11/12 mw:w-full">
        <div class="row justify-between">
            <div class="col-md-7 courseleft md:mt-[57px]">
                <h4 class="text-31">Presentacion</h4>
                <p class="md:mt-5">EI curso brindara al alumno un acercamiento a los principios fundamentales del dibujoy la pinture que
                    pordra aplicar a traves de ejercicios practicos con diferentes contenidos como: aprender a dar volumen a
                    los objetos, aprender a "concinar loscolores" y aplicarlos a traves de una tecnica pictorica, aprender
                    las leyaes basicas de la composicion visual, la perspectiva atmosferica, etc. asi como agudizar la
                    percepcion de los colores y matices, afinar la observacion de modo que todo ello ayude a<br>desarrollar
                    su capacidad creativa.</p>
                <h4 class="text-31">Objectives</h4>
                <p  class="md:mt-5"> - Dominar los conocimientos teoricos practicos (iniciales y fundamentales) el dibujo la pintura.<br> -
                    Potenciar la capacidad de expresion plastica.<br> - Estimular la capacidad de observacion y
                    analisis.<br> - Aplicar lo aprendido en su profesion ya sea su espericalidad el diseno grafico u otras
                    carreras afines a las artes plasticas </p>
    
                <h4 class="mt-5 text-31">Dirigido a</h4>
                <div class="d-flex justify-content-between mt-5 mb-5">
                    <p> - Publico en general interesado en el arte visual.<br> - Disenadores<br> - Illustradores</p>
                    <p> - Disendores <br> - Arquitectos</p>
                </div>
    
                <h4 class="mt-5 text-31">Contendio</h4>
                <div class="d-flex justify-content-between mt-3 mb-5">
                    <p> - Introduccion<br> - Valoracion Tonal<br> - EI volumen</p>
                    <p> - Introduccion<br> - Valoracion Tonal<br> - EI volumen</p>
                    <p> - Tomar una fotografia<br> pintura<br> - Ejecucion de una<br> pintura</p>
                </div>
    
                <h4 class="text-31 md:mt-10">Requisitos</h4>
                <p class="md:mt-5">- Debes contar con un block de dibujo, un lienzo pequeno, lapices, acuarelas,<br> - acrilicos y
                    pinceles.<br>- Una PC (con camera web, audifono y microfono,) laptop o una tableta.<br>- Buena conexion
                    a internet Espacio libre de distracciones y ruidos<br> Descargar e instalar ZOOM https://zoom.us/dowload
                </p>
    
                <h4 class="text-31 md:mt-10">Certification</h4>
                <p  class="md:mt-5">Al finalizar el curso podras gestionar tu certificado se requiere la aprobacion del curso respectivo y un
                    sencillo<br>tramite, ilenando un formato e solicitud y cancelando un monto de S/50.00 soles.<br>Una vez
                    efectuado el tramite, se podra recoger ei documento ai cabo de 5 dias<br>habiles.</p>
    
                <h4 class="text-31 md:mt-10">Duracion</h4>
                <p  class="md:mt-5">2 meses </p>
                <h4 class="text-31 md:mt-10">Horarios e inicios <span class="text-red">20% dscto.</span></h4>
                <div class="online p-3 text-center mt-[32px]">
                    <h4 class="mb-0 font-21">DIBUJO Y PINTURA - ONLINE</h4>
                </div>

                <table class="mt-2 table-hover table table-responsive text-light text-center table-bordered text-xs md:text-base">
                    <tr class="bg-secondary">
                        <th class="p-md-4">DIAS&nbsp;</th>
                        <th class="p-md-4">HORARIO&nbsp;</th>
                        <th class="p-md-4">SESIONES&nbsp;</th>
                        <th class="p-md-4">HORAS&nbsp;</th>
                        <th class="p-md-4">INICIO&nbsp;</th>
                        <th class="p-md-4">FIN&nbsp;</th>
                    </tr>
                    <tr>
                        <td>MAR-JUE</td>
                        <td>18:00-20:00</td>
                        <td>16</td>
                        <td>32 Hrs.</td>
                        <td>18 May.</td>
                        <td>13 Jul.</td>
                    </tr>
                    <tr>
                        <td>SAB</td>
                        <td>9:00-13:00</td>
                        <td>8</td>
                        <td>32 Hrs.</td>
                        <td>22 May.</td>
                        <td>10 Jul.</td>
                    </tr>
    
                </table>
    
                <div class="mt-4 mb-5">
                    <p>(*)EI inicio de clases esta sujeto a la cantidad minima de alunmos.<br>(*)Realiza tu matricula desde
                        una COMUTADORA y te confirmaremos tu inscription pro correo.<br>(*)20% dscto en cualquier horario.
                    </p>
                </div>
    
                <div class="d-flex justify-between">
                    <button class="btn btn-danger pt-3 pb-3 pr-5 pl-5 tblbtn1 rounded-lg">
                        <h6 class="mb-0">Escribenos al whatsapp</h6>
                    </button>
                    <button class="btn btn-danger pt-3 pb-3 pr-5 pl-5 tblbtn2 rounded-lg">
                        <h6 class="mb-0">Descargar silabo</h6>
                    </button>
                </div>
    
                <h4 class="text-31 md:mt-16">Inversion</h4>
                <p class="mt-3 md:w-11/12">Pago al contado:<br>Precio con descuento: S/840.00 soles (cubre ei pago total del curso)<br>Precio
                        Regular: S/1050 soles<br><br>(*) Despues de haberse matriculado no hay cambios de horarios,
                        cursos,postergaciones ni devoluciones. Si por motivos de fuerza mayor desea proceder con su
                        solicitud debera pager ei 10% del monto pagado por gastos administrativos.</p>
    
                <h4 class="text-31 md:mt-10">Medios de Pago</h4>
                <h5 class="tex-21 mt-4">PAGO POR DEPOSITO</h5>
                <p class="mt-3">Realize tu pago en una agencia bancaria o agente express del BBVA ai numero de cuenta corriente
                    soles:<br>0011 0117 0100084534<br>*En referencia colocar: Nombres y appellidos de la persona a
                    matricularse.<br>*Una vez realizazdajo ei deposito, enviar ai correo infolive@datux.live o
                    escribenos<br>al whatasap 358539</p>
            </div>
            
            <div class="col-md-4 md:mt-[56px]" id="stickydiv" >
                <div class="card coursecard p-4">
                    <div class="card-img-overlay p-0"><i style="position: absolute;left: 90%;top: 3%;color:red;"
                            class="fa fa-heart"></i></div>
                    <h4 class="text-2xl">Adobe Premiere Pro CC - Essectials Training Course</h4>
                    <p class="text-lg mt-2">Dictado por Daniel Scott, Adobe Certified Trainer</p>
                    <div class="d-flex justify-content-around pb-4 mt-4" style="border-bottom: 1px solid #262D40;">
                        <div><i class="fa fa-fire"></i>&nbsp; Nivel Basico</div>
                        <div><i class="fa fa-star"></i>&nbsp; 4.5</div>
                        <div><i class="fa fa-user-plus"></i>&nbsp; 207</div>
                    </div>
                    <div class="d-flex justify-content-between pt-4 flex-sm-column flex-lg-row">
                        <h4 class="text-[40px]">S/179.00</h4>
                        <span class="text-lg"style="color: #F82466;">78% dcto<br>S/229.00</span>
                    </div>
                    <div class="d-flex justify-content-between pt-4 text-lg">
                        <p style="color: #F82466;">Oferta expira en:</p>
                        <span style="color: #F82466;">
                            <h5>5 dais 12:02:06</h5>
                        </span>
                    </div>
                    <button class="btn btn-info coursebtn mt-6 pt-3 pb-3"><b>Solicitar informacion</b></button>
                </div>
            </div>
        </div>
    </div>
    
    <!-- unete -->
    <div class="container unete mb-5" style="border-top:2px solid #6E8095;border-bottom: 2px solid #6E8095">
        <div class="row p-5">
            <div class="col-md-12 text-center">
                <h4 class="text-[53px]">iUnete a nosotros</h4>
                <h3 class="text-light text-28 md:mt-11">Se parte de nosotros y haz que<br> tu talento llegue a mas con<br> inspiracion</h3>
            </div>
        </div>
    </div>
    
    
    <!-- Course slider -->
    <div class="container md:mt-[75px]">
        <div class="col-md-10 mx-auto">
            <div class="col-md-10 mx-auto">
                <h4 class="text-41 text-center text-[#8A57EF]">Cursos Recomendados</h4>
            </div>
        </div>
    </div>
    <div class="container-fluid mb-5 pb-5 pt-5 mt-5 card-slider relative" style="">
        <div class="row mx-auto my-auto">
            <div id="splide">
                <div class="splide__track" id="splide-track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <div class="card cursosimgslide">
								<img class="mb-4" src="/img/blog/6.png" width="100%">
								<p class="category">TECHNOLOGIA</p>
								<h5 >Adobe Premiere Pro CC Essentials Training Course</h5>
								<p>abril 21, 2021</p>
							</div>
                        </li>
                        <li class="splide__slide">
                            <div class="card cursosimgslide">
								<img class="mb-4" src="/img/blog/6.png" width="100%">
								<p class="category">TECHNOLOGIA</p>
								<h5>Adobe Premiere Pro CC Essentials Training Course</h5>
								<p>abril 21, 2021</p>
							</div>
                        </li>
                        <li class="splide__slide">
                            <div class="card cursosimgslide">
								<img class="mb-4" src="/img/blog/6.png" width="100%">
								<p class="category">TECHNOLOGIA</p>
								<h5>Adobe Premiere Pro CC Essentials Training Course</h5>
								<p>abril 21, 2021</p>
							</div>
                        </li>
                        <li class="splide__slide">
                            <div class="card cursosimgslide">
								<img class="mb-4" src="/img/blog/6.png" width="100%">
								<p class="category">TECHNOLOGIA</p>
								<h5>Adobe Premiere Pro CC Essentials Training Course</h5>
								<p>abril 21, 2021</p>
							</div>
                        </li>
                        <li class="splide__slide">
                            <div class="card cursosimgslide">
								<img class="mb-4" src="/img/blog/6.png" width="100%">
								<p class="category">TECHNOLOGIA</p>
								<h5>Adobe Premiere Pro CC Essentials Training Course</h5>
								<p>abril 21, 2021</p>
							</div>
                        </li>
                        <li class="splide__slide">
                            <div class="card cursosimgslide">
								<img class="mb-4" src="/img/blog/6.png" width="100%">
								<p class="category">TECHNOLOGIA</p>
								<h5>Adobe Premiere Pro CC Essentials Training Course</h5>
								<p>abril 21, 2021</p>
							</div>
                        </li>                                                
                    </ul> <!-- /.splide__list -->
                </div> <!-- /.splide__track -->
            </div> 
                <a class="carousel-control-prev bg-dark w-auto" href="#myCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next bg-dark w-auto" href="#myCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    
    <div class="col-md-10 mx-auto d-flex justify-content-center py-5 text-center pagination bg-main">
        <i class="fa fa-angle-left fa-2x p-3"></i>&nbsp; <span class="my-auto">&nbsp;2 de 20&nbsp;</span>&nbsp; <i
            class="fa fa-angle-right fa-2x p-3"></i>
    </div>
</div>
@endsection
@section('scripts')
<script>
    $(function(){
    if ($('#stickydiv').length){
        var el = $('#stickydiv');
        var stickyTop = $('#stickydiv').offset().top;
        var stickyHeight = $('#stickydiv').height();
        $(window).scroll(function(){
            var limit = $('#footer').offset().top - stickyHeight - 20;
            var windowTop = $(window).scrollTop();
            if (stickyTop < windowTop){
                el.css({
                    position: 'fixed',
                    top:'15%',
                    left:'60%'
                });

            } else{
                el.css('position', 'static');
            }
            if (limit < windowTop){
                var diff = limit - windowTop*4;
                el.css({
                    top: diff
                });
            }

        });
    }
});
</script>

<script>
	document.addEventListener('DOMContentLoaded', function () {
		var splide = new Splide('#splide', {
            type   : 'loop',
            drag   : 'free',
            focus  : 'center',
            autoplay: true,
            perPage: 4,
            breakpoints: {
            1024: {
              perPage: 4,
             
            },
            767: {
              perPage: 2,
          
            },
            640: {
              perPage: 1,
        
            },
          },
            autoScroll: {
                speed: 2,
            },
		}).mount();
	})
</script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@2.3.1/dist/js/splide.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-auto-scroll@0.3.7/dist/js/splide-extension-auto-scroll.min.js"></script>
@endsection