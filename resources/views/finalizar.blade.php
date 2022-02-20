@extends('master')
@section('styles')
    <link rel="stylesheet" href="<?php echo asset('css/finalizar.css')?>" type="text/css">
@endsection
@section('content')
<div class="bg-main">
    <!-- tophead -->
    <div class="container-fluid md:pt-[72px]">
        <div class="row">
            <div class="col-md-12 text-right tophead p-3">
                <div class="container">
                    <h3 class="text-light"><i class="fa fa-lock"></i> &nbsp;Pago 100% seguro</h3>
                </div>
            </div>
        </div>
    </div>

    <!-- Two main Sections -->
    <div class="container mt-5">
        <div class="row justify-between">
            <div class="col-md-6 text-light">
                <div class="d-flex justify-content-between text-[23px]">
                    <h3 class="">Total:</h3>
                    <div class="flex flex-row "><p class="text-[#778AA3] line-through">S/127.92 &nbsp; <p> <span style="color:#CC225F;">S/87.92</span></div>
                </div>
                <div class="d-flex justify-content-between text-lg">
                    <p>¿Tienes un codigo de descuento?</p>
                    <h6 style="color:#778AA3;">LASDA343cXw</h6>

                </div>
                <div class="cursos-carrito">
                    <div class="row p-3" style="border-top: 1px solid #242D3E;">
                        <div class="col-md-2">
                            <div class="img-curso-carrito" style="background:url(/img/2.png)"></div>
                        </div>
                        <div class="col-md-10 pl-6">
                            <div class="d-flex justify-content-between">
                                <p>Introduccion a la creatividad <br>publicitaria con Humberto Polar</p>
                                <i class="fa fa-times"></i>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="">
                                    <p class="text-xs text-[#778AA3] my-2">Por Humberto Polar</p>
                                    <span style="color: #9C2456;">75% Dto.</span><strike>S/214.16</strike>
                                </div>
                                <h4 class="text-21">S/55.99</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row p-3" style="border-top: 1px solid #242D3E;">
                        <div class="col-md-2">
                            <div class="img-curso-carrito" style="background:url(/img/2.png)"></div>
                        </div>
                        <div class="col-md-10 pl-6">
                            <div class="d-flex justify-content-between">
                                <p>Introduccion a la creatividad <br>publicitaria con Humberto Polar</p>
                                <i class="fa fa-times"></i>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="">
                                    <p class="text-xs text-[#778AA3] my-2">Por Humberto Polar</p>
                                    <span style="color: #9C2456;">75% Dto.</span><strike>S/214.16</strike>
                                </div>
                                <h4 class="text-21">S/55.99</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row p-3" style="border-top: 1px solid #242D3E;border-bottom: 1px solid #242D3E;">
                        <div class="col-md-2">
                            <div class="img-curso-carrito" style="background:url(/img/2.png)"></div>
                        </div>
                        <div class="col-md-10 pl-6">
                            <div class="d-flex justify-content-between">
                                <p>Introduccion a la creatividad <br>publicitaria con Humberto Polar</p>
                                <i class="fa fa-times"></i>
                            </div>
                            <div class="d-flex justify-content-between">
                                <div class="">
                                    <p class="text-xs text-[#778AA3] my-2">Por Humberto Polar</p>
                                    <span style="color: #9C2456;">75% Dto.</span><strike>S/214.16</strike>
                                </div>
                                <h4 class="text-21">S/55.99</h4>
                            </div>
                        </div>
                    </div>                           
                </div>                         

                <div class="row mt-5">
                    <div class="col-md-11 mx-auto gradiv md:rounded-md p-3">
                        <div class="d-flex align-items-center text-light">
                            <h2 class="bodiv">3%</h2>
                            <p class="text-lg ml-7">El 3% de tus compras van dirigidos a fomentar la educacion para mas peruanos. <a
                                        style="color:white;text-decoration: underline;" href="">Mas informacion</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-11 mx-auto mt-6 ">
                        <p style="font-size: 12px;color: #6B7B90;" class="mt-2 mb-3">Compra con todos los medios de pago
                            disponibles.</p>
                        <a href=""><img src="/img/payment.png" width="60%"></a>
                    </div>
                </div>

            </div>
            <div class="col-md-5 text-light ml-lg-5 rightpayment">
                <div class="d-flex justify-content-between p-3">
                    <h3 class="text-28">Confirma tu compra</h3>
                    <div class="dropdown">
                        <button class="btn btn-dark 
						dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            Peru S/.(PEN)
                        </button> 

                        <ul style="background-color: grey;" class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <li class="dropdown-item">
                                <img src="/img/Flag_of_Peru.png" width="20" height="15"> Peru
                            </li>
                            <li class="dropdown-item">
                                <img src="/img/Flag_of_Peru.png" width="20" height="15"> Peru
                            </li>
                            <li class="dropdown-item">
                                <img src="/img/Flag_of_Peru.png" width="20" height="15"> Peru
                            </li>
                            <li class="dropdown-item">
                                <img src="/img/Flag_of_Peru.png" width="20" height="15"> Peru
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mainpay p-3">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex mt-2">
                            <span
                                style="width: 15px; height: 15px; border-radius: 50%; border:2px solid white;margin-top: 7px; background-color: #FF2065;"></span><span
                                style="color: lightgrey; font-size: 20px;">&nbsp;&nbsp;Pagar con tarjeta.</span>
                        </div>
                        <img src="/img/payment1.png" width="20%">
                    </div>
                    <label for="tarjeta" class="payment-details mb-2 mt-4">Numero de tarjeta</label>
                    <input type="text" class="form-control tarjeta" name="tarjeta">
                    <div class="d-flex mt-2 justify-content-between">
                        <label for="tarjeta" class="payment-details mb-2">Fecha de expiracion</label>
                        <p>CVV &nbsp; <i class="fa fa-question"></i></p>
                    </div>
                    <div class="row">
                        <div class="col-6 col-md-4">
                            <select class="form-control">
                                <option>Mes</option>
                                <option>Mes</option>
                                <option>Mes</option>

                            </select>
                        </div>
                        <div class="col-6 col-md-4">
                            <select class="form-control">
                                <option>Ano</option>
                                <option>Mes</option>
                                <option>Mes</option>

                            </select>
                        </div>
                        <div class="col-6 col-md-4 mt-2 md:mt-0">
                            <label for="ccv">CCV    </label>
                            <input type="text" class="form-control" name="ccv">
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-md-12">
                            <button class="btn btn-info p-3 paybtn"><i class="fa fa-shopping-cart"></i> &nbsp; <b>
                                    Comprar ahora</b></button>
                            <div class="d-flex mt-2">
                                <span
                                    style="width: 15px; height: 15px; border-radius: 50%; border:2px solid white;margin-top: 7px; background-color: #FF2065;"></span><span
                                    style="color: lightgrey; font-size: 14px;">&nbsp;&nbsp;Acepto expresamente todos los
                                    <a style="color: white;" href="">Terminos y condiciones</a></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="paypal mt-3 p-3">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex mt-2">
                            <span
                                style="width: 15px; height: 15px; border-radius: 50%; border:2px solid white;margin-top: 7px; background-color: white;"></span><span
                                style="color: lightgrey; font-size: 20px;">&nbsp;&nbsp;Pagar con tarjeta.</span>
                        </div>
                        <img src="/img/payment2.png" width="20%">
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mt-5">
            <div class="col-md-12 mt-5">
                <p style="font-size: 12px; color: #414E62">Cobramos el importe del pedido en US$, puede que haya una
                    minima variacion debido al tipo de cambio usado pro tu banco. Los precios de los productos de
                    Domestike estan sujetos a cambio. En el carrito puedes dejar temporaimente tu compra, en el
                    aparecera el precio mas reciente de cada prodecto. Los codigos de descuento no son acumulables, ni
                    tampoco aplicables junto a otras promociones especiales salvo que se indique lo contrario . Las
                    promocions del tipo 2x1 descuentan los cursos de menor precio.</p>
            </div>
        </div>
    </div>
</div>

@endsection