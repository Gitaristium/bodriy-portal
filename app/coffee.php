<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Бодрый кофе");
?>
<link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/rotate-screen.png">
<link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/interview/smile.png">
<link rel="stylesheet" href="<?= SITE_DIR ?>assets/css/coffee.css">
<script type="text/javascript">
  var
    search = window.location.search,
    hash = '';
  if (window.location.hash) {
    hash = "#" + window.location.hash;
  }

  if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i.test(
      navigator.userAgent)) {

    location = "/coffee/" + search;
  } else {
    location = "/" + search;
  }
</script>
</head>

<body>
</body>

<!-- <script type="text/javascript" src="<?= SITE_DIR ?>assets/js/anim.js"></script> -->
<script type="text/javascript" src="<?= SITE_DIR ?>assets/js/jquery.js"></script>
<script type="text/javascript" src="<?= SITE_DIR ?>assets/js/js.cookie.js"></script>
<script type="text/javascript" src="<?= SITE_DIR ?>assets/js/coffee.js"></script>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>