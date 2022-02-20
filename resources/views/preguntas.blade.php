@extends('master')
@section('styles')
    <link rel="stylesheet" href="<?php echo asset('css/preguntas.css')?>" type="text/css">
@endsection
@section('content')
    <div class="bg-main">
        <div class="container-comunidad pt-[48px] md:py-[200px]">
            <h3 class="text-41 text-center">Preguntas frecuentes</h3>
            <div class="alumno-datux">
                <h4 class="title-preguntas text-21 md:text-[35px] text-[#8A57EF] md:my-10">Soy un alumno de datux</h4>
                <div class="preguntas md:w-10/12">
                    <button class="accordion ">¿Cómo contacto a Crehana?</button>
                    <div class="panel active-1">
                    <p class="mb-4 text-lg">¡Hola! En caso desees ponerte en contacto con nosotros, tienes los siguientes canales para escribirnos: Envíanos un correo con todos los detalles a hola@crehana.com Si eres un estudiante premium, escríbenos a premium@crehana.com Si eres un estudiante de Crehana para Empresas, escríbenos a empresas@crehana.com También podrás ingresar a este formulario y dejarnos todos los detalles de tu consulta. Te recomendamos colocar toda la información necesaria: correo de registro, correo de compra, comprobantes de pago, enlace de producto adquirido, etc. ✨ Si tuvieras alguna consulta adicional, déjanos un mensaje aquí con todos los detalles y te contactaremos lo más pronto posible.</p>
                    </div>

                    <button class="accordion">Necesito asistencia técnica</button>
                    <div class="panel">
                    <p class="mb-4 text-lg">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>

                    <button class="accordion">No puedo reproducir mis clases 🎬</button>
                    <div class="panel">
                    <p class="mb-4 text-lg">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>

                    <button class="accordion">No reproducen mis cursos por Adblock</button>
                    <div class="panel">
                    <p class="mb-4 text-lg">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
                    <button class="accordion">El audio y video no están sincronizados</button>
                    <div class="panel">
                    <p class="mb-4 text-lg">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                    </div>
            </div>
            <div>
                <h4 class="title-preguntas text-[35px] text-[#8A57EF] md:my-10">Soy un alumno de datux</h4>
            </div>
        </div>
    </div>
    </div>
@endsection
@section('scripts')
<script>
    var acc = document.getElementsByClassName("accordion");
    var i;
    
    for (i = 0; i < acc.length; i++) {
      acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.display === "block") {
          panel.style.display = "none";
        } else {
          panel.style.display = "block";
        }
      });
    }
    </script>
@endsection