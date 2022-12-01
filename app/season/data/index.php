<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Новогодние истории");
?>
<meta name="theme-color" content="#ff7a00">
<link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/interview/smile.png">
<link rel="stylesheet" href="<?= SITE_DIR ?>assets/css/season-2022-winter-data.css">
</head>

<body>
  <div class="wrapper">
    <div class="preload">
      <picture>
        <source srcset="<?= SITE_DIR ?>assets/img/interview/smile.webp" type="image/webp">
        <img class="preload__img" src="<?= SITE_DIR ?>assets/img/interview/smile.png" alt="smile">
      </picture>
      грузим истории
    </div><!-- .preload -->

    <header class="header">
      <nav class="nav">
        <a class="nav__link nav__link--one active" href="#">на модерации</a>
        <a class="nav__link nav__link--two" href="#">опубликованные</a>
      </nav>
    </header>

    <div class="content">

      <div class="tab tab--one active">
        <div class="flex">

        </div>
      </div>

      <div class="tab tab--two">
        <div class="flex">
          <!-- <div class="flex__item">
            <div class="flex__item-text">
              Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является
              стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник
              создал большую коллекцию
              размеров и форм шрифтов, используя Lorem Ipsum для распечатки образцов. Lorem Ipsum не только успешно
              пережил без
              заметных изменений пять веков, но и перешагнул в электронный дизайн. Его популяризации в новое время
              послужили публикация
              листов Letraset с образцами Lorem Ipsum в 60-х годах и, в более недавнее время, программы электронной
              вёрстки типа Aldus
              PageMaker, в шаблонах которых используется Lorem Ipsum.
            </div>
            <div class="flex__item-buttons">
              <button class="flex__item-btn flex__item-btn--unpublic">в архив</button>
              <button class="flex__item-btn flex__item-btn--delete">удалить</button>
            </div>
          </div> -->
        </div>
      </div>

    </div>
  </div>
</body>
<script type="text/javascript" src="<?= SITE_DIR ?>assets/js/jquery.js"></script>
<script type="text/javascript" src="<?= SITE_DIR ?>assets/js/season-2022-winter-data.js"></script>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>