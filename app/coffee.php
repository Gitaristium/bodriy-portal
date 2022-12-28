<meta name="referrer" content="no-referrer">
<script type="text/javascript">
var search = '';

if (window.location.search) {
  search = window.location.search;
}

if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|BB|PlayBook|IEMobile|Windows Phone|Kindle|Silk|Opera Mini/i.test(
    navigator.userAgent)) {
  location = window.location.origin + "/coffee/" + search;
} else {
  window.location = '/oops.php' + search;
}
</script>