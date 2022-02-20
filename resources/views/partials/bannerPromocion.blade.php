
<link rel="stylesheet" href="<?php echo asset('css/partials/bannerPromocion.css')?>" type="text/css">

<div class=" bg-banner-promo relative text-white h-[104px] md:h-[72px] ">
    <div class="container md:flex flex-col md:flex-row relative  m-auto items-center h-[104px] md:h-[72px] text-sm md:text-lg md:justify-between">
        <p class="w-8/12 md:w-full m-auto text-center title-banner">Cursos de adobe affter effects a 50% de descuento</p>
        <div class="countdown-container inline-flex md:flex w-1/2 md:w-full justify-center">
            <div class="flex">
                <p class="big-text" id="days">0</p><span>d: </span>
            </div>
            <div class="flex ml-1">
                <p class="big-text" id="hours">0</p><span>h: </span>
            </div>
            <div class="flex ml-1">
                <p class="big-text" id="mins">0</p><span>m: </span>
            </div>
            <div class=" flex ml-1">
                <p class="big-text" id="seconds">0</p> <span>s</span>
            </div>
        </div>
        <p class="w-1/2 md:w-full inline text-center">Por tiempo limitado</p>
    </div>
    <a href="" class="absolute icon-close">X</a>
</div>

<script src="<?php echo asset('js/bannerPromocion.js')?>" defer></script>