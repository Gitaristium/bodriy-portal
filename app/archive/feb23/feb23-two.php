 <?
  if (isset($_GET["name"])) {
    $name = $_GET["name"];
    $title = mb_strtoupper($name);
  }
  require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
  $APPLICATION->SetTitle("$title С ПРАЗДНИКОМ!");
  ?>
 <meta name="theme-color" content="#0075ff">
 <meta property="og:title" content="У меня для тебя открытка!">
 <meta property="og:description" content="Переходи по ссылке и смотри">
 <link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/rotate-screen.png">
 <link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/interview/smile.webp">
 <link rel="preload" as="image" href="<?= SITE_DIR ?>archive/feb23/img/logo-black@2x.png">
 <link rel="preload" as="image" href="<?= SITE_DIR ?>archive/feb23/img/logo-white@2x.png">
 <link rel="preload" as="image" href="<?= SITE_DIR ?>archive/feb23/img/silde2star-bg.png">
 <link rel="preload" as="image" href="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-1.svg">
 <link rel="preload" as="image" href="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-2.svg">
 <link rel="preload" as="image" href="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-3.svg">
 <link rel="preload" as="image" href="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-4.svg">
 <link rel="stylesheet" href="<?= SITE_DIR ?>archive/feb23/feb23.css">
 <script type="text/javascript">
