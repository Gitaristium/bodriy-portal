<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Бодрый портал - главная");
?>
<script type="text/javascript" src="<?= SITE_DIR ?>assets/js/js.cookie.js"></script>
<script type="text/javascript">
ym(83929834, 'hit', '/?utm_medium=qr', {
  params: {
    title: 'Бодрый портал - главная',
    //referer: '/?utm_medium=qr'
  }
});
Cookies.set('redirect', 'y', {
  expires: 7,
  path: '/'
});
location = "/?utm_medium=qr";
</script>
</head>

<body>
</body>

<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>