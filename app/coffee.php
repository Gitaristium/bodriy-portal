<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Бодрый кофе");
?>
<link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/rotate-screen.png">
<link rel="preload" as="image" href="<?= SITE_DIR ?>assets/img/interview/smile.png">
<link rel="stylesheet" href="<?= SITE_DIR ?>assets/css/coffee.css?ver=1.6">
<script type="text/javascript">
if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i.test(
    navigator.userAgent)) {
  location = window.location.origin + "/coffee/" + window.location.search;
} else {
  location = window.location.origin + '/' + window.location.search;
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