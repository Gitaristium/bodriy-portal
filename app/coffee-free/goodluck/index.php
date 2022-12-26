<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Забери свой бесплатный кофе!");
?>
<script type="text/javascript" src="<?= SITE_DIR ?>assets/js/jquery.js"></script>
<script type="text/javascript" src="<?= SITE_DIR ?>assets/js/js.cookie.js"></script>
<script type="text/javascript">
Cookies.set('qr', 'y', {
  path: '/coffee-free'
});
Cookies.set('redirect', 'y', {
  path: '/coffee-free'
});
ym(83929834, 'hit', '/coffee-free?utm_medium=qr', {
  params: {
    title: 'Забери свой бесплатный кофе!',
    //referer: '/coffee-free?utm_medium=qr'
  }
});
location = "/coffee-free?utm_medium=qr";
</script>
</head>

<body>
</body>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>