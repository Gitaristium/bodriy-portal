<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Скачивай");
?>
<meta name="theme-color" content="#8f0b34">
<link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/rotate-screen.png">
<link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/downloads/black.webp">
<link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/downloads/file-download-solid.svg">
<link rel="stylesheet" href="<?= SITE_DIR ?>assets/css/slick.css">
<link rel="stylesheet" href="<?= SITE_DIR ?>assets/css/downloads.css">
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
    <picture>
      <source srcset="<?= SITE_DIR ?>assets/img/downloads/black.webp" type="image/webp">
      <img id="black-cup" class="wrapper__img" src="<?= SITE_DIR ?>assets/img/downloads/black.png">
    </picture>
    <section id="content" class="section">
      <div class="section__inner">
        <div class="section__container">
          <div class="section__title">
            <span>
              у нас есть
            </span>
            <span>
              для тебя:
            </span>
          </div>
          <div class="section__links">
            <div class="section__link section__link--wallpaper">Обои на смартфон</div>
            <div class="section__link section__link--stickers">Стикеры</div>
            <div class="section__link section__link--challenges">Челленджи</div>
            <div class="section__link section__link--recipes">Рецепты кофе для дома</div>
          </div>
          <div class="footer-note">
            <span>не забывай сканировать QR-код<br>на своем стаканчике, там много всего<br>интересного :)</span>
          </div>
        </div>
        <!-- .section__container -->
        <a class="footer-btn" href="/interview.php">
          оставить отзыв
        </a>
      </div>
      <!-- .section__inner -->
    </section>

    <?php CModule::IncludeModule("iblock"); ?>

    <div id="modal-wallpaper" class="modal modal--wallpaper">

      <div class="section__inner modal__inner">
        <div class="section__container modal__container">
          <div class="section__title modal__title">
            Обои на смартфон
          </div>
          <div class="section__items modal__items slider-small">
            <?php $items = CIBlockElement::GetList(
              array("SORT" => "ASC"),
              array("IBLOCK_ID" => 25, "SECTION_ID" => 23),
              false,
              false,
              array('ID')
            );
            while ($item = $items->GetNext()) {
              $list = CIBlockElement::GetProperty('25', $item['ID'], array("sort" => "asc"), array("CODE" => "files"));
              if ($listItem = $list->GetNext()) {
                $value = $listItem['VALUE'];
                $file = CFile::GetFileArray($value);
                $src = $file['SRC'];
                echo '<img class="modal__item" data-lazy="' . $src . '">';
              }
            } ?>
          </div>
          <div class="section__items modal__items slider-big">
            <?php $items = CIBlockElement::GetList(
              array("SORT" => "ASC"),
              array("IBLOCK_ID" => 25, "SECTION_ID" => 23),
              false,
              false,
              array('ID')
            );
            while ($item = $items->GetNext()) {
              $list = CIBlockElement::GetProperty('25', $item['ID'], array("sort" => "asc"), array("CODE" => "files"));
              if ($listItem = $list->GetNext()) {
                $value = $listItem['VALUE'];
                $file = CFile::GetFileArray($value);
                $src = $file['SRC'];
                echo '
              <div class="modal__item">
                <img class="modal__img" data-lazy="' . $src . '">
                <a class="btn btn--green modal__img-link" href="' . $src . '" target="_blank">скачать</a>
              </div>
              ';
              }
            } ?>
          </div>
        </div>
        <!-- .modal__container -->
        <div class="footer-btn back">назад</div>
      </div>
      <!-- .modal__inner -->
    </div>
    <!-- .modal--wallpaper -->

    <div id="modal-stickers" class="modal modal--stickers">
      <div class="section__inner modal__inner">
        <div class="section__container modal__container">
          <div class="section__title modal__title">
            Стикеры
          </div>
          <div class="section__links modal__links">
            <?php $items = CIBlockElement::GetList(
              array("NAME" => "ASC"),
              array("IBLOCK_ID" => 25, "SECTION_ID" => 25),
              false,
              false,
              array('ID', 'NAME')
            );
            while ($item = $items->GetNext()) {
              $name = $item['NAME'];
              $list = CIBlockElement::GetProperty('25', $item['ID'], array("sort" => "asc"), array("CODE" => "files"));
              if ($listItem = $list->GetNext()) {
                $value = $listItem['VALUE'];
                $file = CFile::GetFileArray($value);
                $src = $file['SRC'];
                echo '<a class="modal__link" href="' . $src . '" target="_blank">' . $name . '</a>';
              }
            } ?>
          </div>
        </div>
        <!-- .modal__container -->
        <div class="footer-btn back">назад</div>
      </div>
      <!-- .modal__inner -->
    </div>
    <!-- .modal--stickers -->

    <div id="modal-challenges" class="modal modal--challenges">
      <div class="section__inner modal__inner">
        <div class="section__container modal__container">
          <div class="section__title modal__title">
            Челленджи
          </div>
          <div class="section__links modal__links">
            <?php $items = CIBlockElement::GetList(
              array("NAME" => "ASC"),
              array("IBLOCK_ID" => 25, "SECTION_ID" => 26),
              false,
              false,
              array('ID', 'NAME')
            );
            while ($item = $items->GetNext()) {
              $name = $item['NAME'];
              $list = CIBlockElement::GetProperty('25', $item['ID'], array("sort" => "asc"), array("CODE" => "files"));
              if ($listItem = $list->GetNext()) {
                $value = $listItem['VALUE'];
                $file = CFile::GetFileArray($value);
                $src = $file['SRC'];
                echo '<a class="modal__link" href="' . $src . '" target="_blank">' . $name . '</a>';
              }
            } ?>
          </div>
        </div>
        <!-- .modal__container -->
        <div class="footer-btn back">назад</div>
      </div>
      <!-- .modal__inner -->
    </div>
    <!-- .modal--challenges -->

    <div id="modal-recipes" class="modal modal--recipes">
      <div class="section__inner modal__inner">
        <div class="section__container modal__container">
          <div class="section__title modal__title">
            Рецепты кофе для дома
          </div>
          <div class="section__links modal__links">
            <?php $items = CIBlockElement::GetList(
              array("NAME" => "ASC"),
              array("IBLOCK_ID" => 25, "SECTION_ID" => 24),
              false,
              false,
              array('ID', 'NAME')
            );
            while ($item = $items->GetNext()) {
              $name = $item['NAME'];
              $list = CIBlockElement::GetProperty('25', $item['ID'], array("sort" => "asc"), array("CODE" => "files"));
              if ($listItem = $list->GetNext()) {
                $value = $listItem['VALUE'];
                $file = CFile::GetFileArray($value);
                $src = $file['SRC'];
                echo '<a class="modal__link" href="' . $src . '" target="_blank">' . $name . '</a>';
              }
            } ?>
          </div>
        </div>
        <!-- .modal__container -->
        <div class="footer-btn back">назад</div>
      </div>
      <!-- .modal__inner -->
    </div>
    <!-- .modal--recipes -->
  </div>
  <!-- .wrapper -->
</body>

<!-- <script type="text/javascript" src="<?= SITE_DIR ?>assets/js/anim.js"></script> -->
<script type="text/javascript" src="<?= SITE_DIR ?>assets/js/jquery.js"></script>
<script type="text/javascript" src="<?= SITE_DIR ?>assets/js/js.cookie.js"></script>
<script type="text/javascript" src="<?= SITE_DIR ?>assets/js/slick.js"></script>
<script type="text/javascript" src="<?= SITE_DIR ?>assets/js/downloads.js"></script>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>