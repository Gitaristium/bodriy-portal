<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("С ПРАЗДНИКОМ!");
?>
<!-- <meta name="theme-color" content="#ffffff"> -->
<meta property="og:title" content="У меня для тебя открытка!">
<meta property="og:description" content="Переходи по ссылке и смотри">
<link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/rotate-screen.png">
<link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/interview/smile.webp">
<link rel="preload" as="image" href="<?= SITE_DIR ?>archive/march8/img/logo-white@2x.png">
<!-- preload img modal 2 -->
<link rel="preload" as="image" href="<?= SITE_DIR ?>archive/march8/img/leaf.svg">
<link rel="preload" as="image" href="<?= SITE_DIR ?>archive/march8/img/tulip-1-1.svg">
<link rel="preload" as="image" href="<?= SITE_DIR ?>archive/march8/img/tulip-1-2.svg">
<link rel="preload" as="image" href="<?= SITE_DIR ?>archive/march8/img/tulip-1-3.svg">
<link rel="preload" as="image" href="<?= SITE_DIR ?>archive/march8/img/tulip-1-4.svg">
<link rel="preload" as="image" href="<?= SITE_DIR ?>archive/march8/img/tulip-1-5.svg">
<link rel="preload" as="image" href="<?= SITE_DIR ?>archive/march8/img/tulip-2-1.svg">
<link rel="preload" as="image" href="<?= SITE_DIR ?>archive/march8/img/tulip-2-2.svg">
<link rel="preload" as="image" href="<?= SITE_DIR ?>archive/march8/img/tulip-2-3.svg">
<link rel="preload" as="image" href="<?= SITE_DIR ?>archive/march8/img/tulip-2-4.svg">
<link rel="preload" as="image" href="<?= SITE_DIR ?>archive/march8/img/tulip-2-5.svg">
<!-- styles -->
<link rel="stylesheet" href="<?= SITE_DIR ?>assets/css/slick.css">
<link rel="stylesheet" href="<?= SITE_DIR ?>archive/march8/march8.css">
<script type="text/javascript">
  if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i.test(
      navigator.userAgent)) {} else {
    location = window.location.origin + '/';
  }
</script>
</head>

