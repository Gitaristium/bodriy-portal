<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Свари свой бодрый кофе");
?>
<link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/rotate-screen.png">
<link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/interview/smile.png">
<link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/coffee/logo.svg">
<link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/coffee/quest.svg">
<link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/coffee/arrow.svg">
<link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/coffee/french_b.webp">
<link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/coffee/turk_b.webp">
<link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/coffee/kemex_b.webp">
<link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/coffee/purover_b.webp">
<link rel="stylesheet" href="<?= SITE_DIR ?>assets/css/coffee.css?ver=1.6">
<script type="text/javascript">
if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i.test(
    navigator.userAgent)) {} else {
  location = window.location.origin + '/' + window.location.search;
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
      грузим рецепты
    </div>

    <section class="section section--one active">
      <div class="quest" id="quest">
        <picture>
          <source srcset="<?= SITE_DIR ?>assets/img/coffee/quest.svg" type="image/svg+xml">
          <img class="quest__img quest__img--1" src="<?= SITE_DIR ?>assets/img/coffee/quest.png">
        </picture>
        <picture>
          <source srcset="<?= SITE_DIR ?>assets/img/coffee/quest.svg" type="image/svg+xml">
          <img class="quest__img quest__img--2" src="<?= SITE_DIR ?>assets/img/coffee/quest.png">
        </picture>
        <picture>
          <source srcset="<?= SITE_DIR ?>assets/img/coffee/quest.svg" type="image/svg+xml">
          <img class="quest__img quest__img--3" src="<?= SITE_DIR ?>assets/img/coffee/quest.png">
        </picture>
        <picture>
          <source srcset="<?= SITE_DIR ?>assets/img/coffee/quest.svg" type="image/svg+xml">
          <img class="quest__img quest__img--4" src="<?= SITE_DIR ?>assets/img/coffee/quest.png">
        </picture>
        <picture>
          <source srcset="<?= SITE_DIR ?>assets/img/coffee/quest.svg" type="image/svg+xml">
          <img class="quest__img quest__img--5" src="<?= SITE_DIR ?>assets/img/coffee/quest.png">
        </picture>
        <picture>
          <source srcset="<?= SITE_DIR ?>assets/img/coffee/quest.svg" type="image/svg+xml">
          <img class="quest__img quest__img--6" src="<?= SITE_DIR ?>assets/img/coffee/quest.png">
        </picture>
      </div>
      <picture>
        <source srcset="<?= SITE_DIR ?>assets/img/coffee/logo.svg" type="image/svg+xml">
        <img class="logo" src="<?= SITE_DIR ?>assets/img/coffee/logo.png" alt="logo">
      </picture>
      <h1 class="section__title">А готовить<span>как?</span></h1>
      <p class="section__text">
        Стань немного бариста и приготовь дома<br>
        по нашим рецептам по-настоящему бодрый<br>
        и вкусный кофе!
      </p>
      <div class="arrow" id="arrow">
        <div class="arrow-box" id="arrow-box">
          <picture>
            <source srcset="<?= SITE_DIR ?>assets/img/coffee/arrow.svg" type="image/svg+xml">
            <img class="arrow__img arrow__img--1" src="<?= SITE_DIR ?>assets/img/coffee/arrow.png">
          </picture>
          <picture>
            <source srcset="<?= SITE_DIR ?>assets/img/coffee/arrow.svg" type="image/svg+xml">
            <img class="arrow__img arrow__img--2" src="<?= SITE_DIR ?>assets/img/coffee/arrow.png">
          </picture>
          <picture>
            <source srcset="<?= SITE_DIR ?>assets/img/coffee/arrow.svg" type="image/svg+xml">
            <img class="arrow__img arrow__img--3" src="<?= SITE_DIR ?>assets/img/coffee/arrow.png">
          </picture>
          <picture>
            <source srcset="<?= SITE_DIR ?>assets/img/coffee/arrow.svg" type="image/svg+xml">
            <img class="arrow__img arrow__img--4" src="<?= SITE_DIR ?>assets/img/coffee/arrow.png">
          </picture>
          <button class="btn btn--green" type="button">выбрать рецепт</button>
        </div>
      </div>
    </section>

    <section class="section section--two">
      <div class="section__head">
        <h2 class="section__title">У меня...</h2>
        <h6 class="section__title-desc">(выбери, в чем будешь готовить)</h6>
      </div>
      <!-- <div class="section__links"> -->
      <a class="section__link" href="/coffee/french/">ФРЕНЧ-ПРЕСС
        <picture>
          <source srcset="<?= SITE_DIR ?>assets/img/coffee/french_b.webp" type="image/webp">
          <img class="section__link-img section__link-img--1" src="<?= SITE_DIR ?>assets/img/coffee/french_b.png">
        </picture>
      </a>
      <a class="section__link" href="/coffee/turk/">ТУРКА
        <picture>
          <source srcset="<?= SITE_DIR ?>assets/img/coffee/turk_b.webp" type="image/webp">
          <img class="section__link-img section__link-img--2" src="<?= SITE_DIR ?>assets/img/coffee/turk_b.png">
        </picture>
      </a>
      <a class="section__link" href="/coffee/kemex/">КЕМЕКС
        <picture>
          <source srcset="<?= SITE_DIR ?>assets/img/coffee/kemex_b.webp" type="image/webp">
          <img class="section__link-img section__link-img--3" src="<?= SITE_DIR ?>assets/img/coffee/kemex_b.png">
        </picture>
      </a>
      <a class="section__link" href="/coffee/purover/">ПУРОВЕР
        <picture>
          <source srcset="<?= SITE_DIR ?>assets/img/coffee/purover_b.webp" type="image/webp">
          <img class="section__link-img section__link-img--4" src="<?= SITE_DIR ?>assets/img/coffee/purover_b.png">
        </picture>
      </a>
      <!-- </div> -->
    </section>

  </div><!-- .wrapper -->
</body>

<script type="text/javascript" src="<?= SITE_DIR ?>assets/js/anim.js"></script>
<script type="text/javascript" src="<?= SITE_DIR ?>assets/js/jquery.js"></script>
<!-- <script type="text/javascript" src="<?= SITE_DIR ?>assets/js/touchswipe.js"></script> -->
<script type="text/javascript" src="<?= SITE_DIR ?>assets/js/js.cookie.js"></script>
<script type="text/javascript" src="<?= SITE_DIR ?>assets/js/coffee.js?ver=1.6"></script>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>