@extends('master')
@section('styles')
    <link rel="stylesheet" href="<?php echo asset('css/3.css')?>" type="text/css">
@endsection
@section('content')
@include('secondnavbar')
<div class="bg-secondary-color">
    <!-- Heading line -->
	<div class="container headline text-center">
		<div class="row">
			<div class="w-11/12 md:w-10/12 m-auto">
				<h2>Nuestro compromiso con la educacion de todos los peruanos</h2>
			</div>
		</div>
	</div>

	<!-- img -->
	<div class="container-comunidad mt-lg-2 mb-5" data-aos="fade-up">
		<div class="row">
			<div class="col-md-12">
				<img style="border-radius: 10px;" src="/img/3/PORTADA1.png" class="w-11/12 md:w-full m-auto">
			</div>
		</div>
	</div>

	<!-- Con tu -->
	<div class="container-comunidad mt-5">
		<div class="w-11/12 md:w-full row m-auto">
			<div class="col-md-12 mx-auto">
				<div class="row">
					<div class="col-md-6 contu">
						<h2 data-aos="fade-up">Con tu ayuda lograremos <span>nuestras metas educativas</span> </h2>
					</div>
					<div class="col-md-6 contudesc mt-lg-2 pt-8 md:pt-0">
						<h4 style="line-height: 1.5;color:#373737" class="text-lg md:text-2xl" data-aos="fade-up" data-aos-delay="500">EI curso bridara al alumno un aceramiento a los principios funcamentales del dibujo y la pintura que podra aplicar a traves de ejercicios practicos con diferentes contenidos como: aprender a dar volumen a los objetos, aprender a "cocinar los colores" y aplicarlos a traves de una tecnica pictorica. </h4>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- 3% Section -->
	<div class="container-fluid mt-5 m-0 p-0" style="background: linear-gradient(to right,#0169FE,#05CBEC);">
        <div class="container-comunidad">
            <div class="row" style="margin-right: 0px !important;">
                <div class=" mx-auto py-5" >
                    <div class="py-5 w-11/12 md:w-full m-auto">
                    <h2 class="bodiv" data-aos="fade-up">3%</h2>
                    <div class="text-light cardtext">
                        <h2 data-aos="fade-up" data-aos-delay="500">de cada compra en datux seran destinadas para la compra de herramientas de estudio para los que mas lo necesiten.</h2>
                    </div>
                </div>
                </div>
            </div>
        </div>
	</div>

	<!-- secong lg text -->
	<div class="container-fluid lgtext text-center">
		<div class="row">
			<div class="col-md-12" data-aos="fade-up">
				<h2>Estamos invirtiendo en ideas de gran valor educativo</h2>
			</div>
		</div>
	</div>

	<!-- Procreate -->
	<div class="container-comunidad procreate-section pr-md-5 pl-md-5 mb-5 bg-white" style="border-radius: 7px;">
		<div class="row" data-aos="fade-up">
			<div class="col-md-6 procreate-left my-auto">
				<h2 class="text-[31px] md:text-[48px] text-[#373737] md:w-10/12">Obtén información <br>detallada de cada contribución</h2>
				<button class="btn btn-primary probtn p-3 mt-3 md:mt-5">Pronta publicacion</button>
			</div>
			<div class="col-md-6 procreate-right pb-0">
				<img src="/img/3/procreate.png" width="422px" class="ml-auto mt-3 md:mt-0">
			</div>
		</div>
	</div>

	<!-- marcas -->
	<div class="container-comunidad mt-5 pt-5 pb-5">
		<div class="row mt-5 mb-5">
			<div class="col-md-12 mb-5 text-center marcas">
				<h2>Marcas comprometidas</h2>
			</div>
		</div>

		<div class="mt-5 my-auto grid grid-cols-2 gap-y-10 md:flex">
			<div class="col-md-3">
				<img src="/img/3/MARCA1.png" width="90%">
			</div>
			<div class="col-md-3">
				<img src="/img/3/MARCA2.png" width="90%">
			</div>
			<div class="col-md-3">
				<img src="/img/3/MARCA3.png" width="90%">
			</div>
			<div class="col-md-3">
				<img src="/img/3/MARCA4.png" width="90%">
			</div>
		</div>

		<div class="row mt-5 px-3 md:px-0">
			<div class="col-md-12 text-secondary md:pb-10">
				<p style="font-size: 14px;color:#7A7A7A">EI curso brindara al alumno un acercamiento a los principios fundamentales del dibujo y la pintura que podra aplicar a traves de ejerccios practicos con diferentes<br>contenidos como: aprender a dar volumen a los objetos, aprender a "cocinar los colores" y aplicarlos a traves de una tecnica pictoric, aprender las leyes basicas de la <br>composicion visual, la perspectiva atmosferica, etc. asi como agudizar la percepcion de los colores y matices, afinar la observacion de modo que todo ello ayude a <br>desarrollar su capacidad creativa.</p>
			</div>
		</div>
	</div>
</div>    
@endsection