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
        </div>
      </div>

    </div>
    <!-- .content -->

    <div class="modal-delete">
      <div class="modal-delete__inner">
        <div class="modal-delete__text">Точно удалить?</div>
        <div class="flex__item-buttons">
          <button class="flex__item-btn flex__item-btn--unpublic modal-btn-unpublic">отмена</button>
          <button class="flex__item-btn flex__item-btn--delete modal-brn-delete">удалить</button>
        </div>
      </div>
    </div>
    <!-- .modal-delete -->

  </div>
</body>
<script type="text/javascript" src="<?= SITE_DIR ?>assets/js/jquery.js"></script>
<script type="text/javascript" src="<?= SITE_DIR ?>assets/js/season-2022-winter-data.js"></script>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>