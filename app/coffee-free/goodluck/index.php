<script type="text/javascript" src="/assets/js/jquery.js"></script>
<script type="text/javascript" src="/assets/js/js.cookie.js"></script>
<script type="text/javascript">
  Cookies.set('qr', 'y', {
    path: '/coffee-free'
  });
  location = window.location.origin + "/coffee-free?utm_medium=qrcode&utm_referrer=" + encodeURIComponent(document.referrer);
</script>