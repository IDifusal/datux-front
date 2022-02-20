@extends('master')
@section('styles')
<link rel="stylesheet" href="<?php echo asset('css/editar.css')?>" type="text/css">
@endsection
@section('content')
<!-- name -->
<div class="container mt-[56px] hidden md:block">
    <div class="row">
        <div class="col-12 name">
            <a href=""><i class="fa fa-angle-left"></i>&nbsp;Volver</a>
        </div>
    </div>
</div>

<!-- profile Edit Form-->
<div class="container mb-5 bg-main pt-5 md:pt-0">
    <div class="text-center">
        <img src="/img/profile.png" class="m-auto">
    </div>
    <div class="row px-3 md:px-0">
        <div class="col-md-8 mx-auto">
            <form class="">
                <div class="row mt-lg-5">
                    <div class="col-md-12">
                        <h5 class="text-light text-21">Editar Perfil</h5>
                    </div>
                    <div class="col-md-6">

                        <label class="form-control-label mt-2">Nombre</label>
                        <input type="text" name="" class="form-control">
                    </div>
                    <div class="col-md-6 ">

                        <label class="form-control-label mt-2">Apellido</label>
                        <input type="text" name="" class="form-control">
                    </div>
                    <div class="col-md-6">

                        <label class="form-control-label mt-2">Ciudad</label>
                        <input type="text" name="" class="form-control">
                    </div>
                    <div class="col-md-6 ">

                        <label class="form-control-label mt-2">Pais</label>
                        <select class="form-control selects">
                            <option>Peru</option>
                            <option>Pakistan</option>
                            <option>Peru</option>
                        </select>
                    </div>
                    <div class="col-md-6 ">

                        <label class="form-control-label mt-2">Genero</label>
                        <select class="form-control selects">
                            <option>Peru</option>
                            <option>Pakistan</option>
                            <option>Peru</option>
                        </select>
                    </div>
                    <div class="col-md-6">

                        <label class="form-control-label mt-2">Fecha de nacimiento</label>
                        <input type="date" name="" class="form-control">
                    </div>
                    <div class="col-md-6">

                        <label class="form-control-label mt-2">nombre de usuario</label>
                        <input type="text" name="" class="form-control">
                    </div>
                    <div class="col-md-6">

                    </div>
                    <div class="col-md-6">

                        <label class="form-control-label mt-2">Celular</label>
                        <input type="text" name="" class="form-control">
                    </div>
                    <div class="col-md-6 ">

                        <label class="form-control-label mt-2">Celular 2</label>
                        <input type="text" name="" class="form-control">
                    </div>
                    <div class="col-md-6 form-inline d-flex justify-content-between">

                        <label class="form-control-label mt-2"><i
                                class="fab fa-facebook"></i>&nbsp;facebook.com/</label>
                        <input type="text" name="" class="form-control mt-2">
                    </div>
                    <div class="col-md-6 form-inline d-flex justify-content-between">

                        <label class="form-control-label mt-2"><i
                                class="fab fa-instagram"></i>&nbsp;instagram.com/</label>
                        <input type="text" name="" class="form-control mt-2">
                    </div>
                    <div class="col-md-6 form-inline d-flex justify-content-between">

                        <label class="form-control-label mt-2"><i class="fab fa-twitter"></i>&nbsp;twitter.com/</label>
                        <input type="text" name="" class="form-control mt-2">
                    </div>
                    <div class="col-md-6 form-inline d-flex justify-content-between">

                        <label class="form-control-label mt-2"><i
                                class="fab fa-linkedin"></i>&nbsp;linkedin.com/</label>
                        <input type="text" name="" class="form-control mt-2">
                    </div>
                    <div class="col-md-6 ">

                        <label class="form-control-label mt-3">Contrasena nueva</label>
                        <input type="password" name="" class="form-control"><span toggle="#password-field"
                            class="fa fa-fw fa-eye field-icon toggle-password"></span>
                        <span class="text-light">Si no quires cambiar tu contrasena deja esto en blanco</span>
                    </div>
                    <div class="col-md-6">

                        <label class="form-control-label mt-3">Repitir Controsena</label>
                        <input type="password" name="" class="form-control"><span toggle="#password-field"
                            class="fa fa-fw fa-eye field-icon toggle-password"></span>
                    </div>
                    <div class="col-md-12 mt-4 d-flex justify-content-center">
                        <button class="btn btn-danger pt-3 pb-3 pr-5 pl-5 profilebtn">
                            <h6 class="mb-0">Guardar Cambios</h6>
                        </button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection