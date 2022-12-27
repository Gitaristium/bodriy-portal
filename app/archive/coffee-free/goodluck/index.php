<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Забери кофе бесплатно");
?>
<script type="text/javascript" src="<?= SITE_DIR ?>assets/js/jquery.js"></script>
<script type="text/javascript" src="<?= SITE_DIR ?>assets/js/js.cookie.js"></script>
<script type="text/javascript">
  Cookies.set('qr', 'y', {
    path: '/coffee-free'
  });
  location = window.location.origin + "/coffee-free";
</script>
</head>

<body>
</body>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>