if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i.test(
    navigator.userAgent)) {} else {
  location = "/";
}
 </script>
 </head>

 <body class="logo-on">
   <div class="rotate-screen">
     <img class="rotate__img" src="<?= SITE_DIR ?>assets/img/rotate-screen.png" alt="rotate-screen">
     поверни телефон
   </div>
   <div class="wrapper">
     <div class="preload">
       <picture>
         <source srcset="<?= SITE_DIR ?>assets/img/interview/smile.webp" type="image/webp">
         <img class="preload__img" src="<?= SITE_DIR ?>assets/img/interview/smile.png" alt="smile">
       </picture>
       грузим открытку
     </div>
     <picture>
       <source
         srcset="<?= SITE_DIR ?>archive/feb23/img/logo-black@2x.png 2x, <?= SITE_DIR ?>archive/feb23/img/logo-black.png 1x"
         type="image/png">
       <img class="logo-black" src="<?= SITE_DIR ?>archive/feb23/img/logo-black.png">
     </picture>
     <picture>
       <source
         srcset="<?= SITE_DIR ?>archive/feb23/img/logo-white@2x.png 2x, <?= SITE_DIR ?>archive/feb23/img/logo-white.png 1x"" type="
         image/png">
       <img class="logo-white" src="<?= SITE_DIR ?>archive/feb23/img/logo-white.png">
     </picture>

     <div class="modal relative start">
       <div class="modal__inner">
         <div class="modal__slider ">

           <div class="slick-active">
             <div class="modal__item item two">
               <div class="item__img-star-box">
                 <svg viewBox="0 0 762 724" fill="none" xmlns="http://www.w3.org/2000/svg">
                   <path class="svg-shadow"
                     d="M381 16.7126L487.498 247.601L489.139 251.159L493.031 251.62L745.528 281.558L558.85 454.192L555.973 456.852L556.737 460.695L606.291 710.086L384.419 585.892L381 583.978L377.581 585.892L155.709 710.086L205.263 460.695L206.027 456.852L203.15 454.192L16.472 281.558L268.969 251.62L272.86 251.159L274.502 247.601L381 16.7126Z"
                     stroke="black" stroke-width="14" />
                 </svg>



                 <picture>
                   <source srcset="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-1.svg" type="image/svg+xml">
                   <img class="item__img-star-small item__img-star-small-1"
                     src="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-1.png">
                 </picture>
                 <picture>
                   <source srcset="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-1.svg" type="image/svg+xml">
                   <img class="item__img-star-small item__img-star-small-2"
                     src="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-1.png">
                 </picture>
                 <picture>
                   <source srcset="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-4.svg" type="image/svg+xml">
                   <img class="item__img-star-small item__img-star-small-3"
                     src="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-4.png">
                 </picture>
                 <picture>
                   <source srcset="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-4.svg" type="image/svg+xml">
                   <img class="item__img-star-small item__img-star-small-4"
                     src="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-4.png">
                 </picture>
                 <picture>
                   <source srcset="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-1.svg" type="image/svg+xml">
                   <img class="item__img-star-small item__img-star-small-5"
                     src="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-1.png">
                 </picture>
                 <picture>
                   <source srcset="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-1.svg" type="image/svg+xml">
                   <img class="item__img-star-small item__img-star-small-6"
                     src="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-1.png">
                 </picture>
                 <picture>
                   <source srcset="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-4.svg" type="image/svg+xml">
                   <img class="item__img-star-small item__img-star-small-7"
                     src="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-4.png">
                 </picture>
                 <picture>
                   <source srcset="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-2.svg" type="image/svg+xml">
                   <img class="item__img-star-small item__img-star-small-8"
                     src="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-2.png">
                 </picture>
                 <picture>
                   <source srcset="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-2.svg" type="image/svg+xml">
                   <img class="item__img-star-small item__img-star-small-9"
                     src="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-2.png">
                 </picture>
                 <picture>
                   <source srcset="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-2.svg" type="image/svg+xml">
                   <img class="item__img-star-small item__img-star-small-10"
                     src="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-2.png">
                 </picture>
                 <picture>
                   <source srcset="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-2.svg" type="image/svg+xml">
                   <img class="item__img-star-small item__img-star-small-11"
                     src="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-2.png">
                 </picture>
                 <picture>
                   <source srcset="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-4.svg" type="image/svg+xml">
                   <img class="item__img-star-small item__img-star-small-13"
                     src="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-4.png">
                 </picture>
                 <picture>
                   <source srcset="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-1.svg" type="image/svg+xml">
                   <img class="item__img-star-small item__img-star-small-14"
                     src="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-1.png">
                 </picture>
                 <picture>
                   <source srcset="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-3.svg" type="image/svg+xml">
                   <img class="item__img-star-small item__img-star-small-15"
                     src="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-3.png">
                 </picture>
                 <picture>
                   <source srcset="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-3.svg" type="image/svg+xml">
                   <img class="item__img-star-small item__img-star-small-16"
                     src="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-3.png">
                 </picture>
                 <picture>
                   <source srcset="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-3.svg" type="image/svg+xml">
                   <img class="item__img-star-small item__img-star-small-17"
                     src="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-3.png">
                 </picture>
                 <picture>
                   <source srcset="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-3.svg" type="image/svg+xml">
                   <img class="item__img-star-small item__img-star-small-18"
                     src="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-3.png">
                 </picture>
                 <picture>
                   <source srcset="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-3.svg" type="image/svg+xml">
                   <img class="item__img-star-small item__img-star-small-19"
                     src="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-3.png">
                 </picture>
                 <picture>
                   <source srcset="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-1.svg" type="image/svg+xml">
                   <img class="item__img-star-small item__img-star-small-20"
                     src="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-1.png">
                 </picture>
                 <picture>
                   <source srcset="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-4.svg" type="image/svg+xml">
                   <img class="item__img-star-small item__img-star-small-12"
                     src="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-4.png">
                 </picture>

               </div>
               <div class="item__text-box">
                 <p class="item__text">
                   <span class="slide2-span1">КОГДА ПАДАЕТ ЗВЕЗДА&nbsp—</span>
                   <span class="slide2-span2">ЗАГАДАЙ ЖЕЛАНИЕ!</span>
                 </p>
                 <p class="item__text slide2-span3">
                   С ПРАЗДНИКОМ,
                 </p>
                 <div class="item__text-inner slide2-span4">
                   <?php
                    if (isset($_GET["name"])) {
                      echo $_GET["name"];
                    }
                    ?>
                 </div>

               </div>
               <button class="btn btn-feb23" id="btn-feb23-two" type="button">отправить</button>
             </div><!-- .modal__item .item .two -->
           </div>

         </div>
       </div><!-- .modal__inner -->
     </div><!-- .modal -->
   </div>
 </body>

 <script type="text/javascript" src="<?= SITE_DIR ?><?= SITE_DIR ?>assets/js/jquery.js"></script>
 <script type="text/javascript" src="<?= SITE_DIR ?><?= SITE_DIR ?>assets/js/js.cookie.js"></script>
 <script type="text/javascript" src="<?= SITE_DIR ?><?= SITE_DIR ?>assets/js/slick.js"></script>
 <script type="text/javascript" src="<?= SITE_DIR ?>archive/feb23/feb23.js"></script>



 <?
  require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
  ?>