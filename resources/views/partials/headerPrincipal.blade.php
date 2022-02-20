<link rel="stylesheet" href="<?php echo asset('css/partials/header.css')?>" type="text/css">
<div>
    <header class="header">
        <nav class="navbar navbar-expand-lg fixed-top py-3 desktop-navbar">
            <div class="container cd-as justify-center md:justify-left"><a href="#" class="navbar-brand  font-weight-bold"><img src="{{url('/img/datux-logo.svg')}}" alt=""><img src="/img/cart-icon.svg" class="md:hidden absolute cart-icon"></a>
                <div id="navbarSupportedContent" class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item "><button class="nav-link link-curso font-weight-bold" id="menu-cursos">Cursos </button> </li>
                        <li class="nav-item pl-10"><a href="#" class="nav-link  font-weight-bold "id="menu-live">Datux Live</a></li>
                        <li class="nav-item pl-10"><a href="#" class="nav-link  font-weight-bold "id="menu-comunidad">Comunidad</a></li>
                        <li class="nav-item pl-10"><a href="#" class="nav-link  font-weight-bold " id="buscador"><img src="{{url('/img/icon-search.svg')}}" alt=""></a></li>
                        <li class="nav-item pl-10"><a  onclick="openModal()" href="#" class="nav-link  font-weight-bold ">Ingresar</a></li>
                        <li class="nav-item pl-10"><a onclick="openModal()" href="#" class="nav-link  font-weight-bold btn btn-cuenta ">Crear Cuenta</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <nav class="navbar py-3 mobile-navbar bg-main justify-center" id="navbarmobile">
            <img src="{{url('/img/datux-logo.svg')}}" alt="">
        </nav>
        	<!-- Datux Live Menu-->
            <div class="container-fluid datuxmenu absolute fade-in  z-10" id="datuxmenu-1">
                <div class="container">
                    <div class="row pt-5 pb-5">
                        <div class="col-md-4">
                             <ul>
                                <li href="">Marketing</li> 
                                <li href="">Diseno y creatividad</li> 
                                <li href="">Produccion y video</li> 
                                <li href="">Tecnologia y digital</li> 
                                <li href="">Desarrollo Personal</li> 
                                <li href="">Recursos Hunanos</li> 
                             </ul>
                        </div>
                        <div class="col-md-4">
                            <ul>
                                <li href="">Recursos Hunanos</li> 
                                <li href="">Negocios</li> 
                                <li href="">Microsoft</li> 
                                <li href="">Fotografia</li> 
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <img src="/img/menu1.png" width="50%">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid datuxmenu absolute fade-in  z-10" id="datuxmenu-2">
                <div class="container">
                    <div class="row pt-5 pb-5">
                        <div class="col-md-4">
                           <ul>
                            <li href="">Marketing</li>
                            <li href="">Diseno y creatividad</li>
                            <li href="">Produccion y video</li>
                            <li href="">Tecnologia y digital</li>
                            <li href="">Desarrollo Personal<li> 
                            <li href="">Recursos Hunanos</li> 
                           </ul>
                        </div>
                        <div class="col-md-4">
                             <ul>
                                <li href="">Recursos Hunanos</li> 
                                <li href="">Negocios</li> 
                                <li href="">Microsoft</li> 
                                <li href="">Fotografia</li> 
                             </ul>
                        </div>
                        <div class="col-md-4">
                            <img src="/img/menu-comunidad.png" width="50%">
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid datuxmenu absolute fade-in  z-10" id="datuxmenu-3">
                <div class="container">
                    <div class="row pt-5 pb-5">
                        <div class="col-md-4">
                             <ul>
                                <li href="">Marketing</li> 
                                <li href="">Diseno y creatividad</li> 
                                <li href="">Produccion y video</li> 
                                <li href="">Tecnologia y digital</li> 
                                <li href="">Desarrollo Personal</li> 
                                <li href="">Recursos Hunanos</li> 
                             </ul>
                        </div>
                        <div class="col-md-4">
                             <ul>
                                <li href="">Recursos Hunanos</li> 
                                <li href="">Negocios</li> 
                                <li href="">Microsoft</li> 
                                <li href="">Fotografia</li> 
                             </ul>
                        </div>
                        <div class="col-md-4">
                            <img src="/img/menu1.png" width="50%">
                        </div>
                    </div>
                </div>
            </div>   
            <div class="container-fluid datuxmenu absolute fade-in  z-10" id="datuxmenu-4">
                <div class="container">
                    <input type="text" placeholder="Buscar en Datux" class="input-form">
                    <div class="results">
                        <p class="mt-5">Adobe Premiere Pro CC – Essentials Training Course || <span class="cursos">Cursos</span></p>
                        <p class="mt-5">Adobe Premiere Pro CC – Essentials Training Course || <span class="cursos">Cursos</span></p>
                        <p class="mt-5">Adobe Premiere Pro CC – Essentials Training Course || <span class="cursos">Cursos</span></p>
                    </div>
                </div>
            </div>           
    </header>
    <div class="register">
        <div class="modal-overlay" onclick="closeModal()" ></div>
        <div class="modal-card">
          <div class="modal-body flex text-black">
            <div class="w-1/2"> <img src="/img/login.jpg" alt=""></div>
            <div class="w-1/2 text-black md:py-20 md:px-5">
                <p class="col-md-10 m-auto text-center text-black">
                     Regístrate en la comunidad y consigue un código exclusivo para empezar a aprender con tu primer curso.</p>
                <div class="socials text-black text-center">
                    <div class="">
                        <div class="col-md-10 m-auto">
                          <a class="btn flex btn-socials" href="/users/googleauth" role="button" style="text-transform:none">
                            <img width="20px" class="img-fit" style="margin-bottom:3px; margin-right:5px" alt="Google sign-in" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/53/Google_%22G%22_Logo.svg/512px-Google_%22G%22_Logo.svg.png" />
                            Login with Google
                          </a>
                        </div>
                    </div>   
                    <div class="">
                        <div class="col-md-10 mt-3 m-auto">
                          <a class="btn flex btn-socials btn-facebook" href="/users/googleauth" role="button" style="text-transform:none">
                            <svg width="20px" height="20px" viewBox="0 0 256 256" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid">
                                <g>
                                    <path d="M241.871,256.001 C249.673,256.001 256,249.675 256,241.872 L256,14.129 C256,6.325 249.673,0 241.871,0 L14.129,0 C6.324,0 0,6.325 0,14.129 L0,241.872 C0,249.675 6.324,256.001 14.129,256.001 L241.871,256.001" fill="#395185"></path>
                                    <path d="M176.635,256.001 L176.635,156.864 L209.912,156.864 L214.894,118.229 L176.635,118.229 L176.635,93.561 C176.635,82.375 179.742,74.752 195.783,74.752 L216.242,74.743 L216.242,40.188 C212.702,39.717 200.558,38.665 186.43,38.665 C156.932,38.665 136.738,56.67 136.738,89.736 L136.738,118.229 L103.376,118.229 L103.376,156.864 L136.738,156.864 L136.738,256.001 L176.635,256.001" fill="#FFFFFF"></path>
                                </g>
                            </svg>
                            Login with Facebook
                          </a>
                        </div>
                    </div>  
                    <div class="">
                        <div class="col-md-10 mt-3 m-auto">
                          <a class="btn flex btn-socials btn-apple" href="/users/googleauth" role="button" style="text-transform:none">
                            <svg width="20px" fill="#ffffff" height="20px" viewBox="0 0 256 315" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" preserveAspectRatio="xMidYMid">
                                <g>
                                    <path d="M213.803394,167.030943 C214.2452,214.609646 255.542482,230.442639 256,230.644727 C255.650812,231.761357 249.401383,253.208293 234.24263,275.361446 C221.138555,294.513969 207.538253,313.596333 186.113759,313.991545 C165.062051,314.379442 158.292752,301.507828 134.22469,301.507828 C110.163898,301.507828 102.642899,313.596301 82.7151126,314.379442 C62.0350407,315.16201 46.2873831,293.668525 33.0744079,274.586162 C6.07529317,235.552544 -14.5576169,164.286328 13.147166,116.18047 C26.9103111,92.2909053 51.5060917,77.1630356 78.2026125,76.7751096 C98.5099145,76.3877456 117.677594,90.4371851 130.091705,90.4371851 C142.497945,90.4371851 165.790755,73.5415029 190.277627,76.0228474 C200.528668,76.4495055 229.303509,80.1636878 247.780625,107.209389 C246.291825,108.132333 213.44635,127.253405 213.803394,167.030988 M174.239142,50.1987033 C185.218331,36.9088319 192.607958,18.4081019 190.591988,0 C174.766312,0.636050225 155.629514,10.5457909 144.278109,23.8283506 C134.10507,35.5906758 125.195775,54.4170275 127.599657,72.4607932 C145.239231,73.8255433 163.259413,63.4970262 174.239142,50.1987249" fill="#000000"></path>
                                </g>
                            </svg>
                            Login with Apple
                          </a>
                        </div>
                    </div>  
                                     o continua con        
                                     <div class="form-content">
                                        <input type="email" placeholder="Correo eletrónico" class="input-modal">                         
                                        <input type="password" placeholder="Contraseña" class="input-modal">                         
                                        <div class="btn registrarse-modal">
                                           Regístrarme
                                        </div>
                                     </div>
                                     <small class="font-11">Al hacer clic en "Crear cuenta" certifico que tengo 16 años o más y acepto las Condiciones de Uso, la Política de Privacidad, la Política de Cookies y recibir novedades y promociones.</small>
                </div>
            </div>
          </div>
        </div>
      </div>
