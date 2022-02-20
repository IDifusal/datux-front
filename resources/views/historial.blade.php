@extends('master')
@section('styles')
<link rel="stylesheet" href="<?php echo asset('css/historial.css')?>" type="text/css">
@endsection
@section('content')
<div class="bg-main">
	<!-- name -->
	<div class="container-comunidad mb-5 md:pt-32 hidden md:block">
		<div class="row">
			<div class="col-12 name">
				<a href=""><i class="fa fa-angle-left"></i>&nbsp;Volver</a>
			</div>
		</div>
	</div>

	<!-- title section -->
	<div class="container-comunidad mt-5 text-light md:pb-[100px]">
		<div class="row mb-4">
			<div class="col-md-12">
				<h3 clasS="text-21">PEDIDOS Y GESTIÓN DE CURSOS</h3>
				<p clasS="text-base mt-6 md:mt-0">Todas las compras que has realizado en Datux</p>
			</div>
		</div>


		<div class="row mi-curso_item w-11/12 md:w-full m-auto my-3 md:my-0 rounded-lg" data-aos="fade-up">
			<div class="col-md-4 pr-0 pl-0 leftimg"
			style="background:url('/img/mis-cursos/cursos.png');background-position:right;background-size:contain;background-repeat:no-repeat">
		</div>
		<div class="col-md-8 pt-4 pb-4 rightdesc">
			<div class="flex flex-col md:flex-row">
				<p>Pedido C6046516T3780905</p>
				<p class="md:ml-10">
					17/06/2020 · Total S/ 65.90
				</p>
				</div>
				<img src="/img/mis-cursos/cursos.png" class="md:hidden">
				<div class="row">
					<div class="col-md-10">
						<h5 class="title-miscursos">Adobe Premiere Pro CC - Essentials Training Course</h5>
						<span>Daniel Scott, Adobe Certified Trainer</span>
					</div>
				</div>
				<div class="row md:mt-8 flex justify-between text-lg">
					<div class="col-sm-3 pr-0">
					</div>
					<div class="col-md-6 flex justify-end">
						<div class="my-auto">
							<p class="my-auto">Solicitar Factura</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row mi-curso_item w-11/12 md:w-full m-auto my-3 md:my-0 rounded-lg" data-aos="fade-up">
			<div class="col-md-4 pr-0 pl-0 leftimg"
			style="background:url('/img/mis-cursos/cursos.png');background-position:right;background-size:contain;background-repeat:no-repeat">
		</div>
		<div class="col-md-8 pt-4 pb-4 rightdesc">
			<div class="flex  flex-col md:flex-row">
				<p>Pedido C6046516T3780905</p>
				<p class="md:ml-10">
					17/06/2020 · Total S/ 65.90
				</p>
				</div>
				<img src="/img/mis-cursos/cursos.png" class="md:hidden">
				<div class="row">
					<div class="col-md-10">
						<h5 class="title-miscursos">Adobe Premiere Pro CC - Essentials Training Course</h5>
						<span>Daniel Scott, Adobe Certified Trainer</span>
					</div>
				</div>
				<div class="row md:mt-8 flex justify-between text-lg">
					<div class="col-sm-3 pr-0">
					</div>
					<div class="col-md-6 flex justify-end">
						<div class="my-auto">
							<p class="my-auto">Solicitar Factura</p>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</div>
</div>
@endsection