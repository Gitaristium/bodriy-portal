  <?
  require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
  $APPLICATION->SetTitle("Выбери открытку нежности");
  ?>
  <!-- <meta name="theme-color" content="#ffffff"> -->
  <meta property="og:title" content="Выбери открытку нежности">
  <link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/rotate-screen.png">
  <link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/interview/smile.webp">
  <link rel="preload" as="image" href="<?= SITE_DIR ?>archive/march8/img/logo-white@2x.png">
  <link rel="preload" as="image" href="<?= SITE_DIR ?>archive/march8/img/arrows.svg">
  <link rel="preload" as="image" href="<?= SITE_DIR ?>archive/march8/img/bg.jpg">
  <!-- preload img modal 1 -->
  <link rel="preload" as="image" href="<?= SITE_DIR ?>archive/march8/img/modal-eight.png">
  <link rel="preload" as="image" href="<?= SITE_DIR ?>archive/march8/img/astra.svg">
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
      window.location = '/';
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

      <section class="section">

        <svg class="eight-img eight-img-svg" id="eight-img-svg" width="693" height="924" viewBox="0 0 693 924" fill="none" xmlns="http://www.w3.org/2000/svg">
          <g style="mix-blend-mode:lighten">
            <path d="M31.7672 260.276C31.7672 339.069 68.7884 406.09 131.675 441.746C50.6658 481.1 7 558.526 7 651.348C7 734.104 43.73 800.796 104.684 846.602C165.466 892.278 250.026 917 345.881 917C442.346 917 527.215 892.282 588.154 846.607C649.268 800.8 686 734.105 686 651.348C686 558.483 642.294 481.029 561.213 441.691C623.108 406.051 661.233 339.102 661.233 260.276C661.233 110.142 522.697 7 345.881 7C170.283 7 31.7672 110.158 31.7672 260.276ZM345.881 186.834C389.412 186.834 420.425 197.412 440.44 214.271C460.31 231.008 470.147 254.606 470.147 282.552C470.147 308.181 462.077 328.78 443.446 343.231C424.469 357.95 393.48 367.133 345.881 367.133C298.275 367.133 267.626 357.947 248.975 343.263C230.664 328.845 222.853 308.258 222.853 282.552C222.853 254.541 232.425 230.947 251.979 214.239C271.671 197.412 302.348 186.834 345.881 186.834ZM345.881 737.166C297.719 737.166 260.966 727.696 236.444 710.441C212.278 693.435 199.324 668.417 199.324 635.26C199.324 600.11 212.063 575.525 235.88 559.374C260.188 542.89 296.912 534.591 345.881 534.591C395.483 534.591 432.519 542.894 456.981 559.384C480.941 575.536 493.676 600.114 493.676 635.26C493.676 668.413 480.726 693.424 456.417 710.43C431.743 727.691 394.677 737.166 345.881 737.166Z" stroke="#00FF57" stroke-opacity="0.64" stroke-width="14" />
          </g>
        </svg>

        <img class="eight-img eight-img-png" id="eight-img-png" src="<?= SITE_DIR ?>archive/march8/img/main-eight.png">

        <div class="section__container">
          <h1 class="section__title">
            <span>Самый</span>
            <span>нежный</span>
            <span>праздник</span>
          </h1>
        </div>
        <div class="section__text">Выбери открытку. Заполни её. Отправь личным сообщением.</div>
        <button id="btn-select" class="btn" type="button">выбрать</button>
      </section>

      <div class="modal start">
        <div class="modal__inner">
          <div class="modal__arrows">
            <div class="modal__arrows-text">
              свайпай, чтобы выбрать
            </div>
            <picture>
              <source srcset="<?= SITE_DIR ?>archive/march8/img/arrows.svg" type="image/svg+xml">
              <img class="modal__arrows-img" src="<?= SITE_DIR ?>archive/march8/img/arrows.png">
            </picture>
          </div>
          <div class="modal__slider slick">

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
                <div class="item__text-inner">
                  <input class="item__input" id="item__input-1" type="text" maxlength="18" placeholder="введи имя" autocomplete="off">
                  <label class="item__label" for="item__input-1">введи имя</label>
                </div>
                <p class="item__text">ты сааамая</p>
                <div class="item__text-inner">
                  <textarea class="item__input txta" id="item__input-2" type="text" maxlength="300" placeholder="место для комплимента" autocomplete="off"></textarea>
                  <label class="item__label noafter" for="item__input-2">место для комплимента</label>
                </div>

              </div>
              <button class="btn btn-march8" id="btn-march8-one" type="button">отправить</button>
            </div><!-- .modal__item .item .one -->

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
                <p class="item__text">С праздником, самая</p>
                <div class="item__text-inner">
                  <textarea class="item__input txta" id="item__input-3" type="text" maxlength="300" placeholder="место для комплимента" autocomplete="off"></textarea>
                  <label class="item__label noafter" for="item__input-3">место для комплимента</label>
                </div>


              </div>
              <button class="btn btn-march8" id="btn-march8-two" type="button">отправить</button>
            </div><!-- .modal__item .item .two -->

          </div>
        </div><!-- .modal__inner -->
      </div><!-- .modal -->

      <div class="modal2">
        <div class="modal2__inner">
          Ссылка скопирована в буфер.<br>Отправь ее адресату<br>как тебе будет удобнее :)
        </div>
      </div>

    </div><!-- .wrapper -->

  </body>

  <!-- <script type="text/javascript" src="<?= SITE_DIR ?>assets/js/anim.js"></script> -->
  <script type="text/javascript">
    if (/iPhone|iPad|iPod/i.test(
        navigator.userAgent)) {
      document.getElementById('eight-img-png').classList.add('true');
    } else {
      document.getElementById('eight-img-svg').classList.add('true');
    }
  </script>
  <script type="text/javascript" src="<?= SITE_DIR ?>assets/js/jquery.js"></script>
  <script type="text/javascript" src="<?= SITE_DIR ?>assets/js/js.cookie.js"></script>
  <script type="text/javascript" src="<?= SITE_DIR ?>assets/js/slick.js"></script>
  <script type="text/javascript" src="<?= SITE_DIR ?>archive/march8/march8.js"></script>

  <? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>