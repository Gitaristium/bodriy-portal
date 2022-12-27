<?
if (isset($_GET["name"])) {
  $name = $_GET["name"];
  $title = mb_strtoupper($name);
}
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("$title С ПРАЗДНИКОМ!");;
?>
<!-- <meta name="theme-color" content="#ffffff"> -->
<meta property="og:title" content="У меня для тебя открытка!">
<meta property="og:description" content="Переходи по ссылке и смотри">
<link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/rotate-screen.png">
<link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/interview/smile.webp">
<link rel="preload" as="image" href="<?= SITE_DIR ?>archive/march8/img/logo-white@2x.png">
<!-- preload img modal 1 -->
<link rel="preload" as="image" href="<?= SITE_DIR ?>archive/march8/img/modal-eight.png">
<link rel="preload" as="image" href="<?= SITE_DIR ?>archive/march8/img/astra.svg">
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
      <source srcset="<?= SITE_DIR ?>archive/march8/img/logo-white@2x.png 2x, <?= SITE_DIR ?>archive/march8/logo-white.png 1x" type="image/png">
      <img class="logo-top" src="<?= SITE_DIR ?>archive/march8/img/logo-white.png" srcset="<?= SITE_DIR ?>archive/march8/img/logo-white@2x.png 2x">
    </picture>
    <picture>
      <source srcset="<?= SITE_DIR ?>archive/march8/img/logo-white@2x.png 2x, <?= SITE_DIR ?>archive/march8/logo-white.png 1x" type="image/png">
      <img class="logo-bottom" src="<?= SITE_DIR ?>archive/march8/img/logo-white.png" srcset="<?= SITE_DIR ?>archive/march8/img/logo-white@2x.png 2x">
    </picture>



    <div class="modal relative start">
      <div class="modal__inner">
        <div class="modal__slider slick">
          <div class="slick-active">
            <div class="modal__item item one">
              <div class="astra__box top">
                <div class="astra__inner">
                  <div class="astra__img-box top astra__img-box--1">
                    <picture>
                      <source srcset="<?= SITE_DIR ?>archive/march8/img/astra.svg" type="image/svg+xml">
                      <img class="astra__img astra__img--1" src="<?= SITE_DIR ?>archive/march8/img/astra.png">
                    </picture>
                  </div>
                  <div class="astra__img-box top astra__img-box--2">
                    <picture>
                      <source srcset="<?= SITE_DIR ?>archive/march8/img/astra.svg" type="image/svg+xml">
                      <img class="astra__img astra__img--2" src="<?= SITE_DIR ?>archive/march8/img/astra.png">
                    </picture>
                  </div>
                  <div class="astra__img-box top astra__img-box--3">
                    <picture>
                      <source srcset="<?= SITE_DIR ?>archive/march8/img/astra.svg" type="image/svg+xml">
                      <img class="astra__img astra__img--3" src="<?= SITE_DIR ?>archive/march8/img/astra.png">
                    </picture>
                  </div>
                  <div class="astra__img-box top astra__img-box--4">
                    <picture>
                      <source srcset="<?= SITE_DIR ?>archive/march8/img/astra.svg" type="image/svg+xml">
                      <img class="astra__img astra__img--4" src="<?= SITE_DIR ?>archive/march8/img/astra.png">
                    </picture>
                  </div>
                  <div class="astra__img-box top astra__img-box--5">
                    <picture>
                      <source srcset="<?= SITE_DIR ?>archive/march8/img/astra.svg" type="image/svg+xml">
                      <img class="astra__img astra__img--5" src="<?= SITE_DIR ?>archive/march8/img/astra.png">
                    </picture>
                  </div>
                  <div class="astra__img-box top astra__img-box--6">
                    <picture>
                      <source srcset="<?= SITE_DIR ?>archive/march8/img/astra.svg" type="image/svg+xml">
                      <img class="astra__img astra__img--6" src="<?= SITE_DIR ?>archive/march8/img/astra.png">
                    </picture>
                  </div>
                  <div class="astra__img-box top astra__img-box--7">
                    <picture>
                      <source srcset="<?= SITE_DIR ?>archive/march8/img/astra.svg" type="image/svg+xml">
                      <img class="astra__img astra__img--7" src="<?= SITE_DIR ?>archive/march8/img/astra.png">
                    </picture>
                  </div>
                  <div class="astra__img-box top astra__img-box--8">
                    <picture>
                      <source srcset="<?= SITE_DIR ?>archive/march8/img/astra.svg" type="image/svg+xml">
                      <img class="astra__img astra__img--8" src="<?= SITE_DIR ?>archive/march8/img/astra.png">
                    </picture>
                  </div>
                </div>
              </div>
              <div class="astra__box bottom">
                <div class="astra__inner">
                  <div class="astra__img-box bottom astra__img-box--1">
                    <picture>
                      <source srcset="<?= SITE_DIR ?>archive/march8/img/astra.svg" type="image/svg+xml">
                      <img class="astra__img astra__img--1" src="<?= SITE_DIR ?>archive/march8/img/astra.png">
                    </picture>
                  </div>
                  <div class="astra__img-box bottom astra__img-box--2">
                    <picture>
                      <source srcset="<?= SITE_DIR ?>archive/march8/img/astra.svg" type="image/svg+xml">
                      <img class="astra__img astra__img--2" src="<?= SITE_DIR ?>archive/march8/img/astra.png">
                    </picture>
                  </div>
                  <div class="astra__img-box bottom astra__img-box--3">
                    <picture>
                      <source srcset="<?= SITE_DIR ?>archive/march8/img/astra.svg" type="image/svg+xml">
                      <img class="astra__img astra__img--3" src="<?= SITE_DIR ?>archive/march8/img/astra.png">
                    </picture>
                  </div>
                  <div class="astra__img-box bottom astra__img-box--4">
                    <picture>
                      <source srcset="<?= SITE_DIR ?>archive/march8/img/astra.svg" type="image/svg+xml">
                      <img class="astra__img astra__img--4" src="<?= SITE_DIR ?>archive/march8/img/astra.png">
                    </picture>
                  </div>
                  <div class="astra__img-box bottom astra__img-box--5">
                    <picture>
                      <source srcset="<?= SITE_DIR ?>archive/march8/img/astra.svg" type="image/svg+xml">
                      <img class="astra__img astra__img--5" src="<?= SITE_DIR ?>archive/march8/img/astra.png">
                    </picture>
                  </div>
                  <div class="astra__img-box bottom astra__img-box--6">
                    <picture>
                      <source srcset="<?= SITE_DIR ?>archive/march8/img/astra.svg" type="image/svg+xml">
                      <img class="astra__img astra__img--6" src="<?= SITE_DIR ?>archive/march8/img/astra.png">
                    </picture>
                  </div>
                  <div class="astra__img-box bottom astra__img-box--7">
                    <picture>
                      <source srcset="<?= SITE_DIR ?>archive/march8/img/astra.svg" type="image/svg+xml">
                      <img class="astra__img astra__img--7" src="<?= SITE_DIR ?>archive/march8/img/astra.png">
                    </picture>
                  </div>
                  <div class="astra__img-box bottom astra__img-box--8">
                    <picture>
                      <source srcset="<?= SITE_DIR ?>archive/march8/img/astra.svg" type="image/svg+xml">
                      <img class="astra__img astra__img--8" src="<?= SITE_DIR ?>archive/march8/img/astra.png">
                    </picture>
                  </div>
                </div>
              </div>
              <div class="item__eight">
                <img class="item__eight-img" src="<?= SITE_DIR ?>archive/march8/img/modal-eight.png">
              </div>
              <div class="item__text-box">
                <div class="item__text-inner slide1-span1">
                  <?php
                  if (isset($_GET["name"])) {
                    echo $_GET["name"], ",";
                  }
                  ?>
                </div>
                <p class="item__text slide1-span2">ты сааамая</p>
                <div class="item__text-inner slide1-span3">
                  <?php
                  if (isset($_GET["what"])) {
                    echo $_GET["what"];
                  }
                  ?>
                </div>
              </div>
            </div><!-- .modal__item .item .one -->
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