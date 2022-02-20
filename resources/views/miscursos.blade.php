@extends('master')
@section('styles')
	<link rel="stylesheet" href="<?php echo asset('css/miscursos.css')?>" type="text/css">
@endsection
@section('content')
 <div class="bg-main">
	 	<!-- name -->
	<div class="container mb-5 md:pt-20">
		<div class="row">
			<div class="col-12 name">
				<a href=""><i class="fa fa-angle-left"></i>&nbsp;Volver</a>
			</div>
		</div>
	</div>

	<!-- title section -->
	<div class="container-comunidad mt-5 text-light">
		<div class="row mb-4">
			<div class="col-md-12 d-flex justify-content-between">
				<h3 clasS="text-41">Mis cursos</h3>
				<p>Ordenar por (1) <i class="fa fa-angle-down"></i></p>
			</div>
		</div>

		<div class="row w-10/12 md:w-full m-auto" data-aos="fade-up">
			<div class="col-md-4 pr-0 pl-0 leftimg" style="background:url('/img/mis-cursos/cursos.png');background-position:center">
			</div>
			<div class="col-md-8 md:pt-4 md:pb-4 rightdesc">
				<div class="row">
					<div class="col-sm-12 col-md-8">
						<img src="img/mis-cursos/cursos.png" class="md:hidden">
						<h5 class="title-miscursos pl-5 md:pl-0 mt-3 md:mt-0">Adobe Premiere Pro CC - Essentials Training Course</h5>
						<span class="pl-5 md:pl-0">Daniel Scott, Adobe Certified Trainer</span>
					</div>
					<div class="col-md-4">
						<img src="/img/mis-cursos/proyecto.png" width="50%" class="ml-auto hidden md:block">
					</div>
				</div>
				<div class="row flex justify-between text-lg">
					<div class="col-sm-3 pr-0 pl-5 md:pl-0">
						<button class="btn btn-info pr-3 pl-3 pt-3 pb-3 "><span><b>Iniciar </b> </span><i
								class="fa fa-arrow-right"></i></button>
					</div>
					<div class="col-md-6 flex justify-around md:justify-between text-sm  px-3 ">
						<div class=" my-auto">
							<p class="my-auto">Gestionar</p>
						</div>
						<div class=" my-auto">
							<p class="my-auto">Certificados</p>
						</div>
						<div class="my-auto">
							<p class="my-auto">+ Proyecto final</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row mi-curso_item w-10/12 md:w-full m-auto mt-5 md:mt-0" data-aos="fade-up">
			<div class="col-md-4 pr-0 pl-0 leftimg" style="background:url('/img/mis-cursos/cursos.png');background-position:center">
			</div>
			<div class="col-md-8 md:pt-4 pb-4 rightdesc">
				<div class="row">
					<div class="col-md-8">
						<img src="img/mis-cursos/cursos.png" class="md:hidden">
						<div class="content-miscur w-11/12 md:w-full m-auto">
							<h5 class="title-miscursos mt-3 md:mt-0">Adobe Premiere Pro CC - Essentials Training Course</h5>
							<span class="">Daniel Scott, Adobe Certified Trainer</span>
							<p class="mt-3">2 unidades completadas de 6 disponibles</p>
							<div class="progress">
								<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
								</div>
							  </div>
						</div>
					</div>
					<div class="col-md-4">
						<img src="/img/mis-cursos/proyecto.png" width="50%" class="ml-auto hidden md:block">
					</div>
				</div>
				<div class="row flex justify-between text-lg items-baseline">
					<div class="col-sm-3 pr-0 mt-2 md:mt-0 ml-3 md:ml-0">
						<button class="btn btn-info pr-3 pl-3 pt-3 pb-3 "><span><b>Iniciar </b> </span><i
								class="fa fa-arrow-right"></i></button>
					</div>
					<div class="col-md-6 flex justify-around md:justify-between text-sm  px-3 ">
						<div class=" my-auto">
							<p class="my-auto">Gestionar</p>
						</div>
						<div class=" my-auto">
							<p class="my-auto">Certificados</p>
						</div>
						<div class="my-auto">
							<p class="my-auto">+ Proyecto final</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="row mi-curso_item w-10/12 md:w-full m-auto mt-5 md:mt-0" data-aos="fade-up">
			<div class="col-md-4 pr-0 pl-0 leftimg" style="background:url('/img/mis-cursos/cursos.png');background-position:center">
			</div>
			<div class="col-md-8 md:pt-4 pb-4 rightdesc">
				<div class="row">
					<div class="col-md-8">
						<img src="img/mis-cursos/cursos.png" class="md:hidden">
						<div class="content-miscur w-11/12 md:w-full m-auto">
							<h5 class="title-miscursos mt-3 md:mt-0">Adobe Premiere Pro CC - Essentials Training Course</h5>
							<span class="">Daniel Scott, Adobe Certified Trainer</span>
							<p class="mt-3">2 unidades completadas de 6 disponibles</p>
							<div class="progress">
								<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:70%">
								</div>
							  </div>
						</div>
					</div>
					<div class="col-md-4">
						<img src="/img/mis-cursos/proyecto.png" width="50%" class="ml-auto hidden md:block">
					</div>
				</div>
				<div class="row flex justify-between text-lg items-baseline">
					<div class="col-sm-3 pr-0 mt-2 md:mt-0 ml-3 md:ml-0">
						<button class="btn btn-info pr-3 pl-3 pt-3 pb-3 "><span><b>Iniciar </b> </span><i
								class="fa fa-arrow-right"></i></button>
					</div>
					<div class="col-md-6 flex justify-around md:justify-between text-sm  px-3 ">
						<div class=" my-auto">
							<p class="my-auto">Gestionar</p>
						</div>
						<div class=" my-auto">
							<p class="my-auto">Certificados</p>
						</div>
						<div class="my-auto">
							<p class="my-auto">+ Proyecto final</p>
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
	</div>
 </div>
@endsection