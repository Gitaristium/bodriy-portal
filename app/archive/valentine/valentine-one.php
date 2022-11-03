<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Тебе валентинка!");
?>

<meta property="og:title" content="Тебе валентинка!">
<meta property="og:description" content="Переходи по ссылке и смотри">
<link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/rotate-screen.png">
<link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/interview/smile.webp">
<link rel="preload" as="image" href="<?= SITE_DIR ?>archive/valentine/img/heart-small.svg">
<link rel="preload" as="image" href="<?= SITE_DIR ?>archive/valentine/img/heart.png">
<link rel="preload" as="image" href="<?= SITE_DIR ?>archive/valentine/img/modal1.jpg">
<link rel="stylesheet" href="<?= SITE_DIR ?>archive/valentine/valentine.css">
<script type="text/javascript">
if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i.test(
    navigator.userAgent)) {} else {
  location = "/";
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
      грузим валентинку
    </div>
    <div class="modal relative">
      <div class="modal__inner">
        <div class="modal__slider">
          <div class="slick-active">
            <div class="modal__item item one right">
              <div class="item__box">
                <div class="item__heart-small item__heart-small--1 ">
                  <img src="<?= SITE_DIR ?>archive/valentine/img/heart-small.svg" alt="heart">
                </div>
                <div class="item__heart-small item__heart-small--2">
                  <img src="<?= SITE_DIR ?>archive/valentine/img/heart-small.svg" alt="heart">
                </div>
                <div class="item__heart-small item__heart-small--3">
                  <img src="<?= SITE_DIR ?>archive/valentine/img/heart-small.svg" alt="heart">
                </div>
                <div class="item__heart-small item__heart-small--4">
                  <img src="<?= SITE_DIR ?>archive/valentine/img/heart-small.svg" alt="heart">
                </div>
                <div class="item__heart-small item__heart-small--5">
                  <img src="<?= SITE_DIR ?>archive/valentine/img/heart-small.svg" alt="heart">
                </div>
                <div class="item__heart-small item__heart-small--6">
                  <img src="<?= SITE_DIR ?>archive/valentine/img/heart-small.svg" alt="heart">
                </div>
                <div class="item__heart-small item__heart-small--7 ">
                  <img src="<?= SITE_DIR ?>archive/valentine/img/heart-small.svg" alt="heart">
                </div>
                <div class="item__heart-small item__heart-small--8">
                  <img src="<?= SITE_DIR ?>archive/valentine/img/heart-small.svg" alt="heart">
                </div>
                <div class="item__heart-small item__heart-small--9">
                  <img src="<?= SITE_DIR ?>archive/valentine/img/heart-small.svg" alt="heart">
                </div>
                <div class="item__heart-small item__heart-small--10">
                  <img src="<?= SITE_DIR ?>archive/valentine/img/heart-small.svg" alt="heart">
                </div>
                <div class="item__heart-small item__heart-small--11">
                  <img src="<?= SITE_DIR ?>archive/valentine/img/heart-small.svg" alt="heart">
                </div>
                <div class="item__heart-small item__heart-small--12">
                  <img src="<?= SITE_DIR ?>archive/valentine/img/heart-small.svg" alt="heart">
                </div>
                <div class="item__heart-small item__heart-small--13">
                  <img src="<?= SITE_DIR ?>archive/valentine/img/heart-small.svg" alt="heart">
                </div>
              </div>
              <div class="item__heart-big">

                <img src="<?= SITE_DIR ?>archive/valentine/img/heart.png" alt="heart">
              </div>
              <div class="item__text-box">
                <div class="item__text-inner">
                  <?php
                  if (isset($_GET["name"])) {
                    echo $_GET["name"], ',';
                  }
                  ?>
                </div>
                <p class="item__text">
                  Ты&nbspмоя&nbspвалентинка!
                </p>
              </div>
            </div><!-- .modal__item .item .one -->
          </div>
        </div>
      </div><!-- .modal__inner -->
    </div><!-- .modal -->


  </div>
</body>

<script type="text/javascript" src="<?= SITE_DIR ?>assets/js/jquery.js"></script>
<script type="text/javascript" src="<?= SITE_DIR ?>assets/js/js.cookie.js"></script>
<script type="text/javascript" src="<?= SITE_DIR ?>assets/js/slick.js"></script>
<script type="text/javascript" src="<?= SITE_DIR ?>archive/valentine/valentine.js"></script>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>