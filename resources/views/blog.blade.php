@extends('master')
@section('styles')
    <link rel="stylesheet" href="<?php echo asset('css/blog.css')?>" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@2.3.1/dist/css/splide.min.css"
	type="text/css">
@endsection
@section('content')
@include('secondnavbar')
<div class="bg-main">
    <!-- Header Image -->
    <div class="container pt-5">
        <div class="row">
            <div class=" mx-auto">
                <div class="row">
                    <div class="w-11/12 md:w-full m-auto portadabg">
                        <div class="row justify-center">
                            <div class="relative rounded-md md:w-10/12 imgover" style="background:url('/img/comunidad/PORTADA.png');background-position:bottom">
                                <div class=" content-portada absolute">
                                    <h2 class="text-41 md:w-10/12" style="color: #DAE3E5;">iPadOS 14 introduces new designed specifically for
                                        iPad</h2>
                                        <span class="text-light mt-3"><b>enero 24, 2021</b></span>
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

    <!-- Content Section -->
    <div class="container w-11/12 md:w-full">
        <div class="row mt-5">
            <div class=" pt-5 text-light col-md-8 mx-auto text-lg">
                <p>Wineers are recognized for outstanding app design, innovation, ingenuity, and <br>technical
                    achievement</p>
                    <br>
                <p>Apple today named eight app and game developers receiving an Apple Design Award,each one selected
                    for being thoughtful and creative. Apple Design Award winners bring distinctive new ideas to
                    life and demonstrative deep mastery of Apple technology. The apps spring up from developers large
                    and small, in every part of the world, and provide users with new ways of working, creating, and
                    playing.</p><br>
                <p>"Every year, app and game developers demonstrate exceptional craftsmanship and we're honoring the
                    best, "said Ron Okamoto, Apple's vice president of Worldwide Developer Relations. "Receiving an
                    Apple Design Award is a special and laudable accomblishment. Past honorees have made some of the
                    most noteworthy appsa and games of all times. Through their vision, determination, and exacting
                    standards, the winning developers inspire not only their peers in the Apple developer community,
                    but all of us at Apple, too.</p>
                <h4 class="text-28 mt-10 mb-4">Descripcion del curso online</h4>
                <p>Apple today named eight app and game developers receiving an Apple Design Award, each one selected
                    for being thoughtful and creative. Apple Design Award winners bring distinctive new ideas to
                    life and demonstrative deep mastery of Apple technology. The apps spring up from developers large
                    and small, in every part of the world, and provide users with new ways of working, creating, and
                    playing.</p><br>

                <p>"Every year, app and game developers demonstrate exceptional craftsmanship and we're honoring the
                    best, "said Ron Okamoto, Apple's vice president of Worldwide Developer Relations. "Receiving an
                    Apple Design Award is a special and laudable accomblishment. Past honorees have made some of the
                    most noteworthy apps and games of all times. Through their vision, determination, and exacting
                    standards, the winning developers inspire not only their peers in the Apple developer community,
                    but all of us at Apple, too."</p>


                <p>Apple today named eight app and game developers receiving an Apple Design Award,each one selected
                    for being thoughtful and creative. Apple Design Award winners bring distinctive new ideas to
                    life and demonstrative deep mastery of Apple technology. The apps spring up from developers large
                    and small, in every part of the world, and provide users with new ways of working, creating, and
                    playing.</p>
                <p>"Every year, app and game developers demonstrate exceptional craftsmanship and we're honoring the
                    best, "said Ron Okamoto, Apple's vice president of Worldwide Developer Relations. "Receiving an
                    Apple Design Award is a special and laudable accomblishment. Past honorees have made some of the
                    most noteworthy apps and games of all times. Through their vision, determination, and exacting
                    standards, the winning developers inspire not only their peers in the Apple developer community,
                    but all of us at Apple, too."</p>

                <p>People think focus means saying yes to the thing you've got to focus on. But that's not what it
                    means at all.</p>
            </div>
        </div>
    </div>

    <!-- Desc Image -->
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto text-light">
                <img style="border-radius: 10px;" src="/img/blog.jpg" width="100%">
                <figcaption class="mt-3 text-sm">The Apple Design Award trophy, created by the Apple Design team, is a symbol of
                    achievement and excellence.</figcaption>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mt-5">
            <div class=" pt-5 text-light col-md-8 mx-auto">

                <p>Apple today named eight app and game developers receiving an Apple Design Award, each one selected
                    for being thoughtful and creative. Apple Design Award winners bring distinctive new ideas to
                    life and demonstrative deep mastery of Apple technology. The apps spring up from developers large
                    and small, in every part of the world, and provide users with new ways of working, creating, and
                    playing.</p><br>
                <p>"Every year, app and game developers demonstrate exceptional craftsmanship and we're honoring the
                    best, "said Ron Okamoto, Apple's vice president of Worldwide Developer Relations. "Receiving an
                    Apple Design Award is a special and laudable accomblishment. Past honorees have made some of the
                    most noteworthy apps and games of all times. Through their vision, determination, and exacting
                    standards, the winning developers inspire not only their peers in the Apple developer community,
                    but all of us at Apple, too."</p>
                <h3 style="border-left: 4px solid white;" class="pl-4 mt-5 mb-5 md:text-31 italic">People think focus means saying yes
                        to the thing you've got to focus on. But that's not what it means at all.</h3>
            </div>
        </div>
    </div>

    <!-- img section -->
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 p-0 m-0">
                <img src="/img/pared.jpg" width="100%" height="500px;">
            </div>
        </div>
    </div>

    <!--  -->
    <div class="container">
        <div class="row mt-5">
            <div class=" pt-5 text-light col-md-8 mx-auto text-lg">
                <p>Apple today named eight app and game developers receiving an Apple Design Award,each one selected
                    for being thoughtful and creative. Apple Design Award winners bring distinctive new ideas to
                    life and demonstrative deep mastery of Apple technology. The apps spring up from developers large
                    and small, in every part of the world, and provide users with new ways of working, creating, and
                    playing.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 mx-auto d-flex justify-content-end pb-2" style="border-bottom: 2px solid lightgrey;">
                <div class="mr-lg-5">
                    <a class="text-lg mr-20" style="color: #DAE3E5" href="">Compartir</a>
                </div>
                <div class="social" style="color: #DAE3E5;">
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-twitter"></i>
                    <i class="fab fa-linkedin"></i>
                    <i class="fa fa-share-alt"></i>
                </div>
            </div>
        </div>
    </div>

    <!-- answer section -->
    <div class="container">
        <div class="row">
            <div class="col-md-10 mx-auto">
                <div class="row">
                    <div class="col-md-10 mx-auto text-light pt-4 pb-3">
                        <h3 class="text-28">Deja una respuesta</h3>
                        <p class="mt-[31px]">Su direccon de correo electronico no sera publicada. Los campos obligatorios estan marcados*
                        </p>
                    </div>
                    <div class="col-md-10 mx-auto">
                        <div class="row text-light">
                            <div class="col-md-6">
                                <form>
                                    <input type="text" class="form-control inputs" name=""
                                        placeholder="Nombre completo*">
                                </form>
                            </div>
                            <div class="col-md-6">
                                <form>
                                    <input type="text" class="form-control inputs" name=""
                                        placeholder="Correo electronico*">
                                </form>
                            </div>
                            <div class="col-md-12 pt-5">
                                <form>
                                    <p style="color:grey;">Escribe tu comentario aqui...*</p>
                                    <textarea class="inputs" style="width: 100%;"></textarea>
                                </form>
                                <div class="d-flex mt-4">
                                    <span
                                        style="width: 15px; height: 15px; border-radius: 50%; border:2px solid white; background-color: blue;"></span><span
                                        style="color: grey; font-size: 12px;">&nbsp;&nbsp;Guarde mi nombre, correo
                                        electronico y sitio web en naegador para la proxima vez que comente.</span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Course slider -->
    <div class="container md:mt-[75px]">
        <div class="col-md-10 mx-auto">
            <div class="col-md-10 mx-auto">
                <h3 class="text-28">Artículos recientes</h3>
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