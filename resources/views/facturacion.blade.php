@extends('master')
@section('styles')
<link rel="stylesheet" href="<?php echo asset('css/facturacion.css')?>" type="text/css">
@endsection
@section('content')
<div class="bg-main md:pb-[150px]">
    <!-- name -->
<div class="container md:pt-[100px] hidden md:block">
    <div class="row">
        <div class="col-12 name">
            <a href=""><i class="fa fa-angle-left"></i>&nbsp;Volver</a>
        </div>
    </div>
</div>

<!-- Datos form -->
<div class="container">
    <div class="row">
        <div class="col-md-10 mx-auto">
            <div class="row mt-[55px] md:mt-[59px] mb-3 md:mb-5">
                <div class="col-md-12 text-light">
                    <h4 class="text-21">DATOS DE FACTURACION</h4>
                    <p>Estos son tus datos de facturacion con los que podras solicitar la factura</p>
                </div>
            </div>

            <form>
                <div class="row">
                    <div class="col-md-8">
                        <label class="form-control-label mt-2">Nombre*</label>
                        <input type="text" name="" class="form-control p-4">
                    </div>
                    <div class="col-md-4">
                        <label class="form-control-label mt-2">Identificador fiscal*</label>
                        <input type="text" name="" class="form-control p-4">
                    </div>
                    <div class="col-md-8">
                        <label class="form-control-label mt-2">Direccion*</label>
                        <input type="text" name="" class="form-control p-4">
                    </div>
                    <div class="col-md-4">
                        <label class="form-control-label mt-2">Ciudad*</label>
                        <input type="text" name="" class="form-control p-4">
                    </div>
                    <div class="col-md-4">
                        <label class="form-control-label mt-2">Código Postal*</label>
                        <input type="text" name="" class="form-control p-4">
                    </div>
                    <div class="col-md-4">
                        <label class="form-control-label mt-2">Pais*</label>
                        <select class="form-control selects p-4">
                            <option selected>Peru</option>
                            <option>Pakistan</option>
                            <option>Peru</option>
                        </select>
                    </div>
                    <div class="col-md-4 mt-2 mb-20 md:mb-0">
                        <button style="background-color: #0157D2;border:none;" class="btn btn-info mt-4 pb-2"><i
                                class="fa fa-save fa-2x"></i>&nbsp; <b><a class="text-white" href="enviada.html">Guardar
                                    datos de facturacion</a></b></button>
                    </div>

                </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection