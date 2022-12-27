<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Выбери валентинку для своей половинки");
?>
<meta property="og:title" content="Выбери валентинку для своей половинки">
<link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/rotate-screen.png">
<link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/interview/smile.webp">
<link rel="preload" as="image" href="<?= SITE_DIR ?>archive/valentine/img/arrows.svg">
<link rel="preload" as="image" href="<?= SITE_DIR ?>archive/valentine/img/bg.jpg">
<link rel="preload" as="image" href="<?= SITE_DIR ?>archive/valentine/img/heart-small-color.svg">
<link rel="preload" as="image" href="<?= SITE_DIR ?>archive/valentine/img/heart-small.svg">
<link rel="preload" as="image" href="<?= SITE_DIR ?>archive/valentine/img/heart.png">
<link rel="preload" as="image" href="<?= SITE_DIR ?>archive/valentine/img/modal1.jpg">
<link rel="preload" as="image" href="<?= SITE_DIR ?>archive/valentine/img/modal2.jpg">
<link rel="preload" as="image" href="<?= SITE_DIR ?>archive/valentine/img/modal3.jpg">
<link rel="stylesheet" href="<?= SITE_DIR ?>assets/css/slick.css">
<link rel="stylesheet" href="<?= SITE_DIR ?>archive/valentine/valentine.css">
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
      грузим валентинки
    </div>
    <section class="section">
      <div class="section__container">
        <svg class="section__img smile-5" xmlns="https://www.w3.org/2000/svg" viewBox="0 0 462.51 449.3">
          <defs>
            <style>
              .cls-1 {
                fill: #00E259;
              }
            </style>
          </defs>
          <g id="smile-5" data-name="smile-5">
            <g id="smile-5" data-name="smile-5">
              <path class="cls-1 eyes" d="M167.45,199c30.08,0,52,23.37,52.88,24.37L203.77,238.6c-.14-.14-16.25-17.1-36.32-17.1h-.14c-11.47,0-22.57,5.8-33,17.1l-16.57-15.27c14.91-16.17,31.63-24.37,49.7-24.37" />
              <path class="cls-1 eyes" d="M303.11,199c18.07,0,34.78,8.2,49.69,24.37L336.23,238.6c-10.46-11.35-21.61-17.1-33.12-17.1-20,0-36.17,16.93-36.32,17.1l-16.57-15.27c.92-1,22.81-24.37,52.89-24.37" />
              <path class="cls-1" d="M235.27,342.83a135.31,135.31,0,0,1-61.55-14.75L184,308a113.25,113.25,0,0,0,102.63,0l10.25,20.06a135.33,135.33,0,0,1-61.57,14.76" />
              <path class="cls-1" d="M235.28,449.3c-115,0-208.66-93.6-208.66-208.66S120.23,32,235.28,32s208.65,93.6,208.65,208.65S350.33,449.3,235.28,449.3m0-372.25c-90.2,0-163.59,73.39-163.59,163.59s73.39,163.59,163.59,163.59,163.59-73.38,163.59-163.59S325.49,77.05,235.28,77.05" />
              <path class="cls-1 heart-1" d="M299.2,0a42.92,42.92,0,0,1,31.91,14.21,43,43,0,0,1,75,28.82c0,41-74.93,88.53-74.93,88.53s-75-47.48-75-88.47A43.08,43.08,0,0,1,299.2,0" />
              <path class="cls-1 heart-2" d="M355.62,272.67a42.93,42.93,0,0,1,31.91,14.2,43,43,0,0,1,75,28.83c0,41-74.93,88.53-74.93,88.53s-75-47.49-75-88.48a43.07,43.07,0,0,1,43.05-43.08" />
              <path class="cls-1 heart-3" d="M43.05,77.43A42.86,42.86,0,0,1,75,91.63a43,43,0,0,1,75,28.83C150,161.44,75,209,75,209S0,161.5,0,120.51A43.06,43.06,0,0,1,43.05,77.43" />
            </g>
          </g>
        </svg>
        <h1 class="section__title">БОДРАЯ ВАЛЕНТИНКА ТВОЕЙ&nbspПОЛОВИНКЕ</h1>
        <div class="section__text">Выбери дизайн открытки, впиши имя и<br>
          пожелание и отправь свое поздравление<br>
          личным сообщением. Адресату придет ссылка<br>
          с твоей открыткой, и он станет неможко счастливее :)</div>
      </div>
      <button id="btn-select" class="btn" type="button">выбрать</button>
    </section>

    <div class="modal start">
      <div class="modal__inner">
        <div class="modal__arrows">
          <div class="modal__arrows-text">
            свайпай, чтобы выбрать
          </div>
          <picture>
            <source srcset="<?= SITE_DIR ?>archive/valentine/img/arrows.svg" type="image/svg+xml">
            <img class="modal__arrows-img" src="<?= SITE_DIR ?>archive/valentine/img/arrows.png">
          </picture>
        </div>
        <div class="modal__slider slick">

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
                <input class="item__input" id="item__input-1" type="text" maxlength="19" placeholder="введи имя" autocomplete="off">
                <label class="item__label" for="item__input-1">введи имя</label>
              </div>
              <p class="item__text">
                Ты&nbspмоя&nbspвалентинка!
              </p>
            </div>
            <button class="btn btn-valentine" id="btn-valentine-one" type="button">отправить</button>
          </div><!-- .modal__item .item .one -->

          <div class="modal__item item two right">
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
                <input class="item__input" id="item__input-2" type="text" maxlength="19" placeholder="введи имя" autocomplete="off">
                <label class="item__label" for="item__input-2">введи имя</label>
              </div>
              <p class="item__text">А ТЫ СЛУЧАЙНО<br>НЕ&nbspДВОЙНОЙ ЭСПРЕССО?<br>ТОГДА ПОЧЕМУ ТЫ МЕНЯ<br>ТАК БОДРИШЬ?
              </p>
            </div>
            <button class="btn btn-valentine" id="btn-valentine-two" type="button">отправить</button>
          </div><!-- .modal__item .item .two -->

          <div class="modal__item item three left">
            <div class="item__box">
              <div class="item__heart-small item__heart-small--1 ">
                <img src="<?= SITE_DIR ?>archive/valentine/img/heart-small-color.svg" alt="heart">
              </div>
              <div class="item__heart-small item__heart-small--2">
                <img src="<?= SITE_DIR ?>archive/valentine/img/heart-small-color.svg" alt="heart">
              </div>
              <div class="item__heart-small item__heart-small--3">
                <img src="<?= SITE_DIR ?>archive/valentine/img/heart-small-color.svg" alt="heart">
              </div>
              <div class="item__heart-small item__heart-small--4">
                <img src="<?= SITE_DIR ?>archive/valentine/img/heart-small-color.svg" alt="heart">
              </div>
              <div class="item__heart-small item__heart-small--5">
                <img src="<?= SITE_DIR ?>archive/valentine/img/heart-small-color.svg" alt="heart">
              </div>
              <div class="item__heart-small item__heart-small--6">
                <img src="<?= SITE_DIR ?>archive/valentine/img/heart-small-color.svg" alt="heart">
              </div>
              <div class="item__heart-small item__heart-small--7 ">
                <img src="<?= SITE_DIR ?>archive/valentine/img/heart-small-color.svg" alt="heart">
              </div>
              <div class="item__heart-small item__heart-small--8">
                <img src="<?= SITE_DIR ?>archive/valentine/img/heart-small-color.svg" alt="heart">
              </div>
              <div class="item__heart-small item__heart-small--9">
                <img src="<?= SITE_DIR ?>archive/valentine/img/heart-small-color.svg" alt="heart">
              </div>
              <div class="item__heart-small item__heart-small--10">
                <img src="<?= SITE_DIR ?>archive/valentine/img/heart-small-color.svg" alt="heart">
              </div>
              <div class="item__heart-small item__heart-small--11">
                <img src="<?= SITE_DIR ?>archive/valentine/img/heart-small-color.svg" alt="heart">
              </div>
              <div class="item__heart-small item__heart-small--12">
                <img src="<?= SITE_DIR ?>archive/valentine/img/heart-small-color.svg" alt="heart">
              </div>
              <div class="item__heart-small item__heart-small--13">
                <img src="<?= SITE_DIR ?>archive/valentine/img/heart-small-color.svg" alt="heart">
              </div>
            </div>
            <div class="item__heart-big">
              <img src="<?= SITE_DIR ?>archive/valentine/img/heart.png" alt="heart">
            </div>
            <div class="item__text-box">
              <div class="item__text-inner">
                <input class="item__input" id="item__input-3" type="text" maxlength="19" placeholder="введи имя" autocomplete="off">
                <label class="item__label" for="item__input-3">введи имя</label>
              </div>
              <p class="item__text">МЕЖДУ НАМИ КОФЕ<br>И</p>
              <div class="item__text-inner">
                <input class="item__input" id="item__input-4" type="text" maxlength="19" placeholder="..." autocomplete="off">
                <label class="item__label item__label noafter" for="item__input-4">введи что</label>
              </div>
            </div>
            <button class="btn btn-valentine" id="btn-valentine-three" type="button">отправить</button>
          </div><!-- .modal__item .item .three -->

        </div>
      </div><!-- .modal__inner -->
    </div><!-- .modal -->

    <div class="modal2">
      <div class="modal2__inner">
        Ссылка скопирована в буфер.<br>Отправь ее адресату<br>как тебе будет удобнее :)
      </div>
    </div>


  </div>
</body>

<script type="text/javascript" src="<?= SITE_DIR ?>assets/js/jquery.js"></script>
<script type="text/javascript" src="<?= SITE_DIR ?>assets/js/js.cookie.js"></script>
<script type="text/javascript" src="<?= SITE_DIR ?>assets/js/slick.js"></script>
<script type="text/javascript" src="<?= SITE_DIR ?>archive/valentine/valentine.js"></script>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>