</div>
<script>
    var item1 = document.getElementById('menu-cursos').addEventListener("mouseover", function( event ) {
        document.getElementById('datuxmenu-1').style.display='block'
        document.getElementById('datuxmenu-2').style.display='none'
        document.getElementById('datuxmenu-3').style.display='none'
    });
    var item1 =  document.getElementById('datuxmenu-1').addEventListener('mouseleave', e => {
        document.getElementById('datuxmenu-1').style.display='none'
});
    var item2 = document.getElementById('menu-live').addEventListener("mouseover", function( event ) {
        document.getElementById('datuxmenu-2').style.display='block'
        document.getElementById('datuxmenu-1').style.display='none'
        document.getElementById('datuxmenu-3').style.display='none'
    });
    var item2 =  document.getElementById('datuxmenu-2').addEventListener('mouseleave', e => {
        document.getElementById('datuxmenu-2').style.display='none'
});
var item2 = document.getElementById('menu-comunidad').addEventListener("mouseover", function( event ) {
        document.getElementById('datuxmenu-3').style.display='block'
        document.getElementById('datuxmenu-1').style.display='none'
        document.getElementById('datuxmenu-2').style.display='none'

    });
    var item2 =  document.getElementById('datuxmenu-3').addEventListener('mouseleave', e => {
        document.getElementById('datuxmenu-3').style.display='none'
});
var item1 = document.getElementById('buscador').addEventListener("click", function( event ) {
        document.getElementById('datuxmenu-1').style.display='none'
        document.getElementById('datuxmenu-2').style.display='none'
        document.getElementById('datuxmenu-3').style.display='none'
        document.getElementById('datuxmenu-4').style.display='block'
    });
    var item4 =  document.getElementById('datuxmenu-4').addEventListener('mouseleave', e => {
        document.getElementById('datuxmenu-4').style.display='none'
});    
    $(function () {
    $(window).on('scroll', function () {
        if ( $(window).scrollTop() > 10  ) {
            $('.navbar').addClass('active');
        } else {
            $('.navbar').removeClass('active');
        }
    });
});

</script>
<script>
    window.onscroll = function() {myFunction()};
    
    var navbar = document.getElementById("navbarmobile");
    var sticky = navbar.offsetTop;
    
    function myFunction() {
      if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
      } else {
        navbar.classList.remove("sticky");
      }
    }
</script>
<script>
function closeModal() {
  document.querySelector(".register").classList.remove("open");
}
function openModal() {
 document.querySelector(".register").classList.add("open");
}

</script>