<body>

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
      грузим открытки
    </div>
    <picture>
      <source srcset="<?= SITE_DIR ?>archive/march8/img/logo-white@2x.png 2x, <?= SITE_DIR ?>archive/march8/img/logo-white.png 1x" type="image/png">
      <img class="logo-top" src="<?= SITE_DIR ?>archive/march8/img/logo-white.png" srcset="<?= SITE_DIR ?>archive/march8/img/logo-white@2x.png 2x">
    </picture>
    <picture>
      <source srcset="<?= SITE_DIR ?>archive/march8/img/logo-white@2x.png 2x, <?= SITE_DIR ?>archive/march8/img/logo-white.png 1x" type="image/png">
      <img class="logo-bottom" src="<?= SITE_DIR ?>archive/march8/img/logo-white.png" srcset="<?= SITE_DIR ?>archive/march8/img/logo-white@2x.png 2x">
    </picture>


    <div class="modal relative start">
      <div class="modal__inner">

        <div class="modal__slider slick">
          <div class="slick-active">
            <div class="modal__item item two">
              <img class="item__eight" src="<?= SITE_DIR ?>archive/march8/img/modal-eight.png">
              <div class="tulip">
                <div class="tulip__container">

                  <picture>
                    <source srcset="<?= SITE_DIR ?>archive/march8/img/leaf.svg" type="image/svg+xml">
                    <img class="tulip__img-leaf tulip__img-leaf--1" src="<?= SITE_DIR ?>archive/march8/img/leaf.png">
                  </picture>

                  <div class="tulip__box one">
                    <div class="tulip__box-inner">
                      <picture>
                        <source srcset="<?= SITE_DIR ?>archive/march8/img/tulip-1-1.svg" type="image/svg+xml">
                        <img class="tulip__img tulip__img--1" src="<?= SITE_DIR ?>archive/march8/img/tulip-1-1.png">
                      </picture>
                      <picture>
                        <source srcset="<?= SITE_DIR ?>archive/march8/img/tulip-1-2.svg" type="image/svg+xml">
                        <img class="tulip__img tulip__img--2" src="<?= SITE_DIR ?>archive/march8/img/tulip-1-2.png">
                      </picture>
                      <picture>
                        <source srcset="<?= SITE_DIR ?>archive/march8/img/tulip-1-3.svg" type="image/svg+xml">
                        <img class="tulip__img tulip__img--3" src="<?= SITE_DIR ?>archive/march8/img/tulip-1-3.png">
                      </picture>
                      <picture>
                        <source srcset="<?= SITE_DIR ?>archive/march8/img/tulip-1-4.svg" type="image/svg+xml">
                        <img class="tulip__img tulip__img--4" src="<?= SITE_DIR ?>archive/march8/img/tulip-1-4.png">
                      </picture>
                      <picture>
                        <source srcset="<?= SITE_DIR ?>archive/march8/img/tulip-1-5.svg" type="image/svg+xml">
                        <img class="tulip__img tulip__img--5" src="<?= SITE_DIR ?>archive/march8/img/tulip-1-5.png">
                      </picture>
                    </div>
                  </div>

                  <div class="tulip__box two">
                    <div class="tulip__box-inner">
                      <picture>
                        <source srcset="<?= SITE_DIR ?>archive/march8/img/tulip-2-1.svg" type="image/svg+xml">
                        <img class="tulip__img tulip__img--1" src="<?= SITE_DIR ?>archive/march8/img/tulip-2-1.png">
                      </picture>
                      <picture>
                        <source srcset="<?= SITE_DIR ?>archive/march8/img/tulip-2-2.svg" type="image/svg+xml">
                        <img class="tulip__img tulip__img--2" src="<?= SITE_DIR ?>archive/march8/img/tulip-2-2.png">
                      </picture>
                      <picture>
                        <source srcset="<?= SITE_DIR ?>archive/march8/img/tulip-2-3.svg" type="image/svg+xml">
                        <img class="tulip__img tulip__img--3" src="<?= SITE_DIR ?>archive/march8/img/tulip-2-3.png">
                      </picture>
                      <picture>
                        <source srcset="<?= SITE_DIR ?>archive/march8/img/tulip-2-4.svg" type="image/svg+xml">
                        <img class="tulip__img tulip__img--4" src="<?= SITE_DIR ?>archive/march8/img/tulip-2-4.png">
                      </picture>
                      <picture>
                        <source srcset="<?= SITE_DIR ?>archive/march8/img/tulip-2-5.svg" type="image/svg+xml">
                        <img class="tulip__img tulip__img--5" src="<?= SITE_DIR ?>archive/march8/img/tulip-2-5.png">
                      </picture>
                    </div>
                  </div>

                  <picture>
                    <source srcset="<?= SITE_DIR ?>archive/march8/img/leaf.svg" type="image/svg+xml">
                    <img class="tulip__img-leaf tulip__img-leaf--2" src="<?= SITE_DIR ?>archive/march8/img/leaf.png">
                  </picture>

                  <div class="tulip__box three">
                    <div class="tulip__box-inner">
                      <picture>
                        <source srcset="<?= SITE_DIR ?>archive/march8/img/tulip-1-1.svg" type="image/svg+xml">
                        <img class="tulip__img tulip__img--1" src="<?= SITE_DIR ?>archive/march8/img/tulip-1-1.png">
                      </picture>
                      <picture>
                        <source srcset="<?= SITE_DIR ?>archive/march8/img/tulip-1-2.svg" type="image/svg+xml">
                        <img class="tulip__img tulip__img--2" src="<?= SITE_DIR ?>archive/march8/img/tulip-1-2.png">
                      </picture>
                      <picture>
                        <source srcset="<?= SITE_DIR ?>archive/march8/img/tulip-1-3.svg" type="image/svg+xml">
                        <img class="tulip__img tulip__img--3" src="<?= SITE_DIR ?>archive/march8/img/tulip-1-3.png">
                      </picture>
                      <picture>
                        <source srcset="<?= SITE_DIR ?>archive/march8/img/tulip-1-4.svg" type="image/svg+xml">
                        <img class="tulip__img tulip__img--4" src="<?= SITE_DIR ?>archive/march8/img/tulip-1-4.png">
                      </picture>
                      <picture>
                        <source srcset="<?= SITE_DIR ?>archive/march8/img/tulip-1-5.svg" type="image/svg+xml">
                        <img class="tulip__img tulip__img--5" src="<?= SITE_DIR ?>archive/march8/img/tulip-1-5.png">
                      </picture>
                    </div>
                  </div>

                </div>
              </div>
              <div class="item__text-box">
                <p class="item__text slide2-span1">С праздником<span class="slide2-span2">, самая</span>
                </p>
                <div class="item__text-inner slide2-span3">
                  <?php
                  if (isset($_GET["what"])) {
                    echo $_GET["what"];
                  }
                  ?>
                </div>
              </div>
            </div><!-- .modal__item .item .two -->
          </div>
        </div>
      </div><!-- .modal__inner -->
    </div><!-- .modal -->

  </div><!-- .wrapper -->

</body>

<!-- <script type="text/javascript" src="<?= SITE_DIR ?>assets/js/anim.js"></script> -->
<script type="text/javascript" src="<?= SITE_DIR ?>assets/js/jquery.js"></script>
<script type="text/javascript" src="<?= SITE_DIR ?>assets/js/js.cookie.js"></script>
<script type="text/javascript" src="<?= SITE_DIR ?>assets/js/slick.js"></script>
<script type="text/javascript" src="<?= SITE_DIR ?>archive/march8/march8.js"></script>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>