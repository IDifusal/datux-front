@extends('master')
@section('styles')
    <link rel="stylesheet" href="<?php echo asset('css/proyectos.css')?>" type="text/css">
@endsection
@section('content')
    <div class="bg-main">

<!-- Main Message Section -->
<div class="container-comunidad text-light">
    <div class="row justify-between">
        <div class="col-md-8 rightsec">
            <h1 class="text-41 md:mb-7 mt-[36px] md:mt-0 pb-[22px] md:pb-0">Mi proyecto</h1>
            <form>
                <input type="text" class="form-control p-4" placeholder="Mi proyecto publico" name="">
                <p class="pb-4 md:pb-0 mt-6 md:mt-8">Escribe un titulo descriptivo y no denasiado largo.</p>
                <textarea class="form-control" rows="10" placeholder="Texto..."></textarea>
                <div class="file text-center p-5 mt-3 mb-5">
                    <img src="/img/upload.png" class="m-auto" width="20%">
                    <h5 class="text-21 md:mb-6">Suelta aqui la imagen, maximo de 10 MB</h5>
                    <div class="progress">
                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="70"
                            aria-valuemin="0" aria-valuemax="100" style="width:70%">
                        </div>
                    </div>
                </div>
                <div class="d-flex justify-content-end md:pb-20"><button style="background-color: #0157D2;border:none;"
                        class="btn btn-info mt-4 pb-2 pr-5 pl-5"><i class="fa fa-save fa-2x"></i>&nbsp; <b><a
                                class="text-white" href="">Guardar</a></b></button></div>
            </form>
        </div>
        <div class="col-md-3 text-center rightdesc">
            <img src="/img/profile.png" width="40%" class="m-auto">
            <h4 class="text-light text-[23px]" >iamer145</h4>
            <p class="text-lg">Se unio en abril de 2016</p>
            <h4 class="mt-5 mb-4 text-[23px] text-left">DETALLES</h4>
            <div class="content pb-10 md:pb-0 ">
                <p class="text-left text-base text-[#778AA3]">Recuerda: Deberas agregar el proceso creativo y resultado final de tu
                    proyecto. Podras editario y guardario las veces que creas necesario. Si ya no tienes mas cambios, no
                    dejes de solicitar feedback a nuestros mentores para aprobar tu proyecto.</p><br>
                <p class="text-left text-base md:mt-[36px]  text-[#778AA3]">Mi Proyecto del curso: Diseno de sets en 3D para productos.</p>
            </div>
        </div>
    </div>
</div>
    </div>
@endsection