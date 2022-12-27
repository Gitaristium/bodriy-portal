<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Бодрый портал - упс!");
?>
<!-- <script type="text/javascript" src="<?= SITE_DIR ?>assets/js/js.cookie.js"></script> -->
<script type="text/javascript">
window.history.replaceState(null, null, window.location.origin + '/' + window.location.search);
</script>
<link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/qr-code.png">
<link rel="stylesheet" href="<?= SITE_DIR ?>assets/css/index.css?ver=1.6">
</head>

<body>
  <div id="panel">
    <? $APPLICATION->ShowPanel(); ?>
  </div>
  <section>
    <div class="block">
      <div class="block__desc">
        <div class="block__title">
          упс!
        </div>
        <div class="block__text">
          Портал работает<br>только на смартфоне.<br>Отсканируй этот<br> QR-код камерой<br>своего телефона :)
        </div>
      </div>
    </div>
    <div class="block">
      <img src="<?= SITE_DIR ?>assets/img/qr-code.png" alt="QR-код">
    </div>
  </section>
</body>

<!-- <script type="text/javascript" src="<?= SITE_DIR ?>assets/js/jquery.js"></script> -->
<!-- <script type="text/javascript" src="<?= SITE_DIR ?>assets/js/js.cookie.js"></script> -->
<!-- <script type="text/javascript" src="<?= SITE_DIR ?>assets/js/index.js"></script> -->

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>