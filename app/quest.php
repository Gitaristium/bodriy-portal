<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Бодрый тест");
?>
<meta name="theme-color" content="#7eff69">
<meta property="og:url" content="https://portal.bodryi-den.ru/quest" />
<meta property="og:title" content="Я прошел Бодрый тест от Бодрого дня!" />
<meta property="og:description" content="Пройди и ты, давай узнаем сколько среди нас рафов:)" />
<link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/rotate-screen.png">
<link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/quest/cup1.webp">
<link rel="stylesheet" href="<?= SITE_DIR ?>assets/css/all.css">
<link rel="stylesheet" href="<?= SITE_DIR ?>assets/css/quest.css?ver=1.6">
<script type="text/javascript">
if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i.test(
    navigator.userAgent)) {
  window.history.replaceState(null, null, window.location.origin + '/' + window.location.search);
} else {
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
    <section class="section">
      <div class="section__inner">
        <div class="section__container">
          <picture>
            <source srcset="<?= SITE_DIR ?>assets/img/quest/cup1.webp" type="image/webp">
            <img class="section__img" src="<?= SITE_DIR ?>assets/img/quest/cup1.png" alt="cup">
          </picture>
          <div class="section__title">
            <span class="anim-items anim-no-hide">тест:</span>
            <span class="anim-items anim-no-hide">какой</span>
            <span class="anim-items anim-no-hide">ты напиток?</span>
          </div>
          <div class="section__text anim-items anim-no-hide">пройди наш тест<br>и поделись результатами<br>с друзьями.
            давай узнаем<br>сколько
            среди нас рафов:&rang;</div>
          <button id="btn-start" class="btn btn--green anim-items anim-no-hide" type="button">начать</button>
        </div>
      </div>
    </section>

    <div id="modal-quest" class="modal modal-quest">
      <div class="modal__inner">
        <div class="modal__container">

          <div id="modal-item-1" class="modal__item item">
            <div class="item__inner">
              <div class="item__top">

                <picture>
                  <source srcset="<?= SITE_DIR ?>assets/img/quest/smile1.webp" type="image/webp">
                  <img class="item__img" src="<?= SITE_DIR ?>assets/img/quest/smile1.png" alt="smile">
                </picture>
                <div class="item__desc">
                  <div class="item__num">
                    1/7
                  </div>
                  <div class="item__title">
                    Сколько<br>кофе в день<br>ты пьешь?
                  </div>
                </div>
                <div class="item__quest-block">

                  <input class="item__input" type="radio" id="quest-1-1" name="quest-1" value="1" required>
                  <label class="item__label item__label--1" for="quest-1-1">Не пью кофе совсем</label>

                  <input class="item__input" type="radio" id="quest-1-2" name="quest-1" value="2" required>
                  <label class="item__label item__label--2" for="quest-1-2">Стабильно 1 кофе</label>

                  <input class="item__input" type="radio" id="quest-1-3" name="quest-1" value="3" required>
                  <label class="item__label item__label--3" for="quest-1-3">От 2х чашек до 3х</label>

                  <input class="item__input" type="radio" id="quest-1-4" name="quest-1" value="4" required>
                  <label class="item__label item__label--4" for="quest-1-4">От 4х чашек в день<br>(много кофе не
                    бывает)</label>

                </div>
              </div>
              <div class="item__bottom">
                <button id="btn-1-7" class="btn btn--green">дальше</button>
              </div>
            </div>
          </div>
          <!-- .modal__item 1 -->

          <div id="modal-item-2" class="modal__item item">
            <div class="item__inner">
              <div class="item__top">

                <picture>
                  <source srcset="<?= SITE_DIR ?>assets/img/quest/smile2.webp" type="image/webp">
                  <img class="item__img" src="<?= SITE_DIR ?>assets/img/quest/smile2.png" alt="smile">
                </picture>
                <div class="item__desc">
                  <div class="item__num">
                    2/7
                  </div>
                  <div class="item__title">
                    Что<br>ты добавляешь<br>в кофе?
                  </div>
                </div>
                <div class="item__quest-block">

                  <input class="item__input" type="radio" id="quest-2-1" name="quest-2" value="1" required>
                  <label class="item__label item__label--1" for="quest-2-1">Ничего, пью без добавок</label>

                  <input class="item__input" type="radio" id="quest-2-2" name="quest-2" value="2" required>
                  <label class="item__label item__label--2" for="quest-2-2">Молоко или сливки</label>

                  <input class="item__input" type="radio" id="quest-2-3" name="quest-2" value="3" required>
                  <label class="item__label item__label--3" for="quest-2-3">Сахар</label>

                  <input class="item__input" type="radio" id="quest-2-4" name="quest-2" value="4" required>
                  <label class="item__label item__label--4" for="quest-2-4">Еще один эспрессо<br>(много кофе не
                    бывает)</label>

                </div>
              </div>
              <div class="item__bottom">
                <button id="btn-2-7" class="btn btn--green">дальше</button>
              </div>
            </div>
          </div>
          <!-- .modal__item 2 -->

          <div id="modal-item-3" class="modal__item item">
            <div class="item__inner">
              <div class="item__top">

                <picture>
                  <source srcset="<?= SITE_DIR ?>assets/img/quest/smile3.webp" type="image/webp">
                  <img class="item__img" src="<?= SITE_DIR ?>assets/img/quest/smile3.png" alt="smile">
                </picture>
                <div class="item__desc">
                  <div class="item__num">
                    3/7
                  </div>
                  <div class="item__title">
                    Когда кофе<br>появился<br>в твоей жизни?
                  </div>
                </div>
                <div class="item__quest-block">

                  <input class="item__input" type="radio" id="quest-3-1" name="quest-3" value="1" required>
                  <label class="item__label item__label--1" for="quest-3-1">До сих пор не появился</label>

                  <input class="item__input" type="radio" id="quest-3-2" name="quest-3" value="2" required>
                  <label class="item__label item__label--2" for="quest-3-2">После 18</label>

                  <input class="item__input" type="radio" id="quest-3-3" name="quest-3" value="3" required>
                  <label class="item__label item__label--3" for="quest-3-3">В подростковом возрасте</label>

                  <input class="item__input" type="radio" id="quest-3-4" name="quest-3" value="4" required>
                  <label class="item__label item__label--4" for="quest-3-4">В детстве!</label>

                </div>
              </div>
              <div class="item__bottom">
                <button id="btn-3-7" class="btn btn--green">дальше</button>
              </div>
            </div>
          </div>
          <!-- .modal__item 3 -->

          <div id="modal-item-4" class="modal__item item">
            <div class="item__inner">
              <div class="item__top">

                <picture>
                  <source srcset="<?= SITE_DIR ?>assets/img/quest/smile4.webp" type="image/webp">
                  <img class="item__img" src="<?= SITE_DIR ?>assets/img/quest/smile4.png" alt="smile">
                </picture>
                <div class="item__desc">
                  <div class="item__num">
                    4/7
                  </div>
                  <div class="item__title">
                    С чем<br>ты любишь<br>пить кофе?
                  </div>
                </div>
                <div class="item__quest-block">

                  <input class="item__input" type="radio" id="quest-4-1" name="quest-4" value="1" required>
                  <label class="item__label item__label--1" for="quest-4-1">С десертом</label>

                  <input class="item__input" type="radio" id="quest-4-2" name="quest-4" value="2" required>
                  <label class="item__label item__label--2" for="quest-4-2">С шоколадом</label>

                  <input class="item__input" type="radio" id="quest-4-3" name="quest-4" value="3" required>
                  <label class="item__label item__label--3" for="quest-4-3">С чем-то сытным</label>

                  <input class="item__input" type="radio" id="quest-4-4" name="quest-4" value="4" required>
                  <label class="item__label item__label--4" for="quest-4-4">С ничем, пью чистый кофе</label>

                </div>
              </div>
              <div class="item__bottom">
                <button id="btn-4-7" class="btn btn--green">дальше</button>
              </div>
            </div>
          </div>
          <!-- .modal__item 4 -->

          <div id="modal-item-5" class="modal__item item">
            <div class="item__inner">
              <div class="item__top">

                <picture>
                  <source srcset="<?= SITE_DIR ?>assets/img/quest/smile5.webp" type="image/webp">
                  <img class="item__img" src="<?= SITE_DIR ?>assets/img/quest/smile5.png" alt="smile">
                </picture>
                <div class="item__desc">
                  <div class="item__num">
                    5/7
                  </div>
                  <div class="item__title">
                    Что<br>ты любишь<br>на завтрак?
                  </div>
                </div>
                <div class="item__quest-block">

                  <input class="item__input" type="radio" id="quest-5-1" name="quest-5" value="1" required>
                  <label class="item__label item__label--1" for="quest-5-1">Сырники</label>

                  <input class="item__input" type="radio" id="quest-5-2" name="quest-5" value="2" required>
                  <label class="item__label item__label--2" for="quest-5-2">Овсянку, сэр!</label>

                  <input class="item__input" type="radio" id="quest-5-3" name="quest-5" value="3" required>
                  <label class="item__label item__label--3" for="quest-5-3">Яичницу</label>

                  <input class="item__input" type="radio" id="quest-5-4" name="quest-5" value="4" required>
                  <label class="item__label item__label--4" for="quest-5-4">Бутерброд</label>

                </div>
              </div>
              <div class="item__bottom">
                <button id="btn-5-7" class="btn btn--green">дальше</button>
              </div>
            </div>
          </div>
          <!-- .modal__item 5 -->

          <div id="modal-item-6" class="modal__item item">
            <div class="item__inner">
              <div class="item__top">

                <picture>
                  <source srcset="<?= SITE_DIR ?>assets/img/quest/smile6.webp" type="image/webp">
                  <img class="item__img" src="<?= SITE_DIR ?>assets/img/quest/smile6.png" alt="smile">
                </picture>
                <div class="item__desc">
                  <div class="item__num">
                    6/7
                  </div>
                  <div class="item__title">
                    Где<br>ты любишь<br>пить кофе?
                  </div>
                </div>
                <div class="item__quest-block">

                  <input class="item__input" type="radio" id="quest-6-1" name="quest-6" value="1" required>
                  <label class="item__label item__label--1" for="quest-6-1">Не пью я кофе :&lang;</label>

                  <input class="item__input" type="radio" id="quest-6-2" name="quest-6" value="2" required>
                  <label class="item__label item__label--2" for="quest-6-2">В кофейне</label>

                  <input class="item__input" type="radio" id="quest-6-3" name="quest-6" value="3" required>
                  <label class="item__label item__label--3" for="quest-6-3">Беру с собой</label>

                  <input class="item__input" type="radio" id="quest-6-4" name="quest-6" value="4" required>
                  <label class="item__label item__label--4" for="quest-6-4">Дома</label>

                </div>
              </div>
              <div class="item__bottom">
                <button id="btn-6-7" class="btn btn--green">дальше</button>
              </div>
            </div>
          </div>
          <!-- .modal__item 6 -->

          <div id="modal-item-7" class="modal__item item">
            <div class="item__inner">
              <div class="item__top">

                <picture>
                  <source srcset="<?= SITE_DIR ?>assets/img/quest/smile7.webp" type="image/webp">
                  <img class="item__img" src="<?= SITE_DIR ?>assets/img/quest/smile7.png" alt="smile">
                </picture>
                <div class="item__desc">
                  <div class="item__num">
                    7/7
                  </div>
                  <div class="item__title">
                    Если кофе<br>с сиропом,<br>то с каким?
                  </div>
                </div>
                <div class="item__quest-block">

                  <input class="item__input" type="radio" id="quest-7-1" name="quest-7" value="1" required>
                  <label class="item__label item__label--1" for="quest-7-1">Карамельный</label>

                  <input class="item__input" type="radio" id="quest-7-2" name="quest-7" value="2" required>
                  <label class="item__label item__label--2" for="quest-7-2">Кокосовый</label>

                  <input class="item__input" type="radio" id="quest-7-3" name="quest-7" value="3" required>
                  <label class="item__label item__label--3" for="quest-7-3">Шоколадный</label>

                  <input class="item__input" type="radio" id="quest-7-4" name="quest-7" value="4" required>
                  <label class="item__label item__label--4" for="quest-7-4">Имбирный</label>

                </div>
              </div>
              <div class="item__bottom">
                <button id="btn-7-7" class="btn btn--green">дальше</button>
              </div>
            </div>
          </div>
          <!-- .modal__item 6 -->

        </div>
        <!-- .modal__container -->
      </div>
    </div>
    <!-- .modal-quest -->

    <div id="modal-result" class="modal modal-result">
      <div class="modal__inner">
        <div class="modal__container">

          <div id="modal-result-1" class="modal__result result">
            <div class="result__inner">
              <div class="result__round">
                <picture>
                  <source srcset="<?= SITE_DIR ?>assets/img/quest/text-tea.webp" type="image/webp">
                  <img class="result__round--tea" src="<?= SITE_DIR ?>assets/img/quest/text-tea.png"
                    alt="отчаянный чай">
                </picture>
                <div class="result__round-inner">
                  <picture>
                    <source srcset="<?= SITE_DIR ?>assets/img/quest/tea.webp" type="image/webp">
                    <img class="result__round-img" src="<?= SITE_DIR ?>assets/img/quest/tea.png" alt="отчаянный чай">
                  </picture>
                </div>
              </div>
              <div class="result__title">ты &mdash; чай</div>
              <div class="result__text">
                Горячий, бодрящий, тонизирующий чай.
                С вероятностью 99,9% ты не любитель
                кофе, а предпочитаешь другие напитки.
                Но, возможно, ты не попробовал
                еще свой идеальный кофе.
              </div>
              <div class="result__text result__text--light">
                Мы рекомендуем начать знакомство
                с кофейным миром с латте или капучино.
                Эти легкие молочные напитки точно тебе
                понравятся, а бариста может добавить
                в кофе сироп, который добавит напитку
                изюминки.
              </div>
              <div class="result__share-block share-block">
                <div class="share-block__title">поделиться результатом:</div>
                <div class="share-block__links">

                  <div class="share-block__link ya-share2" data-curtain data-size="l" data-shape="round"
                    data-color-scheme="blackwhite" data-services="vkontakte"
                    data-title="Я прошел Бодрый тест от Бодрого дня и теперь точно знаю, что Я - ОТЧАЯННЫЙ ЧАЙ"
                    data-description="Я прошёл Бодрый тест! Пройди и ты, давай узнаем сколько среди нас рафов:)"
                    data-image="https://investments.bodryi-den.ru/bitrix/templates/investments/img/ogimage.png"
                    data-url="https://portal.bodryi-den.ru/quest">
                  </div>

                  <div class="share-block__link ya-share2" data-curtain data-size="l" data-shape="round"
                    data-color-scheme="blackwhite" data-services="facebook"
                    data-title="Я прошел Бодрый тест от Бодрого дня и теперь точно знаю, что Я - ОТЧАЯННЫЙ ЧАЙ"
                    data-description="Я прошёл Бодрый тест! Пройди и ты, давай узнаем сколько среди нас рафов:)"
                    data-image="https://investments.bodryi-den.ru/bitrix/templates/investments/img/ogimage.png"
                    data-url="https://portal.bodryi-den.ru/quest" data-access-token:facebook="fb-token">
                  </div>

                  <div class=" share-block__link ya-share2" data-curtain data-size="l" data-shape="round"
                    data-color-scheme="blackwhite" data-services="twitter"
                    data-title="Я прошел Бодрый тест от Бодрого дня и теперь точно знаю, что Я - ОТЧАЯННЫЙ ЧАЙ"
                    data-description="Я прошёл Бодрый тест! Пройди и ты, давай узнаем сколько среди нас рафов:)"
                    data-image="https://investments.bodryi-den.ru/bitrix/templates/investments/img/ogimage.png"
                    data-url="https://portal.bodryi-den.ru/quest">
                  </div>

                </div>
                <div class="footer-note">
                  <span>не забывай сканировать QR-код<br>на своем стаканчике, там много всего<br>интересного :)</span>
                </div>
              </div>
            </div>
            <a class="footer-btn result__btn" href="/interview.php"
              onclick="ym(83929834, 'reachGoal', 'to_interview_from_button'); return true;">
              оставить отзыв
            </a>
          </div>
          <!-- .modal__result 1 -->

          <div id="modal-result-2" class="modal__result result">
            <div class="result__inner">
              <div class="result__round">
                <picture>
                  <source srcset="<?= SITE_DIR ?>assets/img/quest/text-raf.webp" type="image/webp">
                  <img class="result__round--raf" src="<?= SITE_DIR ?>assets/img/quest/text-raf.png" alt="граф раф">
                </picture>
                <div class="result__round-inner">
                  <picture>
                    <source srcset="<?= SITE_DIR ?>assets/img/quest/raf.webp" type="image/webp">
                    <img class="result__round-img" src="<?= SITE_DIR ?>assets/img/quest/raf.png" alt="граф раф">
                  </picture>
                </div>
              </div>
              <div class="result__title">ты &mdash; раф</div>
              <div class="result__text">
                В тебе идеальное сочетание эспрессо
                и сливок, крепости и нежности.
                ты сладкий, но, в то же время, бодрящий
                напиток.
              </div>
              <div class="result__text result__text--light">
                В нашем меню представлены несколько
                вариантов данного напитка:
                от классического, до раф кофе
                с добавлением имбирного сиропа.
                Пробуй и открывай новые кофейные
                вкусы.
              </div>
              <div class="result__share-block share-block">
                <div class="share-block__title">поделиться результатом:</div>
                <div class="share-block__links">

                  <div class="share-block__link ya-share2" data-curtain data-size="l" data-shape="round"
                    data-color-scheme="blackwhite" data-services="vkontakte"
                    data-title="Я прошел Бодрый тест от Бодрого дня и теперь точно знаю, что Я - ГРАФ РАФ"
                    data-description="Я прошёл Бодрый тест! Пройди и ты, давай узнаем сколько среди нас рафов:)"
                    data-image="https://investments.bodryi-den.ru/bitrix/templates/investments/img/ogimage.png"
                    data-url="https://portal.bodryi-den.ru/quest">
                  </div>

                  <div class="share-block__link ya-share2" data-curtain data-size="l" data-shape="round"
                    data-color-scheme="blackwhite" data-services="facebook"
                    data-title="Я прошел Бодрый тест от Бодрого дня и теперь точно знаю, что Я - ГРАФ РАФ"
                    data-description="Я прошёл Бодрый тест! Пройди и ты, давай узнаем сколько среди нас рафов:)"
                    data-image="https://investments.bodryi-den.ru/bitrix/templates/investments/img/ogimage.png"
                    data-url="https://portal.bodryi-den.ru/quest" data-access-token:facebook="fb-token">
                  </div>

                  <div class=" share-block__link ya-share2" data-curtain data-size="l" data-shape="round"
                    data-color-scheme="blackwhite" data-services="twitter"
                    data-title="Я прошел Бодрый тест от Бодрого дня и теперь точно знаю, что Я - ГРАФ РАФ"
                    data-description="Я прошёл Бодрый тест! Пройди и ты, давай узнаем сколько среди нас рафов:)"
                    data-image="https://investments.bodryi-den.ru/bitrix/templates/investments/img/ogimage.png"
                    data-url="https://portal.bodryi-den.ru/quest">
                  </div>

                </div>
                <div class="footer-note">
                  <span>не забывай сканировать QR-код<br>на своем стаканчике, там много всего<br>интересного :)</span>
                </div>
              </div>
            </div>
            <a class="footer-btn result__btn" href="/interview.php"
              onclick="ym(83929834, 'reachGoal', 'to_interview_from_button'); return true;">
              оставить отзыв
            </a>
          </div>
          <!-- .modal__result 2 -->

          <div id="modal-result-3" class="modal__result result">
            <div class="result__inner">
              <div class="result__round">
                <picture>
                  <source srcset="<?= SITE_DIR ?>assets/img/quest/text-cappuccino.webp" type="image/webp">
                  <img class="result__round--cappuccino" src="<?= SITE_DIR ?>assets/img/quest/text-cappuccino.png"
                    alt="идеальный капучино">
                </picture>
                <div class="result__round-inner">
                  <picture>
                    <source srcset="<?= SITE_DIR ?>assets/img/quest/cappuccino.webp" type="image/webp">
                    <img class="result__round-img" src="<?= SITE_DIR ?>assets/img/quest/cappuccino.png"
                      alt="идеальный капучино">
                  </picture>
                </div>
              </div>
              <div class="result__title">ты &mdash; капучино</div>
              <div class="result__text">
                Ты нежный снаружи, но крепкий внутри.
                Капучино — идеальный напиток на любое
                время суток. Ты точно большой любитель
                кофе и мы рады твоему выбору.
              </div>
              <div class="result__share-block share-block">
                <div class="share-block__title">поделиться результатом:</div>
                <div class="share-block__links">

                  <div class="share-block__link ya-share2" data-curtain data-size="l" data-shape="round"
                    data-color-scheme="blackwhite" data-services="vkontakte"
                    data-title="Я прошел Бодрый тест от Бодрого дня и теперь точно знаю, что Я - ИДЕАЛЬНЫЙ КАПУЧИНО"
                    data-description="Я прошёл Бодрый тест! Пройди и ты, давай узнаем сколько среди нас рафов:)"
                    data-image="https://investments.bodryi-den.ru/bitrix/templates/investments/img/ogimage.png"
                    data-url="https://portal.bodryi-den.ru/quest">
                  </div>

                  <div class="share-block__link ya-share2" data-curtain data-size="l" data-shape="round"
                    data-color-scheme="blackwhite" data-services="facebook"
                    data-title="Я прошел Бодрый тест от Бодрого дня и теперь точно знаю, что Я - ИДЕАЛЬНЫЙ КАПУЧИНО"
                    data-description="Я прошёл Бодрый тест! Пройди и ты, давай узнаем сколько среди нас рафов:)"
                    data-image="https://investments.bodryi-den.ru/bitrix/templates/investments/img/ogimage.png"
                    data-url="https://portal.bodryi-den.ru/quest" data-access-token:facebook="fb-token">
                  </div>

                  <div class=" share-block__link ya-share2" data-curtain data-size="l" data-shape="round"
                    data-color-scheme="blackwhite" data-services="twitter"
                    data-title="Я прошел Бодрый тест от Бодрого дня и теперь точно знаю, что Я - ИДЕАЛЬНЫЙ КАПУЧИНО"
                    data-description="Я прошёл Бодрый тест! Пройди и ты, давай узнаем сколько среди нас рафов:)"
                    data-image="https://investments.bodryi-den.ru/bitrix/templates/investments/img/ogimage.png"
                    data-url="https://portal.bodryi-den.ru/quest">
                  </div>

                </div>
                <div class="footer-note">
                  <span>не забывай сканировать QR-код<br>на своем стаканчике, там много всего<br>интересного :)</span>
                </div>
              </div>
            </div>
            <a class="footer-btn result__btn" href="/interview.php"
              onclick="ym(83929834, 'reachGoal', 'to_interview_from_button'); return true;">
              оставить отзыв
            </a>
          </div>
          <!-- .modal__result 3 -->

          <div id="modal-result-4" class="modal__result result">
            <div class="result__inner">
              <div class="result__round">
                <picture>
                  <source srcset="<?= SITE_DIR ?>assets/img/quest/text-americano.webp" type="image/webp">
                  <img class="result__round--americano" src="<?= SITE_DIR ?>assets/img/quest/text-americano.png"
                    alt="старший американо">
                </picture>
                <div class="result__round-inner">
                  <picture>
                    <source srcset="<?= SITE_DIR ?>assets/img/quest/americano.webp" type="image/webp">
                    <img class="result__round-img" src="<?= SITE_DIR ?>assets/img/quest/americano.png"
                      alt="старший американо">
                  </picture>
                </div>
              </div>
              <div class="result__title">ты &mdash; американо</div>
              <div class="result__text">
                Ты кофеман со стажем и точно знаешь,
                что хочешь. Ты уже много чего пробовал
                в этой жизни и карамельным сиропом,
                взбитыми сливками твое сердце точно
                не покорить. Ты любишь чистый
                вкус кофе и ценишь сдержанность
                и минимализм.
              </div>
              <div class="result__share-block share-block">
                <div class="share-block__title">поделиться результатом:</div>
                <div class="share-block__links">

                  <div class="share-block__link ya-share2" data-curtain data-size="l" data-shape="round"
                    data-color-scheme="blackwhite" data-services="vkontakte"
                    data-title="Я прошел Бодрый тест от Бодрого дня и теперь точно знаю, что Я - СТАРШИЙ АМЕРИКАНО"
                    data-description="Я прошёл Бодрый тест! Пройди и ты, давай узнаем сколько среди нас рафов:)"
                    data-image="https://investments.bodryi-den.ru/bitrix/templates/investments/img/ogimage.png"
                    data-url="https://portal.bodryi-den.ru/quest">
                  </div>

                  <div class="share-block__link ya-share2" data-curtain data-size="l" data-shape="round"
                    data-color-scheme="blackwhite" data-services="facebook"
                    data-title="Я прошел Бодрый тест от Бодрого дня и теперь точно знаю, что Я - СТАРШИЙ АМЕРИКАНО"
                    data-description="Я прошёл Бодрый тест! Пройди и ты, давай узнаем сколько среди нас рафов:)"
                    data-image="https://investments.bodryi-den.ru/bitrix/templates/investments/img/ogimage.png"
                    data-url="https://portal.bodryi-den.ru/quest" data-access-token:facebook="fb-token">
                  </div>

                  <div class=" share-block__link ya-share2" data-curtain data-size="l" data-shape="round"
                    data-color-scheme="blackwhite" data-services="twitter"
                    data-title="Я прошел Бодрый тест от Бодрого дня и теперь точно знаю, что Я - СТАРШИЙ АМЕРИКАНО"
                    data-description="Я прошёл Бодрый тест! Пройди и ты, давай узнаем сколько среди нас рафов:)"
                    data-image="https://investments.bodryi-den.ru/bitrix/templates/investments/img/ogimage.png"
                    data-url="https://portal.bodryi-den.ru/quest">
                  </div>

                </div>
                <div class="footer-note">
                  <span>не забывай сканировать QR-код<br>на своем стаканчике, там много всего<br>интересного :)</span>
                </div>
              </div>
            </div>
            <a class="footer-btn result__btn" href="/interview.php"
              onclick="ym(83929834, 'reachGoal', 'to_interview_from_button'); return true;">
              оставить отзыв
            </a>
          </div>
          <!-- .modal__result 4 -->

          <div id="modal-result-5" class="modal__result result">
            <div class="result__inner">
              <div class="result__round">
                <picture>
                  <source srcset="<?= SITE_DIR ?>assets/img/quest/text-black.webp" type="image/webp">
                  <img class="result__round--black" src="<?= SITE_DIR ?>assets/img/quest/text-black.png"
                    alt="фирмовый стилёвый">
                </picture>
                <div class="result__round-inner result__round-inner--black">
                  <picture>
                    <source srcset="<?= SITE_DIR ?>assets/img/quest/black.webp" type="image/webp">
                    <img class="result__round-img result__round-img--black"
                      src="<?= SITE_DIR ?>assets/img/quest/black.png" alt="фирмовый стилёвый">
                  </picture>
                </div>
              </div>
              <div class="result__title">ты &mdash; фирменный</div>
              <div class="result__text">
                Тебя нельзя отнести ни к одному
                классическому напитку. Ты яркий,
                неординарный человек и нам очень
                приятно, что ты наш гость :3
              </div>
              <div class="result__text result__text--light">
                В меню много необычных фирменных
                напитков - пробуй и открывай новые вкусы.
              </div>
              <div class="result__share-block share-block">
                <div class="share-block__title">поделиться результатом:</div>
                <div class="share-block__links">

                  <div class="share-block__link ya-share2" data-curtain data-size="l" data-shape="round"
                    data-color-scheme="blackwhite" data-services="vkontakte"
                    data-title="Я прошел Бодрый тест от Бодрого дня и теперь точно знаю, что Я - ФИРМОВЫЙ СТИЛЁВЫЙ"
                    data-description="Я прошёл Бодрый тест! Пройди и ты, давай узнаем сколько среди нас рафов:)"
                    data-image="https://investments.bodryi-den.ru/bitrix/templates/investments/img/ogimage.png"
                    data-url="https://portal.bodryi-den.ru/quest">
                  </div>

                  <div class="share-block__link ya-share2" data-curtain data-size="l" data-shape="round"
                    data-color-scheme="blackwhite" data-services="facebook"
                    data-title="Я прошел Бодрый тест от Бодрого дня и теперь точно знаю, что Я - ФИРМОВЫЙ СТИЛЁВЫЙ"
                    data-description="Я прошёл Бодрый тест! Пройди и ты, давай узнаем сколько среди нас рафов:)"
                    data-image="https://investments.bodryi-den.ru/bitrix/templates/investments/img/ogimage.png"
                    data-url="https://portal.bodryi-den.ru/quest" data-access-token:facebook="fb-token">
                  </div>

                  <div class=" share-block__link ya-share2" data-curtain data-size="l" data-shape="round"
                    data-color-scheme="blackwhite" data-services="twitter"
                    data-title="Я прошел Бодрый тест от Бодрого дня и теперь точно знаю, что Я - ФИРМОВЫЙ СТИЛЁВЫЙ"
                    data-description="Я прошёл Бодрый тест! Пройди и ты, давай узнаем сколько среди нас рафов:)"
                    data-image="https://investments.bodryi-den.ru/bitrix/templates/investments/img/ogimage.png"
                    data-url="https://portal.bodryi-den.ru/quest">
                  </div>

                </div>
                <div class="footer-note">
                  <span>не забывай сканировать QR-код<br>на своем стаканчике, там много всего<br>интересного :)</span>
                </div>
              </div>
            </div>
            <a class="footer-btn result__btn" href="/interview.php"
              onclick="ym(83929834, 'reachGoal', 'to_interview_from_button'); return true;">
              оставить отзыв
            </a>
          </div>
          <!-- .modal__result 5 -->
        </div>
        <!-- .modal__container -->
      </div>
      <!-- .modal__inner -->
    </div>
    <!-- .modal-result -->

  </div>
  <!-- .wrapper -->
</body>

<script type="text/javascript" src="<?= SITE_DIR ?>assets/js/anim.js"></script>
<script type="text/javascript" src="<?= SITE_DIR ?>assets/js/js.cookie.js"></script>
<script type="text/javascript" src="<?= SITE_DIR ?>assets/js/jquery.js"></script>
<script type="text/javascript" src=" https://yastatic.net/share2/share.js"></script>
<script type="text/javascript" src="<?= SITE_DIR ?>assets/js/quest.js?ver=1.6"></script>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>