@extends('master')
@section('styles')
<link rel="stylesheet" href="<?php echo asset('css/cursos.css')?>" type="text/css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@2.3.1/dist/css/splide.min.css"
	type="text/css">
@endsection
@section('content')
<!-- imgslide -->

<div class=" md:mb-5 md:pb-5 md:pt-5 mt-5 card-slider" style="">
	<div class="row mx-auto my-auto">
		<div id="splide">
			<div class="splide__track" id="splide-track">
				<ul class="splide__list">
					<li class="splide__slide">
						<img class="mb-4 slider-cursos" src="/img/slider-1-cursos.png" width="100%">
					</li>
					<li class="splide__slide">
						<img class="mb-4 slider-cursos" src="/img/slider-1-cursos.png" width="100%">
					</li>
					<li class="splide__slide">
						<img class="mb-4 slider-cursos" src="/img/slider-1-cursos.png" width="100%">
					</li>
					<li class="splide__slide">
						<img class="mb-4 slider-cursos" src="/img/slider-1-cursos.png" width="100%">
					</li>
				</ul> <!-- /.splide__list -->
			</div> <!-- /.splide__track -->
		</div> <!-- /.splide -->
	</div>
</div>

<!-- cursos cards section -->
<div class="container text-light">
	<div class="row mt-4">
		<div class="col-md-3 mt-4 list-cursos" >
			<button style="width: 100%" class="btn btn-outline-secondary mt-2">Todos los cursos Live &nbsp; <i
					class="fa fa-angle-right"></i></button>
			<button style="width: 100%" class="btn btn-outline-secondary mt-2">Categorias &nbsp; <i
					class="fa fa-angle-right"></i></button>
			<button style="width: 100%" class="btn btn-outline-secondary mt-2">Marketin digital &nbsp; <i
					class="fa fa-angle-right"></i></button>
			<button style="width: 100%" class="btn btn-outline-secondary mt-2">Categorias &nbsp; <i
					class="fa fa-angle-right"></i></button>
			<button style="width: 100%" class="btn btn-outline-secondary mt-2">Marketin digital &nbsp; <i
					class="fa fa-angle-right"></i></button>
			<button style="width: 100%" class="btn btn-outline-secondary mt-2">Marketin digital &nbsp; <i
					class="fa fa-angle-right"></i></button>
			<button style="width: 100%" class="btn btn-outline-secondary mt-2">Categorias &nbsp; <i
					class="fa fa-angle-right"></i></button>
			<button style="width: 100%" class="btn btn-outline-secondary mt-2">Marketin digital &nbsp; <i
					class="fa fa-angle-right"></i></button>
		</div>
		<div class="col-md-9">
			<div class="row">
				<div class="col-md-12 justify-content-between filters-head hidden md:flex">
					<h2>Todos los cursos Live</h2>
					<p>Ordenar por (1)&nbsp;<i class="fa fa-angle-down"></i></p>
				</div>
			</div>
			<div class="row" data-aos="fade-up">
				<div class="col-md-4">
					<div class="card main1 mb-md-3 mt-md-3" style="width: 100%;">
						<img class="card-img-top" src="/img/cursos.png" width="100%" height="" alt="Card image cap">
						<i style="" class="fa fa-heart"></i>
						<div class="card-body pb-0">
							<span style="" class="otherspan card-title">
								nuevo
							</span>
							<p class="card-text mb-1 text-light">Branding estrategico para marcas de emprendiniento</p>
							<span class="span-autor" style="color: #617289;">Por Mike Rom Card</span>
							<div class="prices flex">
								<p class="precio-normal text-base w-1/3">S/38.99</p>
								<p class="precio-desc text-sm line-through w-2/3">S/ 149.90</p>
							</div>

						</div>
						<div style="" class="card-footer twobtn btn-group pr-0 pl-0 pb-0 m-0">
							<button type="button" style="" class="btn agrbtn btn-primary mb-0"><i
									class="fa fa-shopping-cart"></i> Agregar </button>
							<button type="button" style="" class="btn combtn btn-primary">Comprar ahora</button>

						</div>
					</div>
				</div>
				<div class="col-md-4">
					<div class="card main1 mb-md-3 mt-md-3" style="width: 100%;">
						<img class="card-img-top" src="/img/cursos.png" width="100%" height="" alt="Card image cap">
						<i style="" class="fa fa-heart"></i>
						<div class="card-body pb-0">
							<span style="" class="otherspan card-title">
								nuevo
							</span>
							<p class="card-text mb-1 text-light">Branding estrategico para marcas de emprendiniento</p>
							<span class="span-autor" style="color: #617289;">Por Mike Rom Card</span>
							<div class="prices flex">
								<p class="precio-normal text-base w-1/3">S/38.99</p>
								<p class="precio-desc text-sm line-through w-2/3">S/ 149.90</p>
							</div>

						</div>
						<div style="" class="card-footer twobtn btn-group pr-0 pl-0 pb-0 m-0">
							<button type="button" style="" class="btn agrbtn btn-primary mb-0"><i
									class="fa fa-shopping-cart"></i> Agregar </button>
							<button type="button" style="" class="btn combtn btn-primary">Comprar ahora</button>

						</div>
					</div>
				</div>
				<div class="col-md-4" data-aos="fade-up">
					<div class="card main1 mb-md-3 mt-md-3" style="width: 100%;">
						<img class="card-img-top" src="/img/cursos.png" width="100%" height="" alt="Card image cap">
						<i style="" class="fa fa-heart"></i>
						<div class="card-body pb-0">
							<span style="" class="otherspan card-title">
								nuevo
							</span>
							<p class="card-text mb-1 text-light">Branding estrategico para marcas de emprendiniento</p>
							<span class="span-autor" style="color: #617289;">Por Mike Rom Card</span>
							<div class="prices flex">
								<p class="precio-normal text-base w-1/3">S/38.99</p>
								<p class="precio-desc text-sm line-through w-2/3">S/ 149.90</p>
							</div>

						</div>
						<div style="" class="card-footer twobtn btn-group pr-0 pl-0 pb-0 m-0">
							<button type="button" style="" class="btn agrbtn btn-primary mb-0"><i
									class="fa fa-shopping-cart"></i> Agregar </button>
							<button type="button" style="" class="btn combtn btn-primary">Comprar ahora</button>

						</div>
					</div>
				</div>
				<div class="col-md-4 " data-aos="fade-up">
					<div class="card main1 mb-md-3 mt-md-3" style="width: 100%;">
						<img class="card-img-top" src="/img/cursos.png" width="100%" height="" alt="Card image cap">
						<i style="" class="fa fa-heart"></i>
						<div class="card-body pb-0">
							<span style="" class="otherspan card-title">
								nuevo
							</span>
							<p class="card-text mb-1 text-light">Branding estrategico para marcas de emprendiniento</p>
							<span class="span-autor" style="color: #617289;">Por Mike Rom Card</span>
							<div class="prices flex">
								<p class="precio-normal text-base w-1/3">S/38.99</p>
								<p class="precio-desc text-sm line-through w-2/3">S/ 149.90</p>
							</div>

						</div>
						<div style="" class="card-footer twobtn btn-group pr-0 pl-0 pb-0 m-0">
							<button type="button" style="" class="btn agrbtn btn-primary mb-0"><i
									class="fa fa-shopping-cart"></i> Agregar </button>
							<button type="button" style="" class="btn combtn btn-primary">Comprar ahora</button>

						</div>
					</div>
				</div>
				<div class="col-md-4 " data-aos="fade-up">
					<div class="card main1 mb-md-3 mt-md-3" style="width: 100%;">
						<img class="card-img-top" src="/img/cursos.png" width="100%" height="" alt="Card image cap">
						<i style="" class="fa fa-heart"></i>
						<div class="card-body pb-0">
							<span style="" class="otherspan card-title">
								nuevo
							</span>
							<p class="card-text mb-1 text-light">Branding estrategico para marcas de emprendiniento</p>
							<span class="span-autor" style="color: #617289;">Por Mike Rom Card</span>
							<div class="prices flex">
								<p class="precio-normal text-base w-1/3">S/38.99</p>
								<p class="precio-desc text-sm line-through w-2/3">S/ 149.90</p>
							</div>

						</div>
						<div style="" class="card-footer twobtn btn-group pr-0 pl-0 pb-0 m-0">
							<button type="button" style="" class="btn agrbtn btn-primary mb-0"><i
									class="fa fa-shopping-cart"></i> Agregar </button>
							<button type="button" style="" class="btn combtn btn-primary">Comprar ahora</button>

						</div>
					</div>
				</div>
				<div class="col-md-4 " data-aos="fade-up">
					<div class="card main1 mb-md-3 mt-md-3" style="width: 100%;">
						<img class="card-img-top" src="/img/cursos.png" width="100%" height="" alt="Card image cap">
						<i style="" class="fa fa-heart"></i>
						<div class="card-body pb-0">
							<span style="" class="otherspan card-title">
								nuevo
							</span>
							<p class="card-text mb-1 text-light">Branding estrategico para marcas de emprendiniento</p>
							<span class="span-autor" style="color: #617289;">Por Mike Rom Card</span>
							<div class="prices flex">
								<p class="precio-normal text-base w-1/3">S/38.99</p>
								<p class="precio-desc text-sm line-through w-2/3">S/ 149.90</p>
							</div>

						</div>
						<div style="" class="card-footer twobtn btn-group pr-0 pl-0 pb-0 m-0">
							<button type="button" style="" class="btn agrbtn btn-primary mb-0"><i
									class="fa fa-shopping-cart"></i> Agregar </button>
							<button type="button" style="" class="btn combtn btn-primary">Comprar ahora</button>

						</div>
					</div>
				</div>
				<div class="col-md-4 " data-aos="fade-up">
					<div class="card main1 mb-md-3 mt-md-3" style="width: 100%;">
						<img class="card-img-top" src="/img/cursos.png" width="100%" height="" alt="Card image cap">
						<i style="" class="fa fa-heart"></i>
						<div class="card-body pb-0">
							<span style="" class="otherspan card-title">
								nuevo
							</span>
							<p class="card-text mb-1 text-light">Branding estrategico para marcas de emprendiniento</p>
							<span class="span-autor" style="color: #617289;">Por Mike Rom Card</span>
							<div class="prices flex">
								<p class="precio-normal text-base w-1/3">S/38.99</p>
								<p class="precio-desc text-sm line-through w-2/3">S/ 149.90</p>
							</div>

						</div>
						<div style="" class="card-footer twobtn btn-group pr-0 pl-0 pb-0 m-0">
							<button type="button" style="" class="btn agrbtn btn-primary mb-0"><i
									class="fa fa-shopping-cart"></i> Agregar </button>
							<button type="button" style="" class="btn combtn btn-primary">Comprar ahora</button>

						</div>
					</div>
				</div>
				<div class="col-md-4 " data-aos="fade-up">
					<div class="card main1 mb-md-3 mt-md-3" style="width: 100%;">
						<img class="card-img-top" src="/img/cursos.png" width="100%" height="" alt="Card image cap">
						<i style="" class="fa fa-heart"></i>
						<div class="card-body pb-0">
							<span style="" class="otherspan card-title">
								nuevo
							</span>
							<p class="card-text mb-1 text-light">Branding estrategico para marcas de emprendiniento</p>
							<span class="span-autor" style="color: #617289;">Por Mike Rom Card</span>
							<div class="prices flex">
								<p class="precio-normal text-base w-1/3">S/38.99</p>
								<p class="precio-desc text-sm line-through w-2/3">S/ 149.90</p>
							</div>
						</div>
						<div style="" class="card-footer twobtn btn-group pr-0 pl-0 pb-0 m-0">
							<button type="button" style="" class="btn agrbtn btn-primary mb-0"><i
									class="fa fa-shopping-cart"></i> Agregar </button>
							<button type="button" style="" class="btn combtn btn-primary">Comprar ahora</button>

						</div>
					</div>
				</div>
				<div class="col-md-4 " data-aos="fade-up">
					<div class="card main1 mb-md-3 mt-md-3" style="width: 100%;">
						<img class="card-img-top" src="/img/cursos.png" width="100%" height="" alt="Card image cap">
						<i style="" class="fa fa-heart"></i>
						<div class="card-body pb-0">
							<span style="" class="otherspan card-title">
								nuevo
							</span>
							<p class="card-text mb-1 text-light">Branding estrategico para marcas de emprendiniento</p>
							<span class="span-autor" style="color: #617289;">Por Mike Rom Card</span>
							<div class="prices flex">
								<p class="precio-normal text-base w-1/3">S/38.99</p>
								<p class="precio-desc text-sm line-through w-2/3">S/ 149.90</p>
							</div>

						</div>
						<div style="" class="card-footer twobtn btn-group pr-0 pl-0 pb-0 m-0">
							<button type="button" style="" class="btn agrbtn btn-primary mb-0"><i
									class="fa fa-shopping-cart"></i> Agregar </button>
							<button type="button" style="" class="btn combtn btn-primary">Comprar ahora</button>

						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 mx-auto d-flex justify-content-center mt-5 mb-5 text-center pagination">
					<i class="fa fa-angle-left fa-2x p-3"></i>&nbsp; <span class="my-auto">&nbsp;1 de
						20&nbsp;</span>&nbsp; <i class="fa fa-angle-right fa-2x p-3"></i>
				</div>
			</div>
		</div>

	</div>
</div>
@endsection
@section('scripts')
<script>
	document.addEventListener('DOMContentLoaded', function () {
		var splide = new Splide('#splide', {
			type: 'loop',
			padding: '6rem',
			perPage:1,
			autoplay: true,
			interval: 3000, // How long to display each slide
			breakpoints: {
    280: {
      perPage: 1,
    },
		}}).mount();
	})
</script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@2.3.1/dist/js/splide.min.js"></script>
@endsection