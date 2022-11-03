 <?
  if (isset($_GET["name"])) {
    $name = $_GET["name"];
    $title = mb_strtoupper($name);
  }
  require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
  $APPLICATION->SetTitle("$title С ПРАЗДНИКОМ!");
  ?>
 <meta name="theme-color" content="#ec3c3c">
 <meta property="og:title" content="У меня для тебя открытка!">
 <meta property="og:description" content="Переходи по ссылке и смотри">
 <link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/rotate-screen.png">
 <link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/interview/smile.webp">
 <link rel="preload" as="image" href="<?= SITE_DIR ?>archive/feb23/img/logo-black@2x.png">
 <link rel="preload" as="image" href="<?= SITE_DIR ?>archive/feb23/img/logo-white@2x.png">
 <link rel="preload" as="image" href="<?= SITE_DIR ?>archive/feb23/img/slide4star1.svg">
 <link rel="preload" as="image" href="<?= SITE_DIR ?>archive/feb23/img/slide4star2.svg">
 <link rel="preload" as="image" href="<?= SITE_DIR ?>archive/feb23/img/slide4star3.svg">
 <link rel="preload" as="image" href="<?= SITE_DIR ?>archive/feb23/img/slide4star4.svg">
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
       <source srcset="<?= SITE_DIR ?>archive/feb23/img/logo-black@2x.png 2x, <?= SITE_DIR ?>archive/feb23/img/logo-black.png 1x" type="image/png">
       <img class="logo-black" src="<?= SITE_DIR ?>archive/feb23/img/logo-black.png">
     </picture>
     <picture>
       <source srcset="<?= SITE_DIR ?>archive/feb23/img/logo-white@2x.png 2x, <?= SITE_DIR ?>archive/feb23/img/logo-white.png 1x"" type=" image/png">
       <img class="logo-white" src="<?= SITE_DIR ?>archive/feb23/img/logo-white.png">
     </picture>

     <div class="modal relative start">
       <div class="modal__inner">
         <div class="modal__slider ">

           <div class="slick-active">
             <div class="modal__item item four">
               <div class="item__img-box item__img-box-1">
                 <div class="item__img-box-inner">
                   <picture>
                     <source srcset="<?= SITE_DIR ?>archive/feb23/img/slide4star1.svg" type="image/svg+xml">
                     <img class="item__img-star4 item__img-star4-1" src="<?= SITE_DIR ?>archive/feb23/img/slide4star1.svg">
                   </picture>
                   <picture>
                     <source srcset="<?= SITE_DIR ?>archive/feb23/img/slide4star2.svg" type="image/svg+xml">
                     <img class="item__img-star4 item__img-star4-2" src="<?= SITE_DIR ?>archive/feb23/img/slide4star2.svg">
                   </picture>
                   <picture>
                     <source srcset="<?= SITE_DIR ?>archive/feb23/img/slide4star3.svg" type="image/svg+xml">
                     <img class="item__img-star4 item__img-star4-3" src="<?= SITE_DIR ?>archive/feb23/img/slide4star3.svg">
                   </picture>
                   <picture>
                     <source srcset="<?= SITE_DIR ?>archive/feb23/img/slide4star4.svg" type="image/svg+xml">
                     <img class="item__img-star4 item__img-star4-4" src="<?= SITE_DIR ?>archive/feb23/img/slide4star4.svg">
                   </picture>
                 </div>
               </div>
               <div class="item__img-box item__img-box-2">
                 <div class="item__img-box-inner">
                   <picture>
                     <source srcset="<?= SITE_DIR ?>archive/feb23/img/slide4star1.svg" type="image/svg+xml">
                     <img class="item__img-star4 item__img-star4-1" src="<?= SITE_DIR ?>archive/feb23/img/slide4star1.svg">
                   </picture>
                   <picture>
                     <source srcset="<?= SITE_DIR ?>archive/feb23/img/slide4star2.svg" type="image/svg+xml">
                     <img class="item__img-star4 item__img-star4-2" src="<?= SITE_DIR ?>archive/feb23/img/slide4star2.svg">
                   </picture>
                   <picture>
                     <source srcset="<?= SITE_DIR ?>archive/feb23/img/slide4star3.svg" type="image/svg+xml">
                     <img class="item__img-star4 item__img-star4-3" src="<?= SITE_DIR ?>archive/feb23/img/slide4star3.svg">
                   </picture>
                   <picture>
                     <source srcset="<?= SITE_DIR ?>archive/feb23/img/slide4star4.svg" type="image/svg+xml">
                     <img class="item__img-star4 item__img-star4-4" src="<?= SITE_DIR ?>archive/feb23/img/slide4star4.svg">
                   </picture>
                 </div>
               </div>
               <div class="item__img-box item__img-box-3">
                 <div class="item__img-box-inner">
                   <picture>
                     <source srcset="<?= SITE_DIR ?>archive/feb23/img/slide4star1.svg" type="image/svg+xml">
                     <img class="item__img-star4 item__img-star4-1" src="<?= SITE_DIR ?>archive/feb23/img/slide4star1.svg">
                   </picture>
                   <picture>
                     <source srcset="<?= SITE_DIR ?>archive/feb23/img/slide4star2.svg" type="image/svg+xml">
                     <img class="item__img-star4 item__img-star4-2" src="<?= SITE_DIR ?>archive/feb23/img/slide4star2.svg">
                   </picture>
                   <picture>
                     <source srcset="<?= SITE_DIR ?>archive/feb23/img/slide4star3.svg" type="image/svg+xml">
                     <img class="item__img-star4 item__img-star4-3" src="<?= SITE_DIR ?>archive/feb23/img/slide4star3.svg">
                   </picture>
                   <picture>
                     <source srcset="<?= SITE_DIR ?>archive/feb23/img/slide4star4.svg" type="image/svg+xml">
                     <img class="item__img-star4 item__img-star4-4" src="<?= SITE_DIR ?>archive/feb23/img/slide4star4.svg">
                   </picture>
                 </div>
               </div>
               <div class="item__text-box">
                 <p class="item__text slide4-span1">В ЧЕМ СИЛА,</p>
                 <div class="item__text-inner slide4-span2">
                   <?php
                    if (isset($_GET["name"])) {
                      echo $_GET["name"], "?";
                    }
                    ?>
                 </div>
                 <p class="item__text">
                   <span class="slide4-span3">СИЛА В СИЛЬНЫХ</span>
                   <span class="slide4-span4">МУЖЧИНАХ.</span>
                   <span class="slide4-span5"> ТАКИХ, КАК ТЫ :)</span>
                 </p>
                 <p class="item__text slide4-span6">
                   С ПРАЗДНИКОМ!</p>
               </div>
               <button class="btn btn-feb23" id="btn-feb23-four" type="button">отправить</button>
             </div><!-- .modal__item .item .four -->
           </div>

         </div>
       </div><!-- .modal__inner -->
     </div><!-- .modal -->
   </div>
 </body>

 <script type="text/javascript" src="<?= SITE_DIR ?>assets/js/jquery.js"></script>
 <script type="text/javascript" src="<?= SITE_DIR ?>assets/js/js.cookie.js"></script>
 <script type="text/javascript" src="<?= SITE_DIR ?>assets/js/slick.js"></script>
 <script type="text/javascript" src="<?= SITE_DIR ?>archive/feb23/feb23.js"></script>


 <?
  require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
  ?>