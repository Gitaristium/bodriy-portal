  <?
  require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
  $APPLICATION->SetTitle("Выбери открытку своему защитнику");
  ?>
  <meta name="theme-color" content="#ffffff">
  <meta property="og:title" content="Выбери открытку своему защитнику">
  <link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/rotate-screen.png">
  <link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/interview/smile.webp">
  <link rel="preload" as="image" href="<?= SITE_DIR ?>archive/feb23/img/logo-black@2x.png">
  <link rel="preload" as="image" href="<?= SITE_DIR ?>archive/feb23/img/logo-white@2x.png">
  <link rel="preload" as="image" href="<?= SITE_DIR ?>archive/feb23/img/star-main.svg">
  <link rel="preload" as="image" href="<?= SITE_DIR ?>archive/feb23/img/arrows.svg">
  <link rel="preload" as="image" href="<?= SITE_DIR ?>archive/feb23/img/socks.webp">
  <link rel="preload" as="image" href="<?= SITE_DIR ?>archive/feb23/img/silde2star-bg.png">
  <link rel="preload" as="image" href="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-1.svg">
  <link rel="preload" as="image" href="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-2.svg">
  <link rel="preload" as="image" href="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-3.svg">
  <link rel="preload" as="image" href="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-4.svg">
  <link rel="preload" as="image" href="<?= SITE_DIR ?>archive/feb23/img/shield.webp">
  <link rel="preload" as="image" href="<?= SITE_DIR ?>archive/feb23/img/slide4star1.svg">
  <link rel="preload" as="image" href="<?= SITE_DIR ?>archive/feb23/img/slide4star2.svg">
  <link rel="preload" as="image" href="<?= SITE_DIR ?>archive/feb23/img/slide4star3.svg">
  <link rel="preload" as="image" href="<?= SITE_DIR ?>archive/feb23/img/slide4star4.svg">
  <link rel="stylesheet" href="<?= SITE_DIR ?>assets/css/slick.css">
  <link rel="stylesheet" href="<?= SITE_DIR ?>archive/feb23/feb23.css">
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
          <img class="preload__img" src="<?= SITE_DIR ?>archive/img/interview/smile.png" alt="smile">
        </picture>
        грузим открытки
      </div>
      <picture>
        <source srcset="<?= SITE_DIR ?>archive/feb23/img/logo-black@2x.png 2x, <?= SITE_DIR ?>archive/feb23/img/logo-black.png 1x" type="image/png">
        <img class="logo-black" src="<?= SITE_DIR ?>archive/feb23/img/logo-black.png">
      </picture>
      <picture>
        <source srcset="<?= SITE_DIR ?>archive/feb23/img/logo-white@2x.png 2x, <?= SITE_DIR ?>archive/feb23/img/logo-white.png 1x"" type=" image/png">
        <img class="logo-white" src="<?= SITE_DIR ?>archive/feb23/img/logo-white.png">
      </picture>
      <section class="section">
        <div class="section__container">
          <div class="section__img-box">
            <picture>
              <source srcset="<?= SITE_DIR ?>archive/feb23/img/star-main.svg" type="image/svg+xml">
              <img class="section__img" src="<?= SITE_DIR ?>archive/feb23/img/star-main.png">
            </picture>
          </div>
          <div class="section__title-box">
            <div class="section__title-numb">
              <span>2</span>
              <span>3</span>
            </div>
            <h1 class="section__title">
              <span>СИЛЬНО</span>
              <span>СИЛЬНЫЙ</span>
              <span>ПРАЗДНИК</span>
            </h1>
          </div>
          <div class="section__text">
            <ul>
              <li>Выбери открытку</li>
              <li>Заполни её</li>
              <li>Отправь личным сообщением</li>
            </ul>
            <span>Приятное сделать просто!</span>
          </div>
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
              <source srcset="<?= SITE_DIR ?>archive/feb23/img/arrows.svg" type="image/svg+xml">
              <img class="modal__arrows-img" src="<?= SITE_DIR ?>archive/feb23/img/arrows.png">
            </picture>
          </div>
          <div class="modal__slider slick">

            <div class="modal__item item one">
              <div class="item__socks-box">
                <picture>
                  <source srcset="<?= SITE_DIR ?>archive/feb23/img/socks.webp" type="image/webp">
                  <img class="item__socks-img item__socks-img-1" src="<?= SITE_DIR ?>archive/feb23/img/socks.png">
                </picture>
                <picture>
                  <source srcset="<?= SITE_DIR ?>archive/feb23/img/socks.webp" type="image/webp">
                  <img class="item__socks-img item__socks-img-2" src="<?= SITE_DIR ?>archive/feb23/img/socks.png">
                </picture>
                <picture>
                  <source srcset="<?= SITE_DIR ?>archive/feb23/img/socks.webp" type="image/webp">
                  <img class="item__socks-img item__socks-img-3" src="<?= SITE_DIR ?>archive/feb23/img/socks.png">
                </picture>
                <picture>
                  <source srcset="<?= SITE_DIR ?>archive/feb23/img/socks.webp" type="image/webp">
                  <img class="item__socks-img item__socks-img-4" src="<?= SITE_DIR ?>archive/feb23/img/socks.png">
                </picture>
                <picture>
                  <source srcset="<?= SITE_DIR ?>archive/feb23/img/socks.webp" type="image/webp">
                  <img class="item__socks-img item__socks-img-5" src="<?= SITE_DIR ?>archive/feb23/img/socks.png">
                </picture>
              </div>
              <div class="item__text-box">
                <p class="item__text">
                  СЕГОДНЯ ПРИНЯТО<br>
                  ДАРИТЬ НОСКИ.<br>
                  СОБЛЮДАЕМ ТРАДИЦИИ.
                </p>
                <p class="item__text">
                  С ПРАЗДНИКОМ,
                </p>
                <div class="item__text-inner">
                  <input class="item__input" id="item__input-1" type="text" maxlength="16" placeholder="введи имя" autocomplete="off">
                  <label class="item__label noafter" for="item__input-1">введи имя</label>
                </div>

              </div>
              <button class="btn btn-feb23" id="btn-feb23-one" type="button">отправить</button>
            </div><!-- .modal__item .item .one -->

            <div class="modal__item item two">
              <div class="item__img-star-box">
                <svg viewBox="0 0 762 724" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path class="svg-shadow" d="M381 16.7126L487.498 247.601L489.139 251.159L493.031 251.62L745.528 281.558L558.85 454.192L555.973 456.852L556.737 460.695L606.291 710.086L384.419 585.892L381 583.978L377.581 585.892L155.709 710.086L205.263 460.695L206.027 456.852L203.15 454.192L16.472 281.558L268.969 251.62L272.86 251.159L274.502 247.601L381 16.7126Z" stroke="black" stroke-width="14" />
                </svg>



                <picture>
                  <source srcset="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-1.svg" type="image/svg+xml">
                  <img class="item__img-star-small item__img-star-small-1" src="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-1.png">
                </picture>
                <picture>
                  <source srcset="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-1.svg" type="image/svg+xml">
                  <img class="item__img-star-small item__img-star-small-2" src="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-1.png">
                </picture>
                <picture>
                  <source srcset="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-4.svg" type="image/svg+xml">
                  <img class="item__img-star-small item__img-star-small-3" src="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-4.png">
                </picture>
                <picture>
                  <source srcset="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-4.svg" type="image/svg+xml">
                  <img class="item__img-star-small item__img-star-small-4" src="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-4.png">
                </picture>
                <picture>
                  <source srcset="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-1.svg" type="image/svg+xml">
                  <img class="item__img-star-small item__img-star-small-5" src="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-1.png">
                </picture>
                <picture>
                  <source srcset="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-1.svg" type="image/svg+xml">
                  <img class="item__img-star-small item__img-star-small-6" src="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-1.png">
                </picture>
                <picture>
                  <source srcset="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-4.svg" type="image/svg+xml">
                  <img class="item__img-star-small item__img-star-small-7" src="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-4.png">
                </picture>
                <picture>
                  <source srcset="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-2.svg" type="image/svg+xml">
                  <img class="item__img-star-small item__img-star-small-8" src="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-2.png">
                </picture>
                <picture>
                  <source srcset="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-2.svg" type="image/svg+xml">
                  <img class="item__img-star-small item__img-star-small-9" src="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-2.png">
                </picture>
                <picture>
                  <source srcset="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-2.svg" type="image/svg+xml">
                  <img class="item__img-star-small item__img-star-small-10" src="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-2.png">
                </picture>
                <picture>
                  <source srcset="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-2.svg" type="image/svg+xml">
                  <img class="item__img-star-small item__img-star-small-11" src="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-2.png">
                </picture>
                <picture>
                  <source srcset="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-4.svg" type="image/svg+xml">
                  <img class="item__img-star-small item__img-star-small-13" src="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-4.png">
                </picture>
                <picture>
                  <source srcset="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-1.svg" type="image/svg+xml">
                  <img class="item__img-star-small item__img-star-small-14" src="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-1.png">
                </picture>
                <picture>
                  <source srcset="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-3.svg" type="image/svg+xml">
                  <img class="item__img-star-small item__img-star-small-15" src="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-3.png">
                </picture>
                <picture>
                  <source srcset="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-3.svg" type="image/svg+xml">
                  <img class="item__img-star-small item__img-star-small-16" src="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-3.png">
                </picture>
                <picture>
                  <source srcset="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-3.svg" type="image/svg+xml">
                  <img class="item__img-star-small item__img-star-small-17" src="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-3.png">
                </picture>
                <picture>
                  <source srcset="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-3.svg" type="image/svg+xml">
                  <img class="item__img-star-small item__img-star-small-18" src="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-3.png">
                </picture>
                <picture>
                  <source srcset="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-3.svg" type="image/svg+xml">
                  <img class="item__img-star-small item__img-star-small-19" src="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-3.png">
                </picture>
                <picture>
                  <source srcset="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-1.svg" type="image/svg+xml">
                  <img class="item__img-star-small item__img-star-small-20" src="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-1.png">
                </picture>
                <picture>
                  <source srcset="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-4.svg" type="image/svg+xml">
                  <img class="item__img-star-small item__img-star-small-12" src="<?= SITE_DIR ?>archive/feb23/img/silde2star-small-4.png">
                </picture>

              </div>
              <div class="item__text-box">
                <p class="item__text">
                  КОГДА ПАДАЕТ ЗВЕЗДА&nbsp—<br>
                  ЗАГАДАЙ ЖЕЛАНИЕ!
                </p>
                <p class="item__text">
                  С ПРАЗДНИКОМ,
                </p>
                <div class="item__text-inner">
                  <input class="item__input" id="item__input-2" type="text" maxlength="16" placeholder="введи имя" autocomplete="off">
                  <label class="item__label noafter" for="item__input-2">введи имя</label>
                </div>

              </div>
              <button class="btn btn-feb23" id="btn-feb23-two" type="button">отправить</button>
            </div><!-- .modal__item .item .two -->

            <div class="modal__item item three">

              <picture>
                <source srcset="<?= SITE_DIR ?>archive/feb23/img/shield.webp" type="image/webp">
                <img class="item__img-shield item__img-shield-1" src="<?= SITE_DIR ?>archive/feb23/img/shield.png" alt="smile">
              </picture>
              <picture>
                <source srcset="<?= SITE_DIR ?>archive/feb23/img/shield.webp" type="image/webp">
                <img class="item__img-shield item__img-shield-2" src="<?= SITE_DIR ?>archive/feb23/img/shield.png" alt="smile">
              </picture>

              <div class="item__text-box">
                <div class="item__text-inner">
                  <input class="item__input" id="item__input-3" type="text" maxlength="19" placeholder="кому" autocomplete="off">
                  <label class="item__label" for="item__input-3">введи имя</label>
                </div>
                <p class="item__text">защищай меня<br>всегда.</p>
                <div class="item__text-inner">
                  <input class="item__input" id="item__input-4" type="text" maxlength="19" placeholder="от кого" autocomplete="off">
                  <label class="item__label item__label noafter" for="item__input-4">введи что</label>
                </div>
              </div>
              <button class="btn btn-feb23" id="btn-feb23-three" type="button">отправить</button>
            </div><!-- .modal__item .item .three -->

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
                <p class="item__text">В ЧЕМ СИЛА,</p>
                <div class="item__text-inner">
                  <input class="item__input" id="item__input-5" type="text" maxlength="19" placeholder="введи имя" autocomplete="off">
                  <label class="item__label" for="item__input-5">введи имя</label>
                </div>
                <p class="item__text">
                  СИЛА В СИЛЬНЫХ<br>
                  МУЖЧИНАХ.<br>
                  ТАКИХ, КАК ТЫ :)</p>
                <p class="item__text">
                  С ПРАЗДНИКОМ!</p>
              </div>
              <button class="btn btn-feb23" id="btn-feb23-four" type="button">отправить</button>
            </div><!-- .modal__item .item .four -->

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
  <script type="text/javascript" src="<?= SITE_DIR ?>archive/feb23/feb23.js"></script>


  <?
  require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");
  